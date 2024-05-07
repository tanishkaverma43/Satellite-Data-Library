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
        <li><a href="dashboard.php"><h5 style= " color: grey">signout</h5></a></li>
        
        </ul>            
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">



            <form action="flogout.php" method="post" style="color: black; margin-top: 540px; margin-right: 200px; display: block;">
  <h1 style="color: black; margin-top: 100px; margin-left: 400px; display: block;">Logout</h1>
  <p style="color: black; margin-top: 20px; margin-left: 400px; display: block;">Are you sure you want to logout?</p><br>
 
    <button style="color: black; margin-top: 5px; margin-left: 400px; display: block;"><a href="flogout.php">Logout</a></button>
</form>



</div>














  
    

</div>
    </div>
</body>

</html>