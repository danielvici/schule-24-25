/* INFP-Übungen zum I2C-Bus  -  https://kurzelinks.de/wvs_esp_12 
 * Benötigte Bibliotheken
 * Wire.h (integriert)
 * die 2 Bibliotheken müssen in Arduino noch hinzugefügt werden:
 * https://github.com/ThingPulse/esp8266-oled-ssd1306
 * https://github.com/johnrickman/LiquidCrystal_I2C 
 * Fügt zur Schaltung das Bauteil "LCD 16x2 (I2C)" hinzu und ergänzt
 * die Verdrahtung. Danach die Serial.print-Ausgaben ersetzten durch
 * Ausgaben auf dem Text-Display
 * Gute Zusammenfassung zum Display
 * https://docs.wokwi.com/parts/wokwi-lcd1602 
 * https://sprut.de/electronic/lcd/index.htm 
 */
#include <Wire.h>
#include "SSD1306Wire.h"
#include <LiquidCrystal_I2C.h>    // Die Bibliothek muss noch installiert werden!

//***** Portpins für Ein-/Ausgänge ***************************************
const int Enc_A = 34, Enc_B = 35, Enc_Taster = 0, NEO_Pin=26;
const int LED_rot = 32, LED_gruen = 33, Taster2 = 2, Taster4 = 4;

//***** Objekt für Displays anlegen
SSD1306Wire display(0x3c, SDA, SCL);
LiquidCrystal_I2C lcd(0x27, 16, 2); // Display mit 2 Zeilen, 16 Zeichen, I2C-Adresse 0x27 (PCF8574!)

// ***** Globale Variablen ************************************************
bool T2_neu, T2_alt, T4_neu, T4_alt;  // für Flankenerkennung
unsigned long currentMillis, nextMillis;
int Digitalwert;

// ***** Initialisierung **************************************************
void setup() {
  Serial.begin(115200);            // Serielle Schnittstelle mit 115200Bit/s
  pinMode(LED_rot, OUTPUT);        // die LEDs beginnen danach
  pinMode(LED_gruen, OUTPUT);      // zu leuchten!
  digitalWrite(LED_rot, HIGH);     // also beide ausschalten
  digitalWrite(LED_gruen, HIGH);
  pinMode(Taster2, INPUT_PULLUP); // Taster brauchen hier den
  pinMode(Taster4, INPUT_PULLUP); // Pullup-Widerstand
  
  // SSD1306 Display initialisieren
  display.init();
  display.flipScreenVertically();
  display.setContrast(255);
  display.setFont(ArialMT_Plain_16);

  // I2C Textdisplay 1602 initialisieren, Text ausgeben
  // siehe Arduino-Beispiel "Hello World"
  lcd.init();
  // Print a message to the LCD.
  lcd.backlight();
  lcd.setCursor(0,0);
  lcd.print("danielvici.com");
}

// ***** Endlosschleife ***************************************************
void loop() {
  currentMillis = millis( );
  if ( currentMillis >= nextMillis ) {
    nextMillis = currentMillis + 1000;    // 1x pro Sekunde Messen
    Digitalwert = analogRead(A0);         // Poti einlesen
    Serial.printf("Digitalwert: %d\n", Digitalwert); 
    display.clear();
    display.drawString(16, 8, "Digitalwert");
    char buf[5];
    sprintf(buf, "%4d", Digitalwert);
    display.drawString(16, 32, buf);
    display.display( );
  }

  
  // Flankenerkennung, Anmerkung: die Taster in Wokwi können mit prellen 
  // konfiguriert werden, so dass die LED manchmal mehrfach umschaltet 
  // -> also auch hier kann entprellen getestet werden.
  T2_neu = digitalRead(Taster2);
  if ( T2_neu == 0 && T2_alt == 1) {  // fallende Flanke = Tastendruck
    digitalWrite(LED_rot, !digitalRead(LED_rot));  // toggeln
  }
  T2_alt = T2_neu;  // für Flankenerkennung
}

// ***** Eigene Funktionen ************************************************

