
<!-- //    var_dump($_REQUEST);
// //    $name = $_REQUEST('name');
// $name = $_GET['name'];

// $roll = $_GET['roll'];
// $age = $_GET['age'];

//    echo $name."<br>";

//    header("Location:./register.php?roll=1&name=Hein&age=23");
//    exit();
// -->
 
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Cookies</title>
                        </head>
                        <body>
                        <?php
            if(!isset($_COOKIE["student"])) {
            $stu = json_decode($_COOKIE["student"],true);
                        // var_dump($student);
                     echo  "<h1>".  $stu["name"]. "</h1>";
                    }
                        ?>
                       
                        </body>
                        </html>