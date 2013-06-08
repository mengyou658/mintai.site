	
			<!-- sidebar -->
			<div id="sidebar" class="span2">			
				<div class="accordion custom-acc" id="accordionSB">

					<div class="accordion-group <?php if($menu == 'welcome') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#dashboardsb">
								<i class="icon-large icon-th-large head_icon"></i>总揽
							</a>
						</div>
						<div id="dashboardsb" class="accordion-body collapse  <?php if($menu == 'welcome') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'welcome_stat') echo 'class="active"';?>><a href="/welcome/index"><i class="icon-large icon-th"></i>网站数据</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="accordion-group  <?php if($menu == 'user') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#articlesb">
								<i class="icon-large icon-th-large head_icon"></i>开户管理
							</a>
						</div>
						<div id="articlesb" class="accordion-body collapse   <?php if($menu == 'user') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'user_list') echo 'class="active"';?>><a href="/admin/user"><i class="icon-large icon-th"></i>申请列表</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="accordion-group  <?php if($menu == 'article') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#pagesb">
								<i class="icon-large icon-th-large head_icon"></i>文章管理
							</a>
						</div>
						<div id="pagesb" class="accordion-body collapse   <?php if($menu == 'article') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li <?php if($sub_menu == 'article_list') echo 'class="active"';?>><a href="/admin/article"><i class="icon-large icon-th"></i>文章列表</a></li>
									<li <?php if($sub_menu == 'article_from') echo 'class="active"';?>><a href="/admin/article/form"><i class="icon-large icon-th"></i>文章添加</a></li>
									<li <?php if($sub_menu == 'articletype_list') echo 'class="active"';?>><a href="/admin/articletype/"><i class="icon-large icon-th"></i>分类列表</a></li>
									<li <?php if($sub_menu == 'articletype_form') echo 'class="active"';?>><a href="/admin/articletype/form"><i class="icon-large icon-th"></i>分类添加</a></li>
								</ul>
							</div>
						</div>
					</div>					
					
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#commentsb">
								<i class="icon-large icon-th-large head_icon"></i>评论
							</a>
						</div>
						<div id="commentsb" class="accordion-body collapse">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="comments.html"><i class="icon-large icon-th"></i>评论列表</a></li>
								</ul>
							</div>
						</div>
					</div>
				
					<div class="accordion-group">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#baseinfo">
								<i class="icon-large icon-th-large head_icon"></i>基础数据
							</a>
						</div>
						<div id="baseinfo" class="accordion-body collapse">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>学校列表</a></li>
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>添加学校</a></li>
								</ul>
							</div>
						</div>
					</div>


					<div class="accordion-group  <?php if($menu == 'staff') echo 'fs';?>">
						<div class="accordion-heading">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionSB" href="#companyinfo">
								<i class="icon-large icon-th-large head_icon"></i>公司管理
							</a>
						</div>
						<div id="companyinfo" class="accordion-body collapse  <?php if($menu == 'staff') echo 'in';?>">
							<div class="accordion-inner">
								<ul class="nav nav-list">
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>公司信息</a></li>
									<li><a href="media-library.html"><i class="icon-large icon-th"></i>员工列表</a></li>
									<li <?php if($sub_menu == 'staff_form') echo 'class="active"';?>><a href="/admin/staff/form"><i class="icon-large icon-th"></i>添加员工</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>
			</div><!-- sidebar -->
	
