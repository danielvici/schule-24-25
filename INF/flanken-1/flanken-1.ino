#include <Wire.h>
#include "SSD1306Wire.h"

#define SCREEN_WIDTH 128  // OLED Display Breite, in Pixel
#define SCREEN_HEIGHT 64  // OLED Display Höhe, in Pixel

SSD1306Wire display(0x3c, 21, 22);  // 21=SDA 22=SCL I2C-Bus Pins

// ***** globale Variablen *************************************************
long showtime;
int x, y;  // Pixel-Koordinaten für das Display

// Variablen für die Eingabe
char name[100];  // Array für den Namen, maximal 99 Zeichen + null-terminierend
int i = 0;       // Index für die Zeichen im Array

// ***** Initialisierung **************************************************
void setup() {
  Serial.begin(9600);  // Seriellen Monitor starten
  display.init();  // Initialisierung des OLED
  display.flipScreenVertically();  // Ausrichtung passend zur Platine
  display.setFont(ArialMT_Plain_16);  // Schriftgröße einstellen
  display.drawString(0, 0, "INPUT NAME");  // Text auf OLED anzeigen
  display.setTextAlignment(TEXT_ALIGN_CENTER);  // Text zentrieren
  display.display();  // Anzeige aktualisieren
  delay(5000);  // 5 Sekunden warten
  display.setTextAlignment(TEXT_ALIGN_LEFT);  // Text linksbündig setzen
  x = 2;  // Startposition setzen
  y = 2;
}

// ***** Endlosschleife ***************************************************
void loop() {
  if (Serial.available() > 0) {
    char incomingByte = Serial.read();  // Ein Zeichen von der seriellen Schnittstelle lesen
    
    if (incomingByte == '\n' || incomingByte == '\r') {  // Wenn Enter (newline oder carriage return) gedrückt wurde
      name[i] = '\0';  // Null-Terminierung für die Zeichenkette
      Serial.print("Du heißt: ");
      Serial.println(name);  // Den Namen über den seriellen Monitor ausgeben
      i = 0;  // Den Index zurücksetzen, um für den nächsten Namen bereit zu sein
    } else {
      if (i < sizeof(name) - 1) {  // Sicherstellen, dass die Länge des Namens nicht überschritten wird
        name[i] = incomingByte;  // Das Zeichen in das Array einfügen
        i++;  // Den Index erhöhen
      }
    }
  }
}
