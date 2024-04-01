<!--index.html-->

<?php 

    $css = file_get_contents('css/main.css');

    $connect = mysqli_connect("vesta.uclan.ac.uk", "nmarkov","njdAnzfb", "nmarkov");

    $result = mysqli_query($connect, "SELECT * FROM tbl_offers");


    echo "<style>$css</style>"

 ?>

<!DOCTYPE html>
<lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/header.css" />
        <link rel="stylesheet" type="text/css" href="css/footer.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />


        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>

    <header class="header-main" id="header">
        <div class="header-main-logo">
            <img src="png/Logo-Color.png" alt="logo Uni">
            <div class="header-main-name">Student Shop</div>
        </div>
        <nav class="header-main-nav">
            <ul class="logoList">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
        <div class="burger-menu-button">
            <div>
    </header>

    <!--Burger menu-->
    <nav class="burger-menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="signup.php">Sign Up</a></li>
        </ul>
    </nav>

    <main>

        <div class="frontPage">
            <h1>Where opportunity creates success</h1><br>
            <p>Every student at The university of Central Lancashire is automatically a member of the Student's Union.
                <br>We're here to make life better for students - inspiring you to succeed and achieve your goals.
            </p>
            <p><br>Everything you need to know about UCLan Student's Union. Your membership starts here.</p>
            <h2>Offers: </h2>

            <?php 

            
            while ($row = mysqli_fetch_assoc($result)) {

                echo "<div class='indexOffers'>";
                
                echo "ID: " . $row["offer_id"] . "<br>";
                
                
                echo "Title: " . $row["offer_title"] . "<br>";
                
               
                echo "Dec: " . $row["offer_dec"] . "<br>";
                
                echo "</div><br>";
            }
            
            ?>

            <div class="videoPart">
                <h1>Together</h1>
                <video controls muted>
                    <source src="video.mp4">
                </video>
            </div>
            <div class="framePart">
                <h1>Join our global community</h1>
                <iframe src="https://www.youtube.com/embed/i2CRunZv9CU"> </iframe>
            </div>
        </div>

    </main>

    <footer id="footer">
    </footer>

    </body>

    </html>

    <script src="js/burger-menu.js"></script>
    <script src="js/htmlToJSFooter.js"></script>