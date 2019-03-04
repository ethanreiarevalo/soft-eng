<?php
session_start();
$conn_error = 'could not connect';
$username =$_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$storename ="none";
$fname =$_POST['first_name'];
$lname =$_POST['last_name'];
$type = "admin";
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'e_tinda';
$con = mysqli_connect($mysql_host, $mysql_user, $mysql_pass, "e_tinda") ;
if(mysqli_query($con,"INSERT INTO `t_account` VALUES (null,'$username','$email','$storename','$pass',
'$fname','$lname','$type')")===true){

 
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $pass;
 
      $_SESSION['first_name'] = $fname;
      $_SESSION['last_name'] = $lname;
      $_SESSION['email'] = $email;
        header("location: admin.php");
    } else {
        echo "Error creating account " . $con->error;
    }

mysqli_close($con);

?>