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
                    <label>ITEM NAME</label><br>
                    <input type="text" id="ItemName" value="Uneditable"/><br><br>
                    <label>NUMBER IN STOCK</label><br>
                    <input type="text" id="NumberInStock" value="Uneditable"/><br><br>
                    <label>CAPITAL</label><br>
                    <input type="text" id="CapitalBox" value="Enter Text"/><br><br>
                    <label>SELLING PRICE </label><br>
                    <input type="text" id="SellingPriceBox" value="Enter Text"/><br><br>
                    <label>DATE MODIFIED</label><br>
                    <input type="text" id="DateModified" value="Uneditable"/><br><br>
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
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <td>Catsup</td>
                        <td>20</td> 
                        <td>18.75</td>
                        <td>20.00</td>
                        <td><center>2-23-2019</center></td>
                        <td><center><button>delete</button></center></td>
                    </tr>
                    <tr>
                        <td>Shampoo</td>
                        <td>24</td> 
                        <td>5.50</td>
                        <td>6.00</td>
                        <td><center>2-23-2019</center></td>
                        <td><center><button>delete</button></center></td>
                    </tr>
                    <tr>
                        <td>Eggs</td>
                        <td>60</td> 
                        <td>6.00</td>
                        <td>6.50</td>
                        <td><center>2-23-2019</center></td>
                        <td><center><button>delete</button></center></td>
                    </tr>
                </table>
            </div>
            <div id="selections">
                <div id="InventoryOptions">
                    <input type="button" class="button" value="ADD">
                    <input type="button" class="update" value="UPDATE">
                </div>
                <div id="PageOptions">
                    <input type="button" class="pos" value="POS">
                    <input type="button" class="reports" value="REPORTS">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
