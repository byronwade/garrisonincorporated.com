
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package garrisonincorporated
 */

get_header();
?>
<div class="main-section home-page">
   <div class="row p-4">
      <div class="col-md-7 p-2">
         <h1 class="mt-5 mb-3 section-title"><?php the_field('title');?></h1>
         <div class="my-3 section-description"><?php the_field('description');?></div>
         <div class="my-3 contactus">
            <button class="btn btn-danger">Contact Us</button>
            <p class="mt-2"><strong><?php the_field('contact');?></strong></p>
         </div>
      </div>
      <div class="col-md-5 work-img-container p-3">
         <p class="text-danger top-text">Featured</p>
         <div class="work-picture">
            <img src="<?php the_field('work_picture');?>" >
         </div>
         <p class="caption">-Lorem ipsum dolor sit amet</p>
      </div>
   </div>
   <div class="row bg-danger text-white py-4 text-center align-middle">
      <div class="col"><span class="company-achievements">Locally owned and Operated</span></div>
      <div class="col"><span class="company-achievements">Licensed and Insured</span></div>
      <div class="col"><span class="company-achievements">Amazing Customer Service</span></div>
   </div>
   <div class="row service-row">
      <div class="col-md-6 px-5">
         <h1 class="section-title mt-4 mb-3">Our Service Area</h1>
         <p>Scotts Valley, CA</p>
         <p>Ben Lomond, CA</p>
         <p>Boulder Creek, CA</p>
         <p>Los Gatos, CA</p>
         <p>Aptos, CA</p>
         <p>Watsonville, CA</p>
         <p>Santa Cruz, CA</p>
         <div id="service-location-notice" class="h-auto my-4">
         <div class="d-inline-block h-100 mr-2 align-top">*</div><div class="d-inline-block">Under cetain circumstances<br> we may travel to San Jose.</div>
         </div>
      </div>
      <div class="col-md-6 p-0">
         <div>
            <img src="<?php the_field('garrison_services_location_map');?>" >
         </div>
      </div>
   </div>
   <div class="row p-4">
      <div class="col-md-5 work-img-container p-3">
         <p class="text-danger top-text">Featured</p>
         <div class="work-picture">
            <img src="<?php the_field('work_picture');?>" >
         </div>
         <p class="caption">-Lorem ipsum dolor sit amet</p>
      </div>
      <div class="col-md-7 p-2">
         <h1 class="mt-5 mb-3 section-title"><?php the_field('title');?></h1>
         <div class="my-3 section-description"><?php the_field('description');?></div>
      </div>
   </div>
   <div class="bg-dark text-white p-5 section-qa">
   <h1 class="py-3">Questions we get asked a lot.</h1>
   <div class="row">

        <div class="col-lg-6 py-2">
            <h2>Do you guys work with septic?</h2>
            <p>Yes, all the time. We can get permits, we can do installs and repairs.</p>
        </div>
        <div class="col-lg-6 py-2">
            <h2>Can you do work out in the road/street?</h2>
            <p>Yes, all the time. We can get permits, we can do installs and repairs.</p>
        </div>
        <div class="col-lg-6 py-2">
            <h2>Do you install wells?</h2>
            <p>Yes, all the time. We can get permits, we can do installs and repairs.</p>
        </div>
        <div class="col-lg-6 py-2">
            <h2>Are you able to pump septic tanks?</h2>
            <p>Yes, all the time. We can get permits, we can do installs and repairs.</p>
        </div>
        <div class="col-lg-6 py-2">
            <h2>Can you install holding tanks?</h2>
            <p>Yes, all the time. We can get permits, we can do installs and repairs.</p>
        </div>
        <div class="col-lg-6 py-2">
            <h2>Can you do commercial plumbing work?</h2>
            <p>Yes, all the time. We can get permits, we can do installs and repairs.</p>
        </div>
   </div>
   </div> <!-- wrapper row -->
   <div class="row px-3 py-4 section-testimonials">
      <div class="testimonial d-flex py-4">
         <div class="avatar-container px-3">
         <div class="avatar"></div>
         </div>
         <div class="flex-grow-1 pr-3 align-middle">
         <h3 class="testimonial-name">Camilla Anderson <span class="testimonial-rating text-warning">5★</span></h3>
         <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id urna at quam congue imperdiet. Nulla efficitur auctor magna, a porta nulla. Aenean et euismod nisi. Pellentesque nec ultricies turpis.</p>
         </div>
      </div>
      <div class="testimonial d-flex py-4">
         <div class="avatar-container px-3">
         <div class="avatar"></div>
         </div>
         <div class="testimonial-description flex-grow-1 pr-3 align-middle">
         <h3 class="testimonial-name">Camilla Anderson <span class="testimonial-rating text-warning">5★</span></h3>
         <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id urna at quam congue imperdiet. Nulla efficitur auctor magna, a porta nulla. Aenean et euismod nisi. Pellentesque nec ultricies turpis.</p>
         </div>
      </div>
      <div class="testimonial d-flex py-4">
         <div class="avatar-container px-3">
         <div class="avatar"></div>
         </div>
         <div class="flex-grow-1 pr-3 align-middle">
         <h3 class="testimonial-name">Camilla Anderson <span class="testimonial-rating text-warning">5★</span></h3>
         <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque id urna at quam congue imperdiet. Nulla efficitur auctor magna, a porta nulla. Aenean et euismod nisi. Pellentesque nec ultricies turpis.</p>
         </div>
      </div>
   </div> <!-- testimonials section -->
</div> <!-- container -->


    <?php
get_sidebar();
get_footer();