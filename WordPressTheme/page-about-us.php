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

  <div class="about-page sub-page layout-sub-page">
    <div class="about-page__inner inner">
      <div class="about-page__content about-content">
        <div class="about-content__image-block">
          <div class="about-content__img01 u-desktop">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about01.webp" alt="青い空と木、屋根の上のシーサーの様子" loading="lazy" decoding="async">
          </div>
          <div class="about-content__img02 about-content__img02--sub">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about02.webp" alt="透き通った海にいる2匹の黄色い熱帯魚の様子" loading="lazy" decoding="async">
          </div>
        </div>
        <div class="about-content__wrapper">
          <p class="about-content__lead about-content__lead--sub">Dive&nbsp;into&nbsp;<br>the&nbsp;Ocean</p>
          <div class="about-content__text--block">
            <p class="about-content__text about-content__text--sub">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="about-gallery layout-about-gallery">
    <div class="about-gallery__inner inner">
      <div class="about-gallery__title section-title">
        <p class="section-title__en">Gallery</p>
        <h2 class="section-title__ja">フォト</h2>
      </div>
      <div class="about-gallery__wrapper">
        <div class="about-gallery__image js-gallery-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery01.webp" alt="" loading="lazy" decoding="async">
        </div>
        <div class="about-gallery__image js-gallery-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery02.webp" alt="" loading="lazy" decoding="async">
        </div>
        <div class="about-gallery__image js-gallery-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery03.webp" alt="" loading="lazy" decoding="async">
        </div>
        <div class="about-gallery__image js-gallery-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery04.webp" alt="" loading="lazy" decoding="async">
        </div>
        <div class="about-gallery__image js-gallery-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery05.webp" alt="" loading="lazy" decoding="async">
        </div>
        <div class="about-gallery__image js-gallery-modal-open">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery06.webp" alt="" loading="lazy" decoding="async">
        </div>
      </div>
    </div>

    <!-- モーダル -->
    <dialog class="about-gallery__modal js-gallery-modal">
      <div class="about-gallery__modal__bg">
        <div class="about-gallery__modal-image">
          <img src="#" alt="#" loading="lazy" decoding="async">
        </div>
      </div>
    </dialog>

  </section>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>