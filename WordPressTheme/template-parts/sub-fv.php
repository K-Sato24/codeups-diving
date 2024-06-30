<?php
if (is_tax('campaign_category') || is_post_type_archive('campaign')) {
  $title = 'Campaign';
  $imagePc = '/assets/images/common/campaign-fv-pc.webp';
  $imageSp = '/assets/images/common/campaign-fv.webp';
  $alt = "黄色と黒の鮮やかな熱帯魚2匹が青い海を泳ぐ様子";
} elseif (is_page('about-us')) {
  $title = 'About&nbsp;us';
  $imagePc = '/assets/images/common/about-fv-pc.webp';
  $imageSp = '/assets/images/common/about-fv.webp';
  $alt = "黄色と黒の鮮やかな熱帯魚2匹が青い海を泳ぐ様子";
} elseif (is_page('information')) {
  $title = 'Information';
  $imagePc = '/assets/images/common/information-fv-pc.webp';
  $imageSp = '/assets/images/common/information-fv.webp';
  $alt = "青空をバックにこちらを向いているシーサーの様子";
} elseif (is_single() || is_month() || is_category() || is_home('blog')) {
  $title = 'Blog';
  $imagePc = '/assets/images/common/information-fv-pc.webp';
  $imageSp = '/assets/images/common/information-fv.webp';
  $alt = "大量の魚が青い海を泳ぐ姿を下から見上げた様子";
} elseif (is_tax('voice_category') || is_post_type_archive('voice')) {
  $title = 'Voice';
  $imagePc = '/assets/images/common/voice-fv-pc.webp';
  $imageSp = '/assets/images/common/voice-fv.webp';
  $alt = "青い海で5人がダイビングをしている様子";
} elseif (is_page('price')) {
  $title = 'Price';
  $imagePc = '/assets/images/common/price-fv-pc.webp';
  $imageSp = '/assets/images/common/price-fv.webp';
  $alt = "海中を覗くダイバーの頭が海面から半分出ている様子";
} elseif (is_page('faq')) {
  $title = 'FAQ';
  $imagePc = '/assets/images/common/faq-fv-pc.webp';
  $imageSp = '/assets/images/common/faq-fv.webp';
  $alt = "透き通った青い海と、白い砂浜があるビーチの様子";
} elseif (is_page('site-map')) {
  $title = 'Site&nbsp;MAP';
  $imagePc = '/assets/images/common/sub-fv-pc.webp';
  $imageSp = '/assets/images/common/sub-fv.webp';
  $alt = "海中のイソギンチャクと、大量に泳ぐオレンジの魚の様子";
} elseif (is_page('privacy-policy')) {
  $title = 'Privacy&nbsp;Policy';
  $imagePc = '/assets/images/common/sub-fv-pc.webp';
  $imageSp = '/assets/images/common/sub-fv.webp';
  $alt = "海中のイソギンチャクと、大量に泳ぐオレンジの魚の様子";
} elseif (is_page('terms-of-service')) {
  $title = 'Terms&nbsp;of&nbsp;Service';
  $imagePc = '/assets/images/common/sub-fv-pc.webp';
  $imageSp = '/assets/images/common/sub-fv.webp';
  $alt = "海中のイソギンチャクと、大量に泳ぐオレンジの魚の様子";
} elseif (is_page('contact') || is_page('contact/thanks')) {
  $title = 'Contact';
  $imagePc = '/assets/images/common/contact-fv-pc.webp';
  $imageSp = '/assets/images/common/contact-fv.webp';
  $alt = "青い海と砂浜を、上空から見た様子";
} else {
  $title = '背景画像とタイトルが設定されていません';
  $imagePc = '/assets/images/common/no-image.webp';
  $imageSp = '/assets/images/common/no-image.webp';
  $alt = "背景画像とタイトルが設定されていません";
}
?>

<div class="sub-fv">
  <div class="sub-fv__inner">
    <div class="sub-fv__bg">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri($imagePc)); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri($imageSp)); ?>" alt="<?php echo $alt; ?>">
      </picture>
    </div>
    <p class="sub-fv__title"><?php echo $title; ?></p>
  </div>
</div>