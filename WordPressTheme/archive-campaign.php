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

  <div class="campaign-page sub-page layout-sub-page">
    <div class="campaign-page__inner inner">
      <div class="campaign-page__tab tab">
        <div class="tab__category is-active">
          <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="tab__link">
            <p class="tab__text">ALL</p>
          </a>
        </div>
        <?php
        $terms = get_terms(array(
          'taxonomy' => 'campaign_category',
          'hide_empty' => false,
        ));
        if (!empty($terms) && !is_wp_error($terms)) {
          foreach ($terms as $term) {
            echo '<div class="tab__category">';
            echo '<a href="' . get_term_link($term) . '" class="tab__link">';
            echo '<p class="tab__text">' . esc_html($term->name) . '</p>';
            echo '</a>';
            echo '</div>';
          }
        }
        ?>
      </div>

      <div class="campaign-page__wrapper">
        <div class="campaign-page__cards campaign-cards">
          <!-- ループ開始 -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="campaign-cards-item campaign-card">
            <div class="campaign-card__header">
              <div class="campaign-card__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else : ?>
                <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/no-image.webp")); ?>"
                  alt="NoImage画像" />
                <?php endif; ?>
              </div>
            </div>
            <div class="campaign-card__body campaign-card__body--sub">
              <div class="campaign-card__title-block">
                <!-- タクソノミー -->
                <?php
                    $taxonomy_terms = get_the_terms($post->ID, 'campaign_category');
                    if (!empty($taxonomy_terms)) {
                      foreach ($taxonomy_terms as $taxonomy_term) {
                        echo '<div class="campaign-card__category"><p>' . esc_html($taxonomy_term->name) . '</p></div>';
                      }
                    }
                    ?>
                <h2 class="campaign-card__title campaign-card__title--large"><?php the_title() ?></h2>
              </div>
              <div class="campaign-card__price-block">
                <p class="campaign-card__price-text campaign-card__price-text--large">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price campaign-card__price--large">
                  <p class="campaign-card__price-before"><?php the_field('campaign_1'); ?></p>
                  <p class="campaign-card__price-after"><?php the_field('campaign_2'); ?></p>
                </div>
                <?php if (get_field('campaign_3')) : ?>
                <p class="campaign-card__text text u-desktop">
                  <?php the_field('campaign_3'); ?>
                </p>
                <?php endif; ?>
              </div>
            </div>
            <div class="campaign-card__footer u-desktop">
              <div class=" campaign-card__date">
                <?php if (get_field('campaign_4')) : ?>
                <time datetime="2023-06-01"><?php the_field('campaign_4'); ?></time>
                <span>-</span>
                <?php endif; ?>
                <?php if (get_field('campaign_5')) : ?>
                <time datetime="2023-09-30"><?php the_field('campaign_5'); ?></time>
                <?php endif; ?>
              </div>
              <p class="campaign-card__footer-text">ご予約・お問い合わせはコチラ</p>
              <div class="campaign-card__button">
                <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button">
                  contact&nbsp;us
                  <span></span>
                </a>
              </div>
            </div>
          </div>
          <?php
            endwhile;
          else :
            ?>
          <p class="text">記事が投稿されていません</p>
          <?php
          endif;
          ?>

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