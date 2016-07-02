<?php
/*
Template Name: lianxi
*/
?>
<?php get_header(); ?>
<style type="text/css">
	.videoBox{
		margin: 20px 0px;
	}
	.companyIntro h3{
		font-size: 25px;
		text-align: center;
	}
	.lianxi{
		padding: 30px;
	}
	.listMes strong{
		color: black;
		font-weight: bolder;
	}
	.listMes{
		font-size: 20px;
		line-height: 40px;
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
					<h3>联系我们</h3>
					<span><?php get_breadcrumbs(); ?></span>
				</div>
				<div class="artList">
					<div class="lianxi">
						<div class="listMes"><strong>客服服务电话</strong> : 0718-5348008</div>
						<div class="listMes"><strong>传真</strong> : 0718-5348008</div>
						<div class="listMes"><strong>邮箱</strong> : qilongchaye@126.com</div>
						<div class="listMes"><strong>网址</strong> : www.qilongchaye.com</div>
						<div class="listMes"><strong>负责人</strong> : 郭国</div>
						<div class="listMes"><strong>地址</strong> : 湖北省土家族苗族自治洲鹤峰县邬阳乡湾潭河村</div>
						<div class="listMes"><strong>农产品质量安全信息服务系统</strong> : <a href="http://www.apqts.com">http://www.apqts.com</a></div>
						<div class="listMes"><strong>农产品质量安全追溯平台</strong> : <a href="http://www.apqte.com">http://www.apqte.com</a></div>
					</div>
					<div style="margin:0px auto;width:95% !important;height:400px !important;border:#ccc solid 1px;" id="dituContent"></div>

				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(110.194033,30.158007);//定义一个中心点坐标
        map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
    var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
    map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
    var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
    map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
    var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
    map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"骑龙茶叶",content:"骑龙茶叶有限公司",point:"110.194742|30.157898",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
         ];
    //创建marker
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
            var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
            var iw = createInfoWindow(i);
            var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
            marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
            
            (function(){
                var index = i;
                var _iw = createInfoWindow(i);
                var _marker = marker;
                _marker.addEventListener("click",function(){
                    this.openInfoWindow(_iw);
                });
                _iw.addEventListener("open",function(){
                    _marker.getLabel().hide();
                })
                _iw.addEventListener("close",function(){
                    _marker.getLabel().show();
                })
                label.addEventListener("click",function(){
                    _marker.openInfoWindow(_iw);
                })
                if(!!json.isOpen){
                    label.hide();
                    _marker.openInfoWindow(_iw);
                }
            })()
        }
    }
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
<?php get_footer(); ?>
