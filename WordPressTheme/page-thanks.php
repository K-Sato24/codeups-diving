<?php
/**
 * Thanks Page Template
 *
 * @package WordPressTheme
 */

?>

<?php get_header(); ?>

<main>
	<?php get_template_part( 'template-parts/sub-fv' ); ?>

	<?php if ( function_exists( 'bcn_display' ) ) : ?>
	<div class="breadcrumb layout-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
		<div class="breadcrumb__inner inner">
			<?php bcn_display(); ?>
		</div>
	</div>
	<?php endif; ?>


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