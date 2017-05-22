$(document).ready(function(){
	// load footer and header
	$('.navbar').load('navbar.html');
	$('.footer').load('footer.html');
    $("<style>").text(".nav-login { visibility: hidden; } .nav-logout { visibility: visible; }").appendTo("head");
	

});