<div class="container content">
	<div class="row">
		<div class="span2">
			<ul class="nav nav-list">
				<li><a href="message.php">Inbox( {if $un_read} {$un_read} {else} 0 {/if} )</a></li>
				<li><a href="">Sent items( 0 )</a></li>
				<li><a href="">Drafts( 0 )</a></li>
				<li><a href="">Trash( 0 )</a></li>
			</ul>
		</div>
		<div class="span10">
			{foreach from = $u_read item = read}
				<p><strong>From:</strong> <a href="#">{$read['email']} ( {$read['time']|date_format:"%B %d, %Y at %I: %M %p"} )</a></p>
				<p><strong>Name:</strong> <a href="#">{$read['Name']}</a></p>
				<p><strong>Subject:</strong> <a href="">{$read['subject']}</a></p>
				<p><strong>Message:</strong> <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$read['message']}</p>
			{/foreach}
			
			<a href="#">Reply...</a><br><br>
			<div id="reply-msg">
			    <form action="">
			    	<label>Sbuject</label>
			    		<input type="text" class="span10" placeholder="Subject" {literal} onfocus="if(this.placeholder=='Subject'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Subject';}"{/literal} >
			    	<label>Message</label>
			    		<textarea name="" id="" cols="30" rows="10" placeholder="Type your message..."></textarea>
			    	
			    	<br><br>
			    	<input type="submit" name="submit" class="btn btn-inverse" value="Send Message">
			    </form>
			</div><!-- #reply-msg  -->
		</div> <!--  .span12  -->
	</div> <!--  .row  -->
</div> <!--  .container   -->