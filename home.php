<?php
/**
 * Child theme home.php for the blog post index
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package phantom
 */

get_header();
?>


	<div id="main">
		<div class="inner">
				
				<header>
					<h1>Dynamic header renders here..</h1>
					<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
				</header>

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_type() );



					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				
		</div><!--/. ends inner -->
	</div><!-- /. ends main -->




<?php

get_footer();
