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


// active deactive 

if(isset($_GET['statusid'])){
    $id = $_GET['statusid'];

    $status_query = "SELECT * FROM facts WHERE id='$id'";
    $connect = mysqli_query($db,$status_query);
    $fact = mysqli_fetch_assoc($connect);

    if($fact['status'] == 'deactive'){
        $update = "UPDATE facts SET status='active' WHERE id='$id'";
        mysqli_query($db,$update);
        $_SESSION ['fact-status'] = "Activeted";
        header("location: fact.php");

    }else{
        $update = "UPDATE facts SET status='deactive'WHERE id='$id'";
        mysqli_query($db,$update);
        $_SESSION ['fact-status'] = "Deactiveted";
        header("location: fact.php");
    }

}
// delete
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $delete_query = "DELETE FROM facts WHERE id='$id'";
    mysqli_query($db,$delete_query);

    $_SESSION['portfolio-delete'] = "Deleted";
    header("location: fact.php");
}

// update 

if(isset($_POST['fact-update'])){
    if(isset($_GET['updateid'])){
        $id = $_GET['updateid'];
            $titel = $_POST['titel'];
            $description = $_POST['description'];
            $icon = $_POST['icon'];
        
            if($titel && $description && $icon){
                $query = "UPDATE facts SET titel='$titel',description='$description',icon='$icon' WHERE id='$id' ";
                mysqli_query($db,$query);
                $_SESSION ['fact-update'] = "updated";
                header("location: fact.php");
            }
        }
    
    }

?>