			<!-- main content -->
			<div id="main_content" class="span10">
			
				<div class="widget_container">
					<div class="well nomargin">
						<ul class="breadcrumbs-custom in-well">
							<li><a href="javascript:void(0);">开户管理</a></li>
							<li class="active">开户列表</li>
						</ul>
					</div>
				</div>	
			
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well nomargin">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
									<div class="container" style="width: auto;">
										<a class="brand">开户列表</a>
										<a class="btn pull-right" href="/admin/article/form"></a>
									</div>
								</div>
							</div>
							<div class="subnav">
								<div class="btn-toolbar pull-left">
									<div class="btn-group">
										<button class="btn btn-small active btn-duadua">All<span class="badge abs1">30</span></button>
										<button class="btn btn-small btn-duadua"><i class="icon-ok-3"></i> Published <span class="badge badge-info abs1">30</span></button>
										<button class="btn btn-small btn-duadua"><i class="icon-pencil"></i> Draft <span class="badge badge-warning abs1">0</span></button>
										<button class="btn btn-small btn-duadua"><i class="icon-trash-2 btn-duadua"></i> Trash <span class="badge badge-important abs1">0</span></button>
									</div>
								</div>
								<form class="navbar-search pull-right" action="">
									<input type="text" class="search-query" placeholder="Search">
								</form>
							</div>
							
							<div class="subnav nobg">
								<div class="span2">
									<select name="action">
										<option value="-1" selected="selected">Bulk Actions</option>
										<option value="edit">Edit</option>
										<option value="trash">Move to Trash</option>
									</select>
								</div>
								<div class="span1">
									<button class="btn btn-small btn-duadua">Apply</button>
								</div>
								<div class="span2">
									<select name="m">
									<option selected="selected" value="0">Show all dates</option>
									<option value="201206">June 2012</option>
									<option value="201205">May 2012</option>
									<option value="201204">April 2012</option>
									<option value="201203">March 2012</option>
									<option value="201202">February 2012</option>
									<option value="201201">January 2012</option>
									<option value="201111">November 2011</option>
									<option value="201105">May 2011</option>
									<option value="201102">February 2011</option>
									<option value="201007">July 2010</option>
									<option value="201003">March 2010</option>
									<option value="201002">February 2010</option>
									<option value="200912">December 2009</option>
									<option value="200908">August 2009</option>
									<option value="200906">June 2009</option>
									<option value="200902">February 2009</option>
									<option value="200901">January 2009</option>
									</select>
								</div>
								<div class="span2">
									<select name="cat" id="cat" class="postform">
										<option value="0">View all categories</option>
										<option class="level-0" value="1">Breaking News</option>
									</select>
								</div>
								<div class="span1">
									<button class="btn btn-small btn-duadua">Filter</button>
								</div>
								<div class="span4">
									<div class="pagination">
										<ul>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
										</ul>
									</div>
								</div>
							</div>
							<table class="table smallfont">
								<thead>
									<tr>
										<td style="width:20px;"><input type="checkbox" id="chkbck" /></td>
										<td>名字</td>
										<td>电话</td>
										<td>时间</td>
									</tr>
								</thead>
								<tbody>
								<?php 

									foreach($users as $user) {
										?>
									<tr>
										<td><input type="checkbox" class="chkbck" /></td>
										<td><span class="badge badge-info"><?php echo $user['name']?></span></td>
										<td><span class="badge badge-info"><?php echo $user['phone']?></span></td>
										<td><span class="badge badge-info"><?php echo $user['createtime']?></span></td>
									</tr>


										<?php
									}
								?>
								</tbody>
							</table>
							<div class="subnav nobg">
								<div class="span2">
									<select name="action">
										<option value="-1" selected="selected">Bulk Actions</option>
										<option value="edit">Edit</option>
										<option value="trash">Move to Trash</option>
									</select>
								</div>
								<div class="span1">
									<button class="btn btn-small btn-duadua">Apply</button>
								</div>
								<div class="span2">
								
								</div>
								<div class="span2">
								
								</div>
								<div class="span1">
									
								</div>
								<div class="span4">
									<div class="pagination">
										<ul>
											<li class="active"><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- main content -->

