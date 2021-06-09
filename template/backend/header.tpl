<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	
	<title>{$dashboard_name} &raquo; {if isset({$site_name})}{$site_name}{else}{$menu_name}{/if}</title>

	{* Stylesheet *}
	{foreach from = $add_css item = css}
		<link rel="stylesheet" href="{$css}"/>
	{/foreach}

	{* javaScript *}
	{foreach from = $add_js item = js}
		<script type="text/javascript" src="{$js}"></script>
	{/foreach}
	
	{literal}
	<script type="text/javascript">

		// tinyMCE.init({
		// 	selector : "textarea",
		// 	theme    : "modern",

	

		// 	/** delete p tag or new line */
		// 	forced_root_block : "", 
		//     force_br_newlines : false,
		//     force_p_newlines : false,

		// 	plugins  : [
		//         "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		//         "searchreplace wordcount visualblocks visualchars code fullscreen",
		//         "insertdatetime media nonbreaking save table contextmenu directionality",
		//         "emoticons template paste textcolor"
		//     ],

		//     relative_urls: false,
  // 			remove_script_host : false,
  			
		//     toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | link image jbimages",
		//     toolbar2: "print preview media | forecolor backcolor emoticons",
		//     image_advtab: true,
		//     templates: [
		//         {title: 'Test template 1', content: 'Test 1'},
		//         {title: 'Test template 2', content: 'Test 2'}
		//     ],

		//     file_browser_callback: function(field, url, type, win) {
		//         tinyMCE.activeEditor.windowManager.open({
		//             file: '../assets/js/tinymce/plugins/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
		//             title: 'Our Group Project',
		//             width: 800,
		//             height: 500,
		//             inline: true,
		//             close_previous: false
		//         }, {
		//             window: win,
		//             input: field
		//         });

		//         return false;
		//     }
		// });

		$(document).ready(function(){
			$("#photoimg").change(function(){
				var file = document.getElementById("photoimg").files[0];
				var readImg = new FileReader();
				readImg.readAsDataURL(file);
				readImg.onload = function(e) {
					$('.prevImg').attr('src',e.target.result).fadeIn();
				}		
			})	
		})
		

		// for left menu
		$(function() {

		    var menu_ul = $('.menu > li > ul'),
		        menu_a  = $('.menu > li > a');
		    
		    menu_ul.hide();

		    menu_a.click(function(e) {
		        e.preventDefault();
		        if(!$(this).hasClass('active')) {
		            menu_a.removeClass('active');
		            menu_ul.filter(':visible').slideUp('normal');
		            $(this).addClass('active').next().stop(true,true).slideDown('normal');
		        } else {
		            $(this).removeClass('active');
		            $(this).next().stop(true,true).slideUp('normal');
		        }
		    });

		});
	</script>
	{/literal}

</head>
<body>