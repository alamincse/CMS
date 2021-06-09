<?php /* Smarty version Smarty-3.1.16, created on 2014-12-11 12:39:12
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\backend\read.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10471548982600e3149-94508912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2c3c9c1a60e5c01038573f98f025744f7e73679' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\backend\\read.tpl',
      1 => 1407491748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10471548982600e3149-94508912',
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
  'unifunc' => 'content_548982601b3e76_37424749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548982601b3e76_37424749')) {function content_548982601b3e76_37424749($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
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
