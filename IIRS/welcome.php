<style>
  .corner-form {
    position: fixed; 
    top: 40px; 
    left: 15px; 
    background-color: #5c7f6c63; 
    padding: 10px;
    border-radius: 5px; 
  }

h1{
    color: black;
    position: fixed; 
    top: 10px; 
    padding: 10px; 
  }
</style>














<?php

include_once 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    
     // Hash the password using a strong algorithm
  $hashed_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert data into database
    $sql = "INSERT INTO facultylogins (name, password) VALUES ('$name', '$hashed_pass')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>













<?php

// Connect to your database (replace placeholders with your credentials)
/*include("db_connection.php");
// Check if the form has been submitted
if (isset($_POST['name'])) {

    // Retrieve form data, sanitizing inputs to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $optional = mysqli_real_escape_string($conn, $_POST['optional']);

    // Prepare and execute the SQL query
    $sql = "INSERT INTO `register` (`name`, `email`, `contact`, `pass`, `course`, `optional`) 
            VALUES ('$name', '$email', '$contact', '$pass', '$course', '$optional')";

    if (mysqli_query($conn, $sql)) {
        //echo "The table was created !<br>";
    } else {
       // echo "Error creating table: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
*/



?>






<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: facultylogin.php");
    exit();
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="welcome.css">
    <title>Admin Panel</title>

    
<style>

 


  .centered-text {
    text-align: center;
  }
</style>

</head>
<body>
<div class="side-menu" style= " background: #181515;">
        <div class="brand-name">
            <h1 style= " color: grey">Brand</h1>
        </div>
        <ul>
        <li><a href="welcome.php"><h5 style= " color: grey">DASHBOARD</h5></a></li>
        <li><a href="manage_user.php"><h5 style= " color: grey">Manage Users</h5></a></li>
        <li><a href="dates.php"><h5 style= " color: grey">Dates Report</h5></a></li>
        <li><a href="response.php"><h5 style= " color: grey">Upload</h5></a></li>
        <li><a href="upbutton.php"><h5 style= " color:grey">View Data</h5></a></li>
        <li><a href="no.php"><h5 style= " color:grey">Download Data</h5></a></li>
        <li><a href="dashboardrecord.php"><h5 style= " color: grey">Download Records</h5></a></li>
        <li><a href="fdashboard.php"><h5 style= " color: grey">signout</h5></a></li>
        
        </ul>            
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
             
                <div class="user">
                   
                <h1 class="centered-text">Total Users</h1>
                    
                </div>
            </div>
        </div>
       
      
       
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h3>Students Registeration</h3><br>

 <?php
include("db_connection.php");
// Secure prepared statement to count users
$sql = "SELECT COUNT(*) AS total_users FROM studentss";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Display the total users
$total_users = $row['total_users'];

//echo "Total Registered : $total_users";
echo "<h4>Total Registered Students: $total_users</h4>";


// Close connections
$stmt->close();
$conn->close();
?>
</div>






<div class="icon-case">
                        <img src="#" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                      
                        <h3>Faculty Registration</h3><br>

                        <?php
include("db_connection.php");
// Secure prepared statement to count users
$sql = "SELECT COUNT(*) AS total_users FROM facultyy";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Display the total users
$total_users = $row['total_users'];

//echo "Total Registered : $total_users";
echo "<h4>Total Registered faculty : $total_users</h4>";


// Close connections
$stmt->close();
$conn->close();
?>
 </div>




















                    <div class="icon-case">
                        <img src="#" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                      
                        <h3>Faculty Login Count</h3><br>

                        <?php
include("db_connection.php");
// Secure prepared statement to count users
$sql = "SELECT COUNT(*) AS total_users FROM facultylogins";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Display the total users
$total_users = $row['total_users'];

//echo "Total Registered : $total_users";
echo "<h4>Total faculty Users: $total_users</h4>";


// Close connections
$stmt->close();
$conn->close();
?>
 </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                
                
                
           
                

                
<div class="card">
      <div class="box">
                <h1>5</h1>
                        <h3>Student  Logins Count</h3><br>
                        <?php
include("db_connection.php");
// Secure prepared statement to count users
$sql = "SELECT COUNT(*) AS total_users FROM userss";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Display the total users
$total_users = $row['total_users'];

//echo "Total Registered : $total_users";
echo "<h4>Total Student Users: $total_users</h4>";


// Close connections
$stmt->close();
$conn->close();
?>

                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
              
            </div>








            
         
                  
            </div>
        </div>
    </div>
</body>
</html>








<?php

include_once 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $name = $conn->real_escape_string($_POST['name']);
    
     // Hash the password using a strong algorithm
  $hashed_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Insert data into database
    $sql = "INSERT INTO facultylogins (name, password) VALUES ('$name', '$hashed_pass')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
 
              