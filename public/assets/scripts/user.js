$(function() {
    var table = $('#user-list').DataTable({
        processing: true,
        serverSide: true,
        ajax: user_route,
        columnDefs: [
            { targets: -1, className: 'text-center'}
          ],
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});
    