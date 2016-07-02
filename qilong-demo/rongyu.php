<?php
/*
Template Name: rongyu
*/
?>
<?php get_header(); ?>
<style type="text/css">
	.zhengshu{
		padding: 30px;
		overflow: hidden;
	}
	.zhengshuBox{
		width: 50%;
		float: left;
		height: 250px;
		overflow: hidden;
	}
	.zhengshuBox img{
		display: block;
		width: 95%;
		margin: 10px auto;
	}
</style>
	<div class="catePage">
		<div class="headeBanner"></div>
		<div class="cateContainer">
			<div class="cateSaide">
				<div class="sideBac">关于骑龙</div>
				<div class="sideList">
					<a href="<?php bloginfo('url'); ?>/?page_id=98">公司介绍</a>
					<a href="<?php bloginfo('url'); ?>/?page_id=107">公司证书</a>
					<a href="<?php bloginfo('url'); ?>/?page_id=113">公司荣誉</a>
					<a href="<?php bloginfo('url'); ?>/?page_id=109">公司视频</a>
					<a href="<?php bloginfo('url'); ?>/?page_id=102 ">联系我们</a>	
				</div>
			</div>
			<div class="cateContent">
				<div class="whereY">
					<h3>公司介绍</h3>
					<span><?php get_breadcrumbs(); ?></span>
				</div>
				<div class="artList">
					<div class="zhengshu">
						<?php query_posts('cat=39&showposts=4&paged='.$page_num); ?> 
					        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="zhengshuBox">
							<img src="<?php echo catch_that_image() ?>">
							</div>
							<?php endwhile; ?>
							<?php else : ?>
							    文章仍在更新中
							<?php endif; ?>
						<!-- <div class="zhengshuBox">
							<img src="<?php bloginfo('template_url'); ?>/images/rongyu1.jpg">
						</div>
						<div class="zhengshuBox">
							<img src="<?php bloginfo('template_url'); ?>/images/rongyu1.jpg">
						</div>
						<div class="zhengshuBox">
							<img src="<?php bloginfo('template_url'); ?>/images/rongyu1.jpg">
						</div>
						<div class="zhengshuBox">
							<img src="<?php bloginfo('template_url'); ?>/images/rongyu1.jpg">
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
