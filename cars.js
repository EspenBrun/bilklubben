$(document).ready(function(){
	// load footer and header
	$('.navbar').load('navbar.html');
	$('.footer').load('footer.html');
    $('.alert').hide();

	// set datetimepickers
	$('.date-from').datetimepicker({
    	format: 'YYYY-MM-DD'
    });
    $('.date-to').datetimepicker({
        useCurrent: false, //Important! See issue #1075
        format: 'YYYY-MM-DD'
    });

    $('#form-order').validate({ // initialize the plugin
        rules: {
            date_to: {
                required: true
            },
            date_from: {
                required: true
            }
        }
    });

    var to;
    var from;
    var days;
    var msg = "Du har ikke nok poeng for denne bestillingen.";
    var id;
    var pointsCar;

    $(".date-from").on("dp.change", function (e) {
        // get the id number from the id string
        id = e.target.id.replace('date-time-picker-from-','');
        // set min date of datepicker-to to the date picked
        $('#date-time-picker-to-' + id).data("DateTimePicker").minDate(e.date);

        // if the other datetimepciker is set, calculate number of days and put in form
        // also check if user has enough points
        to = $('#date-time-picker-to-' + id).data("DateTimePicker").date();
        if(to != null){
        	days = to.diff(e.date, 'days');
	        $("[name=days]").val(days);
            pointsCar = $("[name = 'points-car']").val();
            pointsUser = $("[name = 'points-user']").val();
            console.log(days * pointsCar);

            if (days * pointsCar > pointsUser) {
                $('#msg-' + id).show();
                $('#btn-order-' + id).prop('disabled', true);
            }
            else {
                $('#msg-' + id).hide();
                $('#btn-order-' + id).prop('disabled', false);
            }
        }
    });

    $(".date-to").on("dp.change", function (e) {
        id = e.target.id.replace('date-time-picker-to-','');
        $('#date-time-picker-from-' + id).data("DateTimePicker").maxDate(e.date);
        
        from = $('#date-time-picker-from-' + id).data("DateTimePicker").date();
        if(from != null){
        	days = e.date.diff(from, 'days');
	        $("[name=days]").val(days);
            pointsCar = $("[name = 'points-car']").val();
            pointsUser = $("[name = 'points-user']").val();
            console.log(days * pointsCar);
            if (days * pointsCar > pointsUser) {
                $('#msg-' + id).show();
                $('#btn-order-' + id).prop('disabled', true);
            }
            else {
                $('#msg-' + id).hide();
                $('#btn-order-' + id).prop('disabled', false);
            }
        }
    });

    
    
});