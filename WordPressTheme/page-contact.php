<?php
/**
 * Contact Page Template
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
			<div class="contact-page__wrapper">
				<div class="contact-form">
					<?php echo do_shortcode( '[contact-form-7 id="d2acb8f" title="お問い合わせ"]' ); ?>
				</div>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>