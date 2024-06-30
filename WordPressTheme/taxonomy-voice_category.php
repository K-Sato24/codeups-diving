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

  <div class="voice-page sub-page layout-sub-page">
    <div class="voice-page__inner inner">
      <div class="voice-page__tab tab">
        <div class="tab__category">
          <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="tab__link">
            <p class="tab__text">ALL</p>
          </a>
        </div>
        <?php
        $terms = get_terms(array(
          'taxonomy' => 'voice_category',
          'hide_empty' => false,
        ));
        if (!empty($terms) && !is_wp_error($terms)) {
          foreach ($terms as $term) {
            $active_class = (is_tax('voice_category', $term->slug)) ? 'is-active' : '';
            echo '<div class="tab__category ' . $active_class . '">';
            echo '<a href="' . get_term_link($term) . '" class="tab__link">';
            echo '<p class="tab__text">' . esc_html($term->name) . '</p>';
            echo '</a>';
            echo '</div>';
          }
        }
        ?>
      </div>

      <div class="voice-page__wrapper">
        <div class="voice-page__items voice-cards">
          <!-- ループ開始 -->
          <?php if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
          <div class="voice-cards__item voice-card">
            <div class="voice-card__header">
              <div class="voice-card__text-block">
                <div class="voice-card__info">
                  <?php if (get_field('voice_1') || get_field('voice_2')) : ?>
                  <p class="voice-card__info-text"><?php the_field('voice_1'); ?><?php the_field('voice_2'); ?>
                  </p>
                  <?php endif; ?>
                  <!-- タクソノミー -->
                  <?php
                      $taxonomy_terms = get_the_terms($post->ID, 'voice_category');
                      if (!empty($taxonomy_terms)) {
                        foreach ($taxonomy_terms as $taxonomy_term) {
                          echo '<div class="voice-card__category"><p>' . esc_html($taxonomy_term->name) . '</p></div>';
                        }
                      }
                      ?>
                </div>
                <h2 class="voice-card__title"><?php the_title() ?></h2>
              </div>
              <div class="voice-card__img slide-color-box js-slide-color-box">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/no-image.webp")); ?>"
                  alt="NoImage画像" />
                <?php endif; ?>
              </div>
            </div>
            <div class="voice-card__body">
              <p class="voice-card__text text">
                <?php the_field('voice_3'); ?>
              </p>
            </div>
          </div>
          <?php endwhile;
          endif; ?>
          <!-- ループ終了 -->
        </div>
      </div>
      <!-- ページネーション -->
      <div class="campaign-page__pagination pagination layout-pagination">
        <?php custom_wp_pagenavi(); ?>
      </div>

    </div>
  </div>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>