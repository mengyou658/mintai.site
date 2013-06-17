<?php
	$this->load->view('_header');
?>

<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">

			<section class="grid-1 fl">
				<div class="topmenu">
					<dl>
						<dt>公司资质</dt>
						<dd><a href="aboutus.html">公司简介</a></dd>
						<dd><a target="_blank" href="about-advantage.html">民泰优势</a></dd>
						<dd class="active"><a href="about-license.html">资质证书</a></dd>
						<dd><a target="_blank" href="news.html">媒体报道</a></dd>
						<dd><a href="about-mcx.html">关于交易所</a></dd>
					</dl>
				</div>
				<div class="sidebar-menu">
					<ul>
						<li class="ksdh1"><a href="#">预约开户</a></li>
						<li class="ksdh2"><a href="#">在线咨询</a></li>
						<li class="ksdh3"><a href="#">注册模拟账户</a></li>
						<li class="ksdh4"><a href="#">软件下载</a></li>
						<li class="ksdh5"><a href="#">培训预约表</a></li>
					</ul>
			    </div>
			</section><!-- /sidebar -->
				
			<section class="grid-4 fr">
				<div class="subbanner">
					<img src="/resources/template/images/pro.jpg" alt="公司资质" />
				</div>

				<div class="crumbs">
	            	本页位置：<a href="index.html">首页</a><span>&gt;&gt;</span><a href="aboutus.html">公司资质</a><span>&gt;&gt;</span>资质证书 
	            </div>
				
				<div class="mod3">
					<div class="hd3 cf">
						<h2 class="fl">资质证书</h2>
					</div>
		            <div class="bd">
						
						<div id="image_wrap" style="margin:35px auto 0;">
							<img src="/resources/template/images/scroll/blank.gif" width="500" height="375" />
						</div>

						<div class="scrollable-picwrap cf" style="margin:10px auto 30px; width: 634px; height:120px;">
							<a class="prev browse left fl"></a>
							<div class="scrollable-pic fl" id="scrollablePic">
							  <div class="items">

							    <div>
									<img src="/resources/template/images/scroll/p1_t.jpg" alt="1" />
									<img src="/resources/template/images/scroll/p2_t.jpg" alt="2" />
									<img src="/resources/template/images/scroll/p3_t.jpg" alt="3" />
									<img src="/resources/template/images/scroll/p4_t.jpg" alt="4" />
							    </div>
							    <div>
									<img src="/resources/template/images/scroll/p1_t.jpg" alt="1" />
									<img src="/resources/template/images/scroll/p2_t.jpg" alt="2" />
									<img src="/resources/template/images/scroll/p3_t.jpg" alt="3" />
									<img src="/resources/template/images/scroll/p4_t.jpg" alt="4" />
							    </div>
							    <div>
									<img src="/resources/template/images/scroll/p1_t.jpg" alt="1" />
									<img src="/resources/template/images/scroll/p2_t.jpg" alt="2" />
									<img src="/resources/template/images/scroll/p3_t.jpg" alt="3" />
									<img src="/resources/template/images/scroll/p4_t.jpg" alt="4" />
							    </div>

							  </div>
							</div>
							<a class="next browse right fr"></a>
						</div>

				    </div>
				</div>
			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->



<?php
	$this->load->view('_footer');
?>
<script>
$(function() {
$(".scrollable-pic").scrollable();

$(".items img").click(function() {
	if ($(this).hasClass("active")) { return; }

	var url = $(this).attr("src").replace("_t", "");

	var wrap = $("#image_wrap").fadeTo("medium", 0.5);

	var img = new Image();


	img.onload = function() {

		wrap.fadeTo("fast", 1);

		wrap.find("img").attr("src", url);

	};

	img.src = url;

	$(".items img").removeClass("active");
	$(this).addClass("active");

}).filter(":first").click();
});
</script>

