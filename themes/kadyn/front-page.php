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
            <h3>Projects</h3>
            <h3>Bio</h3>
        </div>
        <div class="title">
            <h1 class="myName">Kadyn Neale</h1>
            <h3>A <img class="redHeader" src="<?php echo get_template_directory_uri()?> /assets/red_logo.png" alt="red academy"> Alumuni</h3>
        </div>
        <div class="secondMenu menu">
            <h3>Contact Me</h3>
            <h3>Interesting Links</h3>
        </div>
   </header>
   <body>
       <section class="creativity">
           <!--<div class="thoughts">
               <img class="thoughtBubble" src="<?php echo get_template_directory_uri()?>/assets/thought_bubble.png" alt="A thought bubble">
                    <h2>Pick a thought to navagate!</h2>
               <img class="thoughtBubble" src="<?php echo get_template_directory_uri()?>/assets/thought_bubble.png" alt="A thought bubble">
           </div>-->
           <div class="introText">
               <p>Hi there! My name is Kadyn, and I am a web developer. Welcome to my website, its purpose is to promote and showcase myself. I may not be a designer but I hope you enjoy your time here</p>
           </div>
           <div class="kadyn">
               <img class="kadynSelfie" src="<?php echo get_template_directory_uri()?>/assets/kadyn_selfie.jpg" alt="picture of a glance upwards">
           </div>
           <div class="introText">
               <h2>Some skills I am trained in....</h2>
           </div>
       </section>
       <section class="projects">
           <h2 class="projectsTitle">My Projects</h2>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Aloha</h1>
               </div>
               <img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/aloha_screen.png" alt="image of aloha website">
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>InstaNews</h1>
               </div>
               <img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/instanews_screen.png" alt="image of instanews website">
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Pong</h1>
               </div>
               <img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/pong_screen.png" alt="image of pong website">
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Colony App</h1>
               </div>
               <img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website">
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Mountain Health</h1>
               </div>
               <a href="mth.academy.red"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website"></a>
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