<?php require_once("./storage/sessionStorage.php") ?>


<?php require_once("./layout/header.php") ?>
<h2 class="text-center my-3">Update Student Data</h2>
    <div class="row">
        <div class="col-7">
            <div class="card w-100">
                <img src="./image/bagan.jfif" alt="" style="width:100%; height: 400px">
            </div>
        </div>
        <div class="col-5">
            <div class="w-75  mx-auto">
                <form action="" method="post">
                    <input type="hidden" name="updatedIndex" value="<?php echo $indexUpdate; ?>">
                    <?php if($successUpdate){ ?>
                   <div class="alert alert-success">
                        <span>Saved Successfully!</span>
                    </div>
                    <?php }?>
                    <div class="form-group">
                        <label for="roll">Roll Number</label>
                        <input type="text" name="rollUpdate" id="rollUpdate" class="form-control" value="<?php if(isset($rollUpdate)){ echo $rollUpdate;} else{ echo "";} ?>">
                        <span><?php echo $e_roll;?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="nameUpdate" id="nameUpdate" class="form-control" value="<?php  if(isset($nameUpdate)){ echo $nameUpdate;} else{ echo "";}?>">
                        <span><?php echo $e_name;?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="emailUpdate" id="emailUpdate" class="form-control" value="<?php  if(isset($emailUpdate)){ echo $emailUpdate;} else{ echo "";}?>">
                        <span><?php echo $e_email;?></span>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="ageUpdate" id="ageUpdate" class="form-control" value="<?php  if(isset($ageUpdate)){ echo $ageUpdate;} else{ echo "";}?>">
                        <span><?php echo $e_age;?></span>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="updateBtn" class="btn btn-danger text-center mt-3  w-25">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once("./layout/footer.php") ?>