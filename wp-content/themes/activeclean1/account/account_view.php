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

    <!-- header ends -->




<div id="view">
        <div id="view_logout"><div id="view_logout_item"><a href="index.php?action=logout">Click here to logout</a></div></div>
<!--
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
-->
<div id="view_customers">
    <table>
    <tr>
        <th>id</th>
        <th>transaction id</th>
        <th>customer_id</th>
        <th>type</th>
        <th>first name</th>
        <th>last name</th>
        <th>email</th>
        <th>phone number</th>
        <th>street address</th>
        <th>apartment num</th>
        <th>city</th>
        <th>state</th>
        <th>zip</th>
        <th>bedrooms</th>
        <th>bathrooms</th>
        <th>extra services</th>
        <th>date of service</th>
        <th>time of service</th>
        <th>duration</th>
        <th>entry method</th>
        <th>enter instructions</th>
        <th>more information</th>
        <th>date created</th>
        <th>subtotal</th>
        <th>tax</th>
        <th>total amount</th>
    </tr>
    <?php foreach ($transactions as $transaction) : ?>
        <tr>
            <td><?php echo $transaction['id']; ?></td>
            <td><?php echo $transaction['transaction_id']; ?></td>
            <td><?php echo $transaction['customer_id']; ?></td>
            <td><?php echo $transaction['type']; ?></td>
            <td><?php echo $transaction['first_name']; ?></td>
            <td><?php echo $transaction['last_name']; ?></td>
            <td><?php echo $transaction['email']; ?></td>
            <td><?php echo $transaction['phone_number']; ?></td>
            <td><?php echo $transaction['st_address']; ?></td>
            <td><?php echo $transaction['apt_num']; ?></td>
            <td><?php echo $transaction['city']; ?></td>
            <td><?php echo $transaction['state']; ?></td>
            <td><?php echo $transaction['zip']; ?></td>
            <td><?php echo $transaction['bdrms']; ?></td>
            <td><?php echo $transaction['baths']; ?></td>
            <td><?php echo $transaction['extra_services']; ?></td>
            <td><?php echo $transaction['date_of_service']; ?></td>
            <td><?php echo $transaction['time_of_service']; ?></td>
            <td><?php echo $transaction['duration']; ?></td>
            <td><?php echo $transaction['enter']; ?></td>
            <td><?php echo $transaction['enter_instructions']; ?></td>
            <td><?php echo $transaction['more_information']; ?></td>
            <td><?php echo $transaction['date_created']; ?></td>
            <td><?php echo $transaction['subtotal_db']; ?></td>
            <td><?php echo $transaction['item_sales_tax_db']; ?></td>
            <td><?php echo $transaction['total_amount_db']; ?></td>
            
        </tr>
    <?php endforeach; ?>
    </table>
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
