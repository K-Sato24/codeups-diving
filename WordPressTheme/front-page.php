<?php get_header(); ?>

<main>
  <div class="fv">
    <div class="fv__inner">
      <?php
      $opening_animation = get_field('opening_animation');
      $fv_left = $opening_animation['fv_9'] ?? null;
      $fv_right = $opening_animation['fv_10'] ?? null;
      $fv_top = $opening_animation['fv_11'] ?? null;
      $fv_bottom = $opening_animation['fv_12'] ?? null;
      ?>
      <?php if ($fv_left && $fv_right && $fv_top && $fv_bottom) : ?>
      <!-- オープニングアニメーション -->
      <div class="fv__opening-bg js-opening-bg">
        <div class="fv__opening-title js-opening-title">
          <div class="main-title--green">
            <p class="main-title__main">diving</p>
            <p class="main-title__sub">into&nbsp;the&nbsp;ocean</p>
          </div>
        </div>
        <div class="fv__opening-images">
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo esc_url($fv_left['url']); ?>">
            <img src="<?php echo esc_url($fv_top['url']); ?>" alt="オープニングアニメーション"
              class="fv__opening-image01 js-opening01">
          </picture>
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo esc_url($fv_right['url']); ?>">
            <img src="<?php echo esc_url($fv_bottom['url']); ?>" alt="オープニングアニメーション"
              class="fv__opening-image02 js-opening02">
          </picture>
        </div>
      </div>
      <!-- アニメーション終了 -->
      <?php endif; ?>
      <div class="fv__bg">
        <div class="fv__bg-slider swiper js-fv-swiper">
          <div class="fv__wrapper swiper-wrapper">
            <?php
            $background_image = get_field('background_image');
            $fv_img1_pc = $background_image['fv_1'] ?? null;
            $fv_img1_sp = $background_image['fv_2'] ?? null;
            $fv_img2_pc = $background_image['fv_3'] ?? null;
            $fv_img2_sp = $background_image['fv_4'] ?? null;
            $fv_img3_pc = $background_image['fv_5'] ?? null;
            $fv_img3_sp = $background_image['fv_6'] ?? null;
            $fv_img4_pc = $background_image['fv_7'] ?? null;
            $fv_img4_sp = $background_image['fv_8'] ?? null;
            ?>

            <?php if ($fv_img1_pc || $fv_img1_sp) : ?>
            <div class="swiper-slide">
              <?php if ($fv_img1_pc && $fv_img1_sp) : ?>
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url($fv_img1_pc['url']); ?>">
                <img src="<?php echo esc_url($fv_img1_sp['url']); ?>" alt="<?php echo esc_attr($fv_img1_sp['alt']); ?>">
              </picture>
              <?php elseif ($fv_img1_sp) : ?>
              <img src="<?php echo esc_url($fv_img1_sp['url']); ?>" alt="<?php echo esc_attr($fv_img1_sp['alt']); ?>">
              <?php else : ?>
              <img src="<?php echo esc_url($fv_img1_pc['url']); ?>" alt="<?php echo esc_attr($fv_img1_pc['alt']); ?>">
              <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if ($fv_img2_pc || $fv_img2_sp) : ?>
            <div class="swiper-slide">
              <?php if ($fv_img2_pc && $fv_img2_sp) : ?>
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url($fv_img2_pc['url']); ?>">
                <img src="<?php echo esc_url($fv_img2_sp['url']); ?>" alt="<?php echo esc_attr($fv_img2_sp['alt']); ?>">
              </picture>
              <?php elseif ($fv_img2_sp) : ?>
              <img src="<?php echo esc_url($fv_img2_sp['url']); ?>" alt="<?php echo esc_attr($fv_img2_sp['alt']); ?>">
              <?php else : ?>
              <img src="<?php echo esc_url($fv_img2_pc['url']); ?>" alt="<?php echo esc_attr($fv_img2_pc['alt']); ?>">
              <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if ($fv_img3_pc || $fv_img3_sp) : ?>
            <div class="swiper-slide">
              <?php if ($fv_img3_pc && $fv_img3_sp) : ?>
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url($fv_img3_pc['url']); ?>">
                <img src="<?php echo esc_url($fv_img3_sp['url']); ?>" alt="<?php echo esc_attr($fv_img3_sp['alt']); ?>">
              </picture>
              <?php elseif ($fv_img3_sp) : ?>
              <img src="<?php echo esc_url($fv_img3_sp['url']); ?>" alt="<?php echo esc_attr($fv_img3_sp['alt']); ?>">
              <?php else : ?>
              <img src="<?php echo esc_url($fv_img3_pc['url']); ?>" alt="<?php echo esc_attr($fv_img3_pc['alt']); ?>">
              <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php if ($fv_img4_pc || $fv_img4_sp) : ?>
            <div class="swiper-slide">
              <?php if ($fv_img4_pc && $fv_img4_sp) : ?>
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo esc_url($fv_img4_pc['url']); ?>">
                <img src="<?php echo esc_url($fv_img4_sp['url']); ?>" alt="<?php echo esc_attr($fv_img4_sp['alt']); ?>">
              </picture>
              <?php elseif ($fv_img4_sp) : ?>
              <img src="<?php echo esc_url($fv_img4_sp['url']); ?>" alt="<?php echo esc_attr($fv_img4_sp['alt']); ?>">
              <?php else : ?>
              <img src="<?php echo esc_url($fv_img4_pc['url']); ?>" alt="<?php echo esc_attr($fv_img4_pc['alt']); ?>">
              <?php endif; ?>
            </div>
            <?php endif; ?>

            <div class="fv__title js-fv-title">
              <div class="main-title">
                <p class="main-title__main">diving</p>
                <p class="main-title__sub">into&nbsp;the&nbsp;ocean</p>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

  <section class="campaign layout-campaign">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <p class="section-title__en">Campaign</p>
        <h2 class="section-title__ja">キャンペーン</h2>
      </div>
      <div class="campaign__content">
        <div class="campaign__swiper swiper js-campaign-swiper">
          <?php
          // メインループの終了
          wp_reset_postdata();

          // サブループの設定
          $args = array(
            'post_type' => 'campaign', // 投稿タイプを指定（通常の投稿の場合）
            // 'posts_per_page' => 1, // 表示する投稿数を指定
            "orderby" => "date",
            "order" => "DESC",
          );

          // 新しいクエリを作成
          $sub_query = new WP_Query($args);
          ?>
          <?php if ($sub_query->have_posts()) : ?>
          <div class="campaign__cards swiper-wrapper">
            <!-- ループ開始 -->
            <?php while ($sub_query->have_posts()) : $sub_query->the_post(); ?>
            <div class="campaign__card swiper-slide">
              <div class="campaign-card">
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
                <div class="campaign-card__body">
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
                    <h3 class="campaign-card__title"><?php the_title() ?></h3>
                  </div>
                  <div class="campaign-card__price-block">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before"><?php the_field('campaign_1'); ?></p>
                      <p class="campaign-card__price-after"><?php the_field('campaign_2'); ?></p>
                    </div>
                  </div>
                </div>
              </div>
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

            <!-- ループ終了 -->
          </div>
        </div>
        <div class="campaign-button-prev js-campaign-swiper-button-prev swiper-button-prev u-desktop"></div>
        <div class="campaign-button-next js-campaign-swiper-button-next swiper-button-next u-desktop"></div>
      </div>
      <div class="campaign__button">
        <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="button">
          View&nbsp;more
          <span></span>
        </a>
      </div>
    </div>
  </section>

  <section class="about layout-section">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <p class="section-title__en">About&nbsp;us</p>
        <h2 class="section-title__ja">私たちについて</h2>
      </div>
      <div class="about__content about-content">
        <div class="about-content__image-block">
          <div class="about-content__img01">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about01.webp" alt="青い空と木、屋根の上のシーサーの様子"
              loading="lazy" decoding="async">
          </div>
          <div class="about-content__img02">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about02.webp" alt="透き通った海にいる2匹の黄色い熱帯魚の様子"
              loading="lazy" decoding="async">
          </div>
        </div>
        <div class="about-content__wrapper">
          <p class="about-content__lead">Dive&nbsp;into&nbsp;<br>the&nbsp;Ocean</p>
          <div class="about-content__text--block">
            <p class="about-content__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="about-content__button">
              <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="button">
                View&nbsp;more
                <span></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="information layout-information">
    <div class="information__inner inner">
      <div class="information__title section-title">
        <p class="section-title__en">Information</p>
        <h2 class="section-title__ja">ダイビング情報</h2>
      </div>
      <div class="information__wrapper">
        <div class="information__img slide-color-box js-slide-color-box">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information01.webp" alt="海中のイソギンチャクと熱帯魚の様子"
            loading="lazy" decoding="async">
        </div>
        <div class="information__text-block">
          <h3 class="information__lead">ライセンス講習</h3>
          <p class="information__text text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__button">
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="button">
              View&nbsp;more
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="blog blog-layout">
    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <p class="section-title__en section-title__en--white">Blog</p>
        <h2 class="section-title__ja section-title__ja--white">ブログ</h2>
      </div>
      <?php
      $args = [
        "post_type" => "post",
        "posts_per_page" => 3,
        "orderby" => "date",
        "order" => "DESC",
      ];
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
      <div class="blog__items blog-cards">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="blog-cards__item blog-card">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="blog-card__link">
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
              <h3 class="blog-card__title"><?php the_title() ?></h3>
              <p class="blog-card__text text">
                <?php echo wp_trim_words(get_the_content(), 85, '…'); ?>
              </p>
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
      <div class="blog__button">
        <a href="<?php echo esc_url(home_url("/blog")) ?>" class="button">
          View&nbsp;more
          <span></span>
        </a>
      </div>
    </div>
  </section>

  <section class="voice layout-section">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <p class="section-title__en">Voice</p>
        <h2 class="section-title__ja">お客様の声</h2>
      </div>
      <?php
      // メインループの終了
      wp_reset_postdata();

      // サブループの設定
      $args = array(
        'post_type' => 'voice', // 投稿タイプを指定（通常の投稿の場合）
        'posts_per_page' => 2, // 表示する投稿数を指定
        "orderby" => "date",
        "order" => "DESC",
      );

      // 新しいクエリを作成
      $sub_query = new WP_Query($args);
      ?>
      <?php if ($sub_query->have_posts()) : ?>
      <div class="voice__items voice-cards">
        <?php while ($sub_query->have_posts()) : $sub_query->the_post(); ?>
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
              <h3 class="voice-card__title"><?php the_title() ?></h3>
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
      <div class="voice__button">
        <a href="<?php echo esc_url(home_url("/voice")) ?>" class="button">
          View&nbsp;more
          <span></span>
        </a>
      </div>
    </div>
  </section>

  <section class="price layout-section">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <p class="section-title__en">Price</p>
        <h2 class="section-title__ja">料金一覧</h2>
      </div>
      <div class="price__wrapper">
        <div class="price__img slide-color-box js-slide-color-box">
          <picture>
            <source media="(min-width: 768px)"
              srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price.webp" alt="海中を漂うウミガメの様子"
              loading="lazy" decoding="async">
          </picture>
        </div>
        <div class="price__content">

          <?php
