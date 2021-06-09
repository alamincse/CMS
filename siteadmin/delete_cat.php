<?php 
	require_once '../init.php';
	require_once 'header.php';

	if (isset($_GET['id'])) {
		$id = (int)$_GET['id'];

		$stmt = $cont->prepare("DELETE FROM category WHERE cat_id = :id");
		$stmt->bindParam('id', $id, PDO::PARAM_INT);
		$stmt->execute();
	}
?>
	<div class="container content">
		<div class="row">
			<div class="span12">
				<?php if ($stmt->execute()) : ?>
					<div class="alert alert-success">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p><?php echo 'Category item successfully deleted from database.'; ?> <a href="category.php">Back</a></p>
					</div> <!--  .alert alert-success  -->
				<?php endif ?>
			</div> <!--  .span12  -->
		</div> <!--  .row  -->
	</div> <!--  .container content  -->
</body>
</html>