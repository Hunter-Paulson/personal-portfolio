<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Home page for Hunter Paulson's, Front-End Developer portfolio. Displaying current work projects.">
        <title>Home | Hunter Paulson: Front-End Web Developer</title>   

        <?php
            include_once("links.php");
            const STYLESHEET = "css/main.css";
        ?>

        <link rel="stylesheet" href="<?php echo STYLESHEET; ?>">  
    </head>

    <body>
        <?php
            include_once("header.php");
        ?>

        <main>
            <section class="landing-wrapper">
                <div>
                    <img src="images/me4.png" alt="An illustration of myself, Hunter Paulson."/>
                    <h1>Welcome!</h1>
                </div>
            </section>
                        
            <section class="work-wrapper">

                <article class="work-item">
                    <div class="glide glide-3">
                        <div data-glide-el="track" class="glide__track">
                          <ul class="glide__slides">
                            <li class="glide__slide">
                                <img id="portfolio-button" src="images/movieMobileResponsiveMockup.png" alt="A photo showcasing DiscoveryFlix in mobile view."/>
                            </li>
                            <li class="glide__slide">
                                <img id="portfolio-button" src="images/movieTabletResponsiveMockup.png" alt="A photo showcasing DiscoveryFlix in tablet view."/>      
                            </li>
                            <li class="glide__slide">
                                <img id="portfolio-button" src="images/movieDesktopResponsiveMockup.png" alt="A photo showcasing DiscoveryFlix in desktop view."/>
                            </li>
                          </ul>
                       
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"><</button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">></button>
                            </div> 
                        </div>
                    </div>

                    <div class="work-info">
                        <h3 class="project-name">DiscoveryFlix</h3>
                        <p class="project-description">A movie database created to browse current movie data and save favourites in local storage.</p>
                        <a class="project-link" href="movie.php">View Details</a>
                    </div>
                </article>
                
                <article class="work-item">
                    <div class="glide glide-2">
                        <div data-glide-el="track" class="glide__track">
                          <ul class="glide__slides">
                            <li class="glide__slide">
                                <img id="portfolio-button" src="images/portfolioMobileMockup.png" alt="A photo showcasing a blank mockup in mobile view."/>
                            </li>
                            <li class="glide__slide">
                                <img id="portfolio-button" src="images/portfolioTabletMockup.png" alt="A photo showcasing a blank mockup in tablet view."/>      
                            </li>
                            <li class="glide__slide">
                                <img id="portfolio-button" src="images/portfolioDesktopMockup.png" alt="A photo showcasing a blank mockup in desktop view."/>
                            </li>
                          </ul>

                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"><</button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">></button>
                            </div> 
                        </div>
                    </div>

                    <div class="work-info">
                        <h3 class="project-name">Portfolio Project</h3>
                        <p class="project-description">An online portfolio showcasing my best work as a junior front-end developer.</p>
                        <a class="project-link" href="portfolio.php">View Details</a>
                    </div>
                </article>

                <article class="work-item">
                    <div class="glide glide-1">
                        <div data-glide-el="track" class="glide__track">
                          <ul class="glide__slides">
                            <li class="glide__slide">
                                <img id="portfolio-button" src="images/blankMobileMockup.png" alt="A photo showcasing a blank mockup in mobile view."/>
                            </li>
                            <li class="glide__slide">
                                <img id="portfolio-button" src="images/blankTabletMockup.png" alt="A photo showcasing a blank mockup in tablet view."/>      
                            </li>
                            <li class="glide__slide">
                                <img id="portfolio-button" src="images/blankDesktopMockup.png" alt="A photo showcasing a blank mockup in desktop view."/>
                            </li>
                          </ul>

                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--left" data-glide-dir="&lt;"><</button>
                                <button class="glide__arrow glide__arrow--right" data-glide-dir="&gt;">></button>
                            </div> 
                        </div>
                    </div>

                    <div class="work-info">
                        <h3 class="project-name">Positively Fit</h3>
                        <p class="project-description">Currently collaborating on a final project for the BCIT FWD program.</p>
                        <a class="project-link" href="capstone.php">In Progress</a>
                    </div>
                </article>
                
            </section>

        <?php
            include_once("contact.php");
        ?>
              
        </main>

        <?php
            include_once("footer.php");
        ?>
        
        <script src="scripts/backToTop.js"></script>
        <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
        <script src="scripts/photoGlider.js"></script>
        <script src="scripts/activePage.js"></script>
    </body>
</html>