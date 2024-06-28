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

  <div class="blog-page sub-page layout-sub-page">
    <div class="blog-page__inner inner">
      <div class="blog-page__wrapper">
        <div class="blog-page__container">
          <div class="blog-page__items blog-cards blog-cards--2col">
            <?php if (have_posts()) :
              while (have_posts()) :
                the_post(); ?>
            <div class="sub-page-cards__item blog-card">
              <a href="<?php the_permalink(); ?>" class="blog-card__link">
                <div class="blog-card__header">
                  <div class="blog-card__img">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/no-image.webp")); ?>"
                      alt="NoImage画像" />
                    <?php endif; ?>
                  </div>
                </div>
                <div class="blog-card__body">
                  <time class="blog-card__date" datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                  <h2 class="blog-card__title"><?php the_title() ?></h2>
                  <p class="blog-card__text text">
                    <?php echo wp_trim_words(get_the_content(), 85, '…'); ?>
                </div>
              </a>
            </div>
            <?php endwhile;
            endif; ?>
          </div>

          <!-- ページネーション -->
          <div class="campaign-page__pagination pagination layout-pagination">
            <?php custom_wp_pagenavi(); ?>
          </div>
        </div>

        <!-- サイドバー -->
        <aside class="blog-page__aside">
          <ul class="blog-page__aside-items">
            <li class="blog-page__aside-item">
              <h2 class="blog-page__aside-title">人気記事</h2>
              <div class="blog-page__aside-content aside-blog">
                <?php
                $args = [
                  "post_type" => "post",
                  "posts_per_page" => 3,
                  'meta_key' => 'post_views_count',
                  'orderby' => 'meta_value_num',
                  'order' => 'DESC',
                ];
                $the_query = new WP_Query($args);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                <div class="aside-blog__cards">
                  <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                  <div class="aside-blog__cards-item aside-blog-card">
                    <a href="<?php the_permalink(); ?>" class="aside-blog-card__link">
                      <div class="aside-blog-card__wrapper">
                        <div class="aside-blog-card__header">
                          <div class="aside-blog-card__img">
                            <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full'); ?>
                            <?php else : ?>
                            <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/no-image.webp")); ?>"
                              alt="NoImage画像" />
                            <?php endif; ?>
                          </div>
                        </div>
                        <div class="aside-blog-card__body">
                          <time class="aside-blog-card__date"
                            datetime="<?php the_time('c') ?>"><?php the_time('Y.m.d') ?></time>
                          <h3 class="aside-blog-card__title"><?php the_title() ?></h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                </div>
                <?php else : ?>
                <p>記事が投稿されていません</p>
                <?php endif; ?>
              </div>
            </li>
            <li class="blog-page__aside-item">
              <h2 class="blog-page__aside-title">口コミ</h2>
              <div class="blog-page__aside-content aside-voice">
                <div class="aside-voice__cards">
                  <!-- ループ開始 -->
                  <div class="aside-voice__cards-item aside-voice-card">
                    <div class="aside-voice-card__header">
                      <div class="aside-voice-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice05.webp"
                          alt="ソファに座って腕を組んだ男女が笑顔でこちらを向いている様子" loading="lazy" decoding="async">
                      </div>
                      <div class="aside-voice-card__text-block">
                        <div class="aside-voice-card__info">
                          <p class="aside-voice-card__info-text">30代(カップル)</p>
                        </div>
                        <h3 class="aside-voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                      </div>
                    </div>
                  </div>
                  <!-- ループ終了 -->
                </div>
              </div>
              <div class="blog-page__aside-button">
                <a href="archive-voice.html" class="button">
                  View&nbsp;more
                  <span></span>
                </a>
              </div>
            </li>
            <li class="blog-page__aside-item">
              <h2 class="blog-page__aside-title">キャンペーン</h2>
              <div class="blog-page__aside-content aside-campaign">
                <div class="aside-campaign__cards">
                  <!-- ループ開始 -->
                  <div class="aside-campaign__cards-item aside-campaign-card">
                    <div class="aside-campaign-card__header">
                      <div class="aside-campaign-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign01.webp"
                          alt="海を漂うたくさんの熱帯魚の様子" loading="lazy" decoding="async">
                      </div>
                    </div>
                    <div class="aside-campaign-card__body">
                      <div class="aside-campaign-card__title-block">
                        <h3 class="aside-campaign-card__title">ライセンス取得</h3>
                      </div>
                      <div class="aside-campaign-card__price-block">
                        <p class="aside-campaign-card__price-text">全部コミコミ(お一人様)</p>
                        <div class="aside-campaign-card__price">
                          <p class="aside-campaign-card__price-before">¥56,000</p>
                          <p class="aside-campaign-card__price-after">¥46,000</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ループ終了 -->

                  <div class="aside-campaign__cards-item aside-campaign-card">
                    <div class="aside-campaign-card__header">
                      <div class="aside-campaign-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign02.webp"
                          alt="透き通った海の様子" loading="lazy" decoding="async">
                      </div>
                    </div>
                    <div class="aside-campaign-card__body">
                      <div class="aside-campaign-card__title-block">
                        <h3 class="aside-campaign-card__title">貸切体験ダイビング</h3>
                      </div>
                      <div class="aside-campaign-card__price-block">
                        <p class="aside-campaign-card__price-text">全部コミコミ(お一人様)</p>
                        <div class="aside-campaign-card__price">
                          <p class="aside-campaign-card__price-before">¥24,000</p>
                          <p class="aside-campaign-card__price-after">¥18,000</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="blog-page__aside-button">
                <a href="archive-campaign.html" class="button">
                  View&nbsp;more
                  <span></span>
                </a>
              </div>
            </li>
            <li class="blog-page__aside-item">
              <h2 class="blog-page__aside-title">アーカイブ</h2>
              <div class="blog-page__aside-content aside-archive">
                <details class="aside-archive__accordion js-details is-opened" open>
                  <summary class="aside-archive__year js-summary">
                    2023
                  </summary>
                  <ul class="aside-archive__content js-accordion-content">
                    <li class="aside-archive__month">
                      <a href="#">3月</a>
                    </li>
                    <li class="aside-archive__month">
                      <a href="#">2月</a>
                    </li>
                    <li class="aside-archive__month">
                      <a href="#">1月</a>
                    </li>
                  </ul>
                </details>
                <details class="aside-archive__accordion js-details">
                  <summary class="aside-archive__year js-summary">
                    2022
                  </summary>
                  <ul class="aside-archive__content js-accordion-content">
                    <li class="aside-archive__month">
                      <a href="#">3月</a>
                    </li>
                    <li class="aside-archive__month">
                      <a href="#">2月</a>
                    </li>
                    <li class="aside-archive__month">
                      <a href="#">1月</a>
                    </li>
                  </ul>
                </details>
              </div>
            </li>
          </ul>
        </aside>
      </div>
    </div>
  </div>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>