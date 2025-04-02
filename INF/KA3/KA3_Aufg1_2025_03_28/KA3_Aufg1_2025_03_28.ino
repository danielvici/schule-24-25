/* KA3 2025-03-28 Vorlage Aufgabe 1, Teil 2 bis 3
 * I2C-Bus, Temperaturmessung und LED-Ansteuerung          */
 #include <Wire.h>
                //    LED0      LED1      LED2        LED3
byte Muster[ ] = {0b0000001, 0b0000011, 0b0000110, 0b0001100, 0b00011000, 0b00110000, 0b01100000, 0b10000000, 0b110000000};
byte LowByte, HighByte;
uint16_t Messwert;
float fTemperatur;
#define lm75_addr 0b1001010

void setup() {
  Serial.begin ( 115200 );
  Serial.println("DANIEL CWIKLA");    // bitte ändern!
  Messwert = 0;
  fTemperatur = 0.0;
  Wire.begin();
}

void loop() {
  // hier kann mit delay gearbeitet werden
  Wire.requestFrom(lm75_addr, 2 );
  if( Wire.available( ) >= 2 ) {
  //Messwert = Wire.read();
  HighByte = Wire.read();
  LowByte = Wire.read();
  //Serial.print("Messwert: ");
  //Serial.println(Messwert);
  Serial.print("HL Byte:");
  fTemperatur = HighByte << LowByte;
  Serial.println(fTemperatur);
  }
  delay(100);
  matrix();
}


void matrix(){
  Wire.beginTransmission(0b0111011);
  // ----------------------------------
  // | LEDS low aktiv 0 -> 1 , 1 -> 0 | 
  // ----------------------------------
  Wire.write(0b1111110);
  Wire.write(0b1111100);
  Wire.write(0b1111001);
  Wire.write(0b1110011);
  Wire.write(0b11100111);
  Wire.write(0b11001111);
  Wire.write(0b10011111);
  Wire.write(0b10111111);
  Wire.write(0b00111111);
  Wire.endTransmission();


}