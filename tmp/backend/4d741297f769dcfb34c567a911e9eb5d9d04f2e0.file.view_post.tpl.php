<?php /* Smarty version Smarty-3.1.16, created on 2014-10-25 21:28:17
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\view_post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1872853d2a3e6d119d8-97653138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d741297f769dcfb34c567a911e9eb5d9d04f2e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\view_post.tpl',
      1 => 1414265295,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872853d2a3e6d119d8-97653138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53d2a3e6d57d69_59655731',
  'variables' => 
  array (
    'total_post' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d2a3e6d57d69_59655731')) {function content_53d2a3e6d57d69_59655731($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="container content">
	<div class="row">
		<div class="span3">
			<?php echo $_smarty_tpl->getSubTemplate ("left_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3  -->

		<div class="span9">
			<h2 class="well">
				<span>All Post Here...</span>
			</h2>
			
			<p>Total Post Published : <?php echo $_smarty_tpl->tpl_vars['total_post']->value;?>
</p>

			<table class="table table-bordered">
				<tr>
					<th class="span2">Post Title</th>
					<th class="span6">Post Content</th>
					<th class="span1">Post Date</th>
					<th class="span1">Author</th>
					<th class="span2">Post Edit / Delete</th>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
					<tr>
						<td><a href=""><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['post_content'];?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['post_date'],'%B %d, %Y at %I:%M %p');?>
</td>
						<td><a href="admin_view_profile.php ?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['admin_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['admin_username'];?>
</a></td>
						<td>
							<p>
								<a href="delete_post.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
&article=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
" class="pull-right">| &nbsp;Delete</a>
								<a href="edit_post.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
&article=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
" class="pull-right">| Edit&nbsp;</a>
								Post <a href="../single.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
&article=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
">View</a>
							</p>
						</td>
					</tr>
				<?php } ?>
			</table> <!--  .table table-bordered  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container   --><?php }} ?>
