<?php
include '../../config/database.php';
session_start();

if(isset($_POST['fact-insert'])){
    $titel = $_POST['titel'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];

    if($titel && $description && $icon){
        $query = "INSERT INTO facts (titel,description,icon) VALUES ('$titel','$description','$icon')";
        mysqli_query($db,$query);
        $_SESSION ['fact-insart'] = "Inserted";
        header("location: fact.php");
    }
}

?>