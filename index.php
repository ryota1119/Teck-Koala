<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tech_Koala
 */

get_header();
?>

<main id="primary" class="l-main">
	<div class="p-fv">
		<img src="http://localhost:8080/wp-content/uploads/2023/01/main_fv-e1674894807742.jpg" alt="">
	</div>

	<div class="p-theme c-section">
		<div class="c-inner">
			<div class="c-section__title">
				<h1>トップページの見出し</h1>
			</div>
			<div class="c-section__text">
				<p>薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。
					薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。
					薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。
					薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。
					薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。
					薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。
					薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。
					薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。
					薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇薔薇。</p>
			</div>
		</div>
	</div>

	<div class="p-post c-section">
		<div class="c-inner">
			<div class="c-section__title">
				<h1>Blog</h1>
			</div>

			<div class="p-post__articles">
				<?php
				if (have_posts()) :
				?>

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
// get_sidebar();
get_footer();
