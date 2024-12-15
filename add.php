<?php
    include('navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Menu Cita Rasa Nusantara | Selera Tanah Air</title>
</head>

<body class="isi">
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
</body>

</html>