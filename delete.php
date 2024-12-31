<?php
include('navbar.php');
include('config.php');

if (isset($_GET['id_recipes'])) {
    $id_recipes = $_GET['id_recipes'];

    $query = "SELECT image FROM recipes WHERE id_recipes = '$id_recipes'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        $data = mysqli_fetch_assoc($result);
        $imagePath = $data['image'];

        $deleteQuery = "DELETE FROM recipes WHERE id_recipes = '$id_recipes'";
        if (mysqli_query($connection, $deleteQuery)) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            echo '<script>alert("Success! Data and image deleted."); document.location="dashboard.php";</script>';
        } else {
            echo '<div class="alert alert-danger">Error deleting data.</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Data not found.</div>';
    }
}
?>
