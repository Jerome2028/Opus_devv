function errorAlert() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: false
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
        timer: 3000,
        timerProgressBar: false,
    })
    
    Toast.fire({
        icon: 'success',
        title: 'Data Updated Successfully'
    })
}

function loginIvalid() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
    })

    Toast.fire({
        icon: 'warning',
        title: 'Invalid Credentials'
    })
}

function errorUpload() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar: false,
    })
    
    Toast.fire({
        icon: 'warning',
        title: 'The file you trying to upload is already exists'
    })
}

function invalidFormat() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 4000,
        timerProgressBar: false,
    })
    
    Toast.fire({
        icon: 'warning',
        title: 'Invalid File Format'
    })
}