<div class="container content">
	<div class="row">
		<div class="span12">
			<table class="table table-bordered">
				<tr>
					<th class="span3">Post Title</th>
					<th class="span9">Post Content</th>
					<th class="span2">Post Date</th>
					<th class="span1">Author</th>
					<th class="span3">Post Edit / Delete</th>
				</tr>
				
				{foreach from = $showPosts item = showPost}
					<tr>
						<td><a href="#">{$showPost['post_title']}</a></td>
						<td>{$showPost['post_content']}</td>
						<td>{$showPost['post_date']|date_format:'%B %d, %Y at %I:%M %p'}</td>
						<td><a href="admin_view_profile.php?id={$showPost['admin_id']}&author={$showPost['admin_username']}">{$showPost['admin_username']}</a></td>
						<td>
							<p><a href="delete_post.php?id={$showPost['post_id']}" class="pull-right">| &nbsp;Delete</a><a href="edit_post.php?id={$showPost['post_id']}" class="pull-right">| Edit&nbsp;</a>
							Post <a href="../single.php?id={$showPost['post_id']}&article={$showPost['post_title']}" target="_blank">View</a></p>
						</td>
					</tr>
				{/foreach}
			</table> <!--  .table table-bordered  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container  -->