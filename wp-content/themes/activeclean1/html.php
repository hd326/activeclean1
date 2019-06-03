<?php
echo
"
<div id='bg' style='background-color: lightgrey; font-family: Arial; border-bottom: 2px solid grey; border-top: 2px solid grey; border-right: 1px solid #ffd1dc; border-left: 1px solid #ffd1dc; padding-bottom: 0px;'>

<div id='email' style='width: 80%; margin:auto'>

<div style='background-color: #7bc7ff; height: 75px; color: white; text-align; padding-top: 0px; border-bottom: 3px solid black;'>

<img src='images/logo2.jpg' style='height: 75px; text-align:left;'/>

</div>

<div id='body' style='padding-left: 35px; padding-top: 25px; padding-bottom: 35px; padding-right: 35px; background-color:white; border-top: 2px solid grey; border-bottom: 1px solid lightgrey'>
<h1 style='color: #1b1b1b;'>Hello first name last name</h1>
<h3 style='color: #262626;'>Thank you for scheduling our cleaning service with Active Clean 1.</h3>
<h4 style='color: #262626;'>Here is a summary of your service:</h4>
<p>First Name: " . $first_name . "</p>
<p>Last Name: " . $last_name . "</p>
<p>Email: " . $email . "</p>
<p>Phone Number: " . $phone_number . "</p>
<p>Street Address: " . $st_address . "</p>
<p>Apt: " . $apt . "</p>
<p>State: " . $state . "</p>
<p>Zip Code: " . $zip_code . "</p>
<p>Bedrooms: " . $bdrms . "</p>
<p>Bathrooms: ". $baths . "</p>
<p>Date: " . $date . "</p>
<p>Time: " . $time . "</p>
<p>How Often?: " . $duration . "</p>
<p>How will we get in?: " . $enter . "</p>
<p>Your notes for entry: " . $enter_instructions . "</p>
<p>What else you wanted us to know: " . $more_information . "</p>
<p>Date issued: " . $date_time . "</p>
<p>Total: " . $total . "</p>
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
?>