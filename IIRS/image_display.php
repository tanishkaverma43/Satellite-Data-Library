<?php
// Path to the image file
$imagePath = "D:\\importantfiles\\backup\\221460531\\221460531.jpg";

// Check if the file exists
if (file_exists($imagePath)) {
    // Get the image data
    $imageData = base64_encode(file_get_contents($imagePath));
    // Format the image data
    $src = 'data:image/jpeg;base64,'.$imageData;
    // Echo the image in a table cell
    echo "<td><img src='$src' alt='Image'></td>";
} else {
    echo "<td>Image not found</td>";
}

?>