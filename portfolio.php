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
        <?php
            include_once("header.php");
        ?>

<main class="single-work-page">
            <h1 class="title">Portfolio</h1>

            <div class="image">
                <img src="images/portfolioDesktopMockup.png" alt="A responsive mockup of my portfolio on a desktop screen size."/>
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
                                <p>I began by researching other portfolios on the web, from former students as well as portfolios all over the world. I was able to get a feel for what I loved or didn’t like so much. Then I created a content plan for all of the information that I wanted to be displayed on the site and what my overarching goal for the user (you!) would be. From there I created wireframes, which led to mockups, and then I began coding. Although I made an extensive plan before I began creating my portfolio I found that it was very difficult to stick</p>   
                                    
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
                                    <img src="./images/portfolioStyleguide.png" alt="A styleguide for portfolio."/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="menu2" class="tab-pane fade">
                        <div class="content-container">
                            <div>
                                <h4>Project Takeaways</h4>
                                <p>This project helped me understand how React really worked. We set up each page and called them in our app router. This was also the first API call that I’ve made, I got to practice local storage, and also come out with a fully functioning app.</p>

                                <p>During this project working and communicating in a team was critical, and was also why we were able to complete it successfully. We set up online meetings, and collaborated using tools such as Adobe XD and Github. </p>  

                                <h4>What I Would Improve</h4>
                                <p>After styling the app to exactly how we wanted it, in dev tools between screen sizes 320px to 1980px, we uploaded it to a live server to test it out on real devices of different sizes and discovered a few bugs. We had gotten close to the due date so we fixed what we could but had to come back and improve things afterwards, this could have been avoided if we had tested it out sooner and more frequently. Learning that we must test, test, and test again before launch! </p>

                                <h4>Next Steps</h4>
                                <p>The next goal of this project would be to implement a login feature, allowing users to create an account, select an avatar, and keep track of films they’ve watched and also save favourites. That way they can access their selection on any device!</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="projectButtons">
                <a class="cta" id="prev-button" href="./movie.php"><span>DiscoveryFlix</span></a>
                <a class="cta" id="next-button" href="./capstone.php"><span>Positively Fit</span></a>
            </div>

            <?php
                include_once("contact.php");
            ?>
            
        </main>

        <?php
            include_once("footer.php");
        ?>
                
        <script src="scripts/backToTop.js"></script>
        <script src="scripts/workLinks.js"></script>
    </body>
</html>