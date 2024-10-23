// Variablen werden deklariert
const int L1 = 5, L2 = 18, L3 = 19, L4 = 23;
int Zeit_pro_Schritt = 20;  // wird eig. berechnet
char links_rechts_serial;

// Die Pins werden als OUTPUT gesetzt und
// die Baudrate wird auf 9600
void setup() {
  pinMode(L1, OUTPUT);
  pinMode(L2, OUTPUT);
  pinMode(L3, OUTPUT);
  pinMode(L4, OUTPUT);
  Serial.begin(9600);
}

void loop() {
  // Es wird die Funktion "drehen" aufgerufen
  // und es wird die Variable "Zeit_pro_Schritt"
  // durchgegeben
  drehen(Zeit_pro_Schritt);
}

void drehen(int zeit) {
  // solange i unter 48 ist wird die Funktion "rechDrehen" ausgeführt 
  for (int i = 0; i < 48; i++) {
    rechtsDrehen(zeit);
  }
  delay(1000);
  // solange i unter 48 ist wird die Funktion "linksDrehen" ausgeführt
  for (int i = 0; i < 48; i++) {
    linksDrehen(zeit);
  }
  delay(1000);
}
// Funktion "rechtsDrehen" wird deklariert
// Die Funktion schaltet die Pins mit der gegebenen Zeit
// Der Motor dreht sich nach rechts
void rechtsDrehen(int zeit) {
  //Schritt 1: 1 0 0 1 ausgeben
  digitalWrite(L4, HIGH);
  digitalWrite(L3, LOW);
  digitalWrite(L2, LOW);
  digitalWrite(L1, HIGH);
  delay(zeit);
  //Schritt 2: 0 1 0 1 ausgeben
  digitalWrite(L4, LOW);
  digitalWrite(L3, HIGH);
  digitalWrite(L2, LOW);
  digitalWrite(L1, HIGH);
  delay(zeit);
  //Schritt 3: 0 1 1 0 ausgeben
  digitalWrite(L4, LOW);
  digitalWrite(L3, HIGH);
  digitalWrite(L2, HIGH);
  digitalWrite(L1, LOW);
  delay(zeit);
  //Schritt 4: 1 0 1 0 ausgeben
  digitalWrite(L4, HIGH);
  digitalWrite(L3, LOW);
  digitalWrite(L2, HIGH);
  digitalWrite(L1, LOW);
  delay(zeit);
}
// Funktion "linksDrehen" wird deklariert
// Die Funktion schaltet die Pins mit der gegebenen Zeit
// Der Motor dreht sich nach links
void linksDrehen(int zeit) {
  //Schritt 3: 0 1 1 0 ausgeben
  digitalWrite(L4, LOW);
  digitalWrite(L3, HIGH);
  digitalWrite(L2, HIGH);
  digitalWrite(L1, LOW);
  delay(zeit);
  //Schritt 2: 0 1 0 1 ausgeben
  digitalWrite(L4, LOW);
  digitalWrite(L3, HIGH);
  digitalWrite(L2, LOW);
  digitalWrite(L1, HIGH);
  delay(zeit);
  //Schritt 1: 1 0 0 1 ausgeben
  digitalWrite(L4, HIGH);
  digitalWrite(L3, LOW);
  digitalWrite(L2, LOW);
  digitalWrite(L1, HIGH);
  delay(zeit);
  //Schritt 4: 1 0 1 0 ausgeben
  digitalWrite(L4, HIGH);
  digitalWrite(L3, LOW);
  digitalWrite(L2, HIGH);
  digitalWrite(L1, LOW);
  delay(zeit);
}