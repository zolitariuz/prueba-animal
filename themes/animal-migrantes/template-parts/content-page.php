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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="background-image: url(<?php echo $image; ?>);" >
		<h1 class="entry-title">mi<br />gran<br />tes</h1>
		<button>comparte</button>
		<img class="[ logo ]" srcset="
				<?php echo THEME_URL; ?>/images/arrow-down.png 1x,
				<?php echo THEME_URL; ?>/images/arrow-down@2x.png 2x,
				<?php echo THEME_URL; ?>/images/arrow-down@3x.png 3x
			" alt="Logo Animal Político">
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_title( '<h2 class="entry-title">', '</h2>' );
		the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
