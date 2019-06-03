<?php include 'header_book.php'; ?>

<div id="book_hero">
    <!-- -->

    <div role="img" alt="blue couches" id="book_hero_bg"></div>
    <div id="book_text">
        <h1>LET US KNOW ABOUT YOUR HOME</h1>
        <p>WE DON'T SHARE YOUR PERSONAL INFORMATION WITH ANYONE</p>
    </div>
    <div id="book_steps">

        <div class="book_steps_section">

            <div class="img"><img src="wp-content/themes/activeclean1/images/book_1.png" alt="House with heart in middle"></div>
            <div class="book_step_text">
                CLEANING DETAILS
            </div>
        </div>

        <div class="book_steps_section">
            <div class="type_1">- - - - - <span class="book_steps_lines"> - - - - - - - - - - - - - - - - - - </span>- - - - -</div>
            <div class="type_2">- - - - - - - - - - - - - - - - - -</div>
        </div>

        <div class="book_steps_section">
            <div class="img"><img src="wp-content/themes/activeclean1/images/book_2.png" alt="Map with location pointer"></div>
            <div class="book_step_text">
                HOME LOCATION
            </div>
        </div>

        <div class="book_steps_section">
            <div class="type_1">- - - - - <span class="book_steps_lines"> - - - - - - - - - - - - - - - - - - </span>- - - - -</div>
            <div class="type_2">- - - - - - - - - - - - - - - - - -</div>
        </div>

        <div class="book_steps_section">
            <div class="img"><img src="wp-content/themes/activeclean1/images/book_3.png" alt="Credit card with lock"></div>
            <div class="book_step_text">
                PAYMENT
            </div>
        </div>
    </div>

    <!--<div id="book_steps_guide">
            <div class="guide">CLEANING DETAILS</div>
            <div class="guide"></div>
            <div class="guide">HOME LOCATION</div>
            <div class="guide"></div>
            <div class="guide">PAYMENT</div>
        </div>
        -->
</div>

