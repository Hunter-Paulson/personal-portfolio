<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Detailed information about this online portfolio that showcases Hunter Paulson's best work as a junior front-end developer. Created with PHP, HTML, JavaScript, CSS, and SASS.">
        <title>Portfolio Project | Hunter Paulson: Front-End Web Developer</title>

        <?php
            include_once("links.php");
            const STYLESHEET = "css/main.css";
        ?>

        <link rel="stylesheet" href="<?php echo STYLESHEET; ?>">   
    </head>

    <body class="portfolio-page">

        <?php $page = basename(__FILE__, '.php'); ?>
        <?php include_once("header.php"); ?>

        <main class="single-work-page">
            <h1 class="title">Portfolio</h1>

            <div class="image">
                <img src="images/portfolioDesktopMockup.png" alt="A responsive mockup of this portfolio on a desktop screen size."/>
            </div>
            
            <div class="bar-one"></div>
            <div class="bar-two"></div>

            <div class="links">
                <a class="live-link" href="https://hunterpaulson.com/" target="_blank" rel="noopener noreferrer">View Site</a>
                <a class="github-link" href="https://github.com/Hunter-Paulson/personal-portfolio" target="_blank" rel="noopener noreferrer">View Code</a> 
            </div>

            <div class="overview-info">
                <div class="bar">
                    <h2>About</h2>
                </div>
                <p>A personal portfolio created by myself in order to display all my projects that highlight my skills as a Front-End Web Developer, as well as showcase my personal brand. On the main page, you can find my primary work projects and an illustration of myself. Followed by an about page where you can learn a little more about me. Finally, there is a fun project page to display the most recent fun projects that I have completed in order to further advance my development and design skills.</p>
            
                <div class="bar">
                    <h2>Roles</h2>
                </div>
            <p>Front-End Web Developer, Web Designer</p>

            <div class="bar">
                <h2>Toolkit</h2>
            </div>

            <ul class="toolkit-list">
                <li>CSS3/SCSS</li>
                <li>HTML5</li>
                <li>Javascript</li>
                <li>PHP</li>
                <li>InVision</li>
                <li>Photoshop</li>
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
                                    <li>Create a well styled, responsive personal portfolio.</li>
                                    <li>Showcase my projects and skills as a Front-End Developer.</li>
                                    <li>Display my personal brand.</li>
                                    <li>Keep the design minimal, and very user friendly.</li>
                                </ul>

                                <h4>Planning</h4>
                                <p>I began by researching other portfolios on the web, from former students as well as portfolios all over the world. I was able to get a feel for what I loved or didn’t like so much. Then I created a content plan for all of the information that I wanted to be displayed on the site and what my overarching goal for the user (you!) would be. From there I created wireframes, which led to mockups, and then I began coding.</p>   
                                    
                                <h4>Development</h4>
                                <p>For this project I decided to hard code using HTML, CSS, and JavaScript. Implementing PHP in order to create partials for content that would be called across multiple pages. I knew I wanted to implement a few JavaScript features that would improve User Experience on my site such as a scroll to the top button, a sorting feature for content about each project, and a photo slider to ensure pages didn’t become too long.</p>
                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div class="design-content">
                                <h4>Wireframes</h4>
                                <p> My wireframes were created using a mobile-first approach. My initial thought for this portfolio was that it would be a parallax scroller, with a separate page for my about section. But during development, I decided I preferred to have each piece on its own page. Allowing the user to quickly see my home page with my main projects and contact section easily.</p>
                                <div class="designImages">
                                    <img src="./images/portfolioWireframes.png" alt="Wireframes for this portfolio."/>
                                </div>

                                <h4>Style Guide</h4>
                                <p>I created a small style guide for my portfolio with my colours, logos, font, and how I wanted the overall feel for the user to be when I completed the site. This is a simple reminder for me that helped me look back and ensure I completed what I had hoped to with my portfolio.</p>
                                <div class="designImages">
                                    <img src="./images/portfolioStyleguide.png" alt="A styleguide for this portfolio. INcluding a color palette, fonts, and a mood board."/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="menu2" class="tab-pane fade">
                        <div class="content-container">
                            <div>
                                <h4>Project Takeaways</h4>
                                <p>I am very proud of this portfolio and love the way that it turned out. Beginning with a content plan was very helpful to keep me on track and have the main content displayed right away. After the site was ready I had plenty of time to work out the styling. As I coded the overall theme for the page did begin to evolve and change in the process. I believe because this is my own personal portfolio I was having a hard time deciding on how I’d like the project to be styled, and changed my mind multiple times on how to display the content on the site in the best way possible. Being my own client was a challenging and rewarding process and it helped me learn that beginning with a more solid plan aids in the overall development of the website. </p>

                                <h4>What I Would Improve</h4>
                                <p>My fun project page will be constantly improving as I continue to learn and grow as a developer. The projects displayed will be constantly improving!</p>

                                <h4>Next Steps</h4>
                                <p>The next step that I would take for this portfolio would be to add a dark mode selection to allow the user to choose which theme they would prefer to view my site in. The reason for wanting to implement this feature is that I think it would be a really cool feature to add, as I find myself changing the color scheme when I visit sites that have it available. But also to improve the user experience as it can reduce eye strain.</p>

                                <p>Another thing that I would love to implement is a theme color switcher. I would really like to choose 2 or 3 color palettes and allow the user to choose which one they prefer while they browse my site.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="projectButtons">
                <a class="cta" id="prev-button" href="./movie.php"><span>DiscoveryFlix</span></a>
                <a class="cta" id="next-button" href="./capstone.php"><span>Positively Fit</span></a>
            </div>

            <?php include_once("contact.php"); ?>
        </main>

        <?php include_once("footer.php"); ?>
                
        <script src="scripts/backToTop.js"></script>
    </body>
</html>