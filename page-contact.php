<?php

/**
 * The contact template file
 *
 * @package Tech_Koala
 */

get_header();
?>

<main id="primary" class="l-main">
  <?php
  get_template_part('template-parts/fv');
  ?>

  <div class="p-contact c-section">
    <div class="c-inner">
      <div class="c-section__title">
        <h1>Contact</h1>
      </div>
      <div class="p-contact__form">
        <?php echo apply_shortcodes('[contact-form-7 id="2342" title="お問合せフォーム"]'); ?>
      </div>
    </div>
  </div>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
