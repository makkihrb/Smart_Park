#include <Servo.h>
#include <WiFi.h>
#include <HTTPClient.h>
const int trigPin = 5;
const int echoPin = 18;
//Source code de capteur ultrason : https://microcontrollerslab.com/hc-sr04-ultrasonic-esp32-tutorial/
//define sound speed in cm/uS
#define SOUND_SPEED 0.034
#define CM_TO_INCH 0.393701
const char* ssid = "ORANGE_7B18";
const char* password =  "12345678";

long duration;
float distanceCm;
int nvs;
void setup() {
  Serial.begin(115200); // Starts the serial communication
  pinMode(trigPin, OUTPUT); // Sets the trigPin as an Output
  pinMode(echoPin, INPUT); // Sets the echoPin as an Input
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi..");
  }
  Serial.println("Connected to the WiFi network");
}

void loop() {
  if ((WiFi.status() == WL_CONNECTED)) { //Check the current connection status
 HTTPClient http;
  // Clears the trigPin
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  // Sets the trigPin on HIGH state for 10 micro seconds
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);
  
  // Reads the echoPin, returns the sound wave travel time in microseconds
  duration = pulseIn(echoPin, HIGH);
  
  // Calculate the distance
  distanceCm = duration * SOUND_SPEED/2;
  
  // Prints the distance in the Serial Monitor
   if (distanceCm < 4)
  {
  Serial.print("Voiture captée a distance (cm): ");
  nvs=nvs+1;
  Serial.print(nvs);
  delay(3000);}
  
    String nvss = String(nvs);
    nvs=0;
      http.begin("https://djerba-park.com/admin/checkqr/nvs.php?nvs="+nvss+"&id=2");
      
    int httpCode = http.GET();                                  //Send the request
 
    if (httpCode > 0) { //Check the returning code
 
      String payload = http.getString();   //Get the request response payload
      Serial.println(payload);             //Print the response payload
 
    }
 
    http.end();   //Close connection
       } 
       delay(1000);
        }
