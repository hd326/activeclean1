<?php
require_once('wp-content/themes/activeclean1/util/main.php');
//require('util/secure_conn.php');
// not quite needed yet

require_once('wp-content/themes/activeclean1/model/database.php');
require_once('wp-content/themes/activeclean1/model/calendar.php');
require_once('wp-content/themes/activeclean1/model/order.php');
require_once('wp-content/themes/activeclean1/model/fields.php');
require_once('wp-content/themes/activeclean1/model/validate.php');
require_once('wp-content/themes/activeclean1/vendor/autoload.php');
require_once('wp-content/themes/activeclean1/phpmailer/PHPMailerAutoload.php');

\Stripe\Stripe::setApiKey('sk_test_7JM4GJEvspx78lFNr6HEGlfR');



$action = filter_input(INPUT_POST, 'action');
// action is a form attribute 
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('type');
$fields->addField('first_name');
$fields->addField('last_name');
$fields->addField('email');
$fields->addField('phone_number');

$fields->addField('st_address');
$fields->addField('apt_num');
$fields->addField('city');
$fields->addField('state');
$fields->addField('zip');
$fields->addField('bed_range');
$fields->addField('bath_range');
$fields->addField('date');
$fields->addField('time');
$fields->addField('enter');
$fields->addField('enter_instructions');

$fields->addField('amount');
$fields->addField('to_name');
$fields->addField('recipient_email');
$fields->addField('from_name');
$fields->addField('sender_email');

$mail = new PHPMailer();  

/*
$validate->text('amount');
$validate->text('to_name');
$validate->text('recipient_email');
$validate->text('from_name');
$validate->text('sender_email');
$validate->text('card_info');
*/




