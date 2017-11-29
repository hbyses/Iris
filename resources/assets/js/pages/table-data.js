$(document).ready(function() {

    // Datatables

    $('#example').dataTable();

    var table = $('#equipment-list').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [
            [2, 'asc']
        ],
        "displayLength": 25,
    });


    // Order by the grouping
    $('#example2 tbody').on('click', 'tr.group', function() {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            table.order([2, 'desc']).draw();
        } else {
            table.order([2, 'asc']).draw();
        }
    });

    $.fn.isValid = function() {
        return this[0].checkValidity()
    }

    var t = $('#example3').DataTable();

    $('#add-row').on('click', function() {
        if ($("#add-row-form").isValid()) {
            var name = $('#name-input').val(),
                position = $('#position-input').val(),
                age = $('#age-input').val(),
                date = $('#date-input').val(),
                salary = $('#salary-input').val();
            t.row.add([
                name,
                position,
                age,
                date,
                '$' + salary
            ]).draw();

            $('.modal').modal('hide');

            return false;
        }
    });

    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
});