// ESP32 Timer Testprogramm
hw_timer_t *MeinTimer = NULL;     // beliebiger Name
volatile int Zaehler = 0;         // wird in ISR verändert => volatile
uint32_t LastTime = 0;
// ***** Pins deklarieren 
const int Taster2=2;
bool bTuWas;

// ****** Funktionsprototypen
void  Ruecksetzen ( void );
void  Counter ( void );




void setup() {
  Serial.begin(115200);
  Serial.println("Hello, from ESP32!");
  // Pins Konfigurieren
  pinMode(Taster2, INPUT);   // INPUT_PULLUP bei realer Platine
  attachInterrupt(digitalPinToInterrupt(Taster2),&Ruecksetzen,FALLING);
  // Timer1 konfigurieren
  MeinTimer = timerBegin(1, 80, true);    // Timer1, Vorteiler 80, Aufwärts
  timerAlarmWrite(MeinTimer, 10000, true);// Alarm 10000 => alle 10ms ein Alarm 
  timerAttachInterrupt(MeinTimer, &Counter, true);  // ISR Counter verknüpfen
  timerAlarmEnable(MeinTimer);
  timerStart(MeinTimer);


}

void loop() {
  // 1 mal pro Sekunde den aktuellen Zählerstand ausgeben:
  if( millis()- LastTime >= 1000) {
    LastTime = millis();
    Serial.println(Zaehler);
  }

  delay(10); // this speeds up the simulation
}

// Rücksetzen per Taster-Interrupt
void  IRAM_ATTR Ruecksetzen ( void ) {
  Zaehler =0;
}

// Hochzählen per Timer-Interrrupt
void  IRAM_ATTR Counter( void ) {
  Zaehler ++;
}
