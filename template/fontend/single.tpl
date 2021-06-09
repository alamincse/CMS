<div class="content shadow">
	<div class="row">
		<div class="single-page span8">
			{if $data}
				<header>
					
					{* Here $SCRIPT_NAME OR $smarty.server.SCRIPT_NAME are same method/Name is 
					single.php file *}
					<h2 class="page-header">
						<a style="font-size:25px;" href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']}">{$data['post_title']}</a>
						<a href="{$smarty.server.SCRIPT_NAME}?id={$data['post_id']}&amp;article={$data['post_title']}#comments">{$total_comments}</a>
					</h2>
					<p class="single-empty-author"> 
						<a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;{$data['admin_username']}</a> 
						&nbsp;<span style="color:#ccc;">|</span> <a href=""><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$data['post_date']}|date_format:"%B %d, %Y &nbsp;{$clock}&nbsp; %I: %M %p"}</i></a>&nbsp;<span style="color:#ccc;">|</span> <a href="{$base_url}/category.php?cat={$data['post_cat']}"><i class="fa fa-book"></i>&nbsp;&nbsp;{$data['post_cat']}</a>&nbsp;<span style="color:#ccc;">|</span> <a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']}"><i class="fa fa-eye"></i>&nbsp;&nbsp;view&nbsp;{$up_preview}&nbsp;times</a>
					</p>
				</header>

				
				<div class="empty-content">
					<span class="empty-media">
						{if isset($data['image_name'])}
							<a href="{$base_url}/articles_img/uploads/{$data['post_id']}/{$data['image_name']}" >
								<img src="{$base_url}/articles_img/uploads/{$data['post_id']}/{$data['image_name']}" alt="" >
							</a>
						{/if}
					</span><!-- .empty-media  -->

					{$data['post_content']|strip_tags}
				</div><!-- .empty-content  -->

				<div class="empty-pre-nex">
					<div class="next-pre-post">
						{if $previous_post}
							<span class="pre-post">{$previous_post}</span>
						{/if}

						{if $next_post}
							<span class="pull-right">{$next_post}</span>
						{/if}
					</div><!-- .next-pre-post  -->
				</div><!--  .empty-content  -->

				
				<a id="rating...">
					<div class="feedback">
						<p>Give your feedback on this article.<a href="#rating">( {$data['rating']|string_format:"%.1f"} )</a></p>
						{section name = rate start = 1 loop = 6 step=1}
							<a class="rating" id="ratings" href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']}&amp;rating={$smarty.section.rate.index}#rating..." title="{$smarty.section.rate.index}">☆</a>
						{/section}
					</div><!-- .feedback  -->
				</a>	

				<div class="comment-form">		
					{include file = 'comments.tpl'}
				</div><!-- .comment-form  -->
			{else}
				<h1>Oops ! The article Not Found.</h1>
			{/if}	
		</div><!--  .single-page span7 well -->

		<aside class="sidebar span3">
			{include file="sidebar.tpl"}
		</aside> <!--  .sidebar-area span3  -->
	</div><!--  .row  -->
	
	{* add user login and register form *}
	{$u_login}
	{$u_register}
</div><!--  .content .shadow -->