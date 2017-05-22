$(document).ready(function(){
	// load footer and header
	$('.navbar').load('navbar.html');
	$('.footer').load('footer.html');

	// set datetimepickers
	$('.date-from').datetimepicker({
    	format: 'YYYY-MM-DD'
    });
    $('.date-to').datetimepicker({
        useCurrent: false, //Important! See issue #1075
        format: 'YYYY-MM-DD'
    });

    var to;
    var from;
    var days;
    var msg = "Du har ikke nok poeng for denne bestillingen.";
    var id;

    $(".date-from").on("dp.change", function (e) {
        // get the id number from the id string
        id = e.target.id.replace('date-time-picker-from-','');

        $('#date-time-picker-to-' + id).data("DateTimePicker").minDate(e.date);
        to = $('#date-time-picker-to-' + id).data("DateTimePicker").date();
        if(to != null){
        	days = to.diff(e.date, 'days');
	        $("[name=days]").val(days);
        }
    });
    $(".date-to").on("dp.change", function (e) {
        // get the id number from the id string
        id = e.target.id.replace('date-time-picker-to-','');

        $('#date-time-picker-from-' + id).data("DateTimePicker").maxDate(e.date);
        from = $('#date-time-picker-from-' + id).data("DateTimePicker").date();
        if(from != null){
        	days = e.date.diff(from, 'days');
	        $("[name=days]").val(days);
            console.log(days);
        }
    });

    // validate ordering form
    // if (true  ) {
    //     $("[name=days]").val() *
    // }
    $('#form-order').validate({ // initialize the plugin
        rules: {
            to: {
                required: true
            },
            from: {
                required: true
            }
        }
    });
});