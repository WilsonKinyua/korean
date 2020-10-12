<?php include "./config/config.php" ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Korean Solar Power Consortium – Kenya Ltd | Home Page </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <!-- online-fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header id="home">
        <div class="container">
            <div class="header d-lg-flex justify-content-between align-items-center py-sm-3 py-2 px-sm-2 px-1">
                <!-- logo -->
                <div id="logo">
                    <h1><a href="index.php">KSPC</a></h1>
                </div>
                <!-- //logo -->
                <!-- nav -->
                <div class="nav_w3ls ml-lg-5">
                    <nav>
                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="careers.php">Careers</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down"
                                        aria-hidden="true"></span>
                                </label>
                                <a href="#">Products <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>
                                    <li><a href="solar_panels.php" class="drop-text">Solar Panels</a></li>
                                    <li><a href="off_grid_solar.php" class="drop-text">Off Grid Solar</a></li>
                                    <li><a href="nverters.php" class="drop-text">Inverters & Electrical</a></li>
                                    <li><a href="batteries.php" class="drop-text">Batteries & Backup</a></li>
                                    <li><a href="grid_tie_solar.php" class="drop-text">Grid Tie Solar</a></li>
                                    <li><a href="racking_mounts.php" class="drop-text">Racking & Mounts</a></li>
                                    <li><a href="trackers.php" class="drop-text">Trackers</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                            <li class="nav-right-sty mt-lg-0 mt-sm-4 mt-3">
                                <a href="login.php" class="reqe-button text-uppercase">Login</a>
                                <a href="register.php" class="reqe-button text-uppercase">Register</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- //nav -->
            </div>
        </div>
    </header>
    <!-- //header -->