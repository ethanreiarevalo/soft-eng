<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_tinda";
$conn =mysqli_connect($servername,$username,$password,$dbname);
$storename = $_SESSION['store_name'];
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$itemname = $_POST['rowName'];
$sql = "UPDATE $storename SET stock = stock+1 WHERE itemName= `$itemname`";

// $id = $_GET['itemid']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("refresh:2;url=inventory.php");
 } else {
    echo "Error updating record: " . mysqli_error($conn);
    echo $itemname;
    echo $storename;
 }
mysqli_close($conn);
?> 