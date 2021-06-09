<div class="shadow">
	<div class="row footer">
		<div class="span3 news">
			{foreach from = $news item = new}
				<h2>{$new['widget_sub']}</h2>
				<p>{$new['widget_content']}</p>
			{/foreach}
		</div><!-- .span3 .news  -->	

		<div class="span3 team">
			<h2>Our Team</h2>
			<ul>
				{foreach from = $recent_post item = recent_posts}
					<li><a href="{$base_url}/single.php?id={$recent_posts['post_id']}&amp;article={$recent_posts['post_title']}"><i class="fa fa-arrow-circle-o-right"></i>&nbsp;{$recent_posts['post_title']}</a>
					</li>
				{/foreach}
			</ul>
		</div><!--  .span3 .team -->

		<div class="span3 rc-product">
			<h2>Recent Products</h2>
			<ul>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Test post in the site.</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Do you remember me ? I'm ...</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Test post in the site.</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Do you remember me ? I'm ...</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Test post in the site.</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Do you remember me ? I'm ...</a></li>
				<li><a href=""><i class="fa fa-arrow-circle-o-right"></i>&nbsp;Test post in the site.</a></li>
			</ul>
		</div>


		<div class="span2 social-icon">
			{foreach from = $social_contact item = contact}
				<h2>{$contact['widget_sub']}</h2>
				{$contact['widget_content']}
			{/foreach}
		</div><!-- .span2 .social-icon  -->
	</div><!-- .row .footer  -->

	<div class="row footer-bottom">
		<div class="span12">
			{* copyright left section *}
			{foreach from = $copyright_left item = copy_left}
				{$copy_left['widget_content']}
			{/foreach}

			<span>&#169;&nbsp;&nbsp;Copyright &nbsp;&nbsp;{$smarty.now|date_format:'Y'},&nbsp;&nbsp;all Rights Reserved.</span> 
			<span class="pull-right d-right">
				Developer &raquo; <a href="{$base_url}" class="ttip" data-toggle="tooltip" title="Web Application Project">{$author}</a>
			</span>
		</div><!-- .span12  -->
	</div><!--  .row .footer-bottom -->
</div><!-- .shadow  -->

	{* javaScript *}
	{foreach from = $add_js item = js}
		{$js}
	{/foreach}

	{literal}
		<script>
			$('a.ttip').tooltip();
		</script>

		<script type="text/javascript">
		var __lc = {};
		__lc.license = 4869051;

		(function() {
			var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
			lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
		})();


		</script>

		<script type="text/javascript">
		    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		    var disqus_shortname = 'dept-project'; // required: replace example with your forum shortname

		    /* * * DON'T EDIT BELOW THIS LINE * * */
		    (function () {
		        var s = document.createElement('script'); s.async = true;
		        s.type = 'text/javascript';
		        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
		        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
		    }());

		    // Rating msg.
		    // var anchor = document.getElementById( 'ratings' );
	    	
	    	// anchor.addEventListener( 'click', doSomething, true );

		    // function doSomething()
		    // {
		    // 	alert( 'Thank you for given your rating.' );
		    // }

    	</script>
	{/literal}

</body>
</html>