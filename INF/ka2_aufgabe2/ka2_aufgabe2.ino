/* INFP Klassenarbeit 2025-01-17
 * Aufgabe 2
 * Grüne LED mit PWM dimmen
 * Name: CWIKLA DANIEL
 */

const int Taster2 = 2, Taster4 = 4, LED_gruen = 23;
float fiftypercent = 0;

void setup( ) {
  // PWM für grüne LED konfigurieren
                  //freq. noch bearbeiten 
  ledcAttach(LED_gruen, 8, 10);


  pinMode(Taster2, 5);  // das funktioniert so
  pinMode(Taster4, 5);  // da muss man nix ändern...

  // PWM Anfangswert für 50%
  Serial.println(2**10);

}

void loop( ) {
  // Zeitsteuerung ergänzen


    // Taster2 gedrückt: Wert um 100 erhöhen


    // Taster4 gedrückt: Wert um 100 verringern



}

