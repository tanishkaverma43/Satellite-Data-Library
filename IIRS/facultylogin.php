











<?php
session_start();
include_once 'config.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM facultyy WHERE name='$name' AND password='$pass'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $_SESSION['name'] = $name;
        header("Location: welcome.php");
    } else {
        echo "Invalid username or password";
    }
}
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




.wrap {
  display: flex;
  justify-content: space-between; 
}


.wrap button {
  margin-right: 10px;
}





</style>
</head> 
  
<body> 
    <div class="main"> 
        <h1>IIRS</h1> 
        <h3>Faculty Login</h3> 
        <form action="" method="post"> 
            <label for="first">Full Name:</label> 
            <input type="text" id="first" 
                   name="name" 
                   placeholder="Enter your Full name" required> 
  
           
  
                  
                   <label for="password">Password:</label> 
            <input type="password" id="password" 
                   name="pass"
                   placeholder="Enter your password"
                   pattern= 
                   "^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" required                    
                   title="Password must contain at least one number,  
                       one alphabet, one symbol, and be at  
                       least 8 characters long"> 





                  
            </select> 
            <div class="wrap">
            <input type="submit" name="submit" value="Login">
  <input type="reset" onclick="solve()"></input>
</div>
          
        
        </form> 
      
        </p> 
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
