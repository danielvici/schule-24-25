const int LED_gruen = 33;
const int Taster2 = 2;

void setup() {
  pinMode(LED_gruen, OUTPUT);
  pinMode(Taster2, INPUT_PULLUP);
  attachInterrupt(digitalPinToInterrupt(Taster2), &Toggle, FALLING);
}

void loop() {
digitalWrite(LED_gruen, HIGH);
delay(250);
digitalWrite(LED_gruen, LOW);
delay(250);
}


void Toggle(){
  digitalWrite(LED_gruen, !digitalRead(LED_gruen));
}