<div id="book_wrap">

    <div id="book_wrap_title">
        <h1>YOU'RE ONE STEP CLOSER TO A LIVELY HOME</h1>
    </div>

    <div id="book_wrap_containers">

        <!--main-->

        <div id="main">

            <div id="main_title">

                <h1 id="title">You're almost there.</h1>
                <p id="title_aide">Just a few more details and we can complete your booking.</p>

            </div>

            <hr>

            <!-- beginning the form -->
            <!-- beginning the form -->
            <!-- beginning the form -->

            <form action="index.php?action=charge" method="post" id="payment-form">
                <!-- starting the form -->

                <div id="main_type">

                    <h1>Type of Cleaning</h1>

                    <div id="main_type_buttons">
                        <div class="main_type_sections">

                            <button type="button"><i aria-hidden class="fas fa-home" title="Choose residential homes"></i><input id="residential" type="hidden" class="fas fa-home" value="Residential" name="type"></button>
                            <p class="main_type_text">Residential</p>
                            <!-- reformatting button to input -->
                            <!--<input aria-hidden class="fas fa-home" title="Choose residential homes" value="Residential" name="type">-->
                        </div>
                        <div class="main_type_sections">
                            <button type="button"><i aria-hidden class="fas fa-building" title="Choose commerical cleaning, disabled with phone number"></i></button>
                            <p class="main_type_text">** Commerical</p>
                        </div>

                        <!-- main type input value name -->

                        <!--<span class="data_value"><input id="main_type" type="hidden" name="type" value="residential"></span>-->

                        <script>

                            /*
                    $(function(){
                        $('#residential').on('click', function(){
                            $('#main_type_buttons .data_value').html('<input id="main_type" type="hidden" name="type" value="residential">');
                        });
                        $('#commercial').on('click', function(){
                            $('#main_type_buttons .data_value').html('<input id="main_type" type="hidden" name="type" value="commercial">');
                        });
                        
                    });
                    */
                                               
                    </script>
                        <!-- main type input value name -->
                    </div>


                    <p>** For commercial bookings, please call us at our office at <a class="telephone" href="tel:19168007795">+1 (916) 800-7795</a></p>

                </div>

                <hr>
                
                <!-- customer select extras -->
                <!-- customer select extras -->
                
                <div id="main_select">
                <h1>Select Extras</h1>
                    <p id="select_spacing">We recommend a deep cleaning if the home has not regularly been maintained</p>
                    <div id="main_select_inputs">
                    <div id="select_input"><button class="select_icons" data-select="20" type="button" onclick="" value="Cabinets +$20, "><img src="wp-content/themes/activeclean1/images/extra_cabinet.png"></button>
                            <p class="select_input_text">Inside cabinets +$20</p>
                    </div>
                    
                    <div id="select_input"><button class="select_icons" data-select="20" type="button" onclick="" value="Fridge +$20, "><img src="wp-content/themes/activeclean1/images/extra_fridge.png"></button>
                            <p class="select_input_text">Inside the fridge +$20</p>
                    </div>
                    
                    <div id="select_input"><button class="select_icons" data-select="20" type="button" onclick="" value="Oven +$20, "><img src="wp-content/themes/activeclean1/images/extra_oven.png"></button>
                            <p class="select_input_text">Inside the oven +$20</p>
                    </div>
                    
                    <div id="select_input"><button class="select_icons" data-select="60" type="button" onclick="" value="Windows +$20, "><img src="wp-content/themes/activeclean1/images/extra_window.png"></button>
                            <p class="select_input_text">Inside windows +$60</p>
                    </div>
                    
                    <!--<div id="select_input"><button class="select_icons" data-select="20" type="button" onclick="" value="Laundry +$20, "><img src="wp-content/themes/activeclean1/images/extra_laundry.png"></button>
                            <p class="select_input_text">Load of laundry +$20</p>
                    </div>-->
                    
                    <div id="select_input"><button class="select_icons" data-select="80" type="button" onclick="" value="Move +$80, "><img src="wp-content/themes/activeclean1/images/extra_move.png"></button>
                            <p class="select_input_text">Move In/Out +$80</p>
                    </div>
                    
                    <!--<div id="select_input"><button class="select_icons" data-select="20" type="button" onclick="" value="Deep Clean +$20, "><img src="wp-content/themes/activeclean1/images/extra_bottle.png"></button>
                            <p class="select_input_text">Deep cleaning +$20</p>
                    </div>-->
                    
                    <!--<div id="select_input"><button class="select_icons" data-select="20" type="button" onclick="" value="Walls +$20, "><img src="wp-content/themes/activeclean1/images/extra_walls.png"></button>
                            <p class="select_input_text">Walls +20</p>
                    </div>-->
                    </div>
                </div>
                
                <input type="hidden" id="select_instructions" name="select_extras" value="">
                <input type="hidden" id="select_extras" value="0">
                
                <script>
                    
                    var Cabinet = $("#main_select_inputs #select_input:nth-of-type(1) button");
                    var Fridge = $("#main_select_inputs #select_input:nth-of-type(2) button");
                    var Oven = $("#main_select_inputs #select_input:nth-of-type(3) button");
                    var Window = $("#main_select_inputs #select_input:nth-of-type(4) button");
                    var Laundry = $("#main_select_inputs #select_input:nth-of-type(5) button");
                    var Move = $("#main_select_inputs #select_input:nth-of-type(6) button");
                    var Bottle = $("#main_select_inputs #select_input:nth-of-type(7) button");
                    var Walls = $("#main_select_inputs #select_input:nth-of-type(8) button");
                    
                    $(Cabinet).on('click', function(){
                       var selectInstructions = $(this).attr('value');
                       var selectAmt = $(this).data('select');
                        $(Cabinet).toggleClass('active');
                        
                        if($(Cabinet).hasClass('active') == true) {
                            
                            $("#select_instructions").val($("#select_instructions").val() + selectInstructions);
                            $("#select_extras").val(parseInt($("#select_extras").val()) + parseInt(selectAmt));
                            getTotalCost();

                        }
                        
                        if($(Cabinet).hasClass('active') == false) {
                            
                           $("#select_instructions").val($("#select_instructions").val().replace(selectInstructions, ''));
                            $("#select_extras").val(parseInt($("#select_extras").val()) - parseInt(selectAmt));
                            getTotalCost();
                            
                        }
                    });
                    
                    $(Fridge).on('click', function(){
                       var selectInstructions = $(this).attr('value');
                        var selectAmt = $(this).data('select');
                        $(Fridge).toggleClass('active');
                        
                        if($(Fridge).hasClass('active') == true) {
                            
                            $("#select_instructions").val($("#select_instructions").val() + selectInstructions);
                            $("#select_extras").val(parseInt($("#select_extras").val()) + parseInt(selectAmt));
                            getTotalCost();
                        }
                        
                        if($(Fridge).hasClass('active') == false) {
                            
                           $("#select_instructions").val($("#select_instructions").val().replace(selectInstructions, ''));
                            $("#select_extras").val(parseInt($("#select_extras").val()) - parseInt(selectAmt));
                            getTotalCost();
                        }
                    });
                    
                    $(Oven).on('click', function(){
                       var selectInstructions = $(this).attr('value');
                        var selectAmt = $(this).data('select');
                        $(Oven).toggleClass('active');
                        if($(Oven).hasClass('active') == true) {
                            
                            $("#select_instructions").val($("#select_instructions").val() + selectInstructions);
                            $("#select_extras").val(parseInt($("#select_extras").val()) + parseInt(selectAmt));
                            getTotalCost();

                        }
                        
                        if($(Oven).hasClass('active') == false) {
                            
                           $("#select_instructions").val($("#select_instructions").val().replace(selectInstructions, ''));
                           $("#select_extras").val(parseInt($("#select_extras").val()) - parseInt(selectAmt));
                            getTotalCost();
                            
                        }
                    });
                    
                    $(Window).on('click', function(){
                       var selectInstructions = $(this).attr('value');
                        var selectAmt = $(this).data('select');
                        $(Window).toggleClass('active');
                        if($(Window).hasClass('active') == true) {
                            
                            $("#select_instructions").val($("#select_instructions").val() + selectInstructions);
                            $("#select_extras").val(parseInt($("#select_extras").val()) + parseInt(selectAmt));
                            getTotalCost();

                        }
                        
                        if($(Window).hasClass('active') == false) {
                            
                           $("#select_instructions").val($("#select_instructions").val().replace(selectInstructions, ''));
                            $("#select_extras").val(parseInt($("#select_extras").val()) - parseInt(selectAmt));
                            getTotalCost();
                            
                        }
                    });
                    
                    $(Laundry).on('click', function(){
                       var selectInstructions = $(this).attr('value');
                        var selectAmt = $(this).data('select');
                        $(Laundry).toggleClass('active');
                        if($(Laundry).hasClass('active') == true) {
                            
                            $("#select_instructions").val($("#select_instructions").val() + selectInstructions);
                            $("#select_extras").val(parseInt($("#select_extras").val()) + parseInt(selectAmt));
                            getTotalCost();

                        }
                        
                        if($(Laundry).hasClass('active') == false) {
                            
                           $("#select_instructions").val($("#select_instructions").val().replace(selectInstructions, ''));
                            $("#select_extras").val(parseInt($("#select_extras").val()) - parseInt(selectAmt));
                            getTotalCost();
                            
                        }
                    });
                    
                    $(Move).on('click', function(){
                       var selectInstructions = $(this).attr('value');
                        var selectAmt = $(this).data('select');
                        $(Move).toggleClass('active');
                        if($(Move).hasClass('active') == true) {
                            
                            $("#select_instructions").val($("#select_instructions").val() + selectInstructions);
                            $("#select_extras").val(parseInt($("#select_extras").val()) + parseInt(selectAmt));
                            getTotalCost();

                        }
                        
                        if($(Move).hasClass('active') == false) {
                            
                           $("#select_instructions").val($("#select_instructions").val().replace(selectInstructions, ''));
                            $("#select_extras").val(parseInt($("#select_extras").val()) - parseInt(selectAmt));
                            getTotalCost();
                            
                        }
                    });
                    
                    $(Bottle).on('click', function(){
                       var selectInstructions = $(this).attr('value');
                        var selectAmt = $(this).data('select');
                        $(Bottle).toggleClass('active');
                        if($(Bottle).hasClass('active') == true) {
                            
                            $("#select_instructions").val($("#select_instructions").val() + selectInstructions);
                            $("#select_extras").val(parseInt($("#select_extras").val()) + parseInt(selectAmt));
                            getTotalCost();

                        }
                        
                        if($(Bottle).hasClass('active') == false) {
                            
                           $("#select_instructions").val($("#select_instructions").val().replace(selectInstructions, ''));
                            $("#select_extras").val(parseInt($("#select_extras").val()) - parseInt(selectAmt));
                            getTotalCost();
                            
                        }
                    });
                    
                    $(Walls).on('click', function(){
                       var selectInstructions = $(this).attr('value');
                        var selectAmt = $(this).data('select');
                        $(Walls).toggleClass('active');
                        if($(Walls).hasClass('active') == true) {
                            
                            $("#select_instructions").val($("#select_instructions").val() + selectInstructions);
                            $("#select_extras").val(parseInt($("#select_extras").val()) + parseInt(selectAmt));
                            getTotalCost();

                        }
                        
                        if($(Walls).hasClass('active') == false) {
                            
                           $("#select_instructions").val($("#select_instructions").val().replace(selectInstructions, ''));
                            $("#select_extras").val(parseInt($("#select_extras").val()) - parseInt(selectAmt));
                            getTotalCost();
                            
                        }
                    });
                
                    
                    
                
                </script>

                <hr>
                
                <!-- customer details -->
                <!-- customer details -->

                <div id="main_contact">

                    <h1>Contact Information</h1>
                    <p>This information will be used to contact you.</p>

                    <div id="main_contact_inputs">
                        <!-- when placing inputs, it seems better to place them in a div, so that they may be accompanied by errors, so maybe i wasn't wrong for wanting to put everything in divs -->
                        <div class="main_field">
                            <input class="<?php echo $fields->getField('first_name')->setSuccess(); ?>" type="text" placeholder="First Name**" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>">
                            <?php echo $fields->getField('first_name')->setSuccessIcon(); ?>
                        </div>

                        <div class="main_field">
                            <input class="<?php echo $fields->getField('last_name')->setSuccess(); ?>" type="text" placeholder="Last Name**" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>">
                            <?php echo $fields->getField('last_name')->setSuccessIcon(); ?>
                        </div>

                        <div class="main_field">
                            <input class="<?php echo $fields->getField('email')->setSuccess(); ?>" type="text" placeholder="Email**" name="email" type="email" value="<?php echo htmlspecialchars($email); ?>">
                            <?php echo $fields->getField('email')->setSuccessIcon(); ?>
                        </div>

                        <div class="main_field">
                            <input class="<?php echo $fields->getField('phone_number')->setSuccess(); ?>" type="text" placeholder="Phone Number**" name="phone_number" value="<?php echo htmlspecialchars($phone_number); ?>">
                            <?php echo $fields->getField('phone_number')->setSuccessIcon(); ?>
                        </div>

                        <!-- the value would be whatever is in the box-->

                        <!--<input type="hidden" name="first_name">
                    <input type="hidden" name="last_name">
                    <input type="hidden" name="email">
                    <input type="hidden" name="phone_number">-->

                    </div>

                </div>

                <hr>

                <!-- customer address -->
                <!-- customer address -->

                <div id="main_address">

                    <h1>Service Address</h1>
                    <p>Where would you like us to provide our service?</p>

                    <div id="main_address_inputs">

                        <div class="main_field">
                            <input class='<?php echo $fields->getField('st_address')->setSuccess();?>' type="text" placeholder="Street Address**" name="st_address" value="<?php echo htmlspecialchars($st_address); ?>">
                            <?php echo $fields->getField('st_address')->setSuccessIcon(); ?>
                        </div>

                        <div class="main_field">
                            <input class='<?php echo $fields->getField('apt_num')->setSuccess();?>' type="text" placeholder="Apt/Suite #**" name="apt_num" value="<?php echo htmlspecialchars($apt_num); ?>">
                            <?php echo $fields->getField('apt_num')->setSuccessIcon(); ?>
                        </div>

                        <div class="main_field">
                            <input class='<?php echo $fields->getField('city')->setSuccess();?>' type="text" placeholder="City**" name="city" value="<?php echo htmlspecialchars($city); ?>">
                            <?php echo $fields->getField('city')->setSuccessIcon(); ?>
                        </div>

                        <div class="main_field">
                            <input class='<?php echo $fields->getField('state')->setSuccess();?>' type="text" placeholder="State**" name="state" value="<?php echo htmlspecialchars($state); ?>">
                            <?php echo $fields->getField('state')->setSuccessIcon(); ?>
                        </div>

                        <div class="main_field">
                            <input class='<?php echo $fields->getField('zip')->setSuccess();?>' type="text" placeholder="Zip Code**" name="zip" value="<?php echo htmlspecialchars($zip); ?>">
                            <?php echo $fields->getField('zip')->setSuccessIcon(); ?>
                        </div>

                    </div>

                </div>

                <hr>

                <!-- customer bed/bath -->
                <!-- customer bed/bath -->

                <div id="main_service">

                    <h1>Choose Your Service</h1>
                    <p>Tell us about your home.</p>

                    <div id="main_service_inputs">

                        <!-- option names? -->
                        <!-- indicators not needed here -->

                        <select name="bed_range" class="calculate_bdrms" id="bdrms">

                            <option data-summary="1 Bedroom" data-price="0.00" id="one_bd" value="1" <?php if (isset($bed_range) && $bed_range==1) { echo "selected" ; } else { echo "" ; }?>>One Bedroom Home</option>

                            <option data-summary="2 Bedrooms" data-price="10.00" id="two_bd" value="2" <?php if (isset($bed_range) && $bed_range==2) { echo "selected" ; } else { echo "" ; }?>>Two Bedroom Home</option>

                            <option data-summary="3 Bedrooms" data-price="35.00" id="three_bd" value="3" <?php if (isset($bed_range) && $bed_range==3) { echo "selected" ; } else { echo "" ; }?>>Three Bedroom Home</option>


                            <option data-summary="4 Bedrooms" data-price="70.00" id="four_bd" value="4" <?php if (isset($bed_range) && $bed_range==4) { echo "selected" ; } else { echo "" ; }?>>Four Bedroom Home</option>

                            <option data-summary="5 Bedrooms" data-price="95.00" id="five_bd" value="5" <?php if (isset($bed_range) && $bed_range==5) { echo "selected" ; } else { echo "" ; }?>>Five Bedroom Home</option>

                            <option data-summary="6 Bedrooms" data-price="120.00" id="six_bd" value="6" <?php if (isset($bed_range) && $bed_range==6) { echo "selected" ; } else { echo "" ; }?>>Six Bedroom Home</option>

                        </select>

                        <select name="bath_range" class="calculate_baths" id="baths">
                            <option data-price="0.00" id="one_bath" value="1" <?php if (isset($bath_range) && $bath_range==1) { echo "selected" ; } else { echo "" ; }?>>One Bathroom</option>
                            <option data-price="25.00" id="two_bath" value="2" <?php if (isset($bath_range) && $bath_range==2) { echo "selected" ; } else { echo "" ; }?>>Two Bathrooms</option>
                            <option data-price="50.00" id="three_bath" value="3" <?php if (isset($bath_range) && $bath_range==3) { echo "selected" ; } else { echo "" ; }?>>Three Bathrooms</option>
                            <option data-price="75.00" id="four_bath" value="4" <?php if (isset($bath_range) && $bath_range==4) { echo "selected" ; } else { echo "" ; }?>>Four Bathrooms</option>
                            <option data-price="100.00" id="five_bath" value="5" <?php if (isset($bath_range) && $bath_range==5) { echo "selected" ; } else { echo "" ; }?>>Five Bathrooms</option>
                            <option data-price="125.00" id="six_bath" value="6" <?php if (isset($bath_range) && $bath_range==6) { echo "selected" ; } else { echo "" ; }?>>Six Bathrooms</option>
                        </select>
                        <script src="wp-content/themes/activeclean1/js/jquery-3.3.1.min.js"></script>

                    </div>
                </div>
                
                <br>

                <!-- customer schedule time / date -->
                <!-- customer schedule time / date -->

                <div id="main_when">

                    <h1>When would you like us to come?</h1>

                    <div id="main_when_inputs">

                        <div class="main_field">

                            <input id='<?php echo $fields->getField('date')->setSuccess();?>' class="date" placeholder="Click to Choose a Date" name="date" value="
                            <?php echo htmlspecialchars($date); ?>">

                            <!-- since flatpickr uses class calendar, we may need to use ID to call the error display class... -->

                            <?php echo $fields->getField('date')->setSuccessIcon(); ?>

                        </div>

                        <!-- calendar -->
                        <!-- calendar -->

                        <script>
                            $(function(){
                    
                    flatpickr('.date', {
                        "dateFormat":"Y-m-d",
                        "allowInput":true,
                        "onOpen": function (selectedDates,dateStr,instance) {
                            instance.setDate(instance.input.value,false);
                        }
                    });
                    
                   $('.date').change(function(){
                        var date = $('.date').val();
                       $('#date_summary').html(date);
                       if (date == "") {
                           $('#date_summary').html('Choose your service date...');
                       } else if ($.trim(date) !== '') {
                        $.get('wp-content/themes/activeclean1/model/calendar.php', {date: date}, function(data) {
                            //we send a get by $_GET['date'] with value of date
                            var data = data.toString();
                        $('#date_data').html(data);
                            //these are all options, a list
                        });
                    }
                });
                                
                    $('.calendar').trigger('change');   
                                
                        $('.coupon').change(function(){
                        var coupon = $('.coupon').val();
                        
                        if($.trim(coupon) !== ''){
                        $.get('wp-content/themes/activeclean1/model/coupon.php', {card_code: coupon}, function(data){
                            $('#coupon_return').val(data);
                            /*$('#subtotal').html($('#subtotal').html() - data);*/
                            getTotalCost();
                        });
                        }
                    });
                            
                    /*load_data();
                    function load_data(query){
                        $.ajax({
                            url:'calendar.php',
                            method:'post',
                            data:{query:query},
                            success:function(data){
                                $('#date_data').html(data);
                            }
                        });
                    }*/
                            
                });
                        
                // how am i doing this? pick a calendar date, so pretty much on change, AJAX, 
                    </script>

                        <div class="main_field">
                            <select class='<?php echo $fields->getField('time')->setSuccess();?>' name="time" id="date_data">

                            </select>
                            <?php echo $fields->getField('time')->setSuccessIcon(); ?>
                        </div>

                        <!-- time -->
                        <!-- time -->

                    </div>
                </div>

                <hr>

                <!-- customer duration -->
                <!-- customer duration -->

                <div id="main_duration">

                    <h1>How Often?</h1>

                    <div id="main_duration_inputs">


                        <button class="<?php if(isset($percentage_range) && $percentage_range == 0) { echo 'active_duration'; } else { echo ""; }?>" data-ssummary="One-time-cleaning" data-sssummary="One time cleaning" type="button" value="0" onclick="returnPercentage(this);getTotalCost();">One time service</button>


                        <button class="<?php if(isset($percentage_range) && $percentage_range == 10) { echo 'active_duration'; } else { echo ""; }?>" data-ssummary="Monthly-service" data-sssummary="Monthly service" type="button" value="10" onclick="returnPercentage(this);getTotalCost();">Monthly cleaning</button>


                        <button class="<?php if(isset($percentage_range) && $percentage_range == 15) { echo 'active_duration'; } else { echo ""; }?>" data-ssummary="Bi-weekly-service" data-sssummary="Bi-weekly service" type="button" value="15" onclick="returnPercentage(this);getTotalCost();">Bi-weekly cleaning</button>


                        <!--<button class="<?php if(isset($percentage_range) && $percentage_range == 10) { echo 'active_duration'; } else { echo ""; }?>" data-ssummary="Tri-weekly-service" data-sssummary="Tri-weekly service" type="button" value="10" onclick="returnPercentage(this);getTotalCost();">Tri-weekly cleaning</button>-->


                        <button class="<?php if(isset($percentage_range) && $percentage_range == 20) { echo 'active_duration'; } else { echo ""; }?>" data-ssummary="Weekly" data-sssummary="Weekly service" type="button" value="20" onclick="returnPercentage(this);getTotalCost();">Weekly cleaning</button>
                    </div>
                    
                    <script>
                    /*function returnServiceSummary(val) {
                     document.querySelector('#duration_summary').innerHTML = val.dataset.sssummary;
                    document.querySelector('#main_duration .data_value').innerHTML = "<input type=hidden name=duration value=" + val.dataset.ssummary + ">";
                    // for the database information
                    }*/
                        
                    $(function(){
                            $('#main_duration_inputs button').on('click', function(){
                                var summary = ($(this).attr("data-sssummary")).toString();
                                $('#main_duration .data_value').val(summary);
                            });
                        });
                    </script>
                        

                    <input class="data_value" type="hidden" name="duration" value="">
                    <input type="text" name="percentage_range" id="percentage_range" value="<?php echo $percentage_range; ?>">
                    <!-- advanced scripting 101, what I want to display choose the value based on previous input, should I just use a <input type="hidden" name="percentage_range" value="">-->
                </div>

                <hr>

                <div id="main_how">

                    <h1>How will we get in?</h1>
                    <br>
                    <p>
                        <?php echo $fields->getField('enter')->getHTML(); ?>
                    </p>

                    <div id="main_how_inputs">

                        <div class="how_input">
                            <div><button type="button" data-ssummary="I'll be home"><i aria-hidden class="fas fa-user" title="Choose I'll be home"></i></button></div>
                            <p class="how_input_text">I'll be home</p></div>


                        <!--<div class="how_input">
                            <div><button type="button" data-ssummary="I'll leave the door unlocked"><i aria-hidden class="fas fa-unlock" title="Choose leave door unlocked"></i></button></div>
                            <p class="how_input_text">I'll leave the door unlocked</p></div>-->


                        <div class="how_input">
                            <div><button type="button" data-ssummary="I'll hide a key" value="E.g. The key is inside the gnome."><i aria-hidden class="fas fa-key" title="Choose I'll hide a key"></i></button></div>
                            <p class="how_input_text">I'll hide a key</p></div>


                        <div class="how_input">
                            <div><button type="button" data-ssummary="I have an alarm" value="E.g. #4824"><i aria-hidden class="fas fa-align-center" title="Choose I have an alarm"></i></button></div>
                            <p class="how_input_text">I have an alarm</p></div>


                        <div class="how_input">
                            <div><button type="button" data-ssummary="Other" value=""><i aria-hidden class="fas fa-feather" title="Choose other method of entry"></i></button></div>
                            <p class="how_input_text">Other</p></div>

                    </div>
                    
                    <script>
                        /*function returnEntryInstructions(val) {
                        document.querySelector('#main_how .data_value:nth-of-type(1)').innerHTML = "<input type=text name=enter value=" + val.dataset.ssummary + ">";
                        return false;
                            // for the database information
                        }*/
                        
                        $(function(){
                            $('.how_input button').on('click', function(){
                                var entry_method = ($(this).attr("data-ssummary")).toString();
                                $('#main_how .data_value:nth-of-type(1)').val(entry_method);
                            });
                        });
                    </script>

                    <input class="data_value" type="text" name="enter" value="">
                        <!-- the input is summoned here with the name -- enter -->

                    <span class="data_value">
                        <!-- this is to fill space, it's already given an area at enter_instructions, for future reference --></span>

                    

                    <script>
                        /*$(function(){
                    $('#main_how .how_input button').on('click', function(){
                        $('#main_how .data_value:nth-of-type(1)').html(<'input type=text name=duration value= + val.dataset.ssummary + >');
                                                });
                                                            
                                            });*/

                    // I'll learn it with jQuery one day -- calling dataset with jQuery

                </script>

                    <div id="enter_instructions_all">

                        <div id="enter_instructions">
                            <!-- if click , html = "" , one div -->
                            <!-- textarea name of enter_instructions is entered here -->
                        </div>

                    </div>
                    <br>
                    <?php echo $fields->getField('enter_instructions')->getHTML(); ?>
                </div>

                <!-- how to enter supplemental code -->

                <script>
                    $(function() {
                    var Home = $('#main_how_inputs .how_input:nth-of-type(1) button');
                    var Unlocked = $('#main_how_inputs .how_input:nth-of-type(2) button');
                    var Key = $('#main_how_inputs .how_input:nth-of-type(3) button');
                    var Alarm = $('#main_how_inputs .how_input:nth-of-type(4) button');
                    var Other = $('#main_how_inputs .how_input:nth-of-type(5) button');

                    // this may need some revisiting case the data upload does not work

                    $(Home).on('click', function() {
                        $('#enter_instructions').html("");
                    });

                    $(Unlocked).on('click', function() {
                        $('#enter_instructions').html("");
                    });

                    $(Key).on('click', function() {
                        var Instructions = $(this).attr('value');
                        $('#enter_instructions').html("<div id=enter_title><h3>Instructions</h3></div><p id=enter_example></p><textarea name='enter_instructions' id=enter_textarea></textarea>");
                        $('#enter_example').html(Instructions);
                    });

                    $(Alarm).on('click', function() {
                        var Instructions = $(this).attr('value');
                        $('#enter_instructions').html("<div id=enter_title><h3>Instructions</h3></div><p id=enter_example></p><textarea name='enter_instructions' id=enter_textarea></textarea>");
                        $('#enter_example').html(Instructions);
                    });

                    $(Other).on('click', function() {
                        $('#enter_instructions').html("<div id=enter_title><h3>Instructions</h3></div><p id=enter_example></p><textarea name='enter_instructions'  id=enter_textarea></textarea>");
                        $('#enter_example').html(Instructions);
                    });

                    $('.calculate_baths').change();
                    $('.calculate_bdrms').change();

                    $('#main_duration_inputs button').on('click', function() {
                        $('#main_duration_inputs button').removeClass('active_duration');
                        $(this).addClass('active_duration');
                        // makes sense
                    });

                });

            </script>

                <hr>

                <!--<div id="main_payment">

                    <h1>Payment Details</h1>
                    <p>Enter your payment information below. You will be charged after the service has been done.</p>

                    <div id="main_payment_inputs">

                        <input type="text" placeholder="Card number">
                        <input type="text" placeholder="MM/YY">
                        <input type="text" placeholder="CVC">

                

                    </div>

                </div>

                <hr> this section is closed off for stripe implementation-->

                <!-- stripe api, i haven't set up a form yet -->

                <!-- stripe api -->

                <!-- should we make this whole thing a form? -->
                <!-- data gathering -->
                <!-- should the charge and the information be done all in one?-->
                <!-- i can send it to index -> charge -> include payment confirmation -> and say successful, -> also need field validation -->



                <div id="main_more_info">

                    <h1>Want to let us know anything else?</h1>

                    <textarea name="more_information" rows="4" cols="50" placeholder="Is there anything else you would like us to know?"></textarea>

                </div>

                <hr>

                <div id="main_discount_code">
                    <h1>Discount code</h1>
                    <p>If you have a discount code or gift card, enter it here.</p>
                    <div id="main_discount_inputs">
                        <input class="coupon" name="card_code">
                        <input id="coupon_return" value="0">
                        <button>APPLY</button>
                    </div>
                </div>

                <hr>

                <div id="main_payment">

                    <div class="form-row">
                        <label for="card-element">
                            <h1>Select Payment</h1>
                        </label>
                        <p id="statement">Enter your card information below. You will be charged after service has been rendered. If you prefer paying with check or cash, please notify us by phone or email.</p>
                        <p id="disclaimer">* Prices are subject to change if the condition of the house is outside of expectations. If this were to be the case, we would contact you prior to cleaning for approval.</p>
                        <div id="card-element">

                        </div>

                        <div id="card-errors" role="alert"></div>
                    </div>

                </div>


                <!--<div id="main_tip">
                
                <h1>Tips are not expected but always appreciated</h1>
                <input type="text" name="tip" value="" placeholder="0.00">
                
                </div>-->
                
                <input id="total_submit" type="submit" value="BOOK NOW">
                <!--<?php if(isset($token)) { echo $token; } else { echo ""; }; ?>-->
                
                <script src="https://js.stripe.com/v3/"></script>
                <script src="wp-content/themes/activeclean1/js/charge.js"></script>
        </div>

        <!-- end of form test -->

        <!--main-->

        <!--side-->
        <?php 
        
