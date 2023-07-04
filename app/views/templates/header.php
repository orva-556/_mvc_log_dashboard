<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title']; ?></title>
    <link href="<?= BASEURL; ?>/public/assets/bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?= BASEURL; ?>/public/assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= BASEURL; ?>/public/assets/_orva/css/style.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand my-brand" href="<?= BASEURL; ?>">ORVA-v67</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?= $data['nav_link_home']; ?>" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    <a class="nav-link <?= $data['nav_link_about']; ?>" href="<?= BASEURL; ?>/about">About</a>
                </div>
            </div>
        </div>
    </nav> -->

<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </div>
    </nav> -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $data['title']; ?></title>

    <link href="<?= BASEURL; ?>/public/assets/bootstrap-5.0.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?= BASEURL; ?>/public/assets/_orva/css/my-style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="<?= BASEURL; ?>/public/assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- <link rel="shortcut icon" href="<?= BASEURL; ?>/public/img/logo/orva-light.png" type="image/png"> -->
    <link rel="shortcut icon" href="<?= BASEURL; ?>/public/img/logo/untad.png" type="image/png">

    <script>
        var baseurl = "<?= BASEURL ?>";
    </script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <a class="navbar-brand" href="index.php">
                <img src="<?= BASEURL; ?>/public/img/logo/untad.png" alt="untad" height="47.5" class="me-1">
                <!-- <img src="<?= BASEURL; ?>/public/img/logo/orva-light.png" alt="untad" height="47.5" class=""> -->
                <label class="my-brand align-middle text-start" style="line-height: 20px;">
                    <span class="fs-6"><strong>UPT. TIK UNTAD</strong></span><br>
                    <!-- <span class="fs-6"><strong>ORVA. ov556</strong></span><br> -->
                    <span class="fs-4">LOG DASHBOARD</span>
                </label>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="fa fa-bars" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <div class="navbar-nav">
                    <a class="nav-link <?= $data['nav_link_status']; ?>" aria-current="page" href="<?= $data['nav_link_core']; ?>"><?= $data['nav_link_name']; ?></a>
                    <a class="nav-link <?= $data['nav_link_about']; ?>" href="<?= BASEURL; ?>/about">About</a>
                </div>
            </div>
        </div>
    </nav>