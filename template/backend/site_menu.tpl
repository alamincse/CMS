<div class="container content">
	<div class="row">
		<div class="span4">
			<ul class="nav nav-list">
				<li>
					{foreach from = $menus item = menu}
						<a href="edit_menu.php?id={$menu['menu_id']}&menu={$menu['menu_title']}">{$menu['menu_title']}</a> 
						<a href="delete_menu.php?id={$menu['menu_id']}&menu={$menu['menu_title']}" class="pull-right">| &nbsp;&nbsp; Delete</a> 
							
						<a href="edit_menu.php?id={$menu['menu_id']}&menu={$menu['menu_title']}" class="pull-right"> Edit &nbsp; &nbsp; </a> 
					{/foreach}
				</li>
			</ul> <!--  .nav .nav-list  -->

			<h3><a href="add_menu.php">Add menu</a></h3>	
		</div> <!--  .span4  -->
	</div> <!--  .row  -->
</div> <!--  .container content  -->
