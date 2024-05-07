<?php

include("db_connection.php");
include("file_extract.php");


// Replace with the actual path to your temporary folder
$temp_folder = 'D:\importantfiles\backup';

//$temp_folder = 'C:\Users\TANISHKA\ThisPC\OS(C:)\backup';

//$temp_folder = 'C:\Users\TANISHKA\Documents\importantfiles\\' . $unique_folder_name;

// Validate folder path and permissions
if (!is_dir($temp_folder) || !is_readable($temp_folder)) {
    echo "Error: Invalid or inaccessible folder path.";
    exit(1);
}

// Open the temporary folder
$dir_handle = opendir($temp_folder);

if (!$dir_handle) {
    echo "Error: Unable to open directory.";
    exit(1);
}



// Iterate through each file in the temporary folder
while (false !== ($file_name = readdir($dir_handle))) {
    // Skip "." and ".." directories
    if ($file_name == "." || $file_name == "..") {
        continue;
    }

    // Construct the full path to the target file
    $file_path = $temp_folder . DIRECTORY_SEPARATOR . $file_name . DIRECTORY_SEPARATOR . 'BAND_META.txt';

    

 //   echo"$file_path";
 //echo":$file_name";

   // echo"$file_path";

    // Check if the target file exists and is readable
    if (!is_file($file_path) || !is_readable($file_path)) {
       // echo "Error: File '$file_path' not found or not readable.";
        continue;
    }

    // Read the file contents
    $filecontents = file_get_contents($file_path);

    if ($filecontents === false) {
        echo "Error: Unable to read file contents.";
        continue;
    }

    // Parse key-value pairs (assuming this is the format)
    $data = [];
    foreach (explode("\n", $filecontents) as $line) {
        $parts = explode("=", $line, 2);
        if (count($parts) == 2) {
            $data[trim($parts[0])] = trim($parts[1]);
        } else {
            // Handle lines without '=' (or log/ignore as needed)
        }
    }

    // Do something with the parsed data (print, store, etc.)
   // print_r($data);
}

// Close the directory handle
closedir($dir_handle);

include("db_store.php");

?>





<?php

//for images

// Replace with the actual path to your temporary folder
/*$temp_folder = 'D:\importantfiles\backup';
//$temp_folder = 'C:\Users\TANISHKA\ThisPC\OS(C:)\backup';

//$temp_folder = 'C:\Users\TANISHKA\Documents\importantfiles\\' . $unique_folder_name;

// Validate folder path and permissions
if (!is_dir($temp_folder) || !is_readable($temp_folder)) {
    echo "Error: Invalid or inaccessible folder path.";
    exit(1);
}

// Open the temporary folder
$dir_handle = opendir($temp_folder);

if (!$dir_handle) {
    echo "Error: Unable to open directory.";
    exit(1);
}

// Include the database connection script
include("db_connection.php");

// Validate folder path and permissions
if (!is_dir($temp_folder) || !is_readable($temp_folder)) {
    echo "Error: Invalid or inaccessible folder path.";
    exit(1);
}

// Open the temporary folder
$dir_handle = opendir($temp_folder);

if (!$dir_handle) {
    echo "Error: Unable to open directory.";
    exit(1);
}

// Check if 'images' table exists and has appropriate columns
$table_exists = mysqli_query($conn, "SHOW TABLES LIKE 'imagess'");
$column_exists = mysqli_query($conn, "DESCRIBE imagess");

if (!mysqli_num_rows($table_exists) || !mysqli_fetch_assoc($column_exists)['Field'] === 'image_url') {
    echo "Error: 'imagess' table either doesn't exist or doesn't have the 'image_url' column. Please create it with an appropriate data type for storing image URLs.";
    exit(1);
}

// Iterate through each file in the temporary folder
while (false !== ($file_name = readdir($dir_handle))) {
    // Skip "." and ".." directories
    if ($file_name == "." || $file_name == "..") {
        continue;
    }

    // Construct the full path to the target file
    $file_path = $temp_folder . DIRECTORY_SEPARATOR . $file_name . DIRECTORY_SEPARATOR . $file_name . '.jpg';

    //echo" myyyyyyyyyyyyyy:$file_name";
    //echo"this is meeee: $file_name";
    

    // Check if the target file exists and is readable
    if (!is_file($file_path) || !is_readable($file_path)) {
       // echo "Error: File '$file_path' not found or not readable.";
        continue;
    }

    //echo"$file_path";

    // Store the image URL
    //$image_url = $file_path;
    $image_url =  $file_name . ".jpg";
    //echo"file name:$image_url";

    // Prepare the SQL statement
    $sql = "INSERT INTO imagess (image_url) VALUES (?)";
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the image URL to the prepared statement
    mysqli_stmt_bind_param($stmt, "s", $image_url);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if (!$result) {
        //echo "Error: Insertion failed for file '$file_path'.";
    } else {
       // echo "Image data from '$file_path' saved successfully.";
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Retrieve image URLs from the database
$sql = "SELECT image_url FROM imagess";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $image_url = $row['image_url'];

        // Display the image within a div
        echo "<div>";
       //echo "<img src='$image_url' alt='Retrieved Image'>";
      // echo "<img src='C:\Users\TANISHKA\Documents\importantfiles\backup'.$file_name .$image_url alt='Retrieved Image'>";
    //  echo "<img src='$temp_folder/$file_name/$image_url' alt='Retrieved Image'>";
     
        echo "</div>";
    }
} else {
    echo "No images found in the database.";
}

// Close resources
mysqli_close($conn);
closedir($dir_handle);
*/











// Form handling (replace with your actual logic)
/*if (isset($_POST['download'])) {
    // Validate form data and ensure security measures are in place
    // ...

        $zip_path = 'C:\Users\TANISHKA\Documents\importantfiles\backup\221460531.jpg'; // Replace with actual path

        // Check file exists and is readable
        if (is_file($zip_path) && is_readable($zip_path)) {
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="221460531.jpg"');
            readfile($zip_path);
            exit; // Stop script execution after download
        } else {
            echo "Error: ZIP file not found or inaccessible.";
        }
    } 
else {
    // Display your form or other content here
}*/
























// Handle form submission and potential download
/*if (isset($_POST['download'])) {
    

  //$download_url = 'https://download.com/downloads/221460531.zip';
  $download_url  = 'C:\Users\TANISHKA\Documents\importantfiles\backup';
  
  //$download_url = 'https://your-domain.com/downloads/221460531.zip';

  // Set appropriate HTTP headers for download
  header('Content-type: application/zip');
  header('Content-Disposition: attachment; filename="$file_path"');

  // Download ZIP file and output directly to the browser
  readfile($download_url);


} else {
  // No download initiated, display form or other content
  
}
*/
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
        <li><a href="dashboardrecord.php"><h5 style= " color: grey">Dashboard Records</h5></a></li>
        <li><a href="fdashboard.php"><h5 style= " color: grey">signout</h5></a></li>
        
        </ul>            
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">














                
              
            <h2 style="color: black; margin-top: 540px; margin-left: 340px; display: block;">
 successfully Uploaded Zip File<br> <br>

</form>
</h2>     







  
    

</div>
    </div>
</body>

</html>
     
