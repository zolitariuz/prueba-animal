<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Animal_Político_–_Migrantes
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>

		<section class="container">
			<div class="carrusel-container">
				<h2>Carrusel</h2>
				<?php
				$args = array(
					'posts_per_page' => 0,
					'post_status' => 'publish',
					'post_type'  => 'post'
					);
				$carrusel_query = new WP_Query( $args ); ?>
				<div class="carrusel">
					<?php if( $carrusel_query->have_posts() ) : while( $carrusel_query->have_posts() ) : $carrusel_query->the_post();
						$background_image = get_the_post_thumbnail_url( $post, 'large' ); ?>
						<div class="carrusel-item" style="background-image: url(<?php echo $background_image; ?>);">
							<h3 class="carrusel-item_title"><?php the_title(); ?></h3>
							<a href="<?php the_permalink(); ?>" class="btn btn--full">Leer</a>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
