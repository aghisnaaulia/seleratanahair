<?php

if (isset($_POST['Upload'])) {
$dir_upload = "images/";
$file_name = $_FILES['file']['name'];

    if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $cek = move_uploaded_file ($_FILES['file']['tmp_name'],
    $dir_upload.$file_name);
        if ($cek) {
        die ("Success!");
        } else {
        die ("Error!");
        }
    $sql = mysqli_query($koneksi, "INSERT INTO recipes(image) values ('$image')");
    }
}

?>
