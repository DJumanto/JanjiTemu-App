<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>JanjiTemu</title>
</head>

<body>
    <nav class="navbar bg-white">
        <div class="container-fluid">
            <a class="navbar-brand ms-4" href="#">
                <img src="/img/janjitemu-full-logo-bg.png" alt="logo" class="d-inline-block align-text-top">
            </a>
            <form class="d-flex flex-row" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari event" aria-label="Search">
                <input class="form-control me-2" type="search" placeholder="Kota terdekat" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="d-flex">
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        <i class="bi bi-translate"></i> Bahasa
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Bahasa Indonesia</a></li>
                        <li><a class="dropdown-item" href="#">English</a></li>
                    </ul>
                </div>
                <button type="button" class="btn">Login</button>
                <a class="btn btn-primary" href="#" role="button">Sign up</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row"><br><br><br></div>
        <div class="row">
            <div class="col-md ms-5">
                <h1 class="mb-3">
                    Platform yang <strong>mempertemukan</strong> semua orang dengan <strong>ketertarikan yang
                        sama</strong>
                </h1>
                <p>
                    Apa pun yang Anda sukai, mulai dari hiking dan membaca hingga networking dan berbagi keterampilan,
                    ada
                    ribuan orang yang membagikannya di JanjiTemu. Acara nonstop setiap hari — Tunggu apalagi? mari
                    bersenang-senang!
                </p>
                <button type="button" class="btn btn-primary">Daftar disini</button>
            </div>
            <div class="col-md">
                <img src="/img/friends2-res-no.png" alt="">
            </div>
        </div>
        <div class="row"><br><br></div>
        <div class="row">
            <div class="col-md-9 ms-5 mt-5">
                <h2>Event yang akan datang</h2 </div>
            </div>
            <div class="col-md ms-auto mt-5">
                <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                    href="#">
                    <br>
                    <h6>Lihat selengkapnya</h6>
                </a>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center vh-100">
        @foreach($results as $result)
            <div class="row ms-4 mt-4">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset(str_replace('public', 'storage', $result->e_image)) }}" widht="500px" height="200px" class="card-img-top" alt="Event Image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="#" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover">
                                    {{ $result->e_name }}
                                </a>
                            </h5>
                            <p class="card-text">Hosted by: {{ $result->g_name }}</p>
                            <p class="card-text">Place: {{ $result->e_place }}</p>
                            <p><i class="bi bi-calendar4-event"></i> {{ $result->e_date }} - {{ $result->e_time }}</p>
                            <h6><i class="bi bi-ticket-perforated"></i> FREE</h6>
                            <div class="float-end">
                                <a href="#" class="btn btn-primary">Daftar sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
        <br><br>
        <div class="row ms-4 rounded" style="background-color:#7879DF;">
            <div class="col-md ms-5 pt-5">
                <h3 class="mt-4">Bergabung bersama JanjiTemu</h3>
                <p>Orang-orang menggunakan JanjiTemu untuk bertemu orang baru, mempelajari hal baru, membangun
                    suasana
                    penuh dukungan,
                    keluar dari zona nyaman, dan mengejar minat mereka bersama-sama. </p>
                <a href="#" class="btn btn-dark p-3 mt-3">Bergabung sekarang</a>
            </div>
            <div class="col">
                <img src="/img/friends3-res-no.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>