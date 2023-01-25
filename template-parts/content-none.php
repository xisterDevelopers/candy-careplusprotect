<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<section class="no-results not-found">

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			

		<?php elseif ( is_search() ) : ?>

			<p><?= get_field('search_not_found','option') ?></p>
			<?php

		else : ?>


		<?php
		endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
