<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width", initial-scale="1.0"/>
	<title><?php bloginfo('title');?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>"/>
	<?php wp_head();?>
</head>
<body>


<div class="container_12">

	<div id="follow"><p>Follow Nutrition Dude</p><span id="fb-icon"><a href="https://www.facebook.com/nutritiondude" target="_blank"><img src="<?php bloginfo('template_directory')?>/images/fb-icon.png " width='25px' alt='follow nutrition dude'/></a></span></div>
	<header>
		
		<a id="logo" href="<?php echo home_url('/');?>"><img src="<?php bloginfo('template_directory')?>/images/logo.png"  alt="Nutrition Dude"/></a>
	
	

	<nav id="main-nav">
		<?php wp_nav_menu(array(
			'menu_id' => 'nd',
		));?>
	</nav>

</div><!--/container_12-->
</header>
	
