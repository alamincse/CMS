<div class="container content">
	<div class="row">
		<div class="span3">
			{include file="left_menu.tpl"}
		</div><!-- .span3  -->

		<div class="span9">
			<h2 class="well">
				<span>All Post Here...</span>
			</h2>
			
			<p>Total Post Published : {$total_post}</p>

			<table class="table table-bordered">
				<tr>
					<th class="span2">Post Title</th>
					<th class="span6">Post Content</th>
					<th class="span1">Post Date</th>
					<th class="span1">Author</th>
					<th class="span2">Post Edit / Delete</th>
				</tr>
				{foreach from = $posts item = post}
					<tr>
						<td><a href="">{$post['post_title']}</a></td>
						<td>{$post['post_content']|strip_tags}</td>
						<td>{$post['post_date']|date_format:'%B %d, %Y at %I:%M %p'}</td>
						<td><a href="admin_view_profile.php ?id={$post['admin_id']}">{$post['admin_username']}</a></td>
						<td>
							<p>
								<a href="delete_post.php?id={$post['post_id']}&article={$post['post_title']}" class="pull-right">| &nbsp;Delete</a>
								<a href="edit_post.php?id={$post['post_id']}&article={$post['post_title']}" class="pull-right">| Edit&nbsp;</a>
								Post <a href="../single.php?id={$post['post_id']}&article={$post['post_title']}">View</a>
							</p>
						</td>
					</tr>
				{/foreach}
			</table> <!--  .table table-bordered  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container   -->