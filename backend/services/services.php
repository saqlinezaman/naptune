<?php
include "../extends/header.php";
$services_query = "SELECT * FROM services";
$services = mysqli_query($db, $services_query)
?>

<?php if(isset($_SESSION ['service_insert'])): ?>
<div class="row">
   <div class="coll-12">
   <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
        <div class="alert-content">
            <span class="alert-title"><?= $_SESSION ['service_insert']?></span>
        </div>
    </div>
   </div>
</div>
<?php endif; unset($_SESSION ['service_insert']); ?>

<?php if(isset($_SESSION ['service-status'])) : ?>
<div class="row">
   <div class="coll-12">
   <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
        <div class="alert-content">
            <span class="alert-title"><?= $_SESSION ['service-status']?></span>
        </div>
    </div>
   </div>
</div>
<?php endif; unset($_SESSION ['service-status']); ?>

<!-- services page -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <h4>Services</h4>
                <a href="./create.php" type="button" class="btn btn-primary"><i class="material-icons">add</i>Create</a>   
            </div>
            <div class="card-body">
            <table class="table">
                 <thead class="table-dark">
                     <tr>
                         <th scope="col">#</th>
                         <th scope="col">Icon</th>
                         <th scope="col">titel</th>
                         <th scope="col">Descryption</th>
                         <th scope="col">Status</th>
                         <th scope="col">Action</th>
                          </tr>
                 </thead>
                    <tbody>
                        <?php
                        $num = 1;
                         foreach($services as $service) :?>
                     <tr>
                         <th scope="row">
                            <?= $num++ ?>
                        </th>
                         <td class="fa-2x <?=  $service ['icon']?>"></td>
                         <td><?=  $service ['titel']?></td>
                         <td> <?=  $service ['descryption']?></td>
                         <td>
                        <a href="store.php?statusid=<?= $service['id'] ?>" class="<?=($service['status'] == 'deactive') ? 'badge bg-danger' : 'badge bg-success' ?> text-white"><?= $service['status'] ?></a>
                    </td>
                      </tr>
                      <?php endforeach?>
                  </tbody>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

include "../extends/footer.php.";

?>