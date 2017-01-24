<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>

<?php
require('/the/path/to/your/wp-blog-header.php');
?>

<?php
// Get the last 3 posts.
global $post;
$args = array( 'posts_per_page' => 3 );
$myposts = get_posts( $args );

foreach( $myposts as $post ) :	setup_postdata($post); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br />
<?php endforeach; ?>