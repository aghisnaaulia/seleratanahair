<?php
include('config.php');
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit();
}
?>

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

    <style>
        .logout-btn {
            background: #666;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }
    </style>
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

    <!-- data resep -->
    <div class="container-resep">
        <h1 id="judul-review">Welcome, <?php echo $_SESSION['admin_username']; ?>!</h1>

        <br>

        <div class="dataa-cont">
            <a href="add.php" id="btn-addrec"><button class="btn btn-light right" id="btn-addrec">Add Data Recipes</button></a>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="tb-addrec">
                    <thead>
                        <tr>
                            <th width="3%" class="id">ID</th>
                            <th width="10%">Menu</th>
                            <th width="10%">Recipes</th>
                            <th width="10%">Province of Origin</th>
                            <th width="10%">Image</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        $sql = mysqli_query($connection, "SELECT * FROM recipes
                        ORDER BY id_recipes DESC") or die(mysqli_error($connection));

                        if (mysqli_num_rows($sql) > 0) {
                            $no = 1;

                            while ($data = mysqli_fetch_assoc($sql)) {
                                echo "<tr>";
                                echo "<td>" . $no . "</td>";
                                echo "<td class='menu' style='color: rgb(0,0,255)';>" . $data['menu'] . "</td>";
                                echo "<td>" . $data['recipes'] . "</td>";
                                echo "<td>" . $data['province'] . "</td>";
                                echo "<td>" . $data['image'] . "</td>";

                                echo '<td>
                                    <a href="edit.php?id_recipes=' . $data['id_recipes'] . '" class="btn btn-secondary btn-sm">Edit</a>
                                    <a href="delete.php?id_recipes=' . $data['id_recipes'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure want to delete this data?\')">Delete</a>
                                </td>
                            </tr>
                            ';
                                $no++;
                            }
                        } else {
                            echo '
                            <tr>
                                <td colspan="6">No Data</td>
                            </tr>
                        ';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <br>

    <a href="logout.php" class="logout-btn" id="btn-logout">Logout</a>

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