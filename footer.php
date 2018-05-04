<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phantom
 */

?>

	<!-- 	<footer id="colophon" class="site-footer child-footer">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'phantom' ) ); ?>">
					<?php
				
					printf( esc_html__( 'Proudly powered by %s', 'phantom' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'phantom' ), 'phantom', '<a href="http://underscores.me/">Rhylie</a>' );
					?>
			</div>
		</footer>
	 -->

	 <!-- Footer -->
	 	<footer id="footer">
	 		<div class="inner">
	 			<section>
	 				<h2>Get in touch</h2>
	 				<form method="post" action="#">
	 					<div class="field half first">
	 						<input type="text" name="name" id="name" placeholder="Name" />
	 					</div>
	 					<div class="field half">
	 						<input type="email" name="email" id="email" placeholder="Email" />
	 					</div>
	 					<div class="field">
	 						<textarea name="message" id="message" placeholder="Message"></textarea>
	 					</div>
	 					<ul class="actions">
	 						<li><input type="submit" value="Send" class="special" /></li>
	 					</ul>
	 				</form>
	 			</section>
	 			<section>
	 				<h2>Follow</h2>
	 				<ul class="icons">
	 					<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
	 					<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
	 					<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
	 					<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
	 					<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
	 					<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
	 					<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
	 					<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
	 				</ul>
	 			</section>
	 			<ul class="copyright">
	 				<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
	 			</ul>
	 		</div>
	 	</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
