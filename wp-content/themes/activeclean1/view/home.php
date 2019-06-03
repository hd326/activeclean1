<?php include 'header.php'; ?>

<script>
$(function(){
    var construction = $('#under_construction');
    var constructionHeight = $('#under_construction').height();
    
    $(window).scroll(function(){
        var currentScroll = $(window).scrollTop();
        var endScroll = ($('#hero').offset().top + $('#hero').outerHeight(true)) - '300';

        if (currentScroll >= endScroll) {
            var diff = endScroll - currentScroll;
            $('#under_construction').css({
                top: diff
            });
        } else {
            $('#under_construction').css({
                top: '25%'
            });
        }
        console.log(currentScroll);
        console.log(endScroll);
        console.log(diff);
        console.log(heroHeight);
    });
});    
</script>

<!--
<div id="hero">
    <div role="img" alt="living room" id="form_container_bg"></div>
    <div id="form_container_bg_bg"></div>

    <div id="form_text">
        <h1 id="the-main-ad">Fully Licensed, Bonded & Insured</h1>
        <h2 id="alt-ad">Premier Cleaning Service in Sacramento</h1>
        <h3 id="schedule-ad">Get a Free Quote Instantly and Schedule Your Housecleaning in 60 Secs!</h3>

        <div id="side-hero">
        <div id="additional-hero-test">
        <h5>We clean for:</h5>
            <ul>
            <li>Vacation Rental</li>
                <li>VRBOS</li>
                <li>AIRBNBS</li>
            </ul>
        <h3 id="additional-hero-call">Give us a call at<br> <p id=additional-number><a href="tel:19168007795">+1 (916) 800-7795</a></p></h3>
        </div>
        
        <div id="rental-hero">
        <h4>Get your rental home clean and ready to rent/sell!</h4>
        </div>
            
            <div id="additional-hero-test2">
        <h5>We clean for:</h5>
            <ul>
            <li>Vacation Rental</li>
                <li>VRBOS</li>
                <li>AIRBNBS</li>
            </ul>
        <h3 id="additional-hero-call">Give us a call at<br> <p id=additional-number><a href="tel:19168007795">+1 (916) 800-7795</a></p></h3>
        </div>
        
        <div id="empty-hero"></div>
        </div>

        <br>
    </div> 

    
    <div id="form_container_1">
        <form action="index.php?action=book" method="post">
            <div class="form__fields">
                <div class="form_text_fields">
                    <span class="form_label">Bedrooms: </span><span class="choice_display" id="bed_display">1</span> </div>
                <div class="form_input_field">
                    <input name="bed_range" type="range" min="1" max="6" value="1" class="slider" id="bed_service" oninput="sliderChange(this.value);">
                </div>

                <span id="bed_cost">0</span>
            </div>
            <div class="form__fields">
                <div class="form_text_fields">
                    <span class="form_label">Bathrooms: </span><span class="choice_display" id="bath_display">1</span>
                </div>
                <div class="form_input_field">
                    <input name="bath_range" type="range" min="1" max="6" value="1" class="slider" id="bath_service" oninput="sliderChange2(this.value);">
                </div>

                <span id="bath_cost">0</span>
            </div>
            <div id="form_occurence">

                <div class="form_percentage">
                    <button type="button" id="one" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="0">One time cleaning</button>

                </div>

                <div class="form_percentage">
                    <button type="button" id="two" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="10">Monthly cleaning</button>

                    <span><span id="percentage_off" onclick="returnPercentage();" value="10">10</span>% Off</span>
                </div>

                <div class="form_percentage">
                    <button type="button" id="three" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="20">Bi-weekly cleaning</button>

                    <span><span id="percentage_off" onclick="returnPercentage();" value="20">20</span>% Off</span>
                </div>

                <div class="form_percentage">
                    <button type="button" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="15">Weekly cleaning</button>

                    <span><span id="percentage_off" onclick="returnPercentage();" value="15">15</span>% Off</span>
                </div>
                

                <input type="hidden" name="duration_range" id="range" value="">
                <input type="hidden" name="percentage_range" id="percentage" value="">
            </div>
            
            <div id="submit">

                <button type="submit">SCHEDULE AN APPOINTMENT <span id="tydollasign">$</span><span id="price">85</span><span id="clean">/clean</span></button>

            </div>
        </form>
        </div>
    <div id="guaranteed_symbol"><img src="wp-content/themes/activeclean1/images/sg.png"></div>
        
