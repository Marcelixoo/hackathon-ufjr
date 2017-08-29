$(document).ready(function() {
    $('#tabelaResultados').DataTable( {
        "language": {
        "lengthMenu": "Mostrar _MENU_ registros por p&aacute;gina",
        "zeroRecords": "Nada encontrado - desculpe :(",
        "info": "Mostrando p&aacute;gina _PAGE_ de _PAGES_",
        "infoEmpty": "Nenhum registro encontrado!",
        "infoFiltered": "(Filtrado por um total de _MAX_ registros)",
        "decimal":        "",
        "emptyTable":     "Sem registros dispon&iacute;veis!",
        "infoPostFix":    "",
        "thousands":      ",",
        "lengthMenu":     "Mostrar _MENU_ entradas",
        "loadingRecords": "Loading...",
        "processing":     "Processing...",
        "search":         "Filtrar:",
        "paginate": {
            "first":      "Primeira",
            "last":       "&Uacute;ltima",
            "next":       "Pr&oacute;xima",
            "previous":   "Anterior"
        },
            "aria": {
            "sortAscending":  ": activate to sort column ascending",
            "sortDescending": ": activate to sort column descending"
            }
        }
    });
});

$(document).ready(function(){
    $('#tabelaResultados').DataTable({
});

$(document).ready(function() {
    $('#tabelaResultados').DataTable( {
        columnDefs: [
            {
                targets: [ 0, 1, 2 ],
                className: 'mdl-data-table__cell--non-numeric'
            }
        ]
    });
});
