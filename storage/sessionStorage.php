<?php 
session_start();
// $_SESSION['data'] = [];
$student_list = [];
if(isset($_SESSION['data'])){

    $student_list = $_SESSION['data'];
    
        //  $_SESSION['data'] =$student_list;
        // $student_list = $_SESSION['data'];
    
    }
$e_roll =$e_name = $e_email = $e_age= "";
$name = $roll = $email = $age = "";
$success = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(isset($_POST['submitBtn'])){
    $name = $_POST["name"];
    $roll = $_POST["roll"];
    $age = $_POST["age"];
    $email = $_POST["email"];  

    // echo $name;
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
        $_SESSION['data'] = $student_list;
        // array_push(,$student_list);

        //cookie start 
        // setcookie("student",json_encode($student),time() + 3600*24*14,'/');
        // echo $success = "a";
        //cookies end

        // $_SESSION['data'] = array_values($_SESSION['data']);
        $success = true;
    }
    
   } 
}

if(isset($_POST['delete'])){
    $index = (int)$_POST['indexNumber'];
    // var_dump($index);
    // var_dump($student_list[$index]);
    if(isset($_SESSION['data'][$index])){
        // echo "Hi";
     unset($_SESSION['data'][$index]);
    //  var_dump(array_values( $_SESSION['data']));
     $_SESSION['data'] = array_values( $_SESSION['data']);
    }
}

if(isset($_POST['update'])){
    $indexUpdate =(int)$_POST['indexUpdate'];
    // var_dump($_SESSION['data'][$indexUpdate]['roll']);
    $nameUpdate  = $_SESSION['data'][$indexUpdate]['name'];
    $ageUpdate = $_SESSION['data'][$indexUpdate]['age'];
    $emailUpdate = $_SESSION['data'][$indexUpdate]['email'];
    $rollUpdate = $_SESSION['data'][$indexUpdate]['roll'];
    // echo $nameUpdate;
}

$successUpdate = false;
if(isset($_POST['updateBtn'])){

    // $indexUpdate =(int)$_POST['indexUpdate'];
        $updatedIndex = (int)$_POST['updatedIndex'];
        // var_dump($updatedIndex);
            $name = $_POST["nameUpdate"];
            $roll = $_POST["rollUpdate"];
            $age = $_POST["ageUpdate"];
            $email = $_POST["emailUpdate"]; 
             
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
                // $student_list = $student;

                $_SESSION['data'][$updatedIndex] = $student;
                $_SESSION['data'] = array_values($_SESSION['data']);
                // $_SESSION['data'] = $student_list; //used 
                // array_push(,$student_list);
                //cookie start 
                // setcookie("student",json_encode($student),time() + 3600*24*14,'/');
                // echo $success = "a";
                //cookies end
                // $_SESSION['data'] = array_values($_SESSION['data']);
              
            //cookie start 
            // setcookie("student",json_encode($student),time() + 3600*24*14,'/');
            // echo $success = "a";
            //cookies end
            $successUpdate = true;
            }
       
    //    var_dump($_SESSION['data']);
    //    $student_list = $_SESSION['data'];
}


