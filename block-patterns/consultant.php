<?php
/*
 * Block Pattern - Consultant
 */

function insg_register_consultant_block_pattern()
{
	$content = <<<CONTENT
		<!-- wp:generateblocks/container {"className":"insg_block_pattern","uniqueId":"b7e17db8","backgroundColor":"var(\u002d\u002dinsg-blue-light)","isDynamic":true,"blockVersion":4,"alignItems":"flex-end","sizing":{"height":""},"spacing":{"paddingTop":"32px","paddingLeft":"32px","paddingRight":"32px","paddingBottom":"","marginTop":"","marginBottom":""}} -->
		<!-- wp:columns {"className":"insg_margin_bottom_0 insg_align_flex_end"} -->
		<div class="wp-block-columns insg_margin_bottom_0 insg_align_flex_end"><!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:generateblocks/headline {"uniqueId":"9deb0753","element":"div","blockVersion":3,"typography":{"fontSize":"45px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","lineHeight":"55px","fontSizeMobile":"30px","lineHeightMobile":"1.1em"},"spacing":{"marginBottom":"16px","marginTop":""},"textColor":"var(\u002d\u002dinsg-black)"} -->
		<div class="gb-headline gb-headline-9deb0753 gb-headline-text">Oui. Nous pouvons <mark style="background-color:var(--insg-blue)" class="has-inline-color has-insg-white-color">aider </mark><br>votre <strong>Marque</strong> </div>
		<!-- /wp:generateblocks/headline -->

		<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}},"textColor":"insg-black"} -->
		<p class="has-insg-black-color has-text-color" style="font-size:14px"><strong>Marketing d'influence</strong> - Avec les meilleurs créateurs <br><strong>Gestion de Compte</strong> - Commentaires et Messages<br><strong>Création de contenu</strong> - Édition et conception vidéo</p>
		<!-- /wp:paragraph -->

		<!-- wp:generateblocks/button {"uniqueId":"99f16c9d","hasUrl":true,"blockVersion":4,"display":"inline-flex","justifyContent":"center","sizing":{"width":"258px","height":"45px","widthMobile":"100%"},"typography":{"textAlign":"center","fontSize":"17.5px","fontFamily":"Neue Haas Grotesk Display Pro","fontWeight":"700"},"spacing":{"paddingTop":"8px","paddingRight":"15px","paddingBottom":"6px","paddingLeft":"15px","marginBottom":"32px","marginBottomMobile":"0px"},"borders":{"borderTopWidth":"3px","borderTopStyle":"solid","borderRightWidth":"3px","borderBottomWidth":"3px","borderLeftWidth":"3px","borderRightStyle":"solid","borderBottomStyle":"solid","borderLeftStyle":"solid","borderTopLeftRadius":"6px","borderTopRightRadius":"6px","borderBottomLeftRadius":"6px","borderBottomRightRadius":"6px"},"backgroundColor":"#0366d6","backgroundColorHover":"var(\u002d\u002dinsg-white)","textColor":"var(\u002d\u002dinsg-white)","textColorHover":"var(\u002d\u002dinsg-blue)"} -->
		<a class="gb-button gb-button-99f16c9d gb-button-text" href="/en/consulting">COMMENCER </a>
		<!-- /wp:generateblocks/button --></div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:generateblocks/container {"uniqueId":"c9752884","isDynamic":true,"blockVersion":4,"alignItems":"flex-end","position":"relative"} -->
		<!-- wp:generateblocks/image {"uniqueId":"02ee7b5a","mediaId":4272,"sizeSlug":"full","alignment":"right","blockVersion":2,"className":"insg_desktop_only"} -->
		<figure class="gb-block-image gb-block-image-02ee7b5a"><img class="gb-image gb-image-02ee7b5a insg_desktop_only" src="/wp-content/uploads/gregory-taslaud-insg-help-your-brand.png" alt="Gregory Taslaud help your brand" title="gregory-taslaud-insg-help-your-brand"/></figure>
		<!-- /wp:generateblocks/image -->
		<!-- /wp:generateblocks/container --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<!-- /wp:generateblocks/container -->
CONTENT;

	register_block_pattern(
		'insg/consultant-pattern',
		array(
			'title' => __('INSG. Consultant', 'insg'),
			'description' => _x('Custom Consultant layout.', 'Block pattern description', 'insg'),
			'content' => $content,
		)
	);

}

add_action('init', 'insg_register_consultant_block_pattern');