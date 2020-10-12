
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Services Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garrisonincorporated
 */

get_header();
?>
<div class="main-section services-page">

  <h1>Plumbing</h1>
  <?php
    $args = array(
      'post_type' => 'services',
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'orderby' => 'title',
      'order' => 'ASC',
      'category_name'=> 'plumbing'
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        print the_title();
        the_excerpt();
    endwhile;

    wp_reset_postdata();
  ?>



  <h1>Septic</h1>
  <?php
    $args = array(
      'post_type' => 'services',
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'orderby' => 'title',
      'order' => 'ASC',
      'category_name'=> 'septic'
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        print the_title();
        the_excerpt();
    endwhile;

    wp_reset_postdata();
  ?>

  <h1>Underground</h1>
  <?php
    $args = array(
      'post_type' => 'services',
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'orderby' => 'title',
      'order' => 'ASC',
      'category_name'=> 'underground'
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();
        print the_title();
        the_excerpt();
    endwhile;

    wp_reset_postdata();
  ?>
</div> <!-- container -->

<?php
get_sidebar();
get_footer();