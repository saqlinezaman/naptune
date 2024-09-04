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

?>