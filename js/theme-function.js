jQuery(function ($) {
    $('.top-menu a').addClass('text-uppercase text-center');
    $('.bot-menu a').addClass('text-desc');
    $('.view-footlinks a, .view-change.row a').addClass('text-head text-uppercase');

    $('.view-change>li').hasClass('current-cat') == false ? $(this).find(":first-of-type").addClass('current-cat') : false;

    $('.cat-item > a').on('click', function(event){
        event.preventDefault();
        $('.portfolio-items').load($(this).attr('href') + " .portfolio-item");
        $('.cat-item').removeClass('current-cat');
        $(this).parent('.cat-item').addClass('current-cat');
        return false;
    });
});