$bedroomCostFactor = [0, 30, 60, 90, 120, 150];
$bathroomCostFactor = [0, 20, 40, 60, 80, 100];
$percentageFactor = [0, 5, 15, 10, 20];    

if (isset($bed_range) && !empty($bed_range)) {

if ($bed_range == 1) {
    $bed_cost = $bedroomCostFactor[0];
} else if ($bed_range == 2){
    $bed_cost = $bedroomCostFactor[1];
} else if ($bed_range == 3){
    $bed_cost = $bedroomCostFactor[2];
} else if ($bed_range == 4){
    $bed_cost = $bedroomCostFactor[3];
} else if ($bed_range == 5){
    $bed_cost = $bedroomCostFactor[4];
} else if ($bed_range == 6){
    $bed_cost = $bedroomCostFactor[5];
}
}
    
if(isset($bath_range) && !empty($bath_range)) {
if ($bath_range == 1) {
    $bath_cost = $bathroomCostFactor[0];
} else if ($bath_range == 2){
    $bath_cost = $bathroomCostFactor[1];
} else if ($bath_range == 3){
    $bath_cost = $bathroomCostFactor[2];
} else if ($bath_range == 4){
    $bath_cost = $bathroomCostFactor[3];
} else if ($bath_range == 5){
    $bath_cost = $bathroomCostFactor[4];
} else if ($bath_range == 6){
    $bath_cost = $bathroomCostFactor[5];
}
}

