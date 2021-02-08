<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Animal_Político_–_Migrantes
 */

?>

			<footer id="colophon" class="site-footer">
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jump.js/1.0.2/jump.min.js" integrity="sha512-Q9CUUoQ/LaD+X7jk76kM6swUEc8q0YPGBcH/Lflux+JatH8zIZPkIb0b91NW5ASgy9ENLhTzt2Z/zZ6yyake2w==" crossorigin="anonymous"></script>

		<script>
			( function() {
				//Smoot Scroll
				const arrowDown = document.querySelector('.cover__arrow');
				arrowDown.addEventListener( 'click', function() {
					jump('.intro');
				});

				const button = document.getElementsByClassName( 'menu-toggle' )[ 0 ];
				const siteNavigation = document.getElementsByClassName( 'main-navigation' )[ 0 ];
				const siteHeader = document.getElementsByClassName( 'site-header' )[ 0 ];

				// Toggle the .toggled class
				button.addEventListener( 'click', function() {
					siteHeader.classList.toggle( 'toggled' );
				});

				// Remove the .toggled class when the user clicks outside the navigation.
				document.addEventListener( 'click', function( event ) {
					const isClickInside = siteHeader.contains( event.target );
					if ( ! isClickInside ) {
					 	siteHeader.classList.remove( 'toggled' );
					}
				});
			}() );
		</script>

	</body>
</html>
