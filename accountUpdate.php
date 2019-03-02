<?php
session_start();
$conn_error = 'could not connect';
$username = $_POST['userName'];
$password = $_POST['passWord'];
$email= $_POST['eMail'];
$storename = $_SESSION['storename'];
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'e_tinda';
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, "e_tinda") ;
$sql =  "Update t_account set username = '$username', userpassword = '$password', email = '$email' where store_name = '$storename'";
if (mysqli_query($con, $sql)) {
    echo "Record updated successfully";
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['email'] = $email;
    header("refresh:5;url=account.php");
 } else {
    echo "Error updating record: " . mysqli_error($con);
 }
 mysqli_close($con);





?>