if(isset($percentage_range) && !empty($percentage_range)) {
                
if ($percentage_range == 0) {
    $percentage_cost = $percentageFactor[0];
} else if ($percentage_range == 5){
    $percentage_cost = $percentageFactor[1];
} else if ($percentage_range == 15){
    $percentage_cost = $percentageFactor[2];
} else if ($percentage_range == 10){
    $percentage_cost = $percentageFactor[3];
} else if ($percentage_range == 20){
    $percentage_cost = $percentageFactor[4];
}
}
?>


        <div id="side">
            <div id="side_section">
                <div class="side_section_adv">
                    <div class="side_book_adv"><img src="wp-content/themes/activeclean1/images/sb_clock.png"></div>
                    <h3>SAVES YOU TIME</h3>
                    <p>Our service helps you live smarter, giving you time to focus on what's most important.</p>
                </div>
                <div class="side_section_adv">
                    <div class="side_book_adv"><img src="wp-content/themes/activeclean1/images/sb_shield.png"></div>
                    <h3>SAFETY FIRST</h3>
                    <p>We rigorously vet all of our Cleaners, who undergo identity checks as well as in-person interviews.</p>
                </div>
                <div class="side_section_adv">
                    <div class="side_book_adv"><img src="wp-content/themes/activeclean1/images/sb_thumbsup.png"></div>
                    <h3>ONLY THE BEST QUALITY</h3>
                    <p>Our skilled professionals go above and beyond on every job. Cleaners are rated and reviewed after each task.</p>
                </div>
                <div class="side_section_adv">
                    <div class="side_book_adv"><img src="wp-content/themes/activeclean1/images/sb_leaf.png"></div>
                    <h3>EASY TO GET HELP</h3>
                    <p>Select your ZIP code, number of bedrooms and bathrooms, date and relax while we take care of your home.</p>
                </div>
                <div class="side_section_adv">
                    <div class="side_book_adv"><img src="wp-content/themes/activeclean1/images/sb_comms.png"></div>
                    <h3>SEAMLESS COMMUNICATION</h3>
                    <p>Online communication makes it easy for you to stay in touch with your Cleaners.</p>
                </div>
                <div class="side_section_adv">
                    <div class="side_book_adv"><img src="wp-content/themes/activeclean1/images/sb_visa.png"></div>
                    <h3>CASH FREE PAYMENT</h3>
                    <p>Pay securely online only when the cleaning is complete.</p>
                </div>
            </div>
            <div id="side_section">
                <div id="side_section_content">
                    <h1>Book Summary</h1>
                    <hr>
                    <div id="side_summary">
                        <div class="side_sections">
                            <div class="side_rows"><i class="fas fa-home"></i></div>
                            <div class="side_rows"><span id="bdrm_summary">
                                    <?php if(isset($bed_range)) echo $bed_range;?> Bedrooms</span></div>
                        </div>

                        <div class="side_sections">
                            <div class="side_rows"><i class="fas fa-calendar-alt"></i></div>
                            <div class="side_rows"><span id="date_summary">Choose service date...</span></div>
                        </div>

                        <div class="side_sections">
                            <div class="side_rows"><i class="fas fa-balance-scale"></i></div>
                            <div class="side_rows"><span id="duration_summary">
                                    <?php if(isset($duration_range)) { echo $duration_range; } else if (!isset($duration_range)){ echo "One time service"; } ?></span></div>
                        </div>

                    </div>
                    <hr>

                    <?php

