// ***** Portpins für Ein-/Ausgänge ***************************************
const int LED_rot = 32, LED_gruen = 33, Taster_L = 2, Taster_R = 4;
// ***** Initialisierung **************************************************
void setup() {
  pinMode(LED_rot, OUTPUT);         // die LEDs beginnen danach
  pinMode(LED_gruen, OUTPUT);       // zu leuchten!
  pinMode(Taster_L, INPUT_PULLUP);  // Taster brauchen hier den
  pinMode(Taster_R, INPUT_PULLUP);  // Pullup-Widerstand
}
// ***** Endlosschleife ***************************************************
void loop() {
  if (digitalRead(Taster_L) == false) {  // low-aktiv, daher false
    digitalWrite(LED_rot, LOW);          // LED EINschalten
  } else {
    digitalWrite(LED_rot, HIGH);  // LED AUSschalten nicht
  }                               // vergessen! 
  
  if (digitalRead(Taster_R) == false) {  // low-aktiv, daher false
    digitalWrite(LED_gruen, LOW);          // LED EINschalten
  } else {
    digitalWrite(LED_gruen, HIGH);  // LED AUSschalten nicht
  }    
}