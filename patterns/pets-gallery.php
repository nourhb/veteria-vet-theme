<?php
/**
 * Title: Happy pets gallery
 * Slug: veteria/pets-gallery
 * Categories: veteria
 * Description: Rounded photo gallery of happy patients.
 *
 * @package Veteria
 */

$photos = array(
	array( 'dogrun.jpg', 'Two happy dogs running together at the park' ),
	array( 'dogsmile.jpg', 'Smiling dog enjoying a sunny day' ),
	array( 'cat2.jpg', 'Playful cat sticking its tongue out' ),
	array( 'pug.jpg', 'Adorable pug puppy looking at the camera' ),
	array( 'golden.jpg', 'Golden retriever relaxing in the grass' ),
	array( 'kitten.jpg', 'Curious kitten reaching up playfully' ),
);
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#f3ead8"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#f3ead8;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","letterSpacing":"0.22em","textTransform":"uppercase"}},"textColor":"teal"} -->
	<p class="has-text-align-center has-teal-color has-text-color" style="font-size:0.9rem;letter-spacing:0.22em;text-transform:uppercase">Our patients</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}},"textColor":"teal-deep"} -->
	<h2 class="wp-block-heading has-text-align-center has-teal-deep-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)">Happy pets, healthy lives 🐾</h2>
	<!-- /wp:heading -->
	<!-- wp:gallery {"columns":3,"linkTo":"none","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3">
<?php foreach ( $photos as $photo ) : ?>
		<!-- wp:image {"sizeSlug":"large","style":{"border":{"radius":"18px"}}} -->
		<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo veteria_img( $photo[0] ); ?>" alt="<?php echo esc_attr( $photo[1] ); ?>" style="border-radius:18px;aspect-ratio:1/1;object-fit:cover"/></figure>
		<!-- /wp:image -->
<?php endforeach; ?>
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
