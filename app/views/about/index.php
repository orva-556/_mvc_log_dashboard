<!-- <div class="container">
    <div class="card mt-5">
        <div class="card-header bg-light text-secondary text-end">about/index</div>
        <div class="card-body bg-light text-center">
            <h1 class="card-title">ABOUT ME</h1>
            <img src="<?= BASEURL; ?>/public/img/profile.jpg" alt="profile" width="200" class="rounded-circle shadow mb-2">
            <p>Nama saya <?= $data['nama']; ?>, saya seorang <?= $data['status']; ?>, umur saya <?= $data['umur']; ?> tahun.</p>
        </div>
    </div>
</div> -->

<div class="container mt-4">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-5">
            <div class="card mt-3 mb-3">
                <div class="card-header bg-dark text-start text-white" style="letter-spacing: 1px; font-size: 17px;">
                    <span>
                        <i class="fa fa-file-text fa-fw" aria-hidden="true"></i>
                    </span>
                    <strong>
                        ABOUT
                    </strong>
                </div>
                <div class="card-body border border-secondary my-card-body" style="max-height: 500px; overflow-y: scroll;">
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="rounded-circle mb-2" width="175px" src="https://avatars.githubusercontent.com/u/93414187?v=4" alt="">
                    </div>
                    <div class="text-center">
                        <h5 class="m-0 fw-bold">Muhammad Adi Agum</h5>
                        <p class="m-0 fw-normal fst-italic">this project is my final college project.</p>
                        <hr class="m-2">
                        <label>My Email :</label>
                        <p class="mb-1 fw-bold">adiagum4.2@gmail.com</p>
                        <label>My Github :</label> <br>
                        <a href="https://github.com/orva-556" class="mb-1 fw-bold">https://github.com/orva-556</a> <br>
                        <label>This Project Repository :</label> <br>
                        <a href="https://github.com/orva-556/ov_log_dashboard" class="m-0 fw-bold">https://github.com/orva-556/ov_log_dashboard</a>
                    </div>
                </div>
                <div class="card-footer bg-dark">
                    <div class="row">
                        <div class="text-white">
                            <span class="text-muted">© Muhammad Adi Agum 2023.</span>
                            <a href="<?= $data['back_btn']; ?>" type="button" class="badge btn btn-danger btn-sm float-end">
                                <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>