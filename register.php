<?php
session_start();
$conn_error = 'could not connect';
$username =$_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$storename =$_POST['store_name'];
$fname =$_POST['first_name'];
$lname =$_POST['last_name'];
$type = "client";
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'e_tinda';
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, "e_tinda") ;
if(mysqli_query($con,"INSERT INTO `t_account` VALUES (null,'$username','$email','$storename','$pass',
'$fname','$lname','$type')")===true){

  $sql = "CREATE TABLE IF NOT EXISTS `$storename` (
    itemid INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    itemName VARCHAR(30) NOT NULL,
    stock int(10) NOT NULL,
    capital float(10),
    sellingPrice float(10),
    dateModified DATE
    )";
    if ($con->query($sql) === TRUE) {
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $pass;
      $_SESSION['store_name'] = $storename;
      $_SESSION['first_name'] = $fname;
      $_SESSION['last_name'] = $lname;
      $_SESSION['email'] = $email;
        header("location: account.php");
    } else {
        echo "Error creating table: " . $con->error;
    }
} else {
  echo "Error creating account: " . $con->error;
}
mysqli_close($con);

?>