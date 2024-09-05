<?php
include '../../config/database.php';
session_start();

if (isset($_POST['port-insert'])){
    $id= $_SESSION ['author-id'];
    $subtitel = $_POST['subtitel'] ;
    $titel = $_POST['titel'] ;
    $image = $_FILES['image']['name'];

    $tmp_name = $_FILES['image']['tmp_name'];
    $explode = explode('.',$image);
    $extension = end($explode);



    if($subtitel && $titel && $tmp_name){
        $new_name = $id . '-' . $titel . '-' . date('d-m-Y') . '-' . rand(0,9999) . '.' . $extension ;
        $local_path = "../../public/portfolio-image/".$new_name ;

        if(move_uploaded_file( $tmp_name,$local_path)){

        $query = "INSERT INTO portfolios(image,subtitel,titel) VALUES ('$new_name','$subtitel','$titel')";
        $connect= mysqli_query($db,$query);
        $_SESSION['portfolio-inserted'] = 'inserted';
        header('location: portfolios.php ');
        }
    }

}


?>

