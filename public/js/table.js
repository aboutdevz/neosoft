
    
    

$(function() {
    window.table = $('#crud-item').DataTable({
        "ajax": 'http://localhost/penilaianpweb/Pelajaran/getAllPelajaran',
        "dataSrc": 'data',
        "rowId": 'id',
        "liveAjax": true,
        "columns": [
            { 'data': 'mata_pelajaran' },
            { 'data': 'jurusan' },
            { 'data': 'kelas' },
            // {
            //     "data": 'id',
            //     "render": function (data, type, row) {
            //         return '<div class="btn-group"> <a href="' + baseUrl('Pelajaran/pageUpdatePelajaran/' + data) + '" class="btn btn-success mr-1 ml-1">Update</a><a href="' + baseUrl('Pelajaran/deletePelajaran/' + data) + '" class="btn btn-danger mr-1 ml-1">Delete</a></div>';
            //     }
            // }
        ],
    });
});