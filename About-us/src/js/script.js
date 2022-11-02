
$(document).ready(function(){
    $('.view-members').slick({
        Infinity: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        dots: true,
        prevArrow:
        "<button type='button' class='slick-prev slick-btn'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow:
        "<button type='button' class='slick-next slick-btn'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
});