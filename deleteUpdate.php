<?php require_once("./storage/sessionUpdate.php") ?>
<?php 
$e_roll = "";
$roll= "";
$deleteSuccess = false;
$invalidRoll = false;
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $roll = $_POST['roll'];

    if($roll==""){
        $e_roll ="Please enter your roll!!!";
    }else if(!preg_match("/^SG\d{3}$/",$roll)){
        $e_roll ="Please enter roll format";
    }

    if($e_roll ===""){
        $invalidRoll = true;
        foreach($student_list as $key=>$student){
           if($student['roll'] === $roll){
            
        
            // unset($student_list[$key]); // very useful funtion 
           array_splice($student_list,$key,1);  // instead of unset() 
            // var_dump($student_list);
            $invalidRoll = false;
            $deleteSuccess = true;
           }
          
        }
        // print_r($student_list);
        $_SESSION['data'] = $student_list;
        print_r($_SESSION['data']);
        // $_SESSION['data'] = $student_list;
       
    }
    
}
?>

<?php require_once("./layout/header.php") ?>
<h2 class="text-center my-3">Delete Student</h2>
    <div class="row">
        <div class="col-7">
            <div class="card w-100">
                <img src="./image/bagan.jfif" alt="" style="width:100%; height: 400px">
            </div>
        </div>
        <div class="col-5">
            <div class="w-75  mx-auto">
                <form action="" method="post">
                <?php if($deleteSuccess){ ?>
                   <div class="alert alert-success">
                        <span>Deleted Successfully!</span>
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
                    <div class="text-center">
                        <button type="submit" name="deleteBtn" class="btn btn-danger text-center mt-3  w-25">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once("./layout/footer.php") ?>