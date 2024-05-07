<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: facultylogin.php");
    exit();
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

<form action="upedit.php" method="post">

<label for="id">id:</label>
    <input type="text" id="id" name="id" value="<?php echo isset($user['id']) ? $user['id'] : ''; ?>">

    <label for="name">Full Name:</label>
    <input type="text" id="name" name="name" value="<?php echo isset($user['name']) ? $user['name'] : ''; ?>">



    <button type="submit">Update</button>
</form>






















 
  
</body> 
  
</html>


<?php
include("db_connection.php");

// Fetch user data for editing
$id = isset($_POST['id']) ? $_POST['id'] : null;

$sql = "SELECT * FROM userss WHERE id = '$id'"; // Add backticks around table and column names
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Error: " . mysqli_error($conn));
}

if (mysqli_num_rows($result) == 0) {
    die("User not found.");
}

$user = mysqli_fetch_assoc($result); // Convert result to associative array

// Form handling (omit if you have a separate edit form)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize and validate form data
    $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); // Sanitize name
   

    // Update query
    $sql = "UPDATE userss SET name = '$name' WHERE id = '$id'"; // Add backticks and placeholder binding
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<font color='green'>Record Updated Successfully";
    } else {
        echo "<font color='red'>Error Updating Record: " . mysqli_error($conn);
    }
}

mysqli_close($conn); // Close database connection

?>