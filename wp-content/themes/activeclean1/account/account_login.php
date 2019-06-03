<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="wp-content/themes/activeclean1/js/jquery-3.3.1.min.js"></script>
    <script src="wp-content/themes/activeclean1/js/jquery-ui.js"></script>
    <title></title>
</head>

<body>

    <header>
        <div id="header">
            <div id="h_logo"><img src="../images/logo2.jpg"></div>
            <div id="h_menu">
                <nav>
                    <ul>
                        <a href="index.php"><li>LOGIN</li></a>
                        <a href="<?php echo $app_path; ?>">
                            <li>HOME PAGE</li>
                        </a>
                        <a href="<?php echo $app_path; ?>index.php?action=book&bed_range=1&bath_range=1&percentage_range=0&duration_range=">
                            <li>BOOK MY CLEAN</li>
                        </a>
                        <a href="<?php echo $app_path; ?>index.php?action=contact">
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

    <!-- where the login begins -->

    <div id="login_wrap">
        <div id="login">
            <div class="login_section">
                <div id="login_section_bg"></div>
                <div id="login_section_text">
                    <div id="login_section_text_content">
                        <h1>We take care of the easy part, so you can focus on what's important.</h1>
                        <p>Sign in to track your Booking, Reschedule, Manage Add-on options, and more.</p>
                        
                        <a href="<?php echo $app_path;?>"><button>Go Back</button></a>
                        
                    </div>
                </div>
            </div>
            <div class="login_section">
                <!--<div id="login_register_wrap">
                    <div id="login_register">Don't have an account yet? <a href="index.php?action=view_register">Click here to register</a></div>
                </div>-->
                <div id="login_section_text">
                    <form action="index.php" method="post">
                        <input type="hidden" name="action" value="login">
                        <h1>Login</h1>
                        <p>Enter your details to login and view your account information.</p>
                        <div id="login_section_details">
                            <span class="field_case">
                                <p>Email Address</p>
                                <p>
                                    <?php $fields->getField('email')->getHTML(); ?>
                                </p>
                            </span>
                            <input type=text name="email">
                            <span class="field_case">
                                <p>Password</p>
                                <p>
                                    <?php $fields->getField('password')->getHTML(); ?>
                                </p>
                            </span>
                            <input type="password" name="password">
                            <input id="login_button" type="submit" value="Login">
                            <?php if (!empty($password_message)) : ?>
                            <span class="error">
                                <?php echo htmlspecialchars($password_message); ?></span><br>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- where the login ends -->
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