// スラッグからページIDを取得
$page = get_page_by_path('price');
$page_id = $page ? $page->ID : null;

// Smart Custom Fieldsを使用してデータを取得
if ($page_id) {
    $license_fields = SCF::get('license', $page_id);
} else {
    $license_fields = [];
}
?>

          <table class="price__table" aria-label="ライセンス講習">
            <tbody>
              <tr>
                <th colspan="2">ライセンス講習</th>
              </tr>
              <?php
    if (!empty($license_fields)) {
      foreach ($license_fields as $field) {
        $license_1 = $field['license_1'];
        $license_2 = $field['license_2'];
        $license_3 = $field['license_3'];
    ?>
              <tr>
                <td>
                  <?php if (!empty($license_1) && !empty($license_2)) : ?>
                  <?php echo esc_html($license_1); ?><br class="u-mobile"><?php echo esc_html($license_2); ?>
                  <?php elseif (!empty($license_1)) : ?>
                  <?php echo esc_html($license_1); ?>
                  <?php elseif (!empty($license_2)) : ?>
                  <?php echo esc_html($license_2); ?>
                  <?php endif; ?>
                </td>
                <td>
                  <?php if (!empty($license_3)) : ?>
                  <?php echo esc_html($license_3); ?>
                  <?php endif; ?>
                </td>
              </tr>
              <?php
      }
    }
    ?>
            </tbody>
          </table>



          <?php
