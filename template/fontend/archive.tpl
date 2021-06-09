<div class="content shadow">
	<div class="row">
		<div class="main-page span8">
			<h2 class="page-header about-header">Archive Page</h2>
			{if isset($data_search)}
				{if $data_search <> 0}
					
					<h2 class="about-header">
						<span>Search&nbsp;&raquo;&nbsp;</span>
						<a href="" style="font-size:16px;">{$data_search['archive']}</a>
					</h2><!--  .about-header -->
					
					{$data_search['msg']} {* error msg show here *}
					{$data_search['form']} {* when search any data, then show search form *} 
					
					{if $data_search['data'] != null}
						{foreach from = $data_search['data'] item = data}
							<header>
								<h2 class="page-header empty-title">
									<a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']|escape:'hex'}">{$data['post_title']}</a>
								</h2><!--  .page-header .empty-title -->

								<p class="post-author empty-author">
									<a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']|escape:'hex'}">
										<i class="fa fa-user"></i>&nbsp;&nbsp;{$data['admin_username']}
									</a>&nbsp;<span style="color:#ccc;">|</span> 
									
									<a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']|escape:'hex'}">
										<i class="fa fa-calendar"></i>&nbsp;&nbsp;{{$data['post_date']}|date_format:"%B %d, %Y &nbsp;{$clock}&nbsp; %I: %M %p"}
									</a>&nbsp;<span style="color:#ccc;">|</span> 

									<a href="{$base_url}/category.php?cat={$data['post_cat']}">
										<i class="fa fa-book"></i>&nbsp;&nbsp;{$data['post_cat']}
									</a>&nbsp;<span style="color:#ccc;">|</span> 
									
									<span class="entry-comments">
										{if {$data['comments_count']} == 0}
											<a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']|escape:'hex'}#comments" target="_blank"><i class='fa fa-comment-o'></i>&nbsp;No Comments</a>
										{elseif {$data['comments_count']} == 1}
											<a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']|escape:'hex'}#comments" target="_blank"><i class='fa fa-comment'></i>&nbsp;One Comment</a>
										{else}
											<a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']|escape:'hex'}#comments" target="_blank"><i class='fa fa-comments'></i>&nbsp;{$data['comments_count']} Comments</a>
										{/if}
									</span><!-- .entry-comments -->

									&nbsp;<span style="color:#ccc;">|</span> 
									<a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']|escape:'hex'}">
										<i class="fa fa-eye"></i>&nbsp;&nbsp;
										{if {$data['post_view_count']} == 0} 
											No view the article 
										{elseif {$article['post_view_count']} == 1} 
											view&nbsp;{$article['post_view_count']}&nbsp;time
										{else}
											view&nbsp;{$data['post_view_count']}&nbsp;times
										{/if}
									</a>
								</p><!-- .post-author .empty-author  -->
							</header>

							<div class="empty-content">
								<span class="empty-media">
									{if isset($data['image_name'])}
										<a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']|escape:'hex'}" >
											<img src="{$base_url}/articles_img/uploads/{$data['post_id']}/{$data['image_name']}" alt="" width="300px;" >
										</a>
									{/if}
								</span><!-- .empty-media  -->

								{if {$data['post_content']|count_words} > 150 }
									{$data['post_content']|truncate:700:" ":true}&nbsp;<a href="{$base_url}/single.php?id={$data['post_id']}&amp;article={$data['post_title']}">Read More...</a>
								{else}
									{$data['post_content']}
								{/if}
							</div><!-- .entry-content  -->
						{/foreach}
							
						{* pagination tab show *}
						{*
						{if $total_pages > 1 && $articles}
							<div class="pagination">
								<ul>
									{if $has_pre_page}
										<a href="{$base_url}/search.php?page={$previous_page}">&laquo; Pre</a>
									{/if}

									{section name = page_name start = 1 loop = $total_pages step=1}
										{if $smarty.section.page_name.index == $page}
											<li class="active"><a href="#">{$smarty.section.page_name.index}</a></li>
										{else}
											{if $smarty.section.page_name.index < 5}
											<li><a href="{$base_url}/search.php?page={$smarty.section.page_name.index}">{$smarty.section.page_name.index}</a></li>

											{/if}
										{/if}
									{/section}
							
									{if $has_next_page}
										<a href="{$base_url}/search.php?page={$next_page}">Next &raquo;</a>
									{/if}
								</ul>
							</div><!-- .pagination  -->
						{else}
							<span style="color:red;font-size:20px;">Oops! 404 Page Not Found. Please search less then {$page} page. </span>
						{/if} *}
					{/if}
				{/if}
			{else}
				{$data_search['msg']}
			{/if}
		</div><!--  .main-page .span8 -->

		<div class="sidebar span3">
			{include file="sidebar.tpl"}
		</div><!--  .sidebar-area span3  -->
	</div><!--  .row  -->
</div> <!--  .content .shadow -->