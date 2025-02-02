<?php
setcookie("fav_food","burger",time() + 86400 *2,"/"); // "/" dmath e kemi perdor the default path
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/1506ca5daa.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
if(isset($_COOKIE["fav_food"])){
    $fav_food = $_COOKIE["fav_food"];
    // Definojme URL e fotografise
    $photo_url = '';

    switch ($fav_food) {
        case 'pizza':
            $photo_url = 'pizza.jpg';
            $width = 320; 
            $height = 170; 
            break;
        case 'burger':
            $photo_url = 'burger.jpg';
            $width = 320; 
            $height = 160; 
            break;
        default:
            $photo_url = 'default.jpg'; 
            $width = 100; 
            $height = 100; 
    }
    // Output the container <div> with the image inside
    echo "<div id='favorite-food-container' style='position: fixed; top: 85px; right: 20px; text-align: center;'>"; // Adjust top and right values as needed
    // Output the HTML img tag with the photo URL and specified width and height
    echo "<img src='$photo_url' alt='Favorite Food Photo' width='$width' height='$height'>";
    // Add some text and a button to hide the image
    echo "<p>We have some special offers for $fav_food's</p>";
    echo "<button id='hide-button' onclick='hideFavoriteFood()'>Close the add</button>";
    echo "</div>";
} 
?>


<style>
#hide-button {
    padding: 10px 20px; /* Adjust padding as needed */
    background-color: #007bff; /* Change the background color */
    color: #fff; /* Change the text color */
    border: none;
    border-radius: 5px; /* Adjust border radius as needed */
    cursor: pointer;
    margin-top: 10px; /* Add margin to separate from the text */
}

#hide-button:hover {
    background-color: #0056b3; /* Change the background color on hover */
}
</style>



