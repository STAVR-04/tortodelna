if(typeof jQuery == 'undefined'){
    location.reload();
}
$(document).ready(function () {

    var link = $('.menu_link');

    var link_active = $('.menu_link--active');

    var menu = $('.menu');

    var menuBlur = $('.menu_bodyBlur')

    var nonContent = $('.menu_link');

    

    

    link.click(function () {

        link.toggleClass('menu_link--active');

        menu.toggleClass('menu--active');

        menuBlur.toggleClass('menu_bodyBlur--active');

        nonContent.toggleClass('menu_link--nonContent')

    });





    link_active.click(function () {

        link.removeClass('menu_link--active');

    });



    menuBlur.click(function () {

        menuBlur.removeClass('menu_bodyBlur--active');

        link.removeClass('menu_link--active');

        menu.removeClass('menu--active');

        nonContent.toggleClass('menu_link--nonContent')

    });



});


$(window).scroll(function() {
    if ($(this).scrollTop() > 90){
        $('.logo').addClass("scroll");
        $('.header_wrp').addClass("scroll");
    }
    else{
        $('.logo').removeClass("scroll");
        $('.header_wrp').removeClass("scroll");
    }
});
