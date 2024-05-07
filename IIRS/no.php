
<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: facultylogin.php");
    exit();
}
?>











<?php

include("file_extract.php");

// Display a form for file upload
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
                Indian Institute of Remote Sensing<br><br>
                <?php 
                
             
// List files in the temporary folder for download
$temp_folder = 'D:/importantfiles/backup333';
$files = scandir($temp_folder);
foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        
        echo "<button style='margin-left: 1px; margin-right: 10px; width: 150px; height: 50px; background-color:grey; color: white;'><td><a href='me.php?file=" . urlencode($file) . "' style='color: white;'>$file</a></td></button>";




    }
}
             
                
               ?>
            </h2>
        </div>
    </div>
</div>






  
    

</div>
    </div>
</body>

</html>