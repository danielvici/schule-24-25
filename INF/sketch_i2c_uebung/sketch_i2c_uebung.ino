#include <Wire.h>
#define lm75_addr 0b1001000
#define led_addr 0b111010
byte data;

long cast;

void setup(){
  Wire.begin();
  Serial.begin(115200);
}

void loop(){
  Wire.requestFrom(lm75_addr, 1);
  if(Wire.available() >= 1){
    data = Wire.read();
    Serial.print("Temp: ");
    Serial.print(data);
    Serial.println(" ");

    Wire.beginTransmission(led_addr);
    
    cast = map(data, 25, 43, 1, 8);
    // Geht nicht
    /*switch(data){
      case 25: cast = 0b01111111;
    }
    */

    Serial.print("cast: ");
    Serial.print(cast);
    Serial.println(" ");
    Wire.write(cast, );

    Wire.endTransmission();
    delay(500);
  }
}