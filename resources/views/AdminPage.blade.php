<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com ===-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--======== CSS ========-->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
     
    <!--===== Iconscout CSS =====-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Admin Dashboard Panel</title> 
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="appd.png">
            </div>
            <span class="logo_name">Albergo Di Lusso</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#">
                    <i class="bx bx-home"></i>
                    <span class="link-name">Dashboard</span>
                </a></li>
                <li><a href="#">
                    <i class="bx bx-info-circle"></i>
                    <span class="link-name">Basic Information</span>
                </a></li>
                <li><a href="#">
                    <i class="bx bx-calendar"></i>
                    <span class="link-name">Reservation</span>
                </a></li>
                <li><a href="#">
                    <i class="bx bx-hotel"></i>
                    <span class="link-name">Manage Rooms</span>
                </a></li>
                <li><a href="#">
                    <i class="bx bx-user"></i>
                    <span class="link-name">Staff Section</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="index.html">
                    <i class="bx bx-log-out"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="bx bx-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>
                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="bx bx-menu sidebar-toggle"></i>

            <div class="search-box">
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="Admin.png" alt="Admin Profile">
        </div>

        <!-- Quick Overview Section -->
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class='bx bx-bar-chart'></i>
                    <span class="text">Quick Overview</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class='bx bx-book-open'></i>
                        <span class="text">Total Bookings</span>
                        <span class="number">120</span>
                    </div>
                    <div class="box box2">
                        <i class='bx bx-door-open'></i>
                        <span class="text">Rooms Available</span>
                        <span class="number">50</span>
                    </div>
                    <div class="box box3">
                        <i class='bx bx-user-circle'></i>
                        <span class="text">Total Users</span>
                        <span class="number">500</span>
                    </div>
                </div>
            </div>

            <!-- Recent Bookings Section -->
            <div class="recent-bookings">
                <div class="title">
                    <i class='bx bx-calendar-check'></i>
                    <span class="text">Recent Bookings</span>
                </div>
                <div class="booking-details">
                    <span class="booking-id">Booking ID: 12345</span>
                    <span class="booking-user">User: John Doe</span>
                    <span class="booking-room">Room: Deluxe Suite</span>
                </div>
                <div class="action-buttons">
                    <button class="btn-delete">Delete</button>
                    <button class="btn-view-all">View All Bookings</button>
                </div>
            </div>

        </div>
    </section>
</body>
</html>
