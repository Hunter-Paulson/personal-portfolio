<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Detailed information about the project Positivley Fit, a web application created using WordPress with a custom WordPress theme.">
        <title>Positively Fit | Hunter Paulson: Front-End Web Developer</title>

        <?php
            include_once("links.php");
            const STYLESHEET = "css/main.css";
        ?>

        <link rel="stylesheet" href="<?php echo STYLESHEET; ?>">   
    </head>

    <body class="capstone-page">
        <?php
            include_once("header.php");
        ?>

        <main class="single-work-page">
            <h1 class="title">Positively Fit</h1>

            <div class="image">
                <img src="images/blankDesktopMockup.png" alt="A responsive mockup of CAPSTONE PROJECT on a desktop screen size."/>
            </div>
            
            <div class="bar-one"></div>
            <div class="bar-two"></div>

            <div class="links">
                <a class="live-link" href="https://fitness.bcitwebdeveloper.ca/" target="_blank" rel="noopener noreferrer">View Site</a>
                <a class="github-link" href="https://github.com/htpwebdesign/fwd-fitness" target="_blank" rel="noopener noreferrer">View Code</a> 
            </div>

            <div class="overview-info">
                <div class="bar">
                    <h2>About</h2>
                </div>
                <p>Capstone....</p>
            
                <div class="bar">
                    <h2>Roles</h2>
                </div>
            <p>Front-End Web Developer, WordPress Developer</p>

            <div class="bar">
                <h2>Toolkit</h2>
            </div>

            <ul class="toolkit-list">
                <li>WordPress</li>
                <li>CSS3/SCSS</li>
                <li>HTML5</li>
                <li>Figma</li>
                <li>Github</li>
            </ul>
            
            </div>

            <div class="container">

                <ul class="nav nav-tabs">
                    <li class="heading active"><a data-toggle="tab" href="#home">Process</a></li>
                    <li class="heading"><a data-toggle="tab" href="#menu1">Design</a></li>
                    <li class="heading"><a data-toggle="tab" href="#menu2">Reflection</a></li>
                </ul>

                <div class="tab-content">

                    <div id="home" class="tab-pane fade in active">
                        <div class="content-container">   
                            <div>
                                <h4>Goals</h4>
                                <ul>
                                    <li>1...</li>
                                    <li>2...</li>
                                    <li>3...</li>
                                    <li>4...</li>
                                </ul>

                                <h4>Planning</h4>
                                <p>This project was created....</p>
                                        
                                    
                                <h4>Development</h4>
                                <p>When...</p>
                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div class="design-content">
                                <h4>Wireframes</h4>
                                <p>Our wireframes were created using a mobile-first approach.</p>
                                <div class="designImages">
                                    <img src="./images/fitnessMobileWireframe.png" alt="A mobile wireframe for Positively Fit."/>
                                    <img src="./images/fitnessDesktopWireframe.png" alt="A desktop wireframe for Positively Fit."/>
                                </div>

                                <h4>High-Fidelity Mockup</h4>
                                <p>Created mockups using a mobile-first approach. These went through several versions until we were completely satisfied with the final design. </p>
                                <div class="designImages">
                                    <img src="./images/movieMobileMockup.png" alt="A mobile mockup for DiscoveryFlix."/>
                                    <img src="./images/movieDesktopMockup.png" alt="A desktop mockup for DiscoveryFlix."/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="menu2" class="tab-pane fade">
                        <div class="content-container">
                            <div>
                                <h4>Project Takeaways</h4>
                                <p>This project helped me...</p>

                                <h4>What I Would Improve</h4>
                                <p>After...</p>

                                <h4>Next Steps</h4>
                                <p>The next goal...</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="projectButtons">
                <a class="cta" id="prev-button" href="./portfolio.php"><span>Portfolio</span></a>
                <a class="cta" id="next-button" href="./movie.php"><span>DiscoveryFlix</span></a>
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