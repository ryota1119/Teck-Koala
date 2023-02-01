<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tech_Koala
 */

get_header();
?>

<main id="primary" class="l-main">
	<div class="c-inner">
		<div class="c-row">
			<div class="u-post">
				<?php
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/content', get_post_type());

					get_template_part('template-parts/pagination');

					// If comments are open or we have at least one comment, load up the comment template.
					// if (comments_open() || get_comments_number()) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>
			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
