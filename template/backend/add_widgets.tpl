<div class="container content">
	<div class="row">
		<div class="span4">
			<h2>Widgets</h2>
			<ul>
				{foreach from = $widget_books item = books}
					<li><a href="{$base_url}/siteadmin/widgets.php?action=edit&edit={$books['widget_id']}&wigets_name={$books['widget_name']}">{$books['widget_name']}</a></li>
				{/foreach}
			</ul>
		</div><!-- .span4  -->

		<div class="span8">
			<h2 class="page-header">Create a new widget</h2>
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="control-group">
					<label for="widget-name" class="control-label">Widget Name</label>
					<div class="controls">
						<input type="text" name="widget-name" id="widget-name" placeholder="Widget Name" {literal} onfocus="if(this.placeholder=='Widget Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Widget Name';}"{/literal}>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="w-sub" class="control-label">Subject</label>
					<div class="controls">
						<input type="text" name="w-sub" id="w-sub" placeholder="Subject" {literal} onfocus="if(this.placeholder=='Subject'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Subject';}"{/literal}>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="widget-msg" class="control-label">Content</label>
					<div class="controls">
						<textarea name="widget-msg" id="widget-msg" cols="30" rows="10"></textarea>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label class="control-label">Widget Media</label>
					<div class="controls">
						<input type="file" name="widget-media">
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<div class="controls">
						<input type="submit" name="widget-submit" value="Create Widget" class="btn btn-success">
						<a href="widgets.php" class="btn btn-danger">Cancle</a>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->
			</form>
		</div><!-- .span8  -->
	</div> <!--  .row  -->
</div> <!--  .container .content -->