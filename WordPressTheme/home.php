<?php
/**
 * Home Blog Template
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

	<div class="blog-page sub-page layout-sub-page">
		<div class="blog-page__inner inner">
			<div class="blog-page__wrapper">
				<div class="blog-page__container">
					<div class="blog-page__items blog-cards blog-cards--2col">
						<?php
						if ( have_posts() ) :
							while ( have_posts() ) :
								the_post();
								?>
						<div class="sub-page-cards__item blog-card">
							<a href="<?php the_permalink(); ?>" class="blog-card__link">
								<div class="blog-card__header">
									<div class="blog-card__img">
										<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'full' ); ?>
										<?php else : ?>
										<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
											alt="NoImage画像" />
										<?php endif; ?>
									</div>
								</div>
								<div class="blog-card__body">
									<time class="blog-card__date"
										datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
									<h2 class="blog-card__title"><?php the_title(); ?></h2>
									<p class="blog-card__text text">
										<?php echo wp_kses_post( wp_trim_words( get_the_content(), 85, '…' ) ); ?>

								</div>
							</a>
						</div>
						<?php	endwhile; else : ?>
						<p class="text">記事が投稿されていません</p>
						<?php	endif; ?>
					</div>

					<div class="campaign-page__pagination pagination layout-pagination">
						<!-- <?php
						$args = array(
							'mid_size'  => 10,
							'prev_text' => '<span></span>',
							'next_text' => '<span></span>',
						);
						the_posts_pagination( $args );
						?> -->
						<?php wp_pagenavi(); ?>
					</div>

				</div>

				<?php get_template_part( '/template-parts/blog-aside' ); ?>
			</div>
		</div>
	</div>

	<?php get_template_part( '/template-parts/contact-part' ); ?>

</main>

<?php get_footer(); ?>