<?php /* Smarty version Smarty-3.1.16, created on 2014-08-21 15:01:44
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\add_widgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1795653f52f84e9d224-53263305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06ff9d01aa83c30e1dd464331dc7acd7bb11853d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\add_widgets.tpl',
      1 => 1408626103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1795653f52f84e9d224-53263305',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53f52f84ed4f62_77612429',
  'variables' => 
  array (
    'widget_books' => 0,
    'base_url' => 0,
    'books' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f52f84ed4f62_77612429')) {function content_53f52f84ed4f62_77612429($_smarty_tpl) {?><div class="container content">
	<div class="row">
		<div class="span4">
			<h2>Widgets</h2>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['books'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['books']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widget_books']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['books']->key => $_smarty_tpl->tpl_vars['books']->value) {
$_smarty_tpl->tpl_vars['books']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/siteadmin/widgets.php?action=edit&edit=<?php echo $_smarty_tpl->tpl_vars['books']->value['widget_id'];?>
&wigets_name=<?php echo $_smarty_tpl->tpl_vars['books']->value['widget_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['books']->value['widget_name'];?>
</a></li>
				<?php } ?>
			</ul>
		</div><!-- .span4  -->

		<div class="span8">
			<h2 class="page-header">Create a new widget</h2>
			<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="control-group">
					<label for="widget-name" class="control-label">Widget Name</label>
					<div class="controls">
						<input type="text" name="widget-name" id="widget-name" placeholder="Widget Name"  onfocus="if(this.placeholder=='Widget Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Widget Name';}">
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="w-sub" class="control-label">Subject</label>
					<div class="controls">
						<input type="text" name="w-sub" id="w-sub" placeholder="Subject"  onfocus="if(this.placeholder=='Subject'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Subject';}">
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
</div> <!--  .container .content --><?php }} ?>
