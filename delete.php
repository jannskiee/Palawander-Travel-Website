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

    $sqlPayment = "DELETE FROM Payments WHERE BookingID = ?";
    $stmtPayment = sqlsrv_query($conn, $sqlPayment, array($bookingID));

    $sqlGetCust = "SELECT CustomerID FROM Bookings WHERE BookingID = ?";
    $stmtGetCust = sqlsrv_query($conn, $sqlGetCust, array($bookingID));
    $rowCust = sqlsrv_fetch_array($stmtGetCust, SQLSRV_FETCH_ASSOC);
    $customerID = $rowCust['CustomerID'];

    $sqlBooking = "DELETE FROM Bookings WHERE BookingID = ?";
    $stmtBooking = sqlsrv_query($conn, $sqlBooking, array($bookingID));

    if ($stmtBooking) {
        $sqlDocs = "DELETE FROM CustomerDocuments WHERE CustomerID = ?";
        sqlsrv_query($conn, $sqlDocs, array($customerID));

        $sqlCust = "DELETE FROM Customers WHERE CustomerID = ?";
        sqlsrv_query($conn, $sqlCust, array($customerID));

        echo "<script>
                alert('Booking record deleted successfully.');
                window.location.href = 'bookings-page.php';
              </script>";
    } else {
        die(print_r(sqlsrv_errors(), true));
    }
}
?>