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
    })

    $('#addPosition').on('click', function() {
        $('#staticBackdrop').addClass('addPositionModal').modal('show');
        $('#modalTitle').html('<i class="fas fa-plus"></i> Add New Position');

        $('#course_id').val('');
        $('#course').val('');
        $('#sort_by').val(0);
        $("select option:checked").val();

        $('.submit-btn').on('click', function() {
           var course = $('#course').val();
           var sort_by = $('#sort_by').val();
           var status = $('#status').val();

           if(course == "" || course == null) {
                errorAlert();
           } else {
                addCourse(course, sort_by, status);
           }
        })

        $('.closeBtn').on('click', function() {
            window.location.href="communication_arts.php";
        });
    })

    var status_module = window.localStorage.getItem("stat");
    if (status_module == "success") {
        sucessAlert();
        localStorage.clear();
    }

})

function submit(id, title, content, status) {
    $.ajax({
        url: 'controller/controller.communication_arts.php?mode=updateContent',
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
            window.location.href="communication_arts.php";
        }
    });
}

function updateLink(id, course, sort_by, status) {
    $('#staticBackdrop').addClass('updateModal').modal('show');
    $('#modalTitle').html('<i class="fas fa-sm fa-edit"></i> ' + course);

    $('#course_id').val(id);
    $('#course').val(course);
    $('#sort_by').val(sort_by);
    $('#status').val(status);

    $('.submit-btn').on('click', function() {
       var course_id = $('#course_id').val();
       var course = $('#course').val();
       var sort_by = $('#sort_by').val();
       var status = $('#status').val();

       if(course == "" || course == null) {
            errorAlert();
       } else {
            updateCourse(course_id, course, sort_by, status);
       }
    })

    $('.closeBtn').on('click', function() {
        window.location.href="communication_arts.php";
    });
}

function addCourse(course, sort_by, status) {
    $.ajax({
        url: 'controller/controller.communication_arts.php?mode=addCourse',
        method: 'POST',
        data: {
            course:course,
            sort_by:sort_by,
            status:status
        },
        success:function() {
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="communication_arts.php";
        }
    });
}

function updateCourse(course_id, course, sort_by, status) {
    $.ajax({
        url: 'controller/controller.communication_arts.php?mode=updateCourse',
        method: 'POST',
        data: {
            course_id:course_id,
            course:course,
            sort_by:sort_by,
            status:status
        },
        success:function() {
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="communication_arts.php";
        }
    })
}

function deleteLink(id) {
    Swal.fire({
    title: 'Please confirm to Delete',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Confirm'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: 'controller/controller.communication_arts.php?mode=deleteCourse',
                method: 'POST',
                data: {
                    id:id
                },
                success: function(response) {
                    var resValue = jQuery.parseJSON( response );

                    if(resValue['message'] == "Delete Success") {
                        Swal.fire(
                            'Deleted Successfully!',
                            '',
                            'success'
                        ).then(function(){
                            $('#preloader').show();
                            window.location.href = "communication_arts.php";
                        });
                    } else  {
                        Swal.fire(
                            'Error!',
                            'Opps! Something went wrong.',
                            'error'
                        ).then(function(){
                            $('#preloader').show();
                            window.location.href = "communication_arts.php";
                        });
                    }

                }
            })
        }
    })
}