jQuery(function ($) {
    $('.top-menu a').addClass('text-uppercase text-center');
    $('.bot-menu a').addClass('text-desc');
    $('.view-footlinks a, .view-change.row a').addClass('text-head text-uppercase');
    $('.cat-item > a').on('click', function(event){
        event.preventDefault();
        $('.portfolio-items').load($(this).attr('href') + " .portfolio-item");
        return false;
    });
});