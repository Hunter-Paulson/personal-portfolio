<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Displaying all of Hunter Paulson's fun Front-End Development projects.">
        <title>Fun Projects | Hunter Paulson: Front-End Web Developer</title>
        
        <?php
            include_once("links.php");
            const STYLESHEET = "css/main.css";
        ?>

        <link rel="stylesheet" href="<?php echo STYLESHEET; ?>"> 
    </head>

    <body>
        <?php $page = basename(__FILE__, '.php'); ?>
        <?php include_once("header.php") ?>

        <main>
            <div id="fun" class="fun-wrapper">
                <h1 class="title">For Fun</h1>
                <h2>I am always looking to improve my skills in both design and development, and do so through these fun mini projects below.</h2>

                <section class="project-container">
                    <article class="slide fun-01 fun-item">
                        <img src="images/picturePerfectMobileMockup.png" alt="A responsive mockup of Picture Perfect on two mobile screens."/>
                        <h3>Picture Perfect</h3>
                        <p class="fun-info">A memory match card flipping game created to play solo or with up to 4 players!</p>
                        <a class="btn" href="./picture-perfect.php">View Details</a>
                    </article>
        
                    <article class="slide fun-02 fun-item">  
                        <img src="images/timelineDesktopMockup.png" alt="A responsive mockup of the Marvel Timeline on a desktop screen."/>
                        <h3>Marvel Timeline</h3>
                        <p class="fun-info">A fun mini project listing Marvel movies in chronological order.</p>
                        <a class="btn" href="./timeline.php">View Details</a>
                    </article>
        
                    <article class="slide fun-03 fun-item">
                        <img src="images/belleFloralDesktopMockup.png" alt="A responsive mockup of Belle Floral on a desktop screen."/>
                        <h3>Belle Floral</h3>
                        <p class="fun-info">Shopify store created for a fictional flower shop. Store Password : flower</p>
                        <a class="btn" href="./floral.php">View Details</a>
                    </article>

                    <article class="slide fun-04 fun-item"> 
                        <img src="images/calculatorMobileMockup.png" alt="A responsive mockup of the calculator app on two mobile screens."/>
                        <h3>Calculator</h3>
                        <p class="fun-info">A fun mini project created to practice my skills in React.</p>
                        <a class="btn" href="./calculator.php">View Details</a>
                    </article>
                </section>
            </div>

            <?php include_once("contact.php"); ?> 
        </main>

        <?php include_once("footer.php"); ?>

        <script src="scripts/backToTop.js"></script>
    </body>
</html>