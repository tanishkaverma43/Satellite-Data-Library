





<?php


// Database connection
include("db_connection.php");










if (isset($_FILES['zip_file'])) {
    $file_name = $_FILES['zip_file']['name'];
    $file_tmp = $_FILES['zip_file']['tmp_name'];
  
    // Validate file extension (optional)
    if (pathinfo($file_name, PATHINFO_EXTENSION) !== 'zip') {
        die("Only zip files are allowed!");
    }
  
    // Create a temporary folder (if it doesn't exist)
    $temp_folder = 'D:\importantfiles\backup';
    
    if (!file_exists($temp_folder)) {
        mkdir($temp_folder, 0777, true); // Create with full permissions
    }
  
    // Move uploaded file to temporary folder with .zip extension
    $destination_path = $temp_folder . DIRECTORY_SEPARATOR . $file_name;
    move_uploaded_file($file_tmp, $destination_path);
  
    // Extract uploaded zip file
   $zip = new ZipArchive;
  
  }
  
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

    // Construct full path to the current file
    $file_path = $temp_folder . DIRECTORY_SEPARATOR . $file_name; 

    if (is_dir($file_path)) {
        // Iterate through files in this directory
        $inner_dir_handle = opendir($file_path);
        while (false !== ($image_name = readdir($inner_dir_handle))) {
            // Skip "." and ".." directories
            if ($image_name == "." || $image_name == "..") {
                continue;
            }

            // Check if the file is a JPG image
            $imagePath = $file_path . DIRECTORY_SEPARATOR . $image_name;
            if (pathinfo($imagePath, PATHINFO_EXTENSION) !== 'jpg') {
                // Skip non-JPG files
                continue;
            }

            // Read the image file
            $imageData = file_get_contents($imagePath);

            if ($imageData === false) {
                echo "Error: Failed to read the image file $imagePath.";
                continue; // Move to the next file
            }


include("db_connection.php");

// Read the image file


// Encode the image data as base64
$base64ImageData = base64_encode($imagePath);

if ($base64ImageData === false) {
    echo "Error: Failed to encode the image data.";
    exit(1);
}
















/// Insert data query with URL existence check
$insertDataQuery = "INSERT INTO images (image_url) SELECT * FROM (SELECT ?) AS tmp WHERE NOT EXISTS (SELECT image_url FROM images WHERE image_url = ?) LIMIT 1";

// Prepare the insert data statement
$stmt = mysqli_prepare($conn, $insertDataQuery);

if (!$stmt) {
    echo "Error: Failed to prepare the insert statement.";
    exit(1);
}

// Bind parameters
mysqli_stmt_bind_param($stmt, "ss", $imageUrl, $imageUrl);

// Set the image URL
$imageUrl = $imagePath;

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: Image already exists in the database.";
    }
} else {
    echo "Error: Failed to insert data into the database.";
    exit(1);
}







}
closedir($inner_dir_handle); // Close the inner directory handle
}
}
closedir($dir_handle);










// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($conn);

  
    














?>
















<?php


        // Construct the image path
       /* $imagePath =  $file_path . DIRECTORY_SEPARATOR . $image_name;
        
        // Check if the file exists
        if (file_exists($imagePath)) {
            // Get the image data
            $imageData = base64_encode(file_get_contents($imagePath));
            // Format the image data
            $src = 'data:image/jpeg;base64,'.$imageData;
            
          
            
            // Display the image in a table cell
           // echo "<td><img src='$src' alt='Image' style='width: 100px;'></td>";
            
          
        }*/
?>



