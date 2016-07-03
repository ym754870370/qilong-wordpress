<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no">
<title><title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title></title>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/images/engine/style.css" media="screen" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/images/engine/jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/tabs.js"></script>
</head>
<body>
	
	<div class="header">
		<div class="logo"></div>
		<div class="navBar">
		<?php 
	    // 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
	    wp_nav_menu( array( 'menu' => 'mymenu', 'depth' => 1) );
	?>
			<!-- <ul>
				<li><a href="#">首页</a></li>
				<li><a href="#">关于我们</a></li>
				<li><a href="#">产品介绍</a></li>
				<li><a href="#">社会责任</a></li>
				<li><a href="#">中国文化</a></li>
				<li><a href="#">骑龙风光</a></li>
				<li><a href="#">信息公告</a></li>
				<li><a href="#">联系我们</a></li>
			</ul> -->
		</div>
	</div>