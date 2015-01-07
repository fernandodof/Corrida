$(document).ready(function () {

    $('#first-option').addClass('active');

    var table = $('#runs').dataTable({
        language: {
            processing: "Processando...",
            search: "Pesquisar&nbsp;:",
            lengthMenu: "Mostrar _MENU_ Registros",
            info: "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            infoEmpty: "Mostrando de 0 até 0 de 0 registros",
            infoFiltered: "",
            infoPostFix: "",
            loadingRecords: "Carregando resgistros...",
            zeroRecords: "Não foram encontrados resultados",
            emptyTable: "Tabela Vazia",
            paginate: {
                first: "Primeiro",
                previous: "Anterior",
                next: "Próximo",
                last: "Último"
            },
            aria: {
                sortAscending: ": Habilitar ordenação ascendente",
                sortDescending: ": Habilitar ordenação descendente"
            }
        },
        "bProcessing": true,
        "bServerSide": true,
        "bRetrieve": true,
        "bPaginate": true,
        "responsive": true,
        "scrollX": true,
        "pagingType": "full_numbers",
        "sServerMethod": "POST",
        "order": [[0, "desc"]],
        "sAjaxSource": "../src/app/ajaxReceivers/runsTablePagination.php",
        "aoColumns": [
            {"mData": "fullDate"},
            {"mData": "distance"},
            {"mData": "fullTime"},
            {"mData": "avgSpeed"},
            {"mData": "pace"},
            {"mData": "notesId", "mRender": function (notesId) {
                    $('[data-toggle="popover"]').popover();
                    var strReturn = '';
                    var notes = notesId.split("|")[0];
                    var id = notesId.split("|")[1];
                    if (notes !== null && notes !== "") {
                        strReturn += "<a href='#' tabindex='0' class='notes-btn t-link' role='button' data-placement='left' data-toggle='popover' data-trigger='focus' title='Observações' data-content='" + notes + "'><span class='fa fa-fw fa-2x fa-paperclip' ></span></a>\n";
                    }
                    strReturn += "<a href='#' title='Editar'><span class='fa fa-fw fa-2x fa-edit t-link'></span></a>";
                    strReturn += "<a href='#' title='Excluir'><span class='fa fa-fw fa-2x fa-trash red-icon t-link'></span></a>\n";
                    return  strReturn;
                }}
        ],
        "fnDrawCallback": function (oSettings) {
            $('[data-toggle="popover"]').popover();
        },
        "columnDefs": [
            {orderable: false, targets: [5]}
        ]
    });

    $('[data-toggle="popover"]').popover();

});