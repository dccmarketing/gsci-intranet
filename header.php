<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<title>GSCI Intranet <?php wp_title('|',true,'left'); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fluidity.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hover.css" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.7.2.min.js"></script>

<script>
jQuery(function($){
	$(".ai1ec-field-label").text(function () {
	    return $(this).text().replace("Categories", "Locations"); 
	});
	$(".ai1ec-dropdown-toggle").text(function () {
	    return $(this).text().replace("Categories", "Select A Location"); 
	});
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45723406-15', 'auto');
  ga('send', 'pageview');

</script>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>


</head>

<body style="margin:0;">


<div id="greenbg">
	<div class="container">
		<div class="whitebg">
			<div id="header">
				<a href="../../../../../../../../../">
					<div id="logo" class="fleft">
						<a href="../../../../../../../../../"><img src="/images/logo.png"></a>
					</div>
				</a>
				<div id="social" class="fleft">
					<?php get_template_part('social'); ?>
				</div>
				<br style="clear:both" />
			</div>
			<div id="nav"><?php ubermenu( 'main' , array( 'menu' => 2 ) ); ?></div>
			<div id="greenline"></div>
			<div id="corner"><img src="/images/corner.png"></div>