<?php
/*
 * Block Pattern - Free Text
*/

function insg_register_free_text_block_pattern() {

	$content = <<<CONTENT
		<!-- wp:generateblocks/container {"className":"insg_block_pattern","uniqueId":"54123af6","backgroundColor":"var(\u002d\u002dinsg-blue-light)","isDynamic":true,"blockVersion":4,"alignItems":"center","justifyContent":"center","sizing":{"height":""},"spacing":{"paddingTop":"32px","paddingLeft":"32px","paddingRight":"32px","paddingBottom":"32px","marginTop":"","marginBottom":""}} -->
		<!-- wp:columns {"className":"insg_margin_bottom_0"} -->
		<div class="wp-block-columns insg_margin_bottom_0"><!-- wp:column {"width":""} -->
		<div class="wp-block-column"><!-- wp:generateblocks/headline {"uniqueId":"4760c7b5","element":"div","blockVersion":3,"typography":{"fontSize":"45px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","lineHeight":"55px","fontSizeMobile":"30px","lineHeightMobile":"1.1em"},"spacing":{"marginBottom":"16px","marginTop":""},"textColor":"var(\u002d\u002dinsg-black)"} -->
		<div class="gb-headline gb-headline-4760c7b5 gb-headline-text">Let Us <mark style="background-color:var(--insg-blue)" class="has-inline-color has-insg-white-color">Manage</mark><br>Your Giveaways</div>
		<!-- /wp:generateblocks/headline -->
		
		<!-- wp:generateblocks/headline {"uniqueId":"62e7b71e","element":"p","blockVersion":3,"typography":{"fontSize":"18px"},"spacing":{"marginBottom":"0px"}} -->
		<p class="gb-headline gb-headline-62e7b71e gb-headline-text">Giveaways, Contests, Sweepstakes….</p>
		<!-- /wp:generateblocks/headline --></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"width":"208px"} -->
		<div class="wp-block-column" style="flex-basis:208px"><!-- wp:generateblocks/button {"uniqueId":"13ef0ca0","hasUrl":true,"blockVersion":4,"display":"inline-flex","justifyContent":"center","sizing":{"width":"208px","height":"45px","widthMobile":"100%"},"typography":{"textAlign":"center","fontSize":"15px","fontFamily":"Neue Haas Grotesk Display Pro","fontWeight":"700"},"spacing":{"paddingTop":"10px","paddingRight":"10px","paddingBottom":"6px","paddingLeft":"10px","marginBottom":"","marginTop":"29%","marginTopMobile":"0%"},"borders":{"borderTopWidth":"3px","borderTopStyle":"solid","borderRightWidth":"3px","borderBottomWidth":"3px","borderLeftWidth":"3px","borderRightStyle":"solid","borderBottomStyle":"solid","borderLeftStyle":"solid","borderTopLeftRadius":"6px","borderTopRightRadius":"6px","borderBottomLeftRadius":"6px","borderBottomRightRadius":"6px"},"backgroundColor":"#0366d6","backgroundColorHover":"var(\u002d\u002dinsg-white)","textColor":"var(\u002d\u002dinsg-white)","textColorHover":"var(\u002d\u002dinsg-blue)"} -->
		<a class="gb-button gb-button-13ef0ca0 gb-button-text" href="/en/consulting">GET A FREE CONSULT</a>
		<!-- /wp:generateblocks/button --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<!-- /wp:generateblocks/container -->
CONTENT;

	register_block_pattern(
		'insg/free-text-pattern',
		array(
		    'title'       => __( 'INSG. Free Text', 'insg' ),
		    'description' => _x( 'Custom Free Text layout.', 'Block pattern description', 'insg' ),
		    'content'     => $content,
		)
	);

}

add_action('init', 'insg_register_free_text_block_pattern');






