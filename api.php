<?php
header('Content-Type: application/json'); // This tells the browser that the response is in JSON format

// Simulated dynamic data
$data = [
    "to" => "whatsapp:+5213141027692", // The recipient's phone number (WhatsApp format)
    "contentSid" => "HX978993a12989f563f195a915c8403670", // The ID of the message template in Twilio
    "contentVariables" => [ // The dynamic variables that will be inserted into the template
        "1" => "NBS Figo",  // Device name
        "2" => "Alimentacion", // Type of alert
        "3" => "Voltaje menor a 3V", // Restriction (e.g., voltage below 3V)
        "4" => "0V", // Value (the actual voltage reading)
        "5" => "12:30:00 15/01/2025", // Date and time of the alert
        "6" => "19.2530421,-103.7580910" // Coordinates (latitude, longitude)
    ]
];
echo json_encode($data); // Converts the PHP array to JSON format and sends it to the client
?>
