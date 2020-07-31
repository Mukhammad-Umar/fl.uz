$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var BaseRecord = {

    deleteone: function (id) {
        var ajaxSetting = {
            method: 'get',
            url: './deleteone',
            data: {
                id: id
            },
            success: function (data) {
                BaseRecord.remove();
            },
            error: function (data) {
                alert(data.responseText);
            }
        };
        $.ajax(ajaxSetting);
    },
    
    remove: function () {
        var ajaxSetting = {
            method: "get",
            url: './news',
            success: function (data) {
                // alert(data.table);
                $('.news_table').html(data.table);
                $('.listbuttonremove').click(function () {
                   BaseRecord.deleteone($(this).attr('id'));
                   return false;
                 });
            },
        };
        $.ajax(ajaxSetting);
    },

};
      