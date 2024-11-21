/* Auswertung eines Ultraschall-Abstandssensors (Testprogramm)
 * Der HC-SR04 benötigt 5V Versorgungsspannung, der HS-SR04P läuft auch mit 3,3V
 * 
 * Im Setup ist ein Test für die Umrechnung der gemessenen Zeit (in µs)
 * Die erste Formel berechnet d = s/2 = (v * t) / 2 mit d in cm, v in cm/s und t in s
 * Die zweite Formel berechnet den Abstand mit dem ausmultiplizierten Faktor
 * Die dritte Formel berechnet den Abstand ganzzahlig mit einem gerundeten Faktor
 */
const int Trigger=14, Echo=27;
float fAbstand;
unsigned long Messwert, iAbstand, lastMillis;
// ***** Setup, Hardware initialisieren ***************************************************************
void setup( ) {
	Serial.begin(115200);
	pinMode ( Trigger, OUTPUT );
	pinMode ( Echo, INPUT );
	// an Stelle von Messwert = pulseIn( Echo, HIGH );
	Messwert = 10000; // Simulation des Sensors durch bekannte Werte => 10ms = 3,43m Gesamt => 171,5cm Abstand
	fAbstand = 34300.0 * Messwert / (1E6 * 2);  // hier ist die Schallgeschwindigeit 343m/s = 34300cm/s lesbar enthalten
	Serial.print( " Berechneter Abstand: ");
	Serial.println( fAbstand );
  fAbstand = Messwert / 58.3;				// hier ist die Schallgeschwindigkeit nicht einfach anpassbar
  Serial.print( " Berechneter Abstand mit /58.3: ");
	Serial.println( fAbstand );
  iAbstand = Messwert / 58;         // Gerundeter Faktor, Fehler 0,2%, es kann mit Int gerechnet werden
  Serial.print( " vereinfacht mit /58: ");
	Serial.println( iAbstand );

}
// ***** Endlosschleife, Einlesen, Verarbeiten, Ausgeben *********************************************
void loop ( ) {
	// Zeitsteuerung mit millis()
	unsigned long currentMillis = millis();
	// Messung 2x pro Sekunde
	if(currentMillis - lastMillis >= 500) {
		lastMillis = currentMillis;
		// Trigger-Impuls mit 10µs Dauer erzeugen
		digitalWrite(Trigger, HIGH);
		delayMicroseconds(10);
		digitalWrite(Trigger, LOW);
		// Jetzt den High-Impuls am Echo-Eingang ausmessen
  	Messwert = pulseIn( Echo, HIGH );
		fAbstand = 34300.0 * Messwert / (1E6 * 2);  // hier ist die Schallgeschwindigeit 343m/s = 34300cm/s lesbar enthalten
		Serial.printf( "Berechneter Abstand: %4.1f cm \n", fAbstand);
	}
	
}