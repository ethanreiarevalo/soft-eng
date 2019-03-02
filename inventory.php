<?php
session_start();

$username = $_SESSION['username'];
$password = $_SESSION['password'];
$storename = $_SESSION['store_name'];
$email=$_SESSION['email'];
$fname=$_SESSION['first_name'];
$lname=$_SESSION['last_name'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="inventory.css" />
    <script src="main.js"></script>


</head>
<body>
    <div id="bodygrid">
        <div id=itemInventory>
            <div id="SearchInventory">
                <div id="storelogo"></div>
                <div id="profilelogo"></div>
                
            </div>
            <div id="StoreName">
                <label>STORENAME HERE</label>
            </div>
            <div id="TableInventory">
                <center>
                    <form action="inventoryprocess.php" id="insert" method="post">
                    <label>ITEM NAME</label><br>
                    <input type="text" id="ItemName" value="Uneditable" name="itemname"/><br><br>
                    <label>NUMBER IN STOCK</label><br>
                    <input type="text" id="NumberInStock" value="Uneditable" name="numberinstock"/><br><br>
                    <label>CAPITAL</label><br>
                    <input type="text" id="CapitalBox" value="Enter Text" name="capital"/><br><br>
                    <label>SELLING PRICE </label><br>
                    <input type="text" id="SellingPriceBox" value="Enter Text" name="sellingprice"/><br><br>
                    <label>DATE MODIFIED</label><br>
                    <input type="text" id="DateModified" value="Uneditable" name="datemodified"/><br><br>
                    <button type="submit" value="Insert">ADD</button>
                    </form>
                    
                </center>
            </div>
        </div>
        <div id="options">
            <div id="choices">
                    <label for "#SearchBox" style="display:inline;">SEARCH</label>
                    <input type="text" id="SearchBox" value="Enter Text"/>
            </div>
            <div id="modifications">
                
                <table>
                    <tr>
                        <th>Item Name</th>
                        <th>Stock</th> 
                        <th>Capital</th>
                        <th>Selling Price</th>
                        <th>Date Modified</th>
                        <th>Add Stock</th>
                        <th>Update Item</th>
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
                            echo '<td><center><button>ADD</button></center></td></center></td>';
                            echo '<td><center><button>UPDATE</button></center></td></center></td></tr>';
                            }
                        }
                    ?>
                </table>
            </div>
            <div id="selections">
                
                <div id="PageOptions">
                    <input type="button" class="pos" value="POS" onclick="location.href='pos.php';">
                    <input type="button" class="reports" value="REPORTS">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
