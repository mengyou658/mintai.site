<!DOCTYPE HTML>
<!--[if IE 6]><html class="ie6 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 7]><html class="ie7 ielt9 no-css3 no-js lte7" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="ie8 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if IE 9]><html class="ie9 ielt9 no-css3 no-js" lang="en" dir="ltr"><![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9) ]><!--><html lang="en" dir="ltr" class="no-js"><!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>操盘密码 - 民泰经典操盘线 - 民泰贵金属</title>
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
<style>
body {
	background: url(/resources/template/images/bg-body.png) repeat-x center top #F3F3F3;
}
.s-table {
	width: 100%;
}
.s-footer a {
	color: #000;
}
.input {
    width: 158px;
    border: solid 0px;
    height:24px;
    line-height:24px;
}
</style>
<script src="/resources/template/js/ie/modernizr.js"></script>
<script src="/resources/template/js/jquery/jquery.js"></script>
<script>
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
<script>
function checkForm() {
    if (document.getElementById("tb_name").value == "") {
        alert("姓名不能为空！");
        return false;
    }

    if (document.getElementById("tb_phone").value == "") {
        alert("电话不能为空！");
        return false;
    }
    else {
        if (!(/^(13[0-9]|15[0-9]|18[0-9])\d{8}$/.test($("#tb_phone").val()))) {
            alert("手机号有误!");
            return false;
        }
    }

	var reg_form = document.getElementById("reg_form");
	reg_form.submit();
}
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
        		<li><a href="/">首 页</a></li>
        		<li><a href="#">产品介绍</a>
					<ul>
						<li><a href="#">产品详情</a></li>
						<li><a href="#">投资特点</a></li>
						<li><a href="#">交易细则</a></li>
						<li><a href="#">投资案例</a></li>
						<li><a href="#">投资者权益保</a></li>
					</ul>
        		</li>
        		<li><a href="#">公司资质</a>
					<ul>
						<li><a href="#">公司简介</a></li>
						<li><a href="#">民泰优势</a></li>
						<li><a href="#">资质证书</a></li>
						<li><a href="#">所获荣誉</a></li>
						<li><a href="#">媒体报道</a></li>
						<li><a href="#">关于交易所</a></li>
					</ul>
        		</li>
        		<li><a href="#">民泰研究所</a>
					<ul>
						<li><a href="#">明星团队</a></li>
						<li><a href="#">原创研究</a></li>
						<li><a href="#">盘面播报</a></li>
						<li><a href="#">分析评论</a></li>
						<li><a href="#">市场要闻</a></li>
						<li><a href="#">行情中心</a></li>
					</ul>
        		</li>
        		<li><a href="#">新手指南</a>
					<ul>
						<li><a href="#">新手入门</a></li>
						<li><a href="#">开户指南</a></li>
						<li><a href="#">交易须知</a></li>
					</ul>
        		</li>
        		<li><a href="#">投资入门</a>
					<ul>
						<li><a href="#">投资入门</a></li>
						<li><a href="#">投资技巧</a></li>
						<li><a href="#">名师指导</a></li>
						<li><a href="#">常见问题</a></li>
						<li><a href="#">注册模拟帐户</a></li>
					</ul>
        		</li>
        		<li><a href="sdownload.html">软件下载</a>
					<ul>
						<li><a href="sdownload.html">软件下载</a></li>
						<li><a href="svideo.html">软件操作视频</a></li>
					</ul>
        		</li>
        		<li><a href="#">手机交易</a>
					<ul>
						<li><a href="#">IOS版下载</a></li>
						<li><a href="#">Android版下载</a></li>
					</ul>
        		</li>
        		<li><a href="news.html">媒体报道</a>
					<ul>
						<li><a href="#">媒体报道</a></li>
					</ul>
        		</li>
        		<li><a href="online.html">在线咨询</a>
					<ul>
						<li><a href="#">预约开户</a></li>
						<li><a href="#">开户流程</a></li>
						<li><a href="#">签约辅导</a></li>
						<li><a href="#">常见问题</a></li>
					</ul>
        		</li>
        	</ul>
        </nav>
    </header>
</div><!-- //header -->


