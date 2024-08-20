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
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="signin.php">Sign In</a></p>

            <!-- form start -->

            <form action="signup.php" method = "POST">

            <div class="auth-credentials m-b-xxl">

            <!-- username start -->
            
                <label for="signUpUsername" class="form-label">Name</label>
                <input name= "username" type="text" class="form-control m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name" value="<?= (isset($_SESSION["old-username"])) ?  $_SESSION["old-username"] : " " ; unset($_SESSION["old-username"]); ?>"> 

            <!-- name-error -->

            <?php if(isset($_SESSION["username-error"])){?> 
            <div style="color:red;" id="emailHelp" class="form-text m-b-md"><?php echo  $_SESSION["username-error"];?>*</div>
            <?php } unset($_SESSION["username-error"]);?> 

            <!-- username end -->

            <!-- email start -->

                <label for="signUpEmail" class="form-label">Email address</label>
                <input name="email" type="text" class="form-control m-b-md" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@neptune.com" value="<?= (isset( $_SESSION["old-email"])) ?  $_SESSION["old-email"] : " " ; unset( $_SESSION["old-email"]);?>">

            <!-- email error -->

               <?php if(isset($_SESSION["email-error"])){?>
               <div style="color:red;" id="emailHelp" class="form-text m-b-md"><?php echo  $_SESSION["email-error"];?>*</div>
               <?php } unset($_SESSION["email-error"]);?>    

            <!-- email end -->

            <!-- password start -->

                <label for="signUpPassword" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" value="<?= (isset($_SESSION["old-password"])) ? $_SESSION["old-password"] : "" ; unset($_SESSION["old-password"])?>">

                <!-- password error -->

                <?php if(isset($_SESSION["pass-error"])){?>
               <div style="color:red;" id="emailHelp" class="form-text m-b-md"><?php echo  $_SESSION["pass-error"];?>*</div>
               <?php } unset($_SESSION["pass-error"]);?>

                <!-- password end -->

                <!-- confirm password start -->

                <label for="signUpPassword" class="form-label">Confirm Password</label>
                <input name="confirm-password" type="password" class="form-control" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" value="<?= (isset($_SESSION["old-con-password"])) ? $_SESSION["old-con-password"] : "" ; unset($_SESSION["old-con-password"])?>">

                <!-- confirm pass error -->

                <?php if(isset($_SESSION["confirm-pass-error"])){?>
               <div style="color:red;" id="emailHelp" class="form-text m-b-md"><?php echo  $_SESSION["confirm-pass-error"];?>*</div>
               <?php } unset($_SESSION["confirm-pass-error"]);?>

                <!-- confirm password end -->
            </div>

                 <!-- button start -->

            <div class="auth-submit">
                <button name="submit-btn" type="submmit" class="btn btn-primary">Sign Up</button>
            </div>

             <!-- button start -->

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