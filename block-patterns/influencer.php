<?php
/*
 * Block Pattern - Influencer
*/

function insg_register_influencer_block_pattern() {

	$content = <<<CONTENT
		<!-- wp:generateblocks/container {"className":"insg_block_pattern","uniqueId":"5e04ab33","backgroundColor":"var(\u002d\u002dinsg-blue-light)","isDynamic":true,"blockVersion":4,"alignItems":"flex-end","sizing":{"height":""},"spacing":{"paddingTop":"32px","paddingLeft":"32px","paddingRight":"","paddingBottom":"","marginTop":"","marginBottom":"","paddingRightMobile":"32px"}} -->
		<!-- wp:columns {"className":"insg_margin_bottom_0 insg_align_flex_end"} -->
		<div class="wp-block-columns insg_margin_bottom_0 insg_align_flex_end"><!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:generateblocks/headline {"uniqueId":"2e0ac1bf","element":"div","blockVersion":3,"typography":{"fontSize":"45px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","lineHeight":"55px","fontSizeMobile":"30px","lineHeightMobile":"1.1em"},"spacing":{"marginBottom":"16px","marginTop":""},"textColor":"var(\u002d\u002dinsg-black)"} -->
		<div class="gb-headline gb-headline-2e0ac1bf gb-headline-text">Need <mark style="background-color:var(--insg-blue)" class="has-inline-color has-insg-white-color">the Best</mark><br><strong>Influencers?</strong></div>
		<!-- /wp:generateblocks/headline -->
		
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"insg-black"} -->
		<p class="has-insg-black-color has-text-color" style="font-size:18px">Let us help. We can find and contact them. Build your Campaign and ROI</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:generateblocks/button {"uniqueId":"0cdb02f7","hasUrl":true,"blockVersion":4,"display":"inline-flex","justifyContent":"center","sizing":{"width":"258px","height":"45px","widthMobile":"100%"},"typography":{"textAlign":"center","fontSize":"17.5px","fontFamily":"Neue Haas Grotesk Display Pro","fontWeight":"700"},"spacing":{"paddingTop":"8px","paddingRight":"15px","paddingBottom":"6px","paddingLeft":"15px","marginBottom":"32px","marginBottomMobile":"0px"},"borders":{"borderTopWidth":"3px","borderTopStyle":"solid","borderRightWidth":"3px","borderBottomWidth":"3px","borderLeftWidth":"3px","borderRightStyle":"solid","borderBottomStyle":"solid","borderLeftStyle":"solid","borderTopLeftRadius":"6px","borderTopRightRadius":"6px","borderBottomLeftRadius":"6px","borderBottomRightRadius":"6px"},"backgroundColor":"#0366d6","backgroundColorHover":"var(\u002d\u002dinsg-white)","textColor":"var(\u002d\u002dinsg-white)","textColorHover":"var(\u002d\u002dinsg-blue)"} -->
		<a class="gb-button gb-button-0cdb02f7 gb-button-text" href="/en/consulting">GET A FREE CONSULT</a>
		<!-- /wp:generateblocks/button --></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:generateblocks/container {"uniqueId":"d9818b22","isDynamic":true,"blockVersion":4,"alignItems":"flex-end","position":"relative","spacing":{"marginRightMobile":"-32px"}} -->
		<!-- wp:generateblocks/image {"uniqueId":"5df4fa21","mediaId":4352,"sizeSlug":"full","alignment":"right","blockVersion":2,"spacing":{"marginRightMobile":""},"className":"insg_desktop_only"} -->
		<figure class="gb-block-image gb-block-image-5df4fa21"><img class="gb-image gb-image-5df4fa21 insg_desktop_only" src="/wp-content/uploads/insg-influeancer-search.png" alt="INSG. Influeancer Search" title="INSG. Influeancer Search"/></figure>
		<!-- /wp:generateblocks/image -->
		
		<!-- wp:generateblocks/image {"uniqueId":"e50eeb38","mediaId":5029,"sizeSlug":"full","blockVersion":2,"spacing":{"marginRightMobile":""},"className":"insg_mobile_only"} -->
		<figure class="gb-block-image gb-block-image-e50eeb38"><img class="gb-image gb-image-e50eeb38 insg_mobile_only" src="/wp-content/uploads/insg-influeancer-search-mobile-view.png" alt="INSG Influeancer Search mobile view"/></figure>
		<!-- /wp:generateblocks/image -->
		<!-- /wp:generateblocks/container --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<!-- /wp:generateblocks/container -->
CONTENT;

	register_block_pattern(
		'insg/influencer-pattern',
		array(
		    'title'       => __( 'INSG. Influencer', 'insg' ),
		    'description' => _x( 'Custom Influencer layout.', 'Block pattern description', 'insg' ),
		    'content'     => $content,
		)
	);

}

add_action('init', 'insg_register_influencer_block_pattern');






