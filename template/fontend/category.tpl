<div class="content shadow">
	<div class="row">
		<div class="main-page span8">
			{if $single_cat <> null}
				{foreach from = $single_cat item = cat}
					<header>
						<h2 class="page-header empty-title">
							<a href="single.php?id={$cat['post_id']}&amp;article={$cat['post_title']|escape:'hex'}">{$cat['post_title']}</a>
						</h2><!--  .page-header .empty-title -->

						<p class="post-author empty-author">
							<a href="{$cat['post_id']}">
								<i class="fa fa-user"></i>&nbsp;&nbsp;{$cat['admin_username']}
							</a>&nbsp;<span style="color:#ccc;">|</span> 
							
							<a href="single.php?id={$cat['post_id']}&amp;article={$cat['post_title']|escape:'hex'}">
								<i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$cat['post_date']}|date_format:"%B %d, %Y &nbsp;{$clock}&nbsp; %I: %M %p"}
							</a>&nbsp;<span style="color:#ccc;">|</span> 

							<a href="category.php?cat={$cat['post_cat']}">
								<i class="fa fa-book"></i>&nbsp;&nbsp;{$cat['post_cat']}
							</a>&nbsp;<span style="color:#ccc;">|</span> 
									
							<span class="entry-comments">
								{if {$cat['comments_count']} == 0}
									<a href="{$base_url}/single.php?id={$cat['post_id']}&amp;article={$cat['post_title']|escape:'hex'}#comments" target="_blank"><i class='fa fa-comment-o'></i>&nbsp;No Comments</a>
								{elseif {$cat['comments_count']} == 1}
									<a href="{$base_url}/single.php?id={$cat['post_id']}&amp;article={$cat['post_title']|escape:'hex'}#comments" target="_blank"><i class='fa fa-comment'></i>&nbsp;One Comment</a>
								{else}
									<a href="{$base_url}/single.php?id={$cat['post_id']}&amp;article={$cat['post_title']|escape:'hex'}#comments" target="_blank"><i class='fa fa-comments'></i>&nbsp;{$cat['comments_count']} Comments</a>
								{/if}
							</span><!-- .entry-comments -->

							&nbsp;<span style="color:#ccc;">|</span> 
							<a href="single.php?id={$cat['post_id']}&amp;article={$cat['post_title']|escape:'hex'}">
								<i class="fa fa-eye"></i>&nbsp;&nbsp;
								{if {$cat['post_view_count']} == 0} 
									No view the article 
								{elseif {$article['post_view_count']} == 1} 
									view&nbsp;{$article['post_view_count']}&nbsp;time
								{else}
									view&nbsp;{$cat['post_view_count']}&nbsp;times
								{/if}
							</a>
						</p><!-- .post-author .empty-author  -->
					</header>

					<div class="empty-content">
						<span class="empty-media">
							{if isset($cat['image_name'])}
								<a href="{$base_url}/single.php?id={$cat['post_id']}&amp;article={$cat['post_title']|escape:'hex'}" >
									<img src="{$base_url}/articles_img/uploads/{$cat['post_id']}/{$cat['image_name']}" alt="" width="300px;" >
								</a>
							{/if}
						</span><!-- .empty-media  -->
								
						{if {$cat['post_content']|count_words} > 150 }
							{$cat['post_content']|truncate:700:" ":true}&nbsp;<a href="single.php?id={$cat['post_id']}&amp;article={$cat['post_title']}">Read More...</a>
						{else}
							{$cat['post_content']}
						{/if}
					</div><!-- .entry-content  -->
				{/foreach}
			{else}
				<span style="color:red;font-size:20px;">Oops! That's Category Post Not Found!</span>
			{/if}
		</div><!-- .span8  -->
		
		<div class="sidebar span3">
			{include file = 'sidebar.tpl'}
		</div><!-- .span3  -->
	</div><!--  .row  -->
</div><!--  .content .shadow -->