switch($action){
    case 'home':
        include 'wp-content/themes/activeclean1/view/home.php';
        break;
        // since index is the controller, all images and css must be set relatively from its path
    case 'book':
        $type = '';
        $first_name = '';
        $last_name = '';
        $email = '';
        $phone_number = '';
        $st_address = '';
        $apt_num = '';
        $city = '';
        $state = '';
        $zip = '';
        $bed_range = '';
        $bath_range = '';
        $date = '';
        $time = '';
        $duration = '';
        $enter = '';
        $enter_instructions = '';
        $more_information = '';
        
        
        if(isset($_POST['bed_range']) || isset($_POST['bath_range']) || isset($_POST['percentage_range']) || isset($_POST['duration_range'])) {
        $bed_range = filter_input(INPUT_POST, 'bed_range');
        $bath_range = filter_input(INPUT_POST, 'bath_range');
        $percentage_range = filter_input(INPUT_POST, 'percentage_range');
        $duration_range = filter_input(INPUT_POST, 'duration_range');
        } else if (isset($_GET['bed_range']) || isset($_GET['bath_range']) || isset($_GET['percentage_range']) || isset($_GET['duration_range'])) {
        $bed_range = filter_input(INPUT_GET, 'bed_range');
        $bath_range = filter_input(INPUT_GET, 'bath_range');
        $percentage_range = filter_input(INPUT_GET, 'percentage_range');
        $duration_range = filter_input(INPUT_GET, 'duration_range');
        }
        include 'wp-content/themes/activeclean1/view/book.php';
        break;
    case 'about':
        include 'wp-content/themes/activeclean1/view/about.php';
        break;
    case 'contact':
        include 'wp-content/themes/activeclean1/view/contact.php';
        break;
    case 'questions':
        include 'wp-content/themes/activeclean1/view/questions.php';
        break;
    case 'privacy':
        include 'wp-content/themes/activeclean1/view/privacy.php';
        break;
        
    case 'gift': 
        $amount = '';
        $to_name = '';
        $recipient_email = '';
        $from_name = '';
        $sender_email = '';
        $message = '';
        
        include 'wp-content/themes/activeclean1/view/gift.php';
        break;
    
    case 'giftcharge':
        /*
        CREATE table giftcards (
        giftID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        amount VARCHAR(20) NOT NULL,
        to_name VARCHAR(100) NOT NULL,
        recipientEmail VARCHAR(100) NOT NULL,
        from_name VARCHAR(100) NOT NULL,
        senderEmail VARCHAR(100) NOT NULL,
        message TEXT,
);
        */
        $token = filter_input(INPUT_POST, 'stripeToken');
        
        $amount = filter_input(INPUT_POST, 'amount');
        $to_name = filter_input(INPUT_POST, 'to_name');
        $recipient_email = filter_input(INPUT_POST, 'recipient_email');
        $from_name = filter_input(INPUT_POST, 'from_name');
        $sender_email = filter_input(INPUT_POST, 'sender_email');
        $message = filter_input(INPUT_POST, 'message');
        
        $validate->text('amount', $amount);
        $validate->text('to_name', $to_name);
        $validate->text('recipient_email', $recipient_email);
        $validate->text('from_name', $from_name);
        $validate->text('sender_email', $sender_email);
        
        if ($fields->hasErrors()) {
            include 'wp-content/themes/activeclean1/view/gift.php';
            break;
        }
        
               
        $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token
        ));
        
      
        $charge = \Stripe\Charge::create(array(
        "amount" => $amount * 100,
        
        "currency" => "usd",
            
        "description" => "Gift Card",
            
        "customer" => $customer->id,
        
        )); 
        
        $card_code = strtoupper(substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 5) . '-' . substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 5) . '-' . substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 5));
        
        add_gift_card($customer->id, $charge->id, $amount, $to_name, $recipient_email, $from_name, $sender_email, $message, $card_code);
            
            
             
            $mail->SMTPDebug = 0;
            $mail->isSMTP();                           // Passing `true` enables exceptions
            //Server settings
            //Enable verbose debug output
            //Set mailer to use SMT
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;   
            $mail->SMTPAuth = true;  
            $mail->Username = '';
            $mail->Password = '';                        // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Priority = 1;
            $mail->AddCustomHeader("X-MSMail-Priority: High");
            $mail->WordWrap = 50;  
            $mail->From = 'service@activeclean1.com';
            $mail->Sender = 'service@activeclean1.com';     // TCP port to connect to
            $mail->FromName = 'ac1supp@gmail.com';
            //Recipients
            $mail->setFrom("donotreply@company.com", 'Active Clean 1');
            $mail->addReplyTo($recipient_email, "Active Clean 1"); // same
            $mail->addAddress($sender_email, "Active Clean 1"); // same
            
            
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "You've received a gift card to use at Active Clean 1!";
        $mail->Body    = 
        "
<div id='bg' style='background-color: lightgrey; font-family: Arial; border-bottom: 2px solid grey; border-top: 2px solid grey; border-right: 1px solid #ffd1dc; border-left: 1px solid #ffd1dc; padding-bottom: 0px;'>

<div id='email' style='width: 80%; margin:auto'>

<div style='background-color: #7bc7ff; height: 75px; color: white; padding-top: 0px; border-bottom: 3px solid black;'>

<img src='wp-content/themes/activeclean1/images/logo2.jpg' style='height: 75px; text-align:left;'/>

</div>

<div id='body' style='padding-left: 35px; padding-right: 35px; padding-top: 25px; padding-bottom: 35px; background-color:white; border-top: 2px solid grey; border-bottom: 1px solid lightgrey'>
<h1 style='color: #1b1b1b;'>Hello " . $to_name . "</h1>
<h3 style='color: #262626;'>You've received a gift card to use at Active Clean 1 by " . $from_name . "</h3>
<h4 style='color: #262626;'>Here is your gift card code: " . $card_code . "</h4>
<p style='font-style:italic'>" . $message . "</p>
<p style='color: #262626;'>You can contact us regarding any questions you may have at service@activeclean1.com.</p>

