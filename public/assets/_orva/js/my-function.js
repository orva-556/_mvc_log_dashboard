function showPassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function wrongLogin() {
    Swal.fire({
        position: "top-end",
        icon: "error",
        title: "Username or Password is Wrong!",
        showConfirmButton: false,
        timer: 1500,
        width: 425
    });
}

function logoutConfirm() {
    Swal.fire({
        title: "Are you sure?",
        // text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Logout!",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = baseurl + "/auth/logout";
            // Swal.fire(
            //     'Logged Out',
            //     'You has been logged out.',
            //     'info'
            // )
        }
    });
}