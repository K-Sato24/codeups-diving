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

  <div class="price-page sub-page layout-sub-page">
    <div class="price-page__inner inner">

      <div class="price-page__container price-tables">
        <div id="license_course" class="price-tables__item price-table">
          <div class="price-table__head">
            <h2 class="price-table__title">ライセンス講習</h2>
          </div>
          <table class="price-table__body" aria-label="ライセンス講習">
            <tbody>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">
                    オープンウォーター<br class="u-mobile">ダイバーコース
                  </div>
                </td>
                <td class="price-table__price">¥50,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">
                    アドバンスド<br class="u-mobile">オープンウォーターコース
                  </div>
                </td>
                <td class="price-table__price">¥60,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">レスキュー＋EFRコース
                  </div>
                </td>
                <td class="price-table__price">¥70,000</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="trial_diving" class="price-tables__item price-table">
          <div class="price-table__head">
            <h2 class="price-table__title">体験ダイビング</h2>
          </div>
          <table class="price-table__body" aria-label="体験ダイビング">
            <tbody>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">ビーチ体験ダイビング<br class="u-mobile">(半日)
                  </div>
                </td>
                <td class="price-table__price">¥7,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">ビーチ体験ダイビング<br class="u-mobile">(1日)
                  </div>
                </td>
                <td class="price-table__price">¥14,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">ボート体験ダイビング<br class="u-mobile">(半日)
                  </div>
                </td>
                <td class="price-table__price">¥10,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">ボート体験ダイビング<br class="u-mobile">(1日)
                  </div>
                </td>
                <td class="price-table__price">¥18,000</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="fun_diving" class="price-tables__item price-table">
          <div class="price-table__head">
            <h2 class="price-table__title">ファンダイビング</h2>
          </div>
          <table class="price-table__body" aria-label="ファンダイビング">
            <tbody>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">ビーチダイビング<br class="u-mobile">(2ダイブ)
                  </div>
                </td>
                <td class="price-table__price">¥14,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">ボートダイビング<br class="u-mobile">(2ダイブ)
                  </div>
                </td>
                <td class="price-table__price">¥18,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">スペシャルダイビング<br class="u-mobile">(2ダイブ)
                  </div>
                </td>
                <td class="price-table__price">¥24,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">ナイトダイビング<br class="u-mobile">(1ダイブ)
                  </div>
                </td>
                <td class="price-table__price">¥10,000</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div id="special_diving" class="price-tables__item price-table">
          <div class="price-table__head">
            <h2 class="price-table__title">スペシャルダイビング</h2>
          </div>
          <table class="price-table__body" aria-label="スペシャルダイビング">
            <tbody>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">貸切ダイビング<br class="u-mobile">(2ダイブ)
                  </div>
                </td>
                <td class="price-table__price">¥24,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">1日ダイビング<br class="u-mobile">(3ダイブ)
                  </div>
                </td>
                <td class="price-table__price">¥32,000</td>
              </tr>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">ナイトダイビング<br class="u-mobile">(2ダイブ)
                  </div>
                </td>
                <td class="price-table__price">¥14,000</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>