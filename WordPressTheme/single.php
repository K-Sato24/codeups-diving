<?php
/**
 * Blog Single Page Template
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
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							?>
					<div class="blog-content">
						<time datetime="<?php the_time( 'c' ); ?>"
							class="blog-content__date"><?php the_time( 'Y.m.d' ); ?></time>
						<h1 class="blog-content__title"><?php the_title(); ?></h1>
						<div class="blog-content__img">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'full' ); ?>
							<?php else : ?>
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
								alt="NoImage画像" />
							<?php endif; ?>
						</div>
						<div class="blog-content__body">
							<?php the_content(); ?>
						</div>
							<?php
						endwhile;
					endif;
					?>

						<?php
						$prev = get_previous_post();
						$next = get_next_post();
						?>
						<div class="blog-content__pagination">
							<?php if ( ! empty( $prev ) ) : ?>
							<a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>" class="blog-content__prev">
								<span class="blog-content__prev-arrow"></span>
							</a>
							<?php endif; ?>
							<?php if ( ! empty( $next ) ) : ?>
							<a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>" class="blog-content__next">
								<span class="blog-content__next-arrow"></span>
							</a>
							<?php endif; ?>
						</div>

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