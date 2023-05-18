#include <Servo.h>
#include <WiFi.h>
#include <HTTPClient.h>

  Servo myservo;
  int pos = 0; 
const char* ssid = "ORANGE_7B18";
const char* password =  "12345678";
  
void setup() {
   myservo.attach(14);
  Serial.begin(115200);
  delay(4000);
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
  
    http.begin("https://djerba-park.com/admin/checkqr/res?id=3"); //Specify the URL
    int httpCode = http.GET();                                        //Make the request
  
    if (httpCode > 0) { //Check for the returning code
  
        String payload = http.getString();
        Serial.println(payload);
        if (payload == "allow"){
    
  for (pos = 0; pos <= 90; pos += 1) { // goes from 0 degrees to 180 degrees
    // in steps of 1 degree
    myservo.write(pos);              // tell servo to go to position in variable 'pos'
    delay(15);                       // waits 15ms for the servo to reach the position
  }
    delay(10000);
  for (pos = 90; pos >= 0; pos -= 1) { // goes from 180 degrees to 0 degrees
    myservo.write(pos);              // tell servo to go to position in variable 'pos'
    delay(15);                       // waits 15ms for the servo to reach the position
  }
}
      }
  
    else {
      Serial.println("Error on HTTP request");
    }
 
    
    
    http.end(); //Free the resources
    }
  }
  
