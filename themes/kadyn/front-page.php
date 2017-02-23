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
        <div class="title">
            <h1 class="myName">Kadyn Neale</h1>
            <h3>A <img class="redHeader" src="<?php echo get_template_directory_uri()?> /assets/red_logo.png" alt="red academy"> Alumuni</h3>
        </div>
   </header>
   <body>
       <section class="creativity">
           <div class="thoughts">
               <img class="thoughtBubble" src="<?php echo get_template_directory_uri()?>/assets/thought_bubble.png" alt="A thought bubble">
                    <h2>Pick a thought to navagate!</h2>
               <img class="thoughtBubble" src="<?php echo get_template_directory_uri()?>/assets/thought_bubble.png" alt="A thought bubble">
           </div>
           <div class="kadyn">
               <img class="kadynSelfie" src="<?php echo get_template_directory_uri()?>/assets/kadyn_selfie.jpg" alt="picture of a glance upwards">
           </div>
       </section>
       <section class="projects">
           <h2 class="projectsTitle">My Projects</h2>
           <div class="projectDisplay">
               <h2>Aloha</h1>
               <img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website">
           </div>
           <div class="projectDisplay">
               <h2>InstaNews</h1>
               <img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website">
           </div>
           <div class="projectDisplay">
               <h2>Pong</h1>
               <img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website">
           </div>
           <div class="projectDisplay">
               <h2>Mars Colony</h1>
               <img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website">
           </div>
           <div class="projectDisplay">
               <h2>Mountain Health</h1>
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