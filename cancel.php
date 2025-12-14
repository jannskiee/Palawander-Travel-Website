<?php
include 'config/secrets.php';

$serverName = "DESKTOP-PK3JQC7\SQLEXPRESS01";
$connectionOptions = [
    "Database" => "PALAWANDER",
    "TrustServerCertificate" => true,
    "Authentication" => "ActiveDirectoryIntegrated"
];
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) die(print_r(sqlsrv_errors(), true));

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['booking_id'])) {
    $bookingID = intval($_POST['booking_id']);

    $sql = "UPDATE Bookings SET BookingStatus = 'Cancelled' WHERE BookingID = ?";
    $params = array($bookingID);

    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    header("Location: success.php?id=$bookingID&status=cancelled");
    exit();
} else {

    header("Location: booking.php");
    exit();
}
?>