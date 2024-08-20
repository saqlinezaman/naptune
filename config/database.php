<?php

$db = mysqli_connect("localhost","root","","naptune");

if(!$db){

    header("location: ../error/404.php");
}

?>