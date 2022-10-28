function show(id) {
    $.get('/admin/project/' + id, function(data) {
        $('#project').html(data);
    });
}
function show1(id) {
    $.get('/admin/contact/' + id, function(data) {
        $('#kontak').html(data);
    });
}

