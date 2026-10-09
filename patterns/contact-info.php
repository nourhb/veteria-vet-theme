<?php
/**
 * Title: Contact info and appointment form
 * Slug: veteria/contact-info
 * Categories: veteria
 * Description: Contact columns with appointment request form mock.
 *
 * @package Veteria
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#fdf8f0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fdf8f0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|x-large"}},"textColor":"teal-deep"} -->
			<h2 class="wp-block-heading has-teal-deep-color has-text-color">We'd love to meet your pet 🐾</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.02rem"}},"textColor":"slate"} -->
			<p class="has-slate-color has-text-color" style="font-size:1.02rem">Call, email or drop by — our friendly front-desk team will find the perfect appointment slot for you and your companion.</p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:paragraph -->
				<p>📍 <strong>2450 Danforth Ave</strong><br>Toronto, ON M4C 1M8</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>📞 <strong>+1 (416) 555-0192</strong><br>🚨 24/7 emergency line</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph -->
				<p>✉️ <strong>hello@veteriaclinic.com</strong><br>We reply within one business day</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"18px"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}}} -->
			<figure class="wp-block-image size-large has-custom-border" style="margin-top:var(--wp--preset--spacing--40)"><img src="<?php echo veteria_img( 'vet-puppy.jpg' ); ?>" alt="Veterinarian gently holding a small fluffy puppy" style="border-radius:18px;aspect-ratio:4/3;object-fit:cover;width:100%"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:group {"style":{"color":{"background":"#ffffff"},"border":{"radius":"22px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"shadow":"var:preset|shadow|lifted"}} -->
			<div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:22px;box-shadow:var(--wp--preset--shadow--lifted);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.4rem"}},"textColor":"teal-deep"} -->
				<h3 class="wp-block-heading has-teal-deep-color has-text-color">Request an appointment</h3>
				<!-- /wp:heading -->
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1rem","right":"1rem"}}}} --><p class="has-background" style="background-color:#f3ead8;border-radius:12px;padding-top:0.8rem;padding-right:1rem;padding-bottom:0.8rem;padding-left:1rem">Your name…</p><!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1rem","right":"1rem"}}}} --><p class="has-background" style="background-color:#f3ead8;border-radius:12px;padding-top:0.8rem;padding-right:1rem;padding-bottom:0.8rem;padding-left:1rem">Phone or email…</p><!-- /wp:paragraph --></div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1rem","right":"1rem"}}}} --><p class="has-background" style="background-color:#f3ead8;border-radius:12px;padding-top:0.8rem;padding-right:1rem;padding-bottom:0.8rem;padding-left:1rem">🐶 Pet's name…</p><!-- /wp:paragraph --></div>
					<!-- /wp:column -->
					<!-- wp:column -->
					<div class="wp-block-column"><!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1rem","right":"1rem"}}}} --><p class="has-background" style="background-color:#f3ead8;border-radius:12px;padding-top:0.8rem;padding-right:1rem;padding-bottom:0.8rem;padding-left:1rem">🐱 Species &amp; breed…</p><!-- /wp:paragraph --></div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
				<!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1rem","right":"1rem"}}}} -->
				<p class="has-background" style="background-color:#f3ead8;border-radius:12px;padding-top:0.8rem;padding-right:1rem;padding-bottom:0.8rem;padding-left:1rem">📅 Preferred date &amp; time…</p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.8rem","bottom":"2.5rem","left":"1rem","right":"1rem"}}}} -->
				<p class="has-background" style="background-color:#f3ead8;border-radius:12px;padding-top:0.8rem;padding-right:1rem;padding-bottom:2.5rem;padding-left:1rem">Tell us about your pet's needs…</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
				<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)"><!-- wp:button {"width":100,"className":"veteria-pill-btn"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 veteria-pill-btn"><a class="wp-block-button__link wp-element-button">Send Request 🐾</a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"slate"} -->
				<p class="has-text-align-center has-slate-color has-text-color" style="font-size:0.85rem">We confirm every request by phone within 2 business hours.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
