<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package phantom
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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

</article><!-- #post-<?php the_ID(); ?> -->
