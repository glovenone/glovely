<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>



	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	

	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->



	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



	<?php wp_get_archives('type=monthly&format=link'); ?>

	<?php //comments_popup_script(); // off by default ?>

	<?php wp_head(); ?>

</head>

<body>	

<div id = "header">

	<h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a></h1>
	<div id="title_2"><?php bloginfo('description'); ?></div>


<ul id="nav">

<!--	<li><a title="Home" <?php if (is_home()) { echo 'class="current-cat"';} ?> href="/wordpress">Home</a></li>		-->
	<?php
		$currentcategory = '';
		if(!is_page() && !is_home()) 
		{
			$catsy = get_the_category();
			$myCat = $catsy[0]->cat_ID;
			$currentcategory = '&current_category='.$myCat;
		}	
		// 添加分类列表
		wp_list_categories('depth=1&title_li=&show_count=0&hide_empty=0&child_of=0'.$currentcategory);
		
		// 添加页面列表
		wp_list_pages('depth=1&title_li=&sort_column=menu_order');
	?>
</ul>

</div>
