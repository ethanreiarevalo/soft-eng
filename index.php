<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Tinda | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="1.css" />
    <script src="main.js"></script>
    <link rel="icon" href="logo/logo.png" sizes="16x16" type="image/png">
</head>
<body>
<!--Header Links Title Page-->
    <section id="header" class="header">
        <center>
            
            <div id= "logocont">
                <div id="logo"></div>
            </div>
            <h2>E-Tinda</h2>
            <ul id = "navbar">
                <li><a href="#about">About</a></li>
                <li><a href="#feature">Features</a></li>
                <li><a href="registration.php">Login/Register</a></li>
                
            </ul>
        </center>
        
    </section>
<!--About Section-->
    <section id="about">
        <div id="img"></div>
        <div id="aboutp">
            <h1>About E-Tinda</h1>
            <hr>
            <p>E-Tinda is an online inventory
                and cashiering system. Make track of your stocks, update you pricing,
                your sales! E- Tinda can do all these with just a click. No need to do a hassle
                of taking notes that can be lost and unorganized.
                <br/>
                <br/>
                E-Tinda is here to save you!
            </p>
        </div>

    </section>
<!--Feature Section-->
    <section id="feature">
        <div id="f1">
            <center>
                <img src="images/inventory.jpg" alt="" class="image"/>
                <h3>Inventory</h3>
                <p>
                    Inventory System to record
                    stocks and prices.
                </p>
            </center>
            
        </div>  
        <div id="f2">
            <center>
                <img src="images/pos.jpg" alt="" class = "image"/>
                <h3>POS</h3>
                <p>
                    Point of sales system to
                    calculate sales.
                </p>
            </center>
        </div>

        <div id="f3">
            <center>
                <img src="images/sales report.jpg" alt="" class = "image"/>
                <h3>Sales Report</h3>
                <p>
                    Shows daily reports of 
                    sales.

                </p>
            </center>
            
        </div>


    </section>


<!--Footer Section-->
    <section id="footer" class="footer">
        <center>
            <p id="foot">
                © JEC development team<br/>
                for more inquiries you can contact us at:<br/>
                JECdev@gmail.com<br/>
                follow us on:<br/>
            </p>
        </center>
    </section>

    <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>