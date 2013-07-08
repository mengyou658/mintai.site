<?php $this->load->view("_header");?>
<div class="main-wrap wrapper cf">
	<div id="container" class="gridsystem cf">
		<div class="container-wrap cf">
			<?php
				$this->load->view("_left");
			?>
			<section class="grid-4 fr">
				<div class="subbanner">
					<img class="top_img" src="/resources/template/images/xinshouzhinan.jpg" alt="新手指南" />
				</div>

				<div class="crumbs">
	            	本页位置：<a href="/">首页</a><span>&gt;&gt;</span><a href="/item/show/guide_guide">新手指南</a><span>&gt;&gt;</span>新手入门 
	            </div>

				<div class="details-wrap">
		            <div class="online guide">
		            	<dl>
		            		<dt><strong>第一步：了解贵金属市场、贵金属交易</strong></dt>
		            		<dd>
		            			<p>了解贵金属市场的特点及优势，阅读"新手入门"掌握贵金属交易的必备基础知识。亦可学习《贵金属市场入门讲义》，打下更扎实的理论基础。</p>
		            			<p><input type="button" class="btn-submit" value="立即开始学习" onclick="window.location.href='/item/show/study'"/></p>
		            		</dd>
		            		<dt><strong>第二步：注册模拟帐户，无风险练习交易</strong></dt>
		            		<dd>
		            			<p>注册模拟帐户，获得专家的系统指导，并利用模拟帐户，在真实市场中无风险练习交易。</p>
		            			<p><input type="button" class="btn-submit" value="申请模拟账号" onclick="window.location.href='/item/show/guide_imitate'"/></p>
		            		</dd>
		            		<dt><strong>第三步：开设真实帐户，进行实战！</strong></dt>
		            		<dd>
		            			<p>根据自己的交易风格、经验，开立真实帐户。</p>
		            			<p><input type="button" class="btn-submit" value="预约开户" onclick="window.location.href='/item/show/online_account'"/></p>
		            		</dd>
		            		<dd>学习时遇到问题？请在第一时间联系我们的24小时在线客服！</dd>
		            		<dd>客户服务电话：<strong>400-1075-166</strong></dd>
		            	</dl>
		            </div>
	            </div>

			</section><!-- /content -->

		</div>	
	</div><!-- //container -->
</div><!-- //main -->

<?php $this->load->view("_footer");?>