<div class="wrapper cf">
	<div id="container" class="gridsystem cf">
		
		<table class="s-table">
        	<tr>
            	<td style="background:url(/resources/template/images/trader/banner2.jpg) no-repeat left top; height:368px;" valign="top">
					<table cellpadding="0" cellspacing="0" width="100%" align="center">
						<form action="/register/tryReg" method="post" id="reg_form">
	                    <tr>
	                        <td height="176" width="145">&nbsp;</td>
	                        <td valign="top">
	                            <table cellpadding="0" cellspacing="0" width="100%">
	                                <tr>
	                                    <td height="38" width="290">&nbsp;</td>
	                                    <td>&nbsp;</td>
	                                    <td width="36">&nbsp;</td>
	                                </tr>
	                                <tr>
	                                    <td height="25">&nbsp;</td>
	                                    <td align="center"><a href="http://www.mintai166.com/Default.aspx?kind=首页操盘密码" target="_blank" style="font-size:14px;">贵金属手机行情、模拟交易、实盘喊单--访问民泰官方网站，解决您所有交易问题</a></td>
	                                    <td>&nbsp;</td>
	                                </tr>
	                            </table>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td height="32">&nbsp;</td>
							<td height="30">
						<input id="tb_name" name="name" class="input" type="text" /></td>
	                    </tr>
	                    <tr>
							<td height="44">&nbsp;</td><td>
<input name="type" type="hidden" value="使用-2" class="input" type="text" />
<input id="tb_phone" name="phone" class="input" type="text" /></td>
	                    </tr>
	                    <tr>
	                        <td height="85" colspan="2" valign="bottom">
	                        	<table cellpadding="0" cellspacing="0" width="83%" align="center" style="margin:auto;">
	                                <tr>
										<td height="93"><input type="image" name="ctl00$ContentPlaceHolder1$btn_ok" id="ContentPlaceHolder1_btn_ok" src="/resources/template/images/trader/ok.png" onclick="return checkForm();" />
</td>
	                            	</tr>
	                            </table>
	                        </td>
	                    </tr>
	                    <tr>
	                    	<td height="19"></td><td height="19"><a href="#" target="_blank" style="width:160px; height:19px; display:block;"></a></td>  
	          			</tr>
					</form>
	            	</table>
            	</td>
        	</tr>
    	</table>
	    <table class="s-table">
	        <tr>
				<td>
							<?php
								if($this->session->flashdata('success'))
								{
									echo "<br/><span style='color:red;'>" . $this->session->flashdata('success') . "</span><br/><br/>";		
								}
								else
								{
									?>
<img alt="" src="/resources/template/images/trader/1.jpg" />
									<?php
								}
							?>
	            </td>
	        </tr>
	        <tr>
	            <td><img alt="" src="/resources/template/images/trader/2.jpg" /></td>
	        </tr>
	        <tr>
	            <td><img alt="" src="/resources/template/images/trader/3.jpg" /></td>
	        </tr>
	        <tr>
	            <td><img alt="" src="/resources/template/images/trader/4.jpg" /></td>
	        </tr>
	    </table>
	    <table class="s-table s-footer">
	        <tr>
	            <td style="line-height:24px; text-align:center;"><a href="/WEB/AboutUs.aspx" target="_blank">关于我们</a> | <a href="/WEB/ArticleList.aspx?CID=33" target="_blank">常见问题</a> | <a href="/WEB/RisksPrompt.aspx" target="_blank">风险提示</a> | <a href="/WEB/ArticleShow.aspx?ID=42" target="_blank">免责声明</a> | <a href="/WEB/AboutUs.aspx?ID=5" target="_blank">联系我们</a> | <a href="/WEB/ArticleShow.aspx?ID=41" target="_blank">隐私保密条款</a> | <a href="http://mail.dxdmc.com/" target="_blank">交易查证</a></td>
	        </tr>
	        <tr>
	            <td align="center" height="50"><img src="/resources/template/images/trader/tip2.jpg" alt="" /></td>
	        </tr>
	        <tr>
	            <td style="height:80px; line-height:24px; text-align:center; color:#666;">
	                Copyright(C)2011-2012. <a href="http://www.166jin.com" title="民泰贵金属|黄金,白银,铂金,钯金贵金属现货交易">166jin.com.</a> ALL RIGHT RESERVED.<br />
	            <a href="http://www.miitbeian.gov.cn/" target="_blank">沪ICP备12002745</a><br />
				<a href="http://webscan.360.cn/index/checkwebsite/url/www.mintai166.com"><img border="0" src="http://webscan.360.cn/status/pai/hash/6a79bf152dacb631dc5ea6068114d8d4"/ alt=""></a>
	            </td>
	        </tr>
	        <tr>
	            <td>&nbsp;</td>
	        </tr>
	    </table>

	</div><!-- //container -->
</div><!-- //main -->
</body>
</html>
