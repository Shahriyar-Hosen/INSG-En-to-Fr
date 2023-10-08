<?php
/*
 * Block Pattern - Revoir
 */

function insg_register_revoir_block_pattern()
{
	$content = <<<CONTENT
		<!-- wp:generateblocks/container {"uniqueId":"e28d0a55","backgroundColor":"var(\u002d\u002dinsg-white)","isDynamic":true,"blockVersion":4,"className":"insg_review_block insg_block_pattern"} -->
		<!-- wp:image {"align":"center","id":4812,"sizeSlug":"full","linkDestination":"none"} -->
		<figure class="wp-block-image aligncenter size-full"><img src="/wp-content/uploads/Inflact-logo.png" alt="Inflact logo" class="wp-image-4812"/></figure>
		<!-- /wp:image -->
		
		<!-- wp:generateblocks/headline {"uniqueId":"cf5c908f","element":"div","blockVersion":3,"typography":{"fontSize":"30px","fontWeight":"700","lineHeight":"55px","fontSizeMobile":"30px","lineHeightMobile":"1.1em"},"spacing":{"marginTop":"16px","marginBottomMobile":"16px"},"textColor":"#256bee","className":"insg_title_with_top_line"} -->
		<div class="gb-headline gb-headline-cf5c908f gb-headline-text insg_title_with_top_line">Trouvez tous les Influenceurs </div>
		<!-- /wp:generateblocks/headline -->
		
		<!-- wp:paragraph {"align":"left","style":{"typography":{"fontSize":"18px"}},"textColor":"insg-black","className":"insg_hero_left_para"} -->
		<p class="has-text-align-left insg_hero_left_para has-insg-black-color has-text-color" style="font-size:18px">Si vous recherchez des influenceurs en Malaisie et partout dans le monde. Faites simplement une première recherche gratuite d’influenceurs ou dressez une liste d’influenceurs, puis contactez-les vous-même.</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:columns -->
		<div class="wp-block-columns"><!-- wp:column {"width":"209px"} -->
		<div class="wp-block-column" style="flex-basis:209px"><!-- wp:generateblocks/container {"uniqueId":"cd40c4e1","bgImage":{"id":4365,"image":{"url":"/wp-content/uploads/ellipse.png","height":209,"width":210,"orientation":"landscape"}},"isDynamic":true,"blockVersion":4,"display":"flex","flexDirection":"column","flexWrap":"wrap","alignItems":"center","justifyContent":"center","sizing":{"width":"209px","height":"209px"},"spacing":{"paddingLeftMobile":"","paddingRightMobile":"","marginLeftMobile":"auto","marginRightMobile":"auto"}} -->
		<!-- wp:generateblocks/headline {"uniqueId":"bcdfc424","element":"div","blockVersion":3,"display":"flex","alignItems":"center","justifyContent":"center","typography":{"fontSize":"52.5px","fontWeight":"700","fontFamily":"Neue Haas Grotesk Display Pro","textAlign":"center","lineHeight":"1em"}} -->
		<div class="gb-headline gb-headline-bcdfc424 gb-headline-text">9.5</div>
		<!-- /wp:generateblocks/headline -->
		
		<!-- wp:generateblocks/headline {"uniqueId":"12e6cc88","element":"div","blockVersion":3,"typography":{"fontSize":"17.5px","textAlign":"center"}} -->
		<div class="gb-headline gb-headline-12e6cc88 gb-headline-text">out of 10</div>
		<!-- /wp:generateblocks/headline -->
		<!-- /wp:generateblocks/container --></div>
		<!-- /wp:column -->
		
		<!-- wp:column -->
		<div class="wp-block-column"><!-- wp:table {"style":{"typography":{"fontSize":"18px"}},"className":"is-style-regular"} -->
		<figure class="wp-block-table is-style-regular" style="font-size:18px"><table><tbody><tr><td><strong>Meilleur pour</strong></td><td class="has-text-align-right" data-align="right">Débutants</td></tr><tr><td><strong>Prix</strong></td><td class="has-text-align-right" data-align="right">GRATUIT</td></tr><tr><td><strong>Discount</strong></td><td class="has-text-align-right" data-align="right">PAS BESOIN</td></tr><tr><td><strong>Code Promo</strong></td><td class="has-text-align-right" data-align="right">C'EST GRATUIT</td></tr></tbody></table></figure>
		<!-- /wp:table -->
		
		<!-- wp:generateblocks/container {"uniqueId":"2576d61e","isDynamic":true,"blockVersion":4,"display":"flex","alignItems":"center","justifyContent":"center"} -->
		<!-- wp:generateblocks/button {"uniqueId":"6ec9573c","hasUrl":true,"blockVersion":4,"display":"inline-flex","justifyContent":"center","sizing":{"width":"100%","height":"45px"},"typography":{"textAlign":"center","fontSize":"17.5px","fontFamily":"Neue Haas Grotesk Display Pro","fontWeight":"700"},"spacing":{"paddingTop":"8px","paddingRight":"15px","paddingBottom":"6px","paddingLeft":"15px","marginBottom":"32px"},"borders":{"borderTopWidth":"3px","borderTopStyle":"solid","borderRightWidth":"3px","borderBottomWidth":"3px","borderLeftWidth":"3px","borderRightStyle":"solid","borderBottomStyle":"solid","borderLeftStyle":"solid","borderTopLeftRadius":"6px","borderTopRightRadius":"6px","borderBottomLeftRadius":"6px","borderBottomRightRadius":"6px"},"backgroundColor":"#0366d6","backgroundColorHover":"var(\u002d\u002dinsg-white)","textColor":"var(\u002d\u002dinsg-white)","textColorHover":"var(\u002d\u002dinsg-blue)"} -->
		<a class="gb-button gb-button-6ec9573c gb-button-text" href="/en/consulting">100% GRATUIT</a>
		<!-- /wp:generateblocks/button -->
		<!-- /wp:generateblocks/container --></div>
		<!-- /wp:column --></div>
		<!-- /wp:columns -->
		<!-- /wp:generateblocks/container -->
CONTENT;

	register_block_pattern(
		'insg/revoir-pattern',
		array(
			'title' => __('INSG. Revoir', 'insg'),
			'description' => _x('Custom Revoir layout.', 'Block pattern description', 'insg'),
			'content' => $content,
		)
	);

}

add_action('init', 'insg_register_revoir_block_pattern');