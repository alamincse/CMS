<div class="content shadow">
	<div class="row">
		<div class="single-page span8">
			{foreach from = $about_me item = about}
				<h2 class="page-header about-header">{$about['widget_sub']}</h2>
				<span class="pull-right">
					<div id="slider">
					<a href="uploads/{$about['widget_id']}/{$about['widget_media']}" target="_blank">
					<img src="uploads/{$about['widget_id']}/{$about['widget_media']}" alt="" class="thumbnail span3"></a>
					</div>
				</span><!--  .pull-right -->
				{$about['widget_content']}
			{/foreach}
		</div><!-- .span8  -->
		
		<div class="span3 sidebar">
			{include file = 'sidebar.tpl'}
		</div><!-- .span3 .sidebar -->
	</div><!--  .row  -->
</div><!--  .content .shadow -->