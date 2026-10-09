<?php
/**
 * Title: Inner page hero
 * Slug: veteria/inner-hero
 * Categories: veteria
 * Description: Compact cover hero with the page title for inner pages.
 *
 * @package Veteria
 */
?>
<!-- wp:cover {"url":"<?php echo veteria_img( 'vet-hug.jpg' ); ?>","dimRatio":60,"overlayColor":"teal-deep","minHeight":340,"contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);min-height:340px"><span aria-hidden="true" class="wp-block-cover__background has-teal-deep-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Veterinarian gently holding a small dog" src="<?php echo veteria_img( 'vet-hug.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#ffffff"}}} /-->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1rem"},"color":{"text":"#f3ead8"}}} -->
			<p class="has-text-align-center has-text-color" style="color:#f3ead8;font-size:1rem">🐾 Veteria Vet Clinic · Compassionate pet care in Toronto</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
