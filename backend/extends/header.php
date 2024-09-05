<?php
session_start();

include '../../config/database.php';

if(!isset($_SESSION ['author-id'])){
header("location: ../../authentication/signin.php");
}

$explode = explode("/" , $_SERVER["PHP_SELF"]);
$link = end($explode);

$id = $_SESSION ['author-id'] ;
$query = "SELECT * FROM users WHERE id='$id'";
$connect = mysqli_query($db,$query);
$user = mysqli_fetch_assoc($connect);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../../public/backend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../public/backend/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../public/backend/assets/plugins/pace/pace.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <!-- Theme Styles -->
    <link href="../../public/backend/assets/css/main.min.css" rel="stylesheet">
    <link href="../../public/backend/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../../public/backend/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/backend/assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="index.html" class="logo-icon"><span class="logo-text">Neptune</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <?php if($user ["image"] =='defult imgwebp.webp') :?>
                        <img src="../../public/defult image/<?= $user ["image"]?>">
                        <?php else : ?>
                        <img src="../../public/profile/<?= $user["image"]?>">
                        <?php endif;?>
                        <span class="activity-indicator"></span>
                        <span class="user-info-text"><?= $_SESSION ['author-name'] ;?> <br><span class="user-state-info"><?= $_SESSION ['author-email'] ;?></span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li class="">
                        <a href="../../index.php"><i class="material-icons-two-tone">home</i>Visit site<span class="badge rounded-pill badge-danger float-end"></span></a>
                    </li>
                    <li class="<?= ($link == "home.php") ? "active-page" : " "?>">
                        <a href="../home/home.php" class="active"><i class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <li class="<?= ($link == "settings.php") ? "active-page" : " "?>">
                        <a href="../settings/settings.php"><i class="material-icons-two-tone">settings</i>Settings<span class="badge rounded-pill badge-danger float-end"></span></a>
                    </li>
                    <li class="<?= ($link == "services.php") ? "active-page" : " "?>">
                        <a href="../services/services.php"><i class="material-icons-two-tone">medical_services</i>services<span class="badge rounded-pill badge-danger float-end"></span></a>
                    </li>

                    <li class="<?= ($link == "portfolios.php") ? "active-page" : " "?>">
                        <a href="../portfolio/portfolios.php"><i class="material-icons-two-tone">light</i>Portfolios<span class="badge rounded-pill badge-danger float-end"></span></a>
                    </li>
                    <li class="<?= ($link == "fact.php") ? "active-page" : " "?>">
                        <a href="../fact/fact.php"><i class="material-icons-two-tone">comment</i>Facts<span class="badge rounded-pill badge-danger float-end"></span></a>
                    </li>
                    <li class="<?= ($link == "testimonials.php") ? "active-page" : " "?>">
                        <a href="../testimonial/testimonials.php"><i class="material-icons-two-tone">cloud_queue</i>Tastimonials<span class="badge rounded-pill badge-danger float-end"></span></a>
                    </li>
                    
                   <!--  <li>
                        <a href="calendar.html"><i class="material-icons-two-tone">calendar_today</i>Calendar<span class="badge rounded-pill badge-success float-end">14</span></a>
                    </li>
                    <li>
                        <a href="todo.html"><i class="material-icons-two-tone">done</i>Todo</a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" placeholder="Type here..." aria-label="Search">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i class="material-icons">first_page</i></a>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="addDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons">add</i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="addDropdownLink">
                                        <li><a class="dropdown-item" href="#">New Workspace</a></li>
                                        <li><a class="dropdown-item" href="#">New Board</a></li>
                                        <li><a class="dropdown-item" href="#">Create Project</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown hidden-on-mobile">
                                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdownLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="material-icons-outlined">explore</i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-lg large-items-menu" aria-labelledby="exploreDropdownLink">
                                        <li>
                                            <h6 class="dropdown-header">Repositories</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune iOS
                                                    <span class="badge badge-warning">1.0.2</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <h5 class="dropdown-item-title">
                                                    Neptune Android
                                                    <span class="badge badge-info">dev</span>
                                                    <span class="hidden-helper-text">switch<i class="material-icons">keyboard_arrow_right</i></span>
                                                </h5>
                                                <span class="dropdown-item-description">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-btn-item d-grid">
                                            <button class="btn btn-primary">Create new repository</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
            
                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">

                               <li>
                                <a class="rounded" style="border: none; padding: 10px 24px;background-color:red;color:aliceblue ; font-size: 16px; font-weight:600; text-decoration :none; " href="../extends/logout.php">Log out</a>
                            </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">