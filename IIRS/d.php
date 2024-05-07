<!DOCTYPE html>
<html>
<head>
    <title>File Download</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
<div>

    <form method="POST">
        <input type="text" name="search" placeholder="Search files...">
        <input type="submit" value="Search">
    </form>

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
