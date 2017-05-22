$(document).ready(function(){
	// load footer and header
	$('.navbar').load('navbar.html');
	$('.footer').load('footer.html');
    $("<style>").text(".nav-login { visibility: hidden; } .nav-logout { visibility: visible; }").appendTo("head");

    // function for google maps, hardcoded coordinate
    function myMap(coordinate, location) {

	  var map = new google.maps.Map(document.getElementById('map'), {
	    zoom: 12,
	    center: coordinate
	  });

	  var marker = new google.maps.Marker({
	    position: coordinate,
	    map: map,
	    title: location
	  });
	}

	// get the permission from google to use their api
	$.getScript( "https://maps.googleapis.com/maps/api/js?key=AIzaSyDa93KkD81ZVZXuMQREmIt8uGoonBWEIe0" )
	.done(function( script, textStatus ) {
		myMap({lat: 63.430187, lng: 10.393610}, "Trondheim");
	});

});