<?php
    session_start(); 
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
        <!-- login -->
        <div class="container-eek">
            <div class="login-container">
                <?php
                if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
                    header("Location: dashboard.php");
                    exit();
                }

                // Proses login
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    // Ganti dengan username dan password yang kamu mau
                    if ($username === "admin" && $password === "admin123") {
                        $_SESSION['admin_logged_in'] = true;
                        $_SESSION['admin_username'] = $username;
                        header("Location: dashboard.php");
                        exit();
                    } else {
                        echo "<div class='error'>Wrong username or password!</div>";
                    }
                }
                ?>

                <h1 id="judul-login">LOGIN AS ADMIN</h1>
                <p id="p-details">Enter your details to get sign in as admin</p>

                <br>

                <form method="POST" action="">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>

                    <p id="p-notes">This information will be securely saved as per
                        <b>Terms of Service & Privacy Policy</b></p>

                    <button type="submit" class="login-btn">LOGIN</button>
                </form>
            </div>
        </div>
    </body>

    </html>