$subtotal = "100.00";

$tax = number_format($subtotal * .0725, 2);
$total = $subtotal + $tax;
$discount = number_format(($subtotal * $percentage_cost) / 100, 2);
    
?>

                    <div id="side_payment">
                        <div class="side_payment_row">
                            <div class="total_text">SUB-TOTAL</div>
                            <div class="amount"><span id="tydollarsign">$</span><span id="subtotal">
                                    <?php echo $subtotal;//echo "85.00";?></span></div>
                        </div>
                        
                        <div class="side_payment_row">
                            <div class="total_text">DISCOUNT</div>
                            <div class="amount"><span id="tydollarsign">$</span><span id="discount">
                                    <?php if(is_numeric($discount)) {echo $discount;} else { echo "hi";}//echo "85.00";?></span></div>
                        </div>
                        
                        <div class="side_payment_row">
                            <div class="total_text">SALES TAX</div>
                            <div class="amount"><span id="tydollarsign">$</span><span id="tax">
                                    <?php echo $tax; //echo "6.16";?></span></div>
                        </div>

                        <div class="side_payment_row">
                            <div class="total_text">TOTAL</div>
                            <div class="amount"><span id="tydollarsign">$</span><span id="amount">
                                    <?php echo $total;//echo "91.16";?></span></div>
                        </div>

                        <div id="percentage">
                            <?php if(isset($percentage_cost)) { echo $percentage_cost; } else { echo ""; } ?>
                        </div><br>
                        
                        
                        
                        <div id="bed_display"></div><br>
                        <div id="bed_cost">
                            <?php if(isset($bed_cost)) { echo $bed_cost; } else { echo ""; } ?>
                        </div><br>
                        
                        <div id="bath_display"></div><br>
                        <div id="bath_cost">
                            <?php if(isset($bath_cost)) { echo $bath_cost; } else { echo ""; } ?>
                        </div><br>

                    </div>
                    <input type="text" id="subtotal_db" name="subtotal_db" value="">
                    <input type="text" id="item_sales_tax_db" name="item_sales_tax_db" value="">
                    <input type="text" id="total_amount_db" name="total_amount_db" value="">
                </div>
            </div>
        </div>

        <!--side-->
    </div>

