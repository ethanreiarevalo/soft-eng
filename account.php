<?php
session_start();
$username = $_SESSION['username'];
$pass = $_SESSION['password'];
$storename = $_SESSION['store_name'];
$email= $_SESSION['email'];
$fname = $_SESSION['first_name'];
$lname = $_SESSION['last_name'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="4.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="bodycontainer">
        <div id="navigator">
            <div id="logo"></div>
            <div id="links">
                <ul>
                    <li><form action="inventory.php" method="post">
                    <?php $_SESSION['username'] = $username;
                    $_SESSION['password'] = $pass;
                    $_SESSION['store_name'] = $storename;
                    $_SESSION['email']=$email;
                    $_SESSION['fname']=$fname;
                    $_SESSION['lname']=$lname;
                    ?>
                    <a href="Inventory.php">Inventory</a></form></li>
                    <li> | </li>
                    <li><a href="pos.php">POS</a></li>
                    <li> | </li>
                    <li>Logout</li>
                </ul>
            </div>
        </div>
        
        <div id = "main">
            
            <div id="content">
                
                <div id="imageheader">
                    <div id="image" ></div><br/>
                    <h1 name="storename" >  
                        <?php echo $storename;?>
                    </h1>
                </div>
                
                <div id="info">
                    <div id="show">
                        <div id="label">
                            <center><h4>Your Profile</h4></center>
                            <h5>Username</h5>
                            <label for="" style = "display:block;"><?php echo $username;?></label>
                            <h5>Password</h5>
                            <label for="" style = "display:block;"><?php echo $pass;?></label>
                            <h5>Name</h5>
                            <label for="" style = "display:block;"><?php echo $fname; echo ' '; echo $lname;?></label>
                            <h5>Email</h5>
                            <label for="" style = "display:block;"><?php echo $email;?></label>
                        </div>
                    </div>
                    
                    <div id="edit">
                        <form action="accountUpdate.php" method="post" id = "form_">
                            <center><h4>Edit Profile</h4></center>
                            <?php $_SESSION['storename'] = $storename;?>
                            <input type="text" placeholder="Change Username" name="userName">
                            <input type="text" placeholder="Change password" name="passWord">
                            <input type="text" placeholder="Change Email" name="eMail">
                            <button type="submit" value="update" name="Update">Save Changes</button>
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>
</body>
</html>