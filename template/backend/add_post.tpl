<div class="container content thumbnail">
	<div class="row">
		<div class="span3">
			{include file="left_menu.tpl"}
		</div><!-- .span3  -->

		{if $newcategory == ''}
			<div class="span8" style="border:1px solid #ccc;padding:40px;margin-top:-5px;margin-bottom:-5px;">
				{if isset($errors)}
					{foreach from = $errors item = error}
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p>{$error}</p>
						</div> <!--  .alert alert-error -->
					{/foreach}
				{/if}

				<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="control-group">
						<label class="control-label">Post title</label>
						<div class="controls">
							<input type="text" name="title" class="span6" placeholder="Post title" {literal} onfocus="if(this.placeholder=='Post title'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Post title'}" {/literal}>
						</div> <!--   .controls  -->
					</div> <!--  .control-group  -->

					<div class="control-group">
						<label class="control-label">Post content</label>
						<div class="controls">
							<textarea name="content" class="span6" rows="15" placeholder="Post content" {literal} onfocus="if(this.placeholder=='Post content'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Post content'}" {/literal} /></textarea>
						</div> <!--   .controls  -->
					</div> <!--  .control-group  -->
					

					<div class="control-group">
						<label class="control-label">Post Image</label>
						<div class="controls">
							<div id="preview">
								<p><img src="../assets/img/bodybg.jpg" name="user_img" alt="" class="img-polaroid prevImg span2 thumbnail"></p>
							</div>
						</div><!-- .controls  -->
					</div><!-- .control-group  -->

					<div class="control-group">
						<div class="controls">
							<input type="file" name="image" id="photoimg" multiple>
						</div><!-- .controls  -->
					</div><!-- .control-group  -->

					{if $categories}
						<div class="control-group">
							<label class="control-label">Category</label>
							<div class="controls">
								<select name="category" id="">
								{foreach from = $categories item = cat}
									<option value="{$cat['cat_name']}">{$cat['cat_name']}</option>
								{/foreach}
								</select>
							</div> <!--   .controls  -->
						</div> <!--  .control-group  -->
					{/if}

					<div class="control-group">
						<div class="controls">
							<input type="submit" name="submit" value="Publish" class="btn btn-inverse">
						</div> <!--   .controls  -->
					</div> <!--  .control-group  -->					
				</form> <!--  .form-horizontal  -->
			</div> <!--  .span9   -->
		{else}
			<div class="span8" style="border:1px solid #ccc;padding:40px;margin-top:-5px;">
				{if $edit_cat != null}
					{foreach from = $edit_cat item = cat}
						<h2 class="page-header">
							<span>Edit "{$cat['cat_name']}" Category.</span>
							<span class="pull-right btn btn-danger"><a style="color:white;" href="add_post.php?action=newcategory"><i class="fa fa-close"></i></a></span>
						</h2>
						<form action="" method="post" class="form-horizontal">
							<div class="control-group">
								<label class="control-label">Edit Category</label>
								<div class="controls">
									<input type="text" name="cat" value="{$cat['cat_name']}" >
								</div> <!--   .controls  -->
							</div> <!--  .control-group  -->

							<div class="control-group">
								<div class="controls">
									<input type="submit" name="update_cat" value="Update" class="btn btn-success">
								</div><!--   .controls  -->
							</div><!--  .control-group  -->
						</form>
					{/foreach}
				{else}
					<h2 class="page-header">
						<span>Add a new category for article</span>
					</h2>
					<form action="" method="post" class="form-horizontal">
						<div class="control-group">
							<label class="control-label">New Category</label>
							<div class="controls">
								<input type="text" name="cat" placeholder="Add Category" {literal} onfocus="if(this.placeholder=='Add Category'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Add Category'}" {/literal}>
							</div> <!--   .controls  -->
						</div> <!--  .control-group  -->

						<div class="control-group">
							<div class="controls">
								<input type="submit" name="category" value="Add New" class="btn btn-success">
							</div> <!--   .controls  -->
						</div> <!--  .control-group  -->
					</form>
				{/if}


				{* show all category *}
				<table class="table">
					<th style="border-left:1px solid #ccc;">Name</th>
					<th>Edit</th>
					<th style="border-right:1px solid #ccc;">Delete</th>
					{foreach from = $categories item = cat}
						<tr style="border:1px solid #ccc;">
							<td class="span8"><a href="add_post.php?action=managecat&cat_id={$cat['cat_id']}">{$cat['cat_name']}</a></td>
							<td><a href="add_post.php?action=managecat&cat_id={$cat['cat_id']}"><i class="fa fa-pencil"></i></a></td>
							<td><a style="margin-left:20px;" href="add_post.php?action=deletecat&cat_id={$cat['cat_id']}" ><i class="fa fa-trash-o"></i></a></td>
						</tr>
					{/foreach}
				</table>
			</div><!-- .span9  -->
		{/if}
	</div> <!--  .row  -->
</div> <!--  .container .thumbnail  -->
