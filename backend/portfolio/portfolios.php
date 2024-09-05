<?php
include "../extends/header.php";

$portfolios_query = 'SELECT * FROM portfolios';
$portfolios = mysqli_query($db,$portfolios_query);
?>
 <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-end">
                    <h4>Portfolios</h4>
                    <a href="../portfolio/create.php"type="button" class="btn btn-primary"><i class="material-icons">add</i>Create</a>   
                    </div>
            <div class="card-body">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">image</th>
                            <th scope="col">Subtitel</th>
                            <th scope="col">titel</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            </tr>
                    </thead>
                 <tbody>
                    
                 <?php 
                 $num = 1 ;
                 foreach($portfolios as $portfolio) :
                 ?>
                        <tr>
                            <th scope="row"><?= $num++?></th>
                            <td>
                                <img style="width: 80px; height: 80px; border-radious:50%;" src="../../public/portfolio-image/<?= $portfolio['image'] ?>" alt="">
                            </td>
                                <td><?= $portfolio['subtitel']?></td>
                                <td><?= $portfolio['titel']?></td>
                                <td></td>

                                <td>
                                    <a href="" class="badge bg-danger text-white"></a>
                                </td>
                                </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                    </div>
                </div>
            </div>
        </div>
<?php
include "../extends/footer.php";
?>