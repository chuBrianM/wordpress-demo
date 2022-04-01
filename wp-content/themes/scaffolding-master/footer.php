<?php
/**
 * Footer Template
 *
 * Contains the closing of the "main" div and all content after.
 *
 * @package Scaffolding
 */

?>
			<?php do_action( 'scaffolding_before_content_end' ); ?>

		</div><?php // END #content. ?>

		<footer id="colophon" class="footer" role="contentinfo">

			<?php get_sidebar(); ?>

			<div id="inner-footer" class="container py-5">

				<?php if ( has_nav_menu( 'footer-nav' ) ) : ?>

					<nav role="navigation" aria-label="<?php esc_attr_e( 'Footer Navigation', 'scaffolding' ); ?>">
						<?php scaffolding_footer_nav(); ?>
					</nav>

				<?php endif; ?>

				<?php
					if( have_rows('social_media', 'options') ):

						echo '<ul class="footer__social-media">';

						while( have_rows('social_media', 'options') ) : the_row();

							if ( get_sub_field( 'platform' ) ) {
								$platform = get_sub_field( 'platform' );
							}

							if ( get_sub_field( 'url' ) ) {
								$url = get_sub_field( 'url' );
							}

							if ( isset( $platform ) && isset( $url ) ) {
								if ( 'twitter' === $platform ) {
									echo '<li><a title="Twitter" href=' . esc_url( $url ) . ' target="_blank" rel="noreferrer"><svg class="footer-social-icon" width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
									<path d="M15 0C6.71652 0 0 6.71652 0 15C0 23.2835 6.71652 30 15 30C23.2835 30 30 23.2835 30 15C30 6.71652 23.2835 0 15 0ZM22.2087 11.3069C22.2187 11.4643 22.2187 11.6283 22.2187 11.7891C22.2187 16.7042 18.4754 22.3661 11.635 22.3661C9.52567 22.3661 7.57031 21.7533 5.92299 20.6987C6.22433 20.7321 6.51228 20.7455 6.82031 20.7455C8.56138 20.7455 10.1618 20.1562 11.4375 19.1585C9.80357 19.125 8.4308 18.0536 7.96205 16.5804C8.5346 16.6641 9.05022 16.6641 9.63951 16.5134C8.79819 16.3425 8.04199 15.8855 7.49938 15.2203C6.95678 14.555 6.66123 13.7223 6.66295 12.8638V12.817C7.15513 13.0949 7.73438 13.2656 8.3404 13.2891C7.83095 12.9495 7.41314 12.4895 7.12403 11.9499C6.83493 11.4102 6.68345 10.8075 6.68304 10.1953C6.68304 9.50223 6.86384 8.86942 7.18862 8.32031C8.12244 9.46988 9.28771 10.4101 10.6087 11.0798C11.9297 11.7495 13.3768 12.1338 14.856 12.2076C14.3304 9.67969 16.2188 7.63393 18.4888 7.63393C19.5603 7.63393 20.5246 8.08259 21.2042 8.8058C22.0446 8.64844 22.8482 8.3337 23.5647 7.91183C23.2868 8.77232 22.7042 9.49888 21.9308 9.95759C22.6808 9.87723 23.404 9.66964 24.0737 9.37835C23.5681 10.1217 22.9353 10.7812 22.2087 11.3069Z"/>
									</svg></a></li>';
								}
								if ( 'facebook' === $platform ) {
									echo '<li><a title="Facebook" href=' . esc_url( $url ) . ' target="_blank"><svg class="footer-social-icon" width="30" height="30" viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M0 15.0838C0 22.5413 5.41625 28.7425 12.5 30V19.1663H8.75V15H12.5V11.6663C12.5 7.91625 14.9163 5.83375 18.3337 5.83375C19.4163 5.83375 20.5837 6 21.6663 6.16625V10H19.75C17.9163 10 17.5 10.9163 17.5 12.0837V15H21.5L20.8337 19.1663H17.5V30C24.5837 28.7425 30 22.5425 30 15.0838C30 6.7875 23.25 0 15 0C6.75 0 0 6.7875 0 15.0838Z"/>
								</svg></a></li>';
								}
								if ( 'linkedin' === $platform ) {
									echo '<li><a title="Linkedin" href=' . esc_url( $url ) . ' target="_blank" rel="noreferrer"><svg class="footer-social-icon" width="29" height="29" viewBox="0 0 29 29" xmlns="http://www.w3.org/2000/svg">
									<path d="M14.4 0C6.447 0 0 6.447 0 14.4C0 22.353 6.447 28.8 14.4 28.8C22.353 28.8 28.8 22.353 28.8 14.4C28.8 6.447 22.353 0 14.4 0ZM10.875 20.3685H7.959V10.9845H10.875V20.3685ZM9.399 9.8325C8.478 9.8325 7.8825 9.18 7.8825 8.373C7.8825 7.5495 8.496 6.9165 9.4365 6.9165C10.377 6.9165 10.953 7.5495 10.971 8.373C10.971 9.18 10.377 9.8325 9.399 9.8325ZM21.525 20.3685H18.609V15.168C18.609 13.9575 18.186 13.1355 17.1315 13.1355C16.326 13.1355 15.8475 13.692 15.636 14.2275C15.558 14.418 15.5385 14.688 15.5385 14.9565V20.367H12.621V13.977C12.621 12.8055 12.5835 11.826 12.5445 10.983H15.078L15.2115 12.2865H15.27C15.654 11.6745 16.5945 10.7715 18.168 10.7715C20.0865 10.7715 21.525 12.057 21.525 14.82V20.3685Z"/>
									</svg>
									</a></li>';
								}
								if ( 'instagram' === $platform ) {
									echo '<li><a title="Instagram" href=' . esc_url( $url ) . ' target="_blank" rel="noreferrer">		<svg class="footer-social-icon" width="26" height="26" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
									<path d="M17.16 13C17.16 13.8228 16.916 14.6271 16.4589 15.3112C16.0018 15.9953 15.3521 16.5285 14.592 16.8433C13.8318 17.1582 12.9954 17.2406 12.1884 17.0801C11.3815 16.9196 10.6402 16.5233 10.0584 15.9416C9.47665 15.3598 9.08045 14.6185 8.91993 13.8116C8.75942 13.0046 8.8418 12.1682 9.15666 11.408C9.47152 10.6479 10.0047 9.99819 10.6888 9.54109C11.3729 9.08398 12.1772 8.84 13 8.84C14.1022 8.84343 15.1584 9.28281 15.9378 10.0622C16.7172 10.8416 17.1566 11.8978 17.16 13ZM26 7.28V18.72C26 20.6508 25.233 22.5025 23.8677 23.8677C22.5025 25.233 20.6508 26 18.72 26H7.28C5.34922 26 3.49753 25.233 2.13226 23.8677C0.766998 22.5025 0 20.6508 0 18.72V7.28C0 5.34922 0.766998 3.49753 2.13226 2.13226C3.49753 0.766998 5.34922 0 7.28 0H18.72C20.6508 0 22.5025 0.766998 23.8677 2.13226C25.233 3.49753 26 5.34922 26 7.28ZM19.24 13C19.24 11.7658 18.874 10.5594 18.1884 9.53324C17.5027 8.50708 16.5282 7.70728 15.3879 7.23499C14.2477 6.7627 12.9931 6.63913 11.7826 6.8799C10.5722 7.12067 9.46033 7.71497 8.58765 8.58765C7.71497 9.46033 7.12067 10.5722 6.8799 11.7826C6.63913 12.9931 6.7627 14.2477 7.23499 15.3879C7.70728 16.5282 8.50708 17.5027 9.53324 18.1884C10.5594 18.874 11.7658 19.24 13 19.24C14.655 19.24 16.2421 18.5826 17.4123 17.4123C18.5826 16.2421 19.24 14.655 19.24 13ZM21.32 6.24C21.32 5.93146 21.2285 5.62985 21.0571 5.37331C20.8857 5.11677 20.642 4.91682 20.357 4.79875C20.0719 4.68068 19.7583 4.64978 19.4557 4.70997C19.153 4.77017 18.8751 4.91874 18.6569 5.13691C18.4387 5.35508 18.2902 5.63305 18.23 5.93566C18.1698 6.23827 18.2007 6.55193 18.3187 6.83699C18.4368 7.12204 18.6368 7.36568 18.8933 7.53709C19.1499 7.70851 19.4515 7.8 19.76 7.8C20.1737 7.8 20.5705 7.63564 20.8631 7.34309C21.1556 7.05053 21.32 6.65374 21.32 6.24Z" />
									</svg>
									</a></li>';
								}
							} 

						// End loop.
					endwhile;
					echo '</ul>';
				endif;

				?>

				<p class="source-org copyright mt-0 mb-0"><?php echo esc_html( '&copy; ' . gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?>. All rights reserved.</p>

			</div>

		</footer>

		<p id="back-top">
			<a href="#top"><i class="fas fa-angle-up"></i></a>
		</p>

	</div><?php // END #container. ?>

<?php wp_footer(); ?>

</body>
</html>
