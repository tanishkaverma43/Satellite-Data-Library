<?php

include("db_connection.php");

// ... (existing code for database connection and image upload)

// Retrieve the most recently uploaded image path from the database
$sql = "SELECT image_url FROM images ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $image_url = $row['image_url'];
    }
} else {
    $image_url = ""; // Set a default value if no image is found
}



// Process image if form is submitted
if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
    // Process the image
} else {
    echo "No image was uploaded.";
}

if (isset($_POST['submit'])) {
    $target_dir = "uploads/";  // Relative path for flexibility
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Validate image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }


    // If image is valid, move it and save path to database
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO images (image_url) VALUES ('$target_file')";
            $conn->query($sql);




 echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded and saved in database.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }





   

    
 



// Close database connection
mysqli_close($conn);



}



?>



<?php

// ... (existing code for database connection and image upload)

// Retrieve the most recently uploaded image path from the database
$sql = "SELECT image_url FROM images ORDER BY id DESC LIMIT 1";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $image_url = $row['image_url'];
    }
} else {
    $image_url = ""; // Set a default value if no image is found
}





// Close database connection

?>

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style>


.animated-image {
  animation: pop-scale 2s ease-in-out;
}

@keyframes pop-scale {
  from {
    transform: scale(0.9);
    opacity: 0;
  }
  to {
    transform: scale(1);
    opacity: 1;
  }
}



.animated-image {
  animation: pop-translate 2s ease-in-out;
}

@keyframes pop-translate {
  from {
    transform: translate(10px, 10px);
    opacity: 0;
  }
  to {
    transform: translate(0, 0);
    opacity: 1;
  }
}

</style>

</head>
<body>

<div>
  <img src="<?php echo $image_url; ?>" alt="Uploaded Image" class="animated-image">
</div>






</body>
</html>