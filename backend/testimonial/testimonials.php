    <?php
    include '../extends/header.php';

    $testimonial_query = 'SELECT * FROM testimonials' ;
    $testimonials = mysqli_query($db,$testimonial_query);

    ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4>Services</h4>
                    <a href="./testimonial-create.php"type="button" class="btn btn-primary"><i class="material-icons">add</i>Create</a>   
                    </div>
            <div class="card-body">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">image</th>
                            <th scope="col">name</th>
                            <th scope="col">review</th>
                            <th scope="col">designation</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                    </thead>
                 <tbody>


                    <?php 
                    $num =1;
                    foreach($testimonials  as $testimonial) :
                     ?>
                        <tr>
                            <th scope="row"><?= $num++ ?></th>
                <td class="">
                <img style="width: 80px; height:80px; border-radius:50%;" src="../../public/testimonial-image/<?=$testimonial['image']?>">
                                <td> <?= $testimonial['name']?> </td>
                                <td><?= $testimonial['review']?></td>
                                <td><?= $testimonial['designation']?></td>

                                <td>
                                    <a href="" class="badge bg-danger text-white"></a>
                                </td>
                                </tr>
                                <?php endforeach ;?>

                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>

    <?php
    include '../extends/footer.php'
    ?>