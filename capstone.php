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

        <?php $page = basename(__FILE__, '.php'); ?>
        <?php include_once("header.php"); ?>

        <main class="single-work-page">
            <h1 class="title">Positively Fit</h1>

            <div class="image">
                <img src="images/positivelyFitDesktopMockup.png" alt="A responsive mockup of Positively Fit on a desktop screen size."/>
            </div>
            
            <div class="bar-one"></div>
            <div class="bar-two"></div>

            <div class="links">
                <a class="live-link" href="https://fitness.bcitwebdeveloper.ca/" target="_blank" rel="noopener noreferrer">View Site</a>
                <a class="github-link" href="https://github.com/Hunter-Paulson/positively-fit" target="_blank" rel="noopener noreferrer">View Code</a> 
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
                <li>PHP</li>
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
                                    <li>Create a custom WordPress theme for a small personal training gym.</li>
                                    <li>Motivate website users to attend the gym.</li>
                                    <li>Create a blog page, testimonial slider, detailed information on services offered.</li>
                                    <li>Incorporate e-commerce allowing users to book sessions online.</li>
                                </ul>

                                <h4>Planning</h4>
                                <p>We first established the target audience and the overarching goal of the webpage. This gym was an inclusive space, welcoming all people no matter where they are in their health journey. The goal of the site was to encourage anyone to be motivated to book sessions with the personal trainers at the gym.</p>

                                <p>The creation of a content plan was next. We determined each piece of information that would be required on the site, which led into more detailed decisions as to where it would appear on the site. Leading to mapping out the layout of the page using wireframes. Since this webpage was created in WordPress we created custom post types, and taxonomies for the staff, services, and testimonials.</p>       
                                    
                                <h4>Development</h4>
                                <p>Our team worked with Trello to keep everyone organized and on the same page. The first thing we accomplished was the functional webpage, we broke the site up into sections that each person could look at our content plan and ensure all of the information was included on their pages.</p>

                                <p>My work included the staff page, home page, and header navigation menu for both mobile and desktop screen sizes. On the staff page, I included a photo, name, title, class list, and description of each staff member. It was also important to ensure the classes would link to that specific service page to allow the user to easily navigate the site.</p>

                                <p>Home page styling was based on our wireframes. Implementing a blog slider of recent blog posts using the plugin Smart Slider 3. As well as a testimonial slider using JavaScript.</p>

                                <p>The navigation was modified from Underscores’ theme. I decided to use a hamburger menu in combination with a thumb-driven navigation style. This allowed the site to stay clean and uncluttered while also aiding in ease of use for the end user. </p>
                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div class="design-content">
                                <h4>Wireframes</h4>
                                <div class="designImages">
                                    <img src="./images/fitnessMobileWireframe.png" alt="Mobile wireframes for Positively Fit."/>
                                    <img src="./images/fitnessDesktopWireframe.png" alt="Desktop wireframes for Positively Fit."/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="menu2" class="tab-pane fade">
                        <div class="content-container">
                            <div>
                                <h4>Project Takeaways</h4>
                                <p>This was a super fun project to tackle and really gave me a feel for more of what real-life development entails. I learned during this project more than ever communication is essential for the flow and success of a project. I was able to collaborate in a group and really get a feel for the skills I have learned over the past 7 months.</p>

                                <h4>What I Would Improve</h4>
                                <p>At the beginning of the project, our group was excited to get started. W created some solid wireframes that aided in the development of the site. However, we opted to not create high-fidelity mockups for each page on the site. This led to difficulty during the styling phase of the project. A lot of “on the fly” decisions had to be made. It became clear that different people had styled each page, even though we all believed we had the same vision. To improve productively, especially in a group, creating polished mockups would keep things moving along quickly and smoothly for everyone.</p>

                                <h4>Next Steps</h4>
                                <p>My next steps for this webpage are to improve on suggestions that were given by the instructor. These include cleaning up our code. Working in a group where everyone writes, or organizes things differently can be challenging to read through. As well as adding some final touches to add a professional and polished feel to the overall site.</p>

                                <p>My next project plan is to create another business that I can create a professional website from scratch in order to hone my skills and practice more “real world” scenarios. I would like to try creating a site for a different industry than a gym and get more of a feel for styling a blog page, or WooCommerce pages as those were both things that my other group members covered for Positively Fit.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="projectButtons">
                <a class="cta" id="prev-button" href="./portfolio.php"><span>Portfolio</span></a>
                <a class="cta" id="next-button" href="./movie.php"><span>DiscoveryFlix</span></a>
            </div>

            <?php include_once("contact.php"); ?>
        </main>

        <?php include_once("footer.php"); ?>
        
        <script src="scripts/backToTop.js"></script>
    </body>
</html>