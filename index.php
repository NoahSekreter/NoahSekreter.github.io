<!DOCTYPE HTML>
<html>
<head>
    <title>Noah Sekreter - Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,700" rel="stylesheet">
    <link rel="stylesheet" href="stylesheets/styling.css">
</head>
<body>
<!--Sidebar, will go on top for mobile-->
<div class="sidebar">
    <div class="sidebar-header">
        <!--Headshot Image-->
        <img src="images/headshot.jpg" width="200px">
    </div>
    <ul class="sidebar-list">
        <li><a href="#main">WELCOME</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#projects">PROJECTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
    </ul>
</div>
<div class="mobile-sidebar">
    <div class="mobile-sidebar-list">
        <a href="#main">WELCOME</a>
        <a href="#about">ABOUT</a>
        <a href="#projects">PROJECTS</a>
        <a href="#contact">CONTACT</a>
    </div>
</div>

<!--Main content-->
<div class="content">
    <!--Particle ground main background-->
    <div id="main">
        <div class="main-inner">
            <h1>NOAH SEKRETER</h1>
            <h2>> JUNIOR SOFTWARE DEVELOPER</h2>
            <a href="#about" class="button">ABOUT ME</a>
        </div>
    </div>

    <!--Summary & Experience-->
    <div id="about">
        <h2>ABOUT</h2>
        <div class="experience">
            <p>Born in Germany and living in America since I was 4, I have grown a passion for programming. The wonderful inventions you could create with a computer brought me to study and improve myself as a software developer. Throughout my time in the field, I have utilized C#, HTML, CSS & SASS/SCSS, Bootstrap, Javascript & jQuery, PHP, SQL, and Python; In addition I plan to continue enhancing my skills to better complete whatever tasks I have at hand.</p>
            <section>
                <h4>> Education</h4>
                <p>My formal education for coding is thanks to "WeCan{Code}It" coding bootcamp, who's goal was to quickly prepare the basic training and skill asked for by companies. Over the course of six months, I was taught HTML5, css, bootstrap, JavsScript, JQuery, and basic database management.</p>
            </section>
            <section>
                <h4>> Employment</h4>
                <p>Before my enrollment in WeCan{Code}It I was working for 3 months under Stream9, where I was given illustrations by the lead designer and tasked with recreating the designs into a website. Afterwards, I have been currently working with Cleveland Hardware for around one and a half years, mainly for updating and maintaining their website. In addition to working there, I am working with <a href="https://bbginc.net/">Barrett Benefits Group (BBG)</a> to create an application which automatically fills out information from excel spreadsheets.</p>
            </section>
            <section>
                <h4>> Front-End</h4>
                <p>My skills regarding front end development include HTML5, CSS, Bootstrap, SCSS, JavaScript, & JQuery. I also have experience with front-end design during my work at Cleveland Hardware.</p>
            </section>
            <section>
                <h4>> Back-End</h4>
                <p>When it comes to back-end, I have put to practice C# and PHP as well as integrating MySQL databases. While relatively new, I am independently studying Python as well.</p>
            </section>
        </div>
    </div>

    <!--Projects-->
    <div id="projects">
        <h2>PROJECTS</h2>
        <div class="carousel">
            <p>Below are some of the larger projects I have either completed or am currently working on. While I have completed a number of other projects, I feel as though they are too minor to include on to this list.</p>
            <section class="carousel-segment active">
                <div class="segment-half">
                    <h4>> CLEVELAND HARDWARE</h4>
                    <p>I was hired by Cleveland Hardware to completely rework their website from the ground up. The main changes were to make the site feel more modern as well as add mobile compatibility.</p>
                    <a href="https://www.clevelandhardware.com/" class="button">VISIT SITE</a>
                </div>
                <!--<div class="segment-half">
                    <img src="images/ClevelandHardwareWebsite.png">
                </div>-->
            </section>

            <section class="carousel-segment">
                <div class="segment-half">
                    <h4>> LUCKY PAWS</h4>
                    <p>During my time with Stream 9, I was tasked with working with the designer to create the website for Lucky Paws from scratch.</p>
                    <a href="http://luckypawsrescue.org/" class="button">VISIT SITE</a>
                </div>
                <!--<div class="segment-half">
                    <img>
                </div>-->
            </section>

            <section class="carousel-segment">
                <div class="segment-half">
                    <h4>> GREEN BAY DROP FORGE</h4>
                    <p>One of my latest projects, Green Bay Drop Forge asked for me to update their site for mobile. The site was made with Drupal, so during my time with this project I've learned how to utilized the framework.</p>
                    <a href="http://www.greenbaydropforge.com/" class="button">VISIT SITE</a>
                </div>
                <!--<div class="segment-half">
                    <img>
                </div>-->
            </section>

            <section class="carousel-segment" >
                <div class="segment-half">
                    <h4>> SPREADSHEET REFORMATTER</h4>
                    <p>While I was at BBG, I have created a set of python scripts that filled out spreadsheets containing employee health information into censuses. In addition, these scripts also fill out templates with employee medical information using the filled out censuses.</p>
                    <a href="https://bbginc.net/" class="button">VISIT SITE</a>
                </div>
                <!--<div class="segment-half">
                    <img>
                </div>-->
            </section>

        </div>
    </div>

    <!--Contact-->
    <div id="contact">
        <h2>CONTACT</h2>
        <!--<section>
            <div>As of now, my website does not offer a mailer, so sending any emails directly to nsekreter@gmail.com is the best way to contact me.</div>
            <form method="post" action="#">
                <div class="field half first">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" />
                </div>
                <div class="field half">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                </div>
                <div class="field">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" rows="5"></textarea>
                </div>
                <div class="actions">
                    <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey=""></div>
                    <a href="" class="button submit">Send Message</a>
                </div>
            </form>
        </section>-->
        <section>
            <ul class="contact-sidebar">
                <p>As of now, my website does not offer a mailer, so sending any emails directly to nsekreter@gmail.com is the best way to contact me. Due to my strong distaste for social media I do not have a Facebook or Twitter account, and I usually check my LinkedIn twice in a blue moon.</p>
                <li>
                    <h4>Email</h4>
                    <a href="mailto:nsekreter@gmail.com">nsekreter@gmail.com</a>
                </li>
                <li>
                    <h4>Resume</h4>
                    <a href=""><span>Download</span></a>
                </li>
                <li>
                    <h4>Github</h4>
                    <a href="https://github.com/NoahSekreter"><span>Github</span></a>
                </li>
                <li>
                    <h4>LinkedIn</h4>
                    <a href="https://www.linkedin.com/in/sekreter/"><span>LinkedIn</span></a>
                </li>
            </ul>
        </section>
    </div>
</div>
</body>
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.particleground.js"></script>
<script src="scripts/main-script.js"></script>
</html>