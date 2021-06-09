<div class="container content">
	<div class="row">
		<div class="span12">
			<h2 class="page-header alert alert-info">
				<span>Admin area... </span>
				<a href="add_user.php" class="pull-right btn btn-info">Add User</a>
			</h2>

			<p class="pull-right">Total admin: <a href="#">{$total_admin}</a></p>
			<table class="table table-bordered">
				<tr>
					<th class="span2">Admin Fullname</th>
					<th class="span2">Admin Username</th>
					<th class="span3">Admin Email</th>
					<th class="span2">Admin Password</th>
					<th class="span2">Join Date</th>
					<th class="span3">Admin view profile</th>	
				</tr>
				
				{foreach from = $authors item = author}
					<tr>
						<td>{$author['admin_fullname']}</td>
						<td>{$author['admin_username']}</td>
						<td>{$author['admin_email']}</td>
						<td>{$author['admin_password']}</td>
						<td>{$author['date_time']|date_format:'%B %d, %Y at %I:%M %p'}</td>
						<td>
							<p><a href="admin_view_profile.php?id={$author['admin_id']}&author={$author['admin_username']}">View Profile</a> | <a href="admin_profile_delete.php?id={$author['admin_id']}&author={$author['admin_username']}">Delete Admin</a></p>
						</td>
					</tr>
				{/foreach}
			</table> <!--  .table table-bordered  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!-- .container    -->