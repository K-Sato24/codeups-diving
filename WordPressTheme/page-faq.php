<?php
/**
 * FAQ Page Template
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
						srcset="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/faq-fv-pc.webp' ) ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/faq-fv.webp' ) ); ?>"
						alt="透き通った青い海と、白い砂浜があるビーチの様子">
				</picture>
			</div>
			<p class="sub-fv__title">FAQ</p>
		</div>
	</div>

	<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>

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



</main>

<?php get_footer(); ?>