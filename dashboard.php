<?php
    session_start();

    if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
        header("Location: index.php");
        exit();
    }

    include('navbar.php');
    include('config.php');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Menu Cita Rasa Nusantara | Selera Tanah Air</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <a href="add.php" id="btn-addrec"><button class="btn btn-light right" id="btn-addrec">Add Data
                    Recipes</button></a>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="tb-addrec">
                    <thead>
                        <tr>
                            <th width="3%" class="id">ID</th>
                            <th width="10%">Menu</th>
                            <th width="10%">Recipes</th>
                            <th width="10%">Cooking Step</th>
                            <th width="15%">Province of Origin</th>
                            <th width="10%">Image</th>
                            <th width="10%"></th>
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
                                echo ' <td><a class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal' . $data['id_recipes'] . '">View Details</a></td>';
                                echo ' <td><a class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal' . $data['id_recipes'] . '">View Details</a></td>';
                                echo "<td>" . $data['province'] . "</td>";
                                echo '<td> <img src="' .$data['image']. '" width="70px"></td>';

                                echo '<td>
                                        <a href="edit.php?id_recipes=' . $data['id_recipes'] . '" class="btn btn-secondary btn-sm">Edit</a>
                                        <a href="delete.php?id_recipes=' . $data['id_recipes'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure want to delete this data?\')">Delete</a>
                                    </td>';
                                echo "</tr>";

                                echo '
                                <div class="modal fade" id="detailModal' . $data['id_recipes'] . '" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="detailModalLabel">Detail Resep: ' . htmlspecialchars($data['menu']) . '</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <h6><strong>Recipes:</strong></h6>
                                                <p>' . $data['recipes']. '</p>
                                                <hr>
                                                <h6><strong>Cooking Steps:</strong></h6>
                                                <p>' . $data['cooking_steps'] . '</p>
                                                <hr>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                                $no++;
                            }

                        } else {
                            echo '
                            <tr>
                                <td colspan="7">No Data</td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
