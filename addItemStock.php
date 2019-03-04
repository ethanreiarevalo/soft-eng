<?php
$con=mysqli_connect("abc","abc","abc","abc");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['itemid']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM student WHERE id='".$id."'");
mysqli_close($con);
header("Location: index.php");
?> 