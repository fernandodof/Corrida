function searchByDate() {
    alert('TEST');
}

$(document).ready(function () {

    $('#thrid-option').addClass('active');

    $('#runDate').pickadate({
        format: 'dd/mm/yyyy',
        formatSubmit: 'dd/mm/yyyy',
        hiddenName: true,
        clear: 'limpar',
        close: 'fechar'
    });

    $('#runDate').pickadate('picker').on('render', function () {
        $('#newRunForm').bootstrapValidator('revalidateField', 'runDate');
    });

    $(".clendar-icon").click(function () {
        var picker = $("#runDate").pickadate('picker');
        if (picker.get("open")) {
            picker.close();
        }
        else {
            picker.open();
        }
        event.stopPropagation();
    });
});

