<?php get_template_part('templates/page', 'header'); ?>



<?php
$type = 'builds';
$args=array(
  'post_type' => $type,
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'caller_get_posts'=> 1

$my_query = null;
$my_query = new WP_Query($args);

if ( $my_query->have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
    <?php endwhile; ?>
<?php endif; ?>



<?php the_posts_navigation(); ?>
