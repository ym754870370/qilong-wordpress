<?php
/*
Template Name: shipin
*/
?>
<?php get_header(); ?>
<style type="text/css">
	.shipinBox{
		width: 90%;
		margin: 20px auto;
	}
	.shipin h3{
		font-size: 25px;
		padding: 10px;
		text-align: center;
	}

</style>
	<div class="catePage">
		<div class="headeBanner"></div>
		<div class="cateContainer">
			<div class="cateSaide">
				<div class="sideBac">关于骑龙</div>
				<div class="sideList">
					<a href="<?php bloginfo('url'); ?>/?page_id=610">公司介绍</a>
					<a href="<?php bloginfo('url'); ?>/?page_id=623">公司证书</a>
					<a href="<?php bloginfo('url'); ?>/?page_id=612">公司荣誉</a>
					<a href="<?php bloginfo('url'); ?>/?page_id=615">公司视频</a>
					<a href="<?php bloginfo('url'); ?>/?page_id=617">联系我们</a>	
				</div>
			</div>
			<div class="cateContent">
				<div class="whereY">
					<h3>公司介绍</h3>
					<span><?php get_breadcrumbs(); ?></span>
				</div>
				<div class="artList">
					<script type="text/javascript"  src="<?php bloginfo('template_url'); ?>/js/cyberplayer.min.js"></script>
					<script type="text/javascript"  src="<?php bloginfo('template_url'); ?>/js/cyberplayer.html5.min.js"></script>
					<div class="shipin">
						<div class="shipinBox">
							<h3>百鸟基地山顶</h3>
							<div id="playercontainer1"></div>
	                         <!-- <%创建视频容器%> -->
	                        
	                        <script type="text/javascript">
						// var random = Math.floor(Math.random()*5
	                                var player = cyberplayer("playercontainer1").setup({
	                                flashplayer: "<?php bloginfo('template_url'); ?>/player/cyberplayer.flash.swf",
	                                width: "700",
	                                height: "500",
	                                backImages:"<?php bloginfo('template_url'); ?>/images/showPIC.jpg",
	                                stretching: "uniform",
	                                file: "http://vshare.ys7.com:80/openlive/569970561_1_1.m3u8?ticket=RlRkSi8vY1Z0N01DWUFXT3g1ZzBZcVNCakJ4OG9yYWErVDM3enhkV01xcz0kMSQyMDE3MDQyMjExMjkxOCQxNDYxMjk1MDM2MDAwJDE0OTI4MzEwMzYwMDAkMSQkJA==",
	                                autoStart: true,
	                                repeat: "always",
	                                volume: 100,
	                                controlbar: "over"
	                        });
	                        </script>
						</div>
						<div class="shipinBox">
							<h3>邬阳基地房顶右</h3>
							<div id="playercontainer2"></div>
	                         <!-- <%创建视频容器%> -->
	                        
	                        <script type="text/javascript">
					 // var random = Math.floor(Math.random()*5
	                                var player = cyberplayer("playercontainer2").setup({
	                                flashplayer: "<?php bloginfo('template_url'); ?>/player/cyberplayer.flash.swf",
	                                width: "700",
	                                height: "500",
	                                backcolor: "#FFFFFF",
	                                stretching: "uniform",
	                                file: "http://vshare.ys7.com:80/openlive/569970495_1_1.m3u8?ticket=cEl6K09WMGZDVzRmSzlPU0hCVitST1lwTmpOaktCbkdTSFRKbkduL2lMOD0kMSQyMDE3MDQyMjExMTk1OSQxNDYxMjk1MDM2MDAwJDE0OTI4MzEwMzYwMDAkMSQkJA==",
	                                autoStart: true,
	                                repeat: "always",
	                                volume: 100,
	                                controlbar: "over"
	                        });
	                        </script>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
