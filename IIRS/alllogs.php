<?php
// Database connection details (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "textfile";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission (if submitted)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"]; // Use a stronger hashing method later (e.g., password_hash)
  $role = $_POST["role"];

  $table = ($role === "student") ? "studentss" : "facultyy";
  $sql = "INSERT INTO $table (name, email, password) VALUES (?, ?, ?)";
  $stmt = mysqli_prepare($conn, $sql);
  mysqli_stmt_bind_param($stmt, "sss", $name, $email, $password);

  if (mysqli_stmt_execute($stmt)) {
    echo "Registration successful!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>





















<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Card Design HTML and CSS | CodingNepal</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">


<style>
/* Importing Google font - Open Sans */
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Open Sans', sans-serif;
}

body {
    background: #ecececdb;
}

.card-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    max-width: 1000px;
    margin: 150px auto;
    padding: 20px;
    gap: 40px;
    text-align: center;
}

.card-list .card-item {
    background: #fff;
    padding: 26px;
    border-radius: 8px;
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
    list-style: none;
    cursor: pointer;
    text-decoration: none;
    border: 2px solid transparent;
    transition: border 0.5s ease;
}

.card-list .card-item:hover {
    border: 2px solid #000;
}



.card-list .editor {
    background-color: #d6f8d6; 
    color: #205c20;
}

.card-item h3 {
    color: #000;
    font-size: 1.438rem;
    margin-top: 28px;
    font-weight: 600;
}

.center-container {
  text-align: center; /* Centers all text-based content within the container */
}



@media (max-width: 1200px) {
    .card-list .card-item {
        padding: 15px;
    }
}

@media screen and (max-width: 980px) {
    .card-list {
        margin: 0 auto;
    }
}
    </style>



















</head>
<body>
    <div class="card-list">
        <a href="login.php" class="card-item">
        <i class='fas fa-user-alt' style='font-size:100px;color:black;'></i>
        <h3> Users Login</h3>
        </a>

        <a href="facultylogin.php" class="card-item">
        <i class='fas fa-user-alt' style='font-size:100px;color:black;'></i>
        <h3> Admin Login</h3>
        </a>

        <a href="register.php" class="card-item">
        <i class='fas fa-user-alt' style='font-size:100px;color:black;'></i>
        <h3>Register</h3>
        </a>
    </div>
</body>
</html>