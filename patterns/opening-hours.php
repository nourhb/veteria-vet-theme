<?php
/**
 * Title: Opening hours
 * Slug: veteria/opening-hours
 * Categories: veteria
 * Description: Weekly opening hours with emergency callout.
 *
 * @package Veteria
 */

$hours = array(
	array( 'Monday – Friday', '8:00 AM – 7:00 PM' ),
	array( 'Saturday', '8:00 AM – 5:00 PM' ),
	array( 'Sunday', '9:00 AM – 2:00 PM' ),
	array( 'Emergencies', '24 / 7' ),
);
?>
<!-- wp:group {"style":{"color":{"background":"#ffffff"},"border":{"radius":"22px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"shadow":"var:preset|shadow|soft"}} -->
<div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:22px;box-shadow:var(--wp--preset--shadow--soft);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.4rem"}},"textColor":"teal-deep"} -->
	<h3 class="wp-block-heading has-teal-deep-color has-text-color">🕐 Opening hours</h3>
	<!-- /wp:heading -->
<?php foreach ( $hours as $row ) : ?>
	<!-- wp:group {"className":"veteria-hours-row","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group veteria-hours-row">
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","fontWeight":"600"}}} -->
		<p style="font-size:1rem;font-weight:600"><?php echo esc_html( $row[0] ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}},"textColor":"teal"} -->
		<p class="has-teal-color has-text-color" style="font-size:1rem"><?php echo esc_html( $row[1] ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
<?php endforeach; ?>
	<!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"14px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontSize":"0.95rem"}}} -->
	<p class="has-background" style="background-color:#f3ead8;border-radius:14px;font-size:0.95rem;margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">🚨 <strong>Pet emergency?</strong> Call our 24/7 line now: <strong>+1 (416) 555-0192</strong></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
