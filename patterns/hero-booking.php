<?php
/**
 * Title: Hero with booking card
 * Slug: veteria/hero-booking
 * Categories: veteria
 * Description: Full-width hero with headline, booking card and trust stats.
 *
 * @package Veteria
 */
?>
<!-- wp:cover {"url":"<?php echo veteria_img( 'hero.jpg' ); ?>","dimRatio":55,"overlayColor":"teal-deep","minHeight":640,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:640px"><span aria-hidden="true" class="wp-block-cover__background has-teal-deep-background-color has-background-dim-55 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Smiling veterinarian with a happy dog on the exam table" src="<?php echo veteria_img( 'hero.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#f3ead8"}}} -->
				<p class="has-text-color" style="color:#f3ead8;font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">🐾 Veteria Vet Clinic · Toronto</p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
				<h1 class="wp-block-heading has-text-color" style="color:#ffffff">Care your pet will love, from vets you can trust</h1>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"},"color":{"text":"#fdf8f0"}}} -->
				<p class="has-text-color" style="color:#fdf8f0;font-size:1.125rem">Wellness exams, vaccinations, surgery and 24/7 emergency care — all under one warm, fear-free roof.</p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons"><!-- wp:button {"className":"veteria-pill-btn","backgroundColor":"coral"} -->
					<div class="wp-block-button veteria-pill-btn"><a class="wp-block-button__link has-coral-background-color has-background wp-element-button" href="#">Book an Appointment</a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"veteria-pill-btn is-style-outline","style":{"color":{"text":"#ffffff"}}} -->
					<div class="wp-block-button veteria-pill-btn is-style-outline"><a class="wp-block-button__link has-text-color wp-element-button" style="color:#ffffff" href="#">🚨 Emergency Care</a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
				<!-- wp:group {"style":{"color":{"background":"#ffffff"},"border":{"radius":"22px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"shadow":"var:preset|shadow|lifted"}} -->
				<div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:22px;box-shadow:var(--wp--preset--shadow--lifted);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.35rem"}},"textColor":"teal-deep"} -->
					<h3 class="wp-block-heading has-teal-deep-color has-text-color">Book a visit</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"slate"} -->
					<p class="has-slate-color has-text-color" style="font-size:0.95rem">Same-day appointments available. Tell us about your pet:</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1rem","right":"1rem"}},"typography":{"fontSize":"0.95rem"}}} -->
					<p class="has-background" style="background-color:#f3ead8;border-radius:12px;font-size:0.95rem;padding-top:0.8rem;padding-right:1rem;padding-bottom:0.8rem;padding-left:1rem">🐶 Pet's name &amp; species…</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1rem","right":"1rem"}},"typography":{"fontSize":"0.95rem"}}} -->
					<p class="has-background" style="background-color:#f3ead8;border-radius:12px;font-size:0.95rem;padding-top:0.8rem;padding-right:1rem;padding-bottom:0.8rem;padding-left:1rem">📅 Preferred date…</p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"color":{"background":"#f3ead8"},"border":{"radius":"12px"},"spacing":{"padding":{"top":"0.8rem","bottom":"0.8rem","left":"1rem","right":"1rem"}},"typography":{"fontSize":"0.95rem"}}} -->
					<p class="has-background" style="background-color:#f3ead8;border-radius:12px;font-size:0.95rem;padding-top:0.8rem;padding-right:1rem;padding-bottom:0.8rem;padding-left:1rem">🩺 Reason for visit…</p>
					<!-- /wp:paragraph -->
					<!-- wp:buttons -->
					<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"veteria-pill-btn"} -->
						<div class="wp-block-button has-custom-width wp-block-button__width-100 veteria-pill-btn"><a class="wp-block-button__link wp-element-button">Request Appointment</a></div>
						<!-- /wp:button --></div>
					<!-- /wp:buttons -->
					<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.85rem"}},"textColor":"slate"} -->
					<p class="has-text-align-center has-slate-color has-text-color" style="font-size:0.85rem">or call <strong>+1 (416) 555-0192</strong></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem","fontWeight":"600"},"color":{"text":"#ffffff"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#ffffff;font-size:1rem;font-weight:600">⭐ 4.9 rating &nbsp;·&nbsp; 🐾 12,000+ happy patients &nbsp;·&nbsp; 🩺 15 yrs of care</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
