<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a href="{$base_url}/siteadmin" class="brand">{$dashboard_name}</a>
			<ul class="nav pull-right">
				<li {if $site_name == 'View Post'} class="active" {/if}><a href="view_post.php">View Post</a></li>
				<li {if $site_name == 'Site Admin'} class="active" {/if}><a href="admin.php">Admin</a></li>
				<li {if $site_name == 'Message' || $site_name == 'Message Read'} class="active" {/if}>
					{if isset($new_msg) && $new_msg <> 0 && !$new_msg_complete}
					<a href="message.php">Message( <span class="label label-success">{$new_msg}&nbsp;new msg</span> )</a>

					{else} 
						<a href="message.php">Message</a>
					{/if}
				</li>
				<li><a href="{$base_url}" target="_blank">Veiw Site</a></li>
				<li {if $site_name == 'Menu Item' || $site_name == 'Edit Menu' || $site_name == 'Add Menu' || $site_name == 'Widgets'} class="active" {else} class="dropdown" {/if}><a href="#" class="dropdown-toggle" data-toggle="dropdown">Appaearance {if $site_name == 'Menu Item' || $site_name == 'Edit Menu' || $site_name == 'Add Menu' || $site_name == 'Widgets'}<b class=""></b>{else}<b class="caret"></b>{/if}</a>
					<ul class="dropdown-menu">
						<li {if $site_name == 'Menu Item' || $site_name == 'Edit Menu' || $site_name == 'Add Menu'} class="active" {/if}><a href="site_menu.php">Menu Item</a></li>
						<li {if $site_name == 'Widgets'} class ="active" {/if}><a href="widgets.php">Widgets</a></li>
						<li class ="divider"></li>
						<li><a href="logout.php">Log Out</a></li>
					</ul><!--  .dropdown-menu -->
				</li><!-- .dropdown  -->
			</ul> <!--  .nav  -->
		</div> <!--  .container  -->
	</div> <!--  .navbar-inner  -->
</div> <!--  .navbar .navbar-fixed-top  -->