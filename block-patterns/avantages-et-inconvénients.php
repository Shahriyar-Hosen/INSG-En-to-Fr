<?php
/*
 * Block Pattern - Avantages et inconvénients
 */

function insg_register_avantages_et_inconvénients_block_pattern()
{

	$content = <<<CONTENT
		<!-- wp:generateblocks/container {"className":"insg_block_pattern","uniqueId":"b4498446","backgroundColor":"var(\u002d\u002dinsg-blue-light)","isDynamic":true,"blockVersion":4,"display":"block","spacing":{"paddingTop":"32px","paddingLeft":"32px","paddingRight":"32px","paddingBottom":"32px","marginTop":"","marginBottom":""},"className":"insg_pros_cons"} -->
		<!-- wp:columns {"className":"insg_margin_bottom_0"} -->
		<div class="wp-block-columns insg_margin_bottom_0"><!-- wp:column {"width":"50%","className":"insg_pros_cons__left"} -->
		<div class="wp-block-column insg_pros_cons__left" style="flex-basis:50%"><!-- wp:generateblocks/headline {"uniqueId":"e8ea3e67","element":"div","blockVersion":3,"sizing":{},"typography":{"fontSize":"45px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","lineHeight":"45px","fontSizeMobile":"30px","lineHeightMobile":"1.1em"},"spacing":{"marginBottom":"16px"},"borders":{},"textColor":"var(\u002d\u002dinsg-black)","iconStyles":{}} -->
		<div class="gb-headline gb-headline-e8ea3e67 gb-headline-text">Plus</div>
		<!-- /wp:generateblocks/headline -->
		
		<!-- wp:list {"style":{"typography":{"fontSize":"18px"}}} -->
		<ul style="font-size:18px"><!-- wp:list-item -->
		<li>Excellent rapport qualité/prix</li>
		<!-- /wp:list-item -->
		
		<!-- wp:list-item -->
		<li>Application facile à utiliser</li>
		<!-- /wp:list-item -->
		
		<!-- wp:list-item -->
		<li>Conception</li>
		<!-- /wp:list-item --></ul>
		<!-- /wp:list --></div>
		<!-- /wp:column -->
		
		<!-- wp:column {"width":"50%","className":"insg_pros_cons__right"} -->
		<div class="wp-block-column insg_pros_cons__right" style="flex-basis:50%"><!-- wp:generateblocks/headline {"uniqueId":"fdbdee85","element":"div","blockVersion":3,"typography":{"fontSize":"45px","lineHeight":"45px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","fontSizeMobile":"30px","lineHeightMobile":"1.1em"},"spacing":{"marginBottom":"16px"}} -->
		<div class="gb-headline gb-headline-fdbdee85 gb-headline-text"><strong>Moins</strong></div>
		<!-- /wp:generateblocks/headline -->
		
		<!-- wp:list {"style":{"typography":{"fontSize":"18px"}}} -->
		<ul style="font-size:18px"><!-- wp:list-item -->
		<li>Un peu cher</li>
		<!-- /wp:list-item -->
		
		<!-- wp:list-item -->
		<li>Problèmes de confidentialité</li>
		<!-- /wp:list-item -->
		
		<!-- wp:list-item -->
		<li>Pas stable</li>
		<!-- /wp:list-item --></ul>
		<!-- /wp:list --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<!-- /wp:generateblocks/container -->
CONTENT;

	register_block_pattern(
		'insg/avantages-et-inconvénients-pattern',
		array(
			'title' => __('INSG. Avantages et inconvénients', 'insg'),
			'description' => _x('Custom Avantages et inconvénients layout.', 'Block pattern description', 'insg'),
			'content' => $content,
		)
	);

}

add_action('init', 'insg_register_avantages_et_inconvénients_block_pattern');