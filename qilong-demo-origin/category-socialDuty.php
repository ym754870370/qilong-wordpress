<?php get_header(); ?>

	<div class="catePage">
		<div class="headeBanner"></div>
		<div class="cateContainer">
			<div class="cateSaide">
				<div class="sideBac"><?php single_cat_title(''); ?></div>
				<div class="sideList">
					<a href="<?php bloginfo('url'); ?>/?cat=10">精准扶贫</a>
					<a href="<?php bloginfo('url'); ?>/?cat=11">领导关怀</a>
					
				</div>
			</div>
			<div class="cateContent">
				<div class="whereY">
					<h3><?php single_cat_title(''); ?></h3>
					<span><?php get_breadcrumbs(); ?></span>
				</div>
				<div class="artList">
					<ul>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><?php the_time('Y-m-d'); ?> </li>

                    <?php endwhile; ?>
                    <?php else : ?>
                        暂时还没有文章哦
                    <?php endif; ?>
					
						<!-- <li><a href="#">行业新闻行业新闻行业新闻行业新闻行业新闻</a>2014-01-01</li>
						<li><a href="#">行业新闻行业新闻行业新闻行业新闻行业新闻</a>2014-01-01</li>
						<li><a href="#">行业新闻行业新闻行业新闻行业新闻行业新闻</a>2014-01-01</li>
						<li><a href="#">行业新闻行业新闻行业新闻行业新闻行业新闻</a>2014-01-01</li>
						<li><a href="#">行业新闻行业新闻行业新闻行业新闻行业新闻</a>2014-01-01</li>
						<li><a href="#">行业新闻行业新闻行业新闻行业新闻行业新闻</a>2014-01-01</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"><p>版权所有 © 2007-2015 鄂ICP备16007743号-1 湖北鹤峰县骑龙茶叶有限公司首页<br/>
技术支持<a href="http://www.scuec.edu.cn/" target="blank">中南民族大学</a> <a target="blank" href="http://www.new-thread.com/">NewThread</a> 地址：武汉市洪山区民院路708号 邮编:430074</p></div>
	<script type="text/javascript" src="images/engine/wowslider.js"></script>
    <script type="text/javascript" src="images/engine/script.js"></script>
</body>
</html>
