<?php
/*
 * Block Pattern - Bulletin bulletin
 */

function insg_register_bulletin_block_pattern()
{

	$content = <<<CONTENT
	
			<!-- wp:generateblocks/container {"uniqueId":"2f3facc4","backgroundColor":"var(\u002d\u002dinsg-black)","isDynamic":true,"blockVersion":4,"spacing":{"paddingTop":"32px","paddingLeft":"32px","paddingRight":"128px","paddingBottom":"32px","marginTop":"","paddingTopMobile":"16px","paddingLeftMobile":"16px","paddingRightMobile":"16px","paddingBottomMobile":"16px"},"className":"insg_block_pattern"} -->
	<!-- wp:generateblocks/headline {"uniqueId":"3a96d841","element":"div","blockVersion":3,"typography":{"fontSize":"45px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","lineHeight":"55px","fontSizeMobile":"30px","lineHeightMobile":"1.1em"},"textColor":"var(\u002d\u002dinsg-white)"} -->
	<div class="gb-headline gb-headline-3a96d841 gb-headline-text"><mark style="background-color:var(--insg-blue)" class="has-inline-color has-insg-white-color">Guides</mark><br>sur les Créateurs
	Meilleurs Outils Sociaux</div>
	<!-- /wp:generateblocks/headline -->

	<!-- wp:paragraph {"style":{"typography":{"fontSize":"17px"}},"textColor":"insg-white"} -->
	<p class="has-insg-white-color has-text-color" style="font-size:17px">Recevez nos <strong>meilleurs guides </strong>et outils sur les Créateurs de Contenu & Marques sur les réseaux sociaux livrés chaque semaine.</p>
	<!-- /wp:paragraph -->

	<!-- wp:html -->
	<iframe src="https://embeds.beehiiv.com/3171e0a6-e703-40d4-bd96-1c0cd2fa9d04?slim=true" data-test-id="beehiiv-embed" height="52" frameborder="0" scrolling="no" style="margin: 0; border-radius: 0px !important; background-color: transparent;" title="Newsletter Form"></iframe>
	<!-- /wp:html -->

	<!-- wp:generateblocks/container {"uniqueId":"402d1774","isDynamic":true,"blockVersion":4,"spacing":{"marginTop":"16px"}} -->
	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
	<div class="wp-block-group"><!-- wp:generateblocks/image {"uniqueId":"e4c330fb","mediaId":4248,"sizeSlug":"full","blockVersion":2} -->
	<figure class="gb-block-image gb-block-image-e4c330fb"><img class="gb-image gb-image-e4c330fb" src="/wp-content/uploads/marketer-people.png" alt="Marketer People"/></figure>
	<!-- /wp:generateblocks/image -->

	<!-- wp:generateblocks/headline {"uniqueId":"703a 9bab","element":"p","blockVersion":3,"typography":{"fontSize":"16px","fontSizeMobile":"15px"},"textColor":"var(\u002d\u002dinsg-white)"} -->
	<p class="gb-headline gb-headline-703a9bab gb-headline-text"> +17000 abonnés en profitent déjà</p>
	<!-- /wp:generateblocks/headline --></div>
	<!-- /wp:group -->
	<!-- /wp:generateblocks/container -->
	<!-- /wp:generateblocks/container -->

CONTENT;

	register_block_pattern(
		'insg/bulletin-pattern',
		array(
			'title' => __('INSG. Bulletin', 'insg'),
			'description' => _x('Custom Bulletin layout.', 'Block pattern description', 'insg'),
			'content' => $content,
		)
	);
}

add_action('init', 'insg_register_bulletin_block_pattern');