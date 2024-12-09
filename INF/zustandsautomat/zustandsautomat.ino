enum Zustaende_t { Z0, Z1} Zustand; 
enum ampel {r, rg, gr, g } ampelzustand;
bool T_druck;
const int Taster2 = 2, LED_rot = 32;
const int a_rot = 27, a_gelb = 19 , a_gruen =23 ;

void setup () {
  Serial.begin(115200);
  Serial.printf("INIT TEXT");
	// pinMode ... für LED und Taster
  pinMode(LED_rot, OUTPUT);
  pinMode(Taster2, INPUT_PULLUP);
  
  pinMode(a_rot, OUTPUT);
  pinMode(a_gelb, OUTPUT);
  pinMode(a_gruen, OUTPUT);
	Zustand = Z0; // Anfangszustand (Rot)
  ampelzustand = r;

  digitalWrite(a_rot, HIGH);
  digitalWrite(a_gelb, HIGH);
  digitalWrite(a_gruen, HIGH);
  digitalWrite(LED_rot, HIGH);
}

void loop () {
	Einlesen();
	Ampel();
  Automat();
	delay(10);
}

void Einlesen  () {
	// Flankenrkennung
	static bool Neu, Alt; // static weil lokale Variablen in einer Funktion
	Neu = digitalRead(Taster2);
	if (Neu == 0 && Alt == 1) { // Taster wurde gedrückt => Low Aktiv
		T_druck = true;           // Variable für den Automaten
	} else {
		T_druck = false;
	}
	Alt = Neu; 
}

void Ampel () {
	switch (ampelzustand) {
		case r: digitalWrite(a_rot, HIGH); digitalWrite(a_gelb, LOW); digitalWrite(a_gruen, LOW);
      Serial.println("rot");
      delay(1000);
			ampelzustand = rg;	
      delay(2500);
			break;
		case rg: digitalWrite(a_rot, HIGH); digitalWrite(a_gelb, HIGH); digitalWrite(a_gruen, LOW);
    Serial.println("rot gelb");
      delay(1000);
			ampelzustand = gr;
      delay(1000);
			break;
    case gr: digitalWrite(a_rot, LOW); digitalWrite(a_gelb, LOW); digitalWrite(a_gruen, HIGH);
      Serial.println("grün");
      delay(1000);
      ampelzustand = g;
      delay(1000);
			break;
    case g: digitalWrite(a_rot, LOW); digitalWrite(a_gelb, HIGH); digitalWrite(a_gruen, LOW);
      Serial.println("gelb");
      delay(1000);
      ampelzustand = r;
      delay(1000);
		  break;
		default:
			break;
	}
}

void Automat () {
	switch (Zustand) {
		case Z0: digitalWrite(LED_rot, LOW);
			if (T_druck == true) Zustand = Z1;	
			break;
		case Z1: digitalWrite(LED_rot, HIGH);
			if (T_druck == true) Zustand = Z0;
			break;
		default:
			break;
	}
}

void Ausgeben () {
	// inwelchen Zuständen soll die erste led an sein?
	if (ampelzustand == r || ampelzustand == rg){ 
		digitalWrite(a_rot, HIGH);
	} else {
    digitalWrite(a_rot, LOW);
  }
  // gelb
  if (ampelzustand == rg || ampelzustand == g){ 
		digitalWrite(a_gelb, HIGH);
	} else {
    digitalWrite(a_gelb, LOW);
  }
  // grün
  if (ampelzustand == gr){ 
    digitalWrite(a_gruen, HIGH);
  } else {
    digitalWrite(a_gruen, LOW);
  }
}