<?php
/**
 * Header Template
 *
 * @package WordPressTheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="format-detection" content="telephone=no" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php if ( is_page( 'contact/thanks' ) ) : ?>
	<meta http-equiv="refresh" content=" 5; url=<?php echo esc_url( home_url( '' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body>
	<?php wp_body_open(); ?>
	<header class="header js-header js-header-anim">
		<div class="header__inner">
			<div class="header__content">

				<?php $header_tag = is_single() ? 'div' : 'h1'; ?>
				<<?php echo esc_attr( $header_tag ); ?> class="header__logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo-link js-header-logo">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/logo.svg' ) ); ?>"
							alt="CodeUps">
					</a>
				</<?php echo esc_attr( $header_tag ); ?>>



				<nav class="header__pc-nav pc-nav u-desktop">
					<ul class="pc-nav-items">
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url( '/campaign' ) ); ?>">
								<div class="pc-nav__link-text">
									<span class="pc-nav__text-en">Campaign</span>
									<span class="pc-nav__text-ja">キャンペーン</span>
								</div>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">
								<div class="pc-nav__link-text">
									<span class="pc-nav__text-en">About&nbsp;us</span>
									<span class="pc-nav__text-ja">私たちについて</span>
								</div>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url( '/information' ) ); ?>">
								<div class="pc-nav__link-text">
									<span class="pc-nav__text-en">Information</span>
									<span class="pc-nav__text-ja">ダイビング情報</span>
								</div>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">
								<div class="pc-nav__link-text">
									<span class="pc-nav__text-en">Blog</span>
									<span class="pc-nav__text-ja">ブログ</span>
								</div>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url( '/voice' ) ); ?>">
								<div class="pc-nav__link-text">
									<span class="pc-nav__text-en">Voice</span>
									<span class="pc-nav__text-ja">お客様の声</span>
								</div>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url( '/price' ) ); ?>">
								<div class="pc-nav__link-text">
									<span class="pc-nav__text-en">Price</span>
									<span class="pc-nav__text-ja">料金一覧</span>
								</div>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">
								<div class="pc-nav__link-text">
									<span class="pc-nav__text-en">FAQ</span>
									<span class="pc-nav__text-ja">よくある質問</span>
								</div>
							</a>
						</li>
						<li class="pc-nav__item">
							<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
								<div class="pc-nav__link-text">
									<span class="pc-nav__text-en">Contact</span>
									<span class="pc-nav__text-ja">お問い合わせ</span>
								</div>
							</a>
						</li>
					</ul>
				</nav>

				<div class="header__drawer hamburger js-hamburger u-mobile">
					<span></span>
					<span></span>
					<span></span>
				</div>

				<nav class="header__sp-nav nav-menu js-drawer u-mobile">
					<div class="nav-menu__inner inner">
						<div class="nav-menu__columns">
							<div class="nav-menu__column">
								<div class="nav-menu__block">
									<ul class="nav-menu__items">
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/campaign' ) ); ?>"
												class="js-drawer-link">キャンペーン</a>
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
											<a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>"
												class="js-drawer-link">私たちについて</a>
										</li>
									</ul>
								</div>
								<div class="nav-menu__column">
									<ul class="nav-menu__items">
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/information' ) ); ?>"
												class="js-drawer-link">ダイビング情報</a>
											<ul class="nav-menu__detail-items">
												<li class="nav-menu__detail-item">
													<a href="<?php echo esc_url( home_url( '/information' ) ); ?>?tab=license_course"
														class="js-drawer-link">ライセンス講習</a>
												</li>
												<li class="nav-menu__detail-item">
													<a href="<?php echo esc_url( home_url( '/information' ) ); ?>?tab=fun_diving"
														class="js-drawer-link">ファンダイビング</a>
												</li>
												<li class="nav-menu__detail-item">
													<a href="<?php echo esc_url( home_url( '/information' ) ); ?>?tab=trial_diving"
														class="js-drawer-link">体験ダイビング</a>
												</li>
											</ul>
										</li>
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"
												class="js-drawer-link">ブログ</a>
										</li>
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/voice' ) ); ?>"
												class="js-drawer-link">お客様の声</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="nav-menu__column">
								<div class="nav-menu__block">
									<ul class="nav-menu__items">
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/price' ) ); ?>"
												class="js-drawer-link">料金一覧</a>
											<ul class="nav-menu__detail-items">
												<li class="nav-menu__detail-item">
													<a href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=license_course"
														class="js-drawer-link">ライセンス講習</a>
												</li>
												<li class="nav-menu__detail-item">
													<a href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=trial_diving"
														class="js-drawer-link">体験ダイビング</a>
												</li>
												<li class="nav-menu__detail-item">
													<a href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=fun_diving"
														class="js-drawer-link">ファンダイビング</a>
												</li>
												<li class="nav-menu__detail-item">
													<a href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=special_diving"
														class="js-drawer-link">スペシャルダイビング</a>
												</li>
												<li class="nav-menu__item">
													<a href="<?php echo esc_url( home_url( '/faq' ) ); ?>"
														class="js-drawer-link">よくある質問</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div class="nav-menu__block">
									<ul class="nav-menu__items">
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"
												class="js-drawer-link"><span>プライバシー</span><span>ポリシー</span></a>
										</li>
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/terms-of-service' ) ); ?>"
												class="js-drawer-link">利用規約</a>
										</li>
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/site-map' ) ); ?>"
												class="js-drawer-link">サイトマップ</a>
										</li>
										<li class="nav-menu__item">
											<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"
												class="js-drawer-link">お問い合わせ</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</nav>

			</div>
		</div>
	</header>
	</header>