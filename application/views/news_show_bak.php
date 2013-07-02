<?php
	$this->load->view('_header');
?>
<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">

			<section class="grid-1 fl">
				<div class="topmenu">
					<dl>
						<dt>媒体报道</dt>
						<dd class="active"><a href="/news/more/<?php echo $article['type_id'];?>"><?php echo $article['typename'];?></a></dd>
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
					<img src="/resources/template/images/online.jpg" alt="在线咨询" />
				</div>

				<div class="crumbs">
				本页位置：<a href="/">首页</a><span>&gt;&gt;</span><a href="/news/">媒体报道 </a><span>&gt;&gt;</span><?php echo $article['typename'];?>
	            </div>
	            <div class="details-wrap">
					<div class="details-title">
					<h1><?php echo $article['title'];?></h1>
						<p><span>发布时间：<?php echo $article['post_time'];?></span>
						<?php 
							if(!empty($article['source']))
							{
								?>
								<span>来源：<?php echo $article['source'];?></span>
								<?php
							}
						?>
						</p>
					</div>
					<div class="details-content">
						<?php 
							if(!empty($article['outline']))
							{
								?>
									<p>摘要: <?php echo $article['outline']?></p>
								<?php
							}
						?>

						<?php echo $article['content'];?>
										</div>

					<div class="pages">
					<?php 
						if(isset($pre))
						{
							?>
								<p>上一篇：<a href="/news/show/<?php echo $pre['id'];?>"><?php echo $pre['title']?></a></p>

						<?php
						}
					?>
					<?php 
						if(isset($next))
						{
							?>
								<p>下一篇：<a href="/news/show/<?php echo $next['id'];?>"><?php echo $next['title']?></a></p>

						<?php
						}
					?>
					</div>
			    </div>

			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->
<?php
	$this->load->view('_footer');
?>


