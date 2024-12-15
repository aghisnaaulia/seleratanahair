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
                                        <a href="delete.php?id_recipes=' . $data['id_recipes'] . '" class="btn btn-danger btn-sm" onclick="return confirm
                                        (\'Are you sure want to delete this data?\')">Delete</a>
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
</body>

</html>