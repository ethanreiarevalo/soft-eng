
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
                    <form action="" method="post">
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
                    <tr>
                    <?php
                        $user = 'root';
                        $pass = '';
                        $db = 'e_tinda';
                        $db = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");
                        $sql = "select itemname,numberinstock,capital,sellingprice, datemodified from t_account";
                        $result = $db->query($sql);
                        if($result->num_rows >0){
                            while($row = $result->fetch_assoc()){
                            echo '<tr><td><center>' .$row["itemname"]. '</center></td>';
                            echo '<td><center>' .$row["numberinstock"]. '</center></td>';
                            echo '<td><center>' .$row["capital"]. '</center></td>';
                            echo '<td><center>' .$row["sellingprice"]. '</center></td>';
                            echo '<td><center>' .$row["datemodified"]. '</center></td>';
                            echo '<td><center><button>ADD</button></center></td></center></td></tr>';
                            echo '<td><center><button>UPDATE</button></center></td></center></td></tr>';
                            }
                        }
                    ?>
                    </tr>
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
