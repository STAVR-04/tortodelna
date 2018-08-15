$("html").on('click', '#go', function () {
    var size = $("input[name=size]:checked").val();
    var tier = $("input[name=level]:checked").val();
    var corn = $("input[name=corn]:checked").val();
    document.location.replace("http://tortodelna.ru/site/constructor/?size="+size+"&tier="+tier+"&corn="+corn);
   // $('.kit_tuning_action_list').css({"display":"inline-block"});
   // $(this).parent().css({
   //     "display":"none",
   // });
});
$("html").on('click', '.kit_list2', function () {
    $("a").remove(".btn_three");
    $(this).parent().append("<a class=\"btn btn_three\" href=\"#2\">Дальше <svg xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"none\" viewbox=\"0 0 283 53\"><path class=\"btn_three_layerbg\" d=\"M0 0h10v53H0zm253 0H10v53h243l20-26.5z\"></path></svg></a>");
});

$(document).ready(function () {
    tier();
    $("html").on('click', '.process_position', function () {
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

});

function tier() {
    var tier = $('input[name=level]:checked').val();
    var corn = $('input[name=corn]:checked').val();

    if(tier == 1 && corn==1){
        $('.1-3').hide();
        $('.2-2').hide();
        $('.2-3').hide();
        $('.1-2').show();

    }
    if(tier == 1 && corn==2){
        $('.2-2').hide();
        $('.2-3').hide();
        $('.1-2').hide();
        $('.1-3').show();
    }
    if(tier == 2 && corn==1){
        $('.2-3').hide();
        $('.1-2').hide();
        $('.1-3').hide();
        $('.2-2').show();
    }
    if(tier == 2 && corn==2){
        $('.2-3').hide();
        $('.1-2').hide();
        $('.1-3').hide();
        $('.2-2').hide();
        $('.2-3').show();
    }
}
$("html").on('click', 'input[name=level]', function () {
    tier();
});
$("html").on('click', 'input[name=corn]', function () {
    tier();
});