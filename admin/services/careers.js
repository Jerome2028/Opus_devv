$(function(){
    $('#careers_content').summernote({
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

    $('#btn-save').on('click', function(){
        var careers_id = $('#careers_id').val();
        var title = $('#title').val();
        var careers_content = $('#careers_content').val();
        var status = $('#status').val();

        if (careers_id == "" || title == "" || $('#careers_content').summernote('isEmpty')) {
            errorAlert();
        } else {
            submitUpdate(careers_id, title, careers_content, status);
        }
    });

    $('#addPosition').on('click', function() {
        $('.staticModal').modal('show');
        $('#modalTitle').html('<i class="fas fa-plus"></i> Add New Position');
        $('.update').hide();
        $('.submit').show();

        $('#careers_id').val('');
        $('#position').val('');
        $('#sort_by').val('0');
        $("select option:checked").val();

        $('.submit').on('click', function() {
            var position = $('#position').val();
            var sort_by = $('#sort_by').val();
            var status = $('#status').val();

            if (position == "") {
                errorAlert();
            } else {
                submitAddNew(position, sort_by, status);
            }
        });

        $('.closeBtn').on('click', function() {
            window.location.href="careers.php";
        });
    });

    var module_status = window.localStorage.getItem("stat");
    if (module_status == "success") {
        sucessAlert();
        localStorage.clear();
    }

});

function submitUpdate(careers_id, title, careers_content, status) {
    $.ajax({
        url: 'controller/controller.careers.php?mode=updateContent',
        method: 'POST',
        data: {
            careers_id:careers_id,
            title:title,
            careers_content:careers_content,
            status:status
        },
        success:function() {
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="careers.php";
        }
    });
}

function submitAddNew(position, sort_by, status) {
    $.ajax({
        url: 'controller/controller.careers.php?mode=addPosition',
        method: 'POST',
        data: {
            position:position,
            sort_by:sort_by,
            status:status
        },
        success:function() {
            window.localStorage.setItem("stat", "success");
            window.location.href="careers.php";
        }
    });
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
                url: 'controller/controller.careers.php?mode=deletePosition',
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
                            window.location.href = "careers.php";
                        });
                    } else  {
                        Swal.fire(
                            'Error!',
                            'Opps! Something went wrong.',
                            'error'
                        ).then(function(){
                            $('#preloader').show();
                            window.location.href = "careers.php";
                        });
                    }

                }
            })
        }
    })
}

function updateLink(id, position, sortby, status) {
    $('.staticModal').modal('show');
    $('#modalTitle').html('<i class="fas fa-sm fa-edit"></i> ' + position);
    $('.submit').hide();
    $('.update').show();

    $('#careers_id').val(id);
    $('#position').val(position);
    $('#sort_by').val(sortby);
    $('#status').val(status);

    $('.update').on('click', function() {
        var id = $('#careers_id').val();
        var position = $('#position').val();
        var sort_by = $('#sort_by').val();
        var status = $('#status').val();

        if (position == "" || position == null) {
            errorAlert();
        } else {
            updateHiringPosition(id, position, sort_by, status);
        }
    });

    $('.closeBtn').on('click', function() {
        window.location.href="careers.php";
    });
}

function updateHiringPosition(id, position, sort_by, status) {
    $.ajax({
        url: 'controller/controller.careers.php?mode=updatePosition',
        method: 'POST',
        data: {
            id:id,
            position:position,
            sort_by:sort_by,
            status:status
        },
        success:function() {
            $('#preloader').show();
            window.localStorage.setItem("stat", "success");
            window.location.href="careers.php";
        }  
    });
}