</div>-->

<div id="hero">
    <div role="img" alt="living room" id="form_container_bg"></div>
    <div id="form_container_bg_bg"></div>
    <div id="hero_holder">
    <div id="hero_sec">
        
        </div>
    <div id="hero_sec">


    <div id="form_text">
        <div class="form_text_holder"><h1 id="the-main-ad">Fully Licensed, Bonded & Insured</h1></div>
        <div class="form_text_holder"><h2 id="alt-ad">Premier Cleaning Service in Sacramento</h1></div>
        <div class="form_text_holder"><h3 id="schedule-ad">Get a Free Quote Instantly and Schedule Your Cleaning in 60 Secs!</h3></div>
        <br>
    </div> 

    
    <div id="form_container_1">
        <form action="index.php?action=book" method="post">
            <div class="form__fields">
                <div class="form_text_fields">
                    <span class="form_label">Bedrooms: </span><span class="choice_display" id="bed_display">1</span> </div>
                <div class="form_input_field">
                    <input name="bed_range" type="range" min="1" max="6" value="1" class="slider" id="bed_service" oninput="sliderChange(this.value);">
                </div>

                <span id="bed_cost">0</span>
            </div>
            <div class="form__fields">
                <div class="form_text_fields">
                    <span class="form_label">Bathrooms: </span><span class="choice_display" id="bath_display">1</span>
                </div>
                <div class="form_input_field">
                    <input name="bath_range" type="range" min="1" max="6" value="1" class="slider" id="bath_service" oninput="sliderChange2(this.value);">
                </div>

                <span id="bath_cost">0</span>
            </div>
            <div id="form_occurence">

                <div class="form_percentage">
                    <button type="button" id="one" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="0">One time cleaning</button>
                </div>

                <div class="form_percentage">
                    <button type="button" id="two" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="10">Monthly cleaning</button>

                    <div class="form_percentage_grid"><div id="percentage_off" onclick="returnPercentage();" value="10">10% Off</div></div>
                </div>

                <div class="form_percentage">
                    <button type="button" id="three" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="15">Bi-weekly cleaning</button>

                    <div class="form_percentage_grid"><div id="percentage_off" onclick="returnPercentage();" value="15">15% Off</div></div>
                </div>

                <div class="form_percentage">
                    <button type="button" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="20">Weekly cleaning</button>

                    <div class="form_percentage_grid"><div id="percentage_off" onclick="returnPercentage();" value="20">20% Off</div></div>
                </div>
                

                <input type="hidden" name="duration_range" id="range" value="">
                <input type="hidden" name="percentage_range" id="percentage" value="">
            </div>
            
            <div id="submit">

                <button type="submit">BOOK AN APPOINTMENT <span id="tydollasign">$</span><span id="price">100</span><span id="clean">/clean</span></button>

            </div>
        </form>
        </div>
    <div id="guaranteed_symbol"><img src="wp-content/themes/activeclean1/images/sg.png"></div>
        
        <div id="banner">
        <div id="banner-text">
        <h4>Get your rental home clean and ready to rent/sell!</h4>
        <div id="banner-text-2">
        <h5>We also clean for:</h5>
            <ul>
                <li>Office</li>
                <li>Vacation Rental</li>
                <li>VRBO</li>
                <li>AIRBNB</li>
            </ul>
        <h3 id="banner-call">Give us a call at:<br> <p id=banner-number><a href="tel:19168007795">+1 (916) 800-7795</a></p></h3>
        </div>
        </div>
        </div>
        </div>
    
    <div id="hero_sec"><!--<div id="additional-hero">
        <h5>We also clean for:</h5>
            <ul>
                <li>Vacation Rental</li>
                <li>VRBO</li>
                <li>AIRBNB</li>
            </ul>
        <h3 id="additional-hero-call">Give us a call at:<br> <p id=additional-number><a href="tel:19168007795">+1 (916) 800-7795</a></p></h3>
        </div>-->
    </div>