// スラッグからページIDを取得
$page = get_page_by_path('price');
$page_id = $page ? $page->ID : null;

// Smart Custom Fieldsを使用してデータを取得
if ($page_id) {
    $trial_fields = SCF::get('trial', $page_id);
} else {
    $trial_fields = [];
}
?>

          <table class="price__table" aria-label="体験ダイビング">
            <tbody>
              <tr>
                <th colspan="2">体験ダイビング</th>
              </tr>
              <?php
    if (!empty($trial_fields)) {
      foreach ($trial_fields as $field) {
        $trial_1 = $field['trial_1'];
        $trial_2 = $field['trial_2'];
        $trial_3 = $field['trial_3'];
    ?>
              <tr>
                <td>
                  <?php if (!empty($trial_1) && !empty($trial_2)) : ?>
                  <?php echo esc_html($trial_1); ?><br class="u-mobile"><?php echo esc_html($trial_2); ?>
                  <?php elseif (!empty($trial_1)) : ?>
                  <?php echo esc_html($trial_1); ?>
                  <?php elseif (!empty($trial_2)) : ?>
                  <?php echo esc_html($trial_2); ?>
                  <?php endif; ?>
                </td>
                <td>
                  <?php if (!empty($trial_3)) : ?>
                  <?php echo esc_html($trial_3); ?>
                  <?php endif; ?>
                </td>
              </tr>
              <?php
      }
    }
    ?>
            </tbody>
          </table>


          <?php
