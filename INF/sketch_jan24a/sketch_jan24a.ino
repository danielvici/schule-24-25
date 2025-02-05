int Messwert, talt, tneu, talt2, tneu2, Ausgabewert2, Ausgabewert4;
unsigned long davorZeit = 0;
const int LED_gruen = 33, Taster2 = 2, Taster4 = 4, LED_rot = 32;
bool TGedrueckt2, TGedrueckt4;

void setup(){
	Serial.begin(115200);
  ledcAttach(LED_gruen, 180, 12);
  ledcAttach(LED_rot, 180, 12):
  pinMode(Taster2, INPUT_PULLUP);
  pinMode(Taster4, INPUT_PULLUP);
}
void loop(){
  einlesen();
  verarbeiten();
  ausgeben();
}

void einlesen(){
  bool tneu = digitalRead(Taster2);
  if (talt2 == 1 && tneu2 == 0) {
    TGedrueckt2 = true;
    delay(20);
  }
  else {
    TGedrueckt2 = false;
  }
  talt2 = tneu2;

  bool tneu = digitalRead(Taster4);
  if (talt == 1 && tneu == 0) {
    TGedrueckt4 = true;
    delay(20);
  }
  else {
    TGedrueckt4 = false;
  }
  talt = tneu;
  }
}

void verarbeiten(){
  unsigned long jetztZeit = millis();
  if (TGedrueckt2 == true){
    if ( jetztZeit - davorZeit >= 200){
      davorZeit = jetztZeit ;
      Ausgabewert4 = analogRead(A0); // Eingang mit Potti
      Ausgabewert4 = map(Ausgabewert4, 4096, 0, 0, 4096);
    }
	}
  if (TGedrueckt4 == true){
    if ( jetztZeit - davorZeit >= 200){
      davorZeit = jetztZeit ;
      Ausgabewert2 = analogRead(A0); // Eingang mit Potti
      Ausgabewert2 = map(Ausgabewert2, 4096, 0, 0, 4096);
    }
    ledcWrite(LED_rot, Ausgabewert2);
    ledcWrite(LED_gruen, Ausgabewert4);
  }
}

void ausgeben(){
  Serial.println(Messwert);
}