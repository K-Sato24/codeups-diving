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
              <?php
    $license_fields = SCF::get('license', $post->ID);
    if (!empty($license_fields)) {
      foreach ($license_fields as $field) {
        $license_1 = $field['license_1'];
        $license_2 = $field['license_2'];
        $license_3 = $field['license_3'];
    ?>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">
                    <?php if (!empty($license_1) && !empty($license_2)) : ?>
                    <?php echo esc_html($license_1); ?><br class="u-mobile"><?php echo esc_html($license_2); ?>
                    <?php elseif (!empty($license_1)) : ?>
                    <?php echo esc_html($license_1); ?>
                    <?php elseif (!empty($license_2)) : ?>
                    <?php echo esc_html($license_2); ?>
                    <?php endif; ?>
                  </div>
                </td>
                <td class="price-table__price">
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

        </div>

        <div id="trial_diving" class="price-tables__item price-table">
          <div class="price-table__head">
            <h2 class="price-table__title">体験ダイビング</h2>
          </div>
          <table class="price-table__body" aria-label="体験ダイビング">
            <tbody>
              <?php
              $trial_fields = SCF::get('trial', $post->ID);
              if (!empty($trial_fields)) {
                foreach ($trial_fields as $field) {
                  $trial_1 = $field['trial_1'];
                  $trial_2 = $field['trial_2'];
                  $trial_3 = $field['trial_3'];
              ?>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">
                    <?php if (!empty($trial_1) && !empty($trial_2)) : ?>
                    <?php echo esc_html($trial_1); ?><br class="u-mobile"><?php echo esc_html($trial_2); ?>
                    <?php elseif (!empty($trial_1)) : ?>
                    <?php echo esc_html($trial_1); ?>
                    <?php elseif (!empty($trial_2)) : ?>
                    <?php echo esc_html($trial_2); ?>
                    <?php endif; ?>
                  </div>
                </td>
                <td class="price-table__price">
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

        </div>


        <div id="fun_diving" class="price-tables__item price-table">
          <div class="price-table__head">
            <h2 class="price-table__title">ファンダイビング</h2>
          </div>
          <table class="price-table__body" aria-label="ファンダイビング">
            <tbody>
              <?php
              $fun_fields = SCF::get('fun', $post->ID);
              if (!empty($fun_fields)) {
                foreach ($fun_fields as $field) {
                  $fun_1 = $field['fun_1'];
                  $fun_2 = $field['fun_2'];
                  $fun_3 = $field['fun_3'];
              ?>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">
                    <?php if (!empty($fun_1) && !empty($fun_2)) : ?>
                    <?php echo esc_html($fun_1); ?><br class="u-mobile"><?php echo esc_html($fun_2); ?>
                    <?php elseif (!empty($fun_1)) : ?>
                    <?php echo esc_html($fun_1); ?>
                    <?php elseif (!empty($fun_2)) : ?>
                    <?php echo esc_html($fun_2); ?>
                    <?php endif; ?>
                  </div>
                </td>
                <td class="price-table__price">
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

        </div>

        <div id="special_diving" class="price-tables__item price-table">
          <div class="price-table__head">
            <h2 class="price-table__title">スペシャルダイビング</h2>
          </div>
          <table class="price-table__body" aria-label="スペシャルダイビング">
            <tbody>
              <?php
    $special_fields = SCF::get('special', $post->ID);
    if (!empty($special_fields)) {
      foreach ($special_fields as $field) {
        $special_1 = $field['special_1'];
        $special_2 = $field['special_2'];
        $special_3 = $field['special_3'];
    ?>
              <tr>
                <td class="price-table__name">
                  <div class="price-table__td-box">
                    <?php if (!empty($special_1) && !empty($special_2)) : ?>
                    <?php echo esc_html($special_1); ?><br class="u-mobile"><?php echo esc_html($special_2); ?>
                    <?php elseif (!empty($special_1)) : ?>
                    <?php echo esc_html($special_1); ?>
                    <?php elseif (!empty($special_2)) : ?>
                    <?php echo esc_html($special_2); ?>
                    <?php endif; ?>
                  </div>
                </td>
                <td class="price-table__price">
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

    </div>
  </div>

  <?php get_template_part('/template-parts/contact-part'); ?>

</main>

<?php get_footer(); ?>