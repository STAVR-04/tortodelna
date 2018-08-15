$(document).ready(function () {
    var sub_active = $('.process_position');
    
    
 
    sub_active.on("click",function () {
        var par = $(this).parent();
        var child = par.find('.position_sub');
        var arrow = $(this).find('.process_arrow');
        if(child.hasClass('position_sub--active')){
            child.removeClass('position_sub--active');
            arrow.removeClass('process_arrow--active');
        }else{
            child.addClass('position_sub--active');
            arrow.addClass('process_arrow--active');
        } 
    });

    
//    sub_active.on("click",function () {
//        var par = $(this).parent();
//        par.find('.position_sub').removeClass('.position_sub--active');
//    });


});
