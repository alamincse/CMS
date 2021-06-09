<div class="container content well">
	<div class="row">
		<div class="span12">
			<h2 class="page-header">
				<span>Add Menu</span>
				<p><a href="site_menu.php" class="pull-right btn btn-normal">Back menu item</a></p>
			</h2>

			{if isset($errors)}
				{if !empty($errors)}
					{foreach from = $errors item = error}
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							{$error}
						</div> <!--  .alert alert-error  -->
					{/foreach}
				{else}
					<div class="alert alert-success">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p>Well done! You have successfully added menu.<a href="site_menu.php">View menu</a></p>
					</div> <!--  .alert alert-success  -->
				{/if}
			{/if}

			<form action="" class="form-horizontal" method="post">
				<div class="control-group">
					<label >Menu Title</label>
					<input type="text" name="menu-title" placeholder="Menu title" class="span12" {literal} onfocus="if(this.placeholder=='Menu title'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Menu title'}" {/literal} />
				</div> <!--  .control  -->

				<div class="control-group">
					<label >Menu Content</label>
					<textarea name="menu-content" class="span8" rows="10"  placeholder="Content"></textarea>
				</div> <!--  .control  -->

				<div class="control-group">
					<input type="submit" name="submit" value="Add menu" class="btn btn-inverse">
				</div> <!--  .control  -->
			</form> <!--  .form-horizontal  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container  -->