$(function () {
    // Grab the template script
    var theTemplateScript = $("#address-template").html();

    // Compile the template
    var theTemplate = Handlebars.compile(theTemplateScript);

    // Get the data on page load
    getData(theTemplate);

    setInterval(function(){
        getData(theTemplate) // this will run after every 5 seconds
    }, 5000);
});

function getData(theTemplate)
{
    var placeholder = $('#content-placeholder');
    var dataFilter = $(placeholder).attr('data-filters');

    $.get('/api.php?filters=' + dataFilter, function(response) {
        // Pass our data to the template
        var theCompiledHtml = theTemplate(response);

        // Add the compiled html to the page
        $(placeholder).html(theCompiledHtml);
    }).fail(function(response) {
        //
    });
}