<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kadyn
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

   <header>
        <div class="menu">
            <a href="#"><h3>Projects</h3></a>
            <a href="#"><h3>Bio</h3></a>
        </div>
        <div class="title">
            <h1 class="myName">Kadyn Neale</h1>
            <h3>A <img class="redHeader" src="<?php echo get_template_directory_uri()?> /assets/red_logo.png" alt="red academy"> Alumuni</h3>
        </div>
        <div class="secondMenu menu">
            <a href="#"><h3>Contact Me</h3></a>
            <a href="#"><h3>Interesting Links</h3></a>
        </div>
   </header>

   <body>
       <section class="creativity">
           <div class="introArea">
                <div class="introSide">
                        <div class="introText introFirst">
                            <p>Hi there! My name is Kadyn, and I am a web developer. Welcome to my website, its purpose is to promote and showcase myself. I may not be a designer but I hope you enjoy your time here</p>
                        </div>
                        <div class="introCheckout">
                            <a href="https://github.com/Kneale95"><h2>My GitHub!</h2></a>
                        </div>
                </div>
                <div class="kadyn">
                    <img class="kadynSelfie" src="<?php echo get_template_directory_uri()?>/assets/kadyn_selfie.jpg" alt="picture of a glance upwards">
                </div>
                <div class="introSide">
                        <div class="introText introSecond">
                            <h2>Some skills I am trained in....</h2>
                            <ul>
                                <li>HTML/HTML5</li>
                                <li>CSS/CSS3</li>
                                <li>JavaScript/ES2015</li>
                                <li>JQuery</li>
                                <li>WordPress</li>
                                <li>Gulp</li>
                                <li>Angular</li>
                            </ul>
                        </div>
                        <div class="introCheckout">
                            <a href="https://www.redacademy.com/"><h2>Check out RED!</h2></a>
                        </div>
                </div>
           </div>
           <img class="downArrow" src="<?php echo get_template_directory_uri()?>/assets/down_arrow.png" alt="picture of down arrow">
       </section>

       <section class="projects">
           <h2 class="projectsTitle">My Projects</h2>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Aloha</h1>
               </div>
               <a href="https://kneale95.github.io/Aloha/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/aloha_screen.png" alt="image of aloha website"></a>
               <div class="projectBody">
                   
               </div>
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>InstaNews</h1>
               </div>
               <a href="https://kneale95.github.io/Instanews/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/instanews_screen.png" alt="image of instanews website"></a>
               <div class="projectBody">
                   
               </div>
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Pong</h1>
               </div>
               <a href="https://kneale95.github.io/Pong-Game/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/pong_screen.png" alt="image of pong website"></a>
               <div class="projectBody">
                   
               </div>
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Colony App</h1>
               </div>
               <a href="https://kneale95.github.io/Mars-Colony/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website"></a>
               <div class="projectBody">
                   
               </div>
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Mountain Health</h1>
               </div>
               <a href="http://mht.academy.red/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website"></a>
               <div class="projectBody">
                   
               </div>
           </div>
       </section>

       <section class="aboutMe">
           <h2>Bio</h2>
       </section>
   </body>
</html>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>