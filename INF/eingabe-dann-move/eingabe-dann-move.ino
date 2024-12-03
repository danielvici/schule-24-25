#include "Freenove_4WD_Car_For_ESP32.h"
#include "BluetoothSerial.h"
#include <Arduino.h>
char eingabe;
BluetoothSerial SerialBT;
const int Trigger=12, Echo=15;
unsigned long Messwert;
int messungen[7];
int durchlauf = 0; // 3 5 7 9 11 13 15
unsigned long maxMesswert = 0;
int maxIndex = 0; 

void setup() {
  Serial.begin(115200);
  SerialBT.begin("Daniels G Klasse");
  PCA9685_Setup(); 
  PCA9685_Setup();    // Initializes the chip that controls the motor
  Servo_1_Angle(90);  //Set servo 1 Angle
  Servo_2_Angle(90);  //Set servo 2 Angle
  pinMode ( Trigger, OUTPUT );
	pinMode ( Echo, INPUT );
  delay(1000);
}

void loop() {
  if (SerialBT.available() > 0) {        // Überprüfen, ob Daten verfügbar sind
    eingabe = SerialBT.read();           // Lese das eingehende Byte
    switch (eingabe) {                   // Überprüfen der Eingabe
      case 'w': moveForward(); break;  // Vorwärts fahren
      case 's': moveBackward(); break; // Rückwärts fahren
      case 'd': turnRight(); break;    // Nach rechts drehen
      case 'a': turnLeft(); break;     // Nach links drehen
      case 'k': stop(); break;         // Stoppen
    }
  }


  for (int i = 0; i < 160; i += 30) {
    delay(800);                     
    Servo_1_Angle(i);                
    Serial.println(i);               // Ausgab aktuellen Winkel

    digitalWrite(Trigger, HIGH);
		delayMicroseconds(10);
		digitalWrite(Trigger, LOW);
    Messwert = pulseIn(Echo, HIGH);  
    Serial.println("Abstand: ");
    Serial.println(Messwert);
    messungen[durchlauf] = Messwert;  
    durchlauf++;

    
    


    
    for (int j = 0; j < 7; j++) {
      if (messungen[j] > maxMesswert) {
        maxMesswert = messungen[j];
        maxIndex = j; 
      }
    }

    
    
  }
  if (maxIndex == 0) { 
      Serial.println("Wert 0 Am Höchsten Fahre Rechts");
      turnRight();     
      delay(1000);
      stop();
    }
    else if (maxIndex == 1) { 
      Serial.println("Wert 1 Am Höchsten Fahre Rechts");
      turnRight();      
      delay(1000);
      stop();
    }
    else if (maxIndex == 2) { 
      Serial.println("Wert 2 Am Höchsten Fahre Vorne");
      moveForward();     
      delay(1000);
      stop();
    }
    else if (maxIndex == 3) { 
      Serial.println("Wert 3 Am Höchsten Fahre Vorne");
      moveForward();     
      delay(1000);
      stop();
    }
    else if (maxIndex == 4) { 
      Serial.println("Wert 4 Am Höchsten Fahre Vorne");
      moveForward();     
      delay(1000);
      stop();
    }
    else if (maxIndex == 5) { 
      Serial.println("Wert 5 Am Höchsten Fahre Links");
      turnLeft();        
      delay(1000);
      stop();
    }
    else if (maxIndex == 6) { 
      Serial.println("Wert 6 Am Höchsten Fahre Links");
      turnLeft();       
      delay(1000);
      stop();
    }
}


void moveForward() {
  Motor_Move(-2000, -2000, -2000, -2000);
}
void moveBackward() {
  Motor_Move(2000, 2000, 2000, 2000);
}

void stop() {
  Motor_Move(0, 0, 0, 0);
}

void turnRight() {
  Motor_Move(2000, 2000, -2000, -2000);
  delay(340);
  Motor_Move(-2000, -2000, -2000, -2000);
}

void turnLeft() {
  Motor_Move(-2000, -2000, 2000, 2000);
  delay(340);
  Motor_Move(-2000, -2000, -2000, -2000);
}
  