<?php get_header(); ?>

<main>
	<?php get_template_part( 'template-parts/sub-fv' ); ?>

	<?php if ( function_exists( 'bcn_display' ) ) : ?>
	<div class="breadcrumb layout-breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
		<div class="breadcrumb__inner inner">
			<?php bcn_display(); ?>
		</div>
	</div>
	<?php endif; ?>

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
										<?php echo esc_html( $field_1 ) ?? ''; ?>
										<?php
										if ( ! empty( $field_1 ) && ! empty( $field_2 ) ) :
											?>
										<br class="u-mobile"><?php endif; ?><?php echo esc_html( $field_2 ); ?>
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

	<?php get_template_part( '/template-parts/contact-part' ); ?>

</main>

<?php get_footer(); ?>
