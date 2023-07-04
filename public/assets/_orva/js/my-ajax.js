// $(function() {
//     $('#keyword').on('keyup', function() {
//         console.log('ok');
//     });
// });

// ambil tag input
var keyword = document.getElementById("keyword");
// ambil tombol cari
// var tombolCari = document.getElementById("tombol-cari");
// ambil tbody
var container = document.getElementById("container");

// ambil inputan keyword
keyword.addEventListener("keyup", function () {
    // console.log("ok");
    
    // buat object ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
        // console.log(xhr.responseText);
        container.innerHTML = xhr.responseText;
        }
    };

    // eksekusi ajax
    // xhr.open("GET", "ajax/log.php?keyword=" + keyword.value, true);
    xhr.open("POST", baseurl + "/home/search/" + keyword.value, true);
        // console.log(keyword.value);
    xhr.send();
});

// tombolCari.addEventListener('click', function() {
//     alert('berhasil');
// });
