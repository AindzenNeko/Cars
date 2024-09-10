<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package geniuscourses-cars
 */

 	include_once get_template_directory().'/inc/template-tags.php'

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
			the_content();
		?>

</article><!-- #post-<?php the_ID(); ?> -->