<script>
function hideFavoriteFood() {
    var element = document.getElementById("favorite-food-container");
    element.style.display = "none";
}
</script>

    
    <header class="header">
        <nav class="nav row" id="nav">
            <h1 class="header-title">LaTulipe</h1>

            <a href="javascript:void(0);" onclick="displayMenu()" class="menu-mobile" id="menu-mobile">
                <i class="fa-solid fa-bars" ></i>
            </a>
            <ul class="nav-list row" id="nav-list">
                <li class="nav-item"><a href="javascript:void(0);" onclick="removeMenu()" class="nav-link"><i class="fa-solid fa-xmark"></i></a></li>
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="delivery.php" class="nav-link">Delivery</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Log In</a></li>
                <li class="nav-item"><a href="register.php" class="nav-link">Register</a></li>
                <li class="nav-item"><a href="booknow.php" class="btn">Book now</a></li>
            </ul>
        </nav>

        <div class="headerContent hidden">
            <p>MODERN STYLE CUISINE</p>
            <h1>LATULIPE RESTAURANT</h1>
            <a href="#" onclick="scrollToSection('.section-one')" class="nav-link btn">Find More</a>
        </div>

    </header>

    <section class="section-one " id="section-one">
        <div class="container">

            <div class="grid-container hidden">
                <div class="tradition">
                    <p class="gold-yellow">TRADITION & INNOVATION</p>
                    <h2>A UNIQUE LOCATION</h2>
                </div>  
                <div class="description-one">
                    <p class="gold-yellow">1955:</p>
                    <h3 class="description-title">FIRST RESTAURANT</h3>
                    <p class="description-text">LaTulipe offers a cuisine inspired by the local area, tradition and creativity in balanced combination quo an adhuc mediocritatem, augue. Pro sensibus gubergren an, esse ancillae principes ad vim. Vim libris maiorum corrumpit et, an vide malorum inimicus.</p>
                </div>
                <div class="description-two">
                    <p class="gold-yellow">1970:</p>
                    <h3 class="description-title">MICHELIN STAR</h3>
                    <p class="description-text">No mea noster fierent, sale verterem mel an. Elit ignota prodesset ei nec, quod purto causae vis at. Sit stet lucilius adipiscing ei, alii sanctus gubergren te qui.</p>
                </div>
                <div class="section-one--image">
                    <img src="images/home/section-two.jpg" alt="">
                </div>
                <div class="description-three">
                    <p class="gold-yellow">2005:</p>
                    <h3 class="description-title">HOTEL OPENING</h3>
                    <p class="description-text">For a unique pleasure and relaxation experience you can try the swimming pool, the restaurants and bar or the outdoor activities. Pri magna congue minimum in, aliquip tibique intellegat  sit ex. Cu case menandri pri, cu duo quodsi integre. Vis et dolor legimus legendos.</p>
                </div>
                <div class="description-four">
                    <p class="gold-yellow">2022:</p>
                    <h3 class="description-title">LEGACY</h3>
                    <p class="description-text">No mea noster fierent, sale verterem mel an. Elit ignota prodesset ei nec, quod purto causae vis at. Sit stet lucilius adipiscing ei, alii sanctus gubergren te qui.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-two hidden">
        <div class="section-two--photos">
            <div class="section-two--photo">
                <img src="images/home/section-two-photo1.jpg" alt="">
                <div class="section-two--details">
                    <p>A LA CARTE</p>
                    <h3>Crab Linguine</h3>
                </div>
            </div>
            <div class="section-two--photo">
                <img src="images/home/section-two-photo2.jpg" alt="">
                <div class="section-two--details">
                    <p>A LA CARTE</p>
                    <h3>Crab Linguine</h3>
                </div>
            </div>
            <div class="section-two--photo">
                <img src="images/home/section-two-photo3.jpg" alt="">
                <div class="section-two--details">
                    <p>A LA CARTE</p>
                    <h3>Crab Linguine</h3>
                </div>
            </div>
            <div class="section-two--photo">
                <img src="images/home/section-two-photo4.jpg" alt="">
                <div class="section-two--details">
                    <p>A LA CARTE</p>
                    <h3>Crab Linguine</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="section-three">
        <div class="container">
            <div class="menu hidden">
                <p class="menu-description">A LA CARTE</p>
                <h2>EXQUISITE MENU</h2>
                <p>Verear dissentiet usu ea, vis eu nominavi contentiones interpretaris, ipsum petentium percipitur has eu. Eius mutat noster pri no, justo debet intellegebat ei vel. Dolor probatus usu et. Nec erroribus laboramus scriptorem.</p>
            </div>
            <div class="menu-grid--container hidden">
                <div class="prouduct">
                    <div class="prouct-img">
                        <img src="images/menu/Starters1.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h2>TOMATO BRUSCHETTA</h2>
                        <p>Tomates, Olive Oil, Cheese</p>
                    </div>
                    <div class="product-price">
                        <p>$5</p>
                    </div>
                </div>
 
                <div class="prouduct">
                    <div class="prouct-img">
                        <img src="images/menu/starters2.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h2>CHEESE PLATE</h2>
                        <p>Selected Cheeses, Grapes, Nuts, Bread</p>
                    </div>
                    <div class="product-price">
                        <p>$11</p>
                    </div>
                </div>
 
                <div class="prouduct">
                    <div class="prouct-img">
                        <img src="images/menu/starters3.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h2>EGGS BENEDICT</h2>
                        <p>2 Eggs, Spinach, Potatoes, Salad</p>
                    </div>
                    <div class="product-price">
                        <p>$9</p>
                    </div>
                </div>
 
                <div class="prouduct">
                    <div class="prouct-img">
                        <img src="images/menu/starters4.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h2>GUACAMOLE WITH NACHOS</h2>
                        <p>Avocado, Tomatoes, Nachos</p>
                    </div>
                    <div class="product-price">
                        <p>$7</p>
                    </div>
                </div>
 
                <div class="prouduct">
                    <div class="prouct-img">
                        <img src="images/menu/starters5.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h2>BAKED POTATO SKINS</h2>
                        <p>Potatoes, Oil, Garlic</p>
                    </div>
                    <div class="product-price">
                        <p>$8</p>
                    </div>
                </div>
 
                <div class="prouduct">
                    <div class="prouct-img">
                        <img src="images/menu/starters6.jpg" alt="">
                    </div>
                    <div class="product-title">
                        <h2>JAMBON IBERICO</h2>
                        <p>Smoked Tomato Aioli, Idizabal Cheese, Olives</p>
                    </div>
                    <div class="product-price">
                        <p>$10</p>
                    </div>
                </div>
            </div>
            <div class="menu-button">
                <a href="menu.php" class="btn">View All Menu</a>
            </div>
        </div>
    </section>

    <section class="section-four">
        <div class="section-four--container hidden">
            <p class="menu-description">Book a Table Online</p>
            <h2>Reservation</h2>
            <a href="booknow.php" class="btn">Book Table</a>
        </div>
        
    </section>
    <section class="section-five">
        <div class="container">
            <div class="five-grid">
                <div class="s-five--title">
                    <h1 id="teamMembers">0</h1>
                    <p>team members</p>
                </div>
                <div class="s-five--title">
                    <h1 id="locations">0</h1>
                    <p>Locations</p>
                </div>
                <div class="s-five--title">
                    <h1 id="awards">0</h1>
                    <p>Awards</p>
                </div>
                <div class="s-five--title">
                    <h1 id="michelinStars">0</h1>
                    <p>Michelin stars</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-six">
        <div class="container">
            <div class="six-grid--container hidden">
                <div class="contact-us">
                    <p class="menu-description">Get in touch</p>
                    <h1>Contact us</h1>
                    <p>Do you want to reserve a table or have a question ? Write to us via the contact form, we will answer you as soon as possible.</p>
                </div>
                <div class="contact-form hidden">
                    <a href="contact.html">
                    <button id="sign" class="btn" style="margin-left: 35%;">Contact Us</button>
                   </a>
                </div>
                <div class="six-images">
                    <div class="image1">
                        <img src="images/home/six-image-one.jpg" alt="">
                    </div>
                    <div class="image2">
                        <img src="images/home/six-image-two.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer" style="margin-top: -10%;">
        <div class="container">
            <div class="footer-content hidden">
                <div class="footer-col">
                    <p>40 Park Ave, Brooklyn, New York</p>
                    <p>1-800-111-2222</p>
                    <p>contact@example.com</p>
                    <div class="footer-socials">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-content hidden">
                <h1>LaTulipe</h1>
            </div>
            <div class="footer-content hidden">
                <p>Monday - Friday: 9AM - 9PM</p>
                <p>Saturday: 9AM - 11PM</p>
                <p>Sunday: 9AM - 11PM</p>
                <p>Happy Hours: 9AM - 12AM</p>
            </div>
        </div>

    </footer>
    <script src="javascript/index.js"></script>
    <script src="javascript/validimet.js"></script>
    <script src="javascript/animations.js"></script>
    <script src="javascript/counter.js"></script>
    
</body>
</html>
