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

        <?php $page = basename(__FILE__, '.php'); ?>
        <?php include_once("header.php"); ?>
  
        <main class="single-work-page">
            <h1 class="title">Timeline</h1>

            <div class="image">
                <img src="images/timelineDesktopMockup.png" alt="A responsive mockup of the Marvel Timeline on a desktop screen size."/>
            </div>
            
            <div class="bar-one"></div>
            <div class="bar-two"></div>

            <div class="links">
                <a class="live-link" href="https://hunterpaulson.com/timeline/" target="_blank" rel="noopener noreferrer">View Site</a>
            </div>

            <div class="overview-info">
                <div class="bar">
                    <h2>About</h2>
                </div>
                <p>This project was created following a tutorial online and I modified the code to make it my own. Before I began I researched some of the terms used in order to understand better what was going on during the creation.</p>

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
                                    <li>Create a timeline that features items sliding in from the side of the page as you scroll down the page.</li>
                                </ul>

                                <h4>Planning</h4>
                                <p>This project was created following a tutorial online and I modified the code to make it my own. Before I began I researched some of the terms used in order to understand better what was going on during the creation.</p>    
                                    
                                <h4>Development</h4>
                                <p>Beginning with the HTML I wrote out an unordered list of Marvel Movies in their timeline order.</p>

                                <p>In the JavaScript file, I define an item variable as each list item from my HTML. Then I created a function that checks to see whether an item is in the viewport. This function utilizes getBoundingClientRect(). This returns the smallest rectangle that contains the entire element, I found this definition on W3Schools. The next function I created was to add a class to the specific item that is in view, in order to style it with CSS. Which was the final step in the project, to style everything nicely and ensuring it was mobile-first.</p>
                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div>
                                <h4>Project Takeaways</h4>
                                <p>This was a fun little project that I was able to create, while also advancing my skillset in learning more JavaScript functionality. Before I began I wasn’t aware of the HTML DOM getBoundingClientRect() Method which turned out to be a really cool little function that I can see myself using again in the future. </p>

                                <h4>Next Steps</h4>
                                <p>My next step for this project would be to style it much nicer. Currently, it is a very plain-looking project as my main focus was to get it working.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="projectButtons">
                <a class="cta" id="prev-button" href="./picture-perfect.php"><span>Picture Perfect</span></a>
                <a class="cta" id="next-button" href="./floral.php"><span>Belle Floral</span></a>
            </div>

            <?php include_once("contact.php"); ?>
        </main>

        <?php include_once("footer.php"); ?>
                
        <script src="scripts/backToTop.js"></script>
    </body>
</html>