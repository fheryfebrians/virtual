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


    $('#untuk').click(function(){
        $('#annually').addClass('hidden');
        $('#semi-annually').addClass('hidden');
        $('#sell').addClass('hidden');
    });
    $('#for-sewa').click(function(){
        $('#annually').removeClass('hidden');
        $('#semi-annually').removeClass('hidden');
        $('#sell').addClass('hidden');
    });
    $('#for-jual').click(function(){
        $('#sell').removeClass('hidden');
        $('#annually').addClass('hidden');
        $('#semi-annually').addClass('hidden');
    });
    $('#for-seju').click(function(){
        $('#annually').removeClass('hidden');
        $('#semi-annually').removeClass('hidden');
        $('#sell').removeClass('hidden');
    });


  


});



