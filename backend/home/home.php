<?php
include '../extends/header.php';

$users_query = "SELECT * FROM users" ;

$users = mysqli_query($db , $users_query  );
?>

                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Dashboard</h1>
                                </div>

    <div class="row">
        <div class="col">
            <?php if (isset($_SESSION ['temp-name'])) :?>
        <div class="alert alert-custom" role="alert">
        <div class="custom-alert-icon icon-dark"><i class="material-icons-outlined">done</i></div>
            <div class="alert-content">
            <span class="alert-title">Hello <?= $_SESSION ['author-name'] ;?></span>
            <span class="alert-text">Welcome to naptune</span>
      </div>
        </div>
        <?php endif; unset($_SESSION ['temp-name']);?>
         </div>
           </div>

           <div class="row">
            <div class="col-6">
                <div class="card" style="padding: 30px 20px;">
                  <div class="card-headr">
                    <h2>User Information</h2>
                </div>
                  </div>
                <div class="card-body">
                <div class="example-content">
                  <table class="table">

                      <thead class="table-dark">
                  <tr>
                       <th scope="col">#</th>
                       <th scope="col">Name</th>
                       <th scope="col">Email</th>
                       <th scope="col">Action</th>
                  </tr>                        
                      </thead>
                        <tbody style="background-color: white;" >
                    <?php 
                    $num = 1 ;
                    $id = $_SESSION ['author-id'];
                    foreach($users as $user) :
                      if($user ['id'] == $id){
                        continue;
                      }
                    ?>        
                  <tr>
                      <th scope="row"><?= $num++ ;?></th>
                      <td>
                        <?= $user ['name']?>
                      </td>
                      <td>
                      <?= $user ['email']?>
                      </td>
                      <td>@mdo</td>
                  </tr>
                  <?php endforeach?>
           </tbody>
       </table>
                                            </div>
                </div>
            </div>
           </div>

<?php
include '../extends/footer.php';
?>