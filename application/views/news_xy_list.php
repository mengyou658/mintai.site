<?php
	$this->load->view('_header');
?>

<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">

			<section class="grid-1 fl">
				<div class="topmenu">
					<dl>
						<dt>贵金属学院</dt>
						<dd  <?php if($types['id'] == 9) echo 'class="active"';?> ><a href="/news/morexy/9">投资入门</a></dd>
						<dd <?php if($types['id'] == 10) echo 'class="active"';?> ><a  href="/news/morexy/10">投资技巧</a></dd>
						<dd <?php if($types['id'] == 11) echo 'class="active"';?> ><a href="/news/morexy/11">明石指导</a></dd>
						<dd <?php if($types['id'] == 12) echo 'class="active"';?> ><a  href="/news/morexy/12">常见问题</a></dd>
					</dl>
				</div>
				<div class="sidebar-menu">
					<ul>
						<li class="ksdh1"><a href="/item/show/online_account">预约开户</a></li>
						<li class="ksdh2"><a href="/user/form">在线咨询</a></li>
						<li class="ksdh3"><a href="/item/show/invest_imitate">注册模拟账户</a></li>
						<li class="ksdh4"><a href="/item/show/sdownload">软件下载</a></li>
						<li class="ksdh5"><a href="/item/show/app_ios">手机交易</a></li>
					</ul>
			    </div>
			</section><!-- /sidebar -->
				
			<section class="grid-4 fr">
				<div class="subbanner">
					<img src="/resources/template/images/online.jpg" alt="在线咨询" />
				</div>

				<div class="crumbs">
				本页位置：<a href="/">首页</a><span>&gt;&gt;</span><a href="/news/morexy/9">贵金属学院</a><span>&gt;&gt;</span><?php echo $types['name'];?>
	            </div>

	            <div class="mod3">
					<div class="hd3 cf">
						<h2 class="fl">媒体报道</h2>
					</div>
			    	<div class="sub-news new-cont bd cf">
			    		<div class="new-zy">
			    			<div class="new-topwrap cf">
				    			<div class="pic-news">
				    				<img src="/resources/template/images/pic-news2.jpg" alt="pic-news2" />
				    			</div>
				    			<div class="top-news">
						          	<h2><a title="黄金价格本周总结以及下周走势预测" href="/news/xyshow/67">黄金价格本周总结以及下周走势预测</a></h2>
									<div class="new-zycont">本周国际现货黄金以1363.46美元开盘，黄金价格最高上试1414.22美元，最低下探1338.04美元，现货金报收1386.15美元，较上个交易周上涨26.21美元，涨幅1.93%，周K线呈现一根下行抵抗的小阳线。本周数据面没有多少意外，但黄金价格受消息面影响明显。从总体数据来看，美国经济数据趋于向好... <span>[2013-5-27 9:59:24]</span> <a class="gary" title="晚评：伯南克讲话定调 黄金白银或重拾跌势" href="news1.html">全文</a> 
						            </div>
					            </div>
				            </div>
				            <ul style="margin-top:6px;" class="news-list">
								<?php
									foreach($list as $news)
									{
										?>
											<li><span><?php echo $news['post_time'];?></span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/xyshow/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php
									}
								?>
				          	</ul>
			          	</div>

			          	<div class="paging">
							<!--
							<?php echo $this->pagination->create_links();?>
							-->
			          		<a href="#">首页</a>
			          		<a class="on" href="#">1</a>
			          		<a href="#">2</a>
			          		<a href="#">3</a>
			          		<a href="#">4</a>
			          		<a href="#">尾页</a>
			          		<span>共16条</span>
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

