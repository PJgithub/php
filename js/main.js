// The root URL for the RESTful services
var rootURL = "http://localhost/rest/api/wines";

var currentWine;

// Retrieve wine list when application starts 
findAll();

function findAll() {
    $.ajax({
        type: 'GET',
        url: rootURL,
        dataType: "json", // data type of response
        success: renderList
    });
}

function renderList(data) {
	// JAX-RS serializes an empty list as null, and a 'collection of one' as an object (not an 'array of one')
	var list = data == null ? [] : (data.projekt instanceof Array ? data.projekt : [data.projekt]);

	$('#wineList li').remove();
	$.each(list, function(index, projekt) {
		$('#wineList').append('<li><a href="#" data-identity="' + wine.id + '">'+wine.name+'</a></li>');
	});
}