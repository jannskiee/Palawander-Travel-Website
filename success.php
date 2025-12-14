<?php
$serverName = "DESKTOP-PK3JQC7\SQLEXPRESS01";
$connectionOptions = [
        "Database" => "PALAWANDER",
        "TrustServerCertificate" => true,
        "Authentication" => "ActiveDirectoryIntegrated"
];
$conn = sqlsrv_connect($serverName, $connectionOptions);
if ($conn === false) die(print_r(sqlsrv_errors(), true));

if (!isset($_GET['id'])) {
    header("Location: bookings-page.php");
    exit();
}
$bookingID = intval($_GET['id']);

$sql = "SELECT B.*, B.BookingStatus, C.FirstName, C.LastName, C.Email, C.MobileNumber, T.TourName 
        FROM Bookings B
        JOIN Customers C ON B.CustomerID = C.CustomerID
        JOIN Tours T ON B.TourID = T.TourID
        WHERE B.BookingID = ?";

$params = array($bookingID);
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) die(print_r(sqlsrv_errors(), true));
$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

if (!$row) die("Error: Booking not found.");

// 4. FORMAT DATA
$refNo = "PLW-" . str_pad($row['BookingID'], 6, "0", STR_PAD_LEFT);
$tourDate = $row['TravelDate']->format('F d, Y');
$total = number_format($row['TotalAmount'], 2);

// Generate QR Code
$qrData = urlencode($refNo);
$qrUrl = "https://quickchart.io/qr?text=$qrData&format=svg&margin=0&size=300&ecLevel=H";

// Check if canceled
$isCancelled = (isset($row['BookingStatus']) && $row['BookingStatus'] === 'Cancelled');
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Booking Confirmed | Palawander</title>
        <link href="assets/styles/success.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
    </head>
    <body>

    <div class="container d-flex flex-column align-items-center">

        <div class="text-center mb-4 no-print">
            <?php if ($isCancelled): ?>
                <div class="mb-3">
                    <i class="bi bi-x-circle-fill text-danger" style="font-size: 3rem;"></i>
                </div>
                <h2 class="fw-bold text-danger">Booking Cancelled</h2>
                <p class="text-muted">This reference number is no longer valid.</p>
            <?php else: ?>
                <div class="mb-3">
                    <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
                </div>
                <h2 class="fw-bold">Booking Confirmed!</h2>
                <p class="text-muted">We've sent a copy of this receipt to your email.</p>
            <?php endif; ?>
        </div>

        <div class="ticket-card <?php echo $isCancelled ? 'opacity-50' : ''; ?>" id="printableArea">

            <div class="ticket-header">
                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div style="max-width: 75%;">
                        <span class="label-text mb-2">Adventure</span>
                        <h3 class="fw-bold mb-0" style="line-height: 1.2;">
                            <?php echo htmlspecialchars($row['TourName']); ?>
                        </h3>
                    </div>

                    <div class="qr-vector-container">
                        <object data="<?php echo $qrUrl; ?>" type="image/svg+xml" width="100%" height="100%">
                            <img src="<?php echo $qrUrl; ?>" alt="QR Code"/>
                        </object>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <?php if ($isCancelled): ?>
                        <span class="badge bg-danger rounded-pill px-3 py-2 text-uppercase">
                        <i class="bi bi-x-circle me-1"></i> Cancelled
                    </span>
                    <?php else: ?>
                        <span class="status-badge">
                        <i class="bi bi-patch-check-fill"></i> Paid & Verified
                    </span>
                    <?php endif; ?>

                    <span class="ref-code"><?php echo $refNo; ?></span>
                </div>
            </div>

            <div class="ticket-body">
                <div class="row g-4">
                    <div class="col-6">
                        <span class="label-text">Travel Date</span>
                        <p class="value-text"><?php echo $tourDate; ?></p>
                    </div>
                    <div class="col-6">
                        <span class="label-text">Guests</span>
                        <p class="value-text"><?php echo $row['PaxCount']; ?> Person(s)</p>
                    </div>
                    <div class="col-6">
                        <span class="label-text">Lead Guest</span>
                        <p class="value-text"><?php echo htmlspecialchars($row['FirstName'] . ' ' . $row['LastName']); ?></p>
                    </div>
                    <div class="col-6">
                        <span class="label-text">Contact</span>
                        <p class="value-text small"><?php echo htmlspecialchars($row['MobileNumber']); ?></p>
                    </div>
                    <div class="col-12">
                        <span class="label-text">Pickup Location</span>
                        <div class="d-flex align-items-center gap-2">
                            <p class="value-text"><?php echo htmlspecialchars($row['PickupLocation']); ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ticket-footer">
                <div>
                    <span class="label-text" style="margin-bottom: 2px;">Total Paid</span>
                    <small class="text-muted d-block" style="font-size: 0.75rem;">Includes Eco Fee</small>
                </div>
                <div class="value-large text-dark">₱<?php echo $total; ?></div>
            </div>
        </div>

        <?php if ($isCancelled): ?>

            <div class="text-center mt-5 no-print">
                <p class="text-muted small mb-3">Do you want to remove this cancelled record from history?</p>

                <form action="delete.php" method="POST"
                      onsubmit="return confirm('WARNING: This will permanently delete this booking history. Are you sure?');">
                    <input type="hidden" name="booking_id" value="<?php echo $bookingID; ?>">
                    <button type="submit" class="btn btn-outline-secondary rounded-pill px-4 py-2 shadow-sm">
                        <i class="bi bi-trash-fill me-2"></i> Delete Record Permanently
                    </button>
                </form>

                <div class="mt-3">
                    <a href="index.php" class="text-decoration-none small text-muted">Go back to Home</a>
                </div>
            </div>

        <?php else: ?>

            <div class="mt-5 d-flex gap-3 justify-content-center flex-wrap no-print">
                <a href="bookings-page.php"
                   class="btn btn-light rounded-pill px-4 py-2 fw-semibold text-secondary border">
                    Book Another
                </a>

                <button onclick="window.print()" class="btn btn-dark rounded-pill px-4 py-2 fw-semibold shadow-sm">
                    <i class="bi bi-printer me-2"></i> Print Ticket
                </button>

                <form action="cancel.php" method="POST"
                      onsubmit="return confirm('Are you sure you want to cancel this booking? This action cannot be undone.');">
                    <input type="hidden" name="booking_id" value="<?php echo $bookingID; ?>">
                    <button type="submit" class="btn btn-danger rounded-pill px-4 py-2 fw-semibold shadow-sm">
                        <i class="bi bi-trash3 me-2"></i> Cancel
                    </button>
                </form>
            </div>

        <?php endif; ?>

    </div>

    </body>
    </html>
<?php sqlsrv_close($conn); ?>