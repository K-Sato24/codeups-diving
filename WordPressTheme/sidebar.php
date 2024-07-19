<?php
/**
 * Sidebar Template
 *
 * @package WordPressTheme
 */

?>
<aside class="sidebar">
	<ul class="sidebar-items">
		<li class="sidebar-item">
			<h2 class="sidebar-title">人気記事</h2>
			<div class="sidebar-content aside-blog">
				<?php
				$args      = array(
					'posts_per_page' => 3,
					'meta_key'       => 'post_views_count',
					'orderby'        => 'meta_value_num',
				);
				$the_query = new WP_Query( $args );
				?>
				<?php if ( $the_query->have_posts() ) : ?>
				<div class="aside-blog__cards">
					<?php
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>
					<div class="aside-blog__cards-item aside-blog-card">
						<a href="<?php the_permalink(); ?>" class="aside-blog-card__link">
							<div class="aside-blog-card__wrapper">
								<div class="aside-blog-card__header">
									<div class="aside-blog-card__img">
										<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'full' ); ?>
										<?php else : ?>
										<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
											alt="NoImage画像" />
										<?php endif; ?>
									</div>
								</div>
								<div class="aside-blog-card__body">
									<time class="aside-blog-card__date"
										datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
									<h3 class="aside-blog-card__title"><?php the_title(); ?></h3>
								</div>
							</div>
						</a>
					</div>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p class="text">記事が投稿されていません</p>
				<?php endif; ?>
			</div>
		</li>
		<li class="sidebar-item">
			<h2 class="sidebar-title">口コミ</h2>
			<div class="sidebar-content aside-voice">
				<?php
				$args      = array(
					'post_type'      => 'voice',
					'posts_per_page' => 1,
				);
				$sub_query = new WP_Query( $args );
				?>
				<?php if ( $sub_query->have_posts() ) : ?>
				<div class="aside-voice__cards">
					<?php
					while ( $sub_query->have_posts() ) :
						$sub_query->the_post();
						?>
					<div class="aside-voice__cards-item aside-voice-card">
						<div class="aside-voice-card__header">
							<div class="aside-voice-card__img">
								<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'full' ); ?>
								<?php else : ?>
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
									alt="NoImage画像" />
								<?php endif; ?>
							</div>
							<div class="aside-voice-card__text-block">
								<div class="aside-voice-card__info">
									<?php if ( get_field( 'voice_1' ) || get_field( 'voice_2' ) ) : ?>
									<p class="voice-card__info-text">
										<?php the_field( 'voice_1' ); ?><?php the_field( 'voice_2' ); ?></p>
									<?php endif; ?>
								</div>
								<h3 class="aside-voice-card__title"><?php the_title(); ?></h3>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p class="text">記事が投稿されていません</p>
				<?php endif; ?>
				<div class="sidebar-button">
					<a href="<?php echo esc_url( home_url( '/voice' ) ); ?>" class="button">
						View&nbsp;more
						<span></span>
					</a>
				</div>
			</div>
		</li>
		<li class="sidebar-item">
			<h2 class="sidebar-title">キャンペーン</h2>
			<div class="sidebar-content aside-campaign">
				<?php
				$args      = array(
					'post_type'      => 'campaign',
					'posts_per_page' => 2,
				);
				$sub_query = new WP_Query( $args );
				?>
				<?php if ( $sub_query->have_posts() ) : ?>
				<div class="aside-campaign__cards">
					<?php
					while ( $sub_query->have_posts() ) :
						$sub_query->the_post();
						?>
					<div class="aside-campaign__cards-item aside-campaign-card">
						<div class="aside-campaign-card__header">
							<div class="aside-campaign-card__img">
								<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'full' ); ?>
								<?php else : ?>
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
									alt="NoImage画像" />
								<?php endif; ?>
							</div>
						</div>
						<div class="aside-campaign-card__body">
							<div class="aside-campaign-card__title-block">
								<h3 class="aside-campaign-card__title"><?php the_title(); ?></h3>
							</div>
							<?php
									$campaign_group_1 = get_field( 'campaign_1' );

									$campaign_1_1 = isset( $campaign_group_1['campaign_1-1'] ) ? $campaign_group_1['campaign_1-1'] : '';
									$campaign_1_2 = isset( $campaign_group_1['campaign_1-2'] ) ? $campaign_group_1['campaign_1-2'] : '';
							?>
							<?php if ( ! empty( $campaign_1_1 ) || ! empty( $campaign_1_2 ) ) : ?>
							<div class="aside-campaign-card__price-block">
								<p class="aside-campaign-card__price-text">全部コミコミ(お一人様)</p>
								<div class="aside-campaign-card__price">
									<?php if ( ! empty( $campaign_1_1 ) ) : ?>
									<p class="campaign-card__price-before">
										<?php echo '&yen;' . esc_html( number_format( $campaign_1_1 ) ); ?></p>
									<?php endif; ?>
									<?php if ( ! empty( $campaign_1_2 ) ) : ?>
									<p class="campaign-card__price-after">
										<?php echo '&yen;' . esc_html( number_format( $campaign_1_2 ) ); ?></p>
									<?php endif; ?>
								</div>
							</div>
							<?php endif; ?>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p class="text">記事が投稿されていません</p>
				<?php endif; ?>
				<div class="sidebar-button">
					<a href="<?php echo esc_url( home_url( '/campaign' ) ); ?>" class="button">
						View&nbsp;more
						<span></span>
					</a>
				</div>
			</div>

		</li>
		<li class="sidebar-item">
			<h2 class="sidebar-title">アーカイブ</h2>
			<div class="sidebar-content aside-archive">
				<?php wp_get_custom_archives(); ?>
			</div>
		</li>
	</ul>
</aside>