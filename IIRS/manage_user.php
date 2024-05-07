
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

 


   .center-table {
    margin-top: 200px;
    margin-left: 300px;
     
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



</body>

</html>

       
<?php

include("db_connection.php");

    


// Fetch data from the database (replace with your query and handle errors)
$sql = "SELECT id, name, password, date_column FROM userss";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='5' class='center-table'>";

    // Add border to create lines around cells
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>Name</th>";
    echo "<th>Actions</th>"; // Add actions column header
   // echo "<th>date_column</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id']; // Assuming an 'id' column exists for unique identification
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        //echo "<td>" . $row['date_column'] . "</td>";

        // Create edit and delete links with confirmation popups
        echo "<td>";
        echo "<a href='edit.php?id=$id' onclick='return confirm(\"Are you sure you want to edit this record?\")'>Edit</a> | ";
        echo "<a href='delete.php?id=$id' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}

// Close the connection
mysqli_close($conn);

?>






