<?php
/*
	Template Name: Portfolio Page
*/
?>
<!-- Rendering Header -->
<?php get_header(); ?>
<!-- End Rendering Header -->

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		    
		<?php endwhile; endif; ?>

    </div>
  </div>
</section>

<?php get_template_part('content', 'portfolio'); ?>

<!-- Rendering Footer -->
<?php get_footer(); ?>
<!-- End Rendering Footer -->