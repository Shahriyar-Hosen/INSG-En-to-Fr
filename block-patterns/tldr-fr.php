<?php
/*
 * Block Pattern - TLDR Fr
 */

function insg_register_tldr_fr_block_pattern()
{

	$content = <<<CONTENT
			<!-- wp:generateblocks/container {"uniqueId":"03e2456d","backgroundColor":"var(\u002d\u002dinsg-white)","isDynamic":true,"blockVersion":4,"display":"block","spacing":{"paddingTop":"32px","paddingLeft":"32px","paddingRight":"32px","paddingBottom":"32px","marginTop":"","marginBottom":""},"borders":{"borderTopWidth":"2px","borderTopStyle":"solid","borderRightWidth":"2px","borderBottomWidth":"2px","borderLeftWidth":"2px","borderRightStyle":"solid","borderBottomStyle":"solid","borderLeftStyle":"solid","borderTopColor":"var(\u002d\u002dinsg-gray-light)","borderRightColor":"var(\u002d\u002dinsg-gray-light)","borderBottomColor":"var(\u002d\u002dinsg-gray-light)","borderLeftColor":"var(\u002d\u002dinsg-gray-light)","borderTopLeftRadius":"6px","borderTopRightRadius":"6px","borderBottomLeftRadius":"6px","borderBottomRightRadius":"6px"},"className":"insg_tldr_section insg_block_pattern"} -->
	<!-- wp:generateblocks/headline {"uniqueId":"9a96357f","element":"div","blockVersion":3,"sizing":{},"typography":{"fontSize":"45px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","lineHeight":"45px","fontSizeMobile":"30px","lineHeightMobile":"1,1em"},"spacing":{"marginBottom":"16px"},"borders":{},"textColor":"var(\u002d\u002dinsg-black)","iconStyles":{}} -->
	<div class="gb-headline gb-headline-9a96357f gb-headline-text">TL;DR;</div>
	<!-- /wp:generateblocks/headline -->

	<!-- wp:generateblocks/container {"uniqueId":"2d06f791","isDynamic":true,"blockVersion":4,"spacing":{"marginLeft":"10px","marginLeftMobile":"0px"}} -->
	<!-- wp:list {"style":{"typography":{"fontSize":"18px"}}} -->
	<ul style="font-size:18px"><!-- wp:list-item -->
	<li><strong>Le marketing d'influence en Asie du Sud-Est est en plein essor avec</strong> une valeur estimée <strong>à 2,59 milliards de dollars en 2024. </strong></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><strong>Instagram reste le <a href="#">média social le plus important</a> </strong>en <strong>Asie du Sud-Est. </strong></li>
	<!-- /wp:list-item -->

	<!-- wp:list-item -->
	<li><strong>Les nano-influenceurs</strong> gagnent une position centrale parmi d'autres niveaux en<strong><a href="#"> Asie du Sud-Est</a></strong></li>
	<!-- /wp:list-item -->

	<!-- /wp:list -->
	<!-- /wp:generateblocks/container -->
	<!-- /wp:generateblocks/container -->
CONTENT;

	register_block_pattern(
		'insg/tldr-fr-pattern',
		array(
			'title' => __('INSG. TLDR', 'insg'),
			'description' => _x('Custom TLDR layout.', 'Block pattern description', 'insg'),
			'content' => $content,
		)
	);

}

add_action('init', 'insg_register_tldr_fr_block_pattern');