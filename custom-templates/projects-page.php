
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Projects Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garrisonincorporated
 */

get_header();
?>
<div class="main-section projects-page">

<?php
   $args = array(
      'post_type' => 'projects',
      'post_status' => 'publish',
      'posts_per_page' => 1,
      'orderby' => 'title',
      'order' => 'ASC',
   );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
   ?>



        <h1><?php the_title(); ?></h1>



         <div class="tags">
            <?php foreach ( get_tags() as $tag ) { ?>
               <a href="<?php echo get_tag_link( $tag->term_id ); ?> " rel="tag"><?php echo $tag->name; ?></a>
            <?php } ?>
         </div>



        <p><?php the_excerpt(); ?></p>



        <?php echo the_post_thumbnail(); ?>

        <?php echo get_field('image_1'); ?> <br>
        <?php echo get_field('image_2'); ?> <br>
        <?php echo get_field('image_3'); ?> <br>
        <?php echo get_field('image_4'); ?> <br>
        <?php echo get_field('image_5'); ?> <br>
        <?php echo get_field('image_6'); ?> <br>
        <?php echo get_field('image_7'); ?> <br>
        <?php echo get_field('image_8'); ?> <br>
        <?php echo get_field('image_9'); ?> <br>
        <?php echo get_field('image_10'); ?>



        <a href="<?php the_permalink(); ?>">Go to project</a>





   <?php
    endwhile;
    wp_reset_postdata();
  ?>


</div> <!-- container -->

<?php
get_sidebar();
get_footer();