volatile uint32_t lastTime, countWind;
uint32_t showTime;
const int windSensorPin = 2; // Pin, an dem der Windsensor angeschlossen ist
float windSpeed;
const float conversionFactor = 0.0875; // Beispiel-Umrechnungsfaktor (muss angepasst werden)

void setup() {
  Serial.begin(115200);
  byte intNr = digitalPinToInterrupt(windSensorPin);
  attachInterrupt(intNr, windCounter, FALLING);
  pinMode(windSensorPin, INPUT_PULLUP);
}

void loop() {
  uint32_t currentTime = millis();
  if (currentTime - showTime >= 1000) {
    showTime = currentTime;
    windSpeed = countWind * conversionFactor; // Windgeschwindigkeit berechnen
    Serial.printf("Windgeschwindigkeit: %5.2f m/s\n", windSpeed);
    countWind = 0; // Zähler zurücksetzen
  }
}

void windCounter() {
  if (millis() - lastTime > 10) {
    countWind++;
    lastTime = millis();
  }
}