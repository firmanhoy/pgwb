function show(id) {
    $.get('/admin/project/' + id, function(data) {
        $('#project').html(data);
    });
}
