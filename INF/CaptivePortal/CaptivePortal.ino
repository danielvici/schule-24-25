/* Basisprogramm für ein Captive Portal
 * Grundversion, die bei einer Verbindung auf dem Client den Browser öffnet
 * und eine Startseite darstellt.
 * Der HTML-Code ist rudimentär, um das Beispiel einfach zu halten
 * Der Webserver antwortet auf die url / mit der Captive-Seite, bei index.html
 * wird eine andere Webseite ausgegeben, die über eine Funktion generiert wird.
 * Version 1.0 
 * Getestet mit Android-Handy und Android-Tablet => ok
 * Gestestet mit Windows-PC => Browser versucht auf eine Microsoft-Adresse umzuleiten
 */
#define __Version__ "V1.0 CaptivePortal"
#include <Arduino.h>
#include <WiFi.h>
#include <WebServer.h>
#include <DNSServer.h>

const char* ssid = "wlan4win";  // SSID des Netzwerks
const char* password = "lol4win";          // Passwort

const byte DNS_PORT = 53;
DNSServer dnsServer;
WebServer server(80);

// IP-Adresse des ESP32
IPAddress apIP(192, 168, 4, 1);

// HTML für die Captive Portal-Seite
void handleRoot() {
  server.send(200, "text/html", "<h1>Willkommen zum ESP32 Captive Portal!</h1><p>Du bist jetzt verbunden, jetzt zur <a href=/index.html>Hautpseite</a> wechseln.</p>");
}

void handleNotFound() {
  server.sendHeader("Location", "/", true);  // Redirect zur Root-Seite
  server.send(302, "text/plain", "");
}

void handleMain() {
  server.send(200, "text/html", getPage());
}

void setup() {
  Serial.begin(115200);

  // Access Point starten
  WiFi.softAP(ssid, password);
  // IP-Adresse des ESP, Gateway-Adresse=ESP, Netzmaske
  WiFi.softAPConfig(apIP, apIP, IPAddress(255, 255, 255, 0));
  Serial.println("Access Point gestartet.");
  Serial.println(WiFi.softAPIP());

  // DNS-Server starten und alle Domains zur AP-IP weiterleiten
  dnsServer.start(DNS_PORT, "*", apIP);

  // HTTP-Server konfigurieren
  server.on("/", handleRoot);
  server.on("/index.html", handleMain);
  server.onNotFound(handleNotFound);
  server.begin();
  Serial.println("HTTP-Server gestartet.");
}

void loop() {
  uint32_t currentMillis = millis();
  static uint32_t lastMillis;
  static uint8_t currentClientCount, lastClientCount;

  dnsServer.processNextRequest();  // DNS-Anfragen verarbeiten
  server.handleClient();           // HTTP-Anfragen verarbeiten

  // Optional: 1x pro Sekunde nachschauen, ob sich an der Anzahl der Clients was geändert hat
  if (currentMillis - lastMillis >= 1000) { 
    lastMillis = currentMillis;
    currentClientCount = WiFi.softAPgetStationNum();

    // Überprüfen, ob sich die Anzahl der Clients geändert hat
    if (currentClientCount != lastClientCount) {
      Serial.printf("Anzahl verbundener Clients: %d\n", currentClientCount);

      // Optional: Aktion für neue Clients
      if (currentClientCount > lastClientCount) {
        Serial.println("Ein neuer Client hat sich verbunden!");
      }

      // Optional: Aktion für getrennte Clients
      if (currentClientCount < lastClientCount) {
        Serial.println("Ein Client hat sich getrennt!");
      }

      lastClientCount = currentClientCount;  // Aktualisiere den letzten Stand
    }
  }
}

String getPage() {
  // zunächst nur ganz einfacher HTML-Code, es fehlt der komplette Header, CSS und vieles mehr
  String page = "<h1>ESP32 Steuerung</h1><p>Setze ein Lesezeichen auf diese Seite</p>";
  page += "<p>oder gibt die Adresse 192.168.4.1 im Browser ein.</p>";
  return page;
}