const int Taster2 = 2;
const int LED_rot = 32;
enum Zustaende_t { zoff, zlow, znorm, zhigh } Zustand;
bool T_druck;
uint32_t zeit = 0;

void setup() {
  pinMode(Taster2, INPUT_PULLUP);
  pinMode(LED_rot, OUTPUT);
  Serial.begin(115200);
  Serial.println("TEST - DANIEL");
  ledcAttachChannel(LED_rot, 100, 12,0);
  Zustand = zoff;
}

void loop (){
  einlesen();
  verarbeiten();
  delay(10);
}

void einlesen  () {
	static bool Neu, Alt;
	Neu = digitalRead(Taster2);
	if (Neu == 0 && Alt == 1) {
		T_druck = true;
	} else {
		T_druck = false;
	}
	Alt = Neu; 
}
void verarbeiten () {
	switch (Zustand) {
		case zoff: ledcWrite(LED_rot, 4095);
    Serial.println("zoff ");
			if (T_druck == true) {
				Zustand = zlow;	
			}
			break;
		case zlow: ledcWrite(LED_rot, 3071); 
    Serial.println("zlow");
			if (T_druck == true){ 
				Zustand = znorm;
			}
			break;
    case znorm: ledcWrite(LED_rot, 2047); 
    Serial.println("znorm");
			if (T_druck == true){ 
        Zustand = zhigh;
        zeit = millis();
			}
			break;
    case zhigh: ledcWrite(LED_rot, 0); 
    Serial.println("zhigh");
			if (T_druck == true){ 
				Zustand = zoff;
			}
      if (millis() - zeit >= 5000){
        Zustand = znorm;
      }
			break;
		default:
    Serial.println("default");
			break;
	}
}