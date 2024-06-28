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

  <div class="site-map-page sub-page layout-sub-page">
    <div class="site-map-page__inner inner">
      <div class="site-map-page__content">
        <nav class="site-map-page__nav nav-menu nav-menu--dark">
          <div class="nav-menu__columns">
            <div class="nav-menu__column">
              <div class="nav-menu__block">
                <ul class="nav-menu__items">
                  <li class="nav-menu__item">
                    <a href="archive-campaign.html">キャンペーン</a>
                    <ul class="nav-menu__detail-items">
                      <li class="nav-menu__detail-item">
                        <a href="archive-campaign.html">ライセンス取得</a>
                      </li>
                      <li class="nav-menu__detail-item">
                        <a href="archive-campaign.html">貸切体験ダイビング</a>
                      </li>
                      <li class="nav-menu__detail-item">
                        <a href="archive-campaign.html">ナイトダイビング</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-about.html">私たちについて</a>
                  </li>
                </ul>
              </div>
              <div class="nav-menu__column">
                <div class="nav-menu__block">
                  <ul class="nav-menu__items">
                    <li class="nav-menu__item">
                      <a href="page-information.html">ダイビング情報</a>
                      <ul class="nav-menu__detail-items">
                        <li class="nav-menu__detail-item">
                          <a href="page-information.html?tab=license_course">ライセンス講習</a>
                        </li>
                        <li class="nav-menu__detail-item">
                          <a href="page-information.html?tab=fun_diving">ファンダイビング</a>
                        </li>
                        <li class="nav-menu__detail-item">
                          <a href="page-information.html?tab=trial_diving">体験ダイビング</a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-menu__item">
                      <a href="home.html">ブログ</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="nav-menu__column">
              <div class="nav-menu__block">
                <ul class="nav-menu__items">
                  <li class="nav-menu__item">
                    <a href="archive-voice.html">お客様の声</a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-price.html">料金一覧</a>
                    <ul class="nav-menu__detail-items">
                      <li class="nav-menu__detail-item">
                        <a href="page-information.html?tab=license_course">ライセンス講習</a>
                      </li>
                      <li class="nav-menu__detail-item">
                        <a href="page-information.html?tab=trial_diving">体験ダイビング</a>
                      </li>
                      <li class="nav-menu__detail-item">
                        <a href="page-information.html?tab=fun_diving">ファンダイビング</a>
                      </li>
                      <li class="nav-menu__detail-item">
                        <a href="page-price.html?tab=special_diving">スペシャルダイビング</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="nav-menu__block">
                <ul class="nav-menu__items">
                  <li class="nav-menu__item">
                    <a href="page-faq.html">よくある質問</a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-privacy-policy.html"><span>プライバシー</span><span>ポリシー</span></a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-terms-of-service.html">利用規約</a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-site-map.html">サイトマップ</a>
                  </li>
                  <li class="nav-menu__item">
                    <a href="page-contact.html">お問い合わせ</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>