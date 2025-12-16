<?php
session_start();

// 1. SECURITY CHECK
if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !== true) {
    header("Location: login.php");
    exit();
}

// 2. DATABASE CONNECTION
$serverName = "DESKTOP-PK3JQC7\\SQLEXPRESS01";
$connectionOptions = array(
    "Database" => "PALAWANDER",
    "TrustServerCertificate" => true
);
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}

// --- FETCH STATS ---

// A. Total Sales (Confirmed Only)
$sqlSales = "SELECT SUM(TotalAmount) as Total FROM Bookings WHERE BookingStatus = 'Confirmed'";
$stmtSales = sqlsrv_query($conn, $sqlSales);
$rowSales = sqlsrv_fetch_array($stmtSales);
$totalSales = $rowSales['Total'] ?? 0;

// B. Active Bookings Count
$sqlActive = "SELECT COUNT(*) as Count FROM Bookings WHERE BookingStatus = 'Confirmed'";
$stmtActive = sqlsrv_query($conn, $sqlActive);
$rowActive = sqlsrv_fetch_array($stmtActive);
$totalActive = $rowActive['Count'];

// C. Cancelled Bookings Count
$sqlCancel = "SELECT COUNT(*) as Count FROM Bookings WHERE BookingStatus = 'Cancelled'";
$stmtCancel = sqlsrv_query($conn, $sqlCancel);
$rowCancel = sqlsrv_fetch_array($stmtCancel);
$totalCancel = $rowCancel['Count'];

// D. Total Passengers Serviced
$sqlPax = "SELECT SUM(PaxCount) as TotalPax FROM Bookings WHERE BookingStatus = 'Confirmed'";
$stmtPax = sqlsrv_query($conn, $sqlPax);
$rowPax = sqlsrv_fetch_array($stmtPax);
$totalPax = $rowPax['TotalPax'] ?? 0;

// E. Popular Tours (Top 3)
$sqlPopular = "SELECT TOP 3 T.TourName, COUNT(B.BookingID) as BookCount 
               FROM Bookings B 
               JOIN Tours T ON B.TourID = T.TourID 
               WHERE B.BookingStatus = 'Confirmed'
               GROUP BY T.TourName 
               ORDER BY BookCount DESC";
$stmtPopular = sqlsrv_query($conn, $sqlPopular);

// F. Recent Bookings List (Expanded)
$sqlList = "SELECT TOP 10
            B.BookingID, 
            C.FirstName, C.LastName, C.Email, C.MobileNumber,
            T.TourName, 
            B.TravelDate, 
            B.TotalAmount, 
            B.BookingStatus,
            B.PaxCount,
            CD.FilePath as IDPath
        FROM Bookings B
        JOIN Customers C ON B.CustomerID = C.CustomerID
        JOIN Tours T ON B.TourID = T.TourID
        LEFT JOIN CustomerDocuments CD ON C.CustomerID = CD.CustomerID
        ORDER BY B.BookingID DESC";