</div>
</div>
<!--<div id="hero">
    <div role="img" alt="living room" id="form_container_bg"></div>
    <div id="form_container_bg_bg"></div>
    <div id="hero_holder">
    <div id="hero_sec">
        <div id="additional-hero">
        <h5>We clean for:</h5>
            <ul>
            <li>Vacation Rental</li>
                <li>VRBOS</li>
                <li>AIRBNBS</li>
            </ul>
        <h3 id="additional-hero-call">Give us a call at<br> <p id=additional-number><a href="tel:19168007795">+1 (916) 800-7795</a></p></h3>
        </div>
        </div>
    <div id="hero_sec">


    <div id="form_text">
        <h1 id="the-main-ad">Fully Licensed, Bonded & Insured</h1>
        <h2 id="alt-ad">Premier Cleaning Service in Sacramento</h1>
        <h3 id="schedule-ad">Get a Free Quote Instantly and Schedule Your Housecleaning in 60 Secs!</h3>

        <div id="side-hero">
        
        <div id="rental-hero">
        <h4>Get your rental home clean and ready to rent/sell!</h4>
        </div>
        <div id="additional-hero2">
        <h5>We clean for:</h5>
            <ul>
            <li>Vacation Rental</li>
                <li>VRBOS</li>
                <li>AIRBNBS</li>
            </ul>
        <h3 id="additional-hero-call">Give us a call at<br> <p id=additional-number><a href="tel:19168007795">+1 (916) 800-7795</a></p></h3>
        </div>
        </div>

        <br>
    </div> 

    
    <div id="form_container_1">
        <form action="index.php?action=book" method="post">
            <div class="form__fields">
                <div class="form_text_fields">
                    <span class="form_label">Bedrooms: </span><span class="choice_display" id="bed_display">1</span> </div>
                <div class="form_input_field">
                    <input name="bed_range" type="range" min="1" max="6" value="1" class="slider" id="bed_service" oninput="sliderChange(this.value);">
                </div>

                <span id="bed_cost">0</span>
            </div>
            <div class="form__fields">
                <div class="form_text_fields">
                    <span class="form_label">Bathrooms: </span><span class="choice_display" id="bath_display">1</span>
                </div>
                <div class="form_input_field">
                    <input name="bath_range" type="range" min="1" max="6" value="1" class="slider" id="bath_service" oninput="sliderChange2(this.value);">
                </div>

                <span id="bath_cost">0</span>
            </div>
            <div id="form_occurence">

                <div class="form_percentage">
                    <button type="button" id="one" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="0">One time cleaning</button>

                </div>

                <div class="form_percentage">
                    <button type="button" id="two" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="10">Monthly cleaning</button>

                    <span><span id="percentage_off" onclick="returnPercentage();" value="10">10</span>% Off</span>
                </div>

                <div class="form_percentage">
                    <button type="button" id="three" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="20">Bi-weekly cleaning</button>

                    <span><span id="percentage_off" onclick="returnPercentage();" value="20">20</span>% Off</span>
                </div>

                <div class="form_percentage">
                    <button type="button" onclick="returnPercentage(this);getTotalCost();returnDuration(this);" value="15">Weekly cleaning</button>

                    <span><span id="percentage_off" onclick="returnPercentage();" value="15">15</span>% Off</span>
                </div>
                

                <input type="hidden" name="duration_range" id="range" value="">
                <input type="hidden" name="percentage_range" id="percentage" value="">
            </div>
            
            <div id="submit">

                <button type="submit">SCHEDULE AN APPOINTMENT <span id="tydollasign">$</span><span id="price">85</span><span id="clean">/clean</span></button>

            </div>
        </form>
        </div>
    <div id="guaranteed_symbol"><img src="wp-content/themes/activeclean1/images/sg.png"></div>
            </div>
    
    <div id="hero_sec"></div>
</div>
</div>-->
    <!--<div id="points">

        <div class="point">
            <div class="point_img"><img src="wp-content/themes/activeclean1/images/star.png" alt="Star"></div>
            <div class="point_txt">All Cleaners are Certified & Insured</div>
        </div>
        <div class="point">
            <div class="point_img"><img src="wp-content/themes/activeclean1/images/check.png" alt="Checkmark"></div>
            <div class="point_txt">Trained with thorough checklist</div>
        </div>
        <div class="point">
            <div class="point_img"><img src="wp-content/themes/activeclean1/images/award.png" alt="Award Medal"></div>
            <div class="point_txt">Bring & use quality products</div>
        </div>

    </div>-->

<script>
var basePrice = 100.00;
var bedroomCostFactor = [0, 30, 60, 90, 120, 150];
var bathroomCostFactor = [0, 20, 40, 60, 80, 100];
var percentageFactor = [0, 5, 15, 10, 20];
          

