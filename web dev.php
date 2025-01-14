

<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        // echo "Welcome " . $row['name'] . " <a href='logout.php'>Logout</a>";
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech-map web dev</title>
    <link rel="stylesheet" href="css/tools.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Navbar section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="homepage.php" id="navbar__logo"><i class="fa-solid fa-laptop-code"></i>TECH-MAP</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="homepage.php" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="map.php" class="navbar__links">Careers</a>
                </li>
                <li class="navbar__item">
                    <a href="about.php" class="navbar__links">About</a>
                </li>
                <li class="navbar__item">
                    <a href="contact.php" class="navbar__links">Contact</a>
                </li>
                <li class="navbar__item">
                    <a href="tools.php" class="navbar__links">Tools</a>
                </li>
                <li class="navbar__btn">
                <a href="logout.php" class="button"><?php echo "Welcome " . $row['name']; ?>, logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero section -->
    <div class="main">
        <div class="main__container">
            <div class="main__content">
            
                <h2>Web Dev: <img src="images/web.png"/></h2>
                <p>
                Web development refers to the building, creating, and maintaining of websites. It includes aspects such as web design, web publishing, web programming, and database management. It is the creation of an application that works over the internet
                <br><br>

               <h2> Web Development can be classified into two ways:</h2> 
                    <br>
                    <p>

                -Frontend Development <br>
                -Backend Development <br><br> 

               <h2>Frontend Development:</h2> <p>The part of a website that the user interacts directly is termed as front end. It is also referred to as the ‘client side’ of the application. <br><br>
               
              <h2> Frontend contains: </h2>  <br> <br> <p>

               HTML: HTML stands for HyperText Markup Language. It is used to design the front end portion of web pages using markup language. It acts as a skeleton for a website since it is used to make the structure of a website.
               <br> <br> 
               CSS: Cascading Style Sheets fondly referred to as CSS is a simply designed language intended to simplify the process of making web pages presentable. It is used to style our website.
               <br> <br>
               JavaScript: JavaScript is a scripting language used to provide a dynamic behavior to our website.
               <br> <br>
               Bootstrap: Bootstrap is a free and open-source tool collection for creating responsive websites and web applications. It is the most popular CSS framework for developing responsive, mobile-first websites. Nowadays, the websites are perfect for all the browsers (IE, Firefox, and Chrome) and for all sizes of screens (Desktop, Tablets, Phablets, and Phones).
                Bootstrap 4
                Bootstrap 5
                <br> <br>
               <h2> Frontend Frameworks and Libraries: </h2> <br> <p>

                AngularJS <br>
                React.js <br>
                VueJS <br> 
                jQuery <br>
                Bootstrap <br>
                Material UI <br>
                Tailwind CSS <br>
                jQuery UI <br>
                Handlebar.js <br> 
                 Backbone.js <br>
                  Ember.js <br> <br> 

                  <h2>Backend Development:</h2> <p> Backend is the server side of a website. It is the part of the website that users cannot see and interact. It is the portion of software that does not come in direct contact with the users. It is used to store and arrange data. <br> <br>

                  <h2>Backend contains: </h2> <p><br> 
                  PHP: PHP is a server-side scripting language designed specifically for web development. <br> <br>
                    Java: Java is one of the most popular and widely used programming language. It is highly scalable. <br> <br>
                    Python: Python is a programming language that lets you work quickly and integrate systems more efficiently. <br> <br>
                    Node.js: Node.js is an open source and cross-platform runtime environment for executing JavaScript code outside a browser. <br> <br> 
                   <h2> Back End Frameworks:</h2> <p> 
                       Express <br>
                       Django <br>
                        Rails <br>
                         Laravel <br>
                          Spring
                         <br> <br>
            
            
            </p>
                <br> <br>
                <h2>web dev knowledge & learning:</h2>
                <p>
                    <a href="https://www.freecodecamp.org/" target="_blank">Freecodecamp</a> <br> <br>
                    <a href="https://www.theodinproject.com/" target="_blank">TheOdinProject</a> <br> <br>
                    <a href="https://www.w3schools.com/" target="_blank"> W3SCHOOLS </a> <br> <br>
                    <a href="https://www.codecademy.com/" target="_blank"> CodeCademy </a> <br> <br>
                    <a href="https://elzero.org/" target="_blank"> Elzero  </a> (Arabic courses)<br> <br>

                    
                
                </p>
                <h2>Fwd X Udacity (For Egyptians only):</h2>
                <p>
                    <a href="https://egfwd.com/specializtion/web-development-foundations/" target="_blank">FWD web development</a> <br> <br>

                
                </p>


            </div>
        </div>
    </div>


    <!-- Footer section -->
    <div class="footer__container">
        <div class="footer__links">
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>About us</h2>
                    <a href="about.php">How it works</a>
                    <a href="map.php">careers</a>
                </div>
                <div class="footer__link--items">
                    <h2>Contact us</h2>
                    <a href="contact.php">contact</a>
                </div>
            </div>
            <div class="footer__link--wrapper">
                <div class="footer__link--items">
                    <h2>Follow</h2>
                    <a href="https://github.com/punsher77777/Tech-Map">Github</a>
                </div>
                <div class="footer__link--items">
                    <h2>Legal</h2>
                    <a href="">Privacy policy</a>
                    <a href="">terms of service</a>
                </div>
            </div>
        </div>
        <div class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <a href="homepage.php" id="footer__logo"><i class="fa-solid fa-laptop-code"></i>TECH-MAP</a>
                </div>
                <p class="website__rights">Tech-Map 2022. All rights Reserved</p>
                <div class="social__icons">
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="/" class="social__icon--link" target="_blank">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>