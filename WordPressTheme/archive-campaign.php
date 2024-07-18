<?php
/**
 * Archive Campaign Template
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
						srcset="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/campaign-fv-pc.webp' ) ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/campaign-fv.webp' ) ); ?>"
						alt="黄色と黒の鮮やかな熱帯魚2匹が青い海を泳ぐ様子">
				</picture>
			</div>
			<p class="sub-fv__title">Campaign</p>
		</div>
	</div>

	<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>

	<div class="campaign-page sub-page layout-sub-page">
		<div class="campaign-page__inner inner">
			<div class="campaign-page__tab tab">
				<div class="tab__category <?php echo is_post_type_archive( 'campaign' ) ? 'is-active' : ''; ?>">
					<a href="<?php echo esc_url( get_post_type_archive_link( 'campaign' ) ); ?>" class="tab__link">
						<p class="tab__text">ALL</p>
					</a>
				</div>

				<?php
				$campaign_terms = get_terms(
					array(
						'taxonomy'   => 'campaign_category',
						'hide_empty' => false,
					)
				);
				if ( ! empty( $campaign_terms ) && ! is_wp_error( $campaign_terms ) ) :
					foreach ( $campaign_terms as $campaign_term ) :
						$active_class = ( is_tax( 'campaign_category', $campaign_term->slug ) ) ? 'is-active' : '';
						?>
				<div class="tab__category <?php echo esc_attr( $active_class ); ?>">
					<a href="<?php echo esc_url( get_term_link( $campaign_term ) ); ?>" class="tab__link">
						<p class="tab__text"><?php echo esc_html( $campaign_term->name ); ?></p>
					</a>
				</div>
				<?php endforeach; ?>
				<?php endif; ?>

			</div>
			<div class="campaign-page__wrapper">
				<div class="campaign-page__cards campaign-cards">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							?>
					<div class="campaign-cards-item campaign-card">
						<div class="campaign-card__header">
							<div class="campaign-card__img">
								<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'full' ); ?>
								<?php else : ?>
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
									alt="NoImage画像" />
								<?php endif; ?>
							</div>
						</div>
						<div class="campaign-card__body campaign-card__body--sub">
							<div class="campaign-card__title-block">
								<?php $taxonomy_terms = get_the_terms( $post->ID, 'campaign_category' ); ?>
								<?php if ( ! empty( $taxonomy_terms ) ) : ?>
								<?php foreach ( $taxonomy_terms as $taxonomy_term ) : ?>
								<div class="campaign-card__category">
									<p><?php echo esc_html( $taxonomy_term->name ); ?></p>
								</div>
								<?php endforeach; ?>
								<?php endif; ?>
								<h2 class="campaign-card__title campaign-card__title--large"><?php the_title(); ?></h2>
							</div>
							<?php
							$campaign_group_1 = get_field( 'campaign_1' );
							$campaign_group_3 = get_field( 'campaign_3' );

							$campaign_1_1 = isset( $campaign_group_1['campaign_1-1'] ) ? $campaign_group_1['campaign_1-1'] : '';
							$campaign_1_2 = isset( $campaign_group_1['campaign_1-2'] ) ? $campaign_group_1['campaign_1-2'] : '';
							$campaign_2   = get_field( 'campaign_2' );
							$campaign_3_1 = isset( $campaign_group_3['campaign_3-1'] ) ? $campaign_group_3['campaign_3-1'] : '';
							$campaign_3_2 = isset( $campaign_group_3['campaign_3-2'] ) ? $campaign_group_3['campaign_3-2'] : '';
							?>
							<?php if ( ! empty( $campaign_1_1 ) || ! empty( $campaign_1_2 ) || ! empty( $campaign_2 ) || ! empty( $campaign_3_1 ) || ! empty( $campaign_3_2 ) ) : ?>
							<div class="campaign-card__price-block">
								<?php if ( ! empty( $campaign_1_1 ) || ! empty( $campaign_1_2 ) ) : ?>
								<p class="campaign-card__price-text campaign-card__price-text--large">全部コミコミ(お一人様)</p>
								<div class="campaign-card__price campaign-card__price--large">
									<?php if ( ! empty( $campaign_1_1 ) ) : ?>
									<p class="campaign-card__price-before">
										<?php echo '&yen;' . esc_html( number_format( $campaign_1_1 ) ); ?></p>
									<?php endif; ?>
									<?php if ( ! empty( $campaign_1_2 ) ) : ?>
									<p class="campaign-card__price-after">
										<?php echo '&yen;' . esc_html( number_format( $campaign_1_2 ) ); ?></p>
									<?php endif; ?>
								</div>
								<?php endif; ?>
								<?php if ( ! empty( $campaign_2 ) ) : ?>
								<p class="campaign-card__text text u-desktop"><?php echo esc_html( $campaign_2 ); ?></p>
								<?php endif; ?>
							</div>
							<?php endif; ?>
						</div>
						<div class="campaign-card__footer u-desktop">
							<?php if ( ! empty( $campaign_3_1 ) || ! empty( $campaign_3_2 ) ) : ?>
							<div class="campaign-card__date">
								<?php if ( ! empty( $campaign_3_1 ) ) : ?>
								<time
									datetime="<?php echo esc_attr( $campaign_3_1 ); ?>"><?php echo esc_html( $campaign_3_1 ); ?></time>
								<?php endif; ?>
								<?php if ( ! empty( $campaign_3_2 ) ) : ?>
								<span>-</span>
								<time
									datetime="<?php echo esc_attr( $campaign_3_2 ); ?>"><?php echo esc_html( $campaign_3_2 ); ?></time>
								<?php endif; ?>
							</div>
							<?php endif; ?>
							<p class="campaign-card__footer-text">ご予約・お問い合わせはコチラ</p>
							<div class="campaign-card__button">
								<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button">
									contact&nbsp;us
									<span></span>
								</a>
							</div>
						</div>
					</div>




					<?php endwhile; ?>
					<?php else : ?>
					<p class="text">記事が投稿されていません</p>
					<?php endif; ?>
				</div>
			</div>

			<div class="campaign-page__pagination pagination layout-pagination">
				<?php wp_pagenavi(); ?>
			</div>

		</div>
	</div>

</main>
<?php get_footer(); ?>