<div class="search-form">
	<h2 class="page-header">Search Form</h2>
	<form action="{$base_url}/search.php" method="post">
		<input type="text" name="search" placeholder="what are you looking ?" {literal} onfocus="if(this.placeholder=='what are you looking ?'){this.placeholder = ''}" onblur="if(this.placeholder==''){this.placeholder = 'what are you looking ?'}" {/literal} class="span3" >
		<input type="submit" name="submit" value="Search" class="btn btn-success"> 
	</form>	
</div><!-- .search-form  -->


<div class="recent-post">
	<h2 class="page-header rp-header">Recent Post</h2>
	{foreach from = $recent_post item = recent_posts}
		<ul class="post-list">
			<li>
				<i class="fa fa-arrow-circle-o-right"></i>
				<a href="{$base_url}/single.php?id={$recent_posts['post_id']}&amp;article={$recent_posts['post_title']}">{$recent_posts['post_title']}</a>
			</li>
		</ul><!-- .post-list  -->
	{/foreach}
</div><!-- .recent-post  -->
	
<div class="recent-comment">
    <div class="tabbable rc-cmt">
	    <ul class="nav nav-tabs">
    		<li class="active"><a href="#tab1" data-toggle="tab">Comments</a></li>
    		<li><a href="#tab2" data-toggle="tab">Category</a></li>
    	</ul><!--  .nav nav-tabs -->

    	<div class="tab-content">
    		<div class="tab-pane active" id="tab1">
    			{foreach from = $recent_comments item = recent_comment}
					<ul class="post-cmt-list">
						<li>
							<i class="fa fa-arrow-circle-right"></i>
							<a href="{$base_url}/single.php?id={$recent_comment['post_id']}&amp;article={$recent_comment['post_title']}#comments" target="_blank">{$recent_comment['post_title']}</a>
							<span class="entry-author">Comments by {$recent_comment['comments_name']} on {$recent_comment['comments_date']|date_format:"%B %d, %Y"}</span>
						</li>
					</ul><!--  .post-cmt-list -->
				{/foreach}
    		</div><!-- .tab-pane  -->
    
    		<div class="tab-pane" id="tab2">
    			{foreach from = $sidesCat item = cats}
					{*{', '|implode:$cats} *}
					<a href="{$base_url}/category.php?cat={$cats['cat_name']}">{$cats['cat_name']}&nbsp;<i class="badge">{$cats['post_cat']}</i></a><br>
				{/foreach}
    		</div><!-- .tab-pane  -->
    	</div><!--  .tab-content -->
    </div><!-- .tabbable  -->

	<h2 class="page-header rc-header">Popular Post</h2>
	<ul class="popular-list">
		{foreach from = $popularposts item = post}
			<li>
				<span class="post-count">{$post['post_view_count']}</span>&nbsp;&nbsp;
				<a href="{$base_url}/single.php?id={$post['post_id']}&amp;article={$post['post_title']}" target="_blank">{$post['post_title']}</a>
				<span class="entry-author">Posted by {$post['admin_username']} on {$post['post_date']|date_format:"%B %d, %Y"}</span>
			</li>
		{/foreach}
	</ul><!-- .popular-list  --> 

	<h2 class="page-header rc-header">Archive Post Search</h2> 
	{$archive}
</div><!-- .recent-comment  -->
{*
<div class="download">
	{foreach from = $widget_books item = books}
		<h2 class="page-header rc-header">{$books['widget_sub']}</h2>
		<p>{$books['widget_content']}</p><br>
		<a href="{$base_url}/uploads/{$books['widget_id']}/{$books['widget_media']}" target="_blank" class="thumbnail"><img src="{$base_url}/uploads/{$books['widget_id']}/{$books['widget_media']}"></a>
	{/foreach}

	<div class="rdown-header">
		<a  href="{$base_url}/download.php?file=download/mySQL SERVER.rar"><span class="download-count"></span>
			<i class="fa fa-download">&nbsp;Download</i></a>
		&nbsp;<span class="label label-success">{$total_download} times download</span>
	</div><!-- .rdown-header  -->
</div><!-- .download  -->*}