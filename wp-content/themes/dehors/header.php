<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <?php add_action( 'wp_head', 'mp6_override_toolbar_margin', 11 );
function mp6_override_toolbar_margin() {
	if ( is_admin_bar_showing() ) { ?>
		<style type="text/css" media="screen">
			html { margin-top: 0px !important; }
			* html body { margin-top: 0px !important; }
		</style>
	 <?php }
} ?>
<head profile="http://gmpg.org/xfn/11">
 
	<title>DE-HORS</title>
 
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!--
/**
 * @license
 * MyFonts Webfont Build ID 2971871, 2015-02-13T08:11:55-0500
 * 
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are 
 * explicitly restricted from using the Licensed Webfonts(s).
 * 
 * You may obtain a valid license at the URLs below.
 * 
 * Webfont: ProximaNova-RegularIt by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova/regular-it/
 * 
 * Webfont: ProximaNova-BoldIt by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova/bold-it/
 * 
 * Webfont: ProximaNova-Regular by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova/regular/
 * 
 * Webfont: ProximaNova-Bold by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova/bold/
 * 
 * 
 * License: http://www.myfonts.com/viewlicense?type=web&buildid=2971871
 * Licensed pageviews: 1,000,000
 * Webfonts copyright: Copyright (c) Mark Simonson, 2005. All rights reserved.
 * 
 * © 2015 MyFonts Inc
*/

-->
	<link rel="stylesheet" type="text/css" href="http://localhost:8888/wp-content/themes/dehors/MyFontsWebfontsKit.css"/>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

 	<?php wp_head(); ?>
     


</head>
<body>
