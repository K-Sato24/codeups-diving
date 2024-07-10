<?php
/**
 * Sidebar Template
 *
 * @package WordPressTheme
 */

?>
<aside class="blog-page__aside">
	<ul class="blog-page__aside-items">
		<li class="blog-page__aside-item">
			<h2 class="blog-page__aside-title">人気記事</h2>
			<div class="blog-page__aside-content aside-blog">
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
		<li class="blog-page__aside-item">
			<h2 class="blog-page__aside-title">口コミ</h2>
			<div class="blog-page__aside-content aside-voice">
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
				<div class="blog-page__aside-button">
					<a href="<?php echo esc_url( home_url( '/voice' ) ); ?>" class="button">
						View&nbsp;more
						<span></span>
					</a>
				</div>
			</div>
		</li>
		<li class="blog-page__aside-item">
			<h2 class="blog-page__aside-title">キャンペーン</h2>
			<div class="blog-page__aside-content aside-campaign">
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
							<div class="aside-campaign-card__price-block">
								<p class="aside-campaign-card__price-text">全部コミコミ(お一人様)</p>
								<div class="aside-campaign-card__price">
									<p class="aside-campaign-card__price-before"><?php the_field( 'campaign_1' ); ?></p>
									<p class="aside-campaign-card__price-after"><?php the_field( 'campaign_2' ); ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				</div>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p class="text">記事が投稿されていません</p>
				<?php endif; ?>
				<div class="blog-page__aside-button">
					<a href="<?php echo esc_url( home_url( '/campaign' ) ); ?>" class="button">
						View&nbsp;more
						<span></span>
					</a>
				</div>
			</div>
		</li>
		<li class="blog-page__aside-item">
			<h2 class="blog-page__aside-title">アーカイブ</h2>
			<div class="blog-page__aside-content aside-archive">
				<?php wp_get_custom_archives(); ?>
			</div>
		</li>
	</ul>
</aside>