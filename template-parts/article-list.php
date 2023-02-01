<div class="p-posts c-section">
	<div class="c-inner">
		<div class="c-section__title">
			<?php if (is_home() || is_front_page()) : ?>
				<h1>Blog</h1>
			<?php elseif (is_archive()) :
				if (is_tag()) :
					$sectionTitle = '<h1> #';
				else :
					$sectionTitle = '<h1>';
				endif;

				$found_posts = $wp_query->found_posts;
				the_archive_title($sectionTitle, '') . printf('<span>(%s件)</span>', $found_posts) . '</h1>';
				the_archive_description('<div class="archive-description">', '</div>');
			endif ?>
		</div>

		<div class="p-posts__articles">

			<?php
			if (have_posts()) :
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					get_template_part('template-parts/article', 'card');

				endwhile;

				the_posts_pagination(array(
					// 'mid_size' => 2,
					'prev_text' => '<i class="fas fa-chevron-left"></i>',
					'prev_text' => '<img src="/wp-content/themes/tech-koala/image/paging-prev.png" alt="">',
					'next_text' => '<img src="/wp-content/themes/tech-koala/image/paging-next.png" alt="">',
					'type'      => 'list',
				));

			else :

				get_template_part('template-parts/article', 'none');

			endif;
			?>
		</div>
	</div>
</div>
