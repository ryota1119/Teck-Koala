<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tech_Koala
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('p-article'); ?>>
	<div class="p-article__thumbnail">
		<?php tech_koala_post_thumbnail(); ?>
	</div>
	<div class="p-article__content">
		<?php the_title('<h2 class="article-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
		<div class="article-data">
			<?php
			tech_koala_posted_on();
			tech_koala_posted_by();
			?>
		</div>
		<div class="article-text">
			<?php the_excerpt(); ?>
		</div>
		<div class="article-tags">
			<?php
			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list('<ul><li class="tag-list">', '</li class="tag-list"><li>', '</li></ul>');
			if ($tags_list) {
			?>
				<i class="fa-solid fa-tag font-size"></i>
			<?php
				/* translators: 1: list of tags. */
				printf('<span class="tags-links">' . esc_html__('%1$s', 'tech-koala') . '</span>', $tags_list); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			} ?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
