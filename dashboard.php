<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/php-scripts/main.php';
$main = new Main();
$user = $main->loginCheck();
if (!$user) {
    header("location:index.php");
} else {
    $username = $_SESSION['user']['username'];
    $usertype = $_SESSION['user']['usertype'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="114x114" href="./favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicons/favicon-16x16.png">
    <link rel="manifest" href="./favicons/site.webmanifest">
    <link rel="mask-icon" href="./favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="./assets/styles/core/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet/less" type="text/css" href="./assets/styles/styles.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js"></script>
    <title>Dashboard | Fast value inspection</title>
</head>

<body class="dashboard">
    <aside class="side-menu-wrapper">
        <a class="navbar-brand" href="#">
            <img src="./assets/images/logo.png" alt="Company Logo" class="logo">
        </a>
        <ul class="menu-list">
            <li>
                <a href="#" class="menu-option active">Dashboard</a>
            </li>
            <li>
                <a href="./view-details.php" class="menu-option">View vehicle details</a>
            </li>
            <?php
            if (isset($usertype) && $usertype == 'admin') {
            ?>
                <li>
                    <a href="./add-edit-user.php" class="menu-option">Add/Edit users</a>
                </li>
            <?php
            }
            ?>
            <?php
            if (isset($usertype) && $usertype == 'admin') {
            ?>
                <li>
                    <a href="./view-users.php" class="menu-option">View users</a>
                </li>
            <?php
            }
            ?>
        </ul>
    </aside>
    <div class="sidenav-overlay"></div>
    <main class="main-wrapper">
        <header>
            <section class="header">
                <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out">
                    <i class="material-icons">menu</i>
                </a>
                <div class="d-flex align-items-center flex-grow-1 justify-content-end justify-content-lg-between">
                    <h2 class="d-none d-lg-block m-0">Dashboard</h2>
                    <div class="d-flex align-items-center">
                        <p class="m-0 mr-3">Welcome <?php
                                                    if (isset($username)) {
                                                    ?>
                                <?php echo $username; ?>
                            <?php
                                                    }
                            ?></p>
                        <a href="./logout.php" class="btn-floating btn-medium waves-effect waves-light">
                            <i class="material-icons">input</i>
                        </a>
                    </div>
                </div>
            </section>
        </header>
        <div class="flex-grow-1">
            <div class="content-wrapper-before"></div>
            <div class="container pt-5">
                <div class="card">
                    <div class="card-content">
                        <h2 class="mb-5">Choose the type of vehicle</h2>
                        <div class="row button-wrapper">
                            <div class="col-12 col-md-6 col-xl-3">
                                <a href="./four-wheeler-entry.php" class="btn-medium waves-effect waves-light btn redirect-btn blue">
                                    <i class="material-icons">directions_car</i>
                                    <p>Four wheeler</p>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-3">
                                <a href="" class="btn-medium waves-effect waves-light btn redirect-btn blue">
                                    <i class="material-icons">two_wheeler</i>
                                    <p>Two wheeler</p>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-3">
                                <a href="./CV-entry.php" class="btn-medium waves-effect waves-light btn redirect-btn blue">
                                    <i class="material-icons">directions_bus</i>
                                    <p>CV</p>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-xl-3">
                                <a href="" class="btn-medium waves-effect waves-light btn redirect-btn blue">
                                    <i class="material-icons">ev_station</i>
                                    <p>FE</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="p-3 text-center">Copyrights &copy; Fast value India Pvt.Ltd. All rights reserved</footer>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="./assets/lib/core/materialize.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.sidenav-trigger').on('click', function(e) {
                $('.side-menu-wrapper').addClass("show");
                $('.sidenav-overlay').on('click', function(e) {
                    $('.side-menu-wrapper').removeClass("show");
                });
                e.preventDefault();
            });
        });
    </script>
</body>

</html>