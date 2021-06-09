<div class="container content">
	<div class="row">
		<div class="span4">
			<h2 class="page-header">
				<span>Widgets</span>
				<span class="pull-right">
					{* when admin click create new widget tab,then it's hidden. otherwise it's active *}
					{if $new_id == ''}
						<a href="{$base_url}/siteadmin/widgets.php?action=add&add_new={$widgets_last_id}" class="btn btn-success">Add Widgets</a>
					{/if}
				</span>
			</h2><!--  .page-header -->


			<ul class="widgets-menu">
				{foreach from = $widgets item = widget}
					<li>
						<span style="color:#0055AA;"><i class="fa fa-plug"></i></span>&nbsp;
						<a href="{$base_url}/siteadmin/widgets.php?action=edit&edit={$widget['widget_id']}&wigets_name={$widget['widget_name']}">{$widget['widget_name']}</a>

						<a href="widgets.php?widgets_id={$widget['widget_id']}&widget_name={$widget['widget_name']}" class="pull-right btn btn-danger">Delete</a>
					</li>
				{/foreach}
			</ul><!--  .widgets-menu  -->
		</div><!-- .span4  -->

		
		{* when admin edit a widget, then it's active. otherwise it's hidden *}
		{if isset($widgets_edit) && $widgets_edit <> ''}
			<div class="span8">
				{* show errors *}
				{if $errors <> ''}
					{foreach from = $errors item = error}
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p>{$error}</p>
						</div><!--  .alert .alert-error -->
					{/foreach}
				{/if}

				{foreach from = $widgets_edit item = edit}
					<h2 class="page-header">
						<span>Edit <a href="{$base_url}/siteadmin/widgets.php?edit={$edit['widget_id']}">{$edit['widget_name']}</a> widget</span>
						<span class="pull-right"><a href="widgets.php" class="btn btn-danger">Close</a></span>
					</h2><!-- .page-header  -->

					<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
						<div class="control-group">
							<label for="widget-name" class="control-label">Widget Name</label>
							<div class="controls">
								<input type="text" name="widget-name" id="widget-name" value="{$edit['widget_name']}" class="span5" disabled="yes">
							</div><!-- .controls  -->
						</div><!--  .control-group  -->

						<div class="control-group">
							<label for="w-sub" class="control-label">Subject</label>
							<div class="controls">
								<textarea name="w-sub" class="span5" id="w-sub" rows="2">{$edit['widget_sub']}</textarea>
							</div><!-- .controls  -->
						</div><!--  .control-group  -->

						<div class="control-group">
							<label for="widget-msg" class="control-label">Content</label>
							<div class="controls">
								<textarea name="widget-msg" id="widget-msg" cols="30" rows="10" class="span5">{$edit['widget_content']}</textarea>
							</div><!-- .controls  -->
						</div><!--  .control-group  -->

						<div class="control-group">
							<label class="control-label">Widget Media</label>
							<div class="controls">
								<div id="preview">
									<p><img src="../uploads/{$edit['widget_id']}/{$edit['widget_media']}" name="user_img" alt="" class="img-polaroid prevImg span2 thumbnail"></p>
								</div>
							</div><!-- .controls  -->
						</div><!--  .control-group  -->

						<div class="control-group">
							<div class="controls">
								<input type="file" name="image" id="photoimg" multiple>
							</div><!-- .controls  -->
						</div><!--  .control-group  -->

						<div class="control-group">
							<div class="controls">
								<input type="submit" name="widget-edit" value="Update Widget" class="btn btn-success">
								<a href="widgets.php" class="btn btn-danger">Cancle</a>
							</div><!-- .controls  -->
						</div><!--  .control-group  -->
					</form>
				{/foreach}
			</div><!--  .span8 -->
		{/if}

		
		{* when admin create new widget, then it's active. otherwise it's hidden *}
		{if isset($new_id)  && $new_id <> '' && $widgets_edit == ''}
			<div class="span8">
				<h2 class="page-header">
					<span>Create a new widget</span>
					<span class="pull-right"><a href="widgets.php" class="btn btn-danger">Close</a></span>
				</h2><!--  .page-header -->

				{* show errors *}
				{if $errors <> ''}
					{foreach from = $errors item = error}
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p>{$error}</p>
						</div><!--  .alert .alert-error -->
					{/foreach}
				{/if}

				<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="control-group">
						<label for="widget-name" class="control-label">Widget Name</label>
						<div class="controls">
							<input type="text" name="widget-name" id="widget-name" placeholder="Widget Name" {literal} onfocus="if(this.placeholder=='Widget Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Widget Name';}"{/literal} class="span5">
						</div><!-- .controls  -->
					</div><!--  .control-group  -->

					<div class="control-group">
						<label for="w-sub" class="control-label">Subject</label>
						<div class="controls">
							<textarea name="w-sub" class="span5" id="w-sub" rows="2" placeholder="Subject" {literal} onfocus="if(this.placeholder=='Subject'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Subject';}"{/literal}></textarea>
						</div><!-- .controls  -->
					</div><!--  .control-group  -->

					<div class="control-group">
						<label for="widget-msg" class="control-label">Content</label>
						<div class="controls">
							<textarea name="widget-msg" id="widget-msg" cols="30" rows="10" class="span5" placeholder="Content" {literal} onfocus="if(this.placeholder=='Content'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Content';}"{/literal}></textarea>
						</div><!-- .controls  -->
					</div><!--  .control-group  -->

					<div class="control-group">
						<label class="control-label">Widget Media</label>
						<div class="controls">
							<div id="preview">
								<p><img src="../assets/img/noimage.png" name="user_img" alt="" class="img-polaroid prevImg span2 thumbnail"></p>
							</div>
						</div><!-- .controls  -->
					</div><!-- .control-group  -->

					<div class="control-group">
						<div class="controls">
							<input type="file" name="image" id="photoimg" multiple>
						</div><!-- .controls  -->
					</div><!-- .control-group  -->
					
					<div class="control-group">
						<div class="controls">
							<input type="submit" name="widget-submit" value="Create Widget" class="btn btn-success">
							<a href="widgets.php" class="btn btn-danger">Cancle</a>
						</div><!-- .controls  -->
					</div><!--  .control-group  -->
				</form>
			</div><!-- .span8  -->
		{/if}
	</div><!--  .row  -->
</div><!--  .container .content -->