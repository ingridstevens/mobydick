<article <?php post_class(); ?>>
  <header>
    <!-- <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> -->
    <?php //get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="content">
    <?php the_content(); ?>
  </div>
</article>
<hr>
<ul class="chapter-links">
    <li class="pull-left">
        <?php if(get_previous_post()) { previous_post_link_plus( array('post_type' => ' "chapter" ', 'link' => 'Previous Chapter' ) ); } ?>
        <?php
            if($post->ID == 23) {
                echo '<a href="/">&laquo; Introduction & Preface</a>';
            }
        ?>
    </li>
    <li class="pull-right">
        <?php if(get_next_post()) { next_post_link_plus( array('post_type' => ' "chapter" ', 'link' => 'Next Chapter' ) ); } ?>
    </li>
</ul>
<div class="clearfix"></div>
<p class="text-center toc">
    <a href="/table-of-contents/">Table of Contents</a>
</p>


