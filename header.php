<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example. This usually shows in search results.">
        <meta name-viewport content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <header>
            <link rel="stylesheet" href="style/header.style.css">
            <div class="topnav">
                <a class="left-side" href="#">
                    <img src="img/duckling.png" alt="logo">
                </a>
                <a class="left-side" href="#index.php">Home</a>
                <a class="left-side" href="#index.php">News</a>
                <a class="left-side" href="#index.php">Contact</a>
                <a class="left-side" href="#index.php">About</a>
                
                <?php
                    if (isset($_SESSION['userId'])) {
                        echo "<a href='includes/logout.inc.php' class='right-side'>Logout</a>";
                    }
                ?>
                
                
            </div>                
        </header>