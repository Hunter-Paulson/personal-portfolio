<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fun mini calculator app project created in React.">
        <title>Calculator App | Hunter Paulson: Front-End Web Developer</title>
        
        <?php
        include_once("links.php");
        const STYLESHEET = "css/main.css";
        ?>

        <link rel="stylesheet" href="<?php echo STYLESHEET; ?>">
    </head>

    <body class="calculator-page">

        <?php
            include_once("header.php");
        ?>
  
        <main class="single-work-page">
            <h1 class="title">Calculator</h1>

            <div class="image">
                <img src="images/calculatorDesktopMockup.png" alt="A responsive mockup of DiscoveryFlix on mobile, and desktop screen sizes."/>
            </div>
            
            <div class="bar-one"></div>
            <div class="bar-two"></div>

            <div class="links">
                <a class="live-link" href="https://hunterpaulson.com/calculator/" target="_blank" rel="noopener noreferrer">View App</a>
                <a class="github-link" href="https://github.com/Hunter-Paulson/calculator" target="_blank" rel="noopener noreferrer">View Code</a> 
            </div>

            <div class="overview-info">
                <div class="bar">
                    <h2>About</h2>
                </div>
                <p>This was a calculator created in my second web scripting class where I was introduced to React. This project put my React knowledge to the test and took multiple bug tests to ensure math was being applied correctly. </p>

            <div class="bar">
                <h2>Toolkit</h2>
            </div>

            <ul class="toolkit-list">
                <li>Javascript</li>
                <li>React</li>
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
                                    <li>Create a working calculator where users can enter numbers and then perform basic calculations on those numbers.</li>
                                    <li>Create a clean and easy-to-use user interface.</li>
                                    <li>Incorporate memory keys to allow users to store a number in memory, recall it, and add or subtract from that number.</li>
                                </ul>
                                
                                <h4>Development</h4>
                                <p>To make this a clean application, each piece is broken into different components. All of the different button information is stored in a global folder, which is then called in the calculator function in order to display the data dynamically.</p>

                                <p>The React useState hook is implemented in order to set the numbers that are entered, stored, and displayed. From there, I implemented a function in order to handle the order of operations and apply math based on what symbol is entered. This function goes through many if statements to check what it should do based on the values of the buttons that are clicked.</p>

                                <p>After the basic logic was put into place all that was left was to test the calculator over and over again to ensure everything functioned as expected.</p>
                            </div>
                        </div>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <div class="content-container">
                            <div>
                                <h4>Project Takeaways</h4>
                                <p>During the development of this project, one of the key things was bug testing. While working through this testing process I discovered different problems that I hadn’t thought about functionality-wise until I tried it out. One of these problems was when I tried to apply a math calculation to a number that had already been calculated. I had to go back and ensure the calculated number was set to the first number ”entered” to allow a user to select a new operation and the second number. This allowed for a much more user-friendly calculator.</p>

                                <h4>Next Steps</h4>
                                <p>To further increase the functionality of this calculator my next step would be to implement a sign key which allows for switching between positive, and negative numbers. Then I would incorporate a decimal key so that the user wouldn’t only have to enter whole numbers. The last piece would be to create percent and square root keys in order to have a well-rounded calculator. This would require the addition of these buttons into the global folder, and to further expand the function that handles what happens depending on the value of the button.</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            

            <div class="projectButtons">
                <a class="cta" id="prev-button" href="./floral.php"><span>Belle Floral</span></a>
                <a class="cta" id="next-button" href="./picture-perfect.php"><span>Picture Perfect</span></a>
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