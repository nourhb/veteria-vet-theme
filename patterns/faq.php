<?php
/**
 * Title: FAQ accordion-style list
 * Slug: veteria/faq
 * Categories: veteria
 * Description: Five common questions with answers.
 *
 * @package Veteria
 */

$faqs = array(
	array( 'Do I need an appointment, or can I walk in?', 'Appointments are recommended so we can give your pet our full attention, but we always accommodate urgent walk-ins during opening hours.' ),
	array( 'What should I bring to my first visit?', 'Any previous medical records, vaccination history, and a list of current medications or food. For cats, a secure carrier; for dogs, a leash.' ),
	array( 'Do you offer payment plans?', 'Yes — we offer flexible payment plans for larger treatments and surgeries, plus we work with most pet insurance providers.' ),
	array( 'How do wellness plans work?', 'A simple monthly fee covers preventive care: exams, vaccines, parasite screening and discounts on dental and surgery. No sign-up fees, cancel anytime.' ),
	array( 'What counts as an emergency?', 'Difficulty breathing, repeated vomiting, seizures, trauma, bloating or sudden collapse. When in doubt, call our 24/7 line immediately.' ),
);
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#fdf8f0"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#fdf8f0;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"}},"textColor":"teal"} -->
	<p class="has-text-align-center has-teal-color has-text-color" style="font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Good to know</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"teal-deep"} -->
	<h2 class="wp-block-heading has-text-align-center has-teal-deep-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)">Frequently asked questions</h2>
	<!-- /wp:heading -->
<?php foreach ( $faqs as $faq ) : ?>
	<!-- wp:group {"style":{"color":{"background":"#ffffff"},"border":{"radius":"16px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"bottom":"var:preset|spacing|30"}}}} -->
	<div class="wp-block-group has-background" style="background-color:#ffffff;border-radius:16px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"1.1rem"}},"textColor":"teal-deep"} -->
		<h4 class="wp-block-heading has-teal-deep-color has-text-color" style="font-size:1.1rem">🐾 <?php echo esc_html( $faq[0] ); ?></h4>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.98rem"}},"textColor":"slate"} -->
		<p class="has-slate-color has-text-color" style="font-size:0.98rem"><?php echo esc_html( $faq[1] ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
<?php endforeach; ?>
</div>
<!-- /wp:group -->