</div>

</form>
<script>
    var sideBar = $('#side_section:nth-of-type(2)');
    var sideScroll = $('#side_section:nth-of-type(2)').offset().top;
    var sideScrollHeight = $('#side_section:nth-of-type(2)').height();

    //var endSide = $('#main').offset().top;

    $(window).scroll(function() {
        var currentScroll = $(window).scrollTop();

        var endScroll = ($('#main').offset().top + $('#main').outerHeight(true)) - '515';

        var sideWidth = $('#side').width();

        // taking the end of the main height

        // this is a fixed number

        if (currentScroll >= sideScroll && ($(window).width() > '1150')) {
            $('#side_section:nth-of-type(2)').css({
                position: 'fixed',
                top: '0',
                width: sideWidth
            });

        } else {
            $('#side_section:nth-of-type(2)').css({
                position: 'relative',
                width: '100%'
            });
        }

        if (currentScroll >= endScroll && ($(window).width() > '1150')) {

            // if currentScroll surpasses the endScroll

            var diff = endScroll - currentScroll;

            // the end is this, the current is that, and we make it stay at the different between the two, at this exact point 

            // but only when the current scroll is beyond the end of this point

            $('#side_section:nth-of-type(2)').css({
                top: diff,
            });
        }

        if ($(window).width() <= '1150') {
            $('#side_section:nth-of-type(2)').css({
                position: 'relative',
            });
        }


    });


    /*$(function(){
        
        var parentWidth = $('#side').width();
        var childWidth = $('#side_section:nth-of-type(2)').width(parentWidth);
        
        $(window).resize(
        function(){
            adjustWidth();
        }
    )
        
    });*/

