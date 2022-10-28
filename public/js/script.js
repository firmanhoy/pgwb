function show(id) {
    $.get('/admin/project/' + id, function(data) {
        $('#project').html(data);
    });
}
function show(id) {
    $.get('/admin/contact/' + id, function(data) {
        $('#kontak').html(data);
    });
}

