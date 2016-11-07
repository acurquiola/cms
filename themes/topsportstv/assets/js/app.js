$(document).ready(function(){
    
    $('.buttom-collapse').sideNav();
    $('.carousel.carousel-slider').carousel({full_width: true});
    window.setInterval(function(){
        $('.carousel.carousel-slider').carousel('next')
        },5000
    )

});

