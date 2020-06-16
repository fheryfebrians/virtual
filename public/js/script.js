$(window).on('scroll', function(){
    if($(window).scrollTop()){
        $('.navbar-virtual').addClass('change');
        $('#navbarSupportedContent').addClass('change2');
    }else{
        $('.navbar-virtual').removeClass('change');    
        $('#navbarSupportedContent').removeClass('change2');
    } 
});


$(document).ready(function(){

    $('#close').click(function(){
        $('#promo').slideUp("slow");
    });

    $('.slider-area').slick({
    	dots: true,
    	infinite: false,
        centerMode: true,
    	slidesToShow:  3,
    	slidesToScroll: 1, 
    	nextArrow: $('.next'),
    	prevArrow: $('.prev')

    });

});



