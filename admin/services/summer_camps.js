$(function(){
    $('#summer_camps_content').summernote({
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

    var status_module = window.localStorage.getItem("stat");
    if (status_module == "success") {
        sucessAlert();
        localStorage.clear();
    }

    $('#btn-save').on('click', function(){
        var summer_camps_id = $('#summer_camps_id').val();
        var title = $('#title').val();
        var summer_camps_content = $('#summer_camps_content').val();
        var status = $('#status').val();

        if (summer_camps_id == "" || title == "" || summer_camps_content == "") {
            errorAlert();
        } else {
            submit(summer_camps_id, title, summer_camps_content, status);
        }
    })
});

function submit(summer_camps_id, title, summer_camps_content, status) {
    $.ajax({
        url: 'controller/controller.summer_camps.php?mode=updateContent',
        method: 'POST',
        data: {
            summer_camps_id:summer_camps_id,
            title:title,
            summer_camps_content:summer_camps_content,
            status:status
        },
        success:function() {
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="summer_camps.php";
        }
    });
}