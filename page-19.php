<?php get_template_part('templates/page', 'header'); ?>

<?php $args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'menu_order',
	'order'            => 'DESC',
	'post_type'        => 'chapter',
	'post_status'      => 'publish',
	'suppress_filters' => true
);
?>

<ul>
    <li>
        <a href="/#pref">Preface</a>
    </li>
    <li>
        <a href="/#intro">Introduction</a>
    </li>
<?php
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<li>
		<a href="<?php the_permalink(); ?>"><?php echo 'Chapter ', get_post_meta($post->ID, 'chapter_number', true), ': ';?><?php the_title(); ?></a>
	</li>
<?php endforeach;
wp_reset_postdata();?>

</ul>
