<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Animal_Político_–_Migrantes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://use.typekit.net/lqa3qgk.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap-grid.min.css">

	<?php wp_head(); ?>

	<link rel="apple-touch-icon" sizes="57x57" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#000000">
	<meta name="msapplication-TileImage" content="https://www.animalpolitico.com/wp-content/themes/animalpolitico-2019/static/assets/meta/ms-icon-144x144.png">
	<meta name="theme-color" content="#000000">
	<link rel="icon" href="https://www.animalpolitico.com/wp-content/uploads/2016/02/cropped-favicon-100x100.png" sizes="32x32" />
	<link rel="icon" href="https://www.animalpolitico.com/wp-content/uploads/2016/02/cropped-favicon-300x300.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="https://www.animalpolitico.com/wp-content/uploads/2016/02/cropped-favicon-300x300.png" />
	<meta name="msapplication-TileImage" content="https://www.animalpolitico.com/wp-content/uploads/2016/02/cropped-favicon-300x300.png" />
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Saltar al contenido', 'animal-migrantes' ); ?></a>

	<header id="masthead" class="site-header container">

		<img class="[ logo ]" srcset="
			<?php echo THEME_URL; ?>/images/logo-animal-politico.png 1x,
			<?php echo THEME_URL; ?>/images/logo-animal-politico@2x.png 2x,
			<?php echo THEME_URL; ?>/images/logo-animal-politico@3x.png 3x
		" alt="Logo Animal Político">
		<h3 class="site-name">migrantes</h3>
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<span class="icon-bar" id="one"></span>
			<span class="icon-bar" id="two"></span>
		</button>

		<nav id="site-navigation" class="main-navigation">
			<div class="container">
				<div class="navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<button class="btn btn--full">comparte</button>
				</div>
			</div>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->