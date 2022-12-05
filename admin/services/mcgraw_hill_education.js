$(function() {

    $('#page_content').summernote({
        height: 500,
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

    $('#card_content').summernote({
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
        var id = $('#id').val();
        var title = $('#title').val();
        var content = $('#page_content').val();
        var status = $('#status').val();

        if (title == "" || $('#page_content').summernote('isEmpty')) {
            errorAlert();
        } else {
            submit(id, title, content, status);
        }
    })

    var status_module = window.localStorage.getItem("stat");

    if (status_module == "success") {
        sucessAlert();
        localStorage.clear();
    }

})

function submit(id, title, content, status) {
    $.ajax({
        url: 'controller/controller.mcgraw_hill_education.php?mode=updateContent',
        method: 'POST',
        data: {
            id:id, 
            title:title, 
            content:content, 
            status:status
        },
        success:function() {
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="mcgraw_hill_education.php";
        }
    });
}

function updateLink(card_id, card_title, content, card_status) {
    $('#staticBackdrop').modal('show');

    $('#modalTitle').html('<i class="fas fa-sm fa-edit"></i> ' + card_title);
    $('#card_id').val(card_id);
    $('#card_title').val(card_title);
    $('#card_content').summernote('code', content);
    $('#status').val(card_status);

    $('.resetBtn').on('click', function() {
        $('input[type=text]').val('');
        $('#status').val(0);
        $('#card_content').summernote('code', '');
    });

    $('.submit').on('click', function() {
        var card_id = $('#card_id').val();
        var card_title = $('#card_title').val();
        var card_content = $('#card_content').val();
        var card_status = $('#status').val();
    
        if(card_title == "" || $('#card_content').summernote('isEmpty')) {
            errorAlert();
        } else {
            submitModal(card_id, card_title, card_content, card_status);
        }
    });
}

function submitModal(card_id, card_title, card_content, card_status) {
    $.ajax({
        url: 'controller/controller.mcgraw_hill_education.php?mode=updateMcGrawCard',
        method: 'POST',
        data: {
            card_id:card_id,
            card_title:card_title,
            card_content:card_content,
            card_status:card_status
        },
        success:function() {
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="mcgraw_hill_education.php";
        }
    });
}