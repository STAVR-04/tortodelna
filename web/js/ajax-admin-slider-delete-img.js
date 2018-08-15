$('.delete-slider').on('click', function () {
    id=$(this).attr('id');
    $.ajax({
        url:'/admin/assortment/ajaxsliderdelete/',
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