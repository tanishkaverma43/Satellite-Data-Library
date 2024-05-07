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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="response.css">

<style>



body {
  background-image: url('');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}



h1 { 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    font-family: sans-serif; 
    line-height: 1.5; 
    min-height: 100vh;  
    flex-direction: column; 
    margin: 0;
} 

.my-button {
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    position: fixed; 
    top: 400px; 
    right: 550px; 
}

.my-button:hover {
    background-color: gray;
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


   


                
    

</div>
</div>




<h1 style="color: black;" >Satellite Data Table</h1>

<a href="product-table.php" class="card-item">
<button class="my-button">Show Data</button>






    
</body>
</html>