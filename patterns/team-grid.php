<?php
/**
 * Title: Veterinary team grid
 * Slug: veteria/team-grid
 * Categories: veteria
 * Description: Three veterinarian profiles with photos and bios.
 *
 * @package Veteria
 */

$team = array(
	array( 'vet-puppy.jpg', 'Dr. Sarah Mitchell', 'Lead Veterinarian', 'DVM, 12 yrs with small animals. Fear-free certified; obsessed with senior dog care and dental health.' ),
	array( 'vet-exam.jpg', 'Dr. James Okafor', 'Surgeon', 'DVM, board-eligible surgeon. Leads our soft-tissue surgery program with a gentle, steady hand.' ),
	array( 'vet-checkup.jpg', 'Dr. Emily Chen', 'Exotic & Feline Specialist', 'DVM, cat-whisperer and exotic pet lover. Runs our kitten wellness and nutrition clinics.' ),
);
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#ffffff"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#ffffff;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"}},"textColor":"teal"} -->
	<p class="has-text-align-center has-teal-color has-text-color" style="font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Meet the team</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"teal-deep"} -->
	<h2 class="wp-block-heading has-text-align-center has-teal-deep-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)">Vets who treat your pet like their own</h2>
	<!-- /wp:heading -->
	<!-- wp:columns -->
	<div class="wp-block-columns">
<?php foreach ( $team as $member ) : ?>
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"veteria-pet-card","style":{"color":{"background":"#fdf8f0"},"border":{"radius":"22px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group veteria-pet-card has-background" style="background-color:#fdf8f0;border-radius:22px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				<!-- wp:image {"align":"center","width":"190px","sizeSlug":"full","className":"veteria-round-img","style":{"border":{"radius":"999px"}}} -->
				<figure class="wp-block-image aligncenter size-full is-resized has-custom-border veteria-round-img"><img src="<?php echo veteria_img( $member[0] ); ?>" alt="<?php echo esc_attr( $member[1] ); ?>" class="wp-image" style="border-radius:999px;width:190px;height:190px;object-fit:cover"/></figure>
				<!-- /wp:image -->
				<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"1.3rem"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"textColor":"teal-deep"} -->
				<h3 class="wp-block-heading has-text-align-center has-teal-deep-color has-text-color" style="font-size:1.3rem;margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html( $member[1] ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.12em"}},"textColor":"coral"} -->
				<p class="has-text-align-center has-coral-color has-text-color" style="font-size:0.9rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase"><?php echo esc_html( $member[2] ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.98rem"}},"textColor":"slate"} -->
				<p class="has-text-align-center has-slate-color has-text-color" style="font-size:0.98rem"><?php echo esc_html( $member[3] ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
<?php endforeach; ?>
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
