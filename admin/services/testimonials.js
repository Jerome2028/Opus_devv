$(function(){
    testimonialsData();

    var status_module =  window.localStorage.getItem("stat");
    if(status_module == "success"){
        sucessAlert();
        localStorage.clear();
    }

    $('#addNewTestimonials').on('click', function() {
        $('#addTestimonialsModal').modal('show');

        testimonialSummernote('#empty_testimonial_content');

        $('.submitAddBtn').on('click', function() {
           var name = $('#empty_name').val();
           var position = $('#empty_position').val();
           var content = $('#empty_testimonial_content').val();
           var category = $('#empty_category').val();
           var sort = $('#empty_sort').val();
           var status = $('#empty_status').val();

           if(name == "" || $('#empty_testimonial_content').summernote('isEmpty') || category == "") {
                errorAlert();
            } else {
                submitAddnew(name, position, content, category, sort, status);
            }
        });

        $('.resetBtn').on('click', function() {
            $('input[type=text]').val('');
            $('input[type=number]').val(0);
            $('#empty_testimonial_content').summernote('code', '');
            $('#status').val(0);
        });
    });
})

function testimonialsData() {
    $('#dataTable').DataTable({
        "bLengthChange": false,
        "pageLength": 10,
        "ajax" : "controller/controller.testimonials.php?mode=testimonialsData",
        "columns" : [
            { "data" : "name" },
            { "data" : "position" },
            { "data" : "category" },
            { "data" : "sort" },
            { "data" : "status" },
            { "data" : "date_added" },
            { "data" : "action" }
        ]
    });
}

function testimonialSummernote(input_id) {
    $(input_id).summernote({
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
}

function submitAddnew(name, position, content, category, sort, status) {
    $.ajax({
        url: 'controller/controller.testimonials.php?mode=addTestimonials',
        method: 'POST',
        data: {
            name:name,
            position:position,
            content:content,
            category:category,
            sort:sort,
            status:status
        },
        success:function() {
            window.localStorage.setItem("stat", "success");
            window.location.href="testimonials.php";
        }
    })
}

function updateTestimonials(id, name, position, content, category, sort, status) {
    $('#updateTestimonialsModal').modal('show');
    $('#modalTitle').html('<i class="fas fa-sm fa-edit"></i> Update '+name+' testimonials');

    testimonialSummernote('#testimonial_content');

    $('#testimonials_id').val(id);
    $('#name').val(name);
    $('#position').val(position);
    $('#testimonial_content').summernote('code', content);
    $('#category').val(category);
    $('#sort').val(sort);
    $('#status').val(status);

    $('.submitUpdateBtn').on('click', function() {
        var id = $('#testimonials_id').val();
        var name = $('#name').val();
        var position = $('#position').val();
        var content = $('#testimonial_content').val();
        var category = $('#category').val();
        var sort = $('#sort').val();
        var status = $('#status').val();

        if(name == "" || $('#testimonial_content').summernote('isEmpty') || category == "") {
            errorAlert();
        } else {
            submitUpdate(id, name, position, content, category, sort, status);
        }
    });

    $('.resetBtn').on('click', function() {
        $('input[type=text]').val('');
        $('input[type=number]').val(0);
        $('#testimonial_content').summernote('code', '');
        $('#status').val(0);
    });
}

function submitUpdate(id, name, position, content, category, sort, status) {
    $.ajax({
        url: 'controller/controller.testimonials.php?mode=updateTestimonials',
        method: 'POST',
        data: {
            id:id,
            name:name,
            position:position,
            content:content,
            category:category,
            sort:sort,
            status:status
        },
        success:function() {
            window.localStorage.setItem("stat", "success");
            window.location.href="testimonials.php";
        }
    })
}

function deleteTestimonials(id) {
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
                url: 'controller/controller.testimonials.php?mode=deleteTestimonials',
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
                            window.location.href = "testimonials.php";
                        });
                    } else  {
                        Swal.fire(
                            'Error!',
                            'Opps! Something went wrong.',
                            'error'
                        ).then(function(){
                            $('#preloader').show();
                            window.location.href = "testimonials.php";
                        });
                    }

                }
            })
        }
    })
}