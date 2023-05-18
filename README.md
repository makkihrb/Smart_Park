# Smart-Park Solution

This project, titled "Smart-Park Solution," is an end-of-study project created by me and my colleague, Houssem. It is a comprehensive solution that aims to optimize and enhance parking management using various technologies.

## Technologies and Librairies Used in Implementing the website
- HTML
- CSS
- Vanilla JS
- jQuery
- PHP
- MySQL

## Technologies Used in Implementing the IoT part

- Tensorflow.js (Detection)
- PHP QR Code Reader Library (Analyzing and Verification)
- ESP-32 Card (Controlling Objects and Communcation with the server)
- Ultrasonic Sensors (Detection of Cars in the park slot)

## Project Description
The Smart-Park Solution is designed to provide an intelligent and efficient parking management system. It incorporates various technologies to optimize parking operations and enhance the overall user experience, it's a solution full automated without the intervention of human 
24/24 and 7/7 . it's also a budget solution

The core components of the solution include:

1. **Website Development**: We have developed a user-friendly website using HTML, CSS, jQuery, PHP, and MySQL. The website serves as the central platform for users to interact with the parking system. It enables users to register, book parking spaces, and access real-time information about parking availability.

2. **Car Detection using Tensorflow.js**: We have leveraged Tensorflow.js, a machine learning library, to implement car detection functionality. By analyzing video feeds from surveillance cameras, the system can accurately detect incoming vehicles and initiate the necessary actions.

3. **QR Code Analysis using PHP QR Code Reader**: To ensure secure and efficient access control, we have integrated PHP QR Code Reader into the solution. When drivers scan a QR code at the entrance, the system analyzes the code's value. If the QR code is linked to a registered user in the database, the driver is granted access, and the park barrier opens automatically.

4. **ESP-32 Card Integration**: An ESP-32 card acts as the central control unit for IoT objects within the parking system. It facilitates communication between the website server and various IoT devices, such as barrier gates and sensors. The ESP-32 card enables seamless synchronization of data and efficient management of parking operations.

5. **Ultrasonic Sensors for Real-time Parking Updates**: Ultrasonic sensors are strategically placed throughout the parking facility to provide real-time information on the availability of parking spaces. The sensors detect the presence of vehicles and relay the data to the website, allowing users to easily identify and locate vacant parking spots.
## Local Setup
To run this project locally, follow these steps:
1. Copy all the project files into the `xampp\htdocs` directory.
2. Set up and configure XAMPP with PHP and MySQL.
3. Make the necessary modifications on files (.php and .ino).
4. Run and Start The Server
5. Compile and upload the IoT codes to your ESP-32 card using the Arduino IDE.

## Usage
By deploying the Smart-Park Solution, users can benefit from an optimized parking experience. Drivers can enter the park by scanning a QR code, and if their information is stored in the database, the park barrier will be opened automatically. The website provides real-time updates on available parking spaces using ultrasonic sensors.

Feel free to explore the project and reach out to us for any questions or feedback related to front-end development, back-end development, or any aspect of ReactJS.

## Project Contributors
- Houssem Sakkal & Makki Harboub


We are proud of the outcome of this project and the effective utilization of various technologies to create a smart parking solution.
