<?php
$user = 'root';
$pass = '';
$db = 'e_tinda';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

$Username = $_POST['username'];
$Email = $_POST['email'];
$Storename = $_POST['store_name'];
$Password = $_POST['password'];
$Fn = $_POST['first_name'];
$Ln = $_POST['last_name'];

$sql = "insert into t_account(username,email, store_name, password, first_name, last_name) values('$Username','$Email', '$Storename', '$Password', '$Fn', '$Ln')";

if(!mysqli_query($db, $sql)){
    echo"Not Inserted! Please wait a second...";
}else{
    echo"Data Inserted! Please wait a second...";
}
header("location:inventory.php");
?>