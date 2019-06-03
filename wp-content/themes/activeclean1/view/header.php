<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Archivo|Cabin|Karla|Lato|Montserrat|Open+Sans|PT+Sans|PT+Serif|Raleway|Rubik|Source+Sans+Pro|Source+Serif+Pro|Oswald" rel="stylesheet">
    <link rel="stylesheet" href="wp-content/themes/activeclean1/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="wp-content/themes/activeclean1/js/jquery-3.3.1.min.js"></script>
    <script src="wp-content/themes/activeclean1/js/jquery-ui.js"></script>
    <link rel="stylesheet" href="wp-content/themes/activeclean1/css/stripe.css">
    <title></title>
</head>

<!-- this is the side nav -->

<div id="sidenav">
    <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
    <a href="index.php?action=home">HOME PAGE</a>
    <a href="index.php?action=book&bed_range=1&bath_range=1&percentage_range=0&duration_range=">BOOK MY CLEAN</a>
    <a href="index.php?action=contact">CONTACT US</a>
    <div id="closebtn"></div>
</div>
<div id="sidenavhelp">
</div>
<script src="wp-content/themes/activeclean1/js/script.js"></script>
<script src="wp-content/themes/activeclean1/js/book.js"></script>

<!-- this is the side nav -->

<body>

    <!-- the form -->

    <header>
        <div id="header_strip"></div>
        <div id="header">
            <div id="h_logo"><img alt="company logo" src="wp-content/themes/activeclean1/images/logo2.jpg"></div>
            <div id="h_menu">
                <nav>
                    <ul>
                        <a href="wp-content/themes/activeclean1/account"><li>LOGIN</li></a>
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

    <div id="call_us_now">
        <p>Call Now!</p>
        <p><a class="telephone" href="tel:19168007795">+1 (916) 800-7795</a></p>
    </div>
    
        <a href="tel:19168007795"><div id="call_us_now_mobile">
        <div id="call_us_now_mobile_w">
            <img src="wp-content/themes/activeclean1/images/telephone.png">
        </div>
    </div> 
        </a>

    <script>
        $(function() {
            $('#call_us_now').on('click', function() {
                $('#call_us_now').toggleClass('call_us_now_toggle');
            });
        });

    </script>

    <!-- header is where it ends -->
