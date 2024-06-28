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
          <a href="#" class="tab__link">
            <p class="tab__text">ALL</p>
          </a>
        </div>
        <div class="tab__category">
          <a href="#" class="tab__link">
            <p class="tab__text">ライセンス講習</p>
          </a>
        </div>
        <div class="tab__category">
          <a href="#" class="tab__link">
            <p class="tab__text">ファンダイビング</p>
          </a>
        </div>
        <div class="tab__category">
          <a href="#" class="tab__link">
            <p class="tab__text">体験ダイビング</p>
          </a>
        </div>
      </div>

      <div class="campaign-page__wrapper">
        <div class="campaign-page__cards campaign-cards">
          <!-- ループ開始 -->
          <div class="campaign-cards-item campaign-card">
            <div class="campaign-card__header">
              <div class="campaign-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign01.jpg" alt="海を漂うたくさんの熱帯魚の様子"
                  loading="lazy" decoding="async">
              </div>
            </div>
            <div class="campaign-card__body campaign-card__body--sub">
              <div class="campaign-card__title-block">
                <div class="campaign-card__category">
                  <p>ライセンス講習</p>
                </div>
                <h2 class="campaign-card__title campaign-card__title--large">ライセンス取得</h2>
              </div>
              <div class="campaign-card__price-block">
                <p class="campaign-card__price-text campaign-card__price-text--large">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price campaign-card__price--large">
                  <p class="campaign-card__price-before">¥56,000</p>
                  <p class="campaign-card__price-after">¥46,000</p>
                </div>
                <p class="campaign-card__text text u-desktop">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </div>
            <div class="campaign-card__footer u-desktop">
              <div class=" campaign-card__date">
                <time datetime="2023-06-01">2023/6/1</time>
                <span>-</span>
                <time datetime="2023-09-30">9/30</time>
              </div>
              <p class="campaign-card__footer-text">ご予約・お問い合わせはコチラ</p>
              <div class="campaign-card__button">
                <a href="#" class="button">
                  contact&nbsp;us
                  <span></span>
                </a>
              </div>
            </div>
          </div>
          <!-- ループ終了 -->
          <div class="campaign-cards-item campaign-card">
            <div class="campaign-card__header">
              <div class="campaign-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign02.jpg" alt="透き通った海の様子"
                  loading="lazy" decoding="async">
              </div>
            </div>
            <div class="campaign-card__body campaign-card__body--sub">
              <div class="campaign-card__title-block">
                <div class="campaign-card__category">
                  <p>体験ダイビング</p>
                </div>
                <h2 class="campaign-card__title campaign-card__title--large">貸切体験ダイビング</h2>
              </div>
              <div class="campaign-card__price-block">
                <p class="campaign-card__price-text campaign-card__price-text--large">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price campaign-card__price--large">
                  <p class="campaign-card__price-before">¥24,000</p>
                  <p class="campaign-card__price-after">¥18,000</p>
                </div>
                <p class="campaign-card__text text u-desktop">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </div>
            <div class="campaign-card__footer u-desktop">
              <div class=" campaign-card__date">
                <time datetime="2023-06-01">2023/6/1</time>
                <span>-</span>
                <time datetime="2023-09-30">9/30</time>
              </div>
              <p class="campaign-card__footer-text">ご予約・お問い合わせはコチラ</p>
              <div class="campaign-card__button">
                <a href="#" class="button">
                  contact&nbsp;us
                  <span></span>
                </a>
              </div>
            </div>
          </div>
          <div class="campaign-cards-item campaign-card">
            <div class="campaign-card__header">
              <div class="campaign-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign03.jpg" alt="暗い海中を漂うクラゲの様子"
                  loading="lazy" decoding="async">
              </div>
            </div>
            <div class="campaign-card__body campaign-card__body--sub">
              <div class="campaign-card__title-block">
                <div class="campaign-card__category">
                  <p>体験ダイビング</p>
                </div>
                <h2 class="campaign-card__title campaign-card__title--large">ナイトダイビング</h2>
              </div>
              <div class="campaign-card__price-block">
                <p class="campaign-card__price-text campaign-card__price-text--large">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price campaign-card__price--large">
                  <p class="campaign-card__price-before">¥10,000</p>
                  <p class="campaign-card__price-after">¥8,000</p>
                </div>
                <p class="campaign-card__text text u-desktop">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </div>
            <div class="campaign-card__footer u-desktop">
              <div class=" campaign-card__date">
                <time datetime="2023-06-01">2023/6/1</time>
                <span>-</span>
                <time datetime="2023-09-30">9/30</time>
              </div>
              <p class="campaign-card__footer-text">ご予約・お問い合わせはコチラ</p>
              <div class="campaign-card__button">
                <a href="#" class="button">
                  contact&nbsp;us
                  <span></span>
                </a>
              </div>
            </div>
          </div>
          <div class="campaign-cards-item campaign-card">
            <div class="campaign-card__header">
              <div class="campaign-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign04.jpg"
                  alt="ダイビングを楽しむ人たちが海から顔を出している様子" loading="lazy" decoding="async">
              </div>
            </div>
            <div class="campaign-card__body campaign-card__body--sub">
              <div class="campaign-card__title-block">
                <div class="campaign-card__category">
                  <p>ファンダイビング</p>
                </div>
                <h2 class="campaign-card__title campaign-card__title--large">貸切ファンダイビング</h2>
              </div>
              <div class="campaign-card__price-block">
                <p class="campaign-card__price-text campaign-card__price-text--large">全部コミコミ(お一人様)</p>
                <div class="campaign-card__price campaign-card__price--large">
                  <p class="campaign-card__price-before">¥20,000</p>
                  <p class="campaign-card__price-after">¥16,000</p>
                </div>
                <p class="campaign-card__text text u-desktop">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                </p>
              </div>
            </div>
            <div class="campaign-card__footer u-desktop">
              <div class=" campaign-card__date">
                <time datetime="2023-06-01">2023/6/1</time>
                <span>-</span>
                <time datetime="2023-09-30">9/30</time>
              </div>
              <p class="campaign-card__footer-text">ご予約・お問い合わせはコチラ</p>
              <div class="campaign-card__button">
                <a href="#" class="button">
                  contact&nbsp;us
                  <span></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ページネーション -->
      <div class="campaign-page__pagination pagination layout-pagination">
        <div class="pagination__prev disabled">
          <a href="#">
            <span class="pagination__prev-arrow"></span>
          </a>
        </div>
        <div class="pagination__numbers">
          <div class="pagination__number current">
            <a href="#">1</a>
          </div>
          <div class="pagination__number">
            <a href="#">2</a>
          </div>
          <div class="pagination__number">
            <a href="#">3</a>
          </div>
          <div class="pagination__number">
            <a href="#">4</a>
          </div>
          <div class="pagination__number u-desktop">
            <a href="#">5</a>
          </div>
          <div class="pagination__number u-desktop">
            <a href="#">6</a>
          </div>
        </div>
        <div class="pagination__next">
          <a href="#">
            <span class="pagination__next-arrow"></span>
          </a>
        </div>
      </div>

    </div>


  </div>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>