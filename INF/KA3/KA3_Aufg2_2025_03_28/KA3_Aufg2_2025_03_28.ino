/* KA3 2025-03-28 Vorlage Aufgabe 2
 * AD-Wandler, Kennlinie mit map                           */

int16_t DigitalWert, Sollwert1, Sollwert2;
uint32_t NextTime = 0, CurrentTime;

void setup() {
  Serial.begin(115200);
}

void loop() {
  // 2.1) 2x pro Sekunde Analog-Eingang 0 einlesen und ausgeben
  CurrentTime = millis();
  if (CurrentTime - NextTime >= 1000) {
    DigitalWert = analogRead(A0);
    Serial.print("Digitalwert: ");
    Serial.println(DigitalWert);
    NextTime = CurrentTime;
    // 2.3) mit map-Funktion in Sollwert1 umrechnen und ausgeben
    Sollwert1 = map(DigitalWert, 0, 4095, 285, 3694);
    Serial.print("Sollwert1: ");
    Serial.println(Sollwert1);
    // 2.4) Sollwert2 begrenzen auf 0 bis 1000 und Sollwert1, Sollwert2  ausgeben
    Sollwert2 = map(Sollwert1, 285, 3694, 0, 1000);
    Serial.print("Sollwert2: ");
    Serial.println(Sollwert2);
  }
}
