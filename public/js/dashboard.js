(function () {
    'use strict'

    feather.replace()
    $(document).on('click','.btn.btn-danger',function(){
        if(!confirm('Delete this item?')){
            return false;
        }
        // $.ajax({
        //     url: window.location.pathname,
        //     type: 'DELETE',
        //     data:{delete:$(this).data('id')},
        //     dataType:'jsonp',
        //     success: function(data) {
        //         console.log(data)
        //     }
        // });
    })

}())
