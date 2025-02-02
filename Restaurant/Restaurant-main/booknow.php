<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/booknow.css">
    <script src="https://kit.fontawesome.com/1506ca5daa.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Book Now</title>
    <style>
        .nav-item:nth-child(4) .nav-link{
            color: white;
        }
                .hidden {
            display: none;
}

    #successMessage p {
        margin: 0; /* Reset margin for paragraph inside success message */
        background-color: rgba(0, 0, 0, 0.6);
    text-align: center;
    height: 90vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'Crimson Text', serif;;
    }

    </style>
</head>
<body>
    <?php

        session_start();
        
        date_default_timezone_set("America/New_York");
        $currentDate=date("Y-m-d");
        $datevalid=false;
        $pvalid=false;
        $timevalid=false;
        $error1= "";
        $error2= "";
        $error3= "";

        function input_data($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userdate=input_data($_POST['date']);
        $person=input_data($_POST['people']);
        $time=input_data($_POST['time']);
        if($userdate>$currentDate && !empty($userdate)){
        $datevalid=true;}else{
            $error1 = "border: 1px solid red;";
        }
    if(!empty($person)){
        $pvalid=true;
    }else{
        $error2 = "border: 1px solid red;";
    }

    if(!empty($time)){
        $timevalid=true;
    }else{
        $error3 = "border: 1px solid red;";

    }
}

    if($datevalid && $pvalid && $timevalid){
        if(isset($_SESSION['reservation_count'])){
           $_SESSION['reservation_count']++;
        }else{
        $_SESSION['reservation_count'] = 1;
        }
    }

    
    ?>

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
                <li class="nav-item"><a href="#" class="nav-link btn">Book now</a></li>
            </ul>
        </nav>


        <div class="headerContent">
            <h1>BOOK NOW</h1>
            <div class="inputs">
                <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input type="date" id="date" name="date" style="<?php echo $error1; ?>">
                <select name="time" id="time" name="time" style="<?php echo $error3; ?>">
                    <option value="">Time</option>
                    <option value="10-00">10:00</option>
                    <option value="11-00">11:00</option>
                    <option value="12-00">12:00</option>
                    <option value="13-00">13:00</option>
                    <option value="14-00">14:00</option>
                    <option value="15-00">15:00</option>
                    <option value="16-00">16:00</option>
                    <option value="17-00">17:00</option>
                    <option value="18-00">18:00</option>
                </select>
                <select name="people" id="people" style="<?php echo $error3; ?>">
                    <option value="">People</option>
                    <option value="1">1 Person</option>
                    <option value="2">2 People</option>
                    <option value="2">3 People</option>
                    <option value="2">4 People</option>
                    <option value="2">5 People</option>
                    <option value="2">6 People</option>
                    <option value="2">7 People</option>
                </select>
                <button class="btn btn-2">Book Now</button>
                </form>
            </div>
        </div>

        <div id="successMessage" class="hidden">
        <p style="font-size: 50px;">Booking successful!  <br> <span style="font-size: 20px; ">Booking times: <?php echo  $_SESSION['reservation_count']; ?></span></p>
    </div>

    </header>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
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
            <div class="footer-content">
                <h1>LaTulipe</h1>
            </div>
            <div class="footer-content">
                <p>Monday - Friday: 9AM - 9PM</p>
                <p>Saturday: 9AM - 11PM</p>
                <p>Sunday: 9AM - 11PM</p>
                <p>Happy Hours: 9AM - 12AM</p>
            </div>
        </div>

    </footer>
    <script src="javascript/index.js"></script>     
    <script>
    window.onload = function() {
        var success = "<?php echo isset($_POST['date']) && $datevalid && $pvalid && $timevalid ? 'true' : 'false'; ?>";
        
        if (success === "true") {
            var headerContent = document.querySelector(".headerContent");
            var successMessage = document.getElementById("successMessage");

            // Set the dimensions of successMessage to match headerContent
            successMessage.style.width = headerContent.offsetWidth + "px";
            successMessage.style.height = headerContent.offsetHeight + "px";

            headerContent.style.display = "none"; // Hide the header content
            successMessage.classList.remove("hidden"); // Display the success message
        }
    };
</script>


</body>
