<?php
/**
 * Header Template
 *
 * @package WordPressTheme
 */

?>

<?php get_header(); ?>

<main>

	<div class="bg-green">
		<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>

		<div class="not-found-page layout-not-found-page">
			<div class="not-found-page__inner inner">
				<h2 class="not-found-page__message">404</h2>
				<p class="not-found-page__text">申し訳ありません。<br>お探しのページが見つかりません。</p>

				<div class="not-found-page__button">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button--white">
						Page&nbsp;TOP
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>