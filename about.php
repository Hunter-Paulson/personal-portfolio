<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="Information about Hunter Paulson, Front-End Web Developer, and Designer. Who is skilled in HTML, CSS, PHP, JavaScript, JQuery, React, and UX Design.">
        <title>About | Hunter Paulson: Front-End Web Developer</title>

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
            <div id="about" class="about-wrapper">
                <h1 class="title">Hunter Paulson</h1>
                <h2>Creative Developer</h2>
                <div class="image">
                    <img class="portrait-photo" src="images/portrait2.png" alt="A portrait of myself, Hunter Paulson."/>
                </div>

                <h3>Why did I choose to become a developer?</h3>
                    <p>The biggest reason that I love web development is that I get to create a design and bring it to life through code and problem-solving. I also appreciate that this is an ever-evolving industry and there will always be something new to learn! Working in a team is a strong suit of mine, I enjoy collaborating and learning from one another.</p>

                <h3>My favourite technical skill?</h3> 
                    <p>If I really had to choose… My favourite thing to do is CSS, it can be a very basic skill in this field. But it also can be a very interesting thing to specialize in. As your skills evolve you learn that there are some pretty creative solutions, and ways to do things. Improving user experience and overall design quality. I also really love JavaScript and the dynamic functionality it can add to the webpage. I appreciate the innovation and evolution of the language, I still have a lot to learn and always will!</p>
                            
                <h3>Outside of code?</h3>
                    <p>I’ve always been drawn to the creative aspects of life. I enjoy painting, videography, and sketching in Procreate. Self-portraits are my new favourite as I’m always looking for a new one that I can create to display on the landing page of this portfolio. In the summers I enjoy filming and editing wedding videos, also making a few business advertisements on the side.</p>   
            </div>

        <?php
            include_once("contact.php");
        ?> 
        </main>

        <?php
            include_once("footer.php");
        ?>

        <script src="scripts/backToTop.js"></script>
        <script src="scripts/activePage.js"></script>
    </body>
</html>