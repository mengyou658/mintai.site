			<!-- main content -->
			<div id="main_content" class="span10">
			
				<div class="widget_container">
					<div class="well nomargin">
						<ul class="breadcrumbs-custom in-well">
							<li><a href="javascript:void(0);">文章管理</a></li>
							<li class="active">文章列表</li>
						</ul>
					</div>
				</div>	
			
				<div class="row-fluid">
					<div class="widget_container">
						<div class="well nomargin">
							<div class="navbar navbar-static navbar_as_heading">
								<div class="navbar-inner">
									<div class="container" style="width: auto;">
										<a class="brand">文章列表</a>
										<a class="btn pull-right" href="/admin/article/form">添加文章</a>
									</div>
								</div>
							</div>
												
							<div class="subnav nobg">
								<div class="span2">
									<select name="m">
									<option selected="selected" value="0">Show all dates</option>
									<option value="201206">June 2012</option>
									<option value="201205">May 2012</option>
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
							<table class="table smallfont">
								<thead>
									<tr>
										<td style="width:20px;"><input type="checkbox" id="chkbck" /></td>
										<td>Title</td>
										<td>Author</td>
										<td>Categories</td>
										<td>Tags</td>
										<td><i class="icon-large icon-comment-alt-1"></i></td>
										<td>Date</td>
									</tr>
								</thead>
								<tbody>
								<?php 

									foreach($articles as $article) {
										?>
									<tr>
										<td><input type="checkbox" class="chkbck" /></td>
										<td>
										<a href="#" class="post_title"><?php echo $article['title'];?></a>
											<div class="operation">
												<div class="btn-group" style="display:none;">
												  <button class="btn btn-small"><i class="icon-pencil-1"></i> Edit</button>
												  <a target="blank" class="btn btn-small" onclick='window.location.href="/news/show/<?php echo $article['id'];?>"'><i class="icon-eye-2"></i> View</a>
												  <button class="btn btn-small"><i class="icon-trash-empty"></i> Delete</button>
												</div>
											</div>
										</td>
										<td>Admin</td>
										<td><a href="#"><span class="label label-info">Breaking News</span></a></td>
										<td>No Tags</td>
										<td><span class="badge badge-info">0</span></td>
										<td>2012/05/03<br />Published</td>
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

