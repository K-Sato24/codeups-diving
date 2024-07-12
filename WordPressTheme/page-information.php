<?php
/**
 * Information Page Template
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
						srcset="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/information-fv-pc.webp' ) ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/information-fv.webp' ) ); ?>"
						alt="海中を泳ぐダイバーと、たくさんの魚の様子">
				</picture>
			</div>
			<p class="sub-fv__title">Information</p>
		</div>
	</div>

	<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>

	<div class="information-page sub-page layout-sub-page">
		<div class="information-page__inner inner">
			<div class="information-page__content information-tab">
				<div class="information-tab__list">
					<button class="information-tab__button information-tab__button--left js-tab-button is-active">
						<!-- <a href="?tab=license_course"> -->
						<span class="u-desktop"></span>ライセンス<br class="u-mobile">講習
						<!-- </a> -->
					</button>
					<button class="information-tab__button information-tab__button--center js-tab-button">
						<!-- <a href="?tab=fun_diving"> -->
						<span class="u-desktop"></span>ファン<br class="u-mobile">ダイビング
						<!-- </a> -->
					</button>
					<button class="information-tab__button information-tab__button--right js-tab-button">
						<!-- <a href="?tab=trial_diving"> -->
						<span class="u-desktop"></span>体験<br class="u-mobile">ダイビング
						<!-- </a> -->
					</button>
				</div>
				<div class="information-tab__contents">
					<div id="license_course" class="information-tab__content js-tab-content is-active">
						<div class="information-tab__content-wrapper">
							<div class="information-tab__text-block">
								<h2 class="information-tab__title">ライセンス講習</h2>
								<p class="information-tab__text text">
									泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
								</p>
							</div>
							<div class="information-tab__image">
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/information-page01.webp' ) ); ?>"
									alt="透き通った海で、複数人がダイビングのライセンス講習をしている様子" loading="lazy" decoding="async">
							</div>
						</div>
					</div>
					<div id="fun_diving" class="information-tab__content js-tab-content">
						<div class="information-tab__content-wrapper">
							<div class="information-tab__text-block">
								<h2 class="information-tab__title">ファンダイビング</h2>
								<p class="information-tab__text text">
									ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
								</p>
							</div>
							<div class="information-tab__image">
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/information-page02.webp' ) ); ?>"
									alt="透き通った海を大量の小さい魚が泳ぐ様子" loading="lazy" decoding="async">
							</div>
						</div>
					</div>
					<div id="trial_diving" class="information-tab__content js-tab-content">
						<div class="information-tab__content-wrapper">
							<div class="information-tab__text-block">
								<h2 class="information-tab__title">体験ダイビング</h2>
								<p class="information-tab__text text">
									ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
								</p>
							</div>
							<div class="information-tab__image">
								<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/information-page03.webp' ) ); ?>"
									alt="2匹の黄色と白色をした熱帯魚が透き通った海を泳ぐ様子" loading="lazy" decoding="async">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



</main>

<?php get_footer(); ?>