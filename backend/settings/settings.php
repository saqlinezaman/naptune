<?php 

include "../extends/header.php";

?>

<div class="row">
    <div class="col">
        <div class="page-description">
           <h1>Settings</h1>
  </div>
    </div>
       </div>

      <div class="row">
        <!-- update username  -->

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h1>Username Update</h1>
                </div>
                <form action="settings-manage.php" method="POST">
                <div class="card-body">
                    <!-- user name -->

                <label for="exampleInputEmail1" class="form-label">Username</label>
                     <input name="usernames" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                     <!--  usernaneme succes  update start -->

                     <?php if(isset($_SESSION["username-update-success"])) : ?>
                     <p class="text-success"> <?= $_SESSION["username-update-success"];?></p>
                     <?php endif ; unset($_SESSION["username-update-success"]);?>
                     
                        <!-- usernanem success update end -->

                     <!-- php error code for usernanem update start -->

                     <?php if(isset($_SESSION["username-update-error"])) : ?>
                     <p class="text-danger"> <?= $_SESSION["username-update-error"];?></p>
                     <?php endif ; unset($_SESSION["username-update-error"]);?>

                        <!-- php error code for usernanem update end -->
                        <!-- email update start -->
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        <!-- php error code for email update success start -->

                        <?php if(isset($_SESSION["email-update-success"])) : ?>
                     <p class="text-success"> <?= $_SESSION["email-update-success"];?></p>
                     <?php endif ; unset($_SESSION["email-update-success"]);?>
                     <!-- php error code for email update success end -->

                        <!-- php error code for email update error start -->

                        <?php if(isset($_SESSION["email-update-error"])) : ?>
                     <p class="text-danger"> <?= $_SESSION["email-update-error"];?></p>
                     <?php endif ; unset($_SESSION["email-update-error"]);?>
                     <!-- php error code for email update error end -->

                     <div class="d-grid gap-2 mt-3">
                        <button name="nameupdate-btn" class="btn btn-primary" type="submit">Button</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <!-- update password  start-->

        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h1>Password Update</h1>
                </div>
                <form action="settings-manage.php" method="POST">
                <div class="card-body">

                    <!-
                            <!-- old password start -->

                        <label for="exampleInputEmail1" class="form-label">Old Password</label>
                         <input name="old-pass" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            <!-- old password end -->

                            <!-- new password start -->

                        <label for="exampleInputEmail2" class="form-label">New Password</label>
                         <input name="new-pass" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            <!-- new password end -->

                            <!-- confirm new password start -->

                        <label for="exampleInputEmail3" class="form-label">Confirm New Password</label>
                         <input name="c-pass" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            <!-- confirm new  password end -->

                                <!-- old pass word error start  -->
                     <?php if(isset($_SESSION["oldpasserror"])) : ?>
                        <p class="text-danger"> <?= $_SESSION["oldpasserror"];?></p>
                     <?php endif ; unset($_SESSION["oldpasserror"]);?>

                             <!-- pass error  -->
    
                             <?php if(isset($_SESSION["pass-error"])) : ?>
                     <p class="text-danger"> <?= $_SESSION["pass-error"];?></p>
                     <?php endif ; unset($_SESSION["pass-error"]);?>

                                 <!-- pass error end -->

                                  <!-- match error start -->
                                  <?php if(isset($_SESSION["match-error"])) : ?>
                     <p class="text-danger"> <?= $_SESSION["match-error"];?></p>
                     <?php endif ; unset($_SESSION["match-error"]);?>
                    
                     <!-- pass error end -->

                      <!-- pass update success -->
                      <?php if(isset($_SESSION["pass-update-success"])) : ?>
                     <p class="text-success"> <?= $_SESSION["pass-update-success"];?></p>
                     <?php endif ; unset($_SESSION["pass-update-success"]);?>
                      <!-- pass update success -->

                    <div class="d-grid gap-2 mt-3">
                        <button name="passupdate-btn" class="btn btn-primary" type="submit">Upadate</button>
                    </div>

                </div>
                </form>
            </div>
        </div>
        <!-- update password  end-->

        <!-- image updare start -->
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h1>Image Update</h1>
                </div>
                <form action="settings-manage.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                            <!-- old password start -->

                        <label for="exampleInputEmail1" class="form-label">Set your image</label>
                         <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                         <div class="d-grid gap-2 mt-3">
                        <button name="image-btn" class="btn btn-primary" type="submit">Upadate</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- image updare  end -->
      </div> 

     
       
<?php 

include "../extends/footer.php";

?>