<?php
/**
 * Default header
 */
return array(
	'title'      => __( 'Header default', 'ona' ),
	'categories' => array( 'ona-headers' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"4%","left":"4%","top":"30px","bottom":"30px"}}},"layout":{"inherit":false}} -->
			<div class="wp-block-group" style="padding-top:30px;padding-right:4%;padding-bottom:30px;padding-left:4%"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0px"}},"className":"is-style-no-spacing"} -->
			<div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile is-style-no-spacing"><!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:site-title {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"10px"}},"className":"ona-site-title","fontFamily":"base"} /-->

			<!-- wp:site-tagline {"style":{"typography":{"fontSize":"12px"}}} /--></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:navigation {"textColor":"foreground","overlayMenu":"mobile","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
			<!-- wp:navigation-link {"label":"' . __( 'Home', 'ona' ) . '","url":"/","kind":"custom","isTopLevelLink":true} /-->

			<!-- wp:navigation-submenu {"label":"' . __( 'News', 'ona' ) . '","url":"#","kind":"custom","isTopLevelItem":true} -->
			<!-- wp:navigation-link {"label":"' . __( 'Archive', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->

			<!-- wp:navigation-link {"label":"' . __( 'Single Post', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":false} /-->
			<!-- /wp:navigation-submenu -->

			<!-- wp:navigation-link {"label":"' . __( 'About', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->

			<!-- wp:navigation-link {"label":"' . __( 'Contact', 'ona' ) . '","url":"#","kind":"custom","isTopLevelLink":true} /-->
			<!-- /wp:navigation --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"hide-sm-down"} -->
			<div class="wp-block-column is-vertically-aligned-center hide-sm-down" style="flex-basis:25%"><!-- wp:social-links {"iconBackgroundColor":"foreground","iconBackgroundColorValue":"#000000","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"blockGap":"10px"}}} -->
			<ul class="wp-block-social-links has-icon-background-color"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

			<!-- wp:social-link {"url":"#","service":"facebook"} /-->

			<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
			<!-- /wp:social-links --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->',
);



