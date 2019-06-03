 /*
    
    function changePrice(val) {
        if (val == 1) {
            var homePrice = 0;
            document.getElementById('price').innerHTML = basePrice + getPrice();
        }
        
        if (val == 2) {
            var homePrice = 10;
            document.getElementById('price').innerHTML = basePrice + homePrice;
        }
        
        if (val == 3) {
            var homePrice = 35;
            document.getElementById('price').innerHTML = basePrice + homePrice;
        }
        
        if (val == 4) {
            var homePrice = 69;
            document.getElementById('price').innerHTML = basePrice + homePrice;
        }
        
        if (val == 5) {
            var homePrice = 96;
            document.getElementById('price').innerHTML = basePrice + homePrice;
        }
        
        if (val == 6) {
            var homePrice = 122;
            document.getElementById('price').innerHTML = basePrice + homePrice;
        }
    }
    
    function changePrice2(val2) {
        var x = document.getElementById('price');
        
        if (val2 == 1) {
            var homePrice2 = 0;
            document.getElementById('price').innerHTML = basePrice + homePrice2;
        }
        if (val2 == 2) {
            var homePrice2 = 25;
            document.getElementById('price').innerHTML = basePrice + homePrice2;
        }
        if (val2 == 3) {
            var homePrice2 = 50;
            document.getElementById('price').innerHTML = basePrice + homePrice2;
        }
        if (val2 == 4) {
            var homePrice2 = 75;
            document.getElementById('price').innerHTML = basePrice + homePrice2;
        }
        if (val2 == 5) {
            var homePrice2 = 100;
            document.getElementById('price').innerHTML = basePrice + homePrice2;
        }
        if (val2 == 6) {
            var homePrice2 = 125;
            document.getElementById('price').innerHTML = basePrice + homePrice2;
        }
    }
    
    */

/*var amt = "";
                            
                            function bdrmsValue(){
                                var x = document.getElementById('bdrms').value;
                                if (x == "one_bd") {
                                    var bdrm = "one";
                                }
                                if (x == "two_bd") {
                                    var bdrm = "two";
                                }
                                if (x == "three_bd") {
                                    var bdrm = "three";
                                }
                                if (x == "four_bd") {
                                    var bdrm = "four";
                                }
                                if (x == "five_bd") {
                                    var bdrm = "five";
                                }
                                if (x == "six_bd") {
                                    var bdrm = "six";
                                }
                                if (x == "seven_bd") {
                                    var bdrm = "seven";
                                }
                                console.log(bdrm);
                                return bdrm;
                            }
                            
                            function bathsValue(){
                                var x = document.getElementById('baths').value;
                                if (x == "one_bath") {
                                    var bath = "one";
                                }
                                if (x == "two_bath") {
                                    var bath = "two";
                                }
                                if (x == "three_bath") {
                                    var bath = "three";
                                }
                                if (x == "four_bath") {
                                    var bath = "four";
                                }
                                if (x == "five_bath") {
                                    var bath = "five";
                                }
                                if (x == "six_bath") {
                                    var bath = "six";
                                }
                                if (x == "seven_bath") {
                                    var bath = "seven";
                                }
                                console.log(bath);
                                return bath;
                            }
                            */

                            /*var bdrmsVal = bdrms.options[bdrms.selectedIndex].value;*/
                            
                            
                            /*var bdrms = document.getElementById('bdrms').value;
                            var baths = document.getElementById('baths').value;
                            var bdrmsVal = bdrms.options[bdrms.selectedIndex].value;
                            function updateBdrms(x){
                            var bdrmsVal = x;
                            */
                            /*var bdrmsVal = bdrms.options[bdrms.selectedIndex].value;*/
                        
                            
                            /*function updateBdrms(x){
                                
                                var bdrmsVal = x;
    
                            }*/

/*function totalValue(){
                                var x = document.getElementById('baths').value;
                                var y = document.getElementById('bdrms').value;
                                var z = document.getElementById('subtotal');
                                var total = "";
                                if (x == "one_bd" && y == "one_bath") {
                                    var total = "85.00";
                                    z.innerHTML = "85.00";
                                }
                                if (x == "one_bd" && y == "two_bath") {
                                    var total = "97.00";
                                }
                                console.log(total);
                                return total;
                            }*/

/*
        
        how to connect input range data to another variable.
        
        */
        /*
            $(".slider-40").slider({
                value: 1,
                min: 1,
                max: 6,
                step: 1,
                slide: function(event, ui) {
                    $('.choice_display').html(ui.value);
                    $("#price").val(ui.value);
                }
            });

            $("#price").change(function() {
                $(".slider-40").slider('value', $(this).val());
            });
        */

$(function(){
    var prices = {
        'United States':15,
        'United Kingdom':30
    };
    $('#bdrms, #baths').on('change', function(){
        if(this.name == 'Quantity'){
            $('input[name="Visitors"]').val(+this.value*1000);
            $('input[name="Price"]')
            .val(prices[$('#select2-basic').val()] ? (prices[$('#select2-basic').val()]*this.value) :  (15*this.value));
        }
        else if(this.name == 'Country'){
            $('input[name="Price"]')
            .val(prices[this.value] /*always*/ ? (prices[this.value]*$('#select3-basic').val()) :  (15*$('#select3-basic').val()));
        }
    });
});