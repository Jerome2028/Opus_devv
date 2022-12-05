$(function(){
    contactTable();

    var status_module =  window.localStorage.getItem("stat");
    if(status_module == "success"){
        sucessAlert();
        localStorage.clear();
    }
});

function contactTable() {
    $('#dataTable').DataTable({
        "bLengthChange": false,
        "pageLength": 5,
        "ajax" : "controller/controller.contact_info.php?mode=tableDetail",
        "columns" : [
            { "data" : "title" },
            { "data" : "description" },
            { "data" : "action" }
        ],
    });
}

function update(id, title, desc, status) {
    $('.updateModal').modal('show');
    $('#modalTitle').html('<i class="fas fa-sm fa-edit"></i> Update ' +title);
    $('#info_id').val(id);
    $('#desc').val(desc);
    $('#contact_detail_status').val(status);

    $('.submit').on('click', function(){
        var id = $('#info_id').val();
        var desc = $('#desc').val();
        var status = $('#contact_detail_status').val();

        if(desc == "") {
            errorAlert();
        } else {
            submit(id, desc, status);
        }
    });
}

function submit(id, desc, status) {
    $.ajax({
        url: 'controller/controller.contact_info.php?mode=updateDesc',
        method: 'POST',
        data: {
            id:id,
            desc:desc,
            status:status
        },
        success:function(){
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="contact_info.php";
        }
    });
}
