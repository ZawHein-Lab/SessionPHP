<?php require_once("./storage/sessionUpdate.php") ?>
<?php 
$e_name = $e_email = $e_roll = $e_age = "";
$name = $email = $age = $roll= "";
$success = false;
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
       
        $student = ["roll" => $roll ,"name" =>$name,"email" => $email, "age" => $age];
        
        array_push( $student_list ,$student);
        // var_dump($student_list);
        $_SESSION['data'] = $student_list;
    //    var_dump($_SESSION['data']);

        //cookie start 
        // setcookie("student",json_encode($student),time() + 3600*24*14,'/');
        // echo $success = "a";
        //cookies end

        // $_SESSION['data'] = array_values($_SESSION['data']);
        $success = true;
    }
}
?>

<?php require_once("./layout/header.php") ?>
<h2 class="text-center my-3">Register Student</h2>
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