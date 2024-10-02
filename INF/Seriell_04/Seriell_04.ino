/* Zahlen einlesen 
 * Zunächst wird eine kurze Anleitung ausgegeben, danach wartet das Programm
 * auf das erste Zeichen (egal, was ihr da eintippt).
 * Von da an wird die Eingabe auf Zahlen untersucht => parseInt()
 * Die Zahl wird hier einfach wieder ausgegeben und die LED blinkt mit der Wartezeit
 */
//int MY_LED = 5;   // LED an Pin 5
int LED_BUILTIN=32;
uint16_t Zeit, Zeit_neu;  // Eingabe von 1 bis 65535 möglich

void setup() {
  pinMode(LED_BUILTIN, OUTPUT);     // funktioniert nur, wenn das richtige Board eingestellt ist!
  //pinMode(MY_LED, OUTPUT);        // LED an anderem Pin
  Serial.begin(115200);
  Zeit = 100; // Anfangswert für die Periodendauer
  Serial.println("Zahlen einlesen, zuerst ein beliebiges Zeichen senden");
  while (Serial.available()==0); // warte auf erstes Zeichen // Input
  Serial.println("Jetzt nur noch Zahlen 0-65535 eingeben und Senden klicken");   // Weitere Anleitung
}

void loop() {
  digitalWrite(LED_BUILTIN, !digitalRead(LED_BUILTIN)); // blinken
  //digitalWrite(MY_LED, !digitalRead(MY_LED)); // blinken mit anderer LED
  delay(Zeit);
  
  if (Serial.available() > 0) {   // ein oder mehrere Zeichen empfangen??
    Zeit_neu = Serial.parseInt(); // gibt 0 zurück, wenn kein gültiges Zeichen empfangen wurde => stört hier
    if(Zeit_neu !=0) {
      Zeit = Zeit_neu;            // nur übernehmen, wenn der Wert nicht 0 ist.    
    }
    Serial.print("Neue Zeit: ");
    Serial.println(Zeit);
  }
}
