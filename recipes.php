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
    <br>

    <!-- rekomendasi -->
    <div class="container text-center">
        <p id="rekomen-text">Recipes</p>

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


</body>

</html>
