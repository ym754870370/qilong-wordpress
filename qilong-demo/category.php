<?php get_header(); ?>

	<div class="catePage">
		<div class="headeBanner"></div>
		<div class="cateContainer">
			<div class="cateSaide">
				<div class="sideBac"><?php single_cat_title(''); ?></div>
				<div class="sideList">
					<a href="<?php bloginfo('url'); ?>"></a>
					<a href="<?php bloginfo('url'); ?>"></a>
					<a href="<?php bloginfo('url'); ?>"></a>
					<a href="<?php bloginfo('url'); ?>"></a>
					<a href="<?php bloginfo('url'); ?>"></a>	
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
				<div class="page_navi"><?php par_pagenavi(9); ?></div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
