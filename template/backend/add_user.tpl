<div class="container content">
	<div class="row">
		<div class="span12">
			<h2 class="page-header alert alert-info">
				<span>Add User... </span>
				<a href="admin.php" class="pull-right btn btn-info">Back</a>
			</h2> <!--  .page-header alert alert-info  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->

	<div class="row">
		<div class="span12 thumbnail">
			<h2 class="page-header admin">Registration Form</h2>
			{if isset($errors)}
				{if !empty($errors)}
					{foreach from = $errors item = error}
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p>{$error}</p>
						</div> <!--  .alert alert-error  -->
					{/foreach}
							
				{else}
					<div class="alert alert-success">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p>Thank you for registering. Your information has been added to our mailing list.</p>
					</div> <!--  .alert alert-success  -->
				{/if}
			{/if}
	
			<form action="" method="post" class="form-horizontal">
				<div class="control-group">
					<label class="control-label">Fullname</label>
					<div class="controls">
						<input type="text" name="fullname" placeholder="Full name" {literal} onfocus="if(this.placeholder=='Full name'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Full name'}" {/literal} />
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Username</label>
					<div class="controls">
						<input type="text" name="username" placeholder="Username" {literal} onfocus="if(this.placeholder=='Username'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Username'}" {/literal} />
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Email:</label>
					<div class="controls">
						<input type="text" name="email" placeholder="E-mail" {literal} onfocus="if(this.placeholder=='E-mail'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='E-mail'}" {/literal} />
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Password:</label>
					<div class="controls">
						<input type="password" name="password" placeholder="Password" {literal} onfocus="if(this.placeholder=='Password'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Password'}" {/literal} />
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Confirm password:</label>
					<div class="controls">
						<input type="password" name="c-pw" placeholder="Confirm password" {literal} onfocus="if(this.placeholder=='Confirm password'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Confirm password'}" {/literal} /><br><br>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div> <!--  .controls  -->
				</div> <!--  .control-group  -->
			</form> <!--  .form-horizontal  -->
		</div> <!--  .span8 offset2  -->
	</div> <!--  .row  -->
</div> <!--  .container  -->