enum zustaende_t {z0, z1, z2, z3} zustand;
const int taster2 = 2, taster4 = 4, led_rot = 32, led_gruen = 33;
bool taster2_g, taster4_g;
// Resoulution 10 Bits -> 2^10 -> 1024

void setup() {
  Serial.begin(115200);
  pinMode(taster2, INPUT_PULLUP);
  pinMode(taster4, INPUT_PULLUP);
  ledcAttach(led_rot, 50, 10);
  ledcAttach(led_gruen, 50, 10);
  zustand = z0;
  ledcWrite(led_rot, 1024);
  ledcWrite(led_gruen, 1024);
}

void loop() {
  einlesen();
  verarbeiten();
}

void einlesen(){

}

void verarbeiten(){
  switch(zustand){
    case z0:
      if (digitalRead(taster2) == LOW) zustand = z1;
      ledcWrite(led_gruen, 1024);
      ledcWrite(led_rot, 1024);
      Serial.println("z0");
      break;
    case z1:
      if (digitalRead(taster4) == LOW) zustand = z2;
      ledcWrite(led_gruen, 1024);
      ledcWrite(led_rot, 0);
      Serial.println("z1");
      break;
    case z2:
      if (digitalRead(taster2) == LOW) zustand = z3;
      ledcWrite(led_gruen, 0);
      ledcWrite(led_rot, 1024);
      Serial.println("z2");
      break;
    case z3:
      if (digitalRead(taster4) == LOW) zustand = z0;
      ledcWrite(led_gruen, 512);
      ledcWrite(led_rot, 512);
      Serial.println("z3");
      break;
    default:
    break;
  }
}