<?php /* Smarty version Smarty-3.1.16, created on 2014-12-07 21:07:55
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\backend\add_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125685484b32cafc4c6-60977801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09419e57c2df919061344c4521ec5a613449a990' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\backend\\add_post.tpl',
      1 => 1417982873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125685484b32cafc4c6-60977801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5484b32cbede21_64096641',
  'variables' => 
  array (
    'newcategory' => 0,
    'errors' => 0,
    'error' => 0,
    'categories' => 0,
    'cat' => 0,
    'edit_cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484b32cbede21_64096641')) {function content_5484b32cbede21_64096641($_smarty_tpl) {?><div class="container content thumbnail">
	<div class="row">
		<div class="span3">
			<?php echo $_smarty_tpl->getSubTemplate ("left_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3  -->

		<?php if ($_smarty_tpl->tpl_vars['newcategory']->value=='') {?>
			<div class="span8" style="border:1px solid #ccc;padding:40px;margin-top:-5px;margin-bottom:-5px;">
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
						</div> <!--  .alert alert-error -->
					<?php } ?>
				<?php }?>

				<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
					<div class="control-group">
						<label class="control-label">Post title</label>
						<div class="controls">
							<input type="text" name="title" class="span6" placeholder="Post title"  onfocus="if(this.placeholder=='Post title'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Post title'}" >
						</div> <!--   .controls  -->
					</div> <!--  .control-group  -->

					<div class="control-group">
						<label class="control-label">Post content</label>
						<div class="controls">
							<textarea name="content" class="span6" rows="15" placeholder="Post content"  onfocus="if(this.placeholder=='Post content'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Post content'}"  /></textarea>
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

					<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
						<div class="control-group">
							<label class="control-label">Category</label>
							<div class="controls">
								<select name="category" id="">
								<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</option>
								<?php } ?>
								</select>
							</div> <!--   .controls  -->
						</div> <!--  .control-group  -->
					<?php }?>

					<div class="control-group">
						<div class="controls">
							<input type="submit" name="submit" value="Publish" class="btn btn-inverse">
						</div> <!--   .controls  -->
					</div> <!--  .control-group  -->					
				</form> <!--  .form-horizontal  -->
			</div> <!--  .span9   -->
		<?php } else { ?>
			<div class="span8" style="border:1px solid #ccc;padding:40px;margin-top:-5px;">
				<?php if ($_smarty_tpl->tpl_vars['edit_cat']->value!=null) {?>
					<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['edit_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
						<h2 class="page-header">
							<span>Edit "<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
" Category.</span>
							<span class="pull-right btn btn-danger"><a style="color:white;" href="add_post.php?action=newcategory"><i class="fa fa-close"></i></a></span>
						</h2>
						<form action="" method="post" class="form-horizontal">
							<div class="control-group">
								<label class="control-label">Edit Category</label>
								<div class="controls">
									<input type="text" name="cat" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
" >
								</div> <!--   .controls  -->
							</div> <!--  .control-group  -->

							<div class="control-group">
								<div class="controls">
									<input type="submit" name="update_cat" value="Update" class="btn btn-success">
								</div><!--   .controls  -->
							</div><!--  .control-group  -->
						</form>
					<?php } ?>
				<?php } else { ?>
					<h2 class="page-header">
						<span>Add a new category for article</span>
					</h2>
					<form action="" method="post" class="form-horizontal">
						<div class="control-group">
							<label class="control-label">New Category</label>
							<div class="controls">
								<input type="text" name="cat" placeholder="Add Category"  onfocus="if(this.placeholder=='Add Category'){this.placeholder=''}" onblur="if(this.placeholder==''){this.placeholder='Add Category'}" >
							</div> <!--   .controls  -->
						</div> <!--  .control-group  -->

						<div class="control-group">
							<div class="controls">
								<input type="submit" name="category" value="Add New" class="btn btn-success">
							</div> <!--   .controls  -->
						</div> <!--  .control-group  -->
					</form>
				<?php }?>


				
				<table class="table">
					<th style="border-left:1px solid #ccc;">Name</th>
					<th>Edit</th>
					<th style="border-right:1px solid #ccc;">Delete</th>
					<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
						<tr style="border:1px solid #ccc;">
							<td class="span8"><a href="add_post.php?action=managecat&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</a></td>
							<td><a href="add_post.php?action=managecat&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
"><i class="fa fa-pencil"></i></a></td>
							<td><a style="margin-left:20px;" href="add_post.php?action=deletecat&cat_id=<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
" ><i class="fa fa-trash-o"></i></a></td>
						</tr>
					<?php } ?>
				</table>
			</div><!-- .span9  -->
		<?php }?>
	</div> <!--  .row  -->
</div> <!--  .container .thumbnail  -->
<?php }} ?>
