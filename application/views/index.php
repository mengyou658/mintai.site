<?php $this->load->view('_header');?>

<style type="text/css" media="screen">
	.analyze_img{
		width:88px;
		height:76px;
	}	
</style>
<div class="banner-wrap wrapper cf">
	<div class="gridsystem cf">
		<div class="banner-pd">
			<section id="idTransformView" class="banner-index">
		        <ul id="idSlider" class="slider">
					<?php
						foreach($focus as $fo)
						{
							?>
								<li><a href="<?php echo $fo['focus_url'];?>"><img src="/uploads/focus/<?php echo $fo['img_url'];?>" alt="banner1" /></a></li>
							<?php	
						}
					?>
				</ul>
				<ul id="idNum" class="num">
					<?php
						for($i=0; $i<count($focus); $i++)
						{
							?>
								<li><a href="#"><?php echo $i;?></a></li>
							<?php	
						}
					?>
				</ul>
			</section>
		</div>
	</div>
</div><!-- //banner -->

<div class="topmain mb-12 wrapper cf">
	<div class="gridsystem cf">
		<section class="features cf">
	    	<ul>
				<li class="mr-ksdh1"><a href="/news/show/233">银行三方存管</a></li>
				<li class="mr-ksdh2"><a href="/news/show/234">国际同步价格</a></li>
				<li class="mr-ksdh3"><a href="/news/show/235">24小时交易</a></li>
				<li class="mr-ksdh4"><a href="/news/show/236">保证金比例低</a></li>
				<li class="mr-ksdh5"><a href="/news/show/237">T+0双向交易</a></li>
				<li class="mr-ksdh6"><a href="/news/show/238">交易费用低</a></li>
				<li class="mr-ksdh7"><a href="/news/show/239">星级服务</a></li>
			</ul>
		</section><!-- /features -->

		<section id="infobar" class="infobar-index cf">
			<div class="cf">
				<div class="fl icon-notice">重要公告：</div>
			    <div class="infobar-news fl">
					<div class="scrollable-news" id="scrollable-news">
					  <div class="items">
					  <?php
							if(!empty($notice['n1']))
							{
								?>
					    <div>
								<?php
								foreach($notice['n1'] as $not){
								?>
									<span><a target="_blank" href="/news/show/<?php echo $not['id'];?>"><?php echo $not['title'];?>[<?php echo $not['sp_date'];?>]</a></span>
								<?php
								}

								?>
								</div>
							<?php
							}
						?>
					  <?php
							if(!empty($notice['n2']))
							{
								?>
					    <div>
								<?php
								foreach($notice['n2'] as $not){
								?>
									<span><a target="_blank" href="/news/show/<?php echo $not['id'];?>"><?php echo $not['title'];?>[<?php echo $not['sp_date'];?>]</a></span>
								<?php
								}

								?>
								</div>
							<?php
							}
						?>
					  <?php
							if(!empty($notice['n3']))
							{
								?>
					    <div>
								<?php
								foreach($notice['n3'] as $not){
								?>
									<span><a target="_blank" href="/news/show/<?php echo $not['id'];?>"><?php echo $not['title'];?>[<?php echo $not['sp_date'];?>]</a></span>
								<?php
								}

								?>
								</div>
							<?php
							}
						?>

				  </div>
					</div>
			    </div>
			    <div class="scrollmore fl"><a href="/news/more/13">更多&gt;&gt;</a></div>
		    </div>
		</section><!-- /infobar -->
	</div>
</div><!-- /topmain -->


