<div class="container content">
	<div class="row">
		<div class="span12">
			<h2 class="alert alert-info">
				<span style="font-family:Ubuntu;">User Information Area</span>
				<a href="admin.php" class="pull-right btn btn-info">Back</a>
			</h2>

			{if isset($site_admin)}
			{foreach from = $site_admin item = admin}				
				<div class="accordion" id="accordion2">
					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseOne" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">
								
							<div class="row">
								<div class="span2">Admin Fullname : </div>
									<div class="span4">
										{$admin['admin_fullname']}
									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->
								
							</a> <!--  #collapseOne  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseOne" class="accordion-body collapse">
							<div class="accordion-inner">
									
							
								<form action="" method="post">
									<div class="control-group">
										<label>Fullname </label>
										<div class="controls">
											<input type="text" name="fullname" value="{$admin['admin_fullname']}">
										</div> <!--   .controls -->
									</div> <!--  .control-group  -->

									<div class="control-group">
										<div class="controls">
											<input type="submit" name="submit_fullname" value="Save Chaange" class="btn">
										</div> <!--  .controls  -->
									</div> <!--  .control-group  -->
								</form>
							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseOne  -->
					</div> <!--  .accordion-group  -->

					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseTwo" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">
								
							<div class="row">
								<div class="span2">Admin Username : </div>
									<div class="span4">
										{$admin['admin_username']}
									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->	
							</a> <!--  #collapseTwo  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseTwo" class="accordion-body collapse">
							<div class="accordion-inner">							
								<form action=""  method="post">								
									<div class="control-group">
										<label>Username </label>
										<div class="controls">
											<input type="text" name="username" value="{$admin['admin_username']}">
										</div> <!--   .controls -->
									</div> <!--  .control-group  -->

									<div class="control-group">
										<div class="controls">
											<input type="submit" name="submit_username" value="Save Chaange" class="btn">
										</div> <!--  .controls  -->
									</div> <!--  .control-group  -->
								</form>
							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseTwo  -->
					</div> <!--  .accordion-group  -->

					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseThree" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">								
							<div class="row">
								<div class="span2">Admin Email : </div>
									<div class="span4">
										{$admin['admin_email']}
									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->	
							</a> <!--  #collapseThree  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseThree" class="accordion-body collapse">
							<div class="accordion-inner">
							
								<form action=""  method="post">								
									<div class="control-group">
										<label>Email </label>
										<div class="controls">
											<input type="text" name="email" value="{$admin['admin_email']}">
										</div> <!--   .controls -->
									</div> <!--  .control-group  -->

									<div class="control-group">
										<div class="controls">
											<input type="submit" name="submit_email" value="Save Chaange" class="btn">
										</div> <!--  .controls  -->
									</div> <!--  .control-group  -->
								</form>

							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseThree  -->
					</div> <!--  .accordion-group  -->

					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseFour" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">
								
							<div class="row">
								<div class="span2">Admin Password : </div>
									<div class="span4">
										{$admin['admin_password']}
									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->	
							</a> <!--  #collapseFour  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseFour" class="accordion-body collapse">
							<div class="accordion-inner">							
								<form action="" method="post">
									<div class="control-group">
										<label>Password </label>
										<div class="controls">
											<input type="text" name="password" value="{$admin['admin_password']}">
										</div> <!--   .controls -->
									</div> <!--  .control-group  -->

									<div class="control-group">
										<div class="controls">
											<input type="submit" name="submit_password" value="Save Chaange" class="btn">
										</div> <!--  .controls  -->
									</div> <!--  .control-group  -->
								</form>
							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseFour  -->
					</div> <!--  .accordion-group  -->

					<div class="accordion-group">
						<div class="accordion-heading">
							<a href="#collapseFive" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2">
								
							<div class="row">
								<div class="span2">Join date : </div>
									<div class="span4">
										{$admin['date_time']|date_format:'%B %d, %Y at %I: %M %p'}
									</div> <!--  .span4  -->
								<div class="pull-right">Edit</div>
							</div> <!--  .row  -->	
							</a> <!--  #collapseFive  -->
						</div> <!--  .accordion-heading  -->

						<div id="collapseFive" class="accordion-body collapse">
							<div class="accordion-inner">
								<p><a href="#">Don\'t allow change your join date!</a></p>
							</div> <!--  .accordion-inner  -->
						</div> <!--  #collapseFive  -->
					</div> <!--  .accordion-group  -->
				</div> <!--  .accordion #accordion2  -->
				<p><i class="pull-right"><a href="admin_view_post.php?id={$admin['admin_id']}&author={$admin['admin_username']}">Show your post</a></i></p> 	
			{/foreach}	
			{/if}
		</div> <!--  .span12  -->

	</div> <!--  .row  -->
</div> <!--  .container content  -->