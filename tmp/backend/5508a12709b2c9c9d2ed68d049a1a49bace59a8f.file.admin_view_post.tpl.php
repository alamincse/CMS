<?php /* Smarty version Smarty-3.1.16, created on 2015-08-05 05:59:48
         compiled from "C:\xampp\htdocs\cms_project\template\backend\admin_view_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155655c18a341ea455-65393652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5508a12709b2c9c9d2ed68d049a1a49bace59a8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms_project\\template\\backend\\admin_view_post.tpl',
      1 => 1406486948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155655c18a341ea455-65393652',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'showPosts' => 0,
    'showPost' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55c18a34288584_70420955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c18a34288584_70420955')) {function content_55c18a34288584_70420955($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\cms_project\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
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
