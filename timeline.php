<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fun mini project listing Marvel movies in chronological order. Created using HTML, CSS, and JavaScript.">
        <title>Marvel Timeline | Hunter Paulson: Front-End Web Developer</title>
        
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
            <h1 class="title">Timeline</h1>

            <div class="image">
                <img src="images/timelineDesktopMockup.png" alt="A responsive mockup of DiscoveryFlix on mobile, and desktop screen sizes."/>
            </div>
            
            <div class="bar-one"></div>
            <div class="bar-two"></div>

            <div class="links">
                <a class="live-link" href="https://hunterpaulson.com/timeline/" target="_blank" rel="noopener noreferrer">View Site</a>
                <!-- <a class="github-link" href="#">View Code</a>  -->
            </div>

            <div class="overview-info">
                <div class="bar">
                    <h2>About</h2>
                </div>
                <p>A fun mini project created to practice my skills. This is a concept found on many web pages that I found while creating my own personal portfolio. Even if the animation isn’t used in a timeline concept, it’s still an interesting way to have your content be displayed on a page.</p>

            <div class="bar">
                <h2>Toolkit</h2>
            </div>

            <ul class="toolkit-list">
                <li>Javascript</li>
                <li>HTML5</li>
                <li>CSS3</li>
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
                                    <li>Create a timeline that features the items sliding in from the sides as you scroll down the page.</li>
                                </ul>

                                <!-- <h4>Planning</h4>
                                <p>This project was created using ReactJS, in a small team of 3. From the start, we wanted to ensure that the interface was clean and uncluttered. Our first step was to review examples from past students and research current movie database's to discover what we liked or didn’t like. </p>
                                    
                                <p>We started creating our style guide by choosing a color palette and discovered a hero image that was perfect for the main page. This led to wireframe creation, and finally high-fidelity mockups.</p>     -->
                                    
                                <h4>Development</h4>
                                <p></p>
                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div>
                                <!-- <h4>Project Takeaways</h4>
                                <p>This project helped me understand how React really worked. We set up each page and called them in our app router. This was also the first API call that I’ve made, I got to practice local storage, and also come out with a fully functioning app.</p>

                                <p>During this project working and communicating in a team was critical, and was also why we were able to complete it successfully. We set up online meetings, and collaborated using tools such as Adobe XD and Github. </p>  

                                <h4>What I Would Improve</h4>
                                <p>After styling the app to exactly how we wanted it, in dev tools between screen sizes 320px to 1980px, we uploaded it to a live server to test it out on real devices of different sizes and discovered a few bugs. We had gotten close to the due date so we fixed what we could but had to come back and improve things afterwards, this could have been avoided if we had tested it out sooner and more frequently. Learning that we must test, test, and test again before launch! </p> -->

                                <h4>Next Steps</h4>
                                <p>I would like to have interesting information displayed on this timeline, and to style it in my own way. To advance my css skills.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="projectButtons">
                <a class="cta" id="prev-button" href="./picture-perfect.php"><span>Picture Perfect</span></a>
                <a class="cta" id="next-button" href="./floral.php"><span>Belle Floral</span></a>
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