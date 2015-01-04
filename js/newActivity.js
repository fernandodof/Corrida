function calculateSpeedPace() {
    if ($('#distance').val() !== '' && (parseFloat($('#distance').val()) > 0) && $('#time').val() !== '' && validateTime($('#time').val()) && convertToSeconds($('#time').val()) > 0) {
        var seconds = convertToSeconds($('#time').val());
        var minutes = convertToMinutes($('#time').val());
        var distance = parseFloat($('#distance').val());


        if ($('input[name=distanceUnit]:checked').val() === 'k') {
            distance = distance * 1000;
        }

        if (seconds > 0) {
            var speed = (distance / seconds) * 3.6;
            var pace = minutes / (distance / 1000);

            $('#avgSpeed').val(Math.round(speed * 100) / 100 + ' km/h');
            $('#avgPace').val((Math.round(pace * 100) / 100 + ' min/km'));
        }
    } else {
        $('#avgSpeed').val('');
        $('#avgPace').val((''));
    }
}

function validateTime(str) {
    var pattern = new RegExp('^[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}$');
    return pattern.test(str);
}

function convertToSeconds(str) {
    var timeArray = str.split(':');
    var seconds = (+timeArray[0]) * 60 * 60 + (+timeArray[1]) * 60 + (+timeArray[2]);
    return seconds;
}

function convertToMinutes(str) {
    var timeArray = str.split(':');
    var seconds = (+timeArray[0]) * 60 + (+timeArray[1]) + (+Math.floor(timeArray[2] / 60));
    return seconds;
}


function setUpFormValidation() {

    $.fn.bootstrapValidator.validators.invalidTime = {
        validate: function (validator, $field, options) {
            var value = $field.val();

            if (convertToSeconds(value) <= 0) {
                return false;
            }

            return true;
        }
    };

    $('#newRunForm').bootstrapValidator({
        fields: {
            runDate: {
                validators: {
                    notEmpty: {
                        message: 'A data é obrigatória'
                    },
                    date: {
                        format: 'DD/MM/YYYY',
                        message: 'Data inválida'
                    }
                }
            },
            time: {
                validators: {
                    notEmpty: {
                        message: 'O tempo é obrigatório'
                    },
                    regexp: {
                        regexp: /^[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}$/,
                        message: 'Tempo inválido'
                    },
                    invalidTime: {
                        message: 'Tempo inválido'
                    }
                }
            }
        }
    }).on('success.form.bv', function (e) {
        e.preventDefault();
        subscribe();
    });

}

function revalidateTime() {
    $('#newRunForm').bootstrapValidator('revalidateField', 'time');
}

$(document).ready(function () {

    setUpFormValidation();

    $('#time').timepicker({
        showMeridian: false,
        defaultTime: '00:00:00',
        showSeconds: true,
        minuteStep: 1,
        secondStep: 1
    }).on('changeTime.timepicker', function (e) {
        $('#newRunForm').bootstrapValidator('revalidateField', 'time');
    });


    $('#sandbox-container .input-group.date').datepicker({
        todayBtn: "linked",
        language: "pt-BR",
        autoclose: true,
        todayHighlight: true,
        format: "dd/mm/yyyy"
    }).on('changeDate', function (e) {
        $('#newRunForm').bootstrapValidator('revalidateField', 'runDate');
    });

    $("input[name='distanceUnit']").on('ifCreated ifClicked ifChanged ifChecked ifUnchecked ifDisabled ifEnabled ifDestroyed check ', function (event) {
        if (event.type === "ifChecked") {
            $(this).trigger('click');
            $('input').iCheck('update');
        }
        if (event.type === "ifUnchecked") {
            $(this).trigger('click');
            $('input').iCheck('update');
        }
        if (event.type === "ifDisabled") {
            console.log($(this).attr('id') + 'dis');
            $('input').iCheck('update');
        }
    }).iCheck({
        radioClass: 'iradio_square-blue',
        increaseArea: '20%'
    });

//    $("input[name='distanceUnit']").iCheck({
//        radioClass: 'iradio_square-blue',
//        increaseArea: '20%'
//    });

});