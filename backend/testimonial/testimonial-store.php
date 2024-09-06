<?php
include '../../config/database.php';

session_start();

if(isset($_POST['insert'])){
    $id = $_SESSION ['author-id'];
    $review = $_POST['review'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $image = $_FILES['image']['name'];

    $tmp_name =$_FILES['image']['tmp_name'];
    $explode = explode('.',$image);
    $extension = end($explode);

    if($tmp_name && $review && $name && $designation){
        
        $new_name = $id . '-' . $name . '-' . date('d-m-Y') . '-' . rand(0,9999) . '.' . $extension;
        $local_path = '../../public/testimonial-image/'.$new_name;

        if(move_uploaded_file($tmp_name, $local_path)){
            $query = "INSERT INTO testimonials (image,review,name,designation) VALUES ('$new_name','$review','$name','$designation')";
        $connect = mysqli_query($db,$query);
        $_SESSION['testimonal-insert'] = "Inserted";
        header("location: testimonials.php");
        }

    }
}


if(isset($_GET['statusid'])){
    $id = $_GET['statusid'] ;
    $status_query = "SELECT * FROM testimonials WHERE id='$id'";
    $connect = mysqli_query($db,$status_query);
    $testimonial = mysqli_fetch_assoc($connect);

    if($testimonial['status'] == 'deactive'){
        $update_status = "UPDATE testimonials SET status='active' WHERE id='$id'";
        mysqli_query($db,$update_status);
        $_SESSION['testimonal-status'] = "Inserted";
        header("location: testimonials.php");

    }else{
        $update_status = "UPDATE testimonials SET status='deactive' WHERE id='$id'";
        mysqli_query($db,$update_status);
        $_SESSION['testimonal-status'] = "Inserted";
        header("location: testimonials.php");
    }

}

// update 

if(isset($_POST['update'])){
    if(isset($_GET['updateid'])){
        $id = $_GET['updateid'];
        $review = $_POST['review'];
        $name = $_POST['name'];
        $designation = $_POST['designation'];
        $image = $_FILES['image']['name'];
        $tmp_name =$_FILES['image']['tmp_name'];
        $explode = explode('.',$image);
        $extension = end($explode);
    
        if($tmp_name && $review && $name && $designation){
            
            $new_name = $id . '-' . $name . '-' . date('d-m-Y') . '-' . rand(0,9999) . '.' . $extension;
            $local_path = '../../public/testimonial-image/'.$new_name;
    
            if(move_uploaded_file($tmp_name, $local_path)){
                $updat_query = "UPDATE testimonials SET image='$new_name', review='$review',name='$name', designation='$designation' WHERE id='$id'";
            $connect = mysqli_query($db,$updat_query);
            $_SESSION['testimonal-update'] = "updateed";
            header("location: testimonials.php");
            }
    
        }
    }
}

// delete
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $test_query = "SELECT * FROM testimonials WHERE id='$id'";
    $connect = mysqli_query($db,$test_query);
    $test = mysqli_fetch_assoc($connect);

    if($test['image']){
        $old_name = $test['image'];
        $existpath = "../../public/testimonial-image/" . $old_name;

        if(file_exists($existpath)){
            unlink($existpath);     
        }

    }
    $delete_query = "DELETE FROM testimonials WHERE id='$id'";
    mysqli_query($db,$delete_query);

    $_SESSION['testimonal-delete'] = "Deleted";
    header("location: testimonials.php");
}



?>