<?php
/**
 * FAQ Page Template
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


	<div class="faq-page sub-page layout-sub-page">
		<div class="faq-page__inner inner">
			<div class="faq-page__items faq-accordions">
				<?php
				$faqs = SCF::get( 'faq' );
				if ( $faqs ) :
					$is_first = true;
					?>
						<?php foreach ( $faqs as $faq ) : ?>
				<div class="faq-accordions__item">
					<details class="faq-accordion js-details <?php echo $is_first ? 'is-opened' : ''; ?>"
							<?php echo $is_first ? 'open' : ''; ?>>
						<summary class="faq-accordion__question js-summary">
							<?php echo esc_html( $faq['faq_1'] ); ?>
						</summary>
						<div class="faq-accordion__answer js-accordion-content">
							<?php echo wp_kses_post( $faq['faq_2'] ); ?>
						</div>
					</details>
				</div>
							<?php $is_first = false; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
			<?php endif; ?>

	<?php get_template_part( '/template-parts/contact-part' ); ?>

</main>

<?php get_footer(); ?>