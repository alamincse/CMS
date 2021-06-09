<?php /* Smarty version Smarty-3.1.16, created on 2014-10-22 16:06:58
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:612553e4a9db550a92-55785310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f49b6467b7623cb7917475dcfd9a7431a42183d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\menu.tpl',
      1 => 1413986745,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '612553e4a9db550a92-55785310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53e4a9db5ca413_08079494',
  'variables' => 
  array (
    'base_url' => 0,
    'dashboard_name' => 0,
    'site_name' => 0,
    'new_msg' => 0,
    'new_msg_complete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e4a9db5ca413_08079494')) {function content_53e4a9db5ca413_08079494($_smarty_tpl) {?><div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/siteadmin" class="brand"><?php echo $_smarty_tpl->tpl_vars['dashboard_name']->value;?>
</a>
			<ul class="nav pull-right">
				<li <?php if ($_smarty_tpl->tpl_vars['site_name']->value=='View Post') {?> class="active" <?php }?>><a href="view_post.php">View Post</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['site_name']->value=='Site Admin') {?> class="active" <?php }?>><a href="admin.php">Admin</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['site_name']->value=='Message'||$_smarty_tpl->tpl_vars['site_name']->value=='Message Read') {?> class="active" <?php }?>>
					<?php if (isset($_smarty_tpl->tpl_vars['new_msg']->value)&&$_smarty_tpl->tpl_vars['new_msg']->value!=0&&!$_smarty_tpl->tpl_vars['new_msg_complete']->value) {?>
					<a href="message.php">Message( <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['new_msg']->value;?>
&nbsp;new msg</span> )</a>

					<?php } else { ?> 
						<a href="message.php">Message</a>
					<?php }?>
				</li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" target="_blank">Veiw Site</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['site_name']->value=='Menu Item'||$_smarty_tpl->tpl_vars['site_name']->value=='Edit Menu'||$_smarty_tpl->tpl_vars['site_name']->value=='Add Menu'||$_smarty_tpl->tpl_vars['site_name']->value=='Widgets') {?> class="active" <?php } else { ?> class="dropdown" <?php }?>><a href="#" class="dropdown-toggle" data-toggle="dropdown">Appaearance <?php if ($_smarty_tpl->tpl_vars['site_name']->value=='Menu Item'||$_smarty_tpl->tpl_vars['site_name']->value=='Edit Menu'||$_smarty_tpl->tpl_vars['site_name']->value=='Add Menu'||$_smarty_tpl->tpl_vars['site_name']->value=='Widgets') {?><b class=""></b><?php } else { ?><b class="caret"></b><?php }?></a>
					<ul class="dropdown-menu">
						<li <?php if ($_smarty_tpl->tpl_vars['site_name']->value=='Menu Item'||$_smarty_tpl->tpl_vars['site_name']->value=='Edit Menu'||$_smarty_tpl->tpl_vars['site_name']->value=='Add Menu') {?> class="active" <?php }?>><a href="site_menu.php">Menu Item</a></li>
						<li <?php if ($_smarty_tpl->tpl_vars['site_name']->value=='Widgets') {?> class ="active" <?php }?>><a href="widgets.php">Widgets</a></li>
						<li class ="divider"></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul><!--  .dropdown-menu -->
				</li><!-- .dropdown  -->
			</ul> <!--  .nav  -->
		</div> <!--  .container  -->
	</div> <!--  .navbar-inner  -->
</div> <!--  .navbar .navbar-fixed-top  --><?php }} ?>
