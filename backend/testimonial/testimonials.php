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
                                </td>
                                <td> <?= $testimonial['name']?> </td>
                                <td><?= $testimonial['review']?></td>
                                <td><?= $testimonial['designation']?></td>

                                <td>
                                <a href="testimonial-store.php?statusid=<?=$testimonial['id']?>" class="<?= ($testimonial['status'] == 'deactive') ? 'badge bg-danger' : 'badge bg-success' ?> text-white"><?= $testimonial['status'] ?></a>
                                </td>

                                <td>
                                <div class="d-flex justify-content-around align-items-center"> 
                            <a href="edit.php?editid=<?= $testimonial['id'] ?>" class="text-primary fa-2x">
                                <i class="fa fa-chain"></i>
                            </a>

                            <a href="./testimonial-store.php?deleteid=<?=$testimonial['id']?>" class="text-danger fa-2x"><i class="fa fa-trash"></i></a>
                    </div>
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