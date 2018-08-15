$('.header__close').on('click', function () {
    id=$(this).attr('id');
    $.ajax({
        url:'/site/basketdelete/',
        data: {id: id},
        type: 'POST',
        success: function(result){
            $('#'+id).parent().parent().remove();
        },
        error: function () {
            alert('Error!');
        }
    });
});
$('.delete_all').on('click', function () {
    $.ajax({
        url:'/site/basketdeleteall/',
        success: function(result){
            location.reload();
        },
        error: function () {
            alert('Error!');
        }
    });
});
$(document).ready(function () {

});