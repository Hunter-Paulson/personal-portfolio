<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A memory match card flipping game created to play solo or with up to 4 players! Created using JavaScript, JQuery, HTML, and CSS.">
        <title>Picture Perfect | Hunter Paulson: Front-End Web Developer</title>
        
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
            <h1 class="title">Picture Perfect</h1>

            <div class="image">
                <img src="images/picturePerfectDesktopMockup.png" alt="A responsive mockup of Picture Perfect on a desktop screen size."/>
            </div>
            
            <div class="bar-one"></div>
            <div class="bar-two"></div>

            <div class="links">
                <a class="live-link" href="https://hunterpaulson.com/picture-perfect/" target="_blank" rel="noopener noreferrer">View Game</a>
                <a class="github-link" href="https://github.com/Hunter-Paulson/picture-perfect" target="_blank" rel="noopener noreferrer">View Code</a> 
            </div>

            <div class="overview-info">
                <div class="bar">
                    <h2>About</h2>
                </div>
                <p>Picture Perfect is a memory match, card flipping game. You can play solo, or with up to four players. There is an easy, medium, and hard mode which alters the number of cards and game time based on what you choose. The cards are pulled dynamically from an array which allows the user to have a more interesting experience.</p>

            <div class="bar">
                <h2>Toolkit</h2>
            </div>

            <ul class="toolkit-list">
                <li>Javascript</li>
                <li>JQuery</li>
                <li>Bootstrap</li>
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
                                    <li>To create a fully functional desktop memory match game with smooth game play.</li>
                                    <li>Implement a multiplayer functionality.</li>
                                    <li>Ensure the code is DRY.</li>
                                </ul>
                                    
                                <h4>Planning</h4>
                                <p>To complete this project it was important to break up the game into pieces to better understand what functionality would be required. I began by writing out what would appear on each screen, and what their purpose was. This includes everything from buttons navigating the site, to the actual content the user will interact with.</p>

                                <p>Splash Screen: Required buttons to navigate to the mode selection screen or ask for help.</p>

                                <p>Mode Screen:  Allow users to choose how many players there are, and input their names,  choose a game mode difficulty, and buttons to ask for help, to quit, or click play to enter the game screen.</p>

                                <p>Game Screen: Display player names along with their scores, a card grid, and a timer. Show buttons that allow the players to quit, reset, or ask for help. </p>

                                <p>End Screen: Display a message depending on the game outcome. Buttons that allow the players to play again, or quit.</p>

                                <h4>Development</h4>
                                <p>The site was created using HTML for the content, Javascript and JQuery for the functionality, and CSS for styling.</p>

                                <p>After my plan was complete I organized the game into tasks to determine what order everything needed to be done in. Then I further broke those tasks up into simple, small sections that would be easier to understand and focus on. I figured out what each piece had to do by writing out exactly what it needed to do in a plain straightforward way, and then began applying my coding knowledge to create the new function.</p>

                                <p>When I didn’t understand a concept I reviewed all the course material on the topic and also turned to Google to watch tutorials or read about how others worked with similar tasks. I also reached out to my peers or teacher to come up with a solution together, or learn of something that helped them with a similar topic. As each piece was completed, the game began to come together. I could switch game screens, then the cards flipped, then card match detection came into play, and so on. It became a real game that you could actually play!</p>

                                <p>Once all of the tasks were completed and the game was functioning, the final thing left to do was test the game over and over again. This allowed me to work out any bugs that existed in my logic, especially for the end game messages which proved to be the most difficult.</p>

                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div>
                                <h4>Project Takeaways</h4>
                                <p>When I first  began creating my game I still had a lot to learn in terms of how JavaScript worked. But after completion I fully understood basic JavaScript functionality. Approaching Javascript was more exciting than scary because it opened up so much more I could do with my web applications.I learned that problem solving is a huge part of being a web developer, and being able to google your problems efficiently is super important. I’m grateful for the whole experience this project was, and proud of the final product!</p>

                                <h4>Next Steps</h4>
                                <p>My main focus for this game was the logic and overall functionality. Because of this the styling of the game is lacking. The overall theme could be improved, and the styling needs to be redone to ensure that it is following the best practice of mobile first design. My next steps for this project would be to make these improvements. </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

           
            <div class="projectButtons">
                <a class="cta" id="prev-button" href="./calculator.php"><span>Calculator App</span></a>
                <a class="cta" id="next-button" href="./timeline.php"><span>Marvel Timeline</span></a>
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