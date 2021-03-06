<?php
/**
 * The template part for header.php
 * This file is for display the HTML tags header and nav
 */

namespace ItalyStrap;

?><header class="header-wrapper">
	<?php do_action( 'header_open' ); ?>
	<div class="<?php echo esc_attr( $this->theme_mod['custom_header']['container_width'] ); ?>">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo esc_url( HOME_URL ); ?>" rel="home">
					<?php $this->custom_header(); ?>
				</a>
			</div>
		</div>
	</div>
	<?php do_action( 'header_closed' ); ?>
</header>
