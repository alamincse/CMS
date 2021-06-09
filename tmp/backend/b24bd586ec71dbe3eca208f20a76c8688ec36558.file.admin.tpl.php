<?php /* Smarty version Smarty-3.1.16, created on 2014-12-07 19:59:37
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\backend\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122545484a399e08593-49103340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b24bd586ec71dbe3eca208f20a76c8688ec36558' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\backend\\admin.tpl',
      1 => 1406461667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122545484a399e08593-49103340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total_admin' => 0,
    'authors' => 0,
    'author' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5484a399e8b354_93052448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5484a399e8b354_93052448')) {function content_5484a399e8b354_93052448($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="container content">
	<div class="row">
		<div class="span12">
			<h2 class="page-header alert alert-info">
				<span>Admin area... </span>
				<a href="add_user.php" class="pull-right btn btn-info">Add User</a>
			</h2>

			<p class="pull-right">Total admin: <a href="#"><?php echo $_smarty_tpl->tpl_vars['total_admin']->value;?>
</a></p>
			<table class="table table-bordered">
				<tr>
					<th class="span2">Admin Fullname</th>
					<th class="span2">Admin Username</th>
					<th class="span3">Admin Email</th>
					<th class="span2">Admin Password</th>
					<th class="span2">Join Date</th>
					<th class="span3">Admin view profile</th>	
				</tr>
				
				<?php  $_smarty_tpl->tpl_vars['author'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['author']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['authors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['author']->key => $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['author']->value['admin_fullname'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['author']->value['admin_username'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['author']->value['admin_email'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['author']->value['admin_password'];?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['author']->value['date_time'],'%B %d, %Y at %I:%M %p');?>
</td>
						<td>
							<p><a href="admin_view_profile.php?id=<?php echo $_smarty_tpl->tpl_vars['author']->value['admin_id'];?>
&author=<?php echo $_smarty_tpl->tpl_vars['author']->value['admin_username'];?>
">View Profile</a> | <a href="admin_profile_delete.php?id=<?php echo $_smarty_tpl->tpl_vars['author']->value['admin_id'];?>
&author=<?php echo $_smarty_tpl->tpl_vars['author']->value['admin_username'];?>
">Delete Admin</a></p>
						</td>
					</tr>
				<?php } ?>
			</table> <!--  .table table-bordered  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!-- .container    --><?php }} ?>
