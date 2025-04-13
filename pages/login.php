<?php
//mulai session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kasir SMK bisa </title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link role="icon" href="../asset/icon/favicon-16x16.png" type="images/x-icon">
</head>
<body>   
    <section id="login">
        <div class="login-left">
        <div class="text-hero">
            <h2>Kasir Mandalahayu</h2>
            <p>Adalah sebuah aplikasi kasir yang di kembangkan oleh SMK Mandalahayu</p>
        </div>
        <img src="../asset/logo1.jpg" alt="hero-login">

        </div>
        <div class="login-right">
            <div class="login-form">
                <img src="../asset/logo2.png" alt="logo">
                <h3>Selamat Datang</h3>
                <form action="../config/proses-login.php" method="post">
                    <div class="text-login">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">

                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="******">
                        
                        </div>
                        <div class="button">
                            <button type="reset">Cancel</button>
                            <button type="sumbit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>