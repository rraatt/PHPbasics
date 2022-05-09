<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Старояр</title>
</head>
<body>
<header class="top-bar">
    <div class="container">
        <div class="menu">
            <a href="index.php">
                <img class="menulogo" src="images/logo.png" alt="">
            </a>
            <nav class="menu_options">
                <a href="index.php">Головна</a>
                <a href="catalogue.php">Наша продукція</a>
                <a>Кар'єра</a>
                <?php
                if (isset($_SESSION["user"])){
                    echo '<a href="logout.php">Вийти</a>';
                }
                else{
                    echo '<a href="registration.php">Зареєструватися</a>';
                }
                ?>
            </nav>
            <img class="menucart" src="images/cart.png" alt="">
        </div>
    </div>
</header>
<header class="mobile-top-bar">
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    <a href="index.php">
        <div class="mobile-logo">
            <img src="images/logo.png" alt="">
            <h1>Старояр</h1>
        </div>
    </a>
    <img src="images/cart.png" alt="">
</header>
<div class="mobile-menu" id="myLinks">
    <a href="index.php">Головна</a>
    <a href="catalogue.php">Наша продукція</a>
    <a>Кар'єра</a>
    <a>Про нас</a>
</div>