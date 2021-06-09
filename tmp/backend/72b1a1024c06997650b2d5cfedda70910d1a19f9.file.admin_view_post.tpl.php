<?php /* Smarty version Smarty-3.1.16, created on 2014-08-08 12:04:24
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\admin_view_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:407853d544279b2c69-75430009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72b1a1024c06997650b2d5cfedda70910d1a19f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\admin_view_post.tpl',
      1 => 1406486946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '407853d544279b2c69-75430009',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d544279f91a4_95303128',
  'variables' => 
  array (
    'showPosts' => 0,
    'showPost' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d544279f91a4_95303128')) {function content_53d544279f91a4_95303128($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="container content">
	<div class="row">
		<div class="span12">
			<table class="table table-bordered">
				<tr>
					<th class="span3">Post Title</th>
					<th class="span9">Post Content</th>
					<th class="span2">Post Date</th>
					<th class="span1">Author</th>
					<th class="span3">Post Edit / Delete</th>
				</tr>
				
				<?php  $_smarty_tpl->tpl_vars['showPost'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['showPost']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showPosts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['showPost']->key => $_smarty_tpl->tpl_vars['showPost']->value) {
$_smarty_tpl->tpl_vars['showPost']->_loop = true;
?>
					<tr>
						<td><a href="#"><?php echo $_smarty_tpl->tpl_vars['showPost']->value['post_title'];?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['showPost']->value['post_content'];?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['showPost']->value['post_date'],'%B %d, %Y at %I:%M %p');?>
</td>
						<td><a href="admin_view_profile.php?id=<?php echo $_smarty_tpl->tpl_vars['showPost']->value['admin_id'];?>
&author=<?php echo $_smarty_tpl->tpl_vars['showPost']->value['admin_username'];?>
"><?php echo $_smarty_tpl->tpl_vars['showPost']->value['admin_username'];?>
</a></td>
						<td>
							<p><a href="delete_post.php?id=<?php echo $_smarty_tpl->tpl_vars['showPost']->value['post_id'];?>
" class="pull-right">| &nbsp;Delete</a><a href="edit_post.php?id=<?php echo $_smarty_tpl->tpl_vars['showPost']->value['post_id'];?>
" class="pull-right">| Edit&nbsp;</a>
							Post <a href="../single.php?id=<?php echo $_smarty_tpl->tpl_vars['showPost']->value['post_id'];?>
&article=<?php echo $_smarty_tpl->tpl_vars['showPost']->value['post_title'];?>
" target="_blank">View</a></p>
						</td>
					</tr>
				<?php } ?>
			</table> <!--  .table table-bordered  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container  --><?php }} ?>
