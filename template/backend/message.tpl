<div class="container content">
	<div class="row">
		<div class="span2">
			<ul class="nav nav-list">
				<li><a href="">Inbox( {if $un_read} {$un_read} {else} 0 {/if} )</a></li>
				<li><a href="">Sent items( 0 )</a></li>
				<li><a href="">Drafts( 0 )</a></li>
				<li><a href="">Trash( 0 )</a></li>
			</ul>
		</div>
		<div class="span10">
			<!-- {foreach from = $read_msg item = msg} -->
				<!-- {html_table loop = array( "<a href='#'>{$msg['Name']}</a>", {$msg['email']}, {$msg['location']}, {$msg['time']|date_format:'%B %d, %Y at %I:%M %p'}, {$msg['subject']}, {$msg['message']} ) cols = 7} -->
			<!-- {foreachelse} -->
				<!-- No items were found in the search -->
			<!-- {/foreach} -->
			<table class="table table-bordered">
				<tr>
					<th class="span1">From</th>
					<th class="span1">E-mail</th>
					<th class="span1">State</th>
					<th class="span2">Time</th>
					<th class="span1">Subject</th>
					<th class="span3">Message</th>
					<th class="span1">Read/un-read</th>
					<th class="span1">Reply</th>
				</tr>
				
				{foreach from = $read_msg item = msg}
					<tr>
						<td><a href="#">{$msg['Name']}</a></td>
						<td>{$msg['email']}</td>
						<td>{$msg['location']}</td>
						<td>{$msg['time']|date_format:'%B %d, %Y at %I:%M %p'}</td>
						<td><a href="read.php?reads={$msg['msg_id']}&amp;subject={$msg['subject']|urlencode}&amp;token={$msg['token']}">{$msg['subject']}</a></td>

						{if {$msg['message']|count_characters}>100}
							<td>{$msg['message']|truncate:200:" ":true}...&nbsp;<a href="read.php?reads={$msg['msg_id']}&amp;msg={$msg['subject']|urlencode}&amp;token={$msg['token']}">Read more.</a></td>
						{else}
							<td>{$msg['message']}</td>
						{/if}

						{if {$msg['msg_read']} == 1}
							<td><span class="label label-info">Read</span></td>
						{else}
							<td><a href="read.php?reads={$msg['msg_id']}&amp;subject={$msg['subject']|urlencode}&amp;token={$msg['token']}"><span class="label label-success">un read</span></a></td>
						{/if}
						<td><a href="read.php?reads={$msg['msg_id']}&amp;subject={$msg['subject']|urlencode}&amp;token={$msg['token']}">Reply</a></td>
					</tr>
				{foreachelse}
					No items were found in the search
				{/foreach}
			</table> <!--  .table table-bordered  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container   -->