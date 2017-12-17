$(document).ready(function() {

    // Datatables

    //Main Equipment List
    $('#equipment-list').DataTable({
        "displayLength": 16,
        "responsive": true,
        "paging": false,
        "scrollY": "70vh" //70% of viewport height
    });

    //Main User List
    $('#user-list').DataTable({
        "displayLength": 16,
        "responsive": true,
        "paging": false,
        "scrollY": "70vh" //70% of viewport height
    });


    //Not sure why this is here tbh
    $('.date-picker').datepicker({
        orientation: "top auto",
        autoclose: true
    });
});