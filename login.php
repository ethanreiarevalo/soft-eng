<?php
$user = 'root';
$pass = '';
$db = 'e_tinda';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

$Username = $_POST['username'];
$Pass = $_POST['password'];

$sql = "select username, password from t_account where username ='$Username' and password = '$Pass' ";

$result = $db->query($sql);
$row = $result->fetch_assoc();


if($row["username"] == $Username && $row["password"] == $Pass){
    header("location:inventory.php");
}else{
    echo"Login Unsuccessful";
}


?>