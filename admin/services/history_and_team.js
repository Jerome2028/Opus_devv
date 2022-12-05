$(function() {

    $('#page_content').summernote({
        height: 300,
        placeholder: 'Type Here...',
        disableDragAndDrop: true,
        blockqouteBreakingLevel: 2,
        fontSizeUnit: 'pt',
        lineHeight: 20,
        dialogsInBody: true,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear', 'fontname', 'fontsize', 'color']],
            ['para', ['paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen']],
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

    $('#introduction').summernote({
        height: 300,
        placeholder: 'Type Here...',
        disableDragAndDrop: true,
        blockqouteBreakingLevel: 2,
        fontSizeUnit: 'pt',
        lineHeight: 20,
        dialogsInBody: true,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear', 'fontname', 'fontsize', 'color']],
            ['para', ['paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture']],
            ['view', ['fullscreen']],
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

    $('#btn-save').on('click', function() {
        var id = $('#history_id').val();
        var title = $('#title').val();
        var page_content = $('#page_content').val();
        var status = $('#status').val();

        if (title == "" || $('#page_content').summernote('isEmpty') || status == "") {
            errorAlert();
        } else {
            submitHistoryData(id, title, page_content, status);
        }
    });

    var status_module =  window.localStorage.getItem("stat");
    if(status_module == "success"){
        sucessAlert();
        localStorage.clear();
    }

    listTeams();
    
});

function submitHistoryData(id, title, page_content, status) {
    $.ajax({
        url: 'controller/controller.history_and_team.php?mode=updateHistoryContent',
        method: 'POST',
        data: {
            id:id,
            title:title,
            page_content:page_content,
            status:status
        },
        success:function(){
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="history_and_team.php";
        }
    });
}

function listTeams() {
    $('#dataTable').DataTable({
        "bLengthChange": false,
        "pageLength": 5,
        "ajax" : "controller/controller.history_and_team.php?mode=listTeams",
        "columns" : [
            { "data" : "name" },
            { "data" : "position" },
            { "data" : "status" },
            { "data" : "date_added" },
            { "data" : "action" }
        ],
    });
}

function updateTeamsTable(id, img, name, position, introduction, status) {
    $('#staticBackdrop').addClass('staticModal'+id);

    $('.staticModal'+id).modal('show');
    $('#modalTitle').html('<i class="fas fa-sm fa-edit"></i> ' + position);

    $('#id').val(id);
    $('#name').val(name);
    $('#position').val(position);
    $('#introduction').summernote('code', introduction);
    $('#status').val(status);

    if (img != "") {
        $('div #thumbnail-container').removeClass('img-thumbnail-container');
        $('#team-image').addClass('team-img');
        $('#team-image').attr('src', img);
    } else {
        $('div #thumbnail-container').addClass('img-thumbnail-container');
        $('#team-image').removeClass('team-img');
        $('#team-image').attr('src', img);
    }

    $('#modalForm').on('submit', function(e){

        e.preventDefault();

        if($('#introduction').summernote('isEmpty')) {
            errorAlert();
        } else {
            $.ajax({
                url: 'controller/controller.history_and_team.php?mode=updateTeamInfo',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    var obj = JSON.parse(data);
    
                    if (obj.message == "Invalid file format") {
                        invalidFormat();
                    } else if (obj.message == "Existing file" ) {
                        errorUpload();
                    } else if (obj.message == "Error Update") {
                        errorAlert();
                    } else if (obj.message == "Success Insert") {
                        window.localStorage.setItem("stat", "success");
                        window.location.href = "history_and_team.php";
                    }
                }
            });
        }

    });
    
    $('.closeBtn').on('click', function() {
        $('#staticBackdrop').removeClass('staticModal'+id);
    });

    $('.resetBtn').on('click', function() {
        $(':input', '#modalForm').not("#id").val('');
        $('#status').val(0);
        $('#introduction').summernote('code', '');
    });
}