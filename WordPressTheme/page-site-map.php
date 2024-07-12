<?php
/**
 * Sitemap Page Template
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
			<p class="sub-fv__title">Site&nbsp;MAP</p>
		</div>
	</div>

	<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>

	<div class="site-map-page sub-page layout-sub-page">
		<div class="site-map-page__inner inner">
			<div class="site-map-page__content">
				<nav class="site-map-page__nav nav-menu nav-menu--dark">
					<div class="nav-menu__columns">
						<div class="nav-menu__column">
							<div class="nav-menu__block">
								<ul class="nav-menu__items">
									<li class="nav-menu__item">
										<a href="<?php echo esc_url( home_url( '/campaign' ) ); ?>"> キャンペーン</a>
										<ul class="nav-menu__detail-items">
											<li class="nav-menu__detail-item">
												<a href="<?php echo esc_url( home_url( 'campaign_category/fun-diving' ) ); ?>"
													class="js-drawer-link">ファンダイビング</a>
											</li>
											<li class="nav-menu__detail-item">
												<a href="<?php echo esc_url( home_url( 'campaign_category/license-course' ) ); ?>"
													class="js-drawer-link">ライセンス講習</a>
											</li>
											<li class="nav-menu__detail-item">
												<a href="<?php echo esc_url( home_url( 'campaign_category/trial-diving' ) ); ?>"
													class="js-drawer-link">体験ダイビング</a>
											</li>
										</ul>
									</li>
									<li class="nav-menu__item">
										<a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">私たちについて</a>
									</li>
								</ul>
							</div>
							<div class="nav-menu__column">
								<div class="nav-menu__block">
									<ul class="nav-menu__items">
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/information' ) ); ?>">ダイビング情報</a>
											<ul class="nav-menu__detail-items">
												<li class="nav-menu__detail-item">
													<a
														href="<?php echo esc_url( home_url( '/information' ) ); ?>?tab=license_course">ライセンス講習</a>
												</li>
												<li class="nav-menu__detail-item">
													<a
														href="<?php echo esc_url( home_url( '/information' ) ); ?>?tab=fun_diving">ファンダイビング</a>
												</li>
												<li class="nav-menu__detail-item">
													<a
														href="<?php echo esc_url( home_url( '/information' ) ); ?>?tab=trial_diving">体験ダイビング</a>
												</li>
											</ul>
										</li>
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">ブログ</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="nav-menu__column">
							<div class="nav-menu__block">
								<ul class="nav-menu__items">
									<li class="nav-menu__item">
										<a href="<?php echo esc_url( home_url( '/voice' ) ); ?>">お客様の声</a>
									</li>
									<li class="nav-menu__item">
										<a href="<?php echo esc_url( home_url( '/price' ) ); ?>">料金一覧</a>
										<ul class="nav-menu__detail-items">
											<li class="nav-menu__detail-item">
												<a
													href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=license_course">ライセンス講習</a>
											</li>
											<li class="nav-menu__detail-item">
												<a
													href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=trial_diving">体験ダイビング</a>
											</li>
											<li class="nav-menu__detail-item">
												<a
													href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=fun_diving">ファンダイビング</a>
											</li>
											<li class="nav-menu__detail-item">
												<a
													href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=special_diving">スペシャルダイビング</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="nav-menu__block">
								<ul class="nav-menu__items">
									<li class="nav-menu__item">
										<a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">よくある質問</a>
									</li>
									<li class="nav-menu__item">
										<a
											href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"><span>プライバシー</span><span>ポリシー</span></a>
									</li>
									<li class="nav-menu__item">
										<a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>">利用規約</a>
									</li>
									<li class="nav-menu__item">
										<a href="<?php echo esc_url( home_url( '/site-map' ) ); ?>">サイトマップ</a>
									</li>
									<li class="nav-menu__item">
										<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせ</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</div>



</main>

<?php get_footer(); ?>