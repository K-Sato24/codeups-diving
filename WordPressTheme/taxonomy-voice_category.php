<?php
/**
 * Taxonomy Voice Template
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

	<div class="voice-page sub-page layout-sub-page">
		<div class="voice-page__inner inner">
			<div class="voice-page__tab tab">
				<div class="tab__category <?php echo is_post_type_archive( 'voice' ) ? 'is-active' : ''; ?>">
					<a href="<?php echo esc_url( get_post_type_archive_link( 'voice' ) ); ?>" class="tab__link">
						<p class="tab__text">ALL</p>
					</a>
				</div>
				<?php
				$voice_terms = get_terms(
					array(
						'taxonomy'   => 'voice_category',
						'hide_empty' => false,
					)
				);
				if ( ! empty( $voice_terms ) && ! is_wp_error( $voice_terms ) ) :
					foreach ( $voice_terms as $voice_term ) :
						$active_class = ( is_tax( 'voice_category', $voice_term->slug ) ) ? 'is-active' : '';
						?>
				<div class="tab__category <?php echo esc_attr( $active_class ); ?>">
					<a href="<?php echo esc_url( get_term_link( $voice_term ) ); ?>" class="tab__link">
						<p class="tab__text"><?php echo esc_html( $voice_term->name ); ?></p>
					</a>
				</div>
				<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<div class="voice-page__wrapper">
				<div class="voice-page__items voice-cards">
					<?php if ( have_posts() ) : ?>
						<?php
						while ( have_posts() ) :
							the_post();
							?>
					<div class="voice-cards__item voice-card">
						<div class="voice-card__header">
							<div class="voice-card__text-block">
								<?php
								$voice_1        = get_field( 'voice_1' );
								$voice_2        = get_field( 'voice_2' );
								$taxonomy_terms = get_the_terms( $post->ID, 'voice_category' );
								?>
								<?php if ( ! empty( $voice_1 ) || ! empty( $voice_2 ) || ! empty( $taxonomy_terms ) ) : ?>
								<div class="voice-card__info">
									<?php if ( ! empty( $voice_1 ) || ! empty( $voice_2 ) ) : ?>
									<p class="voice-card__info-text">
										<?php
										if ( ! empty( $voice_1 ) ) {
											echo esc_html( $voice_1 );}
										?>
										<?php
										if ( ! empty( $voice_2 ) ) {
											echo esc_html( $voice_2 );}
										?>
									</p>
									<?php endif; ?>
									<?php if ( ! empty( $taxonomy_terms ) ) : ?>
										<?php foreach ( $taxonomy_terms as $taxonomy_term ) : ?>
									<div class="voice-card__category">
										<p><?php echo esc_html( $taxonomy_term->name ); ?></p>
									</div>
									<?php endforeach; ?>
									<?php endif; ?>
								</div>
								<?php endif; ?>
								<h2 class="voice-card__title"><?php the_title(); ?></h2>
							</div>
							<div class="voice-card__img slide-color-box js-slide-color-box">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'full' ); ?>
								<?php else : ?>
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
									alt="NoImage画像" />
								<?php endif; ?>
							</div>
						</div>
							<?php $voice_3 = get_field( 'voice_3' ); ?>
							<?php if ( ! empty( $voice_3 ) ) : ?>
						<div class="voice-card__body">
							<p class="voice-card__text text">
								<?php echo esc_html( $voice_3 ); ?>
							</p>
						</div>
						<?php endif; ?>
					</div>
					<?php endwhile; ?>
					<?php else : ?>
					<p class="text">記事が投稿されていません</p>
					<?php endif; ?>
				</div>
			</div>

			<div class="campaign-page__pagination pagination layout-pagination">
				<?php custom_wp_pagenavi(); ?>
			</div>

		</div>
	</div>

	<?php get_template_part( '/template-parts/contact-part' ); ?>

</main>

<?php get_footer(); ?>