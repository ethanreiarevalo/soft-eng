<?php
session_start();
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "e_tinda";
$username = $_POST['username'];
$password = $_POST['password'];
$conn = mysqli_connect($servername, $user, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM t_account where username='$username' && userpassword='$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

    if($row["username"] == $username && $row["userpassword"] == $password && $row["type"] == "client"){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $storename = $row["store_name"];
        $fname = $row["first_name"];
        $lname = $row["last_name"];
        $email = $row["email"];
        $_SESSION['store_name'] = $storename;
        $_SESSION['first_name'] = $fname;
        $_SESSION['last_name'] = $lname;
        $_SESSION['email'] = $email;
        header("location:account.php");
    }else if($row["username"] == $username && $row["userpassword"] == $password && $row["type"] == "admin"){
        
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
       // $storename = $row["store_name"];
        $fname = $row["first_name"];
        $lname = $row["last_name"];
        $email = $row["email"];
        $_SESSION['store_name'] = $storename;
        $_SESSION['first_name'] = $fname;
        $_SESSION['last_name'] = $lname;
        $_SESSION['email'] = $email;
        header("location:admin.php");
    }

mysqli_close($conn);

?>