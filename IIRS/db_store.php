<?php



//store data



//echo $data["ProductID"];
//$sql = "INSERT INTO product_data (ProductID) VALUES ($data[ProductID] )";


/*$sql = "INSERT INTO `product_dataa` (`ProductID`, `SatID`, `Sensor`,	`SubScene`,	`GenAgency`,	`Path`,	`Row`,	`SessionNumber`,	`DateOfPass`,
	`NoOfBands`,	`BandNumbers`, `PassType`,	`DateOfDump`,	`DumpingOrbitNo`,	`ImagingOrbitNo`,	`BytesPerPixel`,
    `BitsPerPixel`,	`GenerationDateTime`,`ProdCode`,	`ProdType`,	`InputResolutionAlong`,`InputResolutionAcross`,	`OutputResolutionAlong`,
    `OutputResolutionAcross`,	`Season`, `ImageFormat`,	`ProcessingLevel`,	`ResampCode`,	`NoScans`,
     `NoPixels`, `StartPixel`,	`MapProjection`,	`Ellipsoid`, `Datum`,	`ProdULLat`,	`ProdULLon`,	`ProdURLat`,	`ProdURLon`,	`ProdLRLat`,	`ProdLRLon`,	`ProdLLLat`,
    `ProdLLLon`,`ImageULLat`,	`ImageULLon`,	`ImageURLat`,	`ImageURLon`,	`ImageLRLat`,	`ImageLRLon`,	`ImageLLLat`,	`ImageLLLon`,	`SceneCenterLat`,	`SceneCenterLon`,
    `SceneCenterTime`,	`SceneCenterRoll`,	`SceneCenterPitch`,	`SceneCenterYaw`,	`SunAziumthAtCenter`,	`SunElevationAtCenter`,	`ImageHeadingAngle`,	`IncidenceAngle`,	
    `SatelliteAltitude`,	`Tiltangle`, 



    `DEMCorrection`,	`SourceOfOrbit`,	`SourceOfAttitude`,	`ImagingDirection`,	`B2Temp`,	`B3Temp`,	`B4Temp`,	`B2_Lmin`, `B3_Lmin`,
    `B4_Lmin`,	`B2_Lmax`,	`B3_Lmax`	, `B4_Lmax`,	`B2SaturationRadiance`,	`B3SaturationRadiance`,`B4SaturationRadiance`,	`SatelliteHeadingAngle`,	`SceneStartTime`,
    `SceneEndTime`,	`ProductSceneStartTime`,	`ProductSceneEndTime`,	`GhostCorrection`,	`JpegNoColumns`, `JpegNoRows` 


    ) 	

VALUES ('$data[ProductID]', '$data[SatID]',  '$data[Sensor]', '$data[SubScene]',	'$data[GenAgency]',    '$data[Path]',	'$data[Row]',
 	'$data[SessionNumber]',	'$data[DateOfPass]',	'$data[NoOfBands]',	'$data[BandNumbers]',	'$data[PassType]',	'$data[DateOfDump]',
    '$data[DumpingOrbitNo]',	'$data[ImagingOrbitNo]',	'$data[BytesPerPixel]', '$data[BitsPerPixel]', '$data[GenerationDateTime]','$data[ProdCode]',	'$data[ProdType]',	'$data[InputResolutionAlong]',	
    '$data[InputResolutionAcross]',	'$data[OutputResolutionAlong]','$data[OutputResolutionAcross]',	'$data[Season]',
     '$data[ImageFormat]',	'$data[ProcessingLevel]',	'$data[ResampCode]', '$data[NoScans]',
       '$data[NoPixels]',	'$data[StartPixel]',	'$data[MapProjection]',	'$data[Ellipsoid]','$data[Datum]',
    '$data[ProdULLat]',	'$data[ProdULLon]',	'$data[ProdURLat]',	'$data[ProdURLon]',	'$data[ProdLRLat]',	'$data[ProdLRLon]',	
    '$data[ProdLLLat]',	'$data[ProdLLLon]','$data[ImageULLat]',	'$data[ImageULLon]',	'$data[ImageURLat]',	'$data[ImageURLon]',
    '$data[ImageLRLat]',   '$data[ImageLRLon]',	'$data[ImageLLLat]',	'$data[ImageLLLon]',	'$data[SceneCenterLat]',	
    '$data[SceneCenterLon]',	'$data[SceneCenterTime]',	'$data[SceneCenterRoll]',	'$data[SceneCenterPitch]',	'$data[SceneCenterYaw]',
    '$data[SunAziumthAtCenter]',	'$data[SunElevationAtCenter]',	'$data[ImageHeadingAngle]',	'$data[IncidenceAngle]',	'$data[SatelliteAltitude]',
    '$data[Tiltangle]',


    '$data[DEMCorrection]',	'$data[SourceOfOrbit]',	'$data[SourceOfAttitude]',	'$data[ImagingDirection]',	'$data[B2Temp]',	'$data[B3Temp]',
    '$data[B4Temp]',	'$data[B2_Lmin]', '$data[B3_Lmin]',	'$data[B4_Lmin]',	'$data[B2_Lmax]',	'$data[B3_Lmax]'	, '$data[B4_Lmax]',	'$data[B2SaturationRadiance]',
    '$data[B3SaturationRadiance]',	'$data[B4SaturationRadiance]',		'$data[SatelliteHeadingAngle]',	'$data[SceneStartTime]',	'$data[SceneEndTime]',	'$data[ProductSceneStartTime]',
    '$data[ProductSceneEndTime]',	'$data[GhostCorrection]', 	'$data[JpegNoColumns]',	'$data[JpegNoRows]'


     )";


$result = mysqli_query($conn, $sql); 

if($result){
    //echo "The table was created !<br>";
}
else{
    echo " no create--->";
    mysqli_error($conn);
}
//$stmt = $conn->prepare($sql);


/*echo "<table>\n";
foreach ($data as $key => $value) {
    echo "<tr><td>$key</td><td>$value</td></tr>\n";
}*/


