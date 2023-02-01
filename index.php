<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package Tech_Koala
 */

get_header();
?>

<main id="primary" class="l-main">
	<?php
	get_template_part('template-parts/fv');
	?>

	<div class="p-theme c-section">
		<div class="c-inner">
			<div class="c-section__title">
				<h1>薔薇コアラBlogとは、</h1>
			</div>
			<div class="c-section__text">
				<p>初めまして、薔薇コアラBlogの人です。</p>
				<p>福岡県内でWebエンジニアの仕事をしています。</p>
				<p>このブログの主な目的は、業務中で調べた内容などを備忘録として残していくだけです。</p>
				<p>都度調べて、明日には忘れている私とはこれでおさらばしたい。</p>
				<p>フロント関連の知識などはこのブログに随時取り入れていきます☻ </p>
			</div>
		</div>
	</div>

	<?php get_template_part('template-parts/article', 'list'); ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
