<?php
// FILE: send-email.php
include 'config/secrets.php';

// UPDATED FUNCTION: Added $pickupLocation and $userMobile parameters
function sendBookingEmail($userEmail, $userName, $bookingRef, $tourName, $tourDate, $pax, $totalAmount, $pickupLocation, $userMobile) {
    global $brevo_apiKey;

    $formattedDate = date('F d, Y', strtotime($tourDate));

    if (empty($brevo_apiKey)) {
        error_log("CRITICAL ERROR: Brevo API Key is missing.");
        return false;
    }

    $url = 'https://api.brevo.com/v3/smtp/email';

    // Generate QR
    $qrData = urlencode($bookingRef);
    $qrUrl = "https://quickchart.io/qr?text=$qrData&format=png&margin=0&size=600&ecLevel=H";


    // HTML CONTENT
    $htmlContent = "
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap');
            body { margin: 0; padding: 0; background-color: #f8f9fa; font-family: 'Inter', Arial, sans-serif; }
            table { border-collapse: collapse; }
        </style>
    </head>
    <body style='background-color: #f8f9fa; padding: 40px 0;'>
        
        <table align='center' width='600' style='max-width: 600px; width: 100%; background-color: #ffffff; border-radius: 24px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.04); border: 1px solid #f0f0f0; margin: 0 auto;'>
            
            <tr>
                <td style='padding: 40px 40px 25px 40px; border-bottom: 1px solid #f0f0f0;'>
                    <table width='100%'>
                        <tr>
                            <td valign='top'>
                                <span style='color: #adb5bd; font-size: 11px; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600; display: block; margin-bottom: 8px;'>Adventure</span>
                                <h2 style='margin: 0; font-size: 24px; color: #212529; line-height: 1.2; font-weight: 800;'>$tourName</h2>
                            </td>
                            <td valign='top' align='right' width='90'>
                                <img src='$qrUrl' width='85' height='85' style='display: block; border-radius: 4px;' alt='QR'>
                            </td>
                        </tr>
                    </table>

                    <table width='100%' style='margin-top: 25px;'>
                        <tr>
                            <td align='left'>
                                <span style='background-color: #e6fcf5; color: #0ca678; font-size: 11px; font-weight: 700; padding: 8px 14px; border-radius: 30px; text-transform: uppercase; letter-spacing: 0.5px;'>
                                    &#10003; Paid & Verified
                                </span>
                            </td>
                            <td align='right'>
                                <span style='background-color: #f8f9fa; color: #495057; font-family: monospace; font-size: 13px; font-weight: 700; letter-spacing: 1px; padding: 8px 14px; border-radius: 8px; display: inline-block;'>
                                    $bookingRef
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td style='padding: 30px 40px;'>
                    <table width='100%'>
                        <tr>
                            <td width='50%' style='padding-bottom: 25px;'>
                                <span style='color: #adb5bd; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; display: block; margin-bottom: 5px;'>Travel Date</span>
                                <p style='color: #212529; font-size: 15px; font-weight: 400; margin: 0;'>$formattedDate</p>
                            </td>
                            <td width='50%' style='padding-bottom: 25px;'>
                                <span style='color: #adb5bd; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; display: block; margin-bottom: 5px;'>Guests</span>
                                <p style='color: #212529; font-size: 15px; font-weight: 400; margin: 0;'>$pax Person(s)</p>
                            </td>
                        </tr>
                        <tr>
                            <td width='50%' style='padding-bottom: 25px;'>
                                <span style='color: #adb5bd; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; display: block; margin-bottom: 5px;'>Lead Guest</span>
                                <p style='color: #212529; font-size: 15px; font-weight: 400; margin: 0;'>$userName</p>
                            </td>
                            <td width='50%' style='padding-bottom: 25px;'>
                                <span style='color: #adb5bd; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; display: block; margin-bottom: 5px;'>Contact</span>
                                <p style='color: #212529; font-size: 15px; font-weight: 400; margin: 0;'>$userMobile</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2'>
                                <span style='color: #adb5bd; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; display: block; margin-bottom: 5px;'>Pickup Location</span>
                                <p style='color: #212529; font-size: 15px; font-weight: 400; margin: 0;'>
                                    $pickupLocation
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td style='background-color: #fcfcfc; padding: 25px 40px; border-top: 2px dashed #e9ecef;'>
                    <table width='100%'>
                        <tr>
                            <td align='left'>
                                <span style='color: #adb5bd; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; display: block; margin-bottom: 2px;'>Total Paid</span>
                                <span style='font-size: 12px; color: #868e96;'>Includes Eco Fee</span>
                            </td>
                            <td align='right'>
                                <span style='font-size: 26px; font-weight: 700; color: #212529; letter-spacing: -0.5px;'>
                                    &#8369;$totalAmount
                                </span>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <table align='center' width='600' style='margin-top: 25px; text-align: center;'>
            <tr>
                <td style='color: #868e96; font-size: 12px; line-height: 1.5;'>
                    <p style='margin: 0 0 10px 0;'>Please present this email or your QR code upon pickup.</p>
                    <p style='margin: 0;'>&copy; 2025 Palawander. All rights reserved.</p>
                </td>
            </tr>
        </table>

    </body>
    </html>";

    $payload = [
        'sender' => ['name' => 'Palawander', 'email' => 'paredesjancarlo99@gmail.com'],
        'to' => [['email' => $userEmail, 'name' => $userName]],
        'subject' => "✅ Booking Confirmed: $tourName ($bookingRef)",
        'htmlContent' => $htmlContent
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'accept: application/json',
        'api-key: ' . $brevo_apiKey,
        'content-type: application/json'
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return ($httpCode == 201);
}
?>