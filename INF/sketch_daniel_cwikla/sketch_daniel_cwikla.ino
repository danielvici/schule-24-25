//  ---------------------------------
//  |         DANIEL CWIKLA         | 
//  ---------------------------------
//  Aus irgend einem Grund gingen die LEDS
//  nicht an obwohl die Pins richtig sind.

const int gr_led = 33;
const int rt_led = 32;
void setup() {
  pinMode(gr_led, INPUT);
  pinMode(rt_led, INPUT);
  Serial.begin(115200);
  digitalWrite(gr_led, LOW);
  digitalWrite(rt_led, LOW);
  Serial.println("TEST");
}

void loop() {
  directionControl();
  delay(1000);
}

void directionControl(){
  digitalWrite(gr_led, HIGH);
  digitalWrite(rt_led, HIGH);
  Serial.println("Motor gerade aus ---");
  delay(2000);

  digitalWrite(gr_led, LOW);
  digitalWrite(rt_led, HIGH);
  Serial.println("Motor rechts -|");
  delay(2000);

  digitalWrite(gr_led, LOW);
  digitalWrite(rt_led, LOW);
  Serial.println("Motor aus __");
}