<?php
include '../config/secrets.php';
global $brevo_apiKey;


// File: send-email-newsletter.php

// 1. Receive JSON data from the Javascript
$input = file_get_contents("php://input");
$data = json_decode($input, true);
$userEmail = $data['email'] ?? '';

// 2. Validate the email
if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Invalid email format']);
    exit;
}

// =========================================================
// CONFIGURATION (EDIT THIS PART)
// =========================================================
$apiKey = $brevo_apiKey; // 🔴 PASTE YOUR NEW KEY
$senderName = "Palawander Admin";
$senderEmail = 'paredesjancarlo99@gmail.com'; // 🔴 MUST BE VERIFIED IN BREVO
// =========================================================

// 3. Prepare the Brevo API Payload
$url = 'https://api.brevo.com/v3/smtp/email';

$payload = [
    'sender' => [
        'name' => $senderName,
        'email' => $senderEmail
    ],
    'to' => [
        [
            'email' => $userEmail,
            'name' => 'Valued Guest'
        ]
    ],
    'subject' => '🌴 Welcome to Palawander: Your Palawan Journey Begins Now',
    'htmlContent' => '
        <html>
    <body>
        <h1>Subscription Confirmed! Welcome to Palawander</h1>
        <p>Hi there,</p>
        <p>We are delighted to confirm your successful subscription to the Palawander newsletter. Thank you for joining our community of travel enthusiasts.</p>
        <p>You will now receive exclusive content, including:</p>
        <ul>
            <li>**Promotional Offers** and discounts on curated travel packages.</li>
            <li>**In-Depth Guides** to Palawan\'s most stunning destinations: Puerto Princesa, El Nido, and Coron.</li>
            <li>**Travel Tips** and the latest news on local regulations and events.</li>
        </ul>
        <p>Our commitment is to help you plan an unforgettable journey to the breathtaking islands of Palawan.</p>
        <p>We look forward to connecting you with the best of the Philippines.</p>
        <p>Sincerely,</p>
        <p>The Palawander Team</p>
    </body>
</html>'
];

// 4. Send the Request using cURL
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json',
    'api-key: ' . $apiKey,
    'content-type: application/json'
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    echo json_encode(['success' => false, 'message' => 'Curl error: ' . curl_error($ch)]);
} else {
    // Brevo returns 201 if the email was queued successfully
    if ($httpCode == 201) {
        echo json_encode(['success' => true, 'message' => 'Email sent successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Brevo Error: ' . $response]);
    }
}

curl_close($ch);
?>