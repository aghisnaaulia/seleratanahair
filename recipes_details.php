<?php
    include('navbar.php');
    include('config.php');
    if (isset($_GET['s'])) {
        $s = $_GET['s'];
        $sql = "SELECT * FROM recipes WHERE menu = '$s'";
    } else {
        $id = $_GET['id_recipes'];
        $sql = "SELECT * FROM recipes WHERE id_recipes = $id";
    }
    $result = $connection->query($sql);


    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        die("Resep tidak ditemukan.");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Menu Cita Rasa Nusantara | Selera Tanah Air</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        .container {
            max-width: 100%;
            margin: 20px auto;
            overflow: hidden;
        }
        .image-container {
            width: 80%;
            margin-bottom: 20px;
        }

        .recipe-image {
            width: 100%;
            height: auto;
            object-fit: cover;

        }

        .title {
            text-align: center;
            font-size: 2.5em;
            margin: 20px 0;
            font-weight: bold;
        }

        .content {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .left-column{
            width: 40%;
        }
        .right-column {
            width: 60%;
        }

        h2 {
            font-size: 1.2em;
            margin-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 5px;
        }


        ul,
        ol {
            padding-left: 20px;
            line-height: 1.8;
        }

        ul li,
        ol li {
            margin-bottom: 8px;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1 class="title"><?php echo htmlspecialchars($data['menu']); ?></h1>

        <div class="content">
            <div class="right-column">
                <div class="image-container">
                     <img src="<?php echo htmlspecialchars($data['image']); ?>" alt="<?php echo htmlspecialchars($data['menu']); ?>" class="recipe-image">
                </div>
                <?php echo ($data['cooking_steps']); ?>
            </div>


            <div class="left-column">
             <?php echo ($data['recipes']); ?>
            </div>
        </div>
    </div>
</body>

</html>
