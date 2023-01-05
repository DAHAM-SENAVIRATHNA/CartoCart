<?php 
$db_name = "shopping";
$connection = mysqli_connect("localhost","root","",$db_name);
 // get id value
 $id = $_GET['id'];

// sql to delete a record
$query = "DELETE FROM product WHERE id='$id'";

// print_r($sql);

if (mysqli_query($connection, $query)) {
   echo "Record deleted successfully";
} 
else {
    echo "Error deleting record: " . mysqli_error($connection);
}

 //redirect here
include 'admin.php';

?>