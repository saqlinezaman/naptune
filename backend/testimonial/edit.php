<?php

include "../extends/header.php";

if(isset($_GET['editid'])){
    $id = $_GET['editid'] ;
    $status_query = "SELECT * FROM testimonials WHERE id='$id'";
    $connect = mysqli_query($db,$status_query);
    $testimonial = mysqli_fetch_assoc($connect);
     }

?>


<!-- create page  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <h4>Services update</h4>   
            </div>
            <div class="card-body">
                <!-- form start -->
        <form action="testimonial-store.php?updateid=<?= $testimonial['id'] ?>" method="POST" enctype="multipart/form-data">

        <picture class="d-block">
                <img id="img-show" src="../../public/defult image/defult imgwebp.webp" alt="" style="width:80px; height:80px; " class="mb-2">
            </picture>

             <!-- image start -->

        <label for="exampleInputEmail1" class="form-label my-2">image of Reviewer</label>
            <input onchange="document.querySelector('#img-show').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control mb-4" id="icons-list" name="image" aria-describedby="emailHelp" value="<?= $testimonial['image']?>">

            <!-- review start-->
            <label for="exampleInputEmail1" class="form-label my-2">Tesrimonial Review</label>
            <input name="review" "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $testimonial['review']?>">
            <!-- Review end -->

            <!-- Name of Reviewer start -->
            <label for="exampleInputEmail1" class="form-label my-2">Name of Reviewer</label>
            <textarea name="name" "email" class="form-control" rows="5" ><?= $testimonial['name']?></textarea>
            <!--Name of Reviewer  end -->

            <!-- designation of Reviewer start -->
            <label for="exampleInputEmail1" class="form-label my-2">designation of Reviewer</label>
            <input name="designation" "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $testimonial['designation']?>">
            <!--designation of Reviewer  end -->

            <button name="update" type="submit" class="btn btn-primary mt-4"><i class="material-icons">add</i>Create</button>
        </form>
           
    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php

include "../extends/footer.php.";

?>