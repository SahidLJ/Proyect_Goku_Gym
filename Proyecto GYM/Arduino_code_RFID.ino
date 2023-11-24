#include <SoftwareSerial.h>

SoftwareSerial RFID(2, 3); // Configura los pines para el lector RFID

void setup() {
  Serial.begin(9600);
  RFID.begin(9600);
}

void loop() {
  if (RFID.available() > 0) {
    String rfidData = RFID.readString();
    Serial.println("ID RFID: " + rfidData);

    // Envía rfidData al servidor PHP o base de datos a través de la conexión serial o red.
  }
}
