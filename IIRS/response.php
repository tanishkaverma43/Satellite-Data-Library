<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: facultylogin.php");
    exit();
}
?>


<?php


// Connect to your database (replace placeholders with your credentials)
include("db_connection.php");
// Check if the form has been submitted
if (isset($_POST['name'])) {

    // Retrieve form data, sanitizing inputs to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    // Prepare and execute the SQL query
    $sql = "INSERT INTO `facultylogins` (`name`, `pass`) 
            VALUES ('$name', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "Successfully !<br>";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
}

mysqli_close($conn);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="response.css">
    <title>Admin Panel</title>

<style>

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














                
              
            <h2 style="color: black; margin-top: 540px; margin-left: 340px; display: block;">
    Indian Institute of Remote Sensing<br> <br>Uploade here
    <form action="ffaculty.php" method="post" enctype="multipart/form-data">
      <input type="file" name="zip_file">
    <input type="submit" value="Upload">

</form>
</h2>     







  
    

</div>
    </div>
</body>

</html>