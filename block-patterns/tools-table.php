<?php
// prevent direct access
defined('ABSPATH') or exit;

function insg_register_tools_table_block_pattern() {

	$content = <<<CONTENT
<!-- wp:columns {"className":"insg_tool_table_cols"} -->
<div class="wp-block-columns insg_tool_table_cols"><!-- wp:column {"style":{"color":{"background":"#ffffff"}},"className":"insg_tool_table_col"} -->
<div class="wp-block-column insg_tool_table_col has-background" style="background-color:#ffffff"><!-- wp:paragraph {"align":"center","textColor":"white","className":"insg_tt_btn_wrapper insg_tt_top_btn_wrapper","fontSize":"small"} -->
<p class="has-text-align-center insg_tt_btn_wrapper insg_tt_top_btn_wrapper has-white-color has-text-color has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener nofollow">Top Button</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":4092,"width":150,"height":35,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="https://www.insg.co/wp-content/themes/insg/images/Logo_White.png" alt="Logo White" class="wp-image-4092" width="150" height="35"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#333333"}},"className":"insg_tt_title"} -->
<p class="has-text-align-center insg_tt_title has-text-color" style="color:#333333">Site Title</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#333333"}},"className":"insg_tt_desc"} -->
<p class="has-text-align-center insg_tt_desc has-text-color" style="color:#333333">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt enim at tortor dignissim, eget volutpat ipsum ornare.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white","className":"insg_tt_btn_wrapper insg_tt_cta_btn_wrapper","fontSize":"small"} -->
<p class="has-text-align-center insg_tt_btn_wrapper insg_tt_cta_btn_wrapper has-white-color has-text-color has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener nofollow">Site Button</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#333333"}},"className":"aligncenter insg_tt_btn_wrapper insg_tt_review_btn_wrapper","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size aligncenter insg_tt_btn_wrapper insg_tt_review_btn_wrapper has-small-font-size"><a class="wp-block-button__link has-text-color has-background" style="background-color:#ffffff;color:#333333">Read Review →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"color":{"background":"#ffffff"}},"className":"insg_tool_table_col"} -->
<div class="wp-block-column insg_tool_table_col has-background" style="background-color:#ffffff"><!-- wp:paragraph {"align":"center","textColor":"white","className":"insg_tt_btn_wrapper insg_tt_top_btn_wrapper","fontSize":"small"} -->
<p class="has-text-align-center insg_tt_btn_wrapper insg_tt_top_btn_wrapper has-white-color has-text-color has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener nofollow">Top Button</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":4092,"width":150,"height":35,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="https://www.insg.co/wp-content/themes/insg/images/Logo_White.png" alt="Logo White" class="wp-image-4092" width="150" height="35"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#333333"}},"className":"insg_tt_title"} -->
<p class="has-text-align-center insg_tt_title has-text-color" style="color:#333333">Site Title</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#333333"}},"className":"insg_tt_desc"} -->
<p class="has-text-align-center insg_tt_desc has-text-color" style="color:#333333">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt enim at tortor dignissim, eget volutpat ipsum ornare.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white","className":"insg_tt_btn_wrapper insg_tt_cta_btn_wrapper","fontSize":"small"} -->
<p class="has-text-align-center insg_tt_btn_wrapper insg_tt_cta_btn_wrapper has-white-color has-text-color has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener nofollow">Site Button</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#333333"}},"className":"aligncenter insg_tt_btn_wrapper insg_tt_review_btn_wrapper","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size aligncenter insg_tt_btn_wrapper insg_tt_review_btn_wrapper has-small-font-size"><a class="wp-block-button__link has-text-color has-background" style="background-color:#ffffff;color:#333333">Read Review →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"color":{"background":"#ffffff"}},"className":"insg_tool_table_col"} -->
<div class="wp-block-column insg_tool_table_col has-background" style="background-color:#ffffff"><!-- wp:paragraph {"align":"center","textColor":"white","className":"insg_tt_btn_wrapper insg_tt_top_btn_wrapper","fontSize":"small"} -->
<p class="has-text-align-center insg_tt_btn_wrapper insg_tt_top_btn_wrapper has-white-color has-text-color has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener nofollow">Top Button</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":4092,"width":150,"height":35,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="https://www.insg.co/wp-content/themes/insg/images/Logo_White.png" alt="Logo White" class="wp-image-4092" width="150" height="35"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#333333"}},"className":"insg_tt_title"} -->
<p class="has-text-align-center insg_tt_title has-text-color" style="color:#333333">Site Title</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#333333"}},"className":"insg_tt_desc"} -->
<p class="has-text-align-center insg_tt_desc has-text-color" style="color:#333333">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt enim at tortor dignissim, eget volutpat ipsum ornare.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white","className":"insg_tt_btn_wrapper insg_tt_cta_btn_wrapper","fontSize":"small"} -->
<p class="has-text-align-center insg_tt_btn_wrapper insg_tt_cta_btn_wrapper has-white-color has-text-color has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener nofollow">Site Button</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#333333"}},"className":"aligncenter insg_tt_btn_wrapper insg_tt_review_btn_wrapper","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size aligncenter insg_tt_btn_wrapper insg_tt_review_btn_wrapper has-small-font-size"><a class="wp-block-button__link has-text-color has-background" style="background-color:#ffffff;color:#333333">Read Review →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"color":{"background":"#ffffff"}},"className":"insg_tool_table_col"} -->
<div class="wp-block-column insg_tool_table_col has-background" style="background-color:#ffffff"><!-- wp:paragraph {"align":"center","textColor":"white","className":"insg_tt_btn_wrapper insg_tt_top_btn_wrapper","fontSize":"small"} -->
<p class="has-text-align-center insg_tt_btn_wrapper insg_tt_top_btn_wrapper has-white-color has-text-color has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener nofollow">Top Button</a></p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":4092,"width":150,"height":35,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="https://www.insg.co/wp-content/themes/insg/images/Logo_White.png" alt="Logo White" class="wp-image-4092" width="150" height="35"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#333333"}},"className":"insg_tt_title"} -->
<p class="has-text-align-center insg_tt_title has-text-color" style="color:#333333">Site Title</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#333333"}},"className":"insg_tt_desc"} -->
<p class="has-text-align-center insg_tt_desc has-text-color" style="color:#333333">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tincidunt enim at tortor dignissim, eget volutpat ipsum ornare.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white","className":"insg_tt_btn_wrapper insg_tt_cta_btn_wrapper","fontSize":"small"} -->
<p class="has-text-align-center insg_tt_btn_wrapper insg_tt_cta_btn_wrapper has-white-color has-text-color has-small-font-size"><a href="#" target="_blank" rel="noreferrer noopener nofollow">Site Button</a></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"style":{"color":{"background":"#ffffff","text":"#333333"}},"className":"aligncenter insg_tt_btn_wrapper insg_tt_review_btn_wrapper","fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size aligncenter insg_tt_btn_wrapper insg_tt_review_btn_wrapper has-small-font-size"><a class="wp-block-button__link has-text-color has-background" style="background-color:#ffffff;color:#333333">Read Review →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
CONTENT;

	register_block_pattern(
		'insg/top-tools-table-pattern',
		array(
		    'title'       => __( 'INSG. Top Tools Table Pattern', 'insg' ),
		    'description' => _x( 'Custom Table view for websites partners.', 'Block pattern description', 'insg' ),
		    'content'     => $content,
		)
	);
}


add_action('init', 'insg_register_tools_table_block_pattern');

add_action('admin_head', function() {
	?>
<style>
	.insg_tool_table_col {
		border: 2px solid #333;
	}
</style>
<?php
});





