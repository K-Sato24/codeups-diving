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
          <?php if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
          <div class="blog-content">
            <time datetime="<?php the_time('c') ?>" class="blog-content__date"><?php the_time('Y.m.d') ?></time>
            <h1 class="blog-content__title"><?php the_title() ?></h1>
            <div class="blog-content__img">
              <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('full'); ?>
              <?php else : ?>
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/no-image.webp")); ?>"
                alt="NoImage画像" />
              <?php endif; ?>
            </div>
            <div class="blog-content__body">
              <?php the_content(); ?>
            </div>
            <?php endwhile;
          endif; ?>

            <!-- ページネーション -->
            <?php
            $prev = get_previous_post();
            $prev_url = !empty($prev) ? esc_url(get_permalink($prev->ID)) : esc_url(home_url('/'));
            $prev_class = !empty($prev) ? '' : ' disabled';

            $next = get_next_post();
            $next_url = !empty($next) ? esc_url(get_permalink($next->ID)) : esc_url(home_url('/'));
            $next_class = !empty($next) ? '' : ' disabled';
            ?>
            <div class="blog-content__pagination pagination pagination--details">
              <div class="pagination__prev<?php echo $prev_class; ?>">
                <a href="<?php echo $prev_url; ?>">
                  <span class="pagination__prev-arrow"></span>
                </a>
              </div>
              <div class="pagination__next<?php echo $next_class; ?>">
                <a href="<?php echo $next_url; ?>">
                  <span class="pagination__next-arrow"></span>
                </a>
              </div>
            </div>


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
                  <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                  <?php else : ?>
                  <p class="text">記事が投稿されていません</p>
                  <?php
                endif;
                  ?>
                </div>
            </li>
            <li class="blog-page__aside-item">
              <h2 class="blog-page__aside-title">口コミ</h2>
              <div class="blog-page__aside-content aside-voice">
                <?php
                // メインループの終了
                wp_reset_postdata();

                // サブループの設定
                $args = array(
                  'post_type' => 'voice', // 投稿タイプを指定（通常の投稿の場合）
                  'posts_per_page' => 1, // 表示する投稿数を指定
                  "orderby" => "date",
                  "order" => "DESC",
                );

                // 新しいクエリを作成
                $sub_query = new WP_Query($args);
                ?>
                <?php if ($sub_query->have_posts()) : ?>
                <div class="aside-voice__cards">
                  <!-- ループ開始 -->
                  <?php while ($sub_query->have_posts()) : $sub_query->the_post(); ?>
                  <div class="aside-voice__cards-item aside-voice-card">
                    <div class="aside-voice-card__header">
                      <div class="aside-voice-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                        <?php else : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/no-image.webp")); ?>"
                          alt="NoImage画像" />
                        <?php endif; ?>
                      </div>
                      <div class="aside-voice-card__text-block">
                        <div class="aside-voice-card__info">
                          <?php if (get_field('voice_1') || get_field('voice_2')) : ?>
                          <p class="voice-card__info-text"><?php the_field('voice_1'); ?><?php the_field('voice_2'); ?>
                          </p>
                          <?php endif; ?>
                        </div>
                        <h3 class="aside-voice-card__title"><?php the_title() ?></h3>
                      </div>
                    </div>
                  </div>
                  <!-- ループ終了 -->
                  <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                  <?php else : ?>
                  <p class="text">記事が投稿されていません</p>
                  <?php
                endif;
                  ?>
                </div>
                <div class="blog-page__aside-button">
                  <a href="<?php echo esc_url(home_url("/voice")) ?>" class="button">
                    View&nbsp;more
                    <span></span>
                  </a>
                </div>
            </li>
            <li class="blog-page__aside-item">
              <h2 class="blog-page__aside-title">キャンペーン</h2>
              <div class="blog-page__aside-content aside-campaign">
                <?php
                // メインループの終了
                wp_reset_postdata();

                // サブループの設定
                $args = array(
                  'post_type' => 'campaign', // 投稿タイプを指定（通常の投稿の場合）
                  'posts_per_page' => 2, // 表示する投稿数を指定
                  "orderby" => "date",
                  "order" => "DESC",
                );

                // 新しいクエリを作成
                $sub_query = new WP_Query($args);
                ?>
                <?php if ($sub_query->have_posts()) : ?>
                <div class="aside-campaign__cards">
                  <!-- ループ開始 -->
                  <?php while ($sub_query->have_posts()) : $sub_query->the_post(); ?>
                  <div class="aside-campaign__cards-item aside-campaign-card">
                    <div class="aside-campaign-card__header">
                      <div class="aside-campaign-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                        <?php else : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri("/assets/images/common/no-image.webp")); ?>"
                          alt="NoImage画像" />
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="aside-campaign-card__body">
                      <div class="aside-campaign-card__title-block">
                        <h3 class="aside-campaign-card__title"><?php the_title() ?></h3>
                      </div>
                      <div class="aside-campaign-card__price-block">
                        <p class="aside-campaign-card__price-text">全部コミコミ(お一人様)</p>
                        <div class="aside-campaign-card__price">
                          <p class="aside-campaign-card__price-before"><?php the_field('campaign_1'); ?></p>
                          <p class="aside-campaign-card__price-after"><?php the_field('campaign_2'); ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- ループ終了 -->
                  <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                  <?php else : ?>
                  <p class="text">記事が投稿されていません</p>
                  <?php
                endif;
                  ?>
                </div>
                <div class="blog-page__aside-button">
                  <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="button">
                    View&nbsp;more
                    <span></span>
                  </a>
                </div>
            </li>
            <li class="blog-page__aside-item">
              <h2 class="blog-page__aside-title">アーカイブ</h2>
              <div class="blog-page__aside-content aside-archive">
                <?php wp_get_custom_archives(); ?>
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