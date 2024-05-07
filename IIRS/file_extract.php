

<?php


/*if (isset($_FILES['zip_file'])) {
    $file_name = $_FILES['zip_file']['name'];
    $file_tmp = $_FILES['zip_file']['tmp_name'];

    // Validate file extension (optional)
    if (pathinfo($file_name, PATHINFO_EXTENSION) !== 'zip') {
        die("Only zip files are allowed!");
    }

    // Create a temporary folder (if it doesn't exist)
    $temp_folderr = 'D:\importantfiles\backup333';
    
    if (!file_exists($temp_folderr)) {
        mkdir($temp_folderr, 0777, true); // Create with full permissions
    }

    // Move uploaded file to temporary folder with .zip extension
    $destination_path = $temp_folderr . DIRECTORY_SEPARATOR . $file_name;
    move_uploaded_file($file_tmp, $destination_path);

    // Extract uploaded zip file
   $zip = new ZipArchive;








}











    // Create a temporary folder (if it doesn't exist)
    $temp_folder = 'C:\Users\TANISHKA\Documents\importantfiles\backup';
    
    if (!file_exists($temp_folder)) {
        mkdir($temp_folder, 0777, true); // Create with full permissions
    }

    // Move uploaded file to temporary folder
    move_uploaded_file($file_tmp, $temp_folder . $file_name);

    // Extract zip file
    $zip = new ZipArchive;
    if ($zip->open($temp_folder . $file_name) === TRUE) {
        $zip->extractTo($temp_folder);
        $zip->close();
       // echo "Zip file extracted successfully!";
    } else {
        echo "Error extracting zip file!";
    }



}




*/














if (isset($_FILES['zip_file'])) {
    $file_name = $_FILES['zip_file']['name'];
    $file_tmp = $_FILES['zip_file']['tmp_name'];

    // Validate file extension (optional)
    if (pathinfo($file_name, PATHINFO_EXTENSION) !== 'zip') {
        die("Only zip files are allowed!");
    }

    // Create temporary folders if they don't exist
    $zip_temp_folder = 'D:\importantfiles\backup333';
    $extract_temp_folder = 'D:\importantfiles\backup';

    if (!file_exists($zip_temp_folder)) {
        mkdir($zip_temp_folder, 0777, true); // Create with full permissions
    }

    if (!file_exists($extract_temp_folder)) {
        mkdir($extract_temp_folder, 0777, true); // Create with full permissions
    }

    // Move uploaded file to temporary zip folder
    $zip_destination_path = $zip_temp_folder . DIRECTORY_SEPARATOR . $file_name;
    move_uploaded_file($file_tmp, $zip_destination_path);

    // Extract uploaded zip file
    $zip = new ZipArchive;
    if ($zip->open($zip_destination_path) === TRUE) {
        $zip->extractTo($extract_temp_folder);
        $zip->close();
       // echo "Zip file extracted successfully!";
    } else {
        echo "Error extracting zip file!";
    }
}




?>
