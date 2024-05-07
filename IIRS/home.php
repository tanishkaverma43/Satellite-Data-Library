<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>

body {
  background-image: url('https://hougumlaw.com/wp-content/uploads/2016/05/light-website-backgrounds-light-color-background-images-light-color-background-images-for-website-1024x640.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}


    body {
  font-family: sans-serif;
  text-align: center;
}

.container {
    margin-top: -50vh; /* Maintain current margin */
  display: flex;
  justify-content: center;
  align-items: center; /* Align items to top */
  min-height: 10vh;
}

h1 {
  margin-bottom: 20px;
}

form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

button {
  background-color: black;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #46a049;
}

 

#topnav {
   width: 100%;
   position: fixed;
   top: 0;
   left: 0;
   background-color: Black;
   font-family: Arial, sans-serif;
   font-size: 15px;
  display: flex;
  justify-content: center;
  text-align: center;
}


.nav-link {
   display: inline-block;
   width: 100px;
   height: 55px;

   color: White;

   text-align: center;
    margin-right: 70px;
   line-height: 55px;

   text-decoration: none;
}


#about {
   position: absolute;
   top: 0;
   right: 0;
}


    </style>


</head>
<body>
<nav id="topnav">
         <a class="nav-link" href="home.php">Home</a>
         <a class="nav-link" href="cateloguetable.php">Catelogue</a>
         <a class="nav-link" href="down.php">Download</a>
         <a class="nav-link" href="student.php">Search</a>
         <a class="nav-link" href="dashboard.php">Logout</a>

      </nav>



      
      <div class="container">

<form action="logout.php" method="post" style="color: black; margin-top: 540px; margin-right: 100px; display: block;">
 
  <h1>Welcome, <?php echo $_SESSION['name']; ?>!</h1>
   
</form>

</div>
</body>
</html>




