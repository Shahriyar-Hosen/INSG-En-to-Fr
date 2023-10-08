<?php
/*
 * Block Pattern - Liste des outils 
 */

function insg_register_liste_des_outils_block_pattern()
{
	$content = <<<CONTENT
			<!-- wp:generateblocks/container {"uniqueId":"3e84cad2","backgroundColor":"var(\u002d\u002dinsg-blue-light)","isDynamic":true,"blockVersion":4,"alignItems":"center","justifyContent":"center","sizing":{"height":"","minWidth":"","maxWidth":""},"spacing":{"paddingTop":"16px","paddingLeft":"32px","paddingRight":"32px","paddingBottom":"16px","marginTop":"","marginBottom":"","marginLeft":"auto","marginRight":"auto"},"className":"insg_block_pattern insg_block_pattern"} -->
	<!-- wp:columns {"className":"insg_margin_bottom_0"} -->
	<div class="wp-block-columns insg_margin_bottom_0"><!-- wp:column {"width":""} -->
	<div class="wp-block-column"><!-- wp:generateblocks/headline {"uniqueId":"54f66a5f","element":"div","blockVersion":3,"typography":{"fontSize":"45px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","lineHeight":"55px","fontSizeMobile":"30px","lineHeightMobile":"1.1em"},"spacing":{"marginBottom":"16px","marginTop":""},"textColor":"var(\u002d\u002dinsg-black)"} -->
	<div class="gb-headline gb-headline-54f66a5f gb-headline-text">Il manque <br>un <mark style="background-color:var(--insg-blue)" class="has-inline-color has-insg-white-color">outil</mark>?</div>
	<!-- /wp:generateblocks/headline -->

	<!-- wp:generateblocks/headline {"uniqueId":"bfcbb51b","element":"p","blockVersion":3,"spacing":{"marginBottomMobile":"0px","marginBottom":"0px"}} -->
	<p class="gb-headline gb-headline-bfcbb51b gb-headline-text">Soumettre un produit pour examen</p>
	<!-- /wp:generateblocks/headline --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"208px"} -->
	<div class="wp-block-column" style="flex-basis:208px"><!-- wp:generateblocks/button {"uniqueId":"cd2c7612","hasUrl":true,"blockVersion":4,"display":"inline-flex","justifyContent":"center","sizing":{"width":"208px","height":"45px","widthMobile":"100%"},"typography":{"textAlign":"center","fontSize":"17.5px","fontFamily":"Neue Haas Grotesk Display Pro","fontWeight":"700"},"spacing":{"paddingTop":"8px","paddingRight":"15px","paddingBottom":"6px","paddingLeft":"15px","marginBottom":"","marginTop":"29%","marginTopMobile":"0%"},"borders":{"borderTopWidth":"3px","borderTopStyle":"solid","borderRightWidth":"3px","borderBottomWidth":"3px","borderLeftWidth":"3px","borderRightStyle":"solid","borderBottomStyle":"solid","borderLeftStyle":"solid","borderTopLeftRadius":"6px","borderTopRightRadius":"6px","borderBottomLeftRadius":"6px","borderBottomRightRadius":"6px"},"backgroundColor":"#0366d6","backgroundColorHover":"var(\u002d\u002dinsg-white)","textColor":"var(\u002d\u002dinsg-white)","textColorHover":"var(\u002d\u002dinsg-blue)"} -->
	<a class="gb-button gb-button-cd2c7612 gb-button-text" href="/en/contact">AJOUTER UN OUTIL</a>
	<!-- /wp:generateblocks/button --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	<!-- /wp:generateblocks/container -->
CONTENT;

	register_block_pattern(
		'insg/liste-des-outils-pattern',
		array(
			'title' => __('INSG. Liste des outils', 'insg'),
			'description' => _x('Custom Liste des outils layout.', 'Block pattern description', 'insg'),
			'content' => $content,
		)
	);

}

add_action('init', 'insg_register_liste_des_outils_block_pattern');