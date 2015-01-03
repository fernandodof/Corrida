$(document).ready(function () {
//    var endDate = new Date();
    $('#sandbox-container .input-group.date').datepicker({
        todayBtn: "linked",
        language: "pt-BR",
        autoclose: true,
        todayHighlight: true,
        format: "dd/mm/yyyy"
    });

    $('#timepicker').timepicker({
        showMeridian: false,
        defaultTime: '00:00:00',
        showSeconds: true,
        minuteStep: 1,
        secondStep: 1
    });

    (function ($) {

        $('.spinner .btn:first-of-type').on('click', function () {
            $('.spinner input').val(parseInt($('.spinner input').val(), 10) + 1);
        });

        $('.spinner .btn:last-of-type').on('click', function () {
            if ($('.spinner input').val() > 0) {
                $('.spinner input').val(parseInt($('.spinner input').val(), 10) - 1);
            }
        });
    })(jQuery);


    $("input[name='distanceUnit']").iCheck({
        radioClass: 'iradio_square-blue',
        increaseArea: '20%'
    });
    
    

});