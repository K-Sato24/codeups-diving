<?php
/**
 * About Page Template
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
						srcset="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/about-fv-pc.webp' ) ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/about-fv.webp' ) ); ?>"
						alt="青空を背景に、こちらを向くシーサーの様子">
				</picture>
			</div>
			<p class="sub-fv__title">About&nbsp;us</p>
		</div>
	</div>

	<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>

	<div class="about-page sub-page layout-sub-page">
		<div class="about-page__inner inner">
			<div class="about-page__content about-content">
				<div class="about-content__image-block">
					<div class="about-content__img01 u-desktop">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/about01.webp' ) ); ?>"
							alt="青い空と木、屋根の上のシーサーの様子" loading="lazy" decoding="async">
					</div>
					<div class="about-content__img02 about-content__img02--sub">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/about02.webp' ) ); ?>"
							alt="透き通った海にいる2匹の黄色い熱帯魚の様子" loading="lazy" decoding="async">
					</div>
				</div>

				<div class="about-content__wrapper">
					<p class="about-content__lead about-content__lead--sub">Dive&nbsp;into&nbsp;<br>the&nbsp;Ocean</p>
					<div class="about-content__text--block">
						<p class="about-content__text about-content__text--sub">
							CodeUpsは、沖縄の美しい海で初心者から経験者まで楽しめるダイビング体験を提供しています。<br>経験豊富なインストラクターが、安全で充実したダイビングをサポートし、皆様に一生の思い出をお届けします。
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	$gallery_image_ids = SCF::get( 'gallery' );
	if ( array_filter( $gallery_image_ids ) ) :
		?>

	<section class="about-gallery layout-about-gallery">
		<div class="about-gallery__inner inner">
			<div class="about-gallery__title section-title">
				<p class="section-title__en">Gallery</p>
				<h2 class="section-title__ja">フォト</h2>
			</div>
			<div class="about-gallery__wrapper">
				<?php
				foreach ( $gallery_image_ids as $image_id ) :
					$image_url = wp_get_attachment_image_url( $image_id, 'full' );
					$alt_text  = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
					if ( $image_url ) :
						?>
				<div class="about-gallery__image js-gallery-modal-open">
					<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( $alt_text ); ?>"
						loading="lazy" decoding="async">
				</div>
						<?php
					endif;
				endforeach;
				?>
			</div>
		</div>
		<dialog class="about-gallery__modal js-gallery-modal">
			<div class="about-gallery__modal__bg">
				<div class="about-gallery__modal-image">
					<img src="<?php echo esc_url( home_url( '/' ) ); ?>" alt="<?php echo esc_url( home_url( '/' ) ); ?>"
						loading="lazy" decoding="async">
				</div>
			</div>
		</dialog>
	</section>
	<?php endif; ?>

</main>

<?php get_footer(); ?>