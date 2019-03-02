<?php
session_start();
$user = 'root';
$pass = '';
$db = 'e_tinda';
$username = $_POST['userName'];
$password = $_POST['passWord'];
$email= $_POST['eMail'];
$storename = $_SESSION['storename'];

$db = mysql_connect('localhost', $user, $pass, $db) or die("Unable to connect");

$itemname = $_POST['itemname'];
$numberinstock = $_POST['numberinstock'];
$capital = $_POST['capital'];
$sellingprice = $_POST['sellingprice'];
$datemodified = $_POST['datemodified'];

    $sql = "insert into $storename values(null, '$itemname', '$numberinstock',
    '$capital', '$sellingprice', '$datemodified') ";

    if(mysql_query($db, $sql)){
        echo"inserted";
        header("refresh:1;url=inventory.php");
    }
}
?>