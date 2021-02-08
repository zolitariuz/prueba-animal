<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Animal_Político_–_Migrantes
 */

?>

<?php
$image = get_the_post_thumbnail_url( $post, 'large' );
?>

<section class="cover" style="background-image: url(<?php echo $image; ?>);">
	<h1 class="cover__title">mi<br />gran<br />tes</h1>
	<button class="btn">comparte</button>
	<img class="cover__arrow" srcset="
			<?php echo THEME_URL; ?>/images/arrow-down.png 1x,
			<?php echo THEME_URL; ?>/images/arrow-down@2x.png 2x,
			<?php echo THEME_URL; ?>/images/arrow-down@3x.png 3x
		" alt="Scroll Down">
</section>

<section class="intro">
	<div class="container">
		<?php
		the_title( '<h2 class="entry-title">', '</h2>' );
		the_content();
		?>
	</div>
</section><!-- .entry-content -->


