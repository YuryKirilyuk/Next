<?php
/**
 * Fires after the main content, before the footer is output.
 *
 * @since 3.10
 */
do_action( 'et_after_main_content' );

if ( 'on' === et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
                        <a href="<?php echo get_site_url(); ?>" class="footer-logo"></a>

						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>

                        <div class="footer-links">
                            <a href="#">Sitemap</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#">Careers</a>
                            <a href="#">PDF Portfolio</a>
                        </div>

					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
                        <div class="locations">
                            <b>Locations:</b>
                            <div>
                                <span>12505 Park Potomac Avenue, Potomac, MD 20854</span>
                                <span>1100 New York Avenue NW, Washington, DC 20005</span>
                                <span>7900 Tysons One Place, McLean, VA 22102</span>
                            </div>
                        </div>
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
					echo et_core_fix_unclosed_html_tags( et_core_esc_previously( et_get_footer_credits() ) );
					// phpcs:enable
				?>
                        <div class="lightmix">
                            <a href="https://www.lightmix.com/" target="_blank">Washington DC Web Design by LightMix</a>
                        </div>

					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>

    <script src="<?php bloginfo('stylesheet_directory');?>/assets/js/custom.js"></script>
</body>
</html>