function returnPercentage(val) {
    document.querySelector('#percentage').value = val.value;
    //document.querySelector('#percentage').setAttribute('value', val.value);
}
        
// need the duration html, bed range can replace the other values
        
function returnDuration(val){
    document.querySelector('#range').value = val.innerHTML;
}

document.querySelector('#bed_service').addEventListener('change', function (evt) {
    var value = evt.target.value;
    // value will be a string. Coercing to a number using +value
    var bedCost = parseInt(getBedroomCost(+value), 10).toFixed(2);

    document.querySelector('#bed_display').innerHTML = value;
    document.querySelector('#bed_cost').innerHTML = bedCost;

    getTotalCost();
});


document.querySelector('#bath_service').addEventListener('change', function (evt) {

    var value = evt.target.value;
    // evt[self]
    // target[#bathservice]
    // value[value]

    // what does this amount to? 1-2-3-4-5-6

    // value will be a string. Coercing to a number using +value

    var bathCost = parseInt(getBathroomCost(+value), 10).toFixed(2);

    // what does this amount to? getBathroomCost (val) { return bathroomCostFactor[val-1] }

    // it's returning the arrays value based on the changed input
    // evt.target.value = input.value 

    document.querySelector('#bath_display').innerHTML = value;
    document.querySelector('#bath_cost').innerHTML = bathCost;

    getTotalCost();

})

function getTotalCost() {
    var bedCost = parseInt(document.querySelector('#bed_cost').innerHTML);
    var bathCost = parseInt(document.querySelector('#bath_cost').innerHTML);
    var percentage = parseInt(document.querySelector('#percentage').value);
    var percentageOff = percentage / 100;
    /*these are both values that I've hidden absolutely*/
    newPrice = basePrice;
    newPriceVar = basePrice;
    if (!percentage) {
        document.querySelector('#price').innerHTML = newPrice += parseInt(bathCost + bedCost);
    } else {
        document.querySelector('#price').innerHTML = ((newPriceVar += parseInt(bathCost + bedCost)) - ((newPrice += parseInt(bathCost + bedCost)) * percentageOff)).toFixed(2);
    }
}

function getBedroomCost(val) {
    return bedroomCostFactor[val - 1];
}

function getBathroomCost(val) {
    return bathroomCostFactor[val - 1];
}
</script>

<!-- the form -->

<!-- the awards -->

<!--<div id="awards">
        <div id="awards_logo_h">
            <div class="awards_logo">
            <span id="awards_text">
                <span class="bold">R</span><span class="normal">esidential</span><br><br>
                <span class="space">Cleaning</span><br><br>
                <span class="space">Mastery</span>
            </span>
            </div>
            <div class="awards_logo">
            <img src="images/awards2.png">
            </div>
            <div class="awards_logo">
            <img src="images/awards2.png">
            </div>
            <div class="awards_logo">
            <img src="images/awards2.png">
            </div>
            <div class="awards_logo">
            <img src="images/awards2.png">
            </div>
        </div>
    </div>
-->
<!-- the how -->