</script>
<script>
    /*
                             var basePrice = 85.00;
                             var salesTax = .0725;
                             var itemPrice = document.getElementById('subtotal');
                             var itemSalesTax = document.getElementById('tax');
                             var totalAmount = document.getElementById('amount');
                             
                             (function () {
                                 "use strict";
                                 var selects = document.getElementsByClassName('calculate'), select;
                                 //all selects
                                 //select is each of these classes of selects
                                 for (var i = 0; select = selects[i]; i++) {
                                     select.addEventListener('change',function (){
                                         //we add an event listener to each of these selects
                                         var newPrice = basePrice;
                                         //initialize the new price
                                         var selectedItems = document.querySelectorAll('.calculate option:checked'), selected;
                                         //each select has options, we choose the once that is chosen
                                         for(var x = 0; selected = selectedItems[x]; x++) {
                                             newPrice += Number(selected.getAttribute('data-price'));
                                         //each each chosen has a data attr
                                             
                                         }
                                         itemPrice.innerHTML = newPrice.toFixed(2);
                                         itemSalesTax.innerHTML = (newPrice * salesTax).toFixed(2);
                                         totalAmount.innerHTML = (parseFloat(itemPrice.innerHTML) + parseFloat(itemSalesTax.innerHTML)).toFixed(2);
                                     },false);
                                 }
                             })();
                            */
    var basePrice = 100.00;
    var bedroomCostFactor = [0, 30, 60, 90, 120, 150];
    var bathroomCostFactor = [0, 20, 40, 60, 80, 100];
    var percentageFactor = [0, 5, 15, 10, 20];

    function returnPercentage(val) {
        document.querySelector('#percentage').innerHTML = val.value;
        document.querySelector('#percentage_range').value = val.value;
        // advanced scripting, to allow us to move back to the page with values set in place.
    }



    // these return input functions aren't playing very nicely, i can't use it to convert the input text fully... how can i get it into an input... because you can't get the name/value of an html box...

    // solved by using dashes ... 



    document.querySelector('.calculate_bdrms').addEventListener('change', function(evt) {
        //var value = evt.target.value;
        //var dataQuery = document.querySelector('.calculate_bdrms option:checked').getAttribute('data-price');
        var sel = document.querySelector('.calculate_bdrms option:checked');
        var value = parseInt(sel.dataset.price);
        var summaryValue = sel.dataset.summary;
        //var value = parseInt(document.querySelector('[data-price]').getAttribute('data-price'));
        //var value = dataQuery.dataset.price;
        //console.log(value);
        // value will be a string. Coercing to a number using +value
        //var bedCost = parseInt(getBedroomCost(+value), 10).toFixed(2);
        document.querySelector('#bed_display').innerHTML = value;
        document.querySelector('#bed_cost').innerHTML = value;
        document.querySelector('#bdrm_summary').innerHTML = summaryValue;
        getTotalCost();
    });

    document.querySelector('.calculate_baths').addEventListener('change', function(evt) {
        var sel = document.querySelector('.calculate_baths option:checked');
        var value = parseInt(sel.dataset.price);
        //var value = evt.target.value;
        // value will be a string. Coercing to a number using +value
        //var bathCost = parseInt(getBathroomCost(+value), 10).toFixed(2);
        //getBathroomCost (val) { return bathroomCostFactor[val-1] }
        //it's returning the arrays value based on the changed input, assigned to a variable
        //evt.target.value = input.value
        document.querySelector('#bath_display').innerHTML = value;
        document.querySelector('#bath_cost').innerHTML = value;
        getTotalCost();
    });

    var taxRate = .0725;
    var subTotal = document.querySelector('#subtotal');
    // subtotal set by PHP script
    var itemSalesTax = document.querySelector('#tax');
    // tax set by PHP script
    var totalAmount = document.querySelector('#amount');
    // amount set by PHP script
    var discount = document.querySelector('#discount');
    
    

    var bdrmSummary = document.querySelector('#bdrm_summary');
    var dateSummary = document.querySelector('#date_summary');
    var durSummary = document.querySelector('#duration_summary');

    var subtotal_db = document.querySelector('#subtotal_db');
    var item_sales_tax_db = document.querySelector('#item_sales_tax_db');
    var total_amount_db = document.querySelector('#total_amount_db');

    function getTotalCost() {
        var bedCost = parseInt(document.querySelector('#bed_cost').innerHTML);
        var bathCost = parseInt(document.querySelector('#bath_cost').innerHTML);
        var percentage = parseInt(document.querySelector('#percentage').innerHTML);
        var couponDiscount = parseInt(document.querySelector('#coupon_return').value);
        var selectExtras = parseInt(document.querySelector('#select_extras').value);

        var percentageOff = percentage / 100;
        newPrice = basePrice;
        newPriceVar = basePrice;

        if (!percentage || percentage == 0) {
            //var subTotalPrice = newPrice += parseInt(bathCost + bedCost);
            //var itemSalesTaxPrice = (subTotal.innerHTML * taxRate).toFixed(2);
            //var totalAmountPrice = (parseFloat(subTotal.innerHTML) + parseFloat(itemSalesTax.innerHTML)).toFixed(2);
            //subTotal.innerHTML = subTotalPrice;
            //itemSalesTax.innerHTML = itemSalesTaxPrice;
            //totalAmount.innerHTML = totalAmountPrice;

            subTotal.innerHTML = newPrice += parseInt(bathCost + bedCost) - couponDiscount + selectExtras;
            
            discount.innerHTML = "0.00";

            itemSalesTax.innerHTML = (subTotal.innerHTML * taxRate).toFixed(2);

            totalAmount.innerHTML = (parseFloat(subTotal.innerHTML) + parseFloat(itemSalesTax.innerHTML)).toFixed(2);
            // first total amount

            subtotal_db.value = subTotal.innerHTML;
            
            item_sales_tax_db.value = (subTotal.innerHTML * taxRate).toFixed(2);
            
            total_amount_db.value = (parseFloat(subTotal.innerHTML) + parseFloat(itemSalesTax.innerHTML)).toFixed(2);

        } else if (isNaN(bathCost) || isNaN(bedCost) || isNaN(percentage)) {
            //var subTotalPrice = "85.00";
            //var itemSalesTaxPrice = "6.16";
            //var totalAmountPrice = "91.16";

            subTotal.innerHTML = "100.00";

            itemSalesTax.innerHTML = "7.25";

            totalAmount.innerHTML = "107.25";

            subtotal_db.value = "100.00";
            item_sales_tax_db.value = "7.25";
            total_amount_db.value = "107.25";
            //subTotal.innerHTML = subTotalPrice;
            //itemSalesTax.innerHTML = itemSalesTaxPrice;
            //totalAmount.innerHTML = totalAmountPrice;
            // second total amount
        } else {
            //var subTotalPrice = ((newPriceVar += parseInt(bathCost + bedCost)) - ((newPrice += parseInt(bathCost + bedCost)) * percentageOff)).toFixed(2);
            //var itemSalesTaxPrice = (subTotal.innerHTML * taxRate).toFixed(2);
            //var totalAmountPrice = (parseFloat(subTotal.innerHTML) + parseFloat(itemSalesTax.innerHTML)).toFixed(2);

            //subTotal.innerHTML = subTotalPrice;
            //itemSalesTax.innerHTML = itemSalesTaxPrice;
            //totalAmount.innerHTML = totalAmountPrice;
            
            subTotal.innerHTML = (((newPriceVar += parseInt(bathCost + bedCost)) - ((newPrice += parseInt(bathCost + bedCost)) * percentageOff)) - couponDiscount + selectExtras).toFixed(2);
            
            // we take original, but we also take percentage, which is always set.

            itemSalesTax.innerHTML = (subTotal.innerHTML * taxRate).toFixed(2);

            totalAmount.innerHTML = (parseFloat(subTotal.innerHTML) + parseFloat(itemSalesTax.innerHTML)).toFixed(2);
            
            discount.innerHTML = ((newPriceVar += parseInt(bathCost + bedCost)) * (percentage / 100)).toFixed(2);

            subtotal_db.value = subTotal.innerHTML;

            item_sales_tax_db.value = (subTotal.innerHTML * taxRate).toFixed(2);

            total_amount_db.value = (parseFloat(subTotal.innerHTML) + parseFloat(itemSalesTax.innerHTML)).toFixed(2);
            // third total amount
        }
    }

    function getBedroomCost(val) {
        return bedroomCostFactor[val - 1];
    }

    function getBathroomCost(val) {
        return bathroomCostFactor[val - 1];
    }

</script>

<?php include 'footer.php'; ?>
