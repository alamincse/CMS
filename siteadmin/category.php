<?php 
	require_once 'admin_functions.php'; 
	require_once 'header.php';

	$add_cat = add_categories();
?>
	<div class="container content">
		<div class="row">
			<div class="span12 well">
				<h3 class="page-header">
					<span>Category add page</span>
					<a href="add_post.php" class="pull-right">Back to add post page</a>
				</h3>

				<form action="" class="form-inline" method="post">
					<label>Category name</label>
					<input type="text" name="category" placeholder="Add a category">
					<input type="submit" name="submit" value="Add" class="btn btn-inverse">
				</form> <!--  .form-inline  -->

				<?php 
					$cats = show_categories();
					foreach ($cats as $cat) : ?>
					<ul>
						<li><a href=""><?php echo $cat['cat_name']; ?></a> &nbsp;&nbsp;<a href="delete_cat.php?id=<?php echo $cat['cat_id']; ?>">&times;</a></li>
					</ul>
				<?php endforeach; ?>
				
			</div> <!--  .span12 well -->
		</div> <!--  .row  -->
	</div> <!--  .container content  -->
</body>
</html>