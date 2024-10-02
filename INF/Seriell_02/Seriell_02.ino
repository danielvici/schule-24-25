/* Sende einzelne Zeichen
 *
 */

void setup() {
  Serial.begin(115200);
}

void loop() {
  uint8_t Zeichen;
  for ( Zeichen=0; Zeichen<=127; Zeichen++ ) {
       Serial.write( Zeichen ); // Sende alle ASCII-Zeichen
  }
  Serial.write( 0xa );
  Serial.write( 0xd );  // Zeilenschaltung CR+LF senden
  Serial.write( 10 );
  Serial.write( 13 );  // Zeilenschaltung CR+LF senden

  delay(2000);

  for ( Zeichen='A'; Zeichen<='z'; Zeichen++ ) {
    Serial.write( Zeichen ); // Sende alle Großbuchstaben
  }
  Serial.write( 10 );
  Serial.write( 13 );  // Zeilenschaltung CR+LF senden
  Serial.write( 10 );
  Serial.write( 13 );  // Zeilenschaltung CR+LF senden

  delay(2000);

}
