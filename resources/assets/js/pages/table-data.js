$(document).ready(function() {

    // Datatables

    //Main Equipment List
    $('#equipment-list').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [
            [2, 'asc']
        ],
        "displayLength": 16,
        "responsive": true
    });



    //Not sure why this is here tbh
    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
});