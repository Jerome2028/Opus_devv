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

    $('#btn-save').on('click', function() {
        var id = $('#id').val();
        var title = $('#title').val();
        var content = $('#page_content').val();
        var status = $('#status').val();

        if(title == "" || $('#page_content').summernote('isEmpty')) {
            errorAlert();
        } else {
            submit(id, title, content, status);
        }
    });

    var status_module = window.localStorage.getItem("stat");

    if (status_module == "success") {
        sucessAlert();
        localStorage.clear();
    }
    
})

function submit(id, title, content, status) {
    $.ajax({
        url: 'controller/controller.standard_test_preparation.php?mode=updateContent',
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
            window.location.href="standard_test_preparation.php";
        }
    });
}