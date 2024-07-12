<?php
/**
 * Date Blog Template
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
						srcset="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/information-fv-pc.webp' ) ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/information-fv.webp' ) ); ?>"
						alt="大量の魚が青い海を泳ぐ姿を下から見上げた様子">
				</picture>
			</div>
			<p class="sub-fv__title">Blog</p>
		</div>
	</div>

	<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>

	<div class="blog-page sub-page layout-sub-page">
		<div class="blog-page__inner inner">
			<div class="blog-page__wrapper">
				<div class="blog-page__container">
					<div class="blog-page__items blog-cards blog-cards--2col">
						<?php if ( have_posts() ) : ?>
							<?php
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
									</p>
								</div>
							</a>
						</div>
						<?php endwhile; ?>
						<?php else : ?>
						<p class="text">記事が投稿されていません</p>
						<?php endif; ?>
					</div>

					<div class="campaign-page__pagination pagination layout-pagination">
						<?php wp_pagenavi(); ?>
					</div>
				</div>

				<div class="blog-page__aside">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>



</main>

<?php get_footer(); ?>