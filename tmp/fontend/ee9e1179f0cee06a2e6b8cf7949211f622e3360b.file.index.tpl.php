<?php /* Smarty version Smarty-3.1.16, created on 2014-12-08 21:03:58
         compiled from "C:\xampp\htdocs\myphpsite\CMS_PROJECT\template\fontend\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1452454846ce03ace86-07001840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee9e1179f0cee06a2e6b8cf7949211f622e3360b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\template\\fontend\\index.tpl',
      1 => 1418069035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1452454846ce03ace86-07001840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_54846ce04c12c3_31190668',
  'variables' => 
  array (
    'articles' => 0,
    'base_url' => 0,
    'article' => 0,
    'clock' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54846ce04c12c3_31190668')) {function content_54846ce04c12c3_31190668($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\include\\smarty\\libs\\plugins\\modifier.escape.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS_PROJECT\\include\\smarty\\libs\\plugins\\modifier.truncate.php';
?><div class="content shadow">
	<div class="row">
		<div class="main-page span8">
			<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
				<header>
					<h2 class="page-header empty-title">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_title'];?>
</a>
					</h2><!--  .page-header .empty-title -->

					<p class="post-author empty-author">
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/about.php">
							<i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['admin_username'];?>

						</a>&nbsp;<span style="color:#ccc;">|</span> 
						
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
">
							<i class="fa fa-calendar"></i>&nbsp;&nbsp;<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['post_date'];?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_modifier_date_format($_tmp1,"%B %d, %Y &nbsp;".((string)$_smarty_tpl->tpl_vars['clock']->value)."&nbsp; %I: %M %p");?>

						</a>&nbsp;<span style="color:#ccc;">|</span> 

						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/category.php?cat=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_cat'];?>
">
							<i class="fa fa-book"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['post_cat'];?>

						</a>&nbsp;<span style="color:#ccc;">|</span> 
						
						<span class="entry-comments">
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['comments_count'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==0) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
#comments" target="_blank"><i class='fa fa-comment-o'></i>&nbsp;No Comments</a>
							<?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['comments_count'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3==1) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
#comments" target="_blank"><i class='fa fa-comment'></i>&nbsp;One Comment</a>
							<?php } else { ?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
#comments" target="_blank"><i class='fa fa-comments'></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['comments_count'];?>
 Comments</a>
							<?php }}?>
						</span><!-- .entry-comments -->

						&nbsp;<span style="color:#ccc;">|</span>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
">
							<i class="fa fa-eye"></i>&nbsp;&nbsp;
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['post_view_count'];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4==0) {?> 
								Not views the article 
							<?php } else {?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['article']->value['post_view_count'];?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp5==1) {?> 
								view&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['post_view_count'];?>
&nbsp;time
							<?php } else { ?>
								view&nbsp;<?php echo $_smarty_tpl->tpl_vars['article']->value['post_view_count'];?>
&nbsp;times
							<?php }}?>
						</a>
					</p><!--  .post-author .empty-author -->
				</header>


				<div class="empty-content">
					<span class="empty-media">
						<?php if (isset($_smarty_tpl->tpl_vars['article']->value['image_name'])) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['article']->value['post_title'], 'hex');?>
" >
								<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/articles_img/uploads/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['image_name'];?>
" alt="" width="300px;" >
							</a>
						<?php }?>
					</span><!-- .empty-media  -->

					<?php ob_start();?><?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['article']->value['post_content'], $tmp);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6>150) {?>
						<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['post_content'],700," ",true);?>
&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['article']->value['post_title'];?>
">Read More...</a>
					<?php } else { ?>
						<?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['article']->value['post_content']);?>

					<?php }?>
				</div><!-- .entry-content  -->
			<?php } ?>

			
			
			
		</div><!-- .span8  -->
		
		<div class="sidebar span3">
			<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div><!-- .span3  -->
	</div><!--  .row  -->
</div><!--  .content .shadow --><?php }} ?>
