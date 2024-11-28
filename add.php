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
                        <a class="nav-link" href="reviews.php">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_POST['submit'])) {
        $menu = $_POST['menu'];
        $recipes = $_POST['recipes'];
        $province = $_POST['province'];
        $image = $_FILES['image'];

        $check = mysqli_query($connection, "SELECT * FROM recipes WHERE menu='$menu'") or die(mysqli_error);

        if (mysqli_num_rows($check) >= 0) {
            $sql = mysqli_query($connection, "INSERT INTO recipes(menu, recipes, province, image) VALUES('$menu', '$recipes', '$province', '$image')");

            if ($sql) {
                echo '<script>alert("Success! Data Added."); document.location="dashboard.php";</script>';
            } else {
                echo '<div class="alert alert-warning">Error! Please check the data.</div>';
            }
        }
    }
    ?>

    <form action="add.php" method="post" id="form-addrec">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Menu</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="menu" class="form-control" id="input-addrec" size="4" required>
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Recipes</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="recipes" class="form-control" id="input-addrec" required>
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Province</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="province" class="form-control" id="input-addrec" required>
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Image</label><br>
            <label class="col-form-label col-md-3 col-sm-3 label-align">*Format .png .jpg .jpeg</label>
            <div class="col-md-6 col-sm-6">Choose file:
                <div class="custom-file">
                    <input class="custom-file-input" type="file" name="image" id="input-addrec" onchange="VerifyFileNameAndFileSize()"
                        accept=".png,.jpg,.jpeg">
                    <label class="custom-file-label" for="customFile"></label>
                </div>
            </div>
        </div>

        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <input type="submit" name="submit" class="btn btn-primary" id="submit-addrec" value="Add Recipes">
                <a href="dashboard.php" class="btn btn-warning">Back</a>
            </div>
        </div>
    </form>

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