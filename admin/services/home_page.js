$(function() {
    cardData();
    heroData();
    addHeroImg();

    addCardContent();

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

    var status_module =  window.localStorage.getItem("stat");
    if(status_module == "success"){
        sucessAlert();
        localStorage.clear();
    }

    $('#blah').attr('src', 'assets/img/img-thumbnail.jpg');

    $('#image').change(function(){
        readImg(this);
    })

});

function readImg(input) {

    if(input.files && input.files[0]) {
        var read = new FileReader();

        read.onload = function(e) {
            $('#blah').attr('src', e.target.result);
        }

        read.readAsDataURL(input.files[0]);
    }
}

function cardData() {
    $('#dataTable').DataTable({
        "bLengthChange": false,
        "pageLength": 6,
        "ajax" : "controller/controller.home_page.php?mode=cardDatalist",
        "columns" : [
            { "data" : "card_title" },
            { "data" : "content" },
            { "data" : "sort" },
            { "data" : "card_status" },
            { "data" : "date_update" },
            { "data" : "action" }
        ]
    });
}

function heroData() {
    $('#dataHeroImage').DataTable({
        "bLengthChange": false,
        "pageLength": 5,
        "ajax" : "controller/controller.home_page.php?mode=heroDatalist",
        "columns" : [
            { "data" : "img" },
            { "data" : "title" },
            { "data" : "link" },
            { "data" : "sort" },
            { "data" : "status" },
            { "data" : "date_update" },
            { "data" : "action" }
        ]
    });
}

function addHeroImg() {
    $('#addImageHero').on('click', function() {
        $('.heroImgModal').modal('show');
        // $('#modalForm').attr('action', 'controller/controller.home_page.php?mode=addHeroImg');
        $('#modalTitleHero').html('<i class="fas fa-plus"></i> Add Image');

        $('input[type=text], input[type=url]').val('');
        $('input[type=number]').val(0);
        $('#heroImgStatus').val(0);

        $('#hero-image').attr('src', 'assets/img/hero-tumbnail.jpg').css({'border' : '1px solid black'});
        $('.note').text('No Available Image').css({'color' : 'red'});

        // $('#modalForm').on('submit', function(e) {
        //     e.preventDefault();

            // $.ajax({
            //     url: 'controller/controller.home_page.php?mode=addHeroImg',
            //     type: 'POST',
            //     data: new FormData(this),
            //     contentType: false,
            //     cache: false,
            //     processData: false,
            //     success: function(data) {
            //         var obj = JSON.parse(data);

            //         if (obj.message == "Invalid file format") {
            //             invalidFormat();
            //         } else if (obj.message == "Existing file" ) {
            //             errorUpload();
            //         } else if (obj.message == "Error Update") {
            //             errorAlert();
            //         } else if (obj.message == "Success Insert") {
            //             window.localStorage.setItem("stat", "success");
            //             window.location.href = "home_page.php";
            //         }
            //     }
            // });

        // });

        // $('.closeBtn').on('click', function() {
        //     $('.heroImgModal').removeClass('addHeroImage');
        //     $('#modalForm').attr('action', '');
        // });

        $('.resetBtn').on('click', function() {
            $('input[type=text], input[type=url]').val('');
            $('input[type=number]').val(0);
            $('#heroImgStatus').val(0);
        });
    });
}

function updateHero(id, img, title, link_title, link, sort, status) {
    $('.heroImgModal').modal('show');
    $('#modalTitleHero').html('<i class="fas fa-sm fa-edit"></i> ' + title);

    $('#hero_id').val(id);
    $('#title').val(title);
    $('#link_title').val(link_title);
    $('#url').val(link);
    $('#sort_by').val(sort);
    $('#heroImgStatus').val(status);

    imageHero(img);
    $('.note').text(img).css({'color' : 'blue'});

    $('#modalForm').on('submit', function(e) {

        e.preventDefault();

        alert('update');

        // $.ajax({
        //     url: 'controller/controller.home_page.php?mode=updateHeroImg',
        //     type: 'POST',
        //     data: new FormData(this),
        //     contentType: false,
        //     cache: false,
        //     processData: false,
        //     success: function(data) {
        //         var obj = JSON.parse(data);

        //         if (obj.message == "Invalid file format") {
        //             invalidFormat();
        //         } else if (obj.message == "Existing file" ) {
        //             errorUpload();
        //         } else if (obj.message == "Error Update") {
        //             errorAlert();
        //         } else if (obj.message == "Success Insert") {
        //             window.localStorage.setItem("stat", "success");
        //             window.location.href = "home_page.php";
        //         }
        //     }
        // });

    })

    $('.resetBtn').on('click', function() {
        $('input[type=text], input[type=url]').val('');
        $('input[type=number]').val(0);
        $('#status').val(0);
    });
}

function imageHero(img) {
    $.ajax({
        url: img,
        type:'HEAD',
        erro:function() {
            $('#hero-image').attr('src', 'assets/img/hero-tumbnail.jpg');
        },
        success:function() {
            $('#hero-image').attr('src', img);
        }
    })
}

function deleteHero(id) {
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
                url: 'controller/controller.home_page.php?mode=deleteHeroImg',
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
                            window.location.href = "home_page.php";
                        });
                    } else  {
                        Swal.fire(
                            'Error!',
                            'Opps! Something went wrong.',
                            'error'
                        ).then(function(){
                            $('#preloader').show();
                            window.location.href = "home_page.php";
                        });
                    }

                }
            })
        }
    })
}

function updateCards(card_id, card_title, img, content, link, sort, card_status) {
    $('.cardContentModal').addClass('updateContents').modal('show');
    $('#modalCardForm').attr('action', 'controller/controller.home_page.php?mode=updateCardContent');
    $('#modalTitle').html('<i class="fas fa-sm fa-edit"></i> ' + card_title);

    $('#card_id').val(card_id);
    $('#card_title').val(card_title);
    $('#card_content').summernote('code', content);
    $('#sort').val(sort);
    $('#link').val(link);
    $('#cardContentStatus').val(card_status);

    if (img != "") {
        $('div #thumbnail-container').removeClass('img-thumbnail-container');
        $('#card-image').addClass('team-img');
        $('#card-image').attr('src', img);
    } else {
        $('div #thumbnail-container').addClass('img-thumbnail-container');
        $('#card-image').removeClass('team-img');
        $('#card-image').attr('src', img);
    }

    $('#modalCardForm').on('submit', function(e){

        e.preventDefault();

        $.ajax({
            url: 'controller/controller.home_page.php?mode=updateCardContent',
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
                    window.location.href = "home_page.php";
                }
            }
        });

    })

    $('.closeBtn').on('click', function() {
        $('.cardContentModal').removeClass('updateContents');
        $('#modalCardForm').attr('action', '');
    });

    $('.resetBtn').on('click', function() {
        $('input[type=text], input[type=url]').val('');
        $('#status').val(0);
        $('#card_content').summernote('code', '');
        $('#sort').val(0);
    });
}

function addCardContent() {
    $('#addCard').on('click', function() {
        $('.cardContentModal').addClass('addContents').modal('show');
        $('#modalCardForm').attr('action', 'controller/controller.home_page.php?mode=addCardContents');
        $('#modalTitle').html('<i class="fas fa-plus"></i> Add Card');

        $('#card_content').summernote('code', '');
        $('input[type=text], input[type=url]').val('');
        $('#cardContentStatus').val(0);
        $('#sort').val(0);

        $('div #thumbnail-container').addClass('img-thumbnail-container');
        $('#card-image').removeClass('team-img');
        $('#card-image').attr('src', '');

        $('#modalCardForm').on('submit', function(e) {

            e.preventDefault();
            
            $.ajax({
                url: 'controller/controller.home_page.php?mode=addCardContents',
                type: 'POST',
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    var obj = JSON.parse(data);
                    // alert(obj.message);

                    if (obj.message == "Invalid file format") {
                        invalidFormat();
                    } else if (obj.message == "Existing file" ) {
                        errorUpload();
                    } else if (obj.message == "Error Update") {
                        errorAlert();
                    } else if (obj.message == "Success Insert") {
                        window.localStorage.setItem("stat", "success");
                        window.location.href = "home_page.php";
                    }

                }
            })
        });

        $('.closeBtn').on('click', function() {
            $('.cardContentModal').removeClass('addContents');
            $('#modalCardForm').attr('action', '');
        });

        $('.resetBtn').on('click', function() {
            $('input[type=text], input[type=url]').val('');
            $('input[type=number]').val(0);
            $('#cardContentStatus').val(0);
        });
    })
}

function deleteCard(card_id) {
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
                url: 'controller/controller.home_page.php?mode=deleteCardContent',
                method: 'POST',
                data: {
                    card_id:card_id
                },
                success: function(response) {
                    var resValue = jQuery.parseJSON( response );

                    if(resValue['message'] == "Delete Success") {
                        Swal.fire(
                            'Deleted Successfully!',
                            '',
                            'success'
                        ).then(function(){
                            window.location.href = "home_page.php";
                        });
                    } else  {
                        Swal.fire(
                            'Error!',
                            'Opps! Something went wrong.',
                            'error'
                        ).then(function(){
                            window.location.href = "home_page.php";
                        });
                    }

                }
            })
        }
    })
}

function previewImg() {
    frame.src=URL.createObjectURL(event.target.files[0]);
    return
}