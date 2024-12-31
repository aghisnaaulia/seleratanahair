<?php
    include('navbar.php');
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Menu Cita Rasa Nusantara | Selera Tanah Air</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
</head>

<body class="isi">
    <?php
      if (isset($_POST['submit'])) {
        $menu = mysqli_real_escape_string($connection, $_POST['menu']);
        $recipes = mysqli_real_escape_string($connection, $_POST['recipes']);
        $cooking_steps = mysqli_real_escape_string($connection, $_POST['cooking_steps']);
        $province = mysqli_real_escape_string($connection, $_POST['province']);
        $image = $_FILES['image'];
        $uploadDir = 'uploads/';

        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if ($image['error'] !== UPLOAD_ERR_OK) {
            die('Terjadi kesalahan saat mengunggah file.');
        }

        $maxFileSize = 10 * 1024 * 1024;
        if ($image['size'] > $maxFileSize) {
            die('Ukuran file terlalu besar. Maksimal 10MB.');
        }

        $fileExtension = pathinfo($image['name'], PATHINFO_EXTENSION);
        $fileName = uniqid('img_', true) . '.' . $fileExtension;
        $filePath = $uploadDir . $fileName;

        if (!move_uploaded_file($image['tmp_name'], $filePath)) {
            die('Gagal memindahkan file yang diunggah.');
        }


        $sql = mysqli_query($connection, "INSERT INTO recipes (menu, recipes, cooking_steps, province, image) VALUES ('$menu', '$recipes','$cooking_steps', '$province', '$filePath')");
        if ($sql) {
            echo '<script>alert("Success! Data Added."); document.location="dashboard.php";</script>';
        } else {
            echo '<div class="alert alert-warning">Error! Please check the data.</div>';
        }
    }
    ?>

    <form action="add.php" method="post" id="form-addrec" enctype="multipart/form-data">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Menu</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="menu" class="form-control" id="input-addrec" size="4" required>
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Recipes</label>
            <div class="col-md-6 col-sm-6">
                <textarea  name="recipes"  class="summernote" required> </textarea>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Cooking Step</label>
            <div class="col-md-6 col-sm-6">
                <textarea  name="cooking_steps"  class="summernote" required> </textarea>
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
    <script>
         $('.summernote').summernote({
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
</body>

</html>
