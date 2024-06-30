<?php get_header(); ?>

<main>
  <div class="fv">
    <div class="fv__inner">
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
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/opening-pc01-left.webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/opening01-top.webp" alt="透き通った海を泳ぐウミガメの様子" class="fv__opening-image01 js-opening01">
          </picture>
          <picture>
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/opening-pc01-right.webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/opening01-bottom.webp" alt="透き通った海を泳ぐウミガメの様子" class="fv__opening-image02 js-opening02">
          </picture>
        </div>
      </div>
      <!-- アニメーション終了 -->
      <div class="fv__bg">
        <div class="fv__bg-slider swiper js-fv-swiper">
          <div class="fv__wrapper swiper-wrapper">
            <div class="swiper-slide">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc01.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv01.webp" alt="透き通った海を泳ぐウミガメの様子">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc02.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv02.webp" alt="海にダイビングした二人と漂うウミガメの様子">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc03.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv03.webp" alt="会場から見た空、陸、海の様子">
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv-pc04.webp">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/fv04.webp" alt="白い砂浜と透き通った海のビーチの様子">
              </picture>
            </div>
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
          <div class="campaign__cards swiper-wrapper">
            <!-- ループ開始 -->
            <div class="campaign__card swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__header">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign01.webp" alt="海を漂うたくさんの熱帯魚の様子" loading="lazy" decoding="async">
                  </div>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__title-block">
                    <div class="campaign-card__category">
                      <p>ライセンス講習</p>
                    </div>
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                  </div>
                  <div class="campaign-card__price-block">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before">¥56,000</p>
                      <p class="campaign-card__price-after">¥46,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ループ終了 -->
            <div class="campaign__card swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__header">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign02.webp" alt="透き通った海の様子" loading="lazy" decoding="async">
                  </div>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__title-block">
                    <div class="campaign-card__category">
                      <p>体験ダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                  </div>
                  <div class="campaign-card__price-block">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before">¥24,000</p>
                      <p class="campaign-card__price-after">¥18,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__card swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__header">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign03.webp" alt="暗い海中を漂うクラゲの様子" loading="lazy" decoding="async">
                  </div>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__title-block">
                    <div class="campaign-card__category">
                      <p>体験ダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                  </div>
                  <div class="campaign-card__price-block">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before">¥10,000</p>
                      <p class="campaign-card__price-after">¥8,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__card swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__header">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign04.webp" alt="ダイビングを楽しむ人たちが海から顔を出している様子" loading="lazy" decoding="async">
                  </div>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__title-block">
                    <div class="campaign-card__category">
                      <p>ファンダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                  </div>
                  <div class="campaign-card__price-block">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before">¥20,000</p>
                      <p class="campaign-card__price-after">¥16,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__card swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__header">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign01.webp" alt="海を漂うたくさんの熱帯魚の様子" loading="lazy" decoding="async">
                  </div>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__title-block">
                    <div class="campaign-card__category">
                      <p>ライセンス講習</p>
                    </div>
                    <h3 class="campaign-card__title">ライセンス取得</h3>
                  </div>
                  <div class="campaign-card__price-block">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before">¥56,000</p>
                      <p class="campaign-card__price-after">¥46,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__card swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__header">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign02.webp" alt="透き通った海の様子" loading="lazy" decoding="async">
                  </div>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__title-block">
                    <div class="campaign-card__category">
                      <p>体験ダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                  </div>
                  <div class="campaign-card__price-block">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before">¥24,000</p>
                      <p class="campaign-card__price-after">¥18,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__card swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__header">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign03.webp" alt="暗い海中を漂うクラゲの様子" loading="lazy" decoding="async">
                  </div>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__title-block">
                    <div class="campaign-card__category">
                      <p>体験ダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">ナイトダイビング</h3>
                  </div>
                  <div class="campaign-card__price-block">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before">¥10,000</p>
                      <p class="campaign-card__price-after">¥8,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="campaign__card swiper-slide">
              <div class="campaign-card">
                <div class="campaign-card__header">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign04.webp" alt="ダイビングを楽しむ人たちが海から顔を出している様子" loading="lazy" decoding="async">
                  </div>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__title-block">
                    <div class="campaign-card__category">
                      <p>ファンダイビング</p>
                    </div>
                    <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                  </div>
                  <div class="campaign-card__price-block">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price">
                      <p class="campaign-card__price-before">¥20,000</p>
                      <p class="campaign-card__price-after">¥16,000</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign-button-prev js-campaign-swiper-button-prev swiper-button-prev u-desktop"></div>
        <div class="campaign-button-next js-campaign-swiper-button-next swiper-button-next u-desktop"></div>
      </div>
      <div class="campaign__button">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="button">
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about01.webp" alt="青い空と木、屋根の上のシーサーの様子" loading="lazy" decoding="async">
          </div>
          <div class="about-content__img02">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about02.webp" alt="透き通った海にいる2匹の黄色い熱帯魚の様子" loading="lazy" decoding="async">
          </div>
        </div>
        <div class="about-content__wrapper">
          <p class="about-content__lead">Dive&nbsp;into&nbsp;<br>the&nbsp;Ocean</p>
          <div class="about-content__text--block">
            <p class="about-content__text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
            <div class="about-content__button">
              <a href="<?php echo esc_url(home_url("/")) ?>" class="button">
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
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information01.webp" alt="海中のイソギンチャクと熱帯魚の様子" loading="lazy" decoding="async">
        </div>
        <div class="information__text-block">
          <h3 class="information__lead">ライセンス講習</h3>
          <p class="information__text text">
            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          <div class="information__button">
            <a href="<?php echo esc_url(home_url("/")) ?>" class="button">
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

      <div class="blog__items blog-cards">
        <div class="blog-cards__item blog-card">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="blog-card__link">
            <div class="blog-card__header">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog01.webp" alt="海中にあるピンク色のサンゴの様子" loading="lazy" decoding="async">
              </div>
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <h3 class="blog-card__title">ライセンス取得</h3>
              <p class="blog-card__text text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </a>
        </div>
        <div class="blog-cards__item blog-card">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="blog-card__link">
            <div class="blog-card__header">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog02.webp" alt="海中をこちらに向かって泳ぐウミガメの様子" loading="lazy" decoding="async">
              </div>
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
              <p class="blog-card__text text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </a>
        </div>
        <div class="blog-cards__item blog-card">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="blog-card__link">
            <div class="blog-card__header">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog03.webp" alt="イソギンチャクの中にいるカクレクマノミの様子" loading="lazy" decoding="async">
              </div>
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <h3 class="blog-card__title">カクレクマノミ</h3>
              <p class="blog-card__text text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </a>
        </div>

      </div>
      <div class="blog__button">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="button">
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
      <div class="voice__items voice-cards">
        <div class="voice-cards__item voice-card">
          <div class="voice-card__header">
            <div class="voice-card__text-block">
              <div class="voice-card__info">
                <p class="voice-card__info-text">20代(女性)</p>
                <div class="voice-card__category">
                  <p>ライセンス講習</p>
                </div>
              </div>
              <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
            </div>
            <div class="voice-card__img slide-color-box js-slide-color-box">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice01.webp" alt="麦わら帽子をかぶった女性が笑顔でこちらを見ている様子" loading="lazy" decoding="async">
            </div>
          </div>
          <div class="voice-card__body">
            <p class="voice-card__text text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>
        <div class="voice-cards__item voice-card">
          <div class="voice-card__header">
            <div class="voice-card__text-block">
              <div class="voice-card__info">
                <p class="voice-card__info-text">30代(男性)</p>
                <div class="voice-card__category">
                  <p>ファンダイビング</p>
                </div>
              </div>
              <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
            </div>
            <div class="voice-card__img slide-color-box js-slide-color-box">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice02.webp" alt="こちらを向いて親指を立てている男性の様子" loading="lazy" decoding="async">
            </div>
          </div>
          <div class="voice-card__body">
            <p class="voice-card__text text">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </div>
        </div>
      </div>
      <div class="voice__button">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="button">
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
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price.webp" alt="海中を漂うウミガメの様子" loading="lazy" decoding="async">
          </picture>
        </div>
        <div class="price__content">
          <table class="price__table" aria-label="ライセンス講習">
            <tbody>
              <tr>
                <th colspan="2">ライセンス講習</th>
              </tr>
              <tr>
                <td>オープンウォーターダイバーコース</td>
                <td>¥50,000</td>
              </tr>
              <tr>
                <td>アドバンスドオープンウォーターコース</td>
                <td>¥60,000</td>
              </tr>
              <tr>
                <td>レスキュー＋EFRコース</td>
                <td>¥70,000</td>
              </tr>
            </tbody>
          </table>
          <table class="price__table" aria-label="体験ダイビング">
            <tbody>
              <tr>
                <th colspan="2">体験ダイビング</th>
              </tr>
              <tr>
                <td>ビーチ体験ダイビング(半日)</td>
                <td>¥7,000</td>
              </tr>
              <tr>
                <td>ビーチ体験ダイビング(1日)</td>
                <td>¥14,000</td>
              </tr>
              <tr>
                <td>ボート体験ダイビング(半日)</td>
                <td>¥10,000</td>
              </tr>
              <tr>
                <td>ボート体験ダイビング(1日)</td>
                <td>¥18,000</td>
              </tr>
            </tbody>
          </table>
          <table class="price__table" aria-label="ファンダイビング">
            <tbody>
              <tr>
                <th colspan="2">ファンダイビング</th>
              </tr>
              <tr>
                <td>ビーチダイビング(2ダイブ)</td>
                <td>¥14,000</td>
              </tr>
              <tr>
                <td>ボートダイビング(2ダイブ)</td>
                <td>¥18,000</td>
              </tr>
              <tr>
                <td>スペシャルダイビング(2ダイブ)</td>
                <td>¥24,000</td>
              </tr>
              <tr>
                <td>ナイトダイビング(1ダイブ)</td>
                <td>¥10,000</td>
              </tr>
            </tbody>
          </table>
          <table class="price__table" aria-label="スペシャルダイビング">
            <tbody>
              <tr>
                <th colspan="2">スペシャルダイビング</th>
              </tr>
              <tr>
                <td>貸切ダイビング(2ダイブ)</td>
                <td>¥24,000</td>
              </tr>
              <tr>
                <td>1日ダイビング(3ダイブ)</td>
                <td>¥32,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="price__button">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="button">
          View&nbsp;more
          <span></span>
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>