</div>
<div id='copyright' align:'center'>
<p style='background-color:#1b1b1b; color: white; padding-top: 0px; padding: 25px; margin-top: 0px; margin-bottom: 0px'>&copy;2018 Active Clean 1. All rights reserved.</p>
</div>
</div>
</div>";
            
            if(!$mail->send()){
                echo "Something went wrong. Please try again.";
            } else {
                
        header('Location: wp-content/themes/activeclean1/view/giftsuccess.php?tid='.$charge->id.'&product='.$charge->description.'&code='.$card_code);
            }
        break;
        
    case 'charge':
        
        // just like we validate before we can correctly set up an account, we validate before we put into database
        // token initialization
        $token = filter_input(INPUT_POST, 'stripeToken');
        
        // Following along with Brad, creating customer In Stripe

        // type would be residential/commerical etc.
        $type = filter_input(INPUT_POST, 'type');
        
        $first_name = filter_input(INPUT_POST, 'first_name');
        $last_name = filter_input(INPUT_POST, 'last_name');
        $email = filter_input(INPUT_POST, 'email');
        $phone_number = filter_input(INPUT_POST, 'phone_number');
        $st_address = filter_input(INPUT_POST, 'st_address');
        $apt_num = filter_input(INPUT_POST, 'apt_num');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        
        $bed_range = filter_input(INPUT_POST, 'bed_range');
        $bath_range = filter_input(INPUT_POST, 'bath_range');
        $extra_services = filter_input(INPUT_POST, 'select_extras');
        $percentage_range = filter_input(INPUT_POST, 'percentage_range');
        
        $date = filter_input(INPUT_POST, 'date');
        $time = filter_input(INPUT_POST, 'time');
        $time_db = str_replace("_", "-", $time);
        // these two will have to be validated before i call the function for database entry
        
        $duration = filter_input(INPUT_POST, 'duration');
        
        $enter = filter_input(INPUT_POST, 'enter');
        
        $enter_instructions = filter_input(INPUT_POST, 'enter_instructions');
        
        $more_information = filter_input(INPUT_POST, 'more_information');
        
        $card_code = filter_input(INPUT_POST, 'card_code');
        
        $validate->email('email', $email);
        $validate->text('first_name', $first_name);
        $validate->text('last_name', $last_name);
        $validate->text('phone_number', $phone_number);
        $validate->text('st_address', $st_address);
        // if (!empty($st_address)) {}
        //$validate->text('apt_num', $apt_num);
        $validate->text('city', $city);
        $validate->text('state', $state);
        $validate->text('zip', $zip);
        
        $validate->text('date', $date);
        $validate->text('time', $time);
        
        $validate->text('enter', $enter);
        if ($enter == "I'll-hide-a-key" || $enter == "I-have-an-alarm" || $enter == "Other") {
            $validate->text('enter_instructions', $enter_instructions);
        }
        
        if ($fields->hasErrors()) {
            include 'wp-content/themes/activeclean1/view/book.php';
            break;
        }
        
        if(isset($_POST['bed_range']) || isset($_POST['bath_range']) || isset($_POST['percentage_range']) || isset($_POST['duration_range'])) {
        $bed_range = filter_input(INPUT_POST, 'bed_range');
        $bath_range = filter_input(INPUT_POST, 'bath_range');
        $percentage_range = filter_input(INPUT_POST, 'percentage_range');
        $duration_range = filter_input(INPUT_POST, 'duration_range');
        } 
        
        else if (isset($_GET['bed_range']) || isset($_GET['bath_range']) || isset($_GET['percentage_range']) || isset($_GET['duration_range'])) {
        $bed_range = filter_input(INPUT_GET, 'bed_range');
        $bath_range = filter_input(INPUT_GET, 'bath_range');
        $percentage_range = filter_input(INPUT_GET, 'percentage_range');
        $duration_range = filter_input(INPUT_GET, 'duration_range');
        }
        
        $subtotal_db = filter_input(INPUT_POST, 'subtotal_db');
        $item_sales_tax_db = filter_input(INPUT_POST, 'item_sales_tax_db');
        $total_amount_db = filter_input(INPUT_POST, 'total_amount_db');
        
        $card_code = 
            strtoupper(
                       substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 5) 
            
                       . '-' . 
                       
                       substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 5) 
                       
                       . '-' . 
            
                       substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 5)
        );
        
        $code = substr((mt_rand()), 0, 8); 
        
        
        $customer = \Stripe\Customer::create(array(
        "email" => $email,
        "source" => $token
        ));
        
        // charge customer
        /*$charge = \Stripe\Charge::create(array(
        "amount" => $total_amount_db * 100,
        // we don't put the dot, but this is 50 dollars
        // this would be implemented as 
        "currency" => "usd",
        "description" => "Beds: $bed_range, Baths: $bath_range",
        "customer" => $customer->id,
        // these contents form the first two columns of the stripe API
        // customer email is up top, it must be
        )); */
        // update appointments
    
        
        /*add_customer($customer->id, $first_name, $last_name, $email, $phone_number);*/
        
        add_transaction('order', $customer->id, $type, $first_name, $last_name, $email, $phone_number, $st_address, $apt_num, $city, $state, $zip, $bed_range, $bath_range, $extra_services, $date, $time_db, $duration, $enter, $enter_instructions, $more_information, $subtotal_db, $item_sales_tax_db, $total_amount_db);
        
        update_appointments($time, $date);
        
        if ($card_code){ 
            if (is_valid_coupon($card_code)){
            update_coupon($card_code);
            }
        }
        // this can be split up...
        
        // we can move customer id, first_name, last_name, email, created at to one table
        // we can move transaction id, customer id, purchase to another table
        
        // how can we create the perfect login system...
        
        // to created a login system, we must base it on email address and password, then, grab transactions using the email as well... call it users, on sign up... 1,2,3,4,5 email, password...
        
        // select * from customers where id = "" and then join transaction ids where id = "";
        
        // add_order($type, $first_name, $last_name, $email, $phone_number, $st_address, $apt_num, $city, $state, $zip, $bed_range, $bath_range, $date, $time, $duration, $enter, $enter_instructions, $more_information, $total_amount_db);
        
        
        // this is added to counter errors during page reload
        
        //print_r($charge);
        // Stripe\Charge Object ( [id] => ch_1DJ4xUI8MAqRlqwIV7kDywYD [object] => charge [amount] => 12870 [amount_refunded] => 0 [application] => [application_fee] => [balance_transaction] => txn_1DJ4xUI8MAqRlqwIkf33txsU [captured] => 1 [created] => 1539029044 [currency] => usd [customer] => cus_Dka7NMm3TFAQJF [description] => Beds: 2 Baths: 2 [destination] => [dispute] => [failure_code] => [failure_message] => [fraud_details] => Array ( ) [invoice] => [livemode] => [metadata] => Stripe\StripeObject Object ( ) [on_behalf_of] => [order] => [outcome] => Stripe\StripeObject Object ( [network_status] => approved_by_network [reason] => [risk_level] => normal [risk_score] => 3 [seller_message] => Payment complete. [type] => authorized ) [paid] => 1 [payment_intent] => [receipt_email] => [receipt_number] => [refunded] => [refunds] => Stripe\Collection Object ( [object] => list [data] => Array ( ) [has_more] => [total_count] => 0 [url] => /v1/charges/ch_1DJ4xUI8MAqRlqwIV7kDywYD/refunds ) [review] => [shipping] => [source] => Stripe\Card Object ( [id] => card_1DJ4xSI8MAqRlqwIjaFNpgEN [object] => card [address_city] => [address_country] => [address_line1] => [address_line1_check] => [address_line2] => [address_state] => [address_zip] => 42424 [address_zip_check] => pass [brand] => Visa [country] => US [customer] => cus_Dka7NMm3TFAQJF [cvc_check] => pass [dynamic_last4] => [exp_month] => 4 [exp_year] => 2024 [fingerprint] => EUJajPGS0WCTMrIq [funding] => credit [last4] => 4242 [metadata] => Stripe\StripeObject Object ( ) [name] => [tokenization_method] => ) [source_transfer] => [statement_descriptor] => [status] => succeeded [transfer_group] => )
        // redirect
        $tid = filter_var($charge->id);
        $product = filter_var($charge->description);
        $mail->SMTPDebug = 0;
        $mail->isSMTP();                           
        // Passing `true` enables exceptions
        // Server settings
        // Enable verbose debug output
        // Set mailer to use SMT
        // $mail->Host = gethostbyname("a2plcpnl0849.prod.iad2.secureserver.net");
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;   
        $mail->SMTPAuth = true;  
        $mail->Username = '';
        $mail->Password = '';
                          // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Priority = 1;
        $mail->AddCustomHeader("X-MSMail-Priority: High");
        $mail->WordWrap = 50;  
        $mail->From = 'service@activeclean1.com';
        $mail->Sender = 'service@activeclean1.com';     // TCP port to connect to
        $mail->FromName = 'Active Clean 1';
        //Recipients
        $mail->setFrom("donotreply@company.com", 'Active Clean 1');
        
        $mail->addReplyTo("service@activeclean1.com", $first_name . ' ' . $last_name);
        $mail->addReplyTo($email, 'Active Clean 1');
        
        $mail->addAddress("service@activeclean1.com", $first_name . ' ' . $last_name);
        $mail->addAddress($email, 'Active Clean 1');


    //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Order confirmation: ' . $code;
        $mail->Body    = 
        "
