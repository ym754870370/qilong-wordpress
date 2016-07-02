<div class="footer"><p>版权所有 © 2007-2015 <a href="http://www.miitbeian.gov.cn/">鄂ICP备16007743号-1</a> 湖北鹤峰县骑龙茶业有限公司首页<br/>
        技术支持<a href="http://www.scuec.edu.cn">中南民族大学</a>
        <a href="http://www.new-thread.com/">NewThread</a>  地址：武汉市洪山区民院路708号 邮编:430074</p></div>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/images/engine/wowslider.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/images/engine/script.js"></script>
    <div class="bacTop">
    	<div class="erweimaMark"><img src="<?php bloginfo('template_url'); ?>/images/QRcode-icon.png"></div>
    	<div class="topmark"><img src="<?php bloginfo('template_url'); ?>/images/top.png"></div>
    	
    </div>
    <div class="erweima">
    		<img src="<?php bloginfo('template_url'); ?>/images/qilonguanwang.png">骑龙茶业官方网站
    		<img src="<?php bloginfo('template_url'); ?>/images/qilongguanwei.jpg">骑龙茶业微信公众号
    		<img src="<?php bloginfo('template_url'); ?>/images/weixinxiaodian.jpg">骑龙茶业微信小店
    		<img src="<?php bloginfo('template_url'); ?>/images/zhuishupingtai.png">农产品质量安全信息服务系统
    		<img src="<?php bloginfo('template_url'); ?>/images/disanfangpingtai.png">农产品质量追述平台
    	</div>
    <style type="text/css">
    	.bacTop{
    		width: 40px;
    		height: 80px;
    		position: fixed;
    		right: 10px;
    		bottom: 10px;
    		z-index: 3;

    	}
    	.bacTop>div{
    		margin-top: 7px;
    		background-color: gray;
    	}
    	.bacTop>div img{
    		width: 100%;
    	}

    	.erweima {
    		position: fixed;
    		bottom: 80px;
    		right: -100px;
    		z-index: 3;
    		width: 100px;
    		font-size: 12px;
    		text-align: center;
    	}
    	.erweima img{
    		margin: 0px 0px;
    		width: 100%;
    	}
    </style>
    <script type="text/javascript">
    	$(function(){
    		$(".erweimaMark").mouseover(function(){
    			$(".erweima").animate({"right":"10px"},500)
    		})
    		$(".erweimaMark").mouseout(function(){
    			$(".erweima").animate({"right":"-100px"},500)
    		})
    		$(".topmark").click(function(){
    			$('body,html').animate({scrollTop:0},300);  
    		})
    	})
    </script>
</body>
</html>
