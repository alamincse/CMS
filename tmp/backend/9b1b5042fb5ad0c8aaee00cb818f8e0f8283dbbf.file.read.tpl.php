<?php /* Smarty version Smarty-3.1.16, created on 2015-08-03 07:38:16
         compiled from "C:\xampp\htdocs\cms_project\template\backend\read.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2768555befe48beb018-82438986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b1b5042fb5ad0c8aaee00cb818f8e0f8283dbbf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cms_project\\template\\backend\\read.tpl',
      1 => 1407491750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2768555befe48beb018-82438986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'un_read' => 0,
    'u_read' => 0,
    'read' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55befe48c8db36_46721666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55befe48c8db36_46721666')) {function content_55befe48c8db36_46721666($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\cms_project\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="container content">
	<div class="row">
		<div class="span2">
			<ul class="nav nav-list">
				<li><a href="message.php">Inbox( <?php if ($_smarty_tpl->tpl_vars['un_read']->value) {?> <?php echo $_smarty_tpl->tpl_vars['un_read']->value;?>
 <?php } else { ?> 0 <?php }?> )</a></li>
				<li><a href="">Sent items( 0 )</a></li>
				<li><a href="">Drafts( 0 )</a></li>
				<li><a href="">Trash( 0 )</a></li>
			</ul>
		</div>
		<div class="span10">
			<?php  $_smarty_tpl->tpl_vars['read'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['read']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['u_read']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['read']->key => $_smarty_tpl->tpl_vars['read']->value) {
$_smarty_tpl->tpl_vars['read']->_loop = true;
?>
				<p><strong>From:</strong> <a href="#"><?php echo $_smarty_tpl->tpl_vars['read']->value['email'];?>
 ( <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['read']->value['time'],"%B %d, %Y at %I: %M %p");?>
 )</a></p>
				<p><strong>Name:</strong> <a href="#"><?php echo $_smarty_tpl->tpl_vars['read']->value['Name'];?>
</a></p>
				<p><strong>Subject:</strong> <a href=""><?php echo $_smarty_tpl->tpl_vars['read']->value['subject'];?>
</a></p>
				<p><strong>Message:</strong> <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['read']->value['message'];?>
</p>
			<?php } ?>
			
			<a href="#">Reply...</a><br><br>
			<div id="reply-msg">
			    <form action="">
			    	<label>Sbuject</label>
			    		<input type="text" class="span10" placeholder="Subject"  onfocus="if(this.placeholder=='Subject'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Subject';}" >
			    	<label>Message</label>
			    		<textarea name="" id="" cols="30" rows="10" placeholder="Type your message..."></textarea>
			    	
			    	<br><br>
			    	<input type="submit" name="submit" class="btn btn-inverse" value="Send Message">
			    </form>
			</div><!-- #reply-msg  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container   --><?php }} ?>
