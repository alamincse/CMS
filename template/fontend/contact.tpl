<div class="content shadow">
	<div class="row">
		<div class="span8 single-page">
			<h2 class="page-header about-header">Contact</h2>
			<!-- Contact with me. -->
			
			<div id="myMap" class="thumbnail" style="height:300px;margin-bottom:50px;"></div>

			<p style="font-size:18px;"><a href="{$base_url}/contact.php"><i class="fa fa-envelope-o"></i></a>&nbsp;&nbsp;Do you want to contact me ? Please use below the form.</p><br><br>

			{* show errror or success msg *}
			{foreach from = $errors item = error}
				{$error}
			{/foreach}

			<form action="" method="post" class="form-horizontal" >
				<div class="control-group">
					<label for="f-name" class="control-label">Full Name</label>
					<div class="controls">
						<input type="text" name="f_name" id="f-name" class="span4" placeholder="Full Name" {literal} onfocus="if(this.placeholder=='Full Name'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Full Name';}"{/literal}>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="email" class="control-label">Email</label>
					<div class="controls">
						<input type="text" name="email" id="email" class="span4" placeholder="Type your email" {literal} onfocus="if(this.placeholder=='Type your email'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Type your email';}" {/literal}>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="loc" class="control-label">Location</label>
					<div class="controls">
						<input type="text" name="loc" id="loc" class="span4" placeholder="Where are you ?" {literal} onfocus="if(this.placeholder=='Where are you ?'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Where are you ?';}" {/literal}>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="subject" class="control-label">Subject</label>
					<div class="controls">
						<input type="text" name="subject" id="subject" class="span4" placeholder="Subject" {literal} onfocus="if(this.placeholder=='Subject'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Subject';}" {/literal}>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<label for="msg" class="control-label">Message</label>
					<div class="controls">
						<textarea name="msg" id="msg" class="span5" rows="10" placeholder="Type your message..." {literal} onfocus="if(this.placeholder=='Type your message...'){this.placeholder='';}" onblur="if(this.placeholder==''){this.placeholder='Type your message...';}" {/literal}></textarea>
					</div><!-- .controls  -->
				</div><!--  .control-group  -->

				<div class="control-group">
					<div class="controls">
						<input type="submit" name="send-msg" value="Send Message" class="btn btn-inverse">
					</div><!-- .controls  -->
				</div><!--  .control-group  -->
			</form><!-- .form-horizontal   -->
		</div><!--  .span8 -->

		<div class="span3 sidebar">
			{include file = 'sidebar.tpl'}
		</div><!-- .span3 .sidebar  -->
	</div><!--  .row -->
</div><!--  .content .shadow -->