<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tech_Koala
 */

?>

<div class="c-inner">
	<div class="u-post__header">
		<div class="p-article__data text-center">
			<?php
			tech_koala_posted_on();
			tech_koala_posted_by();
			?>
		</div>
		<?php the_title('<h1 class="p-article__title text-center">', '</h1>'); ?>
		<div class="p-article__tags jc-center">
			<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('<ul><li class="tag-list">', '</li class="tag-list"><li>', '</li></ul>');
			if ($tags_list) {
			?>
				<i class="fa-solid fa-tag icon-size"></i>
			<?php
				/* translators: 1: list of tags. */
				printf('<span class="tags-links">' . esc_html__('%1$s', 'tech-koala') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			} ?>
		</div>
	</div>
	<?php tech_koala_post_thumbnail(); ?>

	<div class="p-article-format">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'tech-koala'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post(get_the_title())
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">',
				'after'  => '</div>',
			)
		);
		?>
	</div>
</div>