<div id="how_it_works">

    <div id="how_it_works_wrapper">

        <div id="how_it_works_title">
            <h1>HOW IT WORKS</h1>
        </div>

        <div id="how_it_works_container">

            <div class="how_it_works_section">
                <!--<div class="how_it_works_img_icon"><img src="wp-content/themes/activeclean1/images/how_1-1.png"></div>-->
                
                <div class="how_it_works_img">
                    
                    <div class="how_it_works_img_icon"><img src="wp-content/themes/activeclean1/images/how_1-1.png"></div>
                    
                    <div class="how_it_works_img_helper"></div><img src="wp-content/themes/activeclean1/images/how_1.jpg" alt="Woman booking online">
                    <!--<div class="how_it_works_img_icon"></div>--> 
                    <img src="wp-content/themes/activeclean1/images/how_1-1.png">
                    
                </div>
                <div class="how_it_works_explanation"></div>
                <div class="how_it_works_text">
                    <h1>BOOK</h1>
                    <p>Schedule an appointment online for your house cleaning</p>
                </div>
            </div>

            <div class="how_it_works_section">
                <!--<div class="how_it_works_img_icon"><img src="wp-content/themes/activeclean1/images/how_1-1.png"></div>-->
                <div class="how_it_works_img"><div class="how_it_works_img_icon"><img src="wp-content/themes/activeclean1/images/how_1-1.png"></div>
                    <div class="how_it_works_img_helper"></div><img src="wp-content/themes/activeclean1/images/how_3.jpg" alt="Vacuum cleaning carpet"><!--<div class="how_it_works_img_icon"></div>--> <img src="wp-content/themes/activeclean1/images/how_1-2.png">
                </div>
                <div class="how_it_works_explanation"></div>
                <div class="how_it_works_text">
                    <h1>CLEAN</h1>
                    <p>A professional house cleaner comes over and cleans your place</p>
                </div>
            </div>


            <div class="how_it_works_section">
                <!--<div class="how_it_works_img_icon"><img src="wp-content/themes/activeclean1/images/how_1-1.png"></div>-->
                <div class="how_it_works_img"><div class="how_it_works_img_icon"><img src="wp-content/themes/activeclean1/images/how_1-1.png"></div>
                    <div class="how_it_works_img_helper"></div><img src="wp-content/themes/activeclean1/images/how_2.jpg" alt="Woman enjoying coffee"><!--<div class="how_it_works_img_icon"></div>--> <img src="wp-content/themes/activeclean1/images/how_1-3.png">
                </div>
                <div class="how_it_works_explanation"></div>
                <div class="how_it_works_text">
                    <h1>RELAX</h1>
                    <p>Sit back and relax, enjoy your sparkling clean home!</p>
                </div>
            </div>

        </div>

        <!--<div class="how_it_works_submit">
            <a href="index.php?action=book&bed_range=1&bath_range=1&percentage_range=0&duration_range="><button type="button">BOOK APPOINTMENT</button></a>
        </div>-->

    </div>

</div>

<!-- the how -->

<!-- the -->

<div id="about">

    <div id="about_bg"></div>
    <div id="about_bg_ol"></div>
    <div id="about_main">
        <h1>YOUR TRUST IS OUR PRIORITY</h1>

        <div id="about_sections">

            <div class="about_section">
                <div class="about_img"><img src="wp-content/themes/activeclean1/images/trusttime.png" alt="clock with dollar sign"></div>
                <div class="about_title">SAVES YOU TIME</div>
                <div class="about_desc">Active Clean 1 does the house work for you so you can have time to pursue the important things. </div>
            </div>

            <div class="about_section">
                <div class="about_img"><img src="wp-content/themes/activeclean1/images/trustshield.png" alt="shield with check mark"></div>
                <div class="about_title">SAFETY FIRST</div>
                <div class="about_desc">We strictly screen all of our cleaners. Employees must pass a rigorous interview process. </div>
            </div>

            <div class="about_section">
                <div class="about_img"><img src="wp-content/themes/activeclean1/images/trustdiamond.png" alt="shining diamond"></div>
                <div class="about_title">SUPERIOR SERVICE</div>
                <div class="about_desc">Our cleaning specialists make sure your home is clean on every job. After they finish, you can login in and give your team anonymous feedback.</div>
            </div>

            <div class="about_section">
                <div class="about_img"><img src="wp-content/themes/activeclean1/images/trustmountain.png" alt="mountain with flag"></div>
                <div class="about_title">EASY SETUP</div>
                <div class="about_desc">Select your number of bedrooms and bathrooms. Pick a convenient date and time. Then relax while we make your home sparkle.</div>
            </div>

            <div class="about_section">
                <div class="about_img"><img src="wp-content/themes/activeclean1/images/trustcomm.png" alt="chat boxes with text"></div>
                <div class="about_title">STANDBY COMMUNICATION</div>
                <div class="about_desc">Our user-friendly site makes it easy for you to stay in touch with Active Clean 1, reach out to us at any time.</div>
            </div>

            <div class="about_section">
                <div class="about_img"><img src="wp-content/themes/activeclean1/images/trustsecure.png" alt="credit card with lock"></div>
                <div class="about_title">SECURE PAYMENTS</div>
                <div class="about_desc">Pay for your maid service online — only when the cleaning is complete. (Prefer to pay with check or cash? Just call us.)</div>
            </div>
        </div>

        <div id="learn_more">
            <a href="index.php?action=questions"><input type="button" value="LEARN MORE"></a>
        </div>
    </div>
</div>

<!-- about -->

<!-- mobile -->

