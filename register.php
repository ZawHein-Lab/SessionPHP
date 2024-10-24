<?php require_once("./storage/sessionStorage.php") ?>
<?php require_once("./layout/header.php") ?>
<h2 class="text-center my-3">Register</h2>
    <div class="row">
        <div class="col-7">
            <div class="card w-100">
                <img src="./image/bagan.jfif" alt="" style="width:100%; height: 400px">
            </div>
        </div>
        <div class="col-5">
            <div class="w-75  mx-auto">
                <form action="" method="post">
                   <?php if($success){ ?>
                   <div class="alert alert-success">
                        <span>Saved Successfully!</span>
                    </div>
                    <?php }?>
                    <div class="form-group">
                        <label for="roll">Roll Number</label>
                        <input type="text" name="roll" id="roll" class="form-control" value="<?php echo $roll ?>">
                        <span><?php echo $e_roll;?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $name ?>">
                        <span><?php echo $e_name;?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
                        <span><?php echo $e_email;?></span>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" id="age" class="form-control" value="<?php echo $age ?>">
                        <span><?php echo $e_age;?></span>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submitBtn" class="btn btn-danger text-center mt-3  w-25">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once("./layout/footer.php") ?>