// スラッグからページIDを取得
$page = get_page_by_path('price');
$page_id = $page ? $page->ID : null;

// Smart Custom Fieldsを使用してデータを取得
if ($page_id) {
    $fun_fields = SCF::get('fun', $page_id);
} else {
    $fun_fields = [];
}
?>

          <table class="price__table" aria-label="ファンダイビング">
            <tbody>
              <tr>
                <th colspan="2">ファンダイビング</th>
              </tr>
              <?php
    if (!empty($fun_fields)) {
      foreach ($fun_fields as $field) {
        $fun_1 = $field['fun_1'];
        $fun_2 = $field['fun_2'];
        $fun_3 = $field['fun_3'];
    ?>
              <tr>
                <td>
                  <?php if (!empty($fun_1) && !empty($fun_2)) : ?>
                  <?php echo esc_html($fun_1); ?><br class="u-mobile"><?php echo esc_html($fun_2); ?>
                  <?php elseif (!empty($fun_1)) : ?>
                  <?php echo esc_html($fun_1); ?>
                  <?php elseif (!empty($fun_2)) : ?>
                  <?php echo esc_html($fun_2); ?>
                  <?php endif; ?>
                </td>
                <td>
                  <?php if (!empty($fun_3)) : ?>
                  <?php echo esc_html($fun_3); ?>
                  <?php endif; ?>
                </td>
              </tr>
              <?php
      }
    }
    ?>
            </tbody>
          </table>


          <?php
// スラッグからページIDを取得
$page = get_page_by_path('price');
$page_id = $page ? $page->ID : null;

// Smart Custom Fieldsを使用してデータを取得
if ($page_id) {
    $special_fields = SCF::get('special', $page_id);
} else {
    $special_fields = [];
}
?>

          <table class="price__table" aria-label="スペシャルダイビング">
            <tbody>
              <tr>
                <th colspan="2">スペシャルダイビング</th>
              </tr>
              <?php
    if (!empty($special_fields)) {
      foreach ($special_fields as $field) {
        $special_1 = $field['special_1'];
        $special_2 = $field['special_2'];
        $special_3 = $field['special_3'];
    ?>
              <tr>
                <td>
                  <?php if (!empty($special_1) && !empty($special_2)) : ?>
                  <?php echo esc_html($special_1); ?><br class="u-mobile"><?php echo esc_html($special_2); ?>
                  <?php elseif (!empty($special_1)) : ?>
                  <?php echo esc_html($special_1); ?>
                  <?php elseif (!empty($special_2)) : ?>
                  <?php echo esc_html($special_2); ?>
                  <?php endif; ?>
                </td>
                <td>
                  <?php if (!empty($special_3)) : ?>
                  <?php echo esc_html($special_3); ?>
                  <?php endif; ?>
                </td>
              </tr>
              <?php
      }
    }
    ?>
            </tbody>
          </table>


        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo esc_url(home_url("/price")) ?>" class="button">
          View&nbsp;more
          <span></span>
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>