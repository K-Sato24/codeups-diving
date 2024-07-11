<?php
/**
 * Index Page Template
 *
 * @package WordPressTheme
 */

?>

<?php get_header(); ?>

<main>
	<div class="fv">
		<div class="fv__inner">
			<div class="fv__opening-bg js-opening-bg">
				<div class="fv__opening-title js-opening-title">
					<div class="main-title--green">
						<p class="main-title__main">diving</p>
						<p class="main-title__sub">into&nbsp;the&nbsp;ocean</p>
					</div>
				</div>
				<div class="fv__opening-images">
					<?php
					$opening_animation = get_field( 'opening_animation' );
					if ( $opening_animation ) :
						$loop_index = 1;
						for ( $i = 9; $i <= 10; ++$i ) :
							$fv_op_pc = isset( $opening_animation[ "fv_{$i}" ] ) ? $opening_animation[ "fv_{$i}" ] : '';
							$fv_op_sp = isset( $opening_animation[ 'fv_' . ( $i + 2 ) ] ) ? $opening_animation[ 'fv_' . ( $i + 2 ) ] : '';

							if ( $fv_op_pc && $fv_op_sp ) :
								?>
					<picture>
						<source media="(min-width: 768px)" srcset="<?php echo esc_url( $fv_op_pc['url'] ); ?>">
						<img src="<?php echo esc_url( $fv_op_sp['url'] ); ?>" alt="オープニングアニメーション"
							class="fv__opening-image0<?php echo esc_attr( $loop_index ); ?> js-opening0<?php echo esc_attr( $loop_index ); ?>">
					</picture>
								<?php
								++$loop_index;
								endif;
							endfor;
						endif;
					?>
				</div>
			</div>
			<!-- アニメーション終了 -->
			<div class="fv__bg">
				<div class="fv__bg-slider swiper js-fv-swiper">
					<div class="fv__wrapper swiper-wrapper">
						<?php
						$background_images = get_field( 'background_image' );
						if ( $background_images ) :
							for ( $i = 1; $i <= 8; $i += 2 ) :
								$fv_pc = isset( $background_images[ "fv_{$i}" ] ) ? $background_images[ "fv_{$i}" ] : '';
								$fv_sp = isset( $background_images[ 'fv_' . ( $i + 1 ) ] ) ? $background_images[ 'fv_' . ( $i + 1 ) ] : '';

								if ( $fv_pc && $fv_sp ) :
									?>
						<div class="swiper-slide">
							<picture>
								<source media="(min-width: 768px)" srcset="<?php echo esc_url( $fv_pc['url'] ); ?>">
								<img src="<?php echo esc_url( $fv_sp['url'] ); ?>"
									alt="<?php echo esc_attr( $fv_sp['alt'] ); ?>">
							</picture>
						</div>
									<?php
								endif;
							endfor;
						endif;
						?>
						<div class="fv__title js-fv-title">
							<div class="main-title">
								<p class="main-title__main">diving</p>
								<p class="main-title__sub">into&nbsp;the&nbsp;ocean</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="campaign layout-campaign">
		<div class="campaign__inner inner">
			<div class="campaign__title section-title">
				<p class="section-title__en">Campaign</p>
				<h2 class="section-title__ja">キャンペーン</h2>
			</div>
			<div class="campaign__content">
				<div class="campaign__swiper swiper js-campaign-swiper">
					<?php
					$args = array(
						'post_type'      => 'campaign',
						'posts_per_page' => -1,
					);

					$sub_query = new WP_Query( $args );
					?>
					<?php if ( $sub_query->have_posts() ) : ?>
					<div class="campaign__cards swiper-wrapper">

						<?php
						while ( $sub_query->have_posts() ) :
							$sub_query->the_post();
							?>
						<div class="campaign__card swiper-slide">
							<div class="campaign-card">
								<div class="campaign-card__header">
									<div class="campaign-card__img">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'full' ); ?>
										<?php else : ?>
										<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
											alt="NoImage画像">
										<?php endif; ?>
									</div>
								</div>
								<div class="campaign-card__body">
									<div class="campaign-card__title-block">

										<?php
										$taxonomy_terms = get_the_terms( $post->ID, 'campaign_category' );
										?>

										<?php if ( ! empty( $taxonomy_terms ) ) : ?>
											<?php foreach ( $taxonomy_terms as $taxonomy_term ) : ?>
										<div class="campaign-card__category">
											<p><?php echo esc_html( $taxonomy_term->name ); ?></p>
										</div>
										<?php endforeach; ?>
										<?php endif; ?>

										<h3 class="campaign-card__title"><?php the_title(); ?></h3>
									</div>

									<?php
									$campaign_1 = get_field( 'campaign_1' );
									$campaign_2 = get_field( 'campaign_2' );
									?>
									<?php if ( ! empty( $campaign_1 ) || ! empty( $campaign_2 ) ) : ?>
									<div class="campaign-card__price-block">
										<p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
										<div class="campaign-card__price">
											<?php if ( ! empty( $campaign_1 ) ) : ?>
											<p class="campaign-card__price-before">
												<?php echo esc_html( $campaign_1 ); ?></p>
											<?php endif; ?>
											<?php if ( ! empty( $campaign_2 ) ) : ?>
											<p class="campaign-card__price-after"><?php echo esc_html( $campaign_2 ); ?>
											</p>
											<?php endif; ?>
										</div>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
						<?php else : ?>
						<p class="text">記事が投稿されていません</p>
						<?php endif; ?>

					</div>
				</div>
				<div class="campaign-button-prev js-campaign-swiper-button-prev swiper-button-prev u-desktop"></div>
				<div class="campaign-button-next js-campaign-swiper-button-next swiper-button-next u-desktop"></div>
			</div>
			<div class="campaign__button">
				<a href="<?php echo esc_url( home_url( '/campaign' ) ); ?>" class="button">
					View&nbsp;more
					<span></span>
				</a>
			</div>
		</div>
	</section>

	<section class="about layout-section">
		<div class="about__inner inner">
			<div class="about__title section-title">
				<p class="section-title__en">About&nbsp;us</p>
				<h2 class="section-title__ja">私たちについて</h2>
			</div>
			<div class="about__content about-content">
				<div class="about-content__image-block">
					<div class="about-content__img01">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/about01.webp' ) ); ?>"
							alt="青い空と木、屋根の上のシーサーの様子" loading="lazy" decoding="async">
					</div>
					<div class="about-content__img02">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/about02.webp' ) ); ?>"
							alt="透き通った海にいる2匹の黄色い熱帯魚の様子" loading="lazy" decoding="async">
					</div>
				</div>
				<div class="about-content__wrapper">
					<p class="about-content__lead">Dive&nbsp;into&nbsp;<br>the&nbsp;Ocean</p>
					<div class="about-content__text--block">
						<p class="about-content__text">
							ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
						</p>
						<div class="about-content__button">
							<a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="button">
								View&nbsp;more
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="information layout-information">
		<div class="information__inner inner">
			<div class="information__title section-title">
				<p class="section-title__en">Information</p>
				<h2 class="section-title__ja">ダイビング情報</h2>
			</div>
			<div class="information__wrapper">
				<div class="information__img slide-color-box js-slide-color-box">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/information01.webp' ) ); ?>"
						alt="海中のイソギンチャクと熱帯魚の様子" loading="lazy" decoding="async">
				</div>
				<div class="information__text-block">
					<h3 class="information__lead">ライセンス講習</h3>
					<p class="information__text text">
						当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
					</p>
					<div class="information__button">
						<a href="<?php echo esc_url( home_url( '/information' ) ); ?>" class="button">
							View&nbsp;more
							<span></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="blog blog-layout">
		<div class="blog__inner inner">
			<div class="blog__title section-title">
				<p class="section-title__en section-title__en--white">Blog</p>
				<h2 class="section-title__ja section-title__ja--white">ブログ</h2>
			</div>
			<?php
			$args      = array(
				'posts_per_page' => 3,
			);
			$the_query = new WP_Query( $args );
			?>
			<?php if ( $the_query->have_posts() ) : ?>
			<div class="blog__items blog-cards">
				<?php
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
					?>
				<div class="blog-cards__item blog-card">
					<a href="<?php the_permalink(); ?>" class="blog-card__link">
						<div class="blog-card__header">
							<div class="blog-card__img">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'full' ); ?>
								<?php else : ?>
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
									alt="NoImage画像">
								<?php endif; ?>
							</div>
						</div>
						<div class="blog-card__body">
							<time class="blog-card__date"
								datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
							<h3 class="blog-card__title"><?php the_title(); ?></h3>
							<p class="blog-card__text text">
								<?php echo wp_kses_post( wp_trim_words( get_the_content(), 85, '…' ) ); ?>
							</p>
						</div>
					</a>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p class="text">記事が投稿されていません</p>
				<?php endif; ?>
			</div>
			<div class="blog__button">
				<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="button">
					View&nbsp;more
					<span></span>
				</a>
			</div>
		</div>
	</section>

	<section class="voice layout-section">
		<div class="voice__inner inner">
			<div class="voice__title section-title">
				<p class="section-title__en">Voice</p>
				<h2 class="section-title__ja">お客様の声</h2>
			</div>
			<?php
			$args = array(
				'post_type'      => 'voice',
				'posts_per_page' => 2,
			);

			$sub_query = new WP_Query( $args );
			?>
			<?php if ( $sub_query->have_posts() ) : ?>
			<div class="voice__items voice-cards">
				<?php
				while ( $sub_query->have_posts() ) :
					$sub_query->the_post();
					?>
				<div class="voice-cards__item voice-card">
					<div class="voice-card__header">
						<div class="voice-card__text-block">
							<div class="voice-card__info">
								<?php if ( get_field( 'voice_1' ) || get_field( 'voice_2' ) ) : ?>
								<p class="voice-card__info-text">
									<?php echo esc_html( get_field( 'voice_1' ) ); ?><?php echo esc_html( get_field( 'voice_2' ) ); ?>
								</p>
								<?php endif; ?>

								<?php
									$taxonomy_terms = get_the_terms( $post->ID, 'voice_category' );
								if ( ! empty( $taxonomy_terms ) ) :
									foreach ( $taxonomy_terms as $taxonomy_term ) :
										?>
								<div class="voice-card__category">
									<p><?php echo esc_html( $taxonomy_term->name ); ?></p>
								</div>
										<?php
										endforeach;
									endif;
								?>
							</div>
							<h3 class="voice-card__title"><?php the_title(); ?></h3>
						</div>
						<div class="voice-card__img slide-color-box js-slide-color-box">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'full' ); ?>
							<?php else : ?>
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/no-image.webp' ) ); ?>"
								alt="NoImage画像">
							<?php endif; ?>
						</div>
					</div>
					<div class="voice-card__body">
						<p class="voice-card__text text">
							<?php
								$voice_content = get_field( 'voice_3' );
								echo esc_html( wp_trim_words( $voice_content, 169, '…' ) );
							?>
						</p>
					</div>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<?php else : ?>
			<p class="text">記事が投稿されていません</p>
			<?php endif; ?>
			<div class="voice__button">
				<a href="<?php echo esc_url( home_url( '/voice' ) ); ?>" class="button">
					View&nbsp;more
					<span></span>
				</a>
			</div>
		</div>
	</section>

	<section class="price layout-section">
		<div class="price__inner inner">
			<div class="price__title section-title">
				<p class="section-title__en">Price</p>
				<h2 class="section-title__ja">料金一覧</h2>
			</div>
			<div class="price__wrapper">
				<div class="price__img slide-color-box js-slide-color-box">
					<picture>
						<source media="(min-width: 768px)"
							srcset="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/price-pc.webp' ) ); ?>">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/price.webp' ) ); ?>"
							alt="海中を漂うウミガメの様子" loading="lazy" decoding="async">
					</picture>
				</div>
				<div class="price__content">
					<?php
					require_once get_template_directory() . '/functions.php';
					$group_names = get_group_names();

					/**
					 * Priceのテーブルのオブジェクトを取得する関数
					 *
					 * @return WP_Post|null 価格ページのオブジェクト。見つからない場合はnullを返す。
					 */
					function get_price_page() {
						return get_page_by_path( 'price' );
					}
					$price_page = get_price_page();
					$page_id    = $price_page ? $price_page->ID : null;

					foreach ( $group_names as $group_name => $group_label ) :
						if ( $page_id ) :
							$fields = SCF::get( $group_name, $page_id );
						else :
							$fields = array();
						endif;

						if ( ! empty( $fields ) ) :
							?>
					<table class="price__table" aria-label="<?php echo esc_attr( $group_label ); ?>">
						<tbody>
							<tr>
								<th colspan="2"><?php echo esc_html( $group_label ); ?></th>
							</tr>
							<?php
							foreach ( $fields as $field ) :
								$field_1 = $field[ $group_name . '_1' ];
								$field_2 = $field[ $group_name . '_2' ];
								$field_3 = $field[ $group_name . '_3' ];
								?>
							<tr>
								<td>
									<?php echo esc_html( $field_1 ) ?? ''; ?>
									<?php if ( ! empty( $field_1 ) && ! empty( $field_2 ) ) : ?>
									<br class="u-mobile">
									<?php endif; ?>
									<?php echo esc_html( $field_2 ) ?? ''; ?>
								</td>
								<td>
									<?php echo esc_html( $field_3 ) ?? ''; ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
							<?php
						endif;
					endforeach;
					?>
				</div>
			</div>
			<div class="price__button">
				<a href="<?php echo esc_url( home_url( '/price' ) ); ?>" class="button">
					View&nbsp;more
					<span></span>
				</a>
			</div>
		</div>
	</section>

	<?php get_template_part( '/template-parts/contact-part' ); ?>

</main>

<?php get_footer(); ?>