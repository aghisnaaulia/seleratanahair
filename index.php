<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Menu Cita Rasa Nusantara | Selera Tanah Air</title>

    <!-- CSS -->
    <link rel="stylesheet" href="index.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="isi">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbarr" style="background-color: #FFFFF;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Selera Tanah Air</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <nav class="navbar search" id="navbar-search" style="background-color: none;">
                <div class="container-fluid">
                    <form class="d-flex" id="form-search" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </nav>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav" id="navbartext">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">For You</a>
                    </li>

                    <li class="nav-item">
                        <div class="dropdown" bis_skin_checked="1">
                            <a class="btn btn-secondary dropdown-toggle" id="btn-recipes" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Recipes
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="recipes.php">Recipes</a></li>
                                <li><a class="dropdown-item" href="addrecipes.php">Add Recipes</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- slider -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="sliderr">
            <div class="carousel-item active">
                <img src="assets/img/carousel_1.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="assets/img/carousel_2.jpg" class="d-block w-100" alt="...">
                <button type="button" class="btn btn-lg btn-custom" id="btn-slider-1">Show Recipes</button>
            </div>

            <div class="carousel-item">
                <img src="assets/img/carousel_3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <br>

    <!-- rekomendasi -->
    <div class="container text-center">
        <p id="rekomen-text">Popular Recipes you Can Try</p>

        <div class="row row-cols-1 row-cols-md-3 g-4" id="row-card-rekomen">
            <div class="col">
                <div class="card h-100" style="width: 18rem; border-radius: 20px">
                    <img src="assets/img/rendang.jpg" class="card-img-top" id="img-card-rekomen" alt="Rendang">
                    <div class="card-body">
                        <p class="card-text" id="card-text-rekomen">
                            Rendang adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu
                            rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan...</p>
                        <a href="#" class="card-link" id="card-klik">
                            Show Recipes</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100" style="width: 18rem; border-radius: 20px">
                    <img src="assets/img/gudeg.jpg" class="card-img-top" id="img-card-rekomen" alt="Gudeg">
                    <div class="card-body">
                        <p class="card-text" id="card-text-rekomen">
                            Gudeg adalah hidangan khas Daerah Istimewa Yogyakarta yang terbuat dari nangka muda yang
                            dimasak dengan santan...</p>
                        <a href="#" class="card-link" id="card-klik">
                            Show Recipes</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card h-100" style="width: 18rem; border-radius: 20px">
                    <img src="assets/img/rendang.jpg" class="card-img-top" id="img-card-rekomen" alt="Rendang">
                    <div class="card-body">
                        <p class="card-text" id="card-text-rekomen">
                            Rendang adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu
                            rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan...</p>
                        <a href="#" class="card-link" id="card-klik">
                            Show Recipes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <!-- eksplor -->
    <div class="container text-center" id="eksplor-full">
        <h2 id="eksplor-text">Explore Recipes by District</h2>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-start" id="kotak-row-eksplor">
                        <div class="col">
                            <div id="kotak-col-eksplor">
                                <a href="#" id="prov-klik">Aceh</a>
                                <a href="#" id="prov-klik">Sumatera Utara</a>
                                <a href="#" id="prov-klik">Sumatera Selatan</a>
                                <a href="#" id="prov-klik">Sumatera Barat</a>
                                <a href="#" id="prov-klik">Bengkulu</a>
                                <a href="#" id="prov-klik">Riau</a>
                                <a href="#" id="prov-klik">Kepulauan Riau</a>
                            </div>
                        </div>

                        <div class="col">
                            <div id="kotak-col-eksplor">
                                <a href="#" id="prov-klik">Jambi</a>
                                <a href="#" id="prov-klik">Lampung</a>
                                <a href="#" id="prov-klik">Bangka Belitung</a>
                                <a href="#" id="prov-klik">Kalimantan Barat</a>
                                <a href="#" id="prov-klik">Kalimantan Timur</a>
                                <a href="#" id="prov-klik">Kalimantan Selatan</a>
                                <a href="#" id="prov-klik">Kalimantan Tengah</a>
                            </div>
                        </div>

                        <div class="col">
                            <div id="kotak-col-eksplor">
                                <a href="#" id="prov-klik">Kalimantan Utara</a>
                                <a href="#" id="prov-klik">Banten</a>
                                <a href="#" id="prov-klik">DKI Jakarta</a>
                                <a href="#" id="prov-klik">Jawa Barat</a>
                                <a href="#" id="prov-klik">Jawa Tengah</a>
                                <a href="#" id="prov-klik">Daerah Istimewa Yogyakarta</a>
                                <a href="#" id="prov-klik">Jawa Timur</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row align-items-start" id="kotak-row-eksplor">
                        <div class="col">
                            <div id="kotak-col-eksplor">
                                <a href="#" id="prov-klik">Bali</a>
                                <a href="#" id="prov-klik">Nusa Tenggara Timur</a>
                                <a href="#" id="prov-klik">Nusa Tenggara Barat</a>
                                <a href="#" id="prov-klik">Gorontalo</a>
                                <a href="#" id="prov-klik">Sulawesi Barat</a>
                                <a href="#" id="prov-klik">Sulawesi Tengah</a>
                                <a href="#" id="prov-klik">Sulawesi Utara</a>
                            </div>
                        </div>

                        <div class="col">
                            <div id="kotak-col-eksplor">
                                <a href="#" id="prov-klik">Sulawesi Tenggara</a>
                                <a href="#" id="prov-klik">Sulawesi Selatan</a>
                                <a href="#" id="prov-klik">Maluku Utara</a>
                                <a href="#" id="prov-klik">Maluku</a>
                                <a href="#" id="prov-klik">Papua Barat</a>
                                <a href="#" id="prov-klik">Papua</a>
                                <a href="#" id="prov-klik">Papua Tengah</a>
                            </div>
                        </div>

                        <div class="col">
                            <div id="kotak-col-eksplor">
                                <a href="#" id="prov-klik">Papua Pegunungan</a>
                                <a href="#" id="prov-klik">Papua Selatan</a>
                                <a href="#" id="prov-klik">Papua Barat Daya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
            crossorigin="anonymous"></script>
</body>

</html>