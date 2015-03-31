<?php 
//Table of Contents -- display links to all chapters, intro, preface, epilogue.

get_template_part('templates/page', 'header');

$args = array(
	'posts_per_page'   => -1,
	'orderby'          => 'menu_order',
	'order'            => 'ASC',
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
foreach ( $myposts as $post ) {
    setup_postdata( $post ); 
    $chapter_number = get_post_meta($post->ID, 'chapter_number', true);
?>
	<li>
		<a href="<?php the_permalink(); ?>">
            <?php 
            if( $chapter_number !== "-1" ) {
                echo 'Chapter ', $chapter_number, ': ';
            }
            the_title();
            ?>
        </a>
	</li>
<?php } //end foreach
wp_reset_postdata();?>

</ul>
