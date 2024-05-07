<?php
include("db_connection.php");
error_reporting(0);

$id=$_GET['id'];
$query = "DELETE FROM USERSS WHERE ID = '$id'";

$data=mysqli_query($conn,$query);
if($data)
{
    echo"<font color='green'>Record Deleted from database";
}
else{
    echo"<font color='red'>Failed to delete Record from Database";
}

?>