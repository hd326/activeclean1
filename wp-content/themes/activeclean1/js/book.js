/*$(function () {
            var Home = $('#main_how_inputs .how_input:nth-of-type(1) button');
            var Unlocked = $('#main_how_inputs .how_input:nth-of-type(2) button');
            var Key = $('#main_how_inputs .how_input:nth-of-type(3) button');
            var Alarm = $('#main_how_inputs .how_input:nth-of-type(4) button');
            var Other = $('#main_how_inputs .how_input:nth-of-type(5) button');

            $(Home).on('click', function () {
                $('#enter_instructions').html("");
            });

            $(Unlocked).on('click', function () {
                $('#enter_instructions').html("");
            });

            $(Key).on('click', function () {
                var Instructions = $(this).attr('value');
                $('#enter_instructions').html("<div id=enter_title><h3>Instructions</h3></div><p id=enter_example></p><textarea id=enter_textarea></textarea>");
                $('#enter_example').html(Instructions);
            });

            $(Alarm).on('click', function () {
                var Instructions = $(this).attr('value');
                $('#enter_instructions').html("<div id=enter_title><h3>Instructions</h3></div><p id=enter_example></p><textarea id=enter_textarea></textarea>");
                $('#enter_example').html(Instructions);
            });

            $(Other).on('click', function () {
                $('#enter_instructions').html("<div id=enter_title><h3>Instructions</h3></div><p id=enter_example></p><textarea id=enter_textarea></textarea>");
                $('#enter_example').html(Instructions);
            });
});
*/
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
    /*var basePrice = 85.00;
    /*
    var bedroomCostFactor = [0, 10, 35, 70, 95, 120];
    var bathroomCostFactor = [0, 25, 50, 75, 100, 125];
    var percentageFactor = [0, 5, 15, 10, 20];

    function returnPercentage(val) {
        document.querySelector('#percentage').innerHTML = val.value;
    }

    function returnServiceSummary(val) {
        document.querySelector('#duration_summary').innerHTML = val.dataset.ssummary;
    }

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

    document.querySelector('.calculate_baths').addEventListener('load', function(evt) {
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
    var itemSalesTax = document.querySelector('#tax');
    var totalAmount = document.querySelector('#amount');
    var bdrmSummary = document.querySelector('#bdrm_summary');
    var dateSummary = document.querySelector('#date_summary');
    var durSummary = document.querySelector('#duration_summary');

    function getTotalCost() {
        var bedCost = parseInt(document.querySelector('#bed_cost').innerHTML);
        var bathCost = parseInt(document.querySelector('#bath_cost').innerHTML);
        var percentage = parseInt(document.querySelector('#percentage').innerHTML);
        var percentageOff = percentage / 100;
        newPrice = basePrice;
        newPriceVar = basePrice;
        if (!percentage || percentage == 0) {
            //document.querySelector('#subtotal').innerHTML = newPrice += parseInt(bathCost + bedCost);
            subTotal.innerHTML = newPrice += parseInt(bathCost + bedCost);

            itemSalesTax.innerHTML = (subTotal.innerHTML * taxRate).toFixed(2);

            totalAmount.innerHTML = (parseFloat(subTotal.innerHTML) + parseFloat(itemSalesTax.innerHTML)).toFixed(2);
        } else {

            subTotal.innerHTML = ((newPriceVar += parseInt(bathCost + bedCost)) - ((newPrice += parseInt(bathCost + bedCost)) * percentageOff)).toFixed(2);

            itemSalesTax.innerHTML = (subTotal.innerHTML * taxRate).toFixed(2);

            totalAmount.innerHTML = (parseFloat(subTotal.innerHTML) + parseFloat(itemSalesTax.innerHTML)).toFixed(2);

        }
    }

    function getBedroomCost(val) {
        return bedroomCostFactor[val - 1];
    }

    function getBathroomCost(val) {
        return bathroomCostFactor[val - 1];
    }
    */
    