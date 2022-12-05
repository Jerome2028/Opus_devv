$(function(){
    footerLinks();

    var status_module =  window.localStorage.getItem("stat");
    if(status_module == "success"){
        sucessAlert();
        localStorage.clear();
    }
});

function footerLinks() {
    $('#usefulLinksTable').DataTable({
        "searching": false,
        "bLengthChange": false,
        "pageLength": 6,
        "ajax" : "controller/controller.footer_links.php?mode=usefulLinksTable",
        "columns" : [
            { "data" : "title" },
            { "data" : "url" },
            { "data" : "status" },
            { "data" : "action" }
        ],

        popover: {
            image: [
                ['custom', ['imageAttributes']],
                ['float', ['floatLeft', 'floatRight', 'floatNone']],
                ['remove', ['removeMedia']]
            ],
        },
        lang: 'en-US',
        imageAttributes:{
            icon:'<i class="fas fa-sm fa-edit"/>',
            removeEmpty:false,
            disableUpload: false
        }
    });

    $('#ourServicesTable').DataTable({
        "searching": false,
        "bLengthChange": false,
        "pageLength": 6,
        "ajax" : "controller/controller.footer_links.php?mode=ourServicesTable",
        "columns" : [
           { "data" : "title" },
            { "data" : "url" },
            { "data" : "status" },
            { "data" : "action" }
        ],
    });
}

function update(id, url, title, sort, label, status) {
    $('.updateModal').modal('show');
    $('#modalTitle').html('<i class="fas fa-sm fa-edit"></i> ' +title);
    $('#link_id').val(id);
    $('#url').val(url);
    $('#title').val(title);
    $('#sort').val(sort);
    $('#label').val(label);
    $('#status').val(status);

    $('.submit').on('click', function(){
        var id = $('#link_id').val();
        var url = $('#url').val();
        var title = $('#title').val();
        var sort = $('#sort').val();
        var label = $('#label').val();
        var status = $('#status').val();

        if(url == "" || title == "") {
            errorAlert();
        } else {
            submit(id, url, title, sort, label, status);
        }
    });
}

function submit(id, url, title, sort, label, status) {
    $.ajax({
        url: 'controller/controller.footer_links.php?mode=updateLinks',
        method: 'POST',
        data: {
            id:id,
            url:url,
            title:title,
            sort:sort,
            label:label,
            status:status
        },
        success:function() {
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="footer_links.php";
        }
    });
}