<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tech_Koala
 */

get_header();
?>

<?php
$found_posts = $wp_query->found_posts;
?>
<main id="primary" class="l-main">
<?php 
	get_template_part('template-parts/fv');

	get_template_part('template-parts/article', 'list');
	?>
</main><!-- #main -->

<?php
get_footer();
