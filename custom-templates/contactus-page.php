
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Contact Us Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garrisonincorporated
 */

get_header();
?>
<div class="main-section contactus-page">
  <?php echo do_shortcode("[contact-form-7 id='83' title='Contact Form']"); ?>
</div> <!-- container -->

<?php
get_sidebar();
get_footer();