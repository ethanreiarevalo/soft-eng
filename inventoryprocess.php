<?php
session_start();
$storename = $_SESSION['storename'];
$itemname = $_POST['itemname'];
$numberinstock = $_POST['numberinstock'];
$capital = $_POST['capital'];
$sellingprice = $_POST['sellingprice'];
$datemodified = $_POST['datemodified'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_tinda";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO `$storename` (itemid, itemname, stock, capital, sellingPrice, dateModified)
VALUES (null, '$itemname', '$numberinstock', '$capital', '$sellingprice', '$datemodified')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>