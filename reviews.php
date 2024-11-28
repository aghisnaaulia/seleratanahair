<!DOCTYPE html>
<html lang="en">
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
                        <a class="nav-link" href="index.php">For You</a>
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
                        <a class="nav-link active" aria-current="page" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- reviews -->
    <div class="container-reviews">
        <h1 id="judul-review">What They Say</h1>

        <br>

        <div class="card mb-3" id="card-revw" style="max-width: 1126px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/avatar/man.png" class="img-fluid rounded-start" id="img-card-review">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" id="card-text-review-1">Asep Saepudin</h5>
                        <p class="card-text" id="card-text-review-2">
                            Saya sangat terkesan dengan berbagai resep
                            yang tersedia di website ini!
                            Setiap langkah dijelaskan dengan jelas dan mudah diikuti,
                            sehingga memasak menjadi pengalaman yang menyenangkan.
                            Hasil masakan saya selalu enak dan disukai oleh keluarga.
                            Terima kasih telah menyediakan sumber inspirasi yang luar biasa
                            untuk para penggemar kuliner!</p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="card mb-3" id="card-revw" style="max-width: 1126px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/avatar/woman.png" class="img-fluid rounded-start" id="img-card-review">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" id="card-text-review-1">Chica Boo</h5>
                        <p class="card-text" id="card-text-review-2">
                            Soto ayamnya berbeda dari yang lain.
                            Kuahnya kental dan gurih, tidak terlalu asin.
                            Ayam suwirnya empuk dan berlimpah.
                            Ditambah dengan kecap, jeruk nipis, dan sambel,
                            rasanya kompleks banget. Recommended untuk pecinta soto!</p>
                    </div>
                </div>
            </div>
        </div>

        <br>

        <div class="card mb-3" id="card-revw" style="max-width: 1126px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="assets/img/avatar/human.png" class="img-fluid rounded-start" id="img-card-review">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" id="card-text-review-1">Lolly</h5>
                        <p class="card-text" id="card-text-review-2">
                            Resep Rendang Daging di website ini
                            sangat autentik, mudah diikuti,
                            dan hasilnya lezat dengan bumbu kaya rasa.
                            Highly recommended!</p>
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