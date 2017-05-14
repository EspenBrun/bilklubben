$(document).ready(function(){
	// load footer and header
	$('.navbar').load('navbar.html');
	$('.footer').load('footer.html');

	// Disable increment in number input by scrolling or arrow keys
    // Disable scroll when focused on a number input.
    $('form').on('focus', 'input[type=number]', function(e) {
        $(this).on('wheel', function(e) {
            e.preventDefault();
        });
    });
    // Restore scroll on number inputs.
    $('form').on('blur', 'input[type=number]', function(e) {
        $(this).off('wheel');
    });
    // Disable up and down keys.
    $('form').on('keydown', 'input[type=number]', function(e) {
        if ( e.which == 38 || e.which == 40 )
            e.preventDefault();
    });  
     
    // open log in modal
    $(".open-login-modal").click(function(e){
    	e.preventDefault();
        $("#login-modal").modal();
    });
    $(".navbar").click(".open-login-modal", function(e){
		e.preventDefault();
        $("#login-modal").modal();
	});

});
