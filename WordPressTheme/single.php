<?php
/**
 * Blog Single Page Template
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
						$prev       = get_previous_post();
						$prev_url   = ! empty( $prev ) ? esc_url( get_permalink( $prev->ID ) ) : esc_url( home_url( '/' ) );
						$prev_class = ! empty( $prev ) ? '' : ' disabled';

						$next       = get_next_post();
						$next_url   = ! empty( $next ) ? esc_url( get_permalink( $next->ID ) ) : esc_url( home_url( '/' ) );
						$next_class = ! empty( $next ) ? '' : ' disabled';
						?>
						<div class="blog-content__pagination pagination pagination--details">
							<div class="pagination__prev<?php echo esc_attr( $prev_class ); ?>">
								<a href="<?php echo esc_url( $prev_url ); ?>">
									<span class="pagination__prev-arrow"></span>
								</a>
							</div>
							<div class="pagination__next<?php echo esc_attr( $next_class ); ?>">
								<a href="<?php echo esc_url( $next_url ); ?>">
									<span class="pagination__next-arrow"></span>
								</a>
							</div>
						</div>


					</div>
				</div>

				<?php get_template_part( '/template-parts/blog-aside' ); ?>
			</div>
		</div>
	</div>

	<?php get_template_part( '/template-parts/contact-part' ); ?>

</main>

<?php get_footer(); ?>