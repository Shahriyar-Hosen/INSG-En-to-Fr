<?php
/*
 * Block Pattern - Conseil aux influenceurs
 */

function insg_register_conseil_aux_influenceurs_block_pattern()
{

	$content = <<<CONTENT
		<!-- wp:generateblocks/container {"uniqueId":"4fbbac9d","backgroundColor":"var(\u002d\u002dinsg-blue-light)","isDynamic":true,"blockVersion":4,"alignItems":"flex-end","sizing":{"height":""},"spacing":{"paddingTop":"32px","paddingLeft":"32px","paddingRight":"","paddingBottom":"","marginTop":"","marginBottom":"","paddingRightMobile":"32px","paddingBottomMobile":"32px"},"className":"insg_influencer_consulting insg_block_pattern"} -->
		<!-- wp:columns {"className":"insg_margin_bottom_0 insg_align_flex_end"} -->
		<div class="wp-block-columns insg_margin_bottom_0 insg_align_flex_end"><!-- wp:column {"width":""} -->
		<div class="wp-block-column"><!-- wp:generateblocks/headline {"uniqueId":"69355387","element":"div","blockVersion":3,"typography":{"fontSize":"45px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","lineHeight":"55px","fontSizeMobile":"30px","lineHeightMobile":"1.1em"},"spacing":{"marginBottom":"16px","marginTop":""},"textColor":"var(\u002d\u002dinsg-black)"} -->
		<div class="gb-headline gb-headline-69355387 gb-headline-text">Besoin de <mark style="background-color:var(--insg-blue)" class="has-inline-color has-insg-white-color">plus</mark><br>d’Influenceurs</div>
		<!-- /wp:generateblocks/headline -->
		
		<!-- wp:paragraph {"style":{"typography":{"fontSize":"18px"}},"textColor":"insg-black"} -->
		<p class="has-insg-black-color has-text-color" style="font-size:18px">Nous trouvons & contactons les meilleurs pour votre marque</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:image {"align":"center","id":4645,"sizeSlug":"full","linkDestination":"none","className":"insg_mobile_only"} -->
		<figure class="wp-block-image aligncenter size-full insg_mobile_only"><img src="/wp-content/uploads/Content-Messages-Partnerships-mobile-view.png" alt="Content, Messages, Partnerships mobile-view" class="wp-image-4645"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:generateblocks/button {"uniqueId":"4ee03dee","hasUrl":true,"blockVersion":4,"display":"inline-flex","justifyContent":"center","sizing":{"width":"231px","height":"45px","widthMobile":"100%"},"typography":{"textAlign":"center","fontSize":"17.5px","fontFamily":"Neue Haas Grotesk Display Pro","fontWeight":"700"},"spacing":{"paddingTop":"8px","paddingRight":"15px","paddingBottom":"6px","paddingLeft":"15px","marginBottom":"32px","marginBottomMobile":"0px"},"borders":{"borderTopWidth":"3px","borderTopStyle":"solid","borderRightWidth":"3px","borderBottomWidth":"3px","borderLeftWidth":"3px","borderRightStyle":"solid","borderBottomStyle":"solid","borderLeftStyle":"solid","borderTopLeftRadius":"6px","borderTopRightRadius":"6px","borderBottomLeftRadius":"6px","borderBottomRightRadius":"6px"},"backgroundColor":"#0366d6","backgroundColorHover":"var(\u002d\u002dinsg-white)","textColor":"var(\u002d\u002dinsg-white)","textColorHover":"var(\u002d\u002dinsg-blue)"} -->
		<a class="gb-button gb-button-4ee03dee gb-button-text" href="/en/consulting">TRAVAILLONS ENSEMBLE</a>
		<!-- /wp:generateblocks/button --></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"width":""} -->
		<div class="wp-block-column"><!-- wp:generateblocks/container {"uniqueId":"57360f03","isDynamic":true,"blockVersion":4,"alignItems":"flex-end","position":"relative"} -->
		<!-- wp:generateblocks/image {"uniqueId":"fe1f35ca","mediaId":4400,"sizeSlug":"full","alignment":"right","blockVersion":2,"className":"insg_desktop_only"} -->
		<figure class="gb-block-image gb-block-image-fe1f35ca"><img class="gb-image gb-image-fe1f35ca insg_desktop_only" src="/wp-content/uploads/insg-analytics.png" alt="INSG. Analytics" title="INSG. Analytics"/></figure>
		<!-- /wp:generateblocks/image -->
		<!-- /wp:generateblocks/container --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<!-- /wp:generateblocks/container -->
CONTENT;

	register_block_pattern(
		'insg/conseil-aux-influenceurs-pattern',
		array(
			'title' => __('INSG. Conseil aux influenceurs', 'insg'),
			'description' => _x('Custom Conseil aux influenceurs layout.', 'Block pattern description', 'insg'),
			'content' => $content,
		)
	);

}

add_action('init', 'insg_register_conseil_aux_influenceurs_block_pattern');