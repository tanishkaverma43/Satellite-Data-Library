<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: facultylogin.php");
    exit();
}
?>













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
<style>
     h1 { 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    font-family: sans-serif; 
    min-height: 10vh;  
    margin: 0; 
} 

.my-button {
    background-color: black;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 5px;
    position: fixed; 
    top: 450px; 
    right: 650px; 
}

.my-button:hover {
    background-color: gray;
}

        </style>

</head>
<body>

    <h1>Satellite Data Table</h1>



<?php

include("db_connection.php");

// Assuming you have a valid $conn variable established for database connection


    $query = "SELECT * FROM product_dataa"; // Select all if no search term

$result = mysqli_query($conn, $query);



//make table


if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>"; 
    
  

// Add border to create lines around cells

    echo "<tr>";
    // Display table headers for all columns
    echo "<th>ProductID</th><br>";
    echo "<th>SatID</th><br>";
    echo "<th>Sensor</th>";
    echo "<th>DateOfDump</th>";
    echo "<th>DumpingOrbitNo</th>";
    echo "<th>ImagingOrbitNo</th>";	
    echo "<th>BytesPerPixel</th>";
    echo "<th>BitsPerPixel</th>"; 
    echo "<th>GenerationDate</th>";	
    echo "<th>ProdType</th>";	
    echo "<th>InputResolutionAlong</th>";
    echo "<th>'InputResolutionAcross</th>";
    echo "<th>OutputResolutionAlong</th>";	
    echo "<th>OutputResolutionAcross</th>";
    echo "<th>Season</th>";	
    echo "<th>ImageFormat</th>";
    echo "<th>ProcessingLevel</th>";
    echo "<th>ResampCode</th>"; 
    echo "<th>NoScans</th>";
    echo "<th>'NoPixels</th>";
    echo "<th>StartPixel</th>";	
    echo "<th>MapProjection</th>";	
    echo "<th>Datum</th>";
    echo "<th>ProdULLat</th>";
    echo "<th>ProdULLon</th>";	
    echo "<th>ProdURLat</th>";
    echo "<th>ProdURLon</th>";
    echo "<th>ProdLRLat</th>";
    echo "<th>ProdLRLon</th>";	
    echo "<th>ProdLLLat</th>";
    echo "<th>ProdLLLon</th>";
    echo "<th>ImageULLat</th>";	
    echo "<th>ImageULLon</th>";
    echo "<th>ImageURLat</th>";		
    echo "<th>ImageURLon</th>";
    echo "<th>ImageLRLat</th>";  
    echo "<th>ImageLRLon</th>";	
    echo "<th>ImageLLLat</th>";
    echo "<th>ImageLLLon</th>";	
    echo "<th>SceneCenterLat</th>";	
    echo "<th>SceneCenterLon</th>";
    echo "<th>SceneCenterTime</th>";	
    echo "<th>SceneCenterRoll</th";	
    echo "<th>SceneCenterPitch</th>";
    echo "<th>SceneCenterYaw</th>";
    echo "<th>SunAziumthAtCenter</th>";	
    echo "<th>SunElevationAtCenter</th>";
    echo "<th>ImageHeadingAngle</th>";	
    echo "<th>IncidenceAngle</th>";
    echo "<th>SatelliteAltitude</th>";
    echo "<th>Tiltangle</th>";
    echo "<th>DEMCorrection</th>";	
    echo "<th>SourceOfOrbit</th>";	
    echo "<th>SourceOfAttitude</th>";
    echo "<th>ImagingDirection</th>";
    echo "<th>B2Temp</th>";		
    echo "<th>B3Temp</th>";
    echo "<th>B4Temp</th>";
    echo "<th>B2_Lmin</th>"; 
    echo "<th>B3_Lmin</th>";	
    echo "<th>B4_Lmin</th>";	
    echo "<th>B2_Lmax</th>";	
    echo "<th>B3_Lmax</th>"; 
    echo "<th>B4_Lmax</th>";
    echo "<th>B2SaturationRadiance</th>";
    echo "<th>B3SaturationRadiance</th>";
    echo "<th>B4SaturationRadiance</th>";		
    echo "<th>SceneStartTime</th>";
    echo "<th>SceneEndTime</th>";
    echo "<th>ProductSceneStartTime</th>";
    echo "<th>ProductSceneEndTime</th>";
    echo "<th>GhostCorrection</th>";
    echo "<th>JpegNoColumns</th>";
    echo "<th>JpegNoRows</th>";	
    echo "<th>Downloads</th>";
