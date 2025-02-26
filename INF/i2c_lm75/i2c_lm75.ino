#include "Wire.h"
// absch -> Abschreiben

void setup() {
  Wire.begin();
  Serial.begin(115200);
}

void loop() {
  // Daten senden
  // 0b um in 0 und 1 zu schreiben ansonsten Hex
  // 0111 <- absch. 0000 <- Jumper 
  
  Wire.beginTransmission(0b0111101); 
  //Wire.write(0b00001111); // da LED LOW Active 0->AN, 1->AUS; mann muss 8 Bits machen
  //Wire.endTransmission();
  delay(500);

  // Daten empfangen
  byte Daten1; // 1 Byte deklarieren
  Wire.requestFrom(0b1001010, 1);
  if (Wire.available() >= 1){
    Daten1 = Wire.read(); // Daten lesen
    //Wire.write(Daten1);
    Serial.println(Daten1);
  }
  Wire.endTransmission();
}