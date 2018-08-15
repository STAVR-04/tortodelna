$(".add").on('click', function () {
    var kol = $("option:checked").val();
    var id = $(this).attr('id');
    location.href= 'http://tortodelna.ru/site/savecakefull/?id='+id+'&kol='+kol;
});