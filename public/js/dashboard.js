(function () {
    'use strict'

    feather.replace()

    $(document).on('click','.btn.btn-danger',function(){
        if(confirm('Delete this item?')){
            $(this).children('form').submit();
        }
        return false;
    })

}())
