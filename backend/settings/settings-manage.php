<?php
session_start();

include "../../config/database.php";

if(isset($_POST["nameupdate-btn"])){
    $name = $_POST["usernames"];
    $email = $_POST["email"];

    if($name){
        $id = $_SESSION ['author-id'] ;
        $query = "UPDATE users SET name='$name' WHERE id= '$id'";

        mysqli_query($db,$query);
        $_SESSION ['author-name'] = "$name";
        $_SESSION["username-update-success"] = "Update Successfully"; 
        header("location: settings.php");
    }
    else{
        $_SESSION["username-update-error"] = "input your user name *";
        header("location: settings.php");
    }
    // email update

    if($email){
        $id = $_SESSION ['author-id'] ;
        $query = "UPDATE users SET email='$email' where id= ''";
        mysqli_query($db,$query);
        $_SESSION ['author-email'] = $email;
        $_SESSION["email-update-success"] = "Update Successfully";
        header("location: settings.php");

    }else{
        $_SESSION["email-update-error"] = "input your email *";
        header("location: settings.php");
    }
    }

    // password update

    if(isset($_POST["passupdate-btn"])){
        $old_pass = $_POST["old-pass"];
        $new_pass = $_POST["new-pass"];
        $c_pass = $_POST["c-pass"];
    
        if($old_pass && $new_pass && $new_pass){
            $enceypt = sha1($old_pass);
            $id = $_SESSION ['author-id'] ;
            $match_query = "SELECT COUNT(*) AS 'match' FROM users WHERE id='$id' AND password='$enceypt'";

           $connect = mysqli_query($db,$match_query);
           
            $match = mysqli_fetch_assoc($connect)['match'];
            
            if($match == 1){
                if($new_pass == $c_pass){
                    $new_encrypt = sha1( $new_pass);
                     $query = "UPDATE users SET password='$new_encrypt' WHERE id= '$id'"; 
                     mysqli_query($db,$query  ); 
                     $_SESSION["pass-update-success"] = "Password Update Successfully"; 
                     header("location: settings.php");
            
                }else{
                    $_SESSION["match-error"] = "password doesn't match *";
                 header("location: settings.php");
                }
            }else{
                $_SESSION["oldpasserror"] = "input your old password *";
            header("location: settings.php");
            echo "valo na";
            }
        }
        else{
            $_SESSION["pass-error"] = "pass error *";
            header("location: settings.php");
        }
    }



    // image set start

    if(isset($_POST["image-btn"])){
        $image = $_FILES["image"]['name'];
        $temp_path = $_FILES["image"]['tmp_name'];

        if($image){
            $id = $_SESSION ['author-id'] ;
            $name = $_SESSION ['author-name'] ;
            $explode = explode(".",$image);
            $extention = end($explode);
            // date_default_timezone_set('Asia/Dhaka');
            $new_name = $id. "-" . $name ."-".date("d-m-Y") . "-" . $extention;  
            $local_path = "../../public/profile/" . $new_name;

            if(move_uploaded_file($temp_path , $local_path)){
                    $query = "UPDATE users SET image='$new_name' WHERE id= '$id'";
                    mysqli_query($db,$query);
                    header("location: settings.php");
                   
            }else {
                header("location: settings.php");
            }
        }
        
        
    }

?>