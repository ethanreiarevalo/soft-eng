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
    <title>E-Tinda | Manage your Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="4.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="bodycontainer">
        <!--Menu options-->
        <div id="menu">
        <!--Logoand Choices-->
            <div id="logo"></div>
            <div id="navigator">
                    <a href="inventory.php"><div id="block">Inventory</div></a>
                    <a href="pos.php"><div id="block">Point-of-Sales</div></a>
                    <a href="index.php"><div id="block">Log out</div></a>
                
            </div>
        </div>
        <!--Main account page-->
        <div id="accountsec">
           
           <center>
                <div id="image"></div>
                
                    <h1 name="storename">  <?php echo $storename;?>
                    </h1>
                
           </center>
           <div id="info">
               <div id="Show">
                   <div id="label">
                   <label for="" style = "display:block;"> User Name:<br/><?php echo $username;?></label>
                    <label for="" style = "display:block;"> Password:<br/><?php echo $pass;?></label>
                    <label for="" style = "display:block;"> Your Name:<br/><?php echo $fname; echo ' '; echo $lname;?></label>
                    <label for="" style = "display:block;"> Email Address:<br/><?php echo $email;?></label>
                </div>    
               </div>

               <div id="Editable">
                   <form action="accountUpdate.php" method="post" >
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
</body>
</html>