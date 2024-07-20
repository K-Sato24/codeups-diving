<?php
/**
 * Page Template
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
						srcset="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/sub-fv-pc.webp' ) ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/sub-fv.webp' ) ); ?>"
						alt="海中のイソギンチャクと、大量に泳ぐオレンジの魚の様子">
				</picture>
			</div>
			<?php
			$titles = array(
				'privacy-policy'   => 'Privacy&nbsp;Policy',
				'terms-of-service' => 'Terms&nbsp;of&nbsp;Service',
			);
			$slug   = esc_attr( get_post_field( 'post_name', get_post() ) );
			?>
			<p class="sub-fv__title">
				<?php echo isset( $titles[ $slug ] ) ? esc_html( $titles[ $slug ] ) : ''; ?>
			</p>
		</div>
	</div>

	<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>

	<div class="sub-page layout-sub-page">
		<div class="sub-page__inner inner">
			<div class="sub-page__content sub-page-content">
				<h2 class="sub-page-content__title"><?php the_title(); ?></h2>
				<div class="sub-page-content__box">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>

</main>

<?php get_footer(); ?>
