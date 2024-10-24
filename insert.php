<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_registration_form"; 

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  $roll_number = $_POST['roll'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $stmt = $conn->prepare("INSERT INTO student (roll, name, age) VALUES (?, ?, ?)");
        $stmt->bind_param("isi", $roll_number, $name, $age); // "isi" means integer, string, integer
        
        // Execute the query and check for success
        if ($stmt->execute()) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . $conn->error;
        }
        
        // Close the statement and connection
        $stmt->close();
        $conn->close();
      header("Location:register.php")
  // sql to create table
// $sql = "CREATE TABLE Student (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     Name VARCHAR(30) NOT NULL,
//     age INT(3),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
    // if ($conn->query($sql) === TRUE) {
    //   echo "Table MyGuests created successfully";
    // } else {
    //   echo "Error creating table: " . $conn->error;
    // }
    // $sql = "ALTER TABLE student ADD roll VARCHAR(15)";

    //     // Execute the query
    //     if ($conn->query($sql) === TRUE) {
    //         echo "Column 'phone_number' added successfully";
    //     } else {
    //         echo "Error adding column: " . $conn->error;
    //     }

    //     // Close the connection
    //     $conn->close();
   
        
?>