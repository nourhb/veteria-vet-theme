<?php
/**
 * Title: Our story with stats
 * Slug: veteria/about-story
 * Categories: veteria
 * Description: Clinic story with photo and animated-style stat band.
 *
 * @package Veteria
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"24px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo veteria_img( 'vet-hug.jpg' ); ?>" alt="Veterinarian with stethoscope tenderly holding a pomeranian" style="border-radius:24px;aspect-ratio:4/5;object-fit:cover;width:100%"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"}},"textColor":"teal"} -->
			<p class="has-teal-color has-text-color" style="font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Our story</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"}},"textColor":"teal-deep"} -->
			<h2 class="wp-block-heading has-teal-deep-color has-text-color">A clinic built on love for animals</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"}},"textColor":"slate"} -->
			<p class="has-slate-color has-text-color" style="font-size:1.05rem">Veteria began in 2011 with one exam room and a big belief: veterinary care should feel warm, honest and fear-free. Today our AAHA-accredited hospital pairs modern medicine — digital X-ray, ultrasound, in-house lab — with the gentle touch your pet deserves.</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"}},"textColor":"slate"} -->
			<p class="has-slate-color has-text-color" style="font-size:1.05rem">Every visit starts with treats, patience and time. Because a calm pet is a healthy pet.</p>
			<!-- /wp:paragraph -->
			<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem","fontWeight":"700"}},"textColor":"teal"} --><p class="has-teal-color has-text-color" style="font-size:2rem;font-weight:700">15+</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"slate"} --><p class="has-slate-color has-text-color" style="font-size:0.9rem">Years of care</p><!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem","fontWeight":"700"}},"textColor":"teal"} --><p class="has-teal-color has-text-color" style="font-size:2rem;font-weight:700">12k</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"slate"} --><p class="has-slate-color has-text-color" style="font-size:0.9rem">Happy patients</p><!-- /wp:paragraph --></div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem","fontWeight":"700"}},"textColor":"teal"} --><p class="has-teal-color has-text-color" style="font-size:2rem;font-weight:700">4.9★</p><!-- /wp:paragraph --><!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"slate"} --><p class="has-slate-color has-text-color" style="font-size:0.9rem">Google rating</p><!-- /wp:paragraph --></div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)"><!-- wp:button {"className":"veteria-pill-btn"} -->
				<div class="wp-block-button veteria-pill-btn"><a class="wp-block-button__link wp-element-button">Meet our vets</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
