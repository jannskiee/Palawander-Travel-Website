<?php
$serverName = "DESKTOP-PK3JQC7\SQLEXPRESS01";
$connectionOptions = [
        "Database" => "PALAWANDER",
        "TrustServerCertificate" => true,
        "Authentication" => "ActiveDirectoryIntegrated"
];

$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

include 'api/send-email-booking.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $tourName = trim($_POST['tour']);
    $tourDate = $_POST['travel_date'];
    $paxCount = intval($_POST['pax']);

    $firstName = $_POST['first_name'];
    $middleName = $_POST['middle_name'] ?? null;
    $lastName = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];

    $idType = $_POST['id_type'];

    $pickup = $_POST['pickup_location'];
    $emergencyName = $_POST['emergency_name'];
    $emergencyNumber = $_POST['emergency_number'];

    $dietary = $_POST['dietary_restrictions'] ?? null;
    $medical = $_POST['medical_conditions'] ?? null;
    $requests = $_POST['other_requests'] ?? null;

    $paymentMethod = $_POST['payment'];

    $sqlTour = "SELECT TOP 1 TourID, BasePrice FROM Tours WHERE TRIM(TourName) = ?";
    $paramsTour = array($tourName);
    $resultTour = sqlsrv_query($conn, $sqlTour, $paramsTour);

    if ($resultTour === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $tourID = 0;
    $basePrice = 0.00;

    if ($rowTour = sqlsrv_fetch_array($resultTour, SQLSRV_FETCH_ASSOC)) {
        $tourID = $rowTour['TourID'];
        $basePrice = $rowTour['BasePrice'];
    } else {
        die("Error: Tour not found. Selected: " . htmlspecialchars($tourName));
    }

    $totalAmount = $basePrice * $paxCount;

    $sqlCustomer = "INSERT INTO Customers (FirstName, MiddleName, LastName, DateOfBirth, Gender, Nationality, Email, MobileNumber, CreatedAt) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, GETDATE()); 
                    SELECT SCOPE_IDENTITY() AS CustomerID";

    $paramsCustomer = array($firstName, $middleName, $lastName, $dob, $gender, $nationality, $email, $mobile);
    $resultCustomer = sqlsrv_query($conn, $sqlCustomer, $paramsCustomer);

    if ($resultCustomer === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    sqlsrv_next_result($resultCustomer);
    $rowCustomer = sqlsrv_fetch_array($resultCustomer, SQLSRV_FETCH_ASSOC);
    $customerID = $rowCustomer['CustomerID'];

    if (isset($_FILES['id_file']) && $_FILES['id_file']['error'] === UPLOAD_ERR_OK) {

        $destination = "uploads/ids/";
        if (!is_dir($destination)) mkdir($destination, 0777, true);

        $fileName = basename($_FILES['id_file']['name']);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $newFileName = "(" . pathinfo($fileName, PATHINFO_FILENAME) . ")_ID_" . $customerID . "_" . time() . "." . $fileType;
        $targetFilePath = $destination . $newFileName;

        $allowedFileTypes = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileType, $allowedFileTypes)) {
            if (move_uploaded_file($_FILES['id_file']['tmp_name'], $targetFilePath)) {

                $sqlIdInsert = "INSERT INTO CustomerDocuments (CustomerID, IDType, FileName, FilePath, UploadDate) 
                                VALUES (?, ?, ?, ?, GETDATE())";
                $paramsIdInsert = array($customerID, $idType, $fileName, $targetFilePath);

                $resultIdInsert = sqlsrv_query($conn, $sqlIdInsert, $paramsIdInsert);

                if ($resultIdInsert === false) {
                    error_log(print_r(sqlsrv_errors(), true));
                }
            }
        }
    }

    $sqlBooking = "INSERT INTO Bookings (CustomerID, TourID, BookingDate, TravelDate, PaxCount, TotalAmount, PickupLocation, EmergencyContactName, EmergencyContactNumber, DietaryRestrictions, MedicalConditions, SpecialRequests) 
                   VALUES (?, ?, GETDATE(), ?, ?, ?, ?, ?, ?, ?, ?, ?); 
                   SELECT SCOPE_IDENTITY() AS BookingID";

    $paramsBooking = array($customerID, $tourID, $tourDate, $paxCount, $totalAmount, $pickup, $emergencyName, $emergencyNumber, $dietary, $medical, $requests);
    $resultBooking = sqlsrv_query($conn, $sqlBooking, $paramsBooking);

    if ($resultBooking === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    sqlsrv_next_result($resultBooking);
    $rowBooking = sqlsrv_fetch_array($resultBooking, SQLSRV_FETCH_ASSOC);
    $bookingID = $rowBooking['BookingID'];

    $sqlPayment = "INSERT INTO Payments (BookingID, PaymentMethod, Amount) VALUES (?, ?, ?)";
    $paramsPayment = array($bookingID, $paymentMethod, $totalAmount);
    $resultPayment = sqlsrv_query($conn, $sqlPayment, $paramsPayment);

    if ($resultPayment === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $fullName = $firstName . ' ' . $lastName;
    $refNo = "PLW-" . str_pad($bookingID, 6, "0", STR_PAD_LEFT);
    $formattedTotal = number_format($totalAmount, 2);

    if (function_exists('sendBookingEmail')) {
        sendBookingEmail($email, $fullName, $refNo, $tourName, $tourDate, $paxCount, $formattedTotal, $pickup, $mobile);
    }

    sqlsrv_close($conn);

    echo "<script>
            window.location.href = 'success.php?id=" . $bookingID . "';
          </script>";
    exit();
}
?>


//CREATE TABLE Tours (
//    TourID INT IDENTITY(1,1) PRIMARY KEY,
//    TourName NVARCHAR(100) NOT NULL,
//    BasePrice DECIMAL(10, 2) NOT NULL,
//    Description NVARCHAR(255),
//    IsActive BIT DEFAULT 1 -- Useful for hiding tours without breaking history
//);
//
//CREATE TABLE Customers (
//    CustomerID INT IDENTITY(1,1) PRIMARY KEY,
//    FirstName NVARCHAR(50) NOT NULL,
//    MiddleName NVARCHAR(50),
//    LastName NVARCHAR(50) NOT NULL,
//    DateOfBirth DATE NOT NULL,
//    Gender NVARCHAR(20) NOT NULL,
//    Nationality NVARCHAR(50) NOT NULL,
//    Email NVARCHAR(100) NOT NULL,
//    MobileNumber NVARCHAR(20) NOT NULL,
//    CreatedAt DATETIME DEFAULT GETDATE()
//);
//
//CREATE TABLE CustomerDocuments (
//    DocumentID INT IDENTITY(1,1) PRIMARY KEY,
//    CustomerID INT NOT NULL,
//    IDType NVARCHAR(50) NOT NULL,
//    FileName NVARCHAR(255) NOT NULL,
//    FilePath NVARCHAR(MAX) NOT NULL,
//    UploadDate DATETIME DEFAULT GETDATE(),
//    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID)
//);
//
//CREATE TABLE Bookings (
//    BookingID INT IDENTITY(1,1) PRIMARY KEY,
//    CustomerID INT NOT NULL,
//    TourID INT NOT NULL,
//    BookingDate DATETIME DEFAULT GETDATE(),
//    TravelDate DATE NOT NULL,
//    PaxCount INT NOT NULL,
//    TotalAmount DECIMAL(10, 2) NOT NULL,
//    PickupLocation NVARCHAR(255) NOT NULL,
//    EmergencyContactName NVARCHAR(100) NOT NULL,
//    EmergencyContactNumber NVARCHAR(20) NOT NULL,
//    DietaryRestrictions NVARCHAR(MAX),
//    MedicalConditions NVARCHAR(MAX),
//    SpecialRequests NVARCHAR(MAX),
//    BookingStatus NVARCHAR(20) DEFAULT 'Confirmed' WITH VALUES;
//    FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID),
//    FOREIGN KEY (TourID) REFERENCES Tours(TourID)
//);
//
//CREATE TABLE Payments (
//    PaymentID INT IDENTITY(1,1) PRIMARY KEY,
//    BookingID INT NOT NULL,
//    PaymentMethod NVARCHAR(50) NOT NULL,
//    Amount DECIMAL(10, 2) NOT NULL,
//
//    TransactionDate DATETIME NOT NULL DEFAULT GETDATE(),
//
//    FOREIGN KEY (BookingID) REFERENCES Bookings(BookingID)
//);
//