$stmtList = sqlsrv_query($conn, $sqlList);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard | Palawander</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --pala-dark: #212529;
            --pala-orange: #ff9f43;
            --bg-light: #f4f6f9;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-light);
        }

        /* Navbar Branding */
        .brand-text { font-weight: 800; letter-spacing: -0.5px; font-size: 1.25rem; }
        .text-pala { color: white; }
        .text-wander { color: white}

        /* Cards */
        .stat-card {
            border: none;
            border-radius: 1rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            background: white;
        }
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }
        .icon-box {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.75rem;
            font-size: 1.5rem;
        }

        /* Table */
        .table-card {
            border: none;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }
        .table thead th {
            font-weight: 600;
            font-weight: 600;
            color: #6c757d;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            background-color: #f8f9fa;
            border-bottom: 2px solid #edf2f7;
            padding: 1rem;
        }
        .table tbody td {
            padding: 1rem;
            vertical-align: middle;
            font-size: 0.85rem; /* Slightly smaller font for more data */
        }
        .avatar-circle {
            width: 35px;
            height: 35px;
            background-color: #e9ecef;
            color: #495057;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top px-4 py-3 shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2" href="#">
            <span class="brand-text">
                <span class="text-pala">PALA</span><span class="text-wander">WANDER</span>
            </span>
            <span class="badge bg-white text-dark ms-2 rounded-pill" style="font-size: 0.7rem;">ADMIN</span>
        </a>

        <div class="d-flex align-items-center gap-3">
            <div class="text-white text-end d-none d-md-block">
                <small class="d-block opacity-75" style="font-size: 0.75rem;">Logged in as</small>
                <span class="fw-semibold">Administrator</span>
            </div>
            <a href="logout.php" class="btn btn-outline-danger btn-sm rounded-pill px-3 fw-bold">
                <i class="bi bi-box-arrow-right me-1"></i> Logout
            </a>
        </div>
    </div>
</nav>

<div class="container-fluid px-5 py-5"> <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
            <h2 class="fw-bold mb-1">Overview</h2>
            <p class="text-muted mb-0">Here's what's happening with your bookings today.</p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-3">
            <div class="card stat-card p-3 h-100">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-muted small fw-bold text-uppercase mb-1">Total Revenue</p>
                        <h3 class="fw-bold mb-0 text-dark">₱<?php echo number_format($totalSales); ?></h3>
                    </div>
                    <div class="icon-box bg-success-subtle text-success">
                        <i class="bi bi-cash-stack"></i>
                    </div>
                </div>
                <div class="mt-auto">
                    <span class="badge bg-success-subtle text-success rounded-pill">
                        <i class="bi bi-arrow-up-short"></i> Confirmed
                    </span>
                    <small class="text-muted ms-1">sales only</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card p-3 h-100">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-muted small fw-bold text-uppercase mb-1">Active Bookings</p>
                        <h3 class="fw-bold mb-0 text-primary"><?php echo $totalActive; ?></h3>
                    </div>
                    <div class="icon-box bg-primary-subtle text-primary">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                </div>
                <div class="mt-auto">
                    <small class="text-muted">Scheduled trips</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card p-3 h-100">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-muted small fw-bold text-uppercase mb-1">Total Pax</p>
                        <h3 class="fw-bold mb-0 text-info"><?php echo $totalPax; ?></h3>
                    </div>
                    <div class="icon-box bg-info-subtle text-info">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
                <div class="mt-auto">
                    <small class="text-muted">Guests served</small>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card p-3 h-100">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <p class="text-muted small fw-bold text-uppercase mb-1">Cancelled</p>
                        <h3 class="fw-bold mb-0 text-danger"><?php echo $totalCancel; ?></h3>
                    </div>
                    <div class="icon-box bg-danger-subtle text-danger">
                        <i class="bi bi-x-circle"></i>
                    </div>
                </div>
                <div class="mt-auto">
                    <small class="text-muted">Lost bookings</small>
                </div>
            </div>
        </div>
    </div>

    <div class="card table-card h-100 mb-5">
        <div class="card-header bg-white p-4 d-flex justify-content-between align-items-center">
            <h5 class="mb-0 fw-bold">Recent Bookings</h5>
            <a href="#" class="text-decoration-none small fw-bold text-wander">View All</a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                <tr>
                    <th class="ps-4">ID</th>
                    <th>Customer Info</th>
                    <th>Contact Details</th>
                    <th>Tour Package</th>
                    <th>Travel Date</th>
                    <th>Payment</th>
                    <th>ID Document</th> <th>Status</th>
                    <th class="text-end pe-4">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php while($row = sqlsrv_fetch_array($stmtList, SQLSRV_FETCH_ASSOC)): ?>
                    <tr>
                        <td class="ps-4 fw-bold">#<?php echo $row['BookingID']; ?></td>

                        <td>
                            <div class="d-flex align-items-center">
                                <div class="avatar-circle me-2">
                                    <?php echo substr($row['FirstName'], 0, 1) . substr($row['LastName'], 0, 1); ?>
                                </div>
                                <div>
                                    <div class="fw-bold text-dark"><?php echo $row['FirstName'] . ' ' . $row['LastName']; ?></div>
                                    <div class="small text-muted"><?php echo $row['PaxCount']; ?> Pax</div>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="d-flex flex-column">
                                <span class="small"><i class="bi bi-envelope me-1"></i><?php echo $row['Email']; ?></span>
                                <span class="small text-muted"><i class="bi bi-phone me-1"></i><?php echo $row['MobileNumber']; ?></span>
                            </div>
                        </td>

                        <td>
                            <span class="fw-semibold text-dark"><?php echo $row['TourName']; ?></span>
                        </td>

                        <td><?php echo $row['TravelDate']->format('M d, Y'); ?></td>

                        <td class="fw-bold text-dark">₱<?php echo number_format($row['TotalAmount']); ?></td>

                        <td>
                            <?php if(!empty($row['IDPath'])): ?>
                                <a href="../<?php echo $row['IDPath']; ?>" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill px-2 py-0" style="font-size: 0.75rem;">
                                    <i class="bi bi-file-earmark-image me-1"></i>View ID
                                </a>
                            <?php else: ?>
                                <span class="text-muted small">No File</span>
                            <?php endif; ?>
                        </td>

                        <td>
                            <?php if($row['BookingStatus'] == 'Confirmed'): ?>
                                <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2">Confirmed</span>
                            <?php else: ?>
                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill px-2">Cancelled</span>
                            <?php endif; ?>
                        </td>

                        <td class="text-end pe-4">
                            <a href="../success.php?id=<?php echo $row['BookingID']; ?>" target="_blank" class="btn btn-light btn-sm rounded-circle border shadow-sm" title="View Ticket">
                                <i class="bi bi-eye"></i>
                            </a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>

</body>
</html>