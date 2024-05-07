<?php



// Connect to your database (replace placeholders with your credentials)
include("db_connection.php");

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
        echo "The table was created !<br>";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
















?>




























<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Registration Form</title> 
    <link rel="stylesheet" 
          href="style.css"> 

          <style>
            body {
  background-image: url('https://e0.pxfuel.com/wallpapers/551/236/desktop-wallpaper-isro-logo.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head> 
  
<body> 
    <div class="main"> 
        <h1>IIRS</h1>  
        <h3>Registration</h3> 
        <form method="post" action="alllogs.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="email">Contact:</label><br>
    <input type="contact" id="contact" name="contact" required  maxlength="10"><br><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"    pattern= 
                   "^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" required                    
                   title="Password must contain at least one number,  
                       one alphabet, one symbol, and be at  
                       least 8 characters long"  required><br><br>
    <label for="role">Role:</label><br>
    <select id="role" name="role" required>
      <option value="student">Student</option>
      <option value="faculty">Faculty</option>
    </select><br><br>
  

    <div class="wrap"> 
                <button type="submit" onclick="solve()"> 
                  Register
                  </button> 
            </div>
    </div> 
    <script src="script.js"></script> 
</body> 
  
</html>