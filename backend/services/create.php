<?php

include "../extends/header.php";
include "../../public/fonts/fonts.php";

?>


<!-- create page  -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <h4>Services Add</h4>   
            </div>
            <div class="card-body">
                <!-- form start -->
        <form action="./store.php" method="POST">
            <!-- titel start-->
            <label for="exampleInputEmail1" class="form-label my-2">Service Titel</label>
            <input name="titel" "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <!-- titel end -->

            <!-- descryption start -->

            <label for="exampleInputEmail1" class="form-label my-2">Service Descryption</label>
            <textarea name="descryption" "email" class="form-control" rows="5" ></textarea>
            <!-- descryption end -->

             <!-- icon start -->
            <label for="exampleInputEmail1" class="form-label my-2">icon</label>
            <input name="icon" "text" readonly class="form-control mb-4" id="icons-list" aria-describedby="emailHelp">

         <div class="card my-2">
                <div class="class-body fa-2x" style="overflow-y:scroll; overflow-x:hidden; height:300px;">
            <?php foreach ($fonts as $font) :?>
                <span class="m-3">
                <i onclick="icons(event)" class="<?= $font ?>"></i>
                </span>
            <?php endforeach ;?>
        </div>
    </div>
    
    <!-- icon end -->

            <button name="insert" type="submit" class="btn btn-primary mt-4"><i class="material-icons">add</i>Create</button>

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

<?php

include "../extends/footer.php.";

?>