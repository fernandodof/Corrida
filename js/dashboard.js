$(document).ready(function () {

//    $('#runs').dataTable({
//        "processing": true,
//        "serverSide": true,
//        "sServerMethod": "POST",
//        "ajax": {
//            "url": "../src/app/ajaxReceivers/runsTablePagination.php",
//            "data": function (d) {
//                d.myKey = "myValue";
//                // d.custom = $('#myInput').val();
//                // etc
//            }
//        }
//    });

    $('#runs').dataTable({
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
        "sServerMethod": "POST",
        "sAjaxSource": "../src/app/ajaxReceivers/runsTablePagination.php",
        "aoColumns": [
            {"mData": "date"},
            {"mData": "distance"},
            {"mData": "duration"},
            {"mData": "avgSpeed"},
            {"mData": "pace"},
            {"mData": "notes"}
        ]
    });



});