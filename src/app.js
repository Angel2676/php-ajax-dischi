var $ = require("jquery");

$(document).ready(function(){
$.ajax(
    {
        url: 'http://localhost:8888/dischi/server.php',
        method: 'GET',
        success: function(risposta){
            printData(risposta)
        },
        error: function(){
            alert('ERRORE');
        }
})

});

function printData(data){
    var source = $("#entry-template").html();
    var template = Handlebars.compile(source);
    for (var i = 0; i < data.length; i++) {
        var context =
                {
                    poster: data[i].poster,
                    title: data[i].title,
                    author: data[i].author,
                    year: data[i].year
            };
            var html = template(context);
            $('.main_content').append(html);
}




}
