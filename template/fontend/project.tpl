<div class="content shadow">
	<div class="row">
		<div class="span8 single-page">
			{foreach from = $php_project item = project}
				<div class="span3">
					<h2>{$project['widget_sub']}</h2>
					<a style="margin-left:-5px;" href="uploads/{$project['widget_id']}/{$project['widget_media']}" class="thumbnail span3"><img src="uploads/{$project['widget_id']}/{$project['widget_media']}" alt=""></a>
					<div>
						{$project['widget_content']}
					</div>
				</div>
			{/foreach}
		</div><!-- .span8 .single-page -->
		
		<div class="span3 sidebar">
			{include file = 'sidebar.tpl'}
		</div><!-- .span3 .sidebar -->
	</div><!--  .row  -->
</div><!--  .content .shadow -->