<div id="mobile">
    <div id="mobile_img"><a href="index.php?action=book&bed_range=1&bath_range=1&percentage_range=0&duration_range="><img src="wp-content/themes/activeclean1/images/iphone-v2-complete.gif" alt="iphone with front page booking screen"></a></div>
    <div id="mobile_desc">
        <h1>SCHEDULE YOUR HOUSECLEANING ON THE RUN</h1>
        <p>Active Clean 1 is mobile friendly. So you can book your cleaning service on your phone just as you could on your computer. </p>
    </div>
</div>

<!--<div id="testimonials">
    <div role="img" alt="living room" id="testimonials_bg">
        <div id="testimonials_bg_bg"></div>
    </div>

    <div id="testimonials_content_wrap">
        <h1>HAPPY CUSTOMERS</h1>

        <div id="testimonials_content"> -->

<!--above is needed for current testimonial-->

            <!--<div id="testimonials_content_sliders">

                    <div class="testimonials_section">
                        <div class="testimonials_text_holder">
                            <div class="testimonials_text">
                                <blockquote><br>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tempor auctor gravida. Praesent consequat congue elit a pretium. Sed hendrerit nunc malesuada lectus blandit, sed condimentum dui sodales. Donec quis sagittis tortor. Aliquam molestie faucibus erat sed sagittis. Suspendisse non augue eget nibh euismod accumsan sit amet at tortor. Donec eget magna scelerisque, laoreet lacus at, congue lectus.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="testimonials_section">
                        <div class="testimonials_text_holder">
                            <div class="testimonials_text">
                                <blockquote><br>
                                    <p>Vivamus ornare, elit eget eleifend gravida, est augue posuere turpis, at euismod mauris enim vel quam. Nulla vel tristique lacus. Aenean sollicitudin pellentesque tortor, nec efficitur erat pharetra eget. Mauris convallis fermentum purus ac laoreet. Morbi aliquam maximus metus, posuere pellentesque est suscipit ac. Suspendisse potenti. Phasellus porta turpis sit amet turpis elementum, et condimentum ligula ultrices.

                                        Etiam non orci nec elit ultrices auctor. Ut magna nulla, imperdiet vitae placerat ut, eleifend ut nulla. Proin sit amet tortor est. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque aliquet molestie dui, ut fermentum orci. Nunc quis nulla a libero tincidunt consequat in sed turpis. Nunc faucibus risus consequat, accumsan augue at, luctus.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>

                    <div class="testimonials_section">
                        <div class="testimonials_text">
                            <blockquote>

                            </blockquote>
                        </div>
                    </div>

                    <div class="testimonials_section">
                        <div class="testimonials_text">
                            <blockquote>

                            </blockquote>
                        </div>
                    </div>


                    <div class="testimonials_section">
                        <div class="testimonials_text">
                            <blockquote>

                            </blockquote>
                        </div>
                    </div>

                    <div class="testimonials_section">
                        <div class="testimonials_text">
                            <blockquote>

                            </blockquote>
                        </div>
                    </div>


                    <!--
                    <div class="testimonials_group">

                        <div class="testimonials_section">
                            <div class="testimonials_text">
                                <blockquote>
hi
                                </blockquote>
                            </div>
                        </div>

                        <div class="testimonials_section">
                            <div class="testimonials_text">
                                <blockquote>
hi
                                </blockquote>
                            </div>
                        </div>

                    </div>

                </div>
-->

            <!-- Anew with testimonials content-->

