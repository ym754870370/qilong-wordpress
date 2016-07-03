<?php get_header(); ?>
	<div class="body">
		<div class="slidePic">
			
			<div style="position: relative;" class="slideshow grid_12">
                <div class="holder" style="">
                    <!-- 主体部分 -->
                    <div id="wowslider-container">
                        <div class="ws_images">
                            <ul>
                                
                                  <?php query_posts('cat=26&showposts=4&paged='.$page_num); ?> 
				        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<li>
                                    <a href="#overview">
                                        <img src="<?php echo catch_that_image() ?>" alt="123" title="" />
                                    </a>
                                    <?php the_title(); ?>
                                </li>
						<?php endwhile; ?>
						<?php else : ?>
						    文章仍在更新中
						<?php endif; ?>
                                <!-- <li>
                                    <a href="demo.html">
                                        <img src="images/data/images/cy5.0.png" alt="456" title="" />
                                    </a>
                                    标题2222
                                </li>
                                <li>
                                    <a href="http://wowslider.com/wowslider-free-setup.zip">
                                        <img src="images/data/images/art1.jpg" alt="789" title="标题1234" />
                                    </a>
                                    标题3333
                                </li>
                                <li>
                                	<a href="http://wowslider.com/wowslider-free-setup.zip">
                                    	<img src="images/data/images/cy2.33.jpg" alt="012" title="" />
                                    </a>
                                    标题3333
                                </li> -->
                            </ul>
                        </div>
                        <div class="ws_bullets">
                            <div>
                              
                                 <?php query_posts('cat=26&showposts=4&paged='.$page_num); ?> 
				        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								  <a href="#">
                                    <img src="<?php echo catch_that_image() ?>" alt="CSS3 Slider" />
                                </a>

						<?php endwhile; ?>
						<?php else : ?>
						    文章仍在更新中
						<?php endif; ?>
                               <!--  <a href="#">
                                    <img src="<?php echo catch_that_image() ?>" alt="CSS Slideshow" />
                                </a>
                                <a href="#">
                                    <img src="<?php echo catch_that_image() ?>" alt="CSS Gallery" />
                                </a>
                                <a href="#">
                                    <img src="<?php echo catch_that_image() ?>" alt="Video Support" />
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <!-- 主体部分. -->
                </div>
			</div>
		</div>
                    
		<div class="teaPro">
				<div class="lanrenzhijia">
				  <div class="title cf">
				    <h2 class="fl">茶的品种</h2>
				    <ul class="title-list fr cf ">
				      <li class="on">芽茶系列</li>
				      <li>7号烘青系列</li>
				      <li>8号烘青系列</li>
				      <li>9号烘青系列</li>
				      <li>10号炒青系列</li>
				      <li>白茶系列</li>
				      <li>生活茶系列</li>
				      <p><b></b></p>
				    </ul>
				  </div>
				  <div class="product-wrap">
				    <!--案例1-->
				    <div class="product show">
				      <ul class="cf">
				        
				        <?php query_posts('cat=6&showposts=4&paged='.$page_num); ?> 
					        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li class="ml0"> <a href="<?php the_permalink(); ?>" class="imgwrap"> <img src="<?php echo catch_that_image() ?>"> </a>
				          <p class="mt10"> <a href="#"><?php the_title(); ?> </a></p>
				        </li>
							<?php endwhile; ?>
							<?php else : ?>
							    文章仍在更新中
							<?php endif; ?>
				       <!--  <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li> -->
				      </ul>
				    </div>
				    <!--案例2-->
				    <div class="product">
				      <ul class="cf">
				      <?php query_posts('cat=16&showposts=4&paged='.$page_num); ?> 
					        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							    <li class="ml0"> <a href="<?php the_permalink(); ?>" class="imgwrap"> <img src="<?php echo catch_that_image() ?>"> </a>
				          <p class="mt10"> <a href="#"><?php the_title(); ?> </a></p>
				        </li>
							<?php endwhile; ?>
							<?php else : ?>
							    文章仍在更新中
							<?php endif; ?>
				       <!--  <li class="ml0"> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#">产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li> -->
				      </ul>
				    </div>
				    <!--案例3-->
				    <div class="product">
				      <ul class="cf">
				      <?php query_posts('cat=15&showposts=4&paged='.$page_num); ?> 
					        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							    <li class="ml0"> <a href="<?php the_permalink(); ?>" class="imgwrap"> <img src="<?php echo catch_that_image() ?>"> </a>
				          <p class="mt10"> <a href="#"><?php the_title(); ?> </a></p>
				        </li>
							<?php endwhile; ?>
							<?php else : ?>
							    文章仍在更新中
							<?php endif; ?>
				       <!--  <li class="ml0"> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#">产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li> -->
				      </ul>
				    </div>
				    <!--案例4-->
				    <div class="product">
				      <ul class="cf">
				      <?php query_posts('cat=13&showposts=4&paged='.$page_num); ?> 
					        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							    <li class="ml0"> <a href="<?php the_permalink(); ?>" class="imgwrap"> <img src="<?php echo catch_that_image() ?>"> </a>
				          <p class="mt10"> <a href="#"><?php the_title(); ?> </a></p>
				        </li>
							<?php endwhile; ?>
							<?php else : ?>
							    文章仍在更新中
							<?php endif; ?>
				        <!-- <li class="ml0"> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#">产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li> -->
				      </ul>
				    </div>
				    <!--案例5-->
				    <div class="product">
				      <ul class="cf">
				      <?php query_posts('cat=14&showposts=4&paged='.$page_num); ?> 
					        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							    <li class="ml0"> <a href="<?php the_permalink(); ?>" class="imgwrap"> <img src="<?php echo catch_that_image() ?>"> </a>
				          <p class="mt10"> <a href="#"><?php the_title(); ?> </a></p>
				        </li>
							<?php endwhile; ?>
							<?php else : ?>
							    文章仍在更新中
							<?php endif; ?>
				        <!-- <li class="ml0"> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#">产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li> -->
				      </ul>
				    </div>
				    <!--案例6-->
				    <div class="product">
				      <ul class="cf">
				      <?php query_posts('cat=7&showposts=4&paged='.$page_num); ?> 
					        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							    <li class="ml0"> <a href="<?php the_permalink(); ?>" class="imgwrap"> <img src="<?php echo catch_that_image() ?>"> </a>
				          <p class="mt10"> <a href="#"><?php the_title(); ?> </a></p>
				        </li>
							<?php endwhile; ?>
							<?php else : ?>
							    文章仍在更新中
							<?php endif; ?>
				       <!--  <li class="ml0"> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#">产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li> -->
				      </ul>
				    </div><!--案例7-->
				    <div class="product">
				      <ul class="cf">
				      <?php query_posts('cat=17&showposts=4&paged='.$page_num); ?> 
					        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							    <li class="ml0"> <a href="<?php the_permalink(); ?>" class="imgwrap"> <img src="<?php echo catch_that_image() ?>"> </a>
				          <p class="mt10"> <a href="#"><?php the_title(); ?> </a></p>
				        </li>
							<?php endwhile; ?>
							<?php else : ?>
							    文章仍在更新中
							<?php endif; ?>
				       <!--  <li class="ml0"> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#">产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字</a></p>
				          <p class="pb10">产品描述信息</p>
				        </li>
				        <li> <a href="#" class="imgwrap"> <img src="images/showPIC.jpg"> </a>
				          <p class="mt10"> <a href="#"> 产品名字 </a></p>
				          <p class="pb10">产品描述信息</p>
				        </li> -->
				      </ul>
				    </div>
				  </div>
				</div>

			<div class="preContent"></div>
	</div>
		<div class="teaBanner">
			
		</div>
		<div class="teaAbout">
			<div class="teawenhua">
				<div class="teaAboutPic"></div>
				<div class="teaAboutContent">
					<h3><a href="<?php bloginfo('url'); ?>/?cat=5">中国茶文化</a></h3>
					<hr>
					<p>了解中华茶文化，传承茶道精髓。</p>
				</div>
			</div>
			<div class="teaxiangqing">
				<div class="teaAboutPic"></div>
				<div class="teaAboutContent">
					<h3><a href="<?php bloginfo('url'); ?>/?page_id=610">公司详情</a></h3>
					<hr>
					<p>了解中华茶文化，传承茶道精髓。</p>
				</div>
			</div>
			<div class="teagonggao">
				<div class="teaAboutPic"></div>
				<div class="teaAboutContent">
					<h3><a href="<?php bloginfo('url'); ?>/?cat=24">信息公告</a></h3>
					<hr>
					<p>了解中华茶文化，传承茶道精髓。</p>
				</div>
			</div>
			<div class="teazeren">
				<div class="teaAboutContent">
					<h3><a href="<?php bloginfo('url'); ?>/?cat=18">社会责任</a></h3>
					<hr>
					<p>了解中华茶文化，传承茶道精髓。</p>
				</div>
				<div class="teaAboutPic"></div>
			</div>
			<div class="teashishi">
				<div class="teaAboutPic"></div>
				<div class="teaAboutContent">
					<h3><a href="<?php bloginfo('url'); ?>/?page_id=615">实时监控视频</a></h3>
					<hr>
					<p>了解中华茶文化，传承茶道精髓。</p>
				</div>
			</div>
		</div>
		<div class="teaMes">
			<div class="mes">
				<div class="tel">客服服务电话:0718-5348008</div>
				<div class="email">邮箱:qilongchaye@126.com</div>
				<div class="cTel">传真:0718-5348008</div>
			</div>
		</div>
	</div>
				<?php get_footer(); ?>
