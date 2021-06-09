<?php /* Smarty version Smarty-3.1.16, created on 2015-08-05 05:56:14
         compiled from "C:\xampp\htdocs\cms_project\template\backend\edit_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144555c1895e586171-26529259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffc77a4e161caf09ae6a4f718c1e662d98167611' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms_project\\template\\backend\\edit_post.tpl',
      1 => 1417774360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144555c1895e586171-26529259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'edit_post' => 0,
    'base_url' => 0,
    'categories' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55c1895ebcce36_74757420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1895ebcce36_74757420')) {function content_55c1895ebcce36_74757420($_smarty_tpl) {?><div class="container content">	
	<div class="row">
		<div class="span3">
			<?php echo $_smarty_tpl->getSubTemplate ("left_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3  -->

		<div class="span8">
			<h2 class="page-header">
				<span>Edit Your post.</span>
				<a href="view_post.php" class="pull-right">Back all post</a>
			</h2>

			
			<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
				<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
					<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
					</div><!--  .alert .alert-error  -->
				<?php } ?>
			<?php }?>

			<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="control-group">
					<label class="control-label" >Post title</label>
					<div class="controls">
						<input type="text" name="post-title" value="<?php echo $_smarty_tpl->tpl_vars['edit_post']->value['post_title'];?>
">
					</div><!-- .controls  -->
				</div><!--  .control  -->

				<div class="control-group">
					<label class="control-label" >Post content</label>
					<div class="controls">
						<textarea name="post-content" class="span8" rows="10"><?php echo $_smarty_tpl->tpl_vars['edit_post']->value['post_content'];?>
</textarea>
					</div><!-- .controls  -->
				</div><!--  .control  -->

				<div class="control-group">
					<label class="control-label">Post Image</label>
					<div class="controls">
						<div id="preview">
							<p><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/articles_img/uploads/<?php echo $_smarty_tpl->tpl_vars['edit_post']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['edit_post']->value['image_name'];?>
" name="user_img" alt="" class="img-polaroid prevImg span2 thumbnail"></p>
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
							<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</option>
							<?php } ?>
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
</div><!--  .container content  --><?php }} ?>
