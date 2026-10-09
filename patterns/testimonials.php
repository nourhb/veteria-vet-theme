<?php
/**
 * Title: Client testimonials
 * Slug: veteria/testimonials
 * Categories: veteria
 * Description: Three pet-parent testimonials with star ratings.
 *
 * @package Veteria
 */

$quotes = array(
	array( 'puppy.jpg', 'Bella & Max', '“Dr. Mitchell found a heart murmur in our golden during a routine checkup — early enough to manage it. We trust Veteria with everything.”' ),
	array( 'cat1.jpg', 'Oliver the cat', '“My anxious rescue cat actually purrs at the vet now. The fear-free approach is real, and the team is pure kindness.”' ),
	array( 'pugblanket.jpg', 'Rocky the pug', '“Emergency surgery at 2 AM and they were calm, clear and incredible. Rocky recovered beautifully. Forever grateful.”' ),
);
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#fdf8f0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fdf8f0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"}},"textColor":"teal"} -->
	<p class="has-text-align-center has-teal-color has-text-color" style="font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Kind words</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"teal-deep"} -->
	<h2 class="wp-block-heading has-text-align-center has-teal-deep-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)">Loved by pets &amp; their humans</h2>
	<!-- /wp:heading -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
<?php foreach ( $quotes as $quote ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"#ffffff"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"shadow":"var:preset|shadow|soft"}} -->
			<div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:20px;box-shadow:var(--wp--preset--shadow--soft);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"},"textColor":"coral"}} -->
				<p class="has-coral-color has-text-color" style="font-size:1.05rem">★★★★★</p>
				<!-- /wp:paragraph -->
				<!-- wp:quote {"style":{"typography":{"fontSize":"1.02rem","fontStyle":"italic"}}} -->
				<blockquote class="wp-block-quote has-medium-font-size" style="font-size:1.02rem;font-style:italic"><p><?php echo esc_html( $quote[2] ); ?></p></blockquote>
				<!-- /wp:quote -->
				<!-- wp:group {"layout":{"type":"flex"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"56px","sizeSlug":"thumbnail","style":{"border":{"radius":"999px"}}} -->
					<figure class="wp-block-image size-thumbnail is-resized has-custom-border"><img src="<?php echo veteria_img( $quote[0] ); ?>" alt="<?php echo esc_attr( $quote[1] ); ?>" style="border-radius:999px;width:56px;height:56px;object-fit:cover"/></figure>
					<!-- /wp:image -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}},"textColor":"teal-deep"} -->
					<p class="has-teal-deep-color has-text-color" style="font-size:0.95rem;font-weight:600"><?php echo esc_html( $quote[1] ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
