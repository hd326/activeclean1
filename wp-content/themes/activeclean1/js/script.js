function sliderChange(val) {
    document.getElementById('bed_display').innerHTML = val;
}

function sliderChange2(val) {
    document.getElementById('bath_display').innerHTML = val;
}

function showValue(newValue, resultDiv) {
    document.getElementById(resultDiv).innerHTML = newValue;
    updateSum();
}

function updateSum() {
    var sliderOneValue = +document.getElementById('sliderBarOne').value;
    var sliderTwoValue = +document.getElementById('sliderBarTwo').value;
    var sliderThreeValue = +document.getElementById('sliderBarThree').value;
    document.getElementById('sum').innerHTML = sliderOneValue + sliderTwoValue + sliderThreeValue;
}

$(function () {
    $('#form_occurence .form_percentage button').on('click', function () {
        $('#form_occurence .form_percentage button').removeClass('active');
        $(this).addClass('active');
    });

    $('#icon').on('click', function () {
        $('#sidenav').toggleClass('sidetoggle');
        $('body').toggleClass('bodytoggle');
        $('#sidenavhelp').toggle();
    });

    function closesideNav() {
        var side = document.querySelector('#sidenav');
        var sideNavMargin = window.getComputedStyle(side).getPropertyValue('margin-right');
        if (sideNavMargin === '0px') {
            $('#sidenav').toggleClass('sidetoggle');
            $('body').toggleClass('bodytoggle');
            $('#sidenavhelp').hide();
        }
    }

    $('#sidenavhelp').click(function () {
        closesideNav();
    });
    //var sideNavWidth = $('#sidenav').width();
    $(window).resize(function () {
        closesideNav();
    });

    $(window).scroll(function () {
        var scrollHeight = $(window).scrollTop();

        if (scrollHeight >= 200) {
            $('#header_strip').css({
                display: 'block',
                position: 'fixed',
            });

            $(header).addClass('fixed');
            $(header).removeClass('normal');
            $('#header').addClass('fixed');
            $('#header').removeClass('normal');
            $('#hamburger').addClass('fixed-icon');
            /*$('header #header').css({
                width: '100%',
                paddingRight: '25px',
                paddingLeft: '25px'
            });*/
        } else {
            $('#header_strip').css({
                display: 'none',
                position: 'fixed',
            });

            $(header).removeClass('fixed');
            $(header).addClass('normal');
            $('#header').removeClass('fixed');
            $('#header').addClass('normal');
            $('#hamburger').removeClass('fixed-icon');
            $('#hamburger').addClass('normal-icon');
            /*$('header #header').css({
                width: '80%',
                paddingRight: '0px',
                paddingLeft: '0px',
            });*/
        }
    });
});

$(function () {
    $('.questions_line').on('click', function () {
        $('.questions_info', this).slideToggle();
        $('#text', this).toggleClass('q_active');
        $('#button', this).toggleClass('q_button_active');
    });

    $('#book_wrap #book_wrap_containers #main  #main_how_inputs button').on('click', function () {
        $('#main_how_inputs .how_input button').removeClass('active');
        $(this).addClass('active');
        // makes sense
    });
});



/*$(function () {
    $duration = $('#main_duration #main_duration_inputs button').html();

    $('#main_duration #main_duration_inputs button', this).on('click', function () {
        $('.data_value').html('<input type="hidden" name='
            $duration '');
    });
});*/
