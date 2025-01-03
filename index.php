<?php
    include('navbar.php');
    include('config.php');

    $data =  mysqli_query($connection, "SELECT * FROM recipes
                        ORDER BY id_recipes DESC") or die(mysqli_error($connection));
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Menu Cita Rasa Nusantara | Selera Tanah Air</title>
</head>

<body class="isi">
    <!-- slider -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" id="sliderr">
            <div class="carousel-item active">
                <img src="assets/img/carousel_1.jpg" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="assets/img/carousel_2.jpg" class="d-block w-100" alt="...">
                <a href="recipes.php">
                    <button type="button" class="btn btn-lg btn-custom" id="btn-slider-1">
                        Show Recipes
                    </button>
                </a>
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
    <br>

    <!-- rekomendasi -->
    <div class="container text-center">
        <p id="rekomen-text" style="font-size: 20px;">Popular Recipes you Can Try</p>

        <br>

        <div class="row g-4" style="padding-left: 3rem;">
        <?php
            while ($row = $data->fetch_assoc()) {
                echo ' <div class="col-md-4">
                            <div class="card h-100" style="width: 18rem; border-radius: 20px">
                                <img src="'.htmlspecialchars($row['image']).'" class="card-img-top" id="img-card-rekomen" alt="Rendang">
                                <div class="card-body">
                                <h6>'.htmlspecialchars($row['menu']).'</h6>
                                    <a href="recipes_details.php?id_recipes=' . $row['id_recipes'] . '" class="card-link" id="card-klik">
                                        Show Recipes</a>
                                </div>
                            </div>
                        </div>';
            }
        ?>

        </div>
    </div>

    <br><br><br>

    <!-- eksplor -->
    <div class="container text-center" id="eksplor-full">
        <h2 id="eksplor-text">Explore Recipes by Province</h2>
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
</body>

</html>
