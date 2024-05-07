
<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}
?>




<?php

// Connect to your database (replace placeholders with your credentials)
include("db_connection.php");

// Check if the form has been submitted
if (isset($_POST['name'])) {

    // Retrieve form data, sanitizing inputs to prevent SQL injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']);
    // Prepare and execute the SQL query
    $sql = "INSERT INTO `userss` (`name`, `pass`) 
            VALUES ('$name', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "Successfully !<br>";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>






<!DOCTYPE html>
<html>
<head>
<title>Search and Filter Product Data</title>
<link rel="stylesheet" href="style.css"> </head>

<style>


body {
  background-image: url('https://hougumlaw.com/wp-content/uploads/2016/05/light-website-backgrounds-light-color-background-images-light-color-background-images-for-website-1024x640.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

  .corner-form {
    position: fixed; 
    top: 80px; 
    left: 15px; 
    background-color: #5c7f6c63; 
    padding: 10px;
    border-radius: 5px; 
  }

h1{
    color: black;
    position: fixed; 
    top: 50px; 
    padding: 10px; 
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


<body>

<nav id="topnav">
         <a class="nav-link" href="home.php">Home</a>
         <a class="nav-link" href="cateloguetable.php">Catelogue</a>
         <a class="nav-link" href="down.php">Download</a>
         <a class="nav-link" href="student.php">Search</a>
         <a class="nav-link" href="dashboard.php">Logout</a>

      </nav>

<h1>Search and Filter Product Data</h1>

<form class="corner-form"  method="POST">
    <input type="text" name="search_term" placeholder="Enter search term">
    <input type="submit" value="Search"></form>

</body>
</html>






<?php

include("db_connection.php");

// Assuming you have a valid $conn variable established for database connection

$search_term = ""; // Initialize variable for clarity

if (isset($_POST['search_term'])) {
    $search_term = mysqli_real_escape_string($conn, $_POST['search_term']);
    $query = "SELECT * FROM product_dataa WHERE
                ProductID LIKE '%$search_term%' OR
                SatID LIKE '%$search_term%' OR
                Sensor LIKE '%$search_term%'OR
                DateOfDump  LIKE '%$search_term%' OR
                ProcessingLevel LIKE '%$search_term%'  OR
                Datum LIKE '%$search_term%' OR
                 ImageULLat LIKE '%$search_term%' 	OR
               ImageULLon LIKE '%$search_term%'  OR 
             ImageURLat LIKE '%$search_term%'  OR
              ImageURLon LIKE '%$search_term%'  OR
           ImageLRLat LIKE '%$search_term%'   OR
            ImageLRLon LIKE '%$search_term%' OR
          ImageLLLat LIKE '%$search_term%' OR
          ImageLLLon LIKE '%$search_term%' ";
} else {
    $query = "SELECT * FROM product_dataa"; // Select all if no search term
}
$result = mysqli_query($conn, $query);

echo"$search_term";

//make table


if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";  // Add border to create lines around cells

    echo "<tr>";
    // Display table headers for all columns
    echo "<th>ProductID</th><br>";
    echo "<th>SatID</th><br>";
    echo "<th>Sensor</th>";
    echo "<th>DateOfDump</th>";
    echo "<th>ProcessingLevel</th>";
    echo "<th>Datum</th>";
    echo "<th>ImageULLat</th>";	
    echo "<th>ImageULLon</th>";
    echo "<th>ImageURLat</th>";		
    echo "<th>ImageURLon</th>";
    echo "<th>ImageLRLat</th>";  
    echo "<th>ImageLRLon</th>";	
    echo "<th>ImageLLLat</th>";
    echo "<th>ImageLLLon</th>";	

    // ... (add headers for other columns)
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        // Display data for all columns
        echo "<td>" . $row['ProductID'] . "</td>";
        echo "<td>" . $row['SatID'] . "</td>";
        echo "<td>" . $row['Sensor'] . "</td>";
        echo "<td>" . $row['DateOfDump'] . "</td>";
        echo "<td>" . $row['ProcessingLevel'] . "</td>";
        echo "<td>" . $row['Datum'] . "</td>";
        echo "<td>" . $row['ImageULLat'] . "</td>";	
        echo "<td>" . $row['ImageULLon'] . "</td>";
        echo "<td>" . $row['ImageURLat'] . "</td>";		
        echo "<td>" . $row['ImageURLon'] . "</td>";
        echo "<td>" . $row['ImageLRLat'] . "</td>";  
        echo "<td>" . $row['ImageLRLon'] . "</td>";	
        echo "<td>" . $row['ImageLLLat'] . "</td>";
        echo "<td>" . $row['ImageLLLon'] . "</td>";	

        // ... (display data for other columns)
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.";
}



mysqli_close($conn);



?>


























<?php






/* OR  DateOfDump  LIKE '%$search_term%'  OR DumpingOrbitNo  LIKE '%$search_term%' OR ImagingOrbitNo  LIKE '%$search_term%' 	 OR  BytesPerPixel LIKE '%$search_term%'  OR  BitsPerPixel LIKE '%$search_term%' OR GenerationDate LIKE '%$search_term%'  OR   ProdType LIKE '%$search_term%' 	OR  InputResolutionAlong LIKE '%$search_term%' 
    OR InputResolutionAcross LIKE '%$search_term%'  OR OutputResolutionAlong LIKE '%$search_term%' OR   OutputResolutionAcross LIKE '%$search_term%'  OR   Season LIKE '%$search_term%' OR  ImageFormat LIKE '%$search_term%' 
    OR  ProcessingLevel LIKE '%$search_term%'  OR   ResampCode LIKE '%$search_term%'  OR  NoScans LIKE '%$search_term%' OR NoPixels LIKE '%$search_term%'  OR  StartPixel LIKE '%$search_term%' 	
    OR  MapProjection LIKE '%$search_term%' 	OR  Datum LIKE '%$search_term%' 
    OR  ProdULLat LIKE '%$search_term%'  OR ProdULLon LIKE '%$search_term%' 	 OR ProdURLat LIKE '%$search_term%' 
    OR  ProdURLon LIKE '%$search_term%' 
    OR  ProdLRLat LIKE '%$search_term%' 
    OR  ProdLRLon LIKE '%$search_term%' 	
    OR ProdLLLat LIKE '%$search_term%' 
    OR  ProdLLLon LIKE '%$search_term%' 
    OR ImageULLat LIKE '%$search_term%' 	
    OR  ImageULLon LIKE '%$search_term%' 
    OR  ImageURLat LIKE '%$search_term%' 		
    OR ImageURLon LIKE '%$search_term%' 
    OR  ImageLRLat LIKE '%$search_term%'   
    OR ImageLRLon LIKE '%$search_term%' 	
    OR  ImageLLLat LIKE '%$search_term%' 
    OR  ImageLLLon LIKE '%$search_term%' 	
    OR   SceneCenterLat LIKE '%$search_term%' 	
    OR   SceneCenterLon LIKE '%$search_term%' 
    OR  SceneCenterTime  LIKE '%$search_term%' 	
    OR SceneCenterPitch LIKE '%$search_term%' 
    OR  SceneCenterYaw LIKE '%$search_term%' 
    OR  SunAziumthAtCenter LIKE '%$search_term%' 	
    OR  SunElevationAtCenter LIKE '%$search_term%' 
    OR ImageHeadingAngle LIKE '%$search_term%' 	
    OR  IncidenceAngle LIKE '%$search_term%' 
    OR Tiltangle LIKE '%$search_term%' 
    OR DEMCorrection LIKE '%$search_term%' 	
    OR  SourceOfOrbit LIKE '%$search_term%' 	
    OR  SourceOfAttitude LIKE '%$search_term%' 
    OR  ImagingDirection LIKE '%$search_term%' 
    OR B2Temp LIKE '%$search_term%' 		
    OR B3Temp LIKE '%$search_term%' 
    OR B4Temp LIKE '%$search_term%' 
    OR  B2_Lmin LIKE '%$search_term%'  
    OR B3_Lmin LIKE '%$search_term%' 	
    OR B4_Lmin LIKE '%$search_term%' 	
    OR B2_Lmax LIKE '%$search_term%' 	
    OR B3B4_Lmax LIKE '%$search_term%' 
    OR  B2SaturationRadian LIKE '%$search_term%' 
    OR B4SaturationRadiance LIKE '%$search_term%' 		
    OR  SceneStartTime LIKE '%$search_term%' 
    OR SceneEndTime LIKE '%$search_term%' 
    OR ProductSceneStartTime LIKE '%$search_term%' 
    OR  ProductSceneEndTime LIKE '%$search_term%' 
    OR  GhostCorrection LIKE '%$search_term%' 
    OR JpegNoColumns LIKE '%$search_term%' 
    OR JpegNoRows LIKE '%$search_term%'*/

    /*OR SatID LIKE '%$search_term%' OR Sensor LIKE '%$search_term%' OR DateOfPass LIKE '%$search_term%' OR BandNumbers LIKE '%$search_term%'"*/





     /*echo "<th>DateOfDump</th>";
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
    echo "<th>JpegNoRows</th>";	*/








       /* "<td>" . $row['DateOfDump'] . "</td>";
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
        echo "<td>" . $row['B2_Lmax'] . "</td>";	
        echo "<td>" . $row['B3_Lmax'] . "</td>"; 
        echo "<td>" . $row['B4_Lmax'] . "</td>";
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
        echo "<td>" . $row['JpegNoRows'] . "</td>";	*/

    ?>