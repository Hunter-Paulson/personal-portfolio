<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="404 page one Hunter Paulson's, Front-End Developer portfolio.">
        <title>404 | Hunter Paulson: Front-End Web Developer</title>   

        <?php
            include_once("links.php");
            const STYLESHEET = "css/main.css";
        ?>

        <link rel="stylesheet" href="<?php echo STYLESHEET; ?>">  
    </head>

    <body>
        <?php $page = basename(__FILE__, '.php'); ?>
        <?php include_once("header.php"); ?>

        <main class="error-page">
            <h1 class="title">404</h1>
            <p>Uh oh! Looks like the page you are looking for is on a coffee break.<p>

            <div class="container">
                <div class="coffee-header">
                    <div class="coffee-header__buttons coffee-header__button-one"></div>
                    <div class="coffee-header__buttons coffee-header__button-two"></div>
                </div>

                <div class="coffee-medium">
                    <div class="coffe-medium__exit"></div>
                    <div class="coffee-medium__arm"></div>
                    <div class="coffee-medium__liquid"></div>
                    <div class="coffee-medium__smoke coffee-medium__smoke-one"></div>
                    <div class="coffee-medium__smoke coffee-medium__smoke-two"></div>
                    <div class="coffee-medium__smoke coffee-medium__smoke-three"></div>
                    <div class="coffee-medium__smoke coffee-medium__smoke-for"></div>
                    <div class="coffee-medium__cup"></div>
                </div>

                <div class="coffee-footer"></div>
            </div>

            <button><a aria-label='Go to home page' href='./index.php'><span>Return Home</span></a></button>

        </main>

        <?php include_once("footer.php"); ?>
    </body>
</html>