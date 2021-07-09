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
                <a class="live-link" href="#">In Progress</a>
                <!-- <a class="github-link" href="https://github.com/htpwebdesign/fwd-fitness">View Code</a>  -->
            </div>

            <div class="overview-info">
                <div class="bar">
                    <h2>About</h2>
                </div>
                <p>Positively Fit is a welcoming personal training gym that is inclusive of everyone, no matter where they are at in their health journey. This is a small gym made up of 3 personal trainers. They offer 1-1 personal training, nutrition, prenatal, post-natal, and rehabilitation sessions.</p>
            
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
                    <!-- <li class="heading"><a data-toggle="tab" href="#menu2">Reflection</a></li> -->
                </ul>

                <div class="tab-content">

                    <div id="home" class="tab-pane fade in active">
                        <div class="content-container">   
                            <div>
                                <h4>Goals</h4>
                                <ul>
                                    <li>Create a custom WordPress theme for a small personal training gym</li>
                                    <li>Motivate website users to attend the gym</li>
                                    <li>Create a blog page, testimonial slider, detailed information on services offered</li>
                                    <li>Incorporate e-commerce allowing users to book sessions online</li>
                                </ul>

                                <h4>Planning</h4>
                                <p>We first established the target audience and the overarching goal of the webpage. This gym was an inclusive space, welcoming all people no matter where they are in their health journey. The goal of the site was to encourage anyone to be motivated to book sessions with the personal trainers at the gym.</p>

                                <p>The creation of a content plan was next. We determined each piece of information that would be required on the site, which led into more detailed decisions as to where it would appear on the site. Leading to mapping out the layout of the page using wireframes. Since this webpage was created in WordPress we created custom post types, and taxonomies for the staff, services, and testimonials. We chose to create a high-fidelity mockup for the home page so there would be a base to go off of as we were working in a team of 4.</p>       
                                    
                                <h4>Development</h4>
                                <p>Our team worked with Trello to keep everyone organized and on the same page. The first thing we accomplished was the functional webpage, we broke the site up into sections that each person could look at our content plan and ensure all of the information was included on their pages. I worked on the staff page. Including a photo, name, title, class list, and description of the three staff members. It was also important to ensure the classes would link to that specific service page to allow the user to easily navigate the site.</p>
                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div class="design-content">
                                <h4>Wireframes</h4>
                                <div class="designImages">
                                    <img src="./images/fitnessMobileWireframe.png" alt="A mobile wireframe for Positively Fit."/>
                                    <img src="./images/fitnessDesktopWireframe.png" alt="A desktop wireframe for Positively Fit."/>
                                </div>

                                <!-- <h4>High-Fidelity Mockup</h4>
                                <p>Created mockups using a mobile-first approach. These went through several versions until we were completely satisfied with the final design. </p>
                                <div class="designImages">
                                    <img src="./images/MobileMockup.png" alt="A mobile mockup for DiscoveryFlix."/>
                                    <img src="./images/movieDesktopMockup.png" alt="A desktop mockup for DiscoveryFlix."/>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <!-- <div id="menu2" class="tab-pane fade">
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
                    </div> -->

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