$(function() {
    $('#btn-user').on('click', function(){
        var user_email = $('#user_email').val();
        var user_password = $('#user_password').val();

        if (user_email == "" || user_password == "") {
            loginIvalid();
        } else {
            submit(user_email, user_password)
        }
    });
});

function submit(user_email, user_password) {
    $.ajax({
        url: 'controller/controller.login.php?mode=login',
        method: 'POST',
        data: {
            user_email:user_email,
            user_password:user_password
        },
        success:function(response) {
            var responseVal = jQuery.parseJSON(response);
            
            if (responseVal["message"] == "Success") {
                Swal.fire({
                    title: 'Successfully Login!',
                    text: 'Welcome Back '+ user_email,
                    icon: 'success',
                    confirmButtonColor: '#3085d6'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href="home.php";
                    } else {
                        window.location.href="logout.php";
                    }
                })
            } else {
                loginIvalid();
            }
            
        }
    });
}