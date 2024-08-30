<?php
include '../../config/database.php';

session_start();
if(isset($_POST['insert'])){
    $titel = $_POST['titel'];
    $descryption = $_POST['descryption'];
    $icon = $_POST['icon'];


    if( $titel && $descryption && $icon){
        $query = " INSERT INTO services (titel,descryption,icon) VALUES ('$titel','$descryption','$icon')";
        
        mysqli_query($db , $query );
        $_SESSION ['service_insert'] = 'Service insert successfully';
        header('location: services.php');

    }
}

// upadate 

if(isset($_GET['statusid'])){
    $id = $_GET['statusid'];
    $get_query = "SELECT * FROM services WHERE id='$id'";
    $connect =mysqli_query($db,$get_query);
    $service = mysqli_fetch_assoc($connect);

    if($service['status'] == 'deactive'){
        $update_query = "UPDATE services SET status='active' WHERE id='$id'";
        mysqli_query($db, $update_query);
        $_SESSION ['service-status'] = 'update successfully';
        header('location: services.php');
    }else{
        $update_query = "UPDATE services SET status='deactive' WHERE id='$id'";
        mysqli_query($db, $update_query);
        $_SESSION ['service-status'] = 'update successfully';
        header('location: ');
    }
}

// if(isset($_GET['statusid'])){
//     $id = $_GET['statusid'];

//     $getQuery = "SELECT * FROM services WHERE id='$id'";
//     $connect = mysqli_query($db,$getQuery);
//     $service = mysqli_fetch_assoc($connect);


//     if($service['status'] == 'deactive'){
//         $update_query = "UPDATE services SET status='active' WHERE id='$id'";
//         mysqli_query($db,$update_query);
//         $_SESSION['service_status'] = "Service Status Successfully Complete"; 
//         header('location: services.php');
//     }else{
//         $update_query = "UPDATE services SET status='deactive' WHERE id='$id'";
//         mysqli_query($db,$update_query);
//         $_SESSION['service_status'] = "Service Status Successfully Complete"; 
//         header('location: services.php');
//     }
// }




// ?>