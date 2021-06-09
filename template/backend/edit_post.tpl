<div class="container content">	
	<div class="row">
		<div class="span3">
			{include file="left_menu.tpl"}
		</div><!-- .span3  -->

		<div class="span8">
			<h2 class="page-header">
				<span>Edit Your post.</span>
				<a href="view_post.php" class="pull-right">Back all post</a>
			</h2>

			{* show error msg *}
			{if isset($errors)}
				{foreach from = $errors item = error}
					<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p>{$error}</p>
					</div><!--  .alert .alert-error  -->
				{/foreach}
			{/if}

			<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="control-group">
					<label class="control-label" >Post title</label>
					<div class="controls">
						<input type="text" name="post-title" value="{$edit_post['post_title']}">
					</div><!-- .controls  -->
				</div><!--  .control  -->

				<div class="control-group">
					<label class="control-label" >Post content</label>
					<div class="controls">
						<textarea name="post-content" class="span8" rows="10">{$edit_post['post_content']}</textarea>
					</div><!-- .controls  -->
				</div><!--  .control  -->

				<div class="control-group">
					<label class="control-label">Post Image</label>
					<div class="controls">
						<div id="preview">
							<p><img src="{$base_url}/articles_img/uploads/{$edit_post['post_id']}/{$edit_post['image_name']}" name="user_img" alt="" class="img-polaroid prevImg span2 thumbnail"></p>
						</div><!-- .preview  -->
					</div><!-- .controls  -->
				</div><!-- .control-group  -->

				<div class="control-group">
					<div class="controls">
						<input type="file" name="image" id="photoimg" multiple>
					</div><!-- .controls  -->
				</div><!-- .control-group  -->
				
				<div class="control-group">
					<label class="control-label">Category</label>
					<div class="controls">
						<select name="category">
							{foreach from = $categories item = cat}
								<option value="{$cat['cat_name']}">{$cat['cat_name']}</option>
							{/foreach}
						</select><!-- .category  -->
					</div><!--   .controls  -->
				</div><!--  .control-group  -->


				<div class="control-group">
					<div class="controls">
						<input type="submit" name="submit" value="Publish" class="btn btn-inverse">
					</div><!-- .controls  -->
				</div><!--  .control  -->
			</form><!--  .form-horizontal  -->	
		</div><!--  .span8  -->
	</div><!--  .row  -->
</div><!--  .container content  -->