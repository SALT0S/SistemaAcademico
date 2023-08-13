function requestAll() {
    return request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
}

document.addEventListener('DOMContentLoaded', function () {
    tableUsers = $('#tableUsuarios').DataTable({
        "aProcessing": true,
        "aServerSide": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": getUsersUrl, // Agrega la ruta aquí
            "dataSrc": ""
        },
        "columns": [
            {"data": "id"},
            {"data": "email"},
            {"data": "name"},
            {"data": "apellidos"},
            {"data": "fecha_nacimiento"},
            {"data": "email"},
            {"data": "telefono"},
            {"data": "estado"}
        ],
        "dom":  '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-75"' +
            '<"col-sm-12 col-lg-4 d-flex justify-content-center justify-content-lg-start" l>' +
            '<"col-sm-12 col-lg-8 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-center justify-content-lg-end flex-lg-nowrap flex-wrap"<"me-1"f>B>>' +
            '>t' +
            '<"d-flex justify-content-between mx-2 row mb-1"' +
            '<"col-sm-12 col-md-6"i>' +
            '<"col-sm-12 col-md-6"p>' +
            '>',

        "responsive": false,
        "bDestroy": true,
        "autoFill": true,
        "lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],
        "iDisplayLength": 40,
        "lengthChange": true,
        "pagingType": 'simple_numbers',
        "order": [[1, "asc"]]
    });
});
