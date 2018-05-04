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
					<h1><?php the_title(); ?></h1>

					<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>

				</header>
				<section class="tiles">
					<article class="style1">
						<span class="image">
							<img src="http://localhost/wp-content/uploads/2018/05/pic01.jpg" alt="" />
						</span>
						<a href="generic.html">
							<h2>Magna</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
				</section>

				<p>
				    <?php 
				    $id = get_the_ID();
				    $cats = get_the_category($id);
				    echo ( count($cats) == 1  ? 'Category: ' : 'Categories: ');
				    $c = 0; $n = 0;
				    $c = count($cats);
				    foreach ( $cats as $cat ):
				        $n++; ?>
				        <a href="<?php echo get_category_link($cat->cat_ID); ?>">
				            <?php echo $cat->name; echo ( $n > 0 && $n < $c ? ', ' : ''); ?>
				        </a>
				    <?php endforeach; ?>
				</p>
				
		</div><!--/. ends inner -->
	</div><!-- /. ends main -->




<?php

get_footer();
