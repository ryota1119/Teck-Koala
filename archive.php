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
	<?php if (is_home() || is_front_page()) : ?>
		<div class="p-fv">
		<?php else : ?>
			<div class="p-fv-child">
			<?php endif ?>
			<img src="http://localhost:8080/wp-content/uploads/2023/02/eyecatch-image.jpg" alt="">
			</div>

			<div class="c-inner">

				<?php if (have_posts()) : ?>
					<?php
					if (is_tag()) {
						$sectionTitle = '<h1 class="c-section__title"> #';
					} else {
						$sectionTitle = '<h1 class="c-section__title">';
					}
					?>

					<div class="c-section__title">
						<?php
						the_archive_title($sectionTitle, '');
						$found_posts = $wp_query->found_posts;
						printf('<span>(%s件)</span>', $found_posts);
						?>
						<p></p>
						<?php
						the_archive_description('<div class="archive-description">', '</div>');
						?>
					</div><!-- .page-header -->

				<?php
					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
						// get_template_part( 'template-parts/content', get_post_type() );
						get_template_part('template-parts/content', 'top');

					endwhile;

					the_posts_pagination(array(
						// 'mid_size' => 2,
						'prev_text' => '<i class="fas fa-chevron-left"></i>',
						'prev_text' => '<img src="http://localhost:8080/wp-content/uploads/2023/01/Frame-13.png" alt="">',
						'next_text' => '<img src="http://localhost:8080/wp-content/uploads/2023/01/Frame-14.png" alt="">',
						'type'      => 'list',
					));

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>

			</div>
</main><!-- #main -->

<?php
get_footer();
