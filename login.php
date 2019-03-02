<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e_tinda";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM t_account";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    if($row["username"] == $Username && $row["userpassword"] == $Pass){
        header("location:account.php");
    }else{
        echo"Login Unsuccessful";
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>