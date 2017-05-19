$(document).ready(function(){
	// load footer and header
	$('.navbar').load('navbar.html');
	$('.footer').load('footer.html');

	// set datetimepickers
	$('#datetimepicker1').datetimepicker({
    	format: 'YYYY-MM-DD'
    });
    $('#datetimepicker2').datetimepicker({
        useCurrent: false, //Important! See issue #1075
        format: 'YYYY-MM-DD'
    });

    var to;
    var from;
    $("#datetimepicker1").on("dp.change", function (e) {
        $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        to = $('#datetimepicker2').data("DateTimePicker").date();
        if(to != null){
        	days = to.diff(e.date, 'days');
	        $("[name=days]").val(days);
        }
    });
    $("#datetimepicker2").on("dp.change", function (e) {
        $('#datetimepicker1').data("DateTimePicker").maxDate(e.date);
        from = $('#datetimepicker1').data("DateTimePicker").date();
        if(from != null){
        	days = e.date.diff(from, 'days');
	        $("[name=days]").val(days);
        }
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