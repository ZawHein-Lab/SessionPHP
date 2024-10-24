<?php require_once("./storage/sessionUpdate.php") ?>
<?php 
$e_name = $e_email = $e_roll = $e_age = "";
$name = $email = $age = $roll= "";
$updateSuccess = false;
$invalidRoll = false;
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    if($name==""){
        $e_name =" Please enter your name=!!";
    }else if(!preg_match("/^[a-zA-Z\s]+$/",$name)){
        $e_name ="Please enter name format";
    }

    if($email==""){
        $e_email =" Please enter your email!!!";
    }else if(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$email)){
        $e_email ="Please enter email format";
    }

    if($age==""){
        $e_age =" Please enter your age!!!";
    }else if(!preg_match("/^\d+$/",$age)){
        $e_age ="Please enter age format";
    } 

    if($roll==""){
        $e_roll ="Please enter your roll!!!";
    }else if(!preg_match("/^SG\d{3}$/",$roll)){
        $e_roll ="Please enter roll format";
    }
    if($e_name ==="" && $e_roll ==="" && $e_email ==="" && $e_age === ""){
        $updateStudent = ["roll" => $roll ,"name" =>$name,"email" => $email, "age" => $age];
            $invalidRoll = true;
            foreach($student_list as $key=>$student){
               if($student['roll'] === $roll){

                // unset($student_list[$key]); //very useful funtion 
                //array_splice($student_list,$key,1);  //instead of unset() 
                $student_list[$key] = $updateStudent;
                $invalidRoll = false;
                $updateSuccess = true;
               }
              
            }
            // print_r($student_list);
            $_SESSION['data'] = $student_list;
            // print_r($_SESSION['data']);
            // $_SESSION['data'] = $student_list;
           
        }
}
?>

<?php require_once("./layout/header.php") ?>
<h2 class="text-center my-3">Update Student</h2>
    <div class="row">
        <div class="col-7">
            <div class="card w-100">
                <img src="./image/bagan.jfif" alt="" style="width:100%; height: 400px">
            </div>
        </div>
        <div class="col-5">
            <div class="w-75  mx-auto">
                <form action="" method="post">
                <?php if($updateSuccess){ ?>
                   <div class="alert alert-success">
                        <span>Updated Successfully!</span>
                    </div>
                    <?php }?>
                    <?php if($invalidRoll){ ?>
                   <div class="alert alert-success">
                        <span>Invalid Roll Number!</span>
                    </div>
                    <?php }?>
                    <div class="form-group">
                        <label for="roll">Roll Number</label>
                        <input type="text" name="roll" id="roll" class="form-control" value="<?php echo $roll; ?>">
                        <span><?php echo $e_roll;?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $name; ?>">
                        <span><?php echo $e_name;?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
                        <span><?php echo $e_email;?></span>
                    </div>
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" name="age" id="age" class="form-control" value="<?php echo $age; ?>">
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