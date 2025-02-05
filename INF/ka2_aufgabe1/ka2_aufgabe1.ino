/* INFP Klassenarbeit 2025-01-17
 * Aufgabe 1
 * Ablaufsteuerung mit Ampel-LEDs
 * Name: CWIKLA DANIEL
 */

// Pins für die Ampel-LEDs ergänzen
const int LED_rot = 27, LED_gelb = 19, LED_gruen = 23;
enum Zustaende_t { off,stop, blink, go} Zustand; 

const int Taster2 = 2, Taster4 = 4;
bool fTaster2, fTaster4, InTaster2, InTaster4, Merker2, Merker4;
bool rot, gelb, gruen;

void setup( ) {
  pinMode(Taster2, 5);  // das funktioniert so
  pinMode(Taster4, 5);  // da muss man nix ändern...
  pinMode(LED_rot, 3);
  pinMode(LED_gelb, 3);
  pinMode(LED_gruen, 3);
  Serial.begin(115200);
  Serial.println("DANIEL CWIKLA");
  Zustand = off;
}

void loop( ) {
  // Zeitsteuerung ergänzen
  Einlesen( );
  Ablauf( );
  Ausgeben( );
}

// Aufgabe 1.1 Flankenerkennung ergänzen
void Einlesen( ) {
  InTaster2 = digitalRead(Taster2);
  InTaster4 = digitalRead(Taster4);
  // wenn Flanke bei Taster 2 erkannt
  if (InTaster2 == 1 && Merker2 == 0){
    fTaster2 = true;
    Serial.println("FLANKE fTaster 2 = true");
  } else{
    // ansonsten
    fTaster2 = false;
    Serial.println("FLANKE fTaster 2 = false");
  }
  Merker2 = InTaster2;
  
  // wenn Flanke bei Taster 4 erkannt
  if (InTaster4 == 1){
    fTaster4 = true;
    Serial.println("FLANKE fTaster 4 = true");
  } else{
    // ansonsten
    fTaster4 = false;
    Serial.println("FLANKE fTaster 4 = false");
  }
  Merker4 = InTaster4;



}

// Aufgabe 1.2 Ablauf fertigstellen
void Ablauf( ) {
  // Zustand abfragen, Folgezustand zuweisen
  switch(Zustand){
    case off: 
      Serial.println("ZUSTAND: OFF");
      if(fTaster2 == true) {
        Zustand = stop;
      } else if(fTaster4 == true){
        Zustand = blink;
      } else {
      rot = false;
      gelb = false;
      gruen = false;
      }
    case stop:
      Serial.println("ZUSTAND: STOP");
      if(fTaster2 == true) {
        Zustand = go;
      } else {
        rot = true;
        gelb = false;
        gruen = false;
      }
    case go: 
      Serial.println("ZUSTAND: GO");
      if(fTaster2 == true) {Zustand = stop;} 
      else if (fTaster4 == true){ Zustand = off;
      } else {
      rot = false;
      gelb = false;
      gruen = true;
      }
    case blink:
      Serial.println("ZUSTAND: BLINK");
      if(fTaster4 == true) {Zustand = off;} else {
      rot = false;
      gelb = true;
      gruen = false;
      }
  }
  Ausgeben();
}

// ***** Ausgabewerte an die Pins rausschreiben
// hier nichts ändern oder ergänzen!
void Ausgeben() {
  digitalWrite(LED_rot, rot);
  digitalWrite(LED_gelb, gelb);
  digitalWrite(LED_gruen, gruen);
}