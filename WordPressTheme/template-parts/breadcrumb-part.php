<?php
/**
 * Contact Part Template
 *
 * @package WordPressTheme
 */

?>

<?php if ( function_exists( 'bcn_display' ) ) : ?>
<div class="breadcrumb<?php echo is_404() ? ' breadcrumb--white' : ' layout-breadcrumb'; ?>
	vocab=" http://schema.org/" typeof="BreadcrumbList">
	<div class="breadcrumb__inner inner">
		<?php bcn_display(); ?>
	</div>
</div>
<?php endif; ?>