<!DOCTYPE html>
<?php
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
$storename = $_SESSION['store_name'];
$email= $_SESSION['email'];
$fname = $_SESSION['first_name'];
$lname = $_SESSION['last_name'];
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome Admin <?php echo $fname; echo " "; echo $lname;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="6.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="bodycontainer">
        <div id=navigator>
            <div id="welcome">Welcome <?php echo $fname; echo" "; echo "$lname";?> !</div>
            <ul>
                <li><a href="index.php" action="logout.php" method = "post">Logout</a></li>
            </ul>
        </div>

        <div id="tablecontainer">
            
            
            <div id="table">
            <h4 style="">E-Tinda Clients</h4>
            <hr>
                <table>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Store Name</th>
                    <th>Password</th>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
                <?php
                        $user = 'root';
                        $pass = '';
                        $db = 'e_tinda';
                        $type = 'type';
                      
                        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
                        $sql = "SELECT username, email, store_name, userpassword, first_name, last_name from t_account where $type = 'client'";
                        $result = $db->query($sql);


                        if($result->num_rows >0){
                            while($row = $result->fetch_assoc()){
                            echo '<tr><td><center>' .$row["username"]. '</center></td>';
                            echo '<td><center>' .$row["email"]. '</center></td>';
                            echo '<td><center>' .$row["store_name"]. '</center></td>';
                            echo '<td><center>' .$row["userpassword"]. '</center></td>';
                            echo '<td><center>' .$row["first_name"]." ".$row['last_name']. '</center></td>';
                            echo '<td><center><button>DELETE</button></center></td></tr>';
                            }
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>