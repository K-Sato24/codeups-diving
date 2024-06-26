<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header js-header js-header-anim">
    <div class="header__inner">
      <div class="header__content">
        <h1 class="header__logo">
          <a href="index.html" class="header__logo-link js-header-logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="CodeUps">
          </a>
        </h1>
        <nav class="header__pc-nav pc-nav u-desktop">
          <ul class="pc-nav-items">
            <li class="pc-nav__item">
              <a href="archive-campaign.html">
                <div class="pc-nav__link-text">
                  <span class="pc-nav__text-en">Campaign</span>
                  <span class="pc-nav__text-ja">キャンペーン</span>
                </div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="page-about.html">
                <div class="pc-nav__link-text">
                  <span class="pc-nav__text-en">About&nbsp;us</span>
                  <span class="pc-nav__text-ja">私たちについて</span>
                </div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="page-information.html">
                <div class="pc-nav__link-text">
                  <span class="pc-nav__text-en">Information</span>
                  <span class="pc-nav__text-ja">ダイビング情報</span>
                </div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="home.html">
                <div class="pc-nav__link-text">
                  <span class="pc-nav__text-en">Blog</span>
                  <span class="pc-nav__text-ja">ブログ</span>
                </div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="archive-voice.html">
                <div class="pc-nav__link-text">
                  <span class="pc-nav__text-en">Voice</span>
                  <span class="pc-nav__text-ja">お客様の声</span>
                </div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="page-price.html">
                <div class="pc-nav__link-text">
                  <span class="pc-nav__text-en">Price</span>
                  <span class="pc-nav__text-ja">料金一覧</span>
                </div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="page-faq.html">
                <div class="pc-nav__link-text">
                  <span class="pc-nav__text-en">FAQ</span>
                  <span class="pc-nav__text-ja">よくある質問</span>
                </div>
              </a>
            </li>
            <li class="pc-nav__item">
              <a href="page-contact.html">
                <div class="pc-nav__link-text">
                  <span class="pc-nav__text-en">Contact</span>
                  <span class="pc-nav__text-ja">お問い合わせ</span>
                </div>
              </a>
            </li>
          </ul>
        </nav>

        <div class="header__drawer hamburger js-hamburger u-mobile">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <nav class="header__sp-nav nav-menu js-drawer u-mobile">
          <div class="nav-menu__inner inner">
            <div class="nav-menu__columns">
              <div class="nav-menu__column">
                <div class="nav-menu__block">
                  <ul class="nav-menu__items">
                    <li class="nav-menu__item">
                      <a href="archive-campaign.html" class="js-drawer-link">キャンペーン</a>
                      <ul class="nav-menu__detail-items">
                        <li class="nav-menu__detail-item">
                          <a href="archive-campaign.html" class="js-drawer-link">ライセンス取得</a>
                        </li>
                        <li class="nav-menu__detail-item">
                          <a href="archive-campaign.html" class="js-drawer-link">貸切体験ダイビング</a>
                        </li>
                        <li class="nav-menu__detail-item">
                          <a href="archive-campaign.html" class="js-drawer-link">ナイトダイビング</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-menu__item">
                      <a href="page-about.html" class="js-drawer-link">私たちについて</a>
                    </li>
                  </ul>
                </div>
                <div class="nav-menu__column">
                  <ul class="nav-menu__items">
                    <li class="nav-menu__item">
                      <a href="page-information.html" class="js-drawer-link">ダイビング情報</a>
                      <ul class="nav-menu__detail-items">
                        <li class="nav-menu__detail-item">
                          <a href="page-information.html?tab=license_course" class="js-drawer-link">ライセンス講習</a>
                        </li>
                        <li class="nav-menu__detail-item">
                          <a href="page-information.html?tab=fun_diving" class="js-drawer-link">ファンダイビング</a>
                        </li>
                        <li class="nav-menu__detail-item">
                          <a href="page-information.html?tab=trial_diving" class="js-drawer-link">体験ダイビング</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-menu__item">
                      <a href="home.html" class="js-drawer-link">ブログ</a>
                    </li>
                    <li class="nav-menu__item">
                      <a href="archive-voice.html" class="js-drawer-link">お客様の声</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="nav-menu__column">
                <div class="nav-menu__block">
                  <ul class="nav-menu__items">
                    <li class="nav-menu__item">
                      <a href="page-price.html" class="js-drawer-link">料金一覧</a>
                      <ul class="nav-menu__detail-items">
                        <li class="nav-menu__detail-item">
                          <a href="page-price.html?table=license_course" class="js-drawer-link">ライセンス講習</a>
                        </li>
                        <li class="nav-menu__detail-item">
                          <a href="page-price.html?table=trial_diving" class="js-drawer-link">体験ダイビング</a>
                        </li>
                        <li class="nav-menu__detail-item">
                          <a href="page-price.html?table=fun_diving" class="js-drawer-link">ファンダイビング</a>
                        </li>
                        <li class="nav-menu__detail-item">
                          <a href="page-price.html?table=special_diving" class="js-drawer-link">スペシャルダイビング</a>
                        </li>
                        <li class="nav-menu__item">
                          <a href="page-faq.html" class="js-drawer-link">よくある質問</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <div class="nav-menu__block">
                  <ul class="nav-menu__items">
                    <li class="nav-menu__item">
                      <a href="page-privacy-policy.html" class="js-drawer-link"><span>プライバシー</span><span>ポリシー</span></a>
                    </li>
                    <li class="nav-menu__item">
                      <a href="page-terms-of-service.html" class="js-drawer-link">利用規約</a>
                    </li>
                    <li class="nav-menu__item">
                      <a href="page-site-map.html" class="js-drawer-link">サイトマップ</a>
                    </li>
                    <li class="nav-menu__item">
                      <a href="page-contact.html" class="js-drawer-link">お問い合わせ</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>

      </div>
    </div>
  </header>