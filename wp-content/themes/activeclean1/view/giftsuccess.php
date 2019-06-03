<?php 
require('../util/main.php');
if (!empty($_GET['code'])) {
    $code = filter_input(INPUT_GET, 'code');
    $tid = filter_input(INPUT_GET, 'tid');
    $product = filter_input(INPUT_GET, 'product');
} else {
    header('Location: index.php?action=gift');
}
?>

<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Archivo|Cabin|Karla|Lato|Montserrat|Open+Sans|PT+Sans|PT+Serif|Raleway|Rubik|Source+Sans+Pro|Source+Serif+Pro" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    
    <title></title>
</head>
    
<!-- this is the side nav -->
    
<div id="sidenav">
    <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
    <a href="<?php echo $app_path; ?>?action=home">HOME PAGE</a>
    <a href="<?php echo $app_path; ?>?action=book&bed_range=1&bath_range=1&percentage_range=0&duration_range=">BOOK MY CLEAN</a>
    <a href="<?php echo $app_path; ?>?action=contact">CONTACT US</a>
    <div id="closebtn"></div>
</div>
    
<script src="js/script.js"></script>
<script src="js/book.js"></script>
    
<!-- this is the side nav -->

<body>

    <!-- the form -->

    <header>
        <div id="header">
            <div id="h_logo"><img alt="company logo" src="../images/logo2.jpg"></div>
            <div id="h_menu">
                <nav>
                    <ul>
                        <!--<li><a href=account/index.php>LOGIN </a> </li>
                        <li>HELP</li>-->
                        <a href="<?php echo $app_path; ?>?action=home">
                            <li>HOME PAGE</li>
                        </a>
                        <a href="<?php echo $app_path; ?>?action=book&bed_range=1&bath_range=1&percentage_range=0&duration_range=">
                            <li>BOOK MY CLEAN</li>
                        </a>
                        <a href="<?php echo $app_path; ?>?action=contact">
                            <li>CONTACT US</li>
                        </a>
            
                        <li id="nav_icon">
                            <div id="icon" onclick="openNav()">
                                <div id="hamburger"></div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>



    
<!-- header is where it ends -->
    




<div id="success">
    <h1>Thank you for scheduling our service.</h1>
    <hr>
    <h3>Your Gift Code is <?php echo $code; ?>.</h3>
    <h4>And your transaction ID is <?php echo $tid;?></h4>
    <p>Check your email for more information.</p>
    <a href="<?php echo $app_path; ?>?action=gift">Go Back</a>
</div>



    <footer>
        <div id="footer_wrapper">
            <div id="footer_contents">

                <!-- first section footer -->

                <div class="footer_section">
                    <div id="footer_logo">
                        <img src="../images/logo2.jpg">
                    </div>
                    <!-- about us, service area(not done on sparkly), gift cards, privacy -->

                    <div id="footer_links">
                        <div class="footer_links_sections">
                            <p class="title">ABOUT</p>
                            <p><a href="<?php echo $app_path; ?>?action=about">About Us</a></p>
                            <p>Service Area</p>
                            <!--<p>Rental Property Cleaning</p>-->
                            <!--<p>Foreclosures Cleaning</p>-->
                            <!--<p>Construction Cleaning</p>-->

                        </div>
                        <div class="footer_links_sections">
                            <p class="title">CONTACT</p>
                            <p><a href="<?php echo $app_path; ?>?action=contact">Contact Us</a></p>
                            <p><a href="index.php?action=book">Get A Quote</a></p>
                            <p>Join Us</p>
                            <!-- i gotta make a registration thing :'( -->
                        </div>
                        <div class="footer_links_sections">
                            <p class="title">FOR YOU</p>
                            <!-- needs to be made-->
                            <p>Buy Gift Cards</p>
                            <p><a href="<?php echo $app_path; ?>?action=book">Book Now</a></p>
                            <!-- needs -->
                            <p>Cleaning Tips</p>

                        </div>
                        <div class="footer_links_sections">
                            <p class="title">SUPPORT</p>
                            <!-- have a page already -->
                            <p><a href="<?php echo $app_path; ?>?action=contact">Help</a></p>
                            <!--<p>Terms & Conditions</p>-->
                            <p><a href="<?php echo $app_path; ?>?action=privacy">Privacy Policy</a></p>
                            <p><a href="<?php echo $app_path; ?>?action=questions">FAQ</a></p>
                        </div>
                    </div>

                </div>

                <!-- first section footer -->

                <!-- second section footer -->

                <div class="footer_section">

                    <div id="footer_social">

                        <div class="icons"><i class="fab fa-facebook-f"></i></div>

                        <div class="icons"><i class="fab fa-twitter"></i></div>

                        <div class="icons"><i class="fab fa-instagram"></i></div>

                        <div class="icons"><i class="fab fa-pinterest-p"></i></div>

                    </div>
                    <div class="footer_rows">
                        <h1>Stay Connected</h1>
                    </div>

                    <div class="footer_rows"><i class="fas fa-mobile-alt"></i> <span><a class="telephone" href="tel:19168007795">+1 (916) 800-7795</a></span></div>

                    <div class="footer_rows"><i class="far fa-envelope"></i> <span><a href="mailto:ac1supp@gmail.com">ac1supp@gmail.com</a></span></div>

                    <div class="footer_rows">
                        <label>
                            <h2>Subscribe to our mailing list</h2>
                        </label>
                    </div>
                    <div class="footer_rows">
                        <input type="text" placeholder="Enter your email">
                    </div>

                    <div class="footer_rows">
                        <input type="button" value="Subscribe">
                    </div>

                </div>

                <!-- second section footer -->

            </div>

            <div id="footer_bottom">Copyright 2018 All Rights Reserved. Copyright Active Clean 1.</div>
        </div>
    </footer>

</body>
</html>