?>



<?php
// Assuming $conn is your database connection

// Check if $data array is properly defined and contains required values
if (!isset($data) || !is_array($data)) {
    echo "Data array is not properly defined or empty!";
    exit; // Exit the script if data is not available
}

// Assuming $data and $conn are properly defined

// Assuming $data contains all necessary values







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


$image_url = $file_path . DIRECTORY_SEPARATOR . $image_name;











































// Escape the image URL to prevent SQL injection
$image_url = mysqli_real_escape_string($conn, $image_url);

// Check if the image URL already exists
$check_sql = "SELECT * FROM `product_dataa` WHERE `image_url` = '$image_url'";
$check_result = mysqli_query($conn, $check_sql);

if(mysqli_num_rows($check_result) > 0) {
    // Image URL already exists in the database, do not insert
    //echo "Image URL already exists in the database.";
} else {

$sql = "INSERT INTO `product_dataa` (
    `ProductID`, `SatID`, `Sensor`, `SubScene`, `GenAgency`, `Path`, `Row`, `SessionNumber`, `DateOfPass`, `NoOfBands`, 
    `BandNumbers`, `PassType`, `DateOfDump`, `DumpingOrbitNo`, `ImagingOrbitNo`, `BytesPerPixel`, `BitsPerPixel`, 
    `GenerationDateTime`, `ProdCode`, `ProdType`, `InputResolutionAlong`, `InputResolutionAcross`, `OutputResolutionAlong`, 
    `OutputResolutionAcross`, `Season`, `ImageFormat`, `ProcessingLevel`, `ResampCode`, `NoScans`, `NoPixels`, `StartPixel`, 
    `MapProjection`, `Ellipsoid`, `Datum`, `ProdULLat`, `ProdULLon`, `ProdURLat`, `ProdURLon`, `ProdLRLat`, `ProdLRLon`, 
    `ProdLLLat`, `ProdLLLon`, `ImageULLat`, `ImageULLon`, `ImageURLat`, `ImageURLon`, `ImageLRLat`, `ImageLRLon`, 
    `ImageLLLat`, `ImageLLLon`, `SceneCenterLat`, `SceneCenterLon`, `SceneCenterTime`, `SceneCenterRoll`, `SceneCenterPitch`, 
    `SceneCenterYaw`, `SunAziumthAtCenter`, `SunElevationAtCenter`, `ImageHeadingAngle`, `IncidenceAngle`, `SatelliteAltitude`, 
    `Tiltangle`, `DEMCorrection`, `SourceOfOrbit`, `SourceOfAttitude`, `ImagingDirection`, `B2Temp`, `B3Temp`, `B4Temp`, 
    `B2_Lmin`, `B3_Lmin`, `B4_Lmin`, `B2_Lmax`, `B3_Lmax`, `B4_Lmax`, `B2SaturationRadiance`, `B3SaturationRadiance`, 
    `B4SaturationRadiance`, `SatelliteHeadingAngle`, `SceneStartTime`, `SceneEndTime`, `ProductSceneStartTime`, 
    `ProductSceneEndTime`, `GhostCorrection`, `JpegNoColumns`, `JpegNoRows`, `image_url`
) VALUES (
    '$data[ProductID]', '$data[SatID]', '$data[Sensor]', '$data[SubScene]', '$data[GenAgency]', '$data[Path]', '$data[Row]', 
    '$data[SessionNumber]', '$data[DateOfPass]', '$data[NoOfBands]', '$data[BandNumbers]', '$data[PassType]', '$data[DateOfDump]', 
    '$data[DumpingOrbitNo]', '$data[ImagingOrbitNo]', '$data[BytesPerPixel]', '$data[BitsPerPixel]', '$data[GenerationDateTime]', 
    '$data[ProdCode]', '$data[ProdType]', '$data[InputResolutionAlong]', '$data[InputResolutionAcross]', '$data[OutputResolutionAlong]', 
    '$data[OutputResolutionAcross]', '$data[Season]', '$data[ImageFormat]', '$data[ProcessingLevel]', '$data[ResampCode]', '$data[NoScans]', 
    '$data[NoPixels]', '$data[StartPixel]', '$data[MapProjection]', '$data[Ellipsoid]', '$data[Datum]', '$data[ProdULLat]', '$data[ProdULLon]', 
    '$data[ProdURLat]', '$data[ProdURLon]', '$data[ProdLRLat]', '$data[ProdLRLon]', '$data[ProdLLLat]', '$data[ProdLLLon]', '$data[ImageULLat]', 
    '$data[ImageULLon]', '$data[ImageURLat]', '$data[ImageURLon]', '$data[ImageLRLat]', '$data[ImageLRLon]', '$data[ImageLLLat]', '$data[ImageLLLon]', 
    '$data[SceneCenterLat]', '$data[SceneCenterLon]', '$data[SceneCenterTime]', '$data[SceneCenterRoll]', '$data[SceneCenterPitch]', '$data[SceneCenterYaw]', 
    '$data[SunAziumthAtCenter]', '$data[SunElevationAtCenter]', '$data[ImageHeadingAngle]', '$data[IncidenceAngle]', '$data[SatelliteAltitude]', 
    '$data[Tiltangle]', '$data[DEMCorrection]', '$data[SourceOfOrbit]', '$data[SourceOfAttitude]', '$data[ImagingDirection]', '$data[B2Temp]', 
    '$data[B3Temp]', '$data[B4Temp]', '$data[B2_Lmin]', '$data[B3_Lmin]', '$data[B4_Lmin]', '$data[B2_Lmax]', '$data[B3_Lmax]', 
    '$data[B4_Lmax]', '$data[B2SaturationRadiance]', '$data[B3SaturationRadiance]', '$data[B4SaturationRadiance]', '$data[SatelliteHeadingAngle]', 
    '$data[SceneStartTime]', '$data[SceneEndTime]', '$data[ProductSceneStartTime]', '$data[ProductSceneEndTime]', '$data[GhostCorrection]', 
    '$data[JpegNoColumns]', '$data[JpegNoRows]', '$image_url'
)";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The data was inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
}

mysqli_close($conn);
        }
    }
}





?>







