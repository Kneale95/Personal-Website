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
                        <div class="introCheckout pulse">
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
                        <div class="introCheckout pulse">
                            <a href="https://www.redacademy.com/"><h2>Check out RED!</h2></a>
                        </div>
                </div>
           </div>
           <img class="downArrow bobbing" src="<?php echo get_template_directory_uri()?>/assets/down_arrow.png" alt="picture of down arrow">
       </section>

       <section class="projects">
           <h2 class="projectsTitle">My Projects</h2>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Aloha</h1>
               </div>
               <a href="https://kneale95.github.io/Aloha/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/aloha_screen.png" alt="image of aloha website"></a>
               <div class="projectBody">
                   <p>Aloha was my very first web developer project. Built using HTML, CSS and Jquery, Aloha was my first step on a journey of many projects.</p>
               </div>
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>InstaNews</h1>
               </div>
               <a href="https://kneale95.github.io/Instanews/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/instanews_screen.png" alt="image of instanews website"></a>
               <div class="projectBody">
                   <p>InstaNews is a website designed to grab the New York Times API and use that to grab articles and is then styled to a astheticaly pleasing style.</p>
               </div>
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Pong</h1>
               </div>
               <a href="https://kneale95.github.io/Pong-Game/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/pong_screen.png" alt="image of pong website"></a>
               <div class="projectBody">
                   <p>Pong is a project that uses JavaScript to recreate the classic game along with some CSS for styling</p>
               </div>
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Colony App</h1>
               </div>
               <a href="https://kneale95.github.io/Mars-Colony/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website"></a>
               <div class="projectBody">
                   <p>The Colony App is a project that uses Angular to create a website that lets you register fake alien encounters and pushes and pulls to a database.</p>
               </div>
           </div>
           <div class="projectDisplay">
               <div class="projectTitles">
                    <h2>Mountain Health</h1>
               </div>
               <a href="http://mht.academy.red/"><img class="projectImage" src="<?php echo get_template_directory_uri()?>/assets/mountain_health_screen.png" alt="image of mountain health website"></a>
               <div class="projectBody">
                   <p>Mountain Health is a website designed for a community partner Amanda Chey, it was built for her clinic and for information on Naturopathy.</p>
               </div>
           </div>
       </section>

       <section class="aboutMe">
           <h2>Bio</h2>
           <div class="bioMain">
           <img class="bioPic" src="<?php echo get_template_directory_uri()?>/assets/kadyn_outdoors.jpg" alt="image of me outside">
           <div class="bioBody">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut dui vitae turpis vestibulum suscipit id porta ipsum. Mauris sagittis lacinia consectetur. Maecenas consequat, lacus vitae rutrum egestas, urna mi posuere nisl, sit amet luctus nunc lectus eget libero. Donec lacinia pulvinar massa, vitae ultricies erat tincidunt vel. Aliquam erat volutpat. Duis vel facilisis est. Sed pretium sapien a nisi tincidunt tristique. Sed ultrices consectetur lacus, vitae mattis lectus fermentum ut. Aliquam erat volutpat. Nulla at ex enim. Curabitur dapibus mollis nisl, id vehicula dui tincidunt sed.</p>

    <p>Integer eu ex enim. Fusce cursus arcu vitae sapien lobortis, id gravida nibh posuere. Vestibulum vel lectus diam. Duis facilisis elit sapien, non maximus nisi egestas vitae. Sed arcu dui, iaculis non arcu vel, suscipit varius leo. In hac habitasse platea dictumst. Cras tempus, mauris congue sollicitudin maximus, ipsum odio elementum arcu, nec luctus nulla dolor vitae metus. Cras eget ultricies quam. Vestibulum vel pulvinar enim. Curabitur urna velit, facilisis id orci ac, bibendum pretium nunc. Ut vel neque bibendum dui pharetra sodales quis id dolor. Proin eu dolor efficitur, feugiat lorem ut, maximus risus.</p>
           </div>
           <img class="bioPic" src="<?php echo get_template_directory_uri()?>/assets/dnd.jpg" alt="picture of dungeon and dragons book">
           </div>
       </section>
       <section class="contactMe">
           <h2>Contact Me!</h2>
           <div>
               <p>Email</p>
               <p>LinkedIn</p>
               <p>GitHub</p>
               <p>Phone</p>
           </div>
       </section>
       <section class="outLinks">
           <h2>Check Out These Other Places!</h2>
       </section>
   </body>
</html>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>