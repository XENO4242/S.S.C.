<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>S.S.C</title>
</head>
<body>
        
    <div class="container">

            <div class="promotion">
                Welcome to $WEET$AVAGE
            </div>

            <div class="banner">
                <div class="logo">
                    <a href="S.S.C.html"><img src="images/LogoMakr-6ULcz6.png" alt="logo"></a> 
                </div>

                <div class="links">
                    <ul>
                        <li>
                            <a href="S.S.C.html">HOME</a>
                        </li>

                        <li>
                            <a href="Shop.html">SHOP</a>
                        </li>

                        <li>
                            <a href="Music.html">MUSIC</a>
                        </li>

                        <li>
                            <a href="Events.html">EVENTS</a>
                        </li>

                        <li>
                            <a href="Contact Us.html">CONTACT US</a>
                        </li>
                        
                        <div>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="login.html">login</a>
                            </li>
                        </div>
    
                    </ul>
                </div>
                
            
            </div>
           
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clothing Shop</title>
</head>
<body>
  <h1>Clothing Shop</h1>
  <?php
    // Connect to the database
    $conn = mysqli_connect("localhost", "username", "password", "database");

    // Get the products from the database
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    // Loop through the products and display them
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div class='product'>";
      echo "<img src='" . $row['image'] . "' alt='" . $row['name'] . "'>";
      echo "<h2>" . $row['name'] . "</h2>";
      echo "<p>" . $row['description'] . "</p>";
      echo "<p>Price: $" . $row['price'] . "</p>";
      echo "<a href='add-to-cart.php?product_id=" . $row['id'] . "'>Add to Cart</a>";
      echo "</div>";
    }

    // Close the database connection
    mysqli_close($conn);
  ?>
</body>
</html>
        
            <div class="BottomFooter">
                    <div class="logo-2">
                        <a href=""><img src="images/LogoMakr-6ULcz6.png" alt="logo"></a> 
                    </div>
                    
                    <div class="links-2">
                        <ul>
                        <li>
                                <a href="html/S.S.C.html">HOME</a>
                            </li>

                            <li>
                                <a href="html/Shop.html">SHOP</a>
                            </li>

                            <li>
                                <a href="html/Music.html">MUSIC</a>
                            </li>

                            <li>
                                <a href="html/Events.html">EVENTS</a>
                            </li>

                            <li>
                                <a href="html/Contact Us.html">CONTACT US</a>
                            </li>
        
                        </ul>
                    </div>
            </div>
     
    </div>
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("Slide");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
            }
        </script>
</body>
</html>
        
