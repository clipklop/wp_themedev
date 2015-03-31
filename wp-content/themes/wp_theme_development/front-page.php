<!-- Rendering Header -->
<?php get_header(); ?>
<!-- End Rendering Header -->

    <!--
<section class="row no-max carousel-wrap">
  <ul class="carousel" data-orbit 

      data-options="
        pause_on_hover:true;
        animation_speed:200;
        navigation_arrows:true;
        bullets:true;
        slide_number:false;
        timer_speed:5000;
        timer:false;
        animation: fade;
      "
  >
    <li style="background: #62707d;"><img src="assets/img/orbit-01.png" alt=""></li>
    <li style="background: #e0ab18;"><img src="assets/img/orbit-02.png" alt=""></li>
    <li style="background: #9d8ac7"><img src="assets/img/orbit-03.png" alt=""></li>
    <li style="background: #2c6d9a"><img src="assets/img/orbit-04.png" alt=""></li>
  </ul>
</section>
-->

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>

<?php endwhile; endif; ?>

    </div>
  </div>
</section>

<?php get_template_part('content', 'portfolio'); ?>

<!-- Rendering Footer -->
<?php get_footer(); ?>
<!-- End Rendering Footer -->