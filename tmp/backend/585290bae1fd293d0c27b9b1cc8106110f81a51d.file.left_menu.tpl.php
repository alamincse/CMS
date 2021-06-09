<?php /* Smarty version Smarty-3.1.16, created on 2014-10-25 21:47:02
         compiled from "C:\xampp\htdocs\myphpsite\CMS\template\backend\left_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8385448049f28f908-17430163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '585290bae1fd293d0c27b9b1cc8106110f81a51d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\myphpsite\\CMS\\template\\backend\\left_menu.tpl',
      1 => 1414265705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8385448049f28f908-17430163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5448049f297be8_62074953',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5448049f297be8_62074953')) {function content_5448049f297be8_62074953($_smarty_tpl) {?><ul class="menu">
    <ul>
        <li><a href="./">Home</a></li>
    </ul>

    <li class="item1"><a href="#">Post</a>
        <ul>
            <li class="subitem1"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/siteadmin/view_post.php">All Post</a></li>
            <li class="subitem2"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/siteadmin/add_post.php">Add Post</a></li>
            <li class="subitem2"><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/siteadmin/add_post.php?action=newcategory">Add Category</a></li>
        </ul>
    </li>
    <li class="item3"><a href="#">Site Admin</a>
        <ul>
            <li class="subitem1"><a href="admin.php">All Admin</a></li>
            <li class="subitem1"><a href="add_user.php">Add Admin</a></li>
        </ul>
    </li>     
    <li class="item4"><a href="#">Site Menu</a>
        <ul>
            <li class="subitem1"><a href="#">All Menu</a></li>
            <li class="subitem1"><a href="#">Add Menu</a></li>
        </ul>
    </li>  
    <li class="item5"><a href="#">Message</a>
        <ul>
            <li class="subitem1"><a href="#">Show Message</a></li>
            <li class="subitem1"><a href="#">Inbox</a></li>
            <li class="subitem1"><a href="#">Send Message</a></li>
            <li class="subitem1"><a href="#">Drafts</a></li>
            <li class="subitem1"><a href="#">Trash</a></li>
        </ul>
    </li>      
    <li class="item6"><a href="#">Settings</a>
        <ul>
            <li class="subitem1"><a href="#">User Settings</a></li>
            <li class="subitem1"><a href="#">Site Settings</a></li>
        </ul>
    </li>  
    <li class="item7"><a href="#">Appaearance</a>
        <ul>
            <li class="subitem1"><a href="#">Show Widget</a></li>
            <li class="subitem1"><a href="#">Add Widget</a></li>
        </ul>
    </li>  
    <li class="item8"><a href="#">Widgets</a>
        <ul>
            <li class="subitem1"><a href="#">Add Widget</a></li>
        </ul>
    </li>  
    <li class="item7"><a href="#">Widgets</a>
        <ul>
            <li class="subitem1"><a href="#">Add Widget</a></li>
        </ul>
    </li>  
    <li class="item8"><a href="#">Widgets</a>
        <ul>
            <li class="subitem1"><a href="#">Add Widget</a></li>
        </ul>
    </li>  
    <li class="item7"><a href="#">Widgets</a>
        <ul>
            <li class="subitem1"><a href="#">Add Widget</a></li>
        </ul>
    </li>  
    <li class="item8"><a href="#">Widgets</a>
        <ul>
            <li class="subitem1"><a href="#">Add Widget</a></li>
        </ul>
    </li>  
    <li class="item7"><a href="#">Widgets</a>
        <ul>
            <li class="subitem1"><a href="#">Add Widget</a></li>
        </ul>
    </li>  
    <li class="item8"><a href="#">Widgets</a>
        <ul>
            <li class="subitem1"><a href="#">Add Widget</a></li>
        </ul>
    </li>  
</ul><?php }} ?>
