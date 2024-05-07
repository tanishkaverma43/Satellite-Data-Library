





<?php
session_start();
include_once 'config.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
   
    
    $sql = "SELECT * FROM studentss WHERE name='$name'";
    $result = $conn->query($sql);
    
    if ($result->num_rows == 1) {
        $_SESSION['name'] = $name;
        header("Location: no_student.php");
    } else {
        echo "Invalid username or password";
    }
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
         <a class="nav-link" href="no_student.php">Download</a>
         <a class="nav-link" href="student.php">Search</a>
         <a class="nav-link" href="dashboard.php">Logout</a>

      </nav>


      <div class="container">

      <form action="" method="post" style="color: black; margin-top: 540px; margin-right: 100px; display: block;">
 
    <div class="main"> 
        <h1>IIRS</h1> 
        <h3>File Download</h3> 
        <form action="no_student.php" method="post"> 
            <label for="first">Name:</label> 
            <input type="text" id="first" 
                   name="name" 
                   placeholder="Enter your Full name" required><br><br>
                   
                   <label for="first">File Name:</label> 
            <input type="text" id="first" 
                   name="filename" 
                   placeholder="Enter your File name" required> <br>
                  <br>

                  <label for="file">Search File:</label>
        <input type="text" name="search" placeholder="Search files..."><br>
        <br>
        <br>
        <input type="submit" value="Search">
   



               <br>
               <br>   
            </select> 
           
 
</div>
          
        
      
    </div>
    

  
    </form>

</div>


<script>
    // Check if the session name exists
    <?php if(isset($_SESSION['name'])) { ?>
        // Fill the input field with the session name
        document.getElementById('first').value = "<?php echo $_SESSION['name']; ?>";
    <?php } ?>
</script>
  
</body> 
  
</html>










<?php

include_once 'config.php';


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $file_name = $conn->real_escape_string($_POST['filename']); // assuming 'filename' is the name of your form field

    // Append ".zip" extension to the filename if it doesn't already have it
    if (pathinfo($file_name, PATHINFO_EXTENSION) !== 'zip') {
        $file_name .= '.zip';
    }

    // Check if the session variable exists and escape it
    $name = isset($_SESSION['name']) ? $conn->real_escape_string($_SESSION['name']) : '';

    // Prepare the SQL statement using a prepared statement
    $sql = "INSERT INTO download (name, file_name) VALUES (?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind parameters and execute the statement
        $stmt->bind_param("ss", $name, $file_name);
        if ($stmt->execute()) {
           // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }
} else {
    //echo "No data received from the form.";
}

// Close connection
$conn->close();
?>





    <?php
    // Check if search query is set
    $search_query = isset($_POST['search']) ? $_POST['search'] : '';

    // Display files only if search query is set
    if (!empty($search_query)) {
        // List files in the temporary folder for download
        $temp_folder = 'D:/importantfiles/backup333';
        $files = scandir($temp_folder);

        // Flag to check if any files match the search criteria
        $files_found = false;

        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                // If file name contains the search query
                if (stripos($file, $search_query) !== false) {
                    // Display button for the file
                    echo "<button style='margin-left: 1px; margin-right: 10px; width: 150px; height: 50px; background-color: grey; color: white;'><td><a href='me.php?file=" . urlencode($file) . "' style='color: white;'>$file</a></td></button>";
                    $files_found = true;
                }
            }
        }

        // If no files found matching the search criteria
        if (!$files_found) {
            echo "<p>No files found matching your search criteria.</p>";
        }
    }
    ?>

</div>
</body>
</html>
