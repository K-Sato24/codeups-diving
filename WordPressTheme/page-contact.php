<?php
/**
 * Contact Page Template
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
			<div class="contact-page__wrapper">
				<div class="contact-form">
					<?php echo do_shortcode( '[contact-form-7 id="d2acb8f" title="お問い合わせ"]' ); ?>
				</div>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>