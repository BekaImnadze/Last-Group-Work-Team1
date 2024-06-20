<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starter
 */

get_header();
?>
	<section>
		<div>
			<?php echo get_the_content(); ?>
		</div>
	</section>
	
<?php
get_footer();
