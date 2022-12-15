<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/slick.css" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/intlTelInput.css">
    <link rel="stylesheet" href="../assets/font/qanelas/stylesheet.css" type="text/css">
    <title>Dalwheels</title>
</head>

<body>
    <header class="position-fixed w-100 default guest-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-md-0">
                <a class="navbar-brand py-md-0" href="../home/">
                    <img src="../assets/images/logo.png" alt="Logo" class="mw-100" draggable="false">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
                    <div class="login-menu-bar" style="display: none;">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="../home/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../used-car/used-car-listing.php">Used Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../finance-calculator/">Price Calculator</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../auto-parts/">Auto Store</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contact/">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link secondary-theme-button shadow mx-md-4" href="../ads/ad-post.php">Post An Ad</a>
                            </li>
                        </ul>
                        <!-- icon menu  -->
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">

                            </li>
                            <li class="nav-item">
                                <div class="btn-group">
                                    <button class="btn btn-sm actionBtns" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-user"></i>
                                    </button>
                                    <div class="dropdown-menu shadow loginOption">
                                        <ul class="dropdown-list">
                                            <li class="nav-item">
                                                <a href="../profile/profile.php">
                                                    <img src="../assets/images/profile.png" alt="User Icon" draggable="false" class="mw-100">
                                                    My Profile
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../order/my-order.php">
                                                    <img src="../assets/images/order.png" alt="Order Icon" draggable="false" class="mw-100">
                                                    My Orders
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../ads/my-ads.php">
                                                    <img src="../assets/images/carss.png" alt="Ad Icon" draggable="false" class="mw-100">
                                                    My Ads
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="../favourite/">
                                                    <img src="../assets/images/heart.png" alt="Ad Icon" draggable="false" class="mw-100">
                                                    Whishlist
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascipt: void();" data-toggle="modal" data-target="#logoutWarning">
                                                    <img src="../assets/images/logout.png" alt="Logout Icon" draggable="false" class="mw-100">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item position-relative">
                                <a class="btn actionBtns" href="../notification/"><i class="fa fa-bell"></i></a>
                                <span class="count">3</span>
                            </li>
                            <li class="nav-item">
                                <a class="btn actionBtns" href="../cart/"><i class="fa fa-shopping-cart"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="guest-menu-bar">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="../home/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../used-car/used-car-listing.php">Used Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript: void();" data-toggle="modal" data-target="#signIn">Price Calculator</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../auto-parts/">Auto Store</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../contact/">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link secondary-theme-button shadow mx-md-4" href="javascript: void();" data-toggle="modal" data-target="#signIn">Post An Ad</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item">
                                <a class="nav-link" href="../auth-pages/login.php">Sign In</a>
                            </li>
                            |
                            <li class="nav-item">
                                <a class="nav-link" href="../auth-pages/signUp.php">Sign Up</a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
    </header>