unsigned int k;

void setup() {
  // put your setup code here, to run once:
  Serial.begin(115200);
  delay(1000);
  k=0;
}

void loop() {
  // put your main code here, to run repeatedly:
  Serial.print("Die Zahl ist: ");
  Serial.println(k++);//, HEX);
  // oder
//  Serial.printf("Die Zahl ist: %d \n", k);
//  Serial.printf("Die Zahl ist: %2d \n", k);
//  Serial.printf("Die Zahl ist: 0x%X \n", k);
//  Serial.printf("Die Zahl ist: 0x%2X \n", k);
//  Serial.printf("Die Zahl ist: 0x%02X \n", k);
  //Serial.printf("Uhrzeit: %2d:%02d:%02d\n", Stunde, Minute, Sekunde);
  if(k==100)
     while(1);
  delay(500);
}
