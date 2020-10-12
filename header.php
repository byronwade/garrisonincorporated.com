<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garrisonincorporated
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site bg-set">
	<div class="container">
		<div class="row py-2 site-header">
			<div class="col-md-3 mb-2 logo">
			<?php the_header_image_tag(); ?>
			</div>
			<div class="col-md-9 my-auto text-md-right menuLinks">
				<?php
					$defaults = array(
					'theme_location' => 'top',
					'menu' => 'Main Menu'
					);
					wp_nav_menu($defaults);
				?>
			</div>
		</div>
