<div class="page-header">
  <h1>
<?php
      //put the piklist chapter_number
      echo 'Chapter ', get_post_meta($post->ID, 'chapter_number', true), '<br>';
?>
    <span class="small"><?php echo roots_title(); ?></span>
  </h1>
</div>


<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, this chapter went out for coffee. Check back later.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content-chapter') ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>
