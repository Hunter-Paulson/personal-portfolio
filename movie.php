<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Detailed information about DiscoveryFlix, which is a movie database created to browse current movie data and save favourites in local storage. Utilizes TMDB API.">
        <title>DiscoveryFlix | Hunter Paulson: Front-End Web Developer</title>
        
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
            <h1 class="title">DiscoveryFlix</h1>

            <div class="image">
                <img src="images/movieDesktopResponsiveMockup.png" alt="A responsive mockup of DiscoveryFlix on a desktop screen size."/>
            </div>
            
            <div class="bar-one"></div>
            <div class="bar-two"></div>

            <div class="links">
                <a class="live-link" href="https://hunterpaulson.com/discoveryflix/" target="_blank" rel="noopener noreferrer">View Site</a>
                <a class="github-link" href="https://github.com/Hunter-Paulson/discoveryFlix" target="_blank" rel="noopener noreferrer">View Code</a> 
            </div>

            <div class="overview-info">
                <div class="bar">
                    <h2>About</h2>
                </div>
                <p>DiscoveryFlix is a responsive online movie database created to allow users to browse films, sort through different categories on the home page, view real time data, and add titles to their favourites page. This app was created using ReactJS and utilizes the TMDB API to pull the movie overview, poster, ratings, and even cast information!  </p>
            
                <div class="bar">
                    <h2>Roles</h2>
                </div>
            <p>Front-End Web Developer, Web Designer</p>

            <div class="bar">
                <h2>Toolkit</h2>
            </div>

            <ul class="toolkit-list">
                <li>Javascript/React</li>
                <li>CSS3/SCSS</li>
                <li>HTML5</li>
                <li>Adobe XD</li>
                <li>Adobe Illustrator</li>
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
                                    <li>Successfully pull TMDB API data into our app to display the movie’s current title, release date, rating, and main poster.</li>
                                    <li>Ensure the site was responsive between 320px and 1980px.</li>
                                    <li>Allow the user to favourite films using local storage.</li>
                                    <li>Create a sort feature on the home page to display a list of 12 upcoming, popular, top-rated, or now-playing films.
                                    </li>
                                </ul>

                                <h4>Planning</h4>
                                <p>This project was created using ReactJS, in a small team of 3. From the start, we wanted to ensure that the interface was clean and uncluttered. Our first step was to review examples from past students and research current movie database's to discover what we liked or didn’t like. </p>
                                    
                                <p>We started creating our style guide by choosing a color palette and discovered a hero image that was perfect for the main page. This led to wireframe creation, and finally high-fidelity mockups.</p>    
                                    
                                <h4>Development</h4>
                                <p>When it became time to code we broke up the site into tasks that we would each complete. My main objectives were to set up the initial call to the TMDB API and gather the information that we would display for each film. After the information was displaying I set up the favourite functionality that allowed users to select their favourite films and save them on a page using local storage. I also assisted in styling the landing page, individual movie page, and the favourites page. Once the site was complete we came together to test for bugs, and finalize the web application.</p>
                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div class="design-content">
                                <h4>Wireframes</h4>
                                <p>Our wireframes were created using a mobile-first approach.</p>
                                <div class="designImages">
                                    <img src="./images/movieMobileWireframe.png" alt="A mobile wireframe for DiscoveryFlix."/>
                                    <img src="./images/movieDesktopWireframe.png" alt="A desktop wireframe for DiscoveryFlix."/>
                                </div>

                                <h4>High-Fidelity Mockup</h4>
                                <p>Created mockups using a mobile-first approach. These went through several versions until we were completely satisfied with the final design. </p>
                                <div class="designImages">
                                    <img src="./images/movieMobileMockup.png" alt="A mobile mockup for DiscoveryFlix."/>
                                    <img src="./images/movieDesktopMockup.png" alt="A desktop mockup for DiscoveryFlix."/>
                                </div>

                                <h4>Style Guide</h4>
                                <p>Styleguide for DiscoveryFlix.</p>
                                <div class="designImages">
                                    <img src="./images/movieStyleguide.png" alt="A style guide for DiscoveryFlix."/>
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
                <a class="cta" id="prev-button" href="./capstone.php"><span>Positively Fit</span></a>
                <a class="cta" id="next-button" href="./portfolio.php"><span>Portfolio</span></a>
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