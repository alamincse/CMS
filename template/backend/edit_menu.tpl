<div class="container content well">
	<div class="row">
		<div class="span12">
			<h2 class="page-header">Edit menu in your site. <a href="site_menu.php" class="pull-right btn btn-inverse">Back</a></h2>
			
			{if isset($errors)}
				{if !empty($errors)}
					{foreach from = $errors item = $error}
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							{$error}
						</div> <!--  .alert alert-error  -->
					{/foreach}
				{/if}
			{/if}

			<form action="" class="form-horizontal" method="post">

				<div class="control-group">
					<label >Menu Title</label>
					<input type="text" name="menu-title" class="span12" value="{$edit_menu['menu_title']}">
				</div> <!--  .control  -->

				<div class="control-group">
					<label >Menu Content</label>
					<textarea name="menu-content" class="span8" rows="10">{$edit_menu['menu_content']}</textarea>
				</div> <!--  .control  -->

				<div class="control-group">
					<input type="submit" name="submit" value="Change menu" class="btn btn-inverse">
				</div> <!--  .control  -->
			</form> <!--  .form-horizontal  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container  -->