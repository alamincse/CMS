<div class="container login">
	<div class="row">
		<div class="span7 offset2 admin-login-page thumbnail">
			<header>
				<h2 class="page-header admin">Administrator Login</h2>
				{* logout msg *}
				{if isset($action)}
					<div class="alert alert-success">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p>{$action}</p>
					</div><!--  .alert .alert-error -->
				{/if}
			</header>
			
			{if isset($errors)}
				{foreach from = $errors item = error}
					<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p>{$error}</p>
					</div><!--  .alert .alert-error  -->
				{/foreach}
			{/if}

			<form action="login.php" class="form-horizontal" method="post">
				<div class="control-group">
					<label class="control-label">Username</label>
					<div class="controls">
						<input type="text" name="username" placeholder="Username" {literal} onfocus="if(this.placeholder == 'Username'){this.placeholder = '';}" onblur="if(this.placeholder == ''){this.placeholder = 'Username'}" {/literal} />
					</div><!--  .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Password</label>
					<div class="controls">
						<input type="password" name="password" placeholder="Password" {literal} onfocus="if(this.placeholder == 'Password'){this.placeholder = '';}" onblur="if(this.placeholder == ''){this.placeholder = 'Password'}" {/literal} />
					</div><!--  .controls  -->
				</div><!--  .control-group  -->


				<div class="control-group">
					<div class="controls span2">
						 <label class="checkbox">
							<input type="checkbox" name="rememberme"><span>Remember me.</span>
						</label><!-- .checkbox  -->
					</div><!--  .controls  -->
				</div><!--  .control-group  -->

				<!-- <div class="control-group"> -->
					<!-- <div class="controls"> -->
						<!-- <p><a href="">Forgot Your Password?</a></p> -->
					<!-- </div>  .controls  -->
				<!-- </div>  .control-group  -->

				<div class="control-group">
					<div class="controls">
						<input type="submit" name="submit" value="Login" class="btn btn-primary">
					</div><!--  .controls  -->
				</div><!--  .control-group  -->
			</form><!--  .form-horizontal  -->
		</div><!--  .span8 offset2  -->
	</div><!--  .row  -->
</div><!--  .container  -->