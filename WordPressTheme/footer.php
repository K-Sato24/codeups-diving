<?php
/**
 * Footer Template
 *
 * @package WordPressTheme
 */

?>

<div class="page-top js-page-top js-page-top-color">
	<a href="#top">
	</a>
</div>

<footer class="footer 
<?php
if ( ! is_404() ) :
	?>
	layout-footer<?php endif; ?>">
	<div class="footer__inner inner">
		<div class="footer__content">
			<div class="footer__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo-link">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/logo.svg' ) ); ?>" alt="CodeUps"
						loading="lazy" decoding="async">
				</a>
			</div>
			<div class="footer__sns-content">
				<div class="footer__sns">
					<a href="https://www.facebook.com/" class="footer__sns-link" target="_blank">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/facebook-icon.svg' ) ); ?>"
							alt="Facebookのリンク" loading="lazy" decoding="async">
					</a>
				</div>
				<div class="footer__sns">
					<a href="https://www.instagram.com/" class="footer__sns-link" target="_blank">
						<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/instagram-icon.svg' ) ); ?>"
							alt="Instagramのリンク" loading="lazy" decoding="async">
					</a>
				</div>
			</div>
		</div>
		<nav class="footer__nav nav-menu">
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
											<a href="<?php echo esc_url( home_url( '/information' ) ); ?>?tab=license_course">ライセンス講習</a>
										</li>
										<li class="nav-menu__detail-item">
											<a href="<?php echo esc_url( home_url( '/information' ) ); ?>?tab=fun_diving">ファンダイビング</a>
										</li>
										<li class="nav-menu__detail-item">
											<a href="<?php echo esc_url( home_url( '/information' ) ); ?>?tab=trial_diving">体験ダイビング</a>
										</li>
									</ul>
								</li>
								<li class="nav-menu__item">
									<a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">ブログ</a>
								</li>
								<li class="nav-menu__item">
									<a href="<?php echo esc_url( home_url( '/voice' ) ); ?>">お客様の声</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="nav-menu__column">
					<div class="nav-menu__block">
						<ul class="nav-menu__items">
							<li class="nav-menu__item">
								<a href="<?php echo esc_url( home_url( '/price' ) ); ?>">料金一覧</a>
								<ul class="nav-menu__detail-items">
									<li class="nav-menu__detail-item">
										<a href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=license_course">ライセンス講習</a>
									</li>
									<li class="nav-menu__detail-item">
										<a href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=trial_diving">体験ダイビング</a>
									</li>
									<li class="nav-menu__detail-item">
										<a href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=fun_diving">ファンダイビング</a>
									</li>
									<li class="nav-menu__detail-item">
										<a href="<?php echo esc_url( home_url( '/price' ) ); ?>?table=special_diving">スペシャルダイビング</a>
									</li>
									<li class="nav-menu__item">
										<a href="<?php echo esc_url( home_url( '/faq' ) ); ?>">よくある質問</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="nav-menu__block">
						<ul class="nav-menu__items">
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
	<small
		class="footer__copyright">Copyright&nbsp;&copy;&nbsp;2021&nbsp;-&nbsp;2023&nbsp;CodeUps&nbsp;LLC.&nbsp;All&nbsp;Rights&nbsp;Reserved.</small>
</footer>
<?php wp_footer(); ?>
</body>

</html>