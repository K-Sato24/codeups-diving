<?php
/**
 * Price Page Template
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
						srcset="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/price-fv-pc.webp' ) ); ?>">
					<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/common/price-fv.webp' ) ); ?>"
						alt="海中を覗くダイバーの頭が海面から半分出ている様子">
				</picture>
			</div>
			<p class="sub-fv__title">Price</p>
		</div>
	</div>

	<?php get_template_part( '/template-parts/breadcrumb-part' ); ?>

	<div class="price-page sub-page layout-sub-page">
		<div class="price-page__inner inner">
			<div class="price-page__container price-tables">
				<?php
				require_once get_template_directory() . '/functions.php';
				$group_names = get_group_names();

				foreach ( $group_names as $group_name => $group_label ) :
					$fields = SCF::get( $group_name, $post->ID );

					if ( ! empty( $fields ) ) :
						?>
				<div id="<?php echo esc_attr( $group_name ); ?>" class="price-tables__item price-table">
					<div class="price-table__head">
						<h2 class="price-table__title"><?php echo esc_html( $group_label ); ?></h2>
					</div>
					<table class="price-table__body" aria-label="<?php echo esc_attr( $group_label ); ?>">
						<tbody>
							<?php
							foreach ( $fields as $field ) :
								$field_1 = $field[ $group_name . '_1' ];
								$field_2 = $field[ $group_name . '_2' ];
								$field_3 = $field[ $group_name . '_3' ];
								?>
							<tr>
								<td class="price-table__name">
									<div class="price-table__td-box">
										<?php
										$output = esc_html( $field_1 ) ?? '';
										if ( ! empty( $field_1 ) && ! empty( $field_2 ) ) {
											$output .= '<br class="u-mobile">';
										}
										$output .= esc_html( $field_2 ) ?? '';
										$output  = preg_replace( '/\s+/', ' ', $output );
										echo wp_kses_post( trim( $output ) );
										?>
									</div>
								</td>
								<td class="price-table__price">
									<?php echo esc_html( $field_3 ); ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
						<?php
					endif;
				endforeach;
				?>
			</div>

		</div>
	</div>

</main>

<?php get_footer(); ?>