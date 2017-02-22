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

   <!--<header>
       <h1 class="myName">Kadyn Neale</h1>
       <h3>A <img class="redHeader" src="<?php echo get_template_directory_uri()?> /assets/red_logo.png" alt="red academy"> Alumuni</h3>
   </header>-->
   <body>
       <section class="creativity">
           <div class="thoughts">
               <img class="thoughtBubble" src="<?php echo get_template_directory_uri()?>/assets/thought_bubble.gif" alt="A thought bubble">
               <img class="thoughtBubble" src="<?php echo get_template_directory_uri()?>/assets/thought_bubble.gif" alt="A thought bubble">
           </div>
           <div class="kadyn">
               <img class="kadynSelfie" src="<?php echo get_template_directory_uri()?>/assets/kadyn_selfie.jpg" alt="picture of a glance upwards">
           </div>
       </section>
       <section class="projects">
           <div class="projectDisplay">
               <h1>Aloha</h1>
           </div>
           <div class="projectDisplay">
               <h1>InstaNews</h1>
           </div>
           <div class="projectDisplay">
               <h1>Pong</h1>
           </div>
           <div class="projectDisplay">
               <h1>Mars Colony</h1>
           </div>
           <div class="projectDisplay">
               <h1>Mountain Health</h1>
           </div>
       </section>
   </body>
</html>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>