// ... (add headers for other columns)
    echo "</tr>";




    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // Display data for all columns
        echo "<td>" . $row['ProductID'] . "</td>";
        echo "<td>" . $row['SatID'] . "</td>";
        echo "<td>" . $row['Sensor'] . "</td>";
        echo "<td>" . $row['DateOfDump'] . "</td>";
        echo "<td>" . $row['DumpingOrbitNo'] . "</td>";
        echo "<td>" . $row['ImagingOrbitNo'] . "</td>";	
        echo "<td>" . $row['BytesPerPixel'] . "</td>";
        echo "<td>" . $row['BitsPerPixel'] . "</td>"; 
        echo "<td>" . $row['GenerationDateTime'] . "</td>"; 
        echo "<td>" . $row['ProdCode'] . "</td>";	
        echo "<td>" . $row['ProdType'] . "</td>";	
        echo "<td>" . $row['InputResolutionAlong'] . "</td>";
        echo "<td>" . $row['InputResolutionAcross'] . "</td>";
        echo "<td>" . $row['OutputResolutionAlong'] . "</td>";	
        echo "<td>" . $row['OutputResolutionAcross'] . "</td>";
        echo "<td>" . $row['Season'] . "</td>";	
        echo "<td>" . $row['ImageFormat'] . "</td>";
        echo "<td>" . $row['ProcessingLevel'] . "</td>";
        echo "<td>" . $row['ResampCode'] . "</td>"; 
        echo "<td>" . $row['NoScans'] . "</td>";
        echo "<td>" . $row['NoPixels'] . "</td>";
        echo "<td>" . $row['StartPixel'] . "</td>";	
        echo "<td>" . $row['MapProjection'] . "</td>";	
        echo "<td>" . $row['Datum'] . "</td>";
        echo "<td>" . $row['ProdULLat'] . "</td>";
        echo "<td>" . $row['ProdULLon'] . "</td>";	
        echo "<td>" . $row['ProdURLat'] . "</td>";
        echo "<td>" . $row['ProdURLon'] . "</td>";
        echo "<td>" . $row['ProdLRLat'] . "</td>";
        echo "<td>" . $row['ProdLRLon'] . "</td>";	
        echo "<td>" . $row['ProdLLLat'] . "</td>";
        echo "<td>" . $row['ProdLLLon'] . "</td>";
        echo "<td>" . $row['ImageULLat'] . "</td>";	
        echo "<td>" . $row['ImageULLon'] . "</td>";
        echo "<td>" . $row['ImageURLat'] . "</td>";		
        echo "<td>" . $row['ImageURLon'] . "</td>";
        echo "<td>" . $row['ImageLRLat'] . "</td>";  
        echo "<td>" . $row['ImageLRLon'] . "</td>";	
        echo "<td>" . $row['ImageLLLat'] . "</td>";
        echo "<td>" . $row['ImageLLLon'] . "</td>";	
        echo "<td>" . $row['SceneCenterLat'] . "</td>";	
        echo "<td>" . $row['SceneCenterLon'] . "</td>";
        echo "<td>" . $row['SceneCenterTime'] . "</td>";	
        echo "<td>" . $row['SceneCenterRoll'] . "</td>";	
        echo "<td>" . $row['SceneCenterPitch'] . "</td>";
        echo "<td>" . $row['SceneCenterYaw'] . "</td>";
        echo "<td>" . $row['SunAziumthAtCenter'] . "</td>";	
        echo "<td>" . $row['SunElevationAtCenter'] . "</td>";
        echo "<td>" . $row['ImageHeadingAngle'] . "</td>";	
        echo "<td>" . $row['IncidenceAngle'] . "</td>";
        echo "<td>" . $row['SatelliteAltitude'] . "</td>";
        echo "<td>" . $row['Tiltangle'] . "</td>";
        echo "<td>" . $row['DEMCorrection'] . "</td>";	
        echo "<td>" . $row['SourceOfOrbit'] . "</td>";	
        echo "<td>" . $row['SourceOfAttitude'] . "</td>";
        echo "<td>" . $row['ImagingDirection'] . "</td>";
        echo "<td>" . $row['B2Temp'] . "</td>";		
        echo "<td>" . $row['B3Temp'] . "</td>";
        echo "<td>" . $row['B4Temp'] . "</td>";
        echo "<td>" . $row['B2_Lmin'] . "</td>"; 
        echo "<td>" . $row['B3_Lmin'] . "</td>";	
        echo "<td>" . $row['B4_Lmin'] . "</td>";	 
        echo "<td>" . $row['B2SaturationRadiance'] . "</td>";
        echo "<td>" . $row['B3SaturationRadiance'] . "</td>";
        echo "<td>" . $row['B4SaturationRadiance'] . "</td>";		
        echo "<td>" . $row['SatelliteHeadingAngle'] . "</td>";	
        echo "<td>" . $row['SceneStartTime'] . "</td>";
        echo "<td>" . $row['SceneEndTime'] . "</td>";
        echo "<td>" . $row['ProductSceneStartTime'] . "</td>";
        echo "<td>" . $row['ProductSceneEndTime'] . "</td>";
        echo "<td>" . $row['GhostCorrection'] . "</td>";
        echo "<td>" . $row['JpegNoColumns'] . "</td>";
        echo "<td>" . $row['JpegNoRows'] . "</td>";	
       // echo "<td><a href='fdownloads.php?' target='_thapa'>Download</a></td>";

      //  $file_name="";
        //echo "<td><a href='d.php?file=" . urlencode($file_name) . "' target='_thapa'>Download</a></td>";

     







        // ... (display data for other columns)
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}



mysqli_close($conn);



?>

<a href="upbutton.php" class="card-item">
<button class="my-button">Back</button>






</body>
</html>