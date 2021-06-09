{**************************************
	@Description : Comments Tamplate
	@package     : My Personal website
	@author      : AL-AMIN
***************************************}
<div class="wrapper">
	<div class="comment-wrapper">
		<h3 class="page-header comment-title">
			Leave a Comment
			{* logout option *}
			{if isset($u_name) && $u_name != ''}
				<a href="logout.php" class="pull-right">Logout</a>
			{/if}
		</h3>

		{* Login error msg *}
		{foreach from = $logins item = login}
			<div class="alert alert-error">
				<a href="" class="close" data-dismiss="alert">&times;</a>
				<p>{$login}</p>
			</div><!--  .alert .alert-error -->
		{/foreach}

		{* Register error msg *}
		{if isset($registers) }
			{if !empty($registers) }
				{foreach from = $registers item = register}
					<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p>{$register}</p>
					</div><!--  .alert .alert-error -->
				{/foreach}
			{/if}
		{/if}

		{if $u_id}
			{if $cmt_edit}
				<form action="" method="post">
					<div class="comment-insert">
						<h3 class="who-says"><span>Says:&nbsp;</span> {$u_name}</h3>
						<a id="respond">
							<div class="comment-insert-container">
								<textarea name="cmt_content" class="comment-insert-text" id="comment-post-text">{$cmt_edit}</textarea>
							</div><!-- .comment-insert-container  -->
						</a><!-- #respond  -->
						
						<input type="submit" name="cmt_update" value="Update Comment">
					</div><!-- .comment-insert  -->
				</form>
			{else}

				{* show error msg *}
				{if isset($msg)}
					<div class="alert alert-error">
						<a href="" class="close" data-dismiss="alert">&times;</a>
						<p>{$msg}</p>
					</div><!-- .alert .alert-error -->
				{/if}
				
				<form action="" method="post">
					<a id="comments">
						<div class="comment-insert">
							<h3 class="who-says"><span>Says:&nbsp;</span> {$u_name}</h3>
							<a id="respond">
								<div class="comment-insert-container">
									<textarea name="cmt_content" class="comment-insert-text" id="comment-post-text"></textarea>
								</div><!-- .comment-insert-container  -->
							</a><!-- #respond  -->
							
							<input type="submit" name="cmt_submit" value="Comment">
						</div><!-- .comment-insert  -->
					</a><!-- #comments  -->
				</form>
			{/if}
		{else}
			<a id="comments">
				<span class="user-login">Do you want to comment this article or Reply any comments ? Please<a href="#login" data-toggle="modal">Login</a> or <a href="#register" data-toggle="modal">Registration.</a></span>
			</a><!--  #comments -->
		{/if}

		<div class="comments-list">
			{foreach from = $comments item = comment}
				{$comment}
			{/foreach}
		</div><!-- .comment-list  -->
	</div><!-- .comment-wrapper  -->
</div><!--  .wrapper -->

<input type="hidden" id="userId" value="{$u_id}">
<input type="hidden" id="userName" value="{$u_name}">