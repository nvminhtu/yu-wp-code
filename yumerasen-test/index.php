<?php get_header(); ?>

<div id="content">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="section">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php the_content(); ?>
<!-- /.section --></div>
<?php endwhile; endif; ?>
<!-- /#content --></div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
