<?php include 'header.php'; ?>

<div id="gift">
    <div id="gift_ol"></div>
    <div id="gift_ol_ol"></div>
    <div id="gift_text">

        <h1>SEND GIFT CARDS TO <br>YOUR FRIENDS</h1>
        <h2>TREAT SOMEONE TO A HOUSE CLEANING</h2>
        <p>Gift cards are emailed instantly and apply to any of our cleaning services!</p>

    </div>
</div>

<form action="index.php?action=giftcharge" method="post" id="payment-form">

<div id="gift_entry">
    <div id="gift_entry_card">
        <div id="gift_entry_card_bg"></div>
        <div id="gift_entry_card_ol"></div>
        <h1 class="gift_title_line"><span class="gift_title">GIFT CARD</span><span class="gift_line"></span></h1>
        <div id="gift_info_holder">

            <div class="gift_information">

                <div class="gift_fields">
                    <div><label>Amount</label></div>
                    <div><input class="<?php echo $fields->getField('amount')->setSuccess();?>" type="text" name="amount" value="<?php htmlspecialchars($amount); ?>"><span id="gift_money_sign">$</span><?php echo $fields->getField('amount')->setSuccessIcon();?></div>
                </div>
                
                <div class="gift_fields">
                    <div><label>To</label></div>
                    <div><input class="<?php echo $fields->getField('to_name')->setSuccess();?>" type="text" name="to_name" value="<?php htmlspecialchars($to_name); ?>"><?php echo $fields->getField('to_name')->setSuccessIcon();?></div>
                </div>
                
                <div class="gift_fields">
                    <div><label>Recipient Email</label></div>
                    <div><input class="<?php echo $fields->getField('recipient_email')->setSuccess();?>" type="text" name="recipient_email" value="<?php htmlspecialchars($recipient_email); ?>"><?php echo $fields->getField('recipient_email')->setSuccessIcon();?></div>
                </div>
                
                <div class="gift_fields">
                    <div><label>From</label></div>
                    <div><input class="<?php echo $fields->getField('from_name')->setSuccess();?>" type="text" name="from_name" value="<?php htmlspecialchars($from_name); ?>"><?php echo $fields->getField('from_name')->setSuccessIcon();?></div>
                </div>
                
                <div class="gift_fields">
                    <div><label>Your Email</label></div>
                    <div><input class="<?php echo $fields->getField('sender_email')->setSuccess();?>" type="text" name="sender_email" value="<?php htmlspecialchars($sender_email); ?>"><?php echo $fields->getField('sender_email')->setSuccessIcon();?></div>
                </div>
                
                <div class="gift_fields">
                    <div><label>Message</label></div>
                    <div><textarea name="message"></textarea></div>
                </div>

            </div>

            <div class="gift_information">
                <div id="gift_card">
                    <div id="gift_card_title">
                        <p>Active Clean 1</p>
                        <p>$<span>0</span>.00</p>
                    </div>
                    <div id="gift_card_content">
                        <div id="gift_card_fill"></div>
                        <div id="gift_card_text">Dear Recipient Name,<p>Thank you for everything you've done. This cleaning is on me!</p>
                            <div id="gift_card_code">Code: XXXX-XXXX-XXXX</div>
                        </div>
                    </div>
                </div>
            </div>
            <script>

                $(function(){
                        var moneyField = $('.gift_fields:nth-of-type(1) div input'); 
                        var nameField = $('.gift_fields:nth-of-type(2) div input');
                        var messageField = $('.gift_fields:nth-of-type(6) div textarea');
                        
                        /*$(moneyField).on('keyup', function(event){
                            if(event.which == 8 || !isNaN(String.fromCharCode(event.which))){
                                event.preventDefault();
                            $('#gift_card_title p:nth-of-type(2) span').html($(this).val());
                            }
                        });*/
                        
                        $(nameField).on('keyup', function(event){
                            $('#gift_card_text span').html($(this).val());
                        });
                        
                        $(messageField).html("Thank you for everything you've done. This cleaning is on me!");
                        
                        $(messageField).on('keyup', function(event){
                            $('#gift_card_text p').html($(this).val());
                        });
                                                
jQuery.fn.forceNumeric = function () {
     return this.each(function () {
         $(this).keydown(function (e) {
             var key = e.which || e.keyCode;

             if (!e.shiftKey && !e.altKey && !e.ctrlKey &&
                 
             // numbers   
                 
                 key >= 48 && key <= 57 ||
                 
             // Numeric keypad
                 
                 key >= 96 && key <= 105 ||
                 
             // comma, period and minus, . on keypad
                 
                /*key == 190 || key == 188 || key == 109 || key == 110 ||*/
                 
             // Backspace and Tab and Enter
                 
                key == 8 || key == 9 /*|| key == 13 ||*/
                 
             // Home and End
                 
                /*key == 35 || key == 36 ||*/
                 
             // left and right arrows
                 
                /*key == 37 || key == 39 ||*/
                 
             // Del and Ins
                 
                /*key == 46 || key == 45*/)
                 
                 return true;

             return false;
         });
     });
 }
                        
        $(moneyField).forceNumeric();
                        $(moneyField).on('keyup', function(event){
                            $('#gift_card_title p:nth-of-type(2) span').html($(this).val());
                            
                            $('#gift_final_price_section #gift_final_price span').html($(this).val());
                        });
                    });
                        
                    
                        
                    

                
                </script>

        </div>

        <h1 class="gift_title_line"><div class="gift_title">CHECKOUT</div><div class="gift_line"></div></h1>

        <div id="gift_checkout">
            <div id="gift_checkout_info">
                <div id="gift_checkout_cards"><img alt="credit cards" src="wp-content/themes/activeclean1/images/creditcard1.png"></div>
                <div class="gift_fields">
                    <div><label>Credit Card *</label></div>
         <!-- gift card stripe implementation -->   
                    
                    <div>
                        <div class="form-row">
                            <label for="card-element">
                            </label>
                            <div id="card-element">

                            </div>

                            <div id="card-errors" role="alert"></div>
                        </div>
                    </div>
                    
                    <script src="https://js.stripe.com/v3/"></script>
                <script src="wp-content/themes/activeclean1/js/charge.js"></script>
                    
        <!-- gift card stripe implementation -->
                </div>
                <input id="gift_purchase_button" type="submit" value="PURCHASE GIFT CARD">
            </div>
            <div id="gift_checkout_filler"></div>
        </div>


        <h1 class="gift_title_line">
            <div id="gift_final_price_section"><div class="gift_title">FINAL PRICE:</div><div id="gift_final_price">$.00</div></div>
            <div id="gift_final_price_filler"></div>
        </h1>
    </div>


</div>
    
</form>


<?php include 'footer.php'; ?>
