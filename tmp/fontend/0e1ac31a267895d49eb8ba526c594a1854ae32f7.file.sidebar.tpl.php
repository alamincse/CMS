<?php /* Smarty version Smarty-3.1.16, created on 2014-12-02 13:59:22
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\fontend\sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3098353cd4a1452fdd0-29230855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e1ac31a267895d49eb8ba526c594a1854ae32f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\fontend\\sidebar.tpl',
      1 => 1417525158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3098353cd4a1452fdd0-29230855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53cd4a14566df7_63775009',
  'variables' => 
  array (
    'base_url' => 0,
    'recent_post' => 0,
    'recent_posts' => 0,
    'recent_comments' => 0,
    'recent_comment' => 0,
    'sidesCat' => 0,
    'cats' => 0,
    'popularposts' => 0,
    'post' => 0,
    'archive' => 0,
    'widget_books' => 0,
    'books' => 0,
    'total_download' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cd4a14566df7_63775009')) {function content_53cd4a14566df7_63775009($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\myphpsite\\CMS\\include\\smarty\\libs\\plugins\\modifier.date_format.php';
?><div class="search-form">
	<h2 class="page-header">Search Form</h2>
	<form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/search.php" method="post">
		<input type="text" name="search" placeholder="what are you looking ?"  onfocus="if(this.placeholder=='what are you looking ?'){this.placeholder = ''}" onblur="if(this.placeholder==''){this.placeholder = 'what are you looking ?'}"  class="span3" >
		<input type="submit" name="submit" value="Search" class="btn btn-success"> 
	</form>	
</div><!-- .search-form  -->


<div class="recent-post">
	<h2 class="page-header rp-header">Recent Post</h2>
	<?php  $_smarty_tpl->tpl_vars['recent_posts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recent_posts']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_post']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recent_posts']->key => $_smarty_tpl->tpl_vars['recent_posts']->value) {
$_smarty_tpl->tpl_vars['recent_posts']->_loop = true;
?>
		<ul class="post-list">
			<li>
				<i class="fa fa-arrow-circle-o-right"></i>
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['recent_posts']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['recent_posts']->value['post_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['recent_posts']->value['post_title'];?>
</a>
			</li>
		</ul><!-- .post-list  -->
	<?php } ?>
</div><!-- .recent-post  -->
	
<div class="recent-comment">
    <div class="tabbable rc-cmt">
	    <ul class="nav nav-tabs">
    		<li class="active"><a href="#tab1" data-toggle="tab">Comments</a></li>
    		<li><a href="#tab2" data-toggle="tab">Category</a></li>
    	</ul><!--  .nav nav-tabs -->

    	<div class="tab-content">
    		<div class="tab-pane active" id="tab1">
    			<?php  $_smarty_tpl->tpl_vars['recent_comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recent_comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recent_comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recent_comment']->key => $_smarty_tpl->tpl_vars['recent_comment']->value) {
$_smarty_tpl->tpl_vars['recent_comment']->_loop = true;
?>
					<ul class="post-cmt-list">
						<li>
							<i class="fa fa-arrow-circle-right"></i>
							<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['recent_comment']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['recent_comment']->value['post_title'];?>
#comments" target="_blank"><?php echo $_smarty_tpl->tpl_vars['recent_comment']->value['post_title'];?>
</a>
							<span class="entry-author">Comments by <?php echo $_smarty_tpl->tpl_vars['recent_comment']->value['comments_name'];?>
 on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['recent_comment']->value['comments_date'],"%B %d, %Y");?>
</span>
						</li>
					</ul><!--  .post-cmt-list -->
				<?php } ?>
    		</div><!-- .tab-pane  -->
    
    		<div class="tab-pane" id="tab2">
    			<?php  $_smarty_tpl->tpl_vars['cats'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cats']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidesCat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cats']->key => $_smarty_tpl->tpl_vars['cats']->value) {
$_smarty_tpl->tpl_vars['cats']->_loop = true;
?>
					
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/category.php?cat=<?php echo $_smarty_tpl->tpl_vars['cats']->value['cat_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['cats']->value['cat_name'];?>
&nbsp;<i class="badge"><?php echo $_smarty_tpl->tpl_vars['cats']->value['post_cat'];?>
</i></a><br>
				<?php } ?>
    		</div><!-- .tab-pane  -->
    	</div><!--  .tab-content -->
    </div><!-- .tabbable  -->

	<h2 class="page-header rc-header">Popular Post</h2>
	<ul class="popular-list">
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popularposts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<li>
				<span class="post-count"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_view_count'];?>
</span>&nbsp;&nbsp;
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/single.php?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
&amp;article=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_title'];?>
</a>
				<span class="entry-author">Posted by <?php echo $_smarty_tpl->tpl_vars['post']->value['admin_username'];?>
 on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['post_date'],"%B %d, %Y");?>
</span>
			</li>
		<?php } ?>
	</ul><!-- .popular-list  --> 

	<h2 class="page-header rc-header">Archive Post Search</h2> 
	<?php echo $_smarty_tpl->tpl_vars['archive']->value;?>

</div><!-- .recent-comment  -->

<div class="download">
	<?php  $_smarty_tpl->tpl_vars['books'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['books']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['widget_books']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['books']->key => $_smarty_tpl->tpl_vars['books']->value) {
$_smarty_tpl->tpl_vars['books']->_loop = true;
?>
		<h2 class="page-header rc-header"><?php echo $_smarty_tpl->tpl_vars['books']->value['widget_sub'];?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['books']->value['widget_content'];?>
</p><br>
		<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['books']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['books']->value['widget_media'];?>
" target="_blank" class="thumbnail"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/uploads/<?php echo $_smarty_tpl->tpl_vars['books']->value['widget_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['books']->value['widget_media'];?>
"></a>
	<?php } ?>

	<div class="rdown-header">
		<a  href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/download.php?file=download/mySQL SERVER.rar"><span class="download-count"></span>
			<i class="fa fa-download">&nbsp;Download</i></a>
		&nbsp;<span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['total_download']->value;?>
 times download</span>
	</div><!-- .rdown-header  -->
</div><!-- .download  --><?php }} ?>
