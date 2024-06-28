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

  <div class="contact-page sub-page layout-sub-page">
    <div class="contact-page__inner inner">
      <div class="contact-page__wrapper">
        <div class="contact-form">
          <form class="js-required" method="post" onsubmit="return validateForm()">
            <div id="contact-form__error-message">
              <p>※必須項目が入力されていません。<br class="u-mobile">入力してください。</p>
            </div>
            <dl class="contact-form__list">
              <div class="contact-form__field">
                <dt class="contact-form__label">
                  <label for="your-name">お名前
                    <span class="contact-form__required">必須</span>
                  </label>
                </dt>
                <dd class="contact-form__data">
                  <input type="text" name="your-name" id="your-name" class="contact-form__input" placeholder="沖縄&emsp;太郎" required>
                </dd>
              </div>
              <div class="contact-form__field">
                <dt class="contact-form__label"><label for="your-email">メールアドレス
                    <span class="contact-form__required">必須</span>
                  </label>
                </dt>
                <dd class="contact-form__data">
                  <input type="email" name="your-email" id="your-email" class="contact-form__input" placeholder="aaa000@ggmail.com" required>
                </dd>
              </div>
              <div class="contact-form__field">
                <dt class="contact-form__label"><label for="your-phone">電話番号
                    <span class="contact-form__required">必須</span>
                  </label></dt>
                <dd class="contact-form__data">
                  <input type="tel" name="your-phone" id="your-phone" class="contact-form__input" placeholder="000-0000-0000" required>
                </dd>
              </div>
              <div class="contact-form__field">
                <dt class="contact-form__label">
                  お問合せ項目
                  <span class="contact-form__required">必須</span>
                </dt>
                <dd class="contact-form__data">
                  <div class="contact-form__radio-wrapper">
                    <label>
                      <input type="checkbox" name="inquiry-item" value="ダイビング講習について" class="contact-form__checkbox" required>
                      <span>ダイビング講習について</span>
                    </label>
                    <label>
                      <input type="checkbox" name="inquiry-item" value="ファンダイビングについて" class="contact-form__checkbox" required>
                      <span>ファンダイビングについて</span>
                    </label>
                    <label>
                      <input type="checkbox" name="inquiry-item" value="体験ダイビングについて" class="contact-form__checkbox" required>
                      <span>体験ダイビングについて</span>
                    </label>
                  </div>
                </dd>
              </div>
              <div class="contact-form__field">
                <dt class="contact-form__label">キャンペーン</dt>
                <dd class="contact-form__data-select">
                  <select name="category" id="category" class="contact-form__select first_as_label">
                    <option value="">キャンペーン内容を選択</option>
                    <option value="セレクト1">セレクト1</option>
                    <option value="セレクト2">セレクト2</option>
                  </select>
                </dd>
              </div>
              <div class="contact-form__field">
                <dt class="contact-form__label">
                  <label for="your-message">お問い合わせ内容<span class="contact-form__required">必須</span>
                  </label>
                </dt>
                <dd class="contact-form__data">
                  <textarea name="your-message" id="your-message" class="contact-form__textarea" required></textarea>
                </dd>
              </div>
            </dl>
            <div class="contact-form__data-privacy">
              <label>
                <input type="checkbox" name="privacy" class="contact-form__checkbox" required>
                <span class="contact-form__checkbox-text">個人情報の取り扱いについて同意のうえ送信します。</span>
              </label>
            </div>
            <div class="contact-form__submit-button">
              <div class="submit-button">
                <input type="submit" value="Send" class="submit-button__input" onclick="validateForm()">
                <span></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>