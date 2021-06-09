<?php 
	defined( '_VALID' ) or die( 'Restricted Access!' );		
	require_once ( dirname( __FILE__ ) . '/class.php' );	
	require_once ( dirname( __FILE__ ) . '/functions.php' );	

	function comments_template() 
	{ 

		if ($_SERVER['REQUEST_METHOD']=='POST') 
		{
			$name    = htmlentities(trim($_POST['name']));
			$email   = htmlentities(trim($_POST['email']));
			$comment = htmlentities(trim($_POST['comment']));

			$errors = array();
			if (empty($name)) 
			{
				$errors[] = 'Please write your name of name field.';
			}
			elseif(empty($email))
			{
				$errors[] = 'Please write your email of email field.';	
			}
			elseif(empty($comment))
			{
				$errors[] = 'Please write your comments of comments field.';
			}
			elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) 
			{
				$errors[] ='Please enter Your valid email address.';
			}
			else
			{
				// check page id, when comment.......
				if (isset($_GET['id'])) 
				{
					$post_id = $_GET['id'];

					// get the title in admin post.....
					$get_post_title = get_posts_title($post_id);
					foreach($get_post_title as $title)
					{
						$get_post_title = $title['post_title'];
					}

					// Add comment.....
					$comments_count = 1;

					// add to comment in database...
					$article = new Article();
					$article->comments($post_id, $get_post_title, $comments_count, $name, $email, $comment);
				}
	
			}
		}
?>
		
				
	<?php 	
	
		if (isset($_GET['id'])) 
		{
			$id = $_GET['id'];
			// print_r($id); 
			// Show total comments in here........
			$article = new Article();
			$comments = $article->comments_show($id); ?>

			<?php echo "<h2 class='page-header'>Comments area...</h2>";  ?>
			<?php foreach($comments as $comment)  : 

				// show date time......
				$time = strtotime($comment['comments_date']);
				$comments_time = strftime("%B %d, %Y at %I: %M %p", $time); 
			?>
				<header>
					<a href="#" class="comments_img"><img src="images/alamin.jpg" alt=""></a>
					<p class="comments_name"><a href=""><?php echo $comment['comments_name'] .' says --'; ?></a> <a href="" class="pull-right">Reply</a></p>
					<p style="margin-left:95px;"><?php echo $comments_time; ?></p>
				</header>

				<div class="comments_content">
					<p><?php echo ucfirst($comment['comments_content']); ?></p>
				</div> <!--  .comments_content  -->
				<hr>
			<?php endforeach;
			
		}

	?>
			

	<h2 class="page-header">Leave a Comment</h2>	
		<?php if (isset($errors)) : ?>
			<?php if (!empty($errors)) : ?>
				<?php foreach($errors as $error) : ?>
					<div class="alert alert-error message">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p><?php echo $error; ?></p>
					</div> <!--  .alert alert-error  -->
				<?php endforeach; ?>

			<?php else : ?>
				<div class="alert alert-success message">
					<a href="" class="close" data-dismiss="alert">&times;</a>
					<p><?php echo '<strong>Well done!</strong> Your comments now added.' ?></p>
				</div> <!--  .alert alert-success  -->
			<?php endif ?>
		<?php endif ?>
		<form action="" method="post" class="form-horizontal">
		
		<div class="control-group">
			<label class="control-label">Name</label>
			<div class="controls">
				<input type="text" name="name" class="span4" value = "<?php echo (isset($_POST['name'])) ? $_POST['name'] : $_POST['name'] = ''; ?>" placeholder="Your Name" onfocus="if(this.placeholder == 'Your Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Your Name'}">
			</div> <!--  .controls  -->
		</div> <!--  .control-group  -->

		<div class="control-group">
			<label class="control-label">Email</label>
			<div class="controls">
				<input type="text" name="email" class="span4" value = "<?php echo (isset($_POST['email'])) ? $_POST['email'] : $_POST['email'] = ''; ?>" placeholder="you@email.com" onfocus="if(this.placeholder == 'you@email.com'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='you@email.com'}">
			</div> <!--  .controls  -->
		</div> <!--  .control-group  -->

		<div class="control-group">
			<label class="control-label">Comment</label>
			<div class="controls">
				<textarea name="comment" class="span6" rows="10" placeholder="Your mind wants that..." onfocus="if(this.placeholder == 'Your mind wants that...'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Your mind wants that...'}"><?php echo (isset($_POST['comment'])) ? $_POST['comment'] : $_POST['comment'] = ''; ?></textarea>
			</div> <!--  .controls  -->
		</div> <!--  .control-group  -->

		<div class="control-group">
			<div class="controls">
				<input type="submit" name="submit" value="Post Comment" class="btn btn-inverse">
			</div> <!--  .controls  -->
		</div> <!--  .control-group  -->
	</form> <!--  .form-horizontal  -->
			
<?php } ?>