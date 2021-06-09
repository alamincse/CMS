<?php /* Smarty version Smarty-3.1.16, created on 2014-12-07 18:19:05
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\backend\widgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1517454848c09653564-96885815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d902a4207b1c1ca0da0e6db416737555441b641' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\backend\\widgets.tpl',
      1 => 1415407939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1517454848c09653564-96885815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_id' => 0,
    'base_url' => 0,
    'widgets_last_id' => 0,
    'widgets' => 0,
    'widget' => 0,
    'widgets_edit' => 0,
    'errors' => 0,
    'error' => 0,
    'edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54848c097068f8_22069110',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54848c097068f8_22069110')) {function content_54848c097068f8_22069110($_smarty_tpl) {?><div class="container content">
	<div class="row">
		<div class="span4">
			<h2 class="page-header">
				<span>Widgets</span>
				<span class="pull-right">
					
					<?php if ($_smarty_tpl->tpl_vars['new_id']->value=='') {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/siteadmin/widgets.php?action=add&add_new=<?php echo $_smarty_tpl->tpl_vars['widgets_last_id']->value;?>
" class="btn btn-success">Add Widgets</a>
					<?php }?>
				</span>
			</h2><!--  .page-header -->


			<ul class="widgets-menu">
				<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value) {
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
					<li>
						<span style="color:#0055AA;"><i class="fa fa-plug"></i></span>&nbsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/siteadmin/widgets.php?action=edit&edit=<?php echo $_smarty_tpl->tpl_vars['widget']->value['widget_id'];?>
&wigets_name=<?php echo $_smarty_tpl->tpl_vars['widget']->value['widget_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['widget']->value['widget_name'];?>
</a>

						<a href="widgets.php?widgets_id=<?php echo $_smarty_tpl->tpl_vars['widget']->value['widget_id'];?>
&widget_name=<?php echo $_smarty_tpl->tpl_vars['widget']->value['widget_name'];?>
" class="pull-right btn btn-danger">Delete</a>
					</li>
				<?php } ?>
			</ul><!--  .widgets-menu  -->
		</div><!-- .span4  -->

		
		
		<?php if (isset($_smarty_tpl->tpl_vars['widgets_edit']->value)&&$_smarty_tpl->tpl_vars['widgets_edit']->value!='') {?>
			<div class="span8">
				
				<?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
					<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
						</div><!--  .alert .alert-error -->
					<?php } ?>
				<?php }?>

				<?php  $_smarty_tpl->tpl_vars['edit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['edit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widgets_edit']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['edit']->key => $_smarty_tpl->tpl_vars['edit']->value) {
$_smarty_tpl->tpl_vars['edit']->_loop = true;
?>
					<h2 class="page-header">
						<span>Edit <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/siteadmin/widgets.php?edit=<?php echo $_smarty_tpl->tpl_vars['edit']->value['widget_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['edit']->value['widget_name'];?>
</a> widget</span>
						<span class="pull-right"><a href="widgets.php" class="btn btn-danger">Close</a></span>
					</h2><!-- .page-header  -->

					<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
						<div class="control-group">
							<label for="widget-name" class="control-label">Widget Name</label>
							<div class="controls">
								<input type="text" name="widget-name" id="widget-name" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value['widget_name'];?>
" class="span5" disabled="yes">
							</div><!-- .controls  -->
						</div><!--  .control-group  -->

						<div class="control-group">
							<label for="w-sub" class="control-label">Subject</label>
							<div class="controls">
								<textarea name="w-sub" class="span5" id="w-sub" rows="2"><?php echo $_smarty_tpl->tpl_vars['edit']->value['widget_sub'];?>
</textarea>
							</div><!-- .controls  -->
						</div><!--  .control-group  -->

						<div class="control-group">
							<label for="widget-msg" class="control-label">Content</label>
							<div class="controls">
								<textarea name="widget-msg" id="widget-msg" cols="30" rows="10" class="span5"><?php echo $_smarty_tpl->tpl_vars['edit']->value['widget_content'];?>
</textarea>
							</div><!-- .controls  -->
						</div><!--  .control-group  -->

						<div class="control-group">
							<label class="control-label">Widget Media</label>
							<div class="controls">
								<div id="preview">
									<p><img src="../uploads/<?php echo $_smarty_tpl->tpl_vars['edit']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['edit']->value['widget_media'];?>
" name="user_img" alt="" class="img-polaroid prevImg span2 thumbnail"></p>
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
				<?php } ?>
			</div><!--  .span8 -->
		<?php }?>

		
		
		<?php if (isset($_smarty_tpl->tpl_vars['new_id']->value)&&$_smarty_tpl->tpl_vars['new_id']->value!=''&&$_smarty_tpl->tpl_vars['widgets_edit']->value=='') {?>
			<div class="span8">
				<h2 class="page-header">
					<span>Create a new widget</span>
					<span class="pull-right"><a href="widgets.php" class="btn btn-danger">Close</a></span>
				</h2><!--  .page-header -->

				
				<?php if ($_smarty_tpl->tpl_vars['errors']->value!='') {?>
					<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
						<div class="alert alert-error">
							<a href="" class="close" data-dismiss="alert">&times;</a>
							<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
						</div><!--  .alert .alert-error -->
					<?php } ?>
				<?php }?>

				<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="control-group">
						<label for="widget-name" class="control-label">Widget Name</label>
						<div class="controls">
							<input type="text" name="widget-name" id="widget-name" placeholder="Widget Name"  onfocus="if(this.placeholder=='Widget Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Widget Name';}" class="span5">
						</div><!-- .controls  -->
					</div><!--  .control-group  -->

					<div class="control-group">
						<label for="w-sub" class="control-label">Subject</label>
						<div class="controls">
							<textarea name="w-sub" class="span5" id="w-sub" rows="2" placeholder="Subject"  onfocus="if(this.placeholder=='Subject'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Subject';}"></textarea>
						</div><!-- .controls  -->
					</div><!--  .control-group  -->

					<div class="control-group">
						<label for="widget-msg" class="control-label">Content</label>
						<div class="controls">
							<textarea name="widget-msg" id="widget-msg" cols="30" rows="10" class="span5" placeholder="Content"  onfocus="if(this.placeholder=='Content'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Content';}"></textarea>
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
		<?php }?>
	</div><!--  .row  -->
</div><!--  .container .content --><?php }} ?>
