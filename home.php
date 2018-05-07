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
		<div class="inner home-child-template">
				
				<header>
					<h1>This is home.php template</h1>
					<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit 
					amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis 
					orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
				</header>

				<?php

					$styledClasses = array(
					    0=>'style1',
					    1=>'style2',
					    2=>'style3',
					    3=>'style4',
					);
					$classCounter = 0;

				?>

				<section class="tiles" >
					<?php foreach (get_categories() as $cat) : ?>
							<article <?php post_class($styledClasses[$classCounter++]); ?>>
								<span class="image">
									<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
								</span>
								<a href="<?php echo get_category_link($cat->term_id); ?>">
									<h2><?php echo $cat->cat_name; ?></h2>
									<div class="content">
										<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
									</div>
								</a>
							</article>
					<?php endforeach; ?>
				</section>
				
		</div><!--/. ends inner -->
	</div><!-- /. ends main -->


<?php

get_footer();
