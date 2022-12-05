$(function(){

    $('#about_content').summernote({
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

    var status_module =  window.localStorage.getItem("stat");
    if(status_module == "success"){
        sucessAlert();
        localStorage.clear();
    }

    $('#btn-save').on('click', function(){
        var about_id = $('#about_id').val();
        var title = $('#title').val();
        var about_content = $('#about_content').val();
        var status = $('#status').val();

        if (title == "" || $('#about_content').summernote('isEmpty')) {
            errorAlert();
        } else {
            submit(about_id, title, about_content, status);
        }
    });
    
});

function submit(about_id, title, about_content, status) {
    $.ajax({
        url: 'controller/controller.about_us.php?mode=updateContent',
        method: 'POST',
        data: {
            about_id:about_id,
            title:title,
            about_content:about_content,
            status:status
        },
        success:function(){
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="about_us.php";
        }
    });
}