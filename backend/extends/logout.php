<?php

session_start();

session_unset();

header('location: ../../authentication/signin.php');

?>