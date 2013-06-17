<!DOCTYPE HTML>
<!--[if IE 6]><html class="ie6 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="ie7 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="ie8 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if IE 9]><html class="ie9 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9) ]><!--><html lang="en" dir="ltr" class="no-js"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>民泰贵金属</title>
<link rel="shortcut icon" href="/resources/template/favicon.ico" />
<link rel="stylesheet" href="/resources/template/css/reset.css" />
<link rel="stylesheet" href="/resources/template/css/public.css" />
<!--[if IE]>
<script src="/resources/template/js/ie/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<style type="text/css">.css3{behavior: url(/resources/template/js/ie/css3.htc);-pie-lazy-init: true; position: relative;}.ie6png{-pie-png-fix: true;}</style>
<script src="/resources/template/js/ie/ie9.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="/resources/template/js/ie/png.js"></script>
<script>DD_belatedPNG.fix('.pngfix, .pngfix img');</script>
<![endif]-->
<script src="/resources/template/js/ie/modernizr.js"></script>
<script src="/resources/template/js/jquery/jquery.js"></script>
<script src="/resources/template/js/jquery/jquery.tools.min.js"></script>
<script>
$(document).ready(function(){
	$("#serviceBtn").bind("hover",function(){
		$("#onLineService").animate({width:"show", opacity:"show"}, "normal" ,function(){
			$("#onLineService").show();
		});
		$("#serviceBtn").attr("style","display:none");
		$("#serviceBtn2").attr("style","display:block");
		return false;
	});
	$("#ServiceBox").bind("hover",function(){
		$("#onLineService").animate({width:"hide", opacity:"hide"}, "normal" ,function(){
			$("#onLineService").hide();
		});
		$("#serviceBtn").attr("style","display:block");
		$("#serviceBtn2").attr("style","display:none");
		return false;
	});

	var menuYloc = $("#ServiceBox").offset().top;  
    $(window).scroll(function (){  
        var offsetTop = menuYloc + $(window).scrollTop() +"px";  
        $("#ServiceBox").animate({top : offsetTop },{ duration:700 , queue:false });  
    });
});

var timeout         = 0;
var closetimer		= 0;
var ddmenuitem      = 0;
function Subnav_open()
{	Subnav_canceltimer();
	Subnav_close();
	ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}
function Subnav_close()
{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}
function Subnav_timer()
{	closetimer = window.setTimeout(Subnav_close, timeout);}
function Subnav_canceltimer()
{	if(closetimer)
	{	window.clearTimeout(closetimer);
		closetimer = null;}}
$(document).ready(function()
{	$('#nav > ul > li').bind('mouseover', Subnav_open);
	$('#nav > ul > li').bind('mouseout',  Subnav_timer);});
document.onclick = Subnav_close;
</script>
</head>
<body>
<div class="gridsystem top-wrap cf">
	<header id="header" class="cf">
		<div class="header-top pngfix cf">
	    	<h1 id="logo" class="pngfix">
	    		<a href="/">
	    			<img src="/resources/template/images/logo.png" alt="民泰贵金属" title="民泰贵金属" />
	    		</a>
	    	</h1>
    	</div>
        <nav id="nav" class="css3 cf">
        	<ul>
        		<li><a class="acitve" href="/">首 页</a></li>
        		<li><a href="products.html">产品介绍</a>
					<ul>
						<li><a href="/item/show/product_detail">产品详情</a></li>
						<li><a href="/item/show/pro_features">投资特点</a></li>
						<li><a href="/item/show/pro_trade">交易细则</a></li>
						<li><a href="/item/show/pro_case">投资案例</a></li>
						<li><a href="/item/show/pro_guarantee">投资者权益保障</a></li>
					</ul>
        		</li>
        		<li><a href="aboutus.html">公司资质</a>
					<ul>
						<li><a href="/item/show/aboutus">公司简介</a></li>
						<li><a target="_blank" href="/item/show/about_advantage">民泰优势</a></li>
						<li><a href="/item/show/about_license">资质证书</a></li>
						<li><a target="_blank" href="/item/show/about_news">媒体报道</a></li>
						<li><a href="/item/show/about_mcx">关于交易所</a></li>
					</ul>
        		</li>
        		<li><a href="research.html">民泰研究所</a>
					<ul>
						<li><a target="_blank" href="/analyst/analyst_list">明星团队</a></li>
						<li><a href="/item/show/research">原创研究</a></li>
						<li><a href="#">盘面播报</a></li>
						<li><a href="research-analyse.html">分析评论</a></li>
						<li><a href="research-video.html">市场要闻</a></li>
						<li><a href="research-price.html">行情中心</a></li>
					</ul>
        		</li>
        		<li><a href="guide.html">新手指南</a>
					<ul>
						<li><a href="/item/show/guide">新手入门</a></li>
						<li><a target="_blank" href="/item/show/online_variety">开户指南</a></li>
						<li><a href="/item/show/guide_notice">交易须知</a></li>
					</ul>
        		</li>
        		<li><a href="invest.html">投资入门</a>
					<ul>
						<li><a href="/item/show/invest">投资入门</a></li>
						<li><a href="#">投资技巧</a></li>
						<li><a href="/item/show/invest_guide">名师指导</a></li>
						<li><a target="_blank" href="/item/show/online_faq">常见问题</a></li>
						<li><a href="/item/show/invest_imitate">注册模拟帐户</a></li>
					</ul>
        		</li>
        		<li><a href="sdownload.html">软件下载</a>
					<ul>
						<li><a href="/item/show/sdownload">软件下载</a></li>
						<li><a href="/item/show/svideo">软件操作视频</a></li>
					</ul>
        		</li>
        		<li><a target="_blank" href="/item/show/app_ios">手机交易</a>
					<ul>
						<li><a target="_blank" href="/item/show/app_ios">IOS版下载</a></li>
						<li><a target="_blank" href="/item/show/app_android">Android版下载</a></li>
					</ul>
        		</li>
        		<li><a href="news.html">媒体报道</a>
					<ul>
						<li><a href="/news/">媒体报道</a></li>
					</ul>
        		</li>
        		<li><a href="/user/form">在线咨询</a>
					<ul>
						<li><a href="/user/form">预约开户</a></li>
						<li><a href="/item/show/online_variety">开户流程</a></li>
						<li><a href="/item/show/online_tutor">签约辅导</a></li>
						<li><a href="/item/show/online_faq">常见问题</a></li>
					</ul>
        		</li>
        	</ul>
        </nav>
    </header>
</div><!-- //header -->



