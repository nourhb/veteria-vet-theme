<?php
/**
 * Title: Wellness plan pricing
 * Slug: veteria/pricing-table
 * Categories: veteria
 * Description: Three pet wellness plan pricing cards.
 *
 * @package Veteria
 */

$plans = array(
	array( 'Essential', '$29', 'For healthy young pets', array( 'Annual wellness exam', 'Core vaccinations', 'Parasite screening', '10% off dental cleanings' ), false ),
	array( 'Complete', '$49', 'Our most popular plan', array( 'Everything in Essential', 'Dental cleaning yearly', 'Blood work panel', 'Unlimited nail trims', '20% off surgeries' ), true ),
	array( 'Senior+', '$69', 'For pets 8 years and up', array( 'Everything in Complete', 'Twice-yearly exams', 'Joint & mobility screening', 'Priority emergency line' ), false ),
);
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"}},"textColor":"teal"} -->
	<p class="has-text-align-center has-teal-color has-text-color" style="font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Wellness plans</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"teal-deep"} -->
	<h2 class="wp-block-heading has-text-align-center has-teal-deep-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)">Simple monthly plans, healthier pets</h2>
	<!-- /wp:heading -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
<?php foreach ( $plans as $plan ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"color":{"background":"<?php echo $plan[4] ? '#0e7c66' : '#fdf8f0'; ?>"},"border":{"radius":"22px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"shadow":"var:preset|shadow|soft"}} -->
			<div class="wp-block-group has-background" style="background-color:<?php echo $plan[4] ? '#0e7c66' : '#fdf8f0'; ?>;border-radius:22px;box-shadow:var(--wp--preset--shadow--soft);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<?php if ( $plan[4] ) : ?>
				<!-- wp:paragraph {"align":"center","style":{"color":{"background":"#e07a3f","text":"#ffffff"},"border":{"radius":"999px"},"typography":{"fontSize":"0.8rem","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.14em"},"spacing":{"padding":{"top":"0.35rem","bottom":"0.35rem"}}}} -->
				<p class="has-text-align-center has-text-color has-background" style="background-color:#e07a3f;color:#ffffff;font-size:0.8rem;font-weight:700;letter-spacing:0.14em;text-transform:uppercase;padding-top:0.35rem;padding-bottom:0.35rem">Most popular</p>
				<!-- /wp:paragraph -->
				<?php endif; ?>
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.5rem"}},"textColor="<?php echo $plan[4] ? 'white' : 'teal-deep'; ?>"} -->
				<h3 class="wp-block-heading has-text-align-center has-<?php echo $plan[4] ? 'white' : 'teal-deep'; ?>-color has-text-color"><?php echo esc_html( $plan[0] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"2.4rem","fontWeight":"700"}},"textColor="<?php echo $plan[4] ? 'white' : 'teal-deep'; ?>"} -->
				<p class="has-text-align-center has-<?php echo $plan[4] ? 'white' : 'teal-deep'; ?>-color has-text-color" style="font-size:2.4rem;font-weight:700"><?php echo esc_html( $plan[1] ); ?><span style="font-size:1rem;font-weight:400">/mo</span></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.95rem"}},"textColor="<?php echo $plan[4] ? 'white' : 'slate'; ?>"} -->
				<p class="has-text-align-center has-<?php echo $plan[4] ? 'white' : 'slate'; ?>-color has-text-color" style="font-size:0.95rem"><?php echo esc_html( $plan[2] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:list {"style":{"typography":{"fontSize":"0.98rem"}},"textColor="<?php echo $plan[4] ? 'white' : 'ink'; ?>"} -->
				<ul class="has-<?php echo $plan[4] ? 'white' : 'ink'; ?>-color has-text-color" style="font-size:0.98rem">
<?php foreach ( $plan[3] as $feature ) : ?>
					<li>✓ <?php echo esc_html( $feature ); ?></li>
<?php endforeach; ?>
				</ul>
				<!-- /wp:list -->
				<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"veteria-pill-btn"<?php echo $plan[4] ? ',"backgroundColor":"coral"' : ''; ?>} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 veteria-pill-btn"><a class="wp-block-button__link wp-element-button<?php echo $plan[4] ? ' has-coral-background-color has-background' : ''; ?>">Choose <?php echo esc_html( $plan[0] ); ?></a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