<div id="container" class="gridsystem cf">

	<div class="cf">
		
		<section class="grid-3 fr">
			<div class="cf mb-12">
				<div class="grid-2 fl">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">原创研究</h2>
				    		<span class="more fr"><a href="/news/more/1" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
				    			<div class="new-topwrap cf">
					    			<div class="pic-news">
					    				<img src="/resources/template/images/pic-news.jpg" alt="pic-news" />
					    			</div>
								<?php 
									if(!empty($article1))
									{
										?>
											<h2><a title="<?php echo $article1['title']?>" href="/news/show/<?php echo $article1['id'];?>"><?php echo $article1['title'];?></a></h2>
											<div class="new-zycont"><?php echo mb_strimwidth($article1['outline'], 0,90, '...', 'utf8');?><span>[<?php echo $article1['sp_date']?>]</span> <a title="<?php echo $article1['title'];?>" href="/news/show/<?php echo $article1['id'];?>">全文</a> 
									</div>

										<?
									}
								?>
						        </div>
					            <ul class="news-list">
								<?php
									if(!empty($data1)){
									foreach($data1 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>
				          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
			    <div class="grid-2 fr">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">盘面播报</h2>
				    		<span class="more fr"><a href="/news/more/2" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
				    			<div class="new-topwrap cf">
					    			<div class="pic-news">
					    				<img src="/resources/template/images/88490927.jpg" alt="pic-news" />
					    			</div>
					    			<div class="new-topwrap cf">
							        <?php 
									if(!empty($article2))
									{
										?>
											<h2><a title="<?php echo $article2['title']?>" href="/news/show/<?php echo $article2['id'];?>"><?php echo $article2['title'];?></a></h2>
											<div class="new-zycont"><?php echo mb_strimwidth($article2['outline'], 0, 90, '...', 'utf8');?><span>[<?php echo $article2['sp_date']?>]</span> <a title="<?php echo $article2['title'];?>" href="/news/show/<?php echo $article2['id'];?>">全文</a> 
									</div>

										<?
									}
								?>
							        </div>
					            </div>
					            <ul class="news-list">
								<?php
									if(!empty($data2)){
									foreach($data2 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>
					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
		    </div>

		    <div class="cf mb-12">
				<div class="grid-2 fl">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">分析评论</h2>
				    		<span class="more fr"><a href="/news/more/3" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
				    			<div class="new-topwrap cf">
					    			<div class="pic-news">
					    				<img src="/resources/template/images/88459943.jpg" alt="pic-news" />
					    			</div>

							     <?php 
									if(!empty($article3))
									{
										?>
											<h2><a title="<?php echo $article3['title']?>" href="/news/show/<?php echo $article3['id'];?>"><?php echo $article3['title'];?></a></h2>
											<div class="new-zycont"><?php echo mb_strimwidth($article3['outline'], 0, 90, "...", 'utf8');?><span>[<?php echo $article3['sp_date']?>]</span> <a title="<?php echo $article3['title'];?>" href="/news/show/<?php echo $article3['id'];?>">全文</a> 
									</div>

										<?
									}
								?>

						  		</div>
					            <ul class="news-list">
								<?php
									if(!empty($data3)){
									foreach($data3 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>
					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
			    <div class="grid-2 fr">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">市场要闻</h2>
				    		<span class="more fr"><a href="/news/more/4" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
				    			<div class="new-topwrap cf">
						  			<div class="pic-news">
					    				<img src="/resources/template/images/88485289.jpg" alt="pic-news" />
					    			</div>

							     <?php 
									if(!empty($article4))
									{
										?>
											<h2><a title="<?php echo $article4['title']?>" href="/news/show/<?php echo $article4['id'];?>"><?php echo $article4['title'];?></a></h2>
											<div class="new-zycont"><?php echo mb_strimwidth($article4['outline'], 0, 90, "...", "utf8");?><span>[<?php echo $article4['sp_date']?>]</span> <a title="<?php echo $article4['title'];?>" href="/news/show/<?php echo $article4['id'];?>">全文</a> 
									</div>

										<?
									}
								?>


								</div>
					            <ul class="news-list">
								<?php
									if(!empty($data4)){
									foreach($data4 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>
					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
		    </div>

		    <div class="ad mb-12">
		    	<object data="/resources/template/images/swf/topBanner4.swf" type="application/x-shockwave-flash" width="780" height="96">             
					<param name="movie" value="/resources/template/images/swf/topBanner4.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="allowScriptAccess" value="sameDomain" />
					<param name="allowFullScreen" value="true" />
					<param name="wmode" value="transparent"/>
				</object>
		    </div>

		    <div class="mod2 mb-12">
				<div class="hd2">
					<h2 class="fl">交易行情图</h2>
					<span class="more fr"><a href="#" title="更多">进入行情中心&gt;&gt;</a></span>
				</div>
				<div class="price-pic bd2 cf">
					<div class="price-wrap">
						<iframe width="360" scrolling="no" height="166" frameborder="0" src="http://goldchart.gold678.com/img/quote/mintai/tik/xagusd_360x166.html"></iframe>
					</div>
					<div class="price-wrap">
						<iframe width="360" scrolling="no" height="166" frameborder="0" src="http://goldchart.gold678.com/img/quote/mintai/day/xagusd_360x166.html"></iframe>
					</div>
				</div>
			</div>

			<div class="cf mb-12">
				<div class="grid-2 fl">
					<div class="mod2">
						<div class="hd2 cf">
							<h2 class="fl">钯金行情</h2>
						</div>
				    	<div class="bd cf">
				    		<div class="price-wrap2"> 
					          	<iframe width="360" scrolling="no" height="166" frameborder="0" src="http://goldchart.gold678.com/img/quote/mintai/tik/pd_360x166.html" name="bajin" id="bajin"></iframe>
				          	</div>
				    	</div>
				    </div>
			    </div>
			    <div class="grid-2 fr">
					<div class="mod2">
						<div class="hd2 cf">
							<h2>铂金行情</h2>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="price-wrap2"> 
					          	<iframe width="360" scrolling="no" height="166" frameborder="0" src="http://goldchart.gold678.com/img/quote/mintai/tik/pt_360x166.html" name="bojin" id="bojin"></iframe>
				          	</div>
				    	</div>
				    </div>
			    </div>
		    </div>

		    <div class="ad mb-12">
		    	<object data="/resources/template/images/swf/bannertop.swf" type="application/x-shockwave-flash" width="780" height="202">             
					<param name="movie" value="/resources/template/images/swf/bannertop.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="allowScriptAccess" value="sameDomain" />
					<param name="allowFullScreen" value="true" />
					<param name="wmode" value="transparent"/>
				</object>
		    </div>

		    <div class="mod2 mb-12">
				<div class="hd2">
					<h2 class="fl">明星分析师</h2>
					<span class="more fr"><a target="_blank" href="/item/show/analyst_list" title="更多">更多&gt;&gt;</a></span>
				</div>
				<div class="analyst bd2 cf">
					<ul>
						<li>
							<div class="pic-analyst">
			    				<a target="_blank" href="/item/show/analyst_list#lina"><img class="analyze_img" src="/resources/template/images/analyze_1.jpg" alt="李娜" /></a>
			    			</div>
			    			<dl>
			    				<dt><strong><a target="_blank" href="/item/show/analyst_list#lina">李娜</a></strong></dt>
			    				<dd>7年国内外金融市场从业经验...</dd>
			    			</dl>
						</li>
						<li>
							<div class="pic-analyst">
			    				<a target="_blank" href="/item/show/analyst_list#wangshaixu"><img class="analyze_img" src="/resources/template/images/analyze_2.jpg" alt="王哂旭" /></a>
			    			</div>
			    			<dl>
			    				<dt><strong><a target="_blank" href="/item/show/analyst_list#wangshaixu">王哂旭</a></strong></dt>
			    				<dd>毕业于北京交通大学经济管理学院...</dd>
			    			</dl>
						</li>
						<li>
							<div class="pic-analyst">
			    				<a target="_blank" href="/item/show/analyst_list#caocaowu"><img class="analyze_img" src="/resources/template/images/analyst/ccw.jpg" alt="曹朝武" /></a>
			    			</div>
			    			<dl>
			    				<dt><strong><a target="_blank" href="/item/show/analyst_list#caocaowu">曹朝武</a></strong></dt>
			    				<dd>天津贵金属交易所166号综合会员首席...</dd>
			    			</dl>
						</li>
						<li>
							<div class="pic-analyst">
			    				<a target="_blank" href="/item/show/analyst_list#luoqi"><img class="analyze_img" src="/resources/template/images/analyst/lq.jpg" alt="罗勍" /></a>
			    			</div>
			    			<dl>
			    				<dt><strong><a target="_blank" href="/item/show/analyst_list#luoqi">罗勍</a></strong></dt>
			    				<dd>民泰贵金属副总裁，曾经任职于多家...</dd>
			    			</dl>
						</li>
						<li>
							<div class="pic-analyst">
			    				<a target="_blank" href="/item/show/analyst_list#zhangdian"><img src="/resources/template/images/zd.jpg" alt="章鼎" /></a>
			    			</div>
			    			<dl>
			    				<dt><strong><a target="_blank" href="/item/show/analyst_list#zhangdian">章鼎</a></strong></dt>
			    				<dd>国际金融和信息管理双学士学位，五年...</dd>
			    			</dl>
						</li>
						<li>
							<div class="pic-analyst">
			    				<a target="_blank" href="/item/show/analyst_list#chenyueshen"><img class="analyze_img" src="/resources/template/images/analyst/cyl.jpg" alt="陈月霖" /></a>
			    			</div>
			    			<dl>
			    				<dt><strong><a target="_blank" href="/item/show/analyst_list#chenyueshen">陈月霖</a></strong></dt>
			    				<dd>毕业于郑州大学金融学专业...</dd>
			    			</dl>
						</li>
						<li>
							<div class="pic-analyst">
			    				<a target="_blank" href="/item/show/analyst_list#huwenlei"><img class="analyze_img" src="/resources/template/images/analyst/hwl.jpg" alt="胡文磊" /></a>
			    			</div>
			    			<dl>
			    				<dt><strong><a target="_blank" href="/item/show/analyst_list#huwenlei">胡文磊</a></strong></dt>
			    				<dd>多年从事国内证券市场及贵金属市场...</dd>
			    			</dl>
						</li>
						<li>
							<div class="pic-analyst">
			    				<a target="_blank" href="/item/show/analyst_list#zhoupin"><img class="analyze_img" src="/resources/template/images/analyst/zp.jpg" alt="周萍" /></a>
			    			</div>
			    			<dl>
			    				<dt><strong><a target="_blank" href="/item/show/analyst_list#zhoupin">周萍</a></strong></dt>
			    				<dd>1994涉足证券期货行业，先后就职于...</dd>
			    			</dl>
						</li>
					</ul>
				</div>
			</div>
		<!--
		    <div class="cf mb-12">
				<div class="grid-2 fl">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">财经要闻</h2>
				    		<span class="more fr"><a href="/news/more/5" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy"> 
					            <ul class="news-list">
								<?php
									if(!empty($data5)){
									foreach($data5 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>
					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
			    <div class="grid-2 fr">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">经济指标</h2>
				    		<span class="more fr"><a href="/news/more/6" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
					            <ul class="news-list">
								<?php
									if(!empty($data6)){
									foreach($data6 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>
					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
		    </div>

		    <div class="cf mb-12">
				<div class="grid-2 fl">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">央行动态</h2>
				    		<span class="more fr"><a href="/news/more/7" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy"> 
					            <ul class="news-list">
								<?php
									if(!empty($data7)){
									foreach($data7 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>
					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
			    <div class="grid-2 fr">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">相关市场</h2>
				    		<span class="more fr"><a href="/news/more/8" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
					            <ul class="news-list">
								<?php
									if(!empty($data8)){
									foreach($data8 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>
					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
		    </div>
		-->
		    <div class="cf mb-12">
				<div class="grid-2 fl">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">投资入门</h2>
				    		<span class="more fr"><a href="/news/more/10" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
				    			<div class="new-topwrap cf">
					    			<div class="pic-news">
					    				<img src="/resources/template/images/touzirumen.jpg"  style="width:101px;height:81px;" alt="demo" />
					    			</div>
			    					<div class="top-news">
							     <?php 
									if(!empty($article9))
									{
										?>
											<h2><a title="<?php echo $article9['title']?>" href="/news/show/<?php echo $article9['id'];?>"><?php echo $article9['title'];?></a></h2>
											<div class="new-zycont"><?php echo mb_strimwidth($article9['outline'], 0, 90, "...", "utf8");?><span>[<?php echo $article9['sp_date']?>]</span> <a title="<?php echo $article9['title'];?>" href="/news/show/<?php echo $article9['id'];?>">全文</a> 
									</div>

										<?
									}
								?>

							        </div>
							    </div>
					            <ul class="news-list">
								<?php
									if(!empty($data9)){
									foreach($data9 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>

					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
			    <div class="grid-2 fr">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">投资技巧</h2>
				    		<span class="more fr"><a href="/news/more/10" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
				    			<div class="new-topwrap cf">
					    			<div class="pic-news">
					    				<img src="/resources/template/images/touzijiqiao.jpg"   style="width:101px;height:81px;" alt="demo" />
					    			</div>
			    					<div class="top-news">
							     <?php 
									if(!empty($article10))
									{
										?>
											<h2><a title="<?php echo $article10['title']?>" href="/news/show/<?php echo $article10['id'];?>"><?php echo $article10['title'];?></a></h2>
											<div class="new-zycont"><?php echo  mb_strimwidth($article10['outline'], 0, 90, "...", "utf8");?><span>[<?php echo $article10['sp_date']?>]</span> <a title="<?php echo $article10['title'];?>" href="/news/show/<?php echo $article10['id'];?>">全文</a> 
									</div>

										<?
									}
								?>

							        </div>
							    </div>
					            <ul class="news-list">
								<?php
									if(!empty($data10)){
									foreach($data10 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>

					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
		    </div>

		    <div class="cf mb-12">
				<div class="grid-2 fl">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">名师指导</h2>
				    		<span class="more fr"><a href="/news/more/11" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
				    			<div class="new-topwrap cf">
					    			<div class="pic-news">
					    				<img src="/resources/template/images/demo.jpg" alt="demo" />
					    			</div>
			    					<div class="top-news">
							    <?php 
									if(!empty($article11))
									{
										?>
											<h2><a title="<?php echo $article11['title']?>" href="/news/show/<?php echo $article11['id'];?>"><?php echo $article11['title'];?></a></h2>
											<div class="new-zycont"><?php echo mb_strimwidth($article11['outline'], 0, 90, "...", "utf8");?><span>[<?php echo $article11['sp_date']?>]</span> <a title="<?php echo $article11['title'];?>" href="/news/show/<?php echo $article11['id'];?>">全文</a> 
									</div>

										<?
									}
								?>
							        </div>
							    </div>
					            <ul class="news-list">
								<?php
									if(!empty($data11)){
									foreach($data11 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>

					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
			    <div class="grid-2 fr">
					<div class="mod3">
						<div class="hd3 cf">
							<h2 class="fl">常见问题</h2>
				    		<span class="more fr"><a href="/news/more/12" title="更多">更多&gt;&gt;</a></span>
						</div>
				    	<div class="new-cont bd cf">
				    		<div class="new-zy">
				    			<div class="new-topwrap cf">
					    			<div class="pic-news">
					    				<img src="/resources/template/images/changjianwenti.jpg"   style="width:101px;height:81px;" alt="demo" />
					    			</div>
			    					<div class="top-news">
							    <?php 
									if(!empty($article12))
									{
										?>
											<h2><a title="<?php echo $article12['title']?>" href="/news/show/<?php echo $article12['id'];?>"><?php echo $article12['title'];?></a></h2>
											<div class="new-zycont"><?php echo mb_strimwidth($article12['outline'], 0, 90, "...", "utf8");?><span>[<?php echo $article12['sp_date']?>]</span> <a title="<?php echo $article12['title'];?>" href="/news/show/<?php echo $article12['id'];?>">全文</a> 
									</div>

										<?
									}
								?>

							        </div>
							    </div>
					            <ul class="news-list">
								<?php
									if(!empty($data12)){
									foreach($data12 as $news)
									{
										?>
											<li><span>[<?php echo $news['sp_date'];?>]</span><a title="<?php echo $news['title'];?>" target="_blank" href="/news/show/<?php echo $news['id'];?>"><?php echo $news['title'];?></a></li>
										<?php	
									}
									}
								?>

					          	</ul>
				          	</div>
				    	</div>
				    </div>
			    </div>
		    </div>

		    <div class="ad">
		    	<object id="flashSeg" data="/resources/template/images/swf/topBanner3.swf" type="application/x-shockwave-flash" width="780" height="72">           
					<param name="movie" value="/resources/template/images/swf/topBanner3.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="allowScriptAccess" value="sameDomain" />
					<param name="allowFullScreen" value="true" />
					<param name="wmode" value="transparent"/>
				</object>
		    </div>

		</section><!-- /main -->

		<section class="grid-1 fl">
			<div class="sidebar-menu mb-12">
				<ul>
					<li class="ksdh1"><a href="/item/show/online_account">预约开户</a></li>
					<li class="ksdh2"><a href="/user/form">在线咨询</a></li>
					<li class="ksdh3"><a href="/item/show/invest_imitate">注册模拟账户</a></li>
					<li class="ksdh4"><a href="/item/show/sdownload">软件下载</a></li>
					<li class="ksdh5"><a href="/item/show/app_ios">手机交易</a></li>
				</ul>
		    </div>
		    <div class="mod2 mb-12">
				<div class="hd2">
					<h2>联系我们</h2>
				</div>
				<div class="sidebar-contact bd2">
				    <img alt="客服咨询电话400 610 1155" src="/resources/template/images/lxwm-img.gif" />
				    <p>周一早8：00到周六早4：00<br>周六日早9：00到晚17：00</p>
				</div>
			</div>

<div class="mb-12 border-gray">
				<a href="http://www.mintai166.com/web/Deal.aspx"><img src="/resources/template/images/nonghang_pic.jpg" alt="农业银行网上签约" title="农业银行网上签约" /></a>
		    </div>
			<div class="mb-12 border-gray">
				<a target="_blank" href="/item/show/aboutus"><img src="/resources/template/images/mtvideo.jpg" alt="民泰贵金属企业宣传片" title="民泰贵金属企业宣传片" /></a>
		    </div>
			<div class="mb-12 border-gray">
				<a target="_blank" href="/item/show/mtxuanchuan"><img src="/resources/template/images/mtxuanchuan.jpg" alt="民泰贵金属电子宣传册" title="民泰贵金属电子宣传册" /></a>
		    </div>
			<div class="mb-12 border-gray">
				<a target="_blank" href="/item/show/guide"><img src="/resources/template/images/guide.jpg" alt="新手入门三部曲" title="新手入门三部曲" /></a>
		    </div>	    
			<div class="mod2 mb-12">
				<div class="hd2">
					<h2>推荐阅读</h2>
				</div>
				<div class="recommend bd2 pd-6">	
					<dl>
				       <dd>
						   <span class="dd-img"><a target="_blank" href="/item/show/mtkaihu_video" title="开户须知视频"><img src="/resources/template/images/mtkaihu.jpg" alt="开户须知视频" title="开户须知视频 黄金投资 天通金 天通银"  /></a></span>
					    </dd>
					    <dt>
							<a target="_blank" href="/item/show/mtkaihu_video" title="开户须知视频 黄金投资 天通金 天通银"><span class="l_video">开户须知视频</span></a>
					    </dt>
			       </dl>
			       <dl>
				       <dd>
						   <span class="dd-img"><a href="/item/show/about_mcx" target="_blank" title="天津贵金属交易所"><img src="/resources/template/images/20121218040247_84_0.jpg" alt="天津贵金属交易所" title="天津贵金属交易所 黄金投资 天通金 天通银"  /></a></span>
					    </dd>
					    <dt>
							<a href="/item/show/about_mcx" target="_blank" title="天津贵金属交易所 黄金投资 天通金 天通银"><span class="l_video">天津贵金属交易所</span></a>
					    </dt>
			       </dl>
			       <dl>
				       <dd>
						   <span class="dd-img"><a href="/item/show/svideo" target="_blank" title="软件操作演示"><img src="/resources/template/images/svideo.jpg" alt="软件操作演示" title="软件操作演示 黄金投资 天通金 天通银"  /></a></span>
					    </dd>
					    <dt>
							<a href="/item/show/svideo" target="_blank" title="软件操作演示 黄金投资 天通金 天通银"><span class="l_video">软件操作演示</span></a>
					    </dt>
			       </dl>
			       <dl>
				       <dd>
						   <span class="dd-img"><a href="/item/show/online_tutor" target="_blank" title="客户协议书填写指南"><img src="/resources/template/images/xyzhinan.jpg" alt="客户协议书填写指南" title="客户协议书填写指南 黄金投资 天通金 天通银"  /></a></span>
					    </dd>
					    <dt>
							<a href="/item/show/online_tutor" target="_blank" title="客户协议书填写指南 黄金投资 天通金 天通银">客户协议书填写指南</a>
					    </dt>
			       </dl>
			       <dl>
				       <dd>
						   <span class="dd-img"><a href="/item/show/online_tutor" target="_blank" title="天通金 现货白银投资指南"><img src="/resources/template/images/20120928010945_4_0.jpg" alt="天通金 现货白银投资指南" title="天通金 现货白银投资指南 黄金投资 天通金 天通银"  /></a></span>
					    </dd>
					    <dt>
							<a href="/item/show/online_tutor" target="_blank" title="天通金 现货白银投资指南 黄金投资 天通金 天通银">天通金 现货白银投资指南</a>
					    </dt>  
			       </dl>
			       <dl>
				       <dd>
						   <span class="dd-img"><a href="/item/show/online_tutor" target="_blank" title="投资风险案例揭示"><img src="/resources/template/images/20120928011007_11_0.jpg" alt="投资风险案例揭示" title="投资风险案例揭示 黄金投资 天通金 天通银"  /></a></span>
					    </dd>
					    <dt>
							<a href="/item/show/online_tutor" target="_blank" title="投资风险案例揭示 黄金投资 天通金 天通银">投资风险案例揭示</a>
					    </dt> 
			       </dl>
			       <dl>
				       <dd>
						   <span class="dd-img"><a href="/item/show/guide_notice" target="_blank" title="贵金属交易规则"><img src="/resources/template/images/jiaoyiguize.jpg" alt="贵金属交易规则" title="贵金属交易规则 黄金投资 天通金 天通银"  /></a></span>
					    </dd>
					    <dt>
							<a href="/item/show/guide_notice" target="_blank" title="贵金属交易规则 黄金投资 天通金 天通银">贵金属交易规则</a>
					    </dt> 
			       </dl>
				</div>
			</div>
		</section><!-- /sidebar -->

	</div>
</div><!-- //container -->
<?php $this->load->view("_footer");?>

