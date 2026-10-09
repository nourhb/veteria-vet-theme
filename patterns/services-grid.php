<?php
/**
 * Title: Services grid
 * Slug: veteria/services-grid
 * Categories: veteria
 * Description: Six veterinary services with photos in rounded cards.
 *
 * @package Veteria
 */

$services = array(
	array( 'puppy.jpg', 'Wellness Exams', 'Complete nose-to-tail checkups that catch small issues before they become big ones.' ),
	array( 'cat1.jpg', 'Vaccinations', 'Core and lifestyle vaccines tailored to your pet\u2019s age, breed and habits.' ),
	array( 'vet-exam.jpg', 'Diagnostics & Lab', 'Digital X-ray, ultrasound and in-house lab work for fast, accurate answers.' ),
	array( 'golden.jpg', 'Surgery', 'Modern surgical suite with gentle anesthesia monitoring and pain-managed recovery.' ),
	array( 'pugblanket.jpg', 'Dental Care', 'Professional cleanings, polish and extractions for healthy teeth and fresh breath.' ),
	array( 'kitten.jpg', 'Puppy & Kitten Plans', 'First-year vaccine series, microchipping and nutrition guidance for new family members.' ),
);
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#fdf8f0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fdf8f0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"}},"textColor":"teal"} -->
	<p class="has-text-align-center has-teal-color has-text-color" style="font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Our services</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"}},"textColor":"teal-deep"} -->
	<h2 class="wp-block-heading has-text-align-center has-teal-deep-color has-text-color">Everything your pet needs, under one roof</h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.05rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"slate"} -->
	<p class="has-text-align-center has-slate-color has-text-color" style="font-size:1.05rem;margin-bottom:var(--wp--preset--spacing--50)">From first puppy visits to senior care, our fear-free certified team has you covered.</p>
	<!-- /wp:paragraph -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
<?php foreach ( array_slice( $services, 0, 3 ) as $service ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"veteria-service-card","style":{"color":{"background":"#ffffff"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"shadow":"var:preset|shadow|soft"}} -->
			<div class="wp-block-group veteria-service-card has-background" style="background-color:#ffffff;border-radius:20px;box-shadow:var(--wp--preset--shadow--soft);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo veteria_img( $service[0] ); ?>" alt="<?php echo esc_attr( $service[1] ); ?>" style="border-radius:14px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.3rem"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"teal-deep"} -->
				<h3 class="wp-block-heading has-teal-deep-color has-text-color" style="font-size:1.3rem;margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html( $service[1] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.98rem"}},"textColor":"slate"} -->
				<p class="has-slate-color has-text-color" style="font-size:0.98rem"><?php echo esc_html( $service[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
<?php foreach ( array_slice( $services, 3 ) as $service ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"veteria-service-card","style":{"color":{"background":"#ffffff"},"border":{"radius":"20px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"shadow":"var:preset|shadow|soft"}} -->
			<div class="wp-block-group veteria-service-card has-background" style="background-color:#ffffff;border-radius:20px;box-shadow:var(--wp--preset--shadow--soft);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"14px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo veteria_img( $service[0] ); ?>" alt="<?php echo esc_attr( $service[1] ); ?>" style="border-radius:14px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.3rem"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"teal-deep"} -->
				<h3 class="wp-block-heading has-teal-deep-color has-text-color" style="font-size:1.3rem;margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html( $service[1] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.98rem"}},"textColor":"slate"} -->
				<p class="has-slate-color has-text-color" style="font-size:0.98rem"><?php echo esc_html( $service[2] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:button {"className":"veteria-pill-btn"} -->
		<div class="wp-block-button veteria-pill-btn"><a class="wp-block-button__link wp-element-button">See all services &amp; pricing</a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