<!-- below is needed for current testimonial

            <div id="testimonial_content_holder">

                <div class="testimonial">
                    <div class="testimonial_header">
                        <div role="img" alt="Woman smiling" class="img"></div>
                        <div class="name">Lorraine Sykes</div>
                    </div>
                    <div class="testimonial_text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at egestas lectus. Maecenas viverra, odio non aliquam pretium, quam urna interdum est, sed pharetra velit nisl ut dolor. Sed sed aliquet risus. Fusce in lobortis justo, non sodales leo. Proin quis turpis vel massa molestie malesuada. Quisque aliquet fringilla tincidunt. Duis dignissim et nisi id euismod. Sed pulvinar vitae odio ut vestibulum. Nullam aliquet pellentesque urna eget finibus. Sed eget orci in mi consequat suscipit.
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial_header">
                        <div role="img" alt="Man with glasses smiling" class="img"></div>
                        <div class="name">Samuel Michaels</div>
                    </div>
                    <div class="testimonial_text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at egestas lectus. Maecenas viverra, odio non aliquam pretium, quam urna interdum est, sed pharetra velit nisl ut dolor. Sed sed aliquet risus. Fusce in lobortis justo, non sodales leo. Proin quis turpis vel massa molestie malesuada. Quisque aliquet fringilla tincidunt. Duis dignissim et nisi id euismod. Sed pulvinar vitae odio ut vestibulum. Nullam aliquet pellentesque urna eget finibus. Sed eget orci in mi consequat suscipit.
                    </div>
                </div>
                <div class="testimonial">
                    <div class="testimonial_header">
                        <div role="img" alt="Woman with curly hair smiling" class="img"></div>
                        <div class="name">Janice Stevenson</div>
                    </div>
                    <div class="testimonial_text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at egestas lectus. Maecenas viverra, odio non aliquam pretium, quam urna interdum est, sed pharetra velit nisl ut dolor. Sed sed aliquet risus. Fusce in lobortis justo, non sodales leo. Proin quis turpis vel massa molestie malesuada. Quisque aliquet fringilla tincidunt. Duis dignissim et nisi id euismod. Sed pulvinar vitae odio ut vestibulum. Nullam aliquet pellentesque urna eget finibus. Sed eget orci in mi consequat suscipit.
                    </div>
                </div>
            </div>

            <div id="testimonials_button"><a href="index.php?action=book&bed_range=1&bath_range=1&percentage_range=0&duration_range="><input type="button" value="Book Now"></a></div>

        </div>


    </div>
</div>

-->

<!--booking section-->

<div id="book">

    <div id="book_contents">
        <div id="book_level">
            <h1>BOOK A HOUSE CLEANING NOW!</h1>
            <!--<a href="index.php?action=book&bed_range=1&bath_range=1&percentage_range=0&duration_range="><button type="button">BOOK APPOINTMENT</button></a>-->
            <a href="index.php?action=home"><button type="button">BOOK APPOINTMENT</button></a>
        </div>
    </div>

</div>

<!--booking section-->
<!--rental,foreclosure,post-construction, move-in/out cleaning, carpet,cleaning, junk removal, interior painting-->
<!--other services-->

<div id="other">
    <div id="other_ol"></div>
    <img id="other_services" src="wp-content/themes/activeclean1/images/other_services.png" alt="Skyscraper Buildings">
    <h1>WE ALSO OFFER SERVICES FOR...</h1>


    <div id="other_holder">
        <div class="other_service">
            <p class="other_img"><img src="wp-content/themes/activeclean1/images/other_rental.png" alt="Rental Home"></p>
            <h3 class="other_name">Rental Homes Cleaning</h3>
        </div>
        <div class="other_service">
            <p class="other_img"><img src="wp-content/themes/activeclean1/images/other_foreclosure.png" alt="Foreclosure Sign"></p>
            <h3 class="other_name">Foreclosure Cleaning</h3>
        </div>
        <div class="other_service">
            <p class="other_img"><img src="wp-content/themes/activeclean1/images/other_construction.png" alt="Hammer and Bricks"></p>
            <h3 class="other_name">Post-Construction Cleaning</h3>
        </div>

        <div class="other_service">
            <p class="other_img"><img src="wp-content/themes/activeclean1/images/other_regular.png" alt="Mop, Bucket, Towel"></p>
            <h3 class="other_name">Office Cleaning</h3>
        </div>

        <div class="other_service">
            <p class="other_img"><img src="wp-content/themes/activeclean1/images/other_moving.png" alt="Truck with Home in Trunk"></p>
            <h3 class="other_name">Move In / Out Cleaning</h3>
        </div>
        <div class="other_service">
            <p class="other_img"><img src="wp-content/themes/activeclean1/images/other_carpet.png" alt="carpet"></p>
            <h3 class="other_name">Carpet Cleaning</h3>
        </div>

        <div class="other_service">
            <p class="other_img"><img src="wp-content/themes/activeclean1/images/other_junk.png" alt="Trash Can"></p>
            <h3 class="other_name">Junk Removal</h3>
        </div>
        <div class="other_service">
            <p class="other_img"><img src="wp-content/themes/activeclean1/images/other_paint.png" alt="Man with Paint Roller"></p>
            <h3 class="other_name">Interior Painting</h3>
        </div>
    </div>
    <button type="button">Please call 24/7 for Free Estimate:<br><a class="telephone" href="tel:19168007795">+1 (916) 800-7795</a></button>
</div>

<?php include 'footer.php'; ?>
