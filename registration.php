<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Tinda | Register/ Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="2.css" />
    <script src="main.js"></script>
    <link rel="icon" href="logo/logo.png" sizes="16x16" type="image/png">
</head>
<body>
    <div id = "bodycontainer">

        <section id = "navigator">
            
            <h1>E-Tinda</h1>
            
            <div id = "form">
                <form action="login.php" id = "login" method = "post">
                    <input type="text" placeholder = "Username"id= "input_login" name = "username">
                    <input type="password" placeholder = "Enter Password" id = "input_login" name = "password">
                    <button class = "input_button">Login</button>
                </form>
            </div>
        </section>

        <section id = "content">
            <div id= "image" class="image"></div>

            <div id="signup_form">
                <b><p id = "ca">Create an Account</p></b>
                <form action="register.php" id = "signup" method="post">
                    
                    <input type="text" placeholder = "Account username" class = "sign_input" name="username">
                    <input type="password" placeholder = "Password" class = "sign_input" name = "password">
                    <input type="text" placeholder = "Email Address" class = "sign_input" name = "email">
                    <input type="text" placeholder = "Store name" class = "sign_input" name = "store_name">
                    <input type="text" placeholder = "Owner first name" class = "sign_input" name = "first_name">
                    <input type="text" placeholder = "Owner last name" class = "sign_input" name = "last_name">
                    <button class = "sign_input" id = "sign_button" type="submit" value = "Insert" >Sign Up</button>

                </form>
            </div>
        </section>

        <footer id = "footer">
            <center>
                <p id="foot">
                    © JEC development team<br/>
                    for more inquiries you can contact us at:<br/>
                    JECdev@gmail.com<br/>
                    follow us on:<br/>
                </p>
            </center>
        </footer>

    </div>
</body>
</html>