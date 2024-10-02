/* Sende einzelne Zeichen
 *
 */

void setup() {
  Serial.begin(9600);
}

void loop() {
  uint8_t Zeichen;
  for ( Zeichen=0; Zeichen<=127; Zeichen++ ) {
    Serial.printf("Das Zeichen ist %c \n", Zeichen ); // Sende jedes Zeichen in einer Zeile  
  }

  delay(2000);

}
