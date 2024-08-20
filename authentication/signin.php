
<?php
session_start();

if(isset($_SESSION ['author-id'])){
    header("location: ../backend/home/home.php");
    }
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
    <link href="../public/backend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/backend/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../public/backend/assets/plugins/pace/pace.css" rel="stylesheet">

    
    <!-- Theme Styles -->
    <link href="../public/backend/assets/css/main.min.css" rel="stylesheet">
    <link href="../public/backend/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../public/backend/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../public/backend/assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="register.php">Sign Up</a></p>

            <!-- register complete -->
            <?php if(isset ($_SESSION["register-complete"])){  ?>

            <div class="alert alert-custom" role="alert">
           <div class="custom-alert-icon icon-primary"><i class="material-icons-outlined">done</i></div>
           <div class="alert-content">
            <span class="alert-title"><?php echo $_SESSION["register-complete"];?></span>
           <span class="alert-text"><?php echo "Hello " . $_SESSION["register-name"];?></span>
           </div>
           <?php } unset($_SESSION["register-complete"])?>

           <!-- register end -->

            <!-- Log in unseccessful start -->
            <?php if(isset ($_SESSION["login_unsuccessful"])){  ?>

            <div class="alert alert-custom" role="alert">
           <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">done</i></div>
           <div class="alert-content">
            <span class="alert-title"><?php echo $_SESSION["login_unsuccessful"];?></span>
           <span class="alert-text"><?php echo  $_SESSION["login_unsuccessful"];?></span>
           </div>
           <?php } unset($_SESSION["login_unsuccessful"])?>

           <!-- Kog in unsuccessful end -->

           <form action="signup.php" method="POST">

            <div class="auth-credentials m-b-xxl">
                <label for="signInEmail" class="form-label">Email address</label>
                <input type="text" class="form-control m-b-md" name="email" aria-describedby="signInEmail" placeholder="example@neptune.com" value="<?php if(isset($_SESSION["register-email"])){
                    echo $_SESSION["register-email"];
                }else {echo " ";} unset($_SESSION["register-email"]);?>">

                <!-- email error -->

                <?php if(isset($_SESSION["email-error"])){?>
               <div style="color:red;" id="emailHelp" class="form-text m-b-md"><?php echo  $_SESSION["email-error"];?>*</div>
               <?php } unset($_SESSION["email-error"]);?>

                <!-- password -->

                <label for="signInPassword" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">

                    <!-- pass error -->

                <?php if(isset($_SESSION["pass-error"])){?>
               <div style="color:red;" id="emailHelp" class="form-text m-b-md"><?php echo  $_SESSION["pass-error"];?>*</div>
               <?php } unset($_SESSION["pass-error"]);?>

            </div>

            <div class="auth-submit">
                <button type="submit" class="btn btn-primary" name="login-btn" >Sign in </button>
            </div>

            </form>

            <!-- form end -->
            <div class="divider"></div>            
        </div>
    </div>
    
    <!-- Javascripts -->
    <script src="../public/backend/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="../public/backend/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/backend/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../public/backend/assets/plugins/pace/pace.min.js"></script>
    <script src="../public/backend/assets/js/main.min.js"></script>
    <script src="../public/backend/assets/js/custom.js"></script>
</body>
</html>