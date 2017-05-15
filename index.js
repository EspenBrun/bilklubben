$(document).ready(function(){
	// load footer and header
	$('.navbar').load('navbar.html');
	$('.footer').load('footer.html');
     
    // open login modal
    $(".open-login-modal").click(function(e){
    	e.preventDefault();
        $("#login-modal").modal();
    });
    $(".navbar").click(".open-login-modal", function(e){
		e.preventDefault();
        $("#login-modal").modal();
	});

    // validate form
    $('#form-reg').validate({ // initialize the plugin
        rules: {
            first: {
                required: true,
                maxlength: 25
            },
            last: {
                required: true,
                maxlength: 25
            },
            adress: {
                required: true,
                maxlength: 25
            },
            zip: { 
                required: true,
                maxlength: 4,
                minlength: 4,
                digits: true
            },
            city: {
                required: true,
                maxlength: 25
            },
            phone: {
                required: true,
                maxlength: 8,
                minlength: 8,
                digits: true
            },
            email: {
                required: true,
                email: true,
                maxlength: 25
            },
            pwd: {
                required: true,
                minlength: 8,
                maxlength: 25
            }
        }
    });

});
