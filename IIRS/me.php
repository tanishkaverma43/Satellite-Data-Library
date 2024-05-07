<?php

// Handle file download
if (isset($_GET['file'])) {
    $file_name = $_GET['file'];
    $file_path = 'D:/importantfiles/backup333/' . $file_name;

    // Validate and sanitize the file path (security best practice)
    if (file_exists($file_path)) {
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-type: application/octet-stream");
        header('Content-Disposition: attachment; filename="' . $file_name . '"');
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: " . filesize($file_path));

        ob_end_flush();
        @readfile($file_path);
        exit;
    } else {
        echo "File not found!";
    }
}

?>
