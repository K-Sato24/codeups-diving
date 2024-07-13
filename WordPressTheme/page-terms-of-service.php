<?php get_header(); ?>

<main>
  <?php get_template_part('template-parts/sub-fv'); ?>

  <?php if (function_exists('bcn_display')) { ?>
  <div class="breadcrumb layout-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
    <div class="breadcrumb__inner inner">
      <?php bcn_display(); ?>
    </div>
  </div>
  <?php } ?>

  <div class="terms-of-service-page sub-page layout-sub-page">
    <div class="terms-of-service-page__inner inner">
      <div class="terms-of-service-page__content sub-page-content">
        <h2 class="sub-page-content__title">利用規約</h2>
        <div class="sub-page-content__box">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>