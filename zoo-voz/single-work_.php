<?php
/**
 * @single: work
 */ ?>
<?php get_header(); ?>

<?php
  $post_objects = get_field('selected_service');

  if( $post_objects ): ?>
   
      <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
          <?php setup_postdata($post); ?>
          <?php /* //echo get_the_ID();
          <li>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li> */ ?>
      <?php endforeach; ?>
    
      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

<?php endif; ?>




<?php get_footer(); ?>
