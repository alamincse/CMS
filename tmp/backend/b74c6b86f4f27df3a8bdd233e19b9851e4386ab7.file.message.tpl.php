<?php /* Smarty version Smarty-3.1.16, created on 2014-08-10 23:19:20
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2082753dfe72d340ba6-44764169%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b74c6b86f4f27df3a8bdd233e19b9851e4386ab7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\message.tpl',
      1 => 1407705556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2082753dfe72d340ba6-44764169',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53dfe72d3a1364_65832781',
  'variables' => 
  array (
    'un_read' => 0,
    'read_msg' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53dfe72d3a1364_65832781')) {function content_53dfe72d3a1364_65832781($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_html_table')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\function.html_table.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.truncate.php';
?><div class="container content">
	<div class="row">
		<div class="span2">
			<ul class="nav nav-list">
				<li><a href="">Inbox( <?php if ($_smarty_tpl->tpl_vars['un_read']->value) {?> <?php echo $_smarty_tpl->tpl_vars['un_read']->value;?>
 <?php } else { ?> 0 <?php }?> )</a></li>
				<li><a href="">Sent items( 0 )</a></li>
				<li><a href="">Drafts( 0 )</a></li>
				<li><a href="">Trash( 0 )</a></li>
			</ul>
		</div>
		<div class="span10">
			<!-- <?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['read_msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?> -->
				<!-- <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['msg']->value['email'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['msg']->value['location'];?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['msg']->value['time'],'%B %d, %Y at %I:%M %p');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['msg']->value['subject'];?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['msg']->value['message'];?>
<?php $_tmp5=ob_get_clean();?><?php echo smarty_function_html_table(array('loop'=>array("<a href='#'>".((string)$_smarty_tpl->tpl_vars['msg']->value['Name'])."</a>",$_tmp1,$_tmp2,$_tmp3,$_tmp4,$_tmp5),'cols'=>7),$_smarty_tpl);?>
 -->
			<!-- <?php }
if (!$_smarty_tpl->tpl_vars['msg']->_loop) {
?> -->
				<!-- No items were found in the search -->
			<!-- <?php } ?> -->
			<table class="table table-bordered">
				<tr>
					<th class="span1">From</th>
					<th class="span1">E-mail</th>
					<th class="span1">State</th>
					<th class="span2">Time</th>
					<th class="span1">Subject</th>
					<th class="span3">Message</th>
					<th class="span1">Read/un-read</th>
					<th class="span1">Reply</th>
				</tr>
				
				<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['read_msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
					<tr>
						<td><a href="#"><?php echo $_smarty_tpl->tpl_vars['msg']->value['Name'];?>
</a></td>
						<td><?php echo $_smarty_tpl->tpl_vars['msg']->value['email'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['msg']->value['location'];?>
</td>
						<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['msg']->value['time'],'%B %d, %Y at %I:%M %p');?>
</td>
						<td><a href="read.php?reads=<?php echo $_smarty_tpl->tpl_vars['msg']->value['msg_id'];?>
&amp;subject=<?php echo urlencode($_smarty_tpl->tpl_vars['msg']->value['subject']);?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['msg']->value['token'];?>
"><?php echo $_smarty_tpl->tpl_vars['msg']->value['subject'];?>
</a></td>

						<?php ob_start();?><?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['msg']->value['message'], $tmp);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6>100) {?>
							<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['msg']->value['message'],200," ",true);?>
...&nbsp;<a href="read.php?reads=<?php echo $_smarty_tpl->tpl_vars['msg']->value['msg_id'];?>
&amp;msg=<?php echo urlencode($_smarty_tpl->tpl_vars['msg']->value['subject']);?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['msg']->value['token'];?>
">Read more.</a></td>
						<?php } else { ?>
							<td><?php echo $_smarty_tpl->tpl_vars['msg']->value['message'];?>
</td>
						<?php }?>

						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['msg']->value['msg_read'];?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7==1) {?>
							<td><span class="label label-info">Read</span></td>
						<?php } else { ?>
							<td><a href="read.php?reads=<?php echo $_smarty_tpl->tpl_vars['msg']->value['msg_id'];?>
&amp;subject=<?php echo urlencode($_smarty_tpl->tpl_vars['msg']->value['subject']);?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['msg']->value['token'];?>
"><span class="label label-success">un read</span></a></td>
						<?php }?>
						<td><a href="read.php?reads=<?php echo $_smarty_tpl->tpl_vars['msg']->value['msg_id'];?>
&amp;subject=<?php echo urlencode($_smarty_tpl->tpl_vars['msg']->value['subject']);?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['msg']->value['token'];?>
">Reply</a></td>
					</tr>
				<?php }
if (!$_smarty_tpl->tpl_vars['msg']->_loop) {
?>
					No items were found in the search
				<?php } ?>
			</table> <!--  .table table-bordered  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container   --><?php }} ?>
