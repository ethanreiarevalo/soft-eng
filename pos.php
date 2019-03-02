<?php
session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$storename = $_SESSION['store_name'];
$email=$_SESSION['email'];
$fname=$_SESSION['first_name'];
$lname=$_SESSION['last_name'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="5.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="bodycontainer">

        <div id="side">
            <div id="header"></div>
            <div id="report">
                <center>
                        <h4>Daily Sales:</h4>
                        <h4>Weekly Sales:</h4>
                        <h4>Monthly Sales:</h4>
                        <h4>Yearly Sales:</h4>        
                </center>
                
            </div>
            <div id="form">
                <center>
                    <form action="" method="post" id="sideform">
                            <input type="text" id="inputside">
                            <input type="text" id="inputside">
                            <input type="text" id="inputside">
                            <input type="text" id="inputside">
                            <input type="text" id="inputside">
                            <button>ADD</button>
                            <button>UPDATE</button>
                    </form>
                </center>
            </div>
        </div>

        <div id="content">
            <div id="main">
                <div id="table">
                <table>
                    <tr>
                        <th>Item Name</th>
                        <th>Stock</th> 
                        <th>Capital</th>
                        <th>Selling Price</th>
                        <th>Date Modified</th>
                    </tr>
                    <?php
                        $user = 'root';
                        $pass = '';
                        $db = 'e_tinda';
                       // $storename = 'basaan ni ethan';
                        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
                        $sql = "select itemName, stock, capital, sellingPrice, dateModified from `$storename`";
                        $result = $db->query($sql);


                        if($result->num_rows >0){
                            while($row = $result->fetch_assoc()){
                            echo '<tr><td><center>' .$row["itemName"]. '</center></td>';
                            echo '<td><center>' .$row["stock"]. '</center></td>';
                            echo '<td><center><div contenteditable>' .$row["capital"]. '</div></center></td>';
                            echo '<td><center><div contenteditable>' .$row["sellingPrice"]. '</div> </center></td>';
                            echo '<td><center>' .$row["dateModified"]. '</center></td>';
                            }
                        }
                    ?>
                </table>
                
                
                </div>
                <div id="poscontainer">
                    <div id="pos" >
                        <div id="mainpos"></div>
                        <div id="posbuttons"></div>
                    </div>
                </div>
            </div>
            <div id="buttons">
                <button>Inventory</button>
                
            </div>
        </div>
    </div>
</body>
</html>