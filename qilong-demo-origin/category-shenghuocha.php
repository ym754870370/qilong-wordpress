<?php get_header(); ?>

	<div class="catePage">
		<div class="headeBanner"></div>
		<div class="cateContainer">
			<div class="cateSaide">
				<div class="sideBac"><?php single_cat_title(''); ?></div>
				<div class="sideList">
					<a href="<?php bloginfo('url'); ?>/?cat=6">芽茶系列</a>
					<a href="<?php bloginfo('url'); ?>/?cat=16">7号烘青系列</a>
					<a href="<?php bloginfo('url'); ?>/?cat=15">8号烘青系列</a>
					<a href="<?php bloginfo('url'); ?>/?cat=13">9号烘青系列</a>
					<a href="<?php bloginfo('url'); ?>/?cat=14">10号烘青系列</a>
					<a href="<?php bloginfo('url'); ?>/?cat=7">白茶系列</a>
					<a href="<?php bloginfo('url'); ?>/?cat=17">生活茶系列</a>
				</div>
			</div>
			<div class="cateContent">
				<div class="whereY">
					<h3><?php single_cat_title(''); ?></h3>
					<span><?php get_breadcrumbs(); ?></span>
				</div>
				<div class="artList">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="proBox">
						<a href="<?php the_permalink(); ?>" class="procon">
							<div class="proPic"><img src="<?php echo catch_that_image() ?>"></div>
							<h4><?php the_title(); ?></h4>
						</a>
					</div>
                    <?php endwhile; ?>
                    <?php else : ?>
                        暂时还没有文章哦
                    <?php endif; ?>
					
					<!-- <div class="proBox">
						<a href="#" class="procon">
							<div class="proPic"><img src="images/gongsixiangqing.png"></div>
							<h4>绿茶某某</h4>
						</a>
					</div>
					<div class="proBox">
						<a href="#" class="procon">
							<div class="proPic"><img src="images/gongsixiangqing.png"></div>
							<h4>绿茶某某</h4>
						</a>
					</div>
					<div class="proBox">
						<a href="#" class="procon">
							<div class="proPic"><img src="images/gongsixiangqing.png"></div>
							<h4>绿茶某某</h4>
						</a>
					</div>
					<div class="proBox">
						<a href="#" class="procon">
							<div class="proPic"><img src="images/gongsixiangqing.png"></div>
							<h4>绿茶某某</h4>
						</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