<div id='bg' style='background-color: lightgrey; font-family: Arial; border-bottom: 2px solid grey; border-top: 2px solid grey; border-right: 1px solid #ffd1dc; border-left: 1px solid #ffd1dc; padding-bottom: 0px;'>

<div id='email' style='width: 80%; margin:auto'>

<div style='background-color: #7bc7ff; height: 75px; color: white; text-align; padding-top: 0px; border-bottom: 3px solid black;'>

<img src='wp-content/themes/activeclean1/images/logo2.jpg' style='height: 75px; text-align:left;'/>

</div>

<div id='body' style='padding-left: 35px; padding-right: 35px; padding-top: 25px; padding-bottom: 35px; background-color:white; border-top: 2px solid grey; border-bottom: 1px solid lightgrey'>
<h1 style='color: #1b1b1b;'>Hello " . $first_name . " " . $last_name . "</h1>
<h3 style='color: #262626;'>Thank you for scheduling our cleaning service with Active Clean 1.</h3>
<h4 style='color: #262626;'>Here is a summary of your service:</h4>
<p>First Name: " . $first_name . "</p>
<p>Last Name: " . $last_name . "</p>
<p>Email: " . $email . "</p>
<p>Phone Number: " . $phone_number . "</p>
<p>Street Address: " . $st_address . "</p>
<p>Apt: " . $apt_num . "</p>
<p>City: " . $city . "</p>
<p>State: " . $state . "</p>
<p>Zip Code: " . $zip . "</p>
<p>Bedrooms: " . $bath_range . "</p>
<p>Bathrooms: ". $bed_range . "</p>
<p>Date: " . $date . "</p>
<p>Time: " . $time_db . "</p>
<p>How Often?: " . $duration . "</p>
<p>How will we get in?: " . $enter . "</p>
<p>Your notes for entry: " . $enter_instructions . "</p>
<p>What else you wanted us to know: " . $more_information . "</p>
<p>Total: " . $total_amount_db . "</p>
<p>This email will serve as your receipt.</p>
<p>Returns and refund information can be found on our website in the FAQs section.</p>
<p>You can contact us regarding any questions you may have at service@activeclean1.com.</p>

