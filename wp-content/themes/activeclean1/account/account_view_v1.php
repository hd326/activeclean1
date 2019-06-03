<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <header>
        <div id="header">
            <div id="h_logo"><img src="../images/logo2.jpg"></div>
            <div id="h_menu">
                <nav>
                    <ul>
                        <a href="<?php echo $app_path?>index.php?action=login"><li>LOGIN</li></a>
                        <a href="index.php?action=home">
                            <li>HOME PAGE</li>
                        </a>
                        <a href="index.php?action=book&bed_range=1&bath_range=1&percentage_range=0&duration_range=">
                            <li>BOOK MY CLEAN</li>
                        </a>
                        <a href="index.php?action=contact">
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

    <!-- header ends -->




    <div id="view">
        <div id="view_bg"></div>
        <div id="view_helper"></div>


        <div id="view_items">
            <div id="view_logout"><div id="view_logout_item"><a href="index.php?action=logout">Click here to logout</a></div></div>
            <h1>Hi
                <?php echo $customer_name ;?>!</h1>
            <p>How can we help you today?</p>

            <div id="view_options">

                <div class="view_option">
                    <div class="view_items">
                        <div class="view_item"><img src="../images/mbook.png"></div>
                        <div class="view_item"><span>Book Now</span></div>
                    </div>
                </div>

                <div class="view_option">
                    <div class="view_items">
                        <div class="view_item"><img src="../images/mgift.png"></div>
                        <div class="view_item"><span>Buy Gift Cards</span></div>
                    </div>
                </div>

                <div class="view_option">
                    <div class="view_items">
                        <div class="view_item"><img src="../images/mhistory.png"></div>
                        <div class="view_item"><span>Booking History</span></div>
                    </div>
                </div>

                <div class="view_option">
                    <div class="view_items">
                        <div class="view_item"><img src="../images/msupport.png"></div>
                        <div class="view_item"><span>Email Support</span></div>
                    </div>
                </div>

                <div class="view_option">
                    <div class="view_items">
                        <div class="view_item"><img src="../images/mdetails.png"></div>
                        <div class="view_item"><span>Manage Personal Details</span></div>
                    </div>
                </div>

                <div class="view_option">
                    <div class="view_items">
                        <div class="view_item"><img src="../images/mstar.png"></div>
                        <div class="view_item"><span>Membership Offers</span></div>
                    </div>
                </div>

            </div>


        </div>


    </div>





    <!-- footer begins -->

    <footer>
        <div id="footer_wrapper">
            <div id="footer_contents">

                <!-- first section footer -->

                <div class="footer_section">
                    <div id="footer_logo">
                        <img src="../images/logo2.jpg">
                    </div>

                    <div id="footer_links">
                        <div class="footer_links_sections">
                            <p class="title">ABOUT</p>
                            <p>About Us</p>
                            <p>Service Area</p>
                            <p>Maid Services</p>
                            <p>House Cleaning</p>
                        </div>
                        <div class="footer_links_sections">
                            <p class="title">CONTACT</p>
                            <p>Contact Us</p>
                            <p>Get A Quote</p>
                            <p>Join Us</p>
                        </div>
                        <div class="footer_links_sections">
                            <p class="title">FOR YOU</p>
                            <p>Buy Gift Cards</p>
                            <p>Book Now</p>
                            <p>Cleaning Tips</p>

                        </div>
                        <div class="footer_links_sections">
                            <p class="title">SUPPORT</p>
                            <p>Help</p>
                            <p>Terms & Conditions</p>
                            <p>Privacy Policy</p>
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

                    <div class="footer_rows"><i class="fas fa-mobile-alt"></i> <span>916-704-4061</span></div>

                    <div class="footer_rows"><i class="far fa-envelope"></i> <span>r_duong89@yahoo.com</span></div>

                    <div class="footer_rows">
                        <h2>Subscribe to our mailing list</h2>
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
