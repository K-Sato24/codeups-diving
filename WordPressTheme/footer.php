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

<?php
$hide_contact_part = is_page( 'contact' ) || is_page( 'thanks' ) || is_404();

if ( ! $hide_contact_part ) :
	?>
<section class="contact layout-section">
	<div class="contact__inner inner">
		<div class="contact__wrapper">
			<div class="contact__column1">
				<div class="contact__logo">
					<div class="contact__logo-img">
						<img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/common/logo-color.svg"
							alt="CodeUps" loading="lazy" decoding="async">
					</div>
				</div>
				<div class="contact__info">
					<div class="contact__info-text-block">
						<p class="contact__info-text text">沖縄県那覇市1-1</p>
						<p class="contact__info-text text">TEL:0120-000-0000</p>
						<p class="contact__info-text text">営業時間:8:30-19:00</p>
						<p class="contact__info-text text">定休日:毎週火曜日</p>
					</div>
					<div class="contact__map">
						<div class="contact__map-area">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14318.399369583425!2d127.67581646365001!3d26.20969240422214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e569fcdb7de475%3A0xdb7930b1f41e45b9!2z44K744OW44OzLeOCpOODrOODluODsyDpgqPopofmpZrovrrlupc!5e0!3m2!1sja!2sjp!4v1715948422572!5m2!1sja!2sjp"
								width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="contact__column2">
				<div class="contact__title section-title">
					<p class="section-title__en section-title__en--large">Contact</p>
					<h2 class="section-title__ja section-title__ja--large">お問い合わせ</h2>
				</div>
				<p class="contact__text">ご予約・お問い合わせはコチラ</p>
				<div class="contact__button">
					<a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="button">
						Contact&nbsp;us
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<footer class="footer 
<?php echo ! is_404() ? 'layout-footer' : ''; ?>">
	<div class="footer__inner inner">
		<div class="footer__content">
			<div class="footer__logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo-link">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/logo.svg' ) ); ?>"
						alt="CodeUps" loading="lazy" decoding="async">
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