$(document).ready(function(){
	// load footer and header
	$('.navbar').load('navbar.html');
	$('.footer').load('footer.html');

	// set datetimepickers
	$('#datetimepicker1').datetimepicker({
    	format: 'DD/MM/YYYY'
    });
    $('#datetimepicker2').datetimepicker({
        useCurrent: false, //Important! See issue #1075
        format: 'DD/MM/YYYY'
    });
    $("#datetimepicker1").on("dp.change", function (e) {
        $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
    });
    $("#datetimepicker2").on("dp.change", function (e) {
        $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
    });

    // validate ordering form
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