<?php
/**
 * Thanks Page Template
 *
 * @package WordPressTheme
 */

?>

<?php get_header(); ?>

<main>

	<div class="sub-fv">
		<div class="sub-fv__inner">
			<div class="sub-fv__bg">
				<picture>
					<source media="(min-width: 768px)"
						srcset="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/contact-fv-pc.webp' ) ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/contact-fv.webp' ) ); ?>"
						alt="青い海と砂浜を、上空から見た様子">
				</picture>
			</div>
			<p class="sub-fv__title">Contact</p>
		</div>
	</div>

	<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>


	<div class="contact-page sub-page layout-sub-page">
		<div class="contact-page__inner inner">
			<p class="contact-page__message">お問い合わせ内容を送信完了しました。</p>
			<p class="contact-page__text">
				このたびは、お問い合わせ頂き<span>誠にありがとうございます。</span><br>お送り頂きました内容を確認の上、<span>3営業日以内に折り返しご連絡させて頂きます。</span><br>また、ご記入頂いたメールアドレスへ、<span>自動返信の確認メールをお送りしております。</span>
			</p>
		</div>
	</div>

</main>

<?php get_footer(); ?>