</div>
<div id='copyright' align:'center'>
<p style='background-color:#1b1b1b; color:white; padding-top: 0px; padding: 25px; height: ; margin-top: 0px; margin-bottom: 0px'>&copy;2018 Active Clean 1. All rights reserved.</p>
</div>
</div>
</div>
"
;
        //header('Location: wp-content/themes/activeclean1/view/success.php?tid='.$charge->id.'&product='.$charge->description);
        if(!$mail->send()){
        echo "Something went wrong. Please try again.";
        } else {
            include 'wp-content/themes/activeclean1/view/success.php';
            //header('Location: wp-content/themes/activeclean1/view/success.php?tid='.$charge->id.'&product='.$charge->description);
            }
        break;
    case 'contact_us':
        $inquiry = filter_input(INPUT_POST, 'inquiry');
        $information = filter_input(INPUT_POST, 'information');
        $email = filter_input(INPUT_POST, 'email');
        $mail->SMTPDebug = 0;
        $mail->isSMTP();                           // Passing `true` enables exceptions
    //Server settings
                                     // Enable verbose debug output
                                         // Set mailer to use SMT
    //$mail->Host = gethostbyname("a2plcpnl0849.prod.iad2.secureserver.net");
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;   
        $mail->SMTPAuth = true;  
        $mail->Username = '';
        $mail->Password = '';
                          // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Priority = 1;
        $mail->AddCustomHeader("X-MSMail-Priority: High");
        $mail->WordWrap = 50;  
        $mail->From = 'service@activeclean1.com';
        $mail->Sender = 'service@activeclean1.com';     // TCP port to connect to
        $mail->FromName = 'Active Clean 1';
        //Recipients
        $mail->setFrom("donotreply@company.com", 'Active Clean 1');
        $mail->addReplyTo("service@activeclean1.com");
        $mail->addReplyTo($email, 'Active Clean 1');
        $mail->addAddress("service@activeclean1.com");
        $mail->addAddress($email, 'Active Clean 1');


    //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "We've recieved your inquiry!";
        $mail->Body    = 
        "
<div id='bg' style='background-color: lightgrey; font-family: Arial; border-bottom: 2px solid grey; border-top: 2px solid grey; border-right: 1px solid #ffd1dc; border-left: 1px solid #ffd1dc; padding-bottom: 0px;'>

<div id='email' style='width: 80%; margin:auto'>

<div style='background-color: #7bc7ff; height: 75px; color: white; text-align; padding-top: 0px; border-bottom: 3px solid black;'>

<img src='wp-content/themes/activeclean1/images/logo2.jpg' style='height: 75px; text-align:left;'/>

</div>

<div id='body' style='padding-left: 35px; padding-right: 35px; padding-top: 25px; padding-bottom: 35px; background-color:white; border-top: 2px solid grey; border-bottom: 1px solid lightgrey'>
<h1 style='color: #262626;'>Thank you for reaching out to Active Clean 1 support.</h3>
<h2 style='color: #262626;'>We'll get back to you as soon as possible!</h4>
<h4 style='color: #262626;'>Here's a summary of your inquiry.</h5>
<p>Inquiry: " . $inquiry . "</p>
<p>Information: " . $information . "</p>
<p>Contact: " . $email . "</p>
</div>
<div id='copyright' align:'center'>
<p style='background-color:#1b1b1b; color:white; padding-top: 0px; padding: 25px; height: ; margin-top: 0px; margin-bottom: 0px'>&copy;2018 Active Clean 1. All rights reserved.</p>
</div>
</div>
</div>
";
        if(!$mail->send()){
        echo "Something went wrong. Please try again.";
        } else {
            include 'wp-content/themes/activeclean1/view/contactsuccess.php';
            //header('Location: wp-content/themes/activeclean1/view/success.php?tid='.$charge->id.'&product='.$charge->description);
        }
        break;
    case 'success':
        include 'wp-content/themes/activeclean1/view/success.php';
        break;
        // for eventual booking 
        // One for information: residential, first_name, last_name, email, phone_number, address, apt suite, city, state, zip, #bed, #bath, date, time, duration, entry, information,
        // One for something else: 
    case 'login':
        break;
}

?>
