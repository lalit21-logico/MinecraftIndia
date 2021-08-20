// (C) 2020 ITESaurabh (Saurabh Tanwar)


//Navbar
$(function(){

    $(window).scroll(function () {
        //console.log($(this).width())
        if($(this).width() > 980){
        // this.console.log("Yes")

            $(window).scroll(function () {
                if ($(window).scrollTop() >= 10) {
                $('nav').css('background','#313131');
                } else {
                $('nav').css('background','transparent');
                }
                });
        }
        else{
            $(function () {
                $(window).on('scroll', function () {
                    if ( $(window).scrollTop() > 10 ) {
                        $('.navbar').addClass('active');
                    } else {
                        $('.navbar').removeClass('active');
                    }
                });
                $(window).scroll(function () {
                    if ($(window).scrollTop() >= 10) {
                    $('nav').css('background','#313131');
                    } else {
                    $('nav').css('background','#313131');
                    }
                    });
            });
        }
    });
});