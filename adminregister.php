<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="3.css" />
    <title>Register as an Admin</title>
</head>
<body>
    <div id="bodycontainer">

        <section id="navigator">
            <h3 style="color: ghostwhite; margin-left: 3%;">E-Tinda</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li> | </li>
                <li><a href="registration.php">Login</a></li>
            </ul>
        </section>

        <section id="content">
            <center>
                    <h1 style="margin-top: 6%;">Become an  Admin!</h1>
                    <div id="inputcontainer">
                        <form action="adminprocess.php" method="post">
                                <input type="text" placeholder="firstname" name="first_name">
                                <input type="text" placeholder="lastname" name="last_name">
                                <input type="text" placeholder="email address" name="email">
                                <input type="text" placeholder="username" name="username">
                                <input type="password" placeholder="password" name="password">
                                <button id="button" value="Insert">Register</button>
                        </form>
                        
                    </div>
            </center>
            
        </section>

        <footer id="foot" class="foot">
                <center>
                        <p>
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