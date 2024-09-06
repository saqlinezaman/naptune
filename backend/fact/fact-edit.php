<?php
include '../extends/header.php';

include '../../public/fonts/fonts.php';


// update query

if(isset($_GET['editid'])){
    $id = $_GET['editid'] ;
    $status_query = "SELECT * FROM facts WHERE id='$id'";
    $connect = mysqli_query($db,$status_query);
    $fact = mysqli_fetch_assoc($connect);

}
?>


<div class="content-wrapper">
    <div class="container">

<!-- create page  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <h4>Fact Update</h4>   
            </div>
            <div class="card-body">

                <!-- form start -->
        <form action="./fact-store.php?updateid=<?= $fact['id'] ?>" method="POST">
            <!-- titel start-->
            <label for="exampleInputEmail1" class="form-label my-2">Facts Titel</label>
            <input name="titel" "email"="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $fact['titel'] ?>">
            <!-- titel end -->

            <!-- descryption start -->

            <label for="exampleInputEmail1" class="form-label my-2">Facts Description</label>
            <textarea name="description" "email"="" class="form-control" rows="5"><?= $fact['description']?></textarea>
            <!-- descryption end -->

             <!-- icon start -->
            <label for="exampleInputEmail1" class="form-label my-2">icon</label>
            <input name="icon" "text"="" readonly="" class="form-control mb-4" id="icons-list" aria-describedby="emailHelp" value="<?= $fact['icon'] ?>">
            <div class="card">
                <div class="card-body fa-2x" style="overflow-y: scroll; height:350px">
                    <?php foreach ($fonts as $font) : ?>
                    <i onclick="icons(event)" class="<?= $font ?> m-2"></i>
                   <?php endforeach ;?>
                </div>
            </div>

    
    <!-- icon end -->

            <button name="fact-update" type="submit" class="btn btn-primary mt-4"><i class="material-icons">add</i>Create</button>

            </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
   $input = document.querySelector('#icons-list')
    function icons(e){
        $input.value = e.target.classList.value;
    }
</script>

 
 <!-- foter start -->
 </div>