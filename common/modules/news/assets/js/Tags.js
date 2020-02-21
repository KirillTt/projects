function renewTag(){
    $.ajax({
        url: '/news/tags/gettags',
        type: 'get',
        dataType: 'html',
        async: false,
        crossDomain: 'true',
        success: function(data, status) {
            $("#news-tag option").remove();
            $("#news-tag").append(data);
        },
        error: function(data, status){
            alert('Возникла ошибка');
        }
    });
    
}
function addTag(){
    if(string = prompt("Введите тег:")){
        $.ajax({
            url: '/news/tags/createtags',
            data: {
                name: string
            },
            type: 'get',
            dataType: 'html',
            async: false,
            crossDomain: 'true',
            success: function(data, status) {
                renewTag();
                alert('тег добавлен');
            },
            error: function(data, status){
                alert('Возникла ошибка');
            }
        });
    }
}