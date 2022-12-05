function errorAlert() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: false,
        customClass: {
            padding: "padding-toast"
        }
    })
    
    Toast.fire({
        icon: 'error',
        title: 'Please double check the required fields!'
    })
}

function sucessAlert() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar: true,
    })
    
    Toast.fire({
        icon: 'success',
        title: 'Successfully Sent'
    })
}