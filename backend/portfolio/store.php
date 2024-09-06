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


if(isset($_GET['statusid'])){
    $id = $_GET['statusid'];
    $status_query = "SELECT * FROM portfolios WHERE id='$id'"; 
    $connect = mysqli_query($db,$status_query);
    $portfolio = mysqli_fetch_assoc($connect);

    if($portfolio['status'] == 'deactive'){
        $update = "UPDATE portfolios SET status='active' WHERE id='$id'";
        mysqli_query($db,$update);
        $_SESSION['portfolio-status'] = 'Activeted';
        header('location: portfolios.php');



    }else{
        $update_query = "UPDATE portfolios SET status='deactive' WHERE id='$id' ";
        mysqli_query($db,$update_query);
        $_SESSION['portfolio-status'] = 'Deactiveted';
        header('location: portfolios.php');

    }


}

// update
if(isset($_POST['update'])){
    if(isset($_GET['updateid'])){
        $id = $_GET['updateid'];
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

        $update_query = "UPDATE portfolios SET image='$new_name',subtitel='$subtitel',titel='$titel' WHERE id='$id'";
        $connect= mysqli_query($db,$update_query);
        $_SESSION['portfolio-updae'] = 'updated';
        header('location: portfolios.php ');
        }
    }

}


    }




// delete 

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $port_query = "SELECT * FROM portfolios WHERE id='$id'";
    $connect = mysqli_query($db,$port_query);
    $port = mysqli_fetch_assoc($connect);

    if($port['image']){
        $old_name = $port['image'];
        $existpath = "../../public/portfolio-image/" . $old_name;

        if(file_exists($existpath)){
            unlink($existpath);
            
        }

    }

    $delete_query = "DELETE FROM portfolios WHERE id='$id'";
    mysqli_query($db,$delete_query);

    $_SESSION['portfolio-delete'] = "Deleted";
    header('location: portfolios.php');
}

?>

