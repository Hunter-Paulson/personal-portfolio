<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Shopify store created and designed for a fictional flower shop.">
        <title>Belle Floral | Hunter Paulson: Front-End Web Developer</title>
        
        <?php
        include_once("links.php");
        const STYLESHEET = "css/main.css";
        ?>

        <link rel="stylesheet" href="<?php echo STYLESHEET; ?>">
    </head>

    <body class="movie-page">

        <?php
            include_once("header.php");
        ?>
  
        <main class="single-work-page">
            <h1 class="title">Belle Floral</h1>

            <div class="image">
                <img src="images/belleFloralDesktopMockup.png" alt="A responsive mockup of DiscoveryFlix on mobile, and desktop screen sizes."/>
            </div>
            
            <div class="bar-one"></div>
            <div class="bar-two"></div>

            <div class="links">
                <a class="live-link" href="https://belle-floral.myshopify.com/" target="_blank" rel="noopener noreferrer">View Site</a>
            </div>

            <div class="overview-info">
                <div class="bar">
                    <h2>About</h2>
                </div>
                <p>Belle Floral is a fictional flower shop that sells flowers, and house plants. This site was created using Shopify and the free Boundless theme, which I customized a bit. Store password: flower</p>

            <div class="bar">
                <h2>Toolkit</h2>
            </div>

            <ul class="toolkit-list">
                <li>Shopify</li>
                <li>Liquid</li>
                <li>HTML5</li>
                <li>CSS3/SCSS</li>
            </ul>
            
            </div>

            <div class="container">

                <ul class="nav nav-tabs">
                    <li class="heading active"><a data-toggle="tab" href="#home">Process</a></li>
                    <li class="heading"><a data-toggle="tab" href="#menu1">Reflection</a></li>
                </ul>

                <div class="tab-content">

                    <div id="home" class="tab-pane fade in active">
                        <div class="content-container">   
                            <div>
                                <h4>Goals</h4>
                                    <ul>
                                        <li>Create a fictional business and develop a realistic-looking online store for that business and its target audience.</li>
                                        <li>Add products, configure taxes and create a small blog.</li>
                                        <li>Create 3 different types of product discounts.</li>
                                    </ul>   
                                        
                                    <h4>Development</h4>
                                    <p>This site was created and styled using Shopify and is not a fully custom theme developed by myself. I began with the Boundless theme and then once the content was all there I added customizations to ensure it was exactly how I envisioned it. </p>
                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div>
                                <h4>Project Takeaways</h4>
                                <p>Once you figure out the naming conventions used in the theme you choose it is very easy and enjoyable to style. The overall use of Shopify is very simple and I feel confident that I could create an online store for a client using the platform. Finding apps to incorporate into the project can prove to be challenging, but taking the time to do the research, and test out different things will prove to be successful.</p>

                                <h4>What I Would Improve</h4>
                                <p>Sass is deprecating in Shopify, and the Boundless theme is still currently using Sass for its styling. I would improve the longevity of this site by transitioning the stylesheets to be strictly CSSin order to stay up to date with the platform.</p>

                                <h4>Next Steps</h4>
                                <p>My next steps with Shopify overall would be to create another custom Shopify theme for a new target audience and practice customizing themes even further. I believe this is important to ensure all web pages and unique and consistent with their own individual brand.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            

            <div class="projectButtons">
                <a class="cta" id="prev-button" href="./timeline.php"><span>Marvel Timeline</span></a>
                <a class="cta" id="next-button" href="./calculator.php"><span>Calculator App</span></a>
            </div>



            <?php
                include_once("contact.php");
            ?>
            
        </main>

        <?php
            include_once("footer.php");
        ?>
                
        <script src="scripts/backToTop.js"></script>
    </body>
</html>