
void setup(){

}

void loop(){
  Wire.beginTransmission ( I2C_Adresse );
  Wire.write( Datenbyte ); // Datenbyte oder Registeradresse
  Wire.endTransmission( );
  byte Daten1, Daten2, Daten3;
  Wire.requestFrom ( I2C_Adresse, 3 ); // Baustein und Anzahl der Bytes
  if( Wire.available( ) >= 3 ) {
  Daten1 = Wire.read( );
  Daten2 = Wire.read( );
  Daten3 = Wire.read( );
  }
  byte Daten1, Daten2, Daten3;
  Wire.beginTransmission ( I2C_Adresse );
  Wire.write( Registeradresse ); // Auswahl einer internen Registeradresse
  Wire.endTransmission( false ); // true oder ( ) sendet ein Stop, false
  // sendet kein Stop!
  Wire.requestFrom ( I2C_Adresse, 3 );
  if( Wire.available( ) >= 3 ) {
  Daten1 = Wire.read( );
  Daten2 = Wire.read( );
  Daten3 = Wire.read( );
}