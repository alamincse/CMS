/**
 * Comments Form 
 * @author : AL-AMIN
 */

$(document).ready(function(){ // $() or jQuery() or window.jQuery() are same method on jQuery
	
	/** this will fire once the page has been fully loaded */
	$('#comment-post-btn').click(function(){
		comment_post_btn_click();
	});

	
	/** Delete comment from the comment item by user. */
	add_delete_handers();


	/** Thread comment */
	$('.cmt-reply').click(function(){
		console.log('welcome');
	});

	$('.cmt-edit').click(function(){
		console.log('test');
	});


	/**
	 * User Login method
	 */
	// $('.alert').hide();
	
	// $('form[name=loginForm]').submit(function(){
		
	// 	$('.alert').slideUp();
		
	// 	$.post('./ajax/login.php',
	// 		{
	// 			username: $('[name = username]').val(),	
	// 			password: $('[name = password]').val()
	// 		},	

	// 		function(data)
	// 		{
	// 			if(data.success)
	// 			{
	// 				location.href=data.redirect;
	// 			}
	// 			else
	// 			{
	// 				$('.alert').html(data.message).slideDown();
	// 			}

	// 		}, 'json'
	// 	);

	// 	return false;
	// });


	/** image auto upload by a click */
	$("#photoimg").change(function(){
		var file = document.getElementById("photoimg").files[0];
		var readImg = new FileReader();
		readImg.readAsDataURL(file);
		readImg.onload = function(e) {
			$('.prevImg').attr('src',e.target.result).fadeIn();
		}		
	})


	/**
	 * Download counter for mySQL Book
	 */
	 $('.manager a').click(function(){
		var countSpan = $('.download-count',this);
		countSpan.text( parseInt(countSpan.text())+1);
	});

	/** registration form username check */
	// $('#username').change(function(){
	// 	var regUser = $('#username').val();
	// 	if( regUser.length < 3 )
	// 	{
	// 		$('#status').html('<font color = "red">Password length minimum 4 characters.</font>');
	// 		$("#username").removeClass('object_ok');
	// 		$("#username").addClass("object_error");
	// 	}
	// 	else
	// 	{
	// 		$.POST('./ajax/register.php', 
	// 		{
	// 			data: 'username = ' + regUser
	// 		})
	// 		.success(function(msg)
	// 		{
	// 			$("#status").ajaxComplete(function(event, request, settings)
	// 			{
	// 				if(msg == 'OK')
	// 				{ 
	// 			        $("#username").removeClass('object_error');
	// 					$("#username").addClass("object_ok");
	// 					$(this).html('&nbsp;<img src="tick.gif" align="absmiddle">');
	// 				}  
	// 				else  
	// 				{  
	// 					$("#username").removeClass('object_ok');
	// 					$("#username").addClass("object_error");
	// 					$(this).html(msg);
	// 				}
	// 			}); 
	// 		});
	// 	}
	// })
});



/**
 * comment post of comment area
 */
function comment_post_btn_click()
{
	/** store value from textarea field */
	var _comment = $('#comment-post-text').val();
	var _userId = $('#userId').val();
	var _userName = $('#userName').val();
	
	if(_comment.length > 0 && _userId != null )
	{
		/** proceed with our ajax callback */
		$('.comment-insert-container').css('border', '1px solid #e1e1e1');

		/** send data to comment_insert.php page by ajax post method. */
		/** Be careful single dot(./), or double dot(../) for ajax */
		$.post("././ajax/comment_insert.php",
			{
				task: "comment_insert", // this is a page name
				userId: _userId,
				comment: _comment
			})
			
			/** when unknown page name(Ex:comment_inserts.php) then show error. */
			.error(function(){
				console.log("Error: ");
			})
			
			.success(
				function(data)
				{
					comment_insert(jQuery.parseJSON(data));
					console.log("ResponseText: " + data);
				}
			);

		// console.log(_comment + " UserName " + _userName + "userID " + _userId); 
	}
	else
	{
		$('.comment-insert-container').css('border', '1px solid #ff0000');
		console.log("The comment field was empty.");
	}

	/** remove the text from the textarea, ready for another comment possibly */
	$('#comment-post-text') . val("");
}



/**
 * jQuery Comment Insert
 */
function comment_insert(data)
{
	var t = '';
	t += '<li class="comment-holder" id="_'+data.comment.comment_id+'">';
	t += '<div class="user-img">';
	t += '<img src="'+data.user.profile_img+'" class="user-img-pic" alt="">';
	t += '</div>';

	t += '<div class="comment-body">';
	t += '<h3 class="username-field">'+data.user.userName+'</h3>';
	t += '<div class="comment-text">'+data.comment.comment+'</div>';
	t += '</div>';

	t += '<div class="comment-buttons-holder">';
	t += '<ul>';
	t += '<li class="delete-btn" id = "'+data.comment.comment_id+'">X</li>';
	t += '</ul>';
	t += '</div>';
	t += '</li>';

	$('.comments-holder-ul').prepend(t);
	add_delete_handers();
}



/**
 * Button(X) handel for jQuery
 */
function add_delete_handers()
{
	$('.delete-btn').each(function(){
		var btn = this;
		$(btn).click(function(){
			// console.log("The ID: " + btn.id);
			comment_delete(btn.id);
		});
	});
}



/**
 * jQuery comment delete method
 */
function comment_delete(_comment_id)
{
	$.post("./ajax/comment_delete.php",
		{
			task: "comment_delete", // this is a page name
			comment_id: _comment_id
		}
	)
	.success(function(data){
		// console.log("Success on the comment delete.");
		$('#_' + _comment_id).detach();
	});
}


/**
 * jQuery update for comment
 */
function comment_update(_comment_id)
 {
 	$.post("./ajax/comment_update.php",
	 	{
			task: "comment_update",
			comment_id: _comment_id	 		
	 	}
 	)
 	.success(function(data){
 		console.log('update');
 		// $('#_' + _comment_id).
 	});
}


/**
 * Location select
 * Bangladesh or others country.
 */
 // show dropdown option in a jsc info page.
function populate(s1, s2)
{
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";

	if(s1.value == "select-item")
	{
		var optionArray = ["select-item|Please Select Country"];
	}else if(s1.value == "bangladesh")
	{
		var optionArray = ["home district|Select your Home district", "bagerhat|Bagerhat", "bandarban|Bandarban", "barguna|Barguna", "barisal|Barisl", "bhola|Bhola", "bogra|Bogra", "brahmanbaria|Brahmanbaria", "chandpur|Chandpur", "chapai nowabganj|Chapai Nowabganj", "chittagong|Chittagong", "chuadanga|Chuadanga", "comilla|Comilla", "cox's bazar|Cox's Bazar", "dhaka|Dhaka", "dinajpur|Dinajpur", "faridpur|Faridpur", "feni|Feni", "gaibandha|Gaibandha", "gazipur|Gazipur", "gopalganj|Gopalganj", "habiganj|Habiganj", "jaipurhat|Jaipurhat", "jamalpur|Jamalpur", "jessore|Jessore", "jhalakathi|Jhalakathi", "jhinaidah|Jhinaidah", "khagrachari|Khagrachari", "khulna|Khulna", "kishoreganj|Kishoreganj", "kurigram|Kurigram", "kushtia|Kushtia", "lakshmipur|Lakshmipur", "lalmonirhat|Lalmonirhat", "madaripur|Madaripur", "magura|Magura", "manikganj|Manikganj", "meherpur|Meherpur", "moulavibazar|Moulavibazar", "munshiganj|Munshiganj", "mymensingh|Mymensingh", "naogaon|Naogaon", "narayanganj|Narayanganj", "narsingdi|Narsingdi", "natore|Natore", "netrokona|Netrokona", "nilphamari|Nilphamari", "noakhali|Noakhali", "norial|Norial", "pabna|Pabna", "panchagarh|Panchagarh", "patuakhali|Patuakhali", "pirojpur|Pirojpur", "rajbari|Rajbari", "rajshahi|Rajshahi", "rangamati|Rangamati", "rangpur|Rangpur", "satkhira|Satkhira", "shariyatpur|Shariyatpur", "sherpur|Sherpur", "sirajganj|Sirajganj", "sunamganj|Sunamganj", "sylhet|Sylhet", "tangail|Tangail", "thakurgaon|Thakurgaon"];
	}else if(s1.value == "others")
	{
		var optionArray = ["country|Select Country Name", "afghanistan|Afghanistan", "albania|Albania", "algeria|Algeria", "american Samoa|American Samoa", "andorra |Andorra", "angola|Angola", "anguilla|Anguilla", "antarctica|Antarctica", "antigua and Barbuda|Antigua and Barbuda", "argentina |Argentina", "Armenia |Armenia", "Aruba|Aruba", "Australia|Australia", "Austria|Austria", "Azerbaijan|Azerbaijan", "Bahamas|Bahamas", "Bahrain|Bahrain", "Barbados|Barbados", "Belarus|Belarus", "Belgium|Belgium", "Belize|Belize", "Benin|Benin", "Bermuda|Bermuda", "Bhutan|Bhutan", "Bolivia|Bolivia", "Bosnia and Herzegovina|Bosnia and Herzegovina", "Botswana|Botswana", "Bouvet Island|Bouvet Island", "Brazil|Brazil", "British Indian Ocean Territory |British Indian Ocean Territory", "Brunei Darussalam |Brunei Darussalam", "Bulgaria|Bulgaria", "Burkina Faso|Burkina Faso", "Burundi|urundi", "Cambodia|Cambodia", "Cameroon|Cameroon", "Canada|Canada", "Cape Verde |Cape Verde", "Cayman Islands|Cayman Islands", "Central African Republic |Central African Republic", "Chad|Chad", "Chile|Chile", "China|China", "Christmas Island|Christmas Island", "Cocos (Keeling) Islands | Cocos (Keeling) Islands", "Colombia|Colombia", "Comoros|Comoros", "Congo|Congo", "Congo|Congo", "Cook Islands|Cook Islands", "Costa Rica|Costa Rica", "Cote D'ivoire|Cote D'ivoire", "Croatia|Croatia", "Cuba|Cuba ", "Cyprus|Cyprus", "Czech Republic|Czech Republic", "Denmark|Denmark", "Djibouti|Djibouti", "Dominica|Dominica", "Dominican Republic |Dominican Republic", "Ecuador |Ecuador", 
        "Egypt|Egypt", "El Salvador|El Salvador", "Equatorial Guinea |Equatorial Guinea", "Eritrea|Eritrea", "Estonia|Estonia", "Ethiopia|Ethiopia", "Falkland Islands (Malvinas)|Falkland Islands (Malvinas)", "Faroe Islands|Faroe Islands", "Fiji|Fiji", "Finland|Finland", "France|France", "French Guiana|French Guiana", "French Polynesia|French Polynesia", "French Southern Territories |French Southern Territories", "Gabon|Gabon", "Gambia |Gambia", "Georgia|Georgia", "Germany| Germany", "Ghana|Ghana", "Gibraltar|Gibraltar", "Greece|Greece ", "Greenland|Greenland", "Grenada|Grenada", "Guadeloupe|Guadeloupe", "Guam|Guam", "Guatemala|Guatemala", "Guinea|Guinea", "Guinea-bissau|Guinea-bissau", "Guyana|Guyana", "Haiti|Haiti", "Holy See (Vatican City State)|Holy See (Vatican City State)", "Honduras|Honduras", "Hong Kong|Hong Kong","Hungary|Hungary","Iceland|Iceland", "India|India", "Indonesia|Indonesia", "Iran|Iran", "Iraq|Iraq", "Ireland|Ireland", "Israel|Israel", "Italy|Italy", "Jamaica|Jamaica", "Japan|Japan", "Jordan|Jordan", "Kazakhstan|Kazakhstan", "Kenya|Kenya", "Kiribati|Kiribati", "Korea, Republic of|Korea, Republic of", "Kuwait|Kuwait", "Kyrgyzstan|Kyrgyzstan", "Lao People's Democratic Republic|Lao People's Democratic Republic", "Latvia|Latvia", "Lebanon|Lebanon", "Lesotho|Lesotho", "Liberia|Liberia", "Libyan Arab Jamahiriya|Libyan Arab Jamahiriya", "Liechtenstein|Liechtenstein", "Lithuania|Lithuania", "Luxembourg|Luxembourg", "Macao|Macao", "Macedonia|Macedonia", "Madagascar|Madagascar", "Malawi|Malawi", "Malaysia|Malaysia", 
		"Maldives|Maldives", "Mali|Mali", "Malta|Malta", "Marshall Islands|arshall Islands", "Martinique|Martinique", "Mauritania|Mauritania", "Mauritius|Mauritius", "Mayotte|Mayotte", "Mexico|Mexico", "Micronesia, Federated States of|Micronesia, Federated States of", "Moldova, Republic of|Moldova, Republic of", "Monaco|Monaco", "Mongolia|Mongolia", "Montserrat|Montserrat", "Morocco|Morocco", "Mozambique|Mozambique", "Myanmar|Myanmar", "Namibia|Namibia", "Nauru|Nauru", "Nepal|Nepal ", "Netherlands|Netherlands", "Netherlands Antilles|Netherlands Antilles", "New Caledonia|New Caledonia", "New Zealand|New Zealand", "Nicaragua|Nicaragua", "Niger|Niger", "Nigeria|Nigeria", "Niue|Niue", "Norfolk Island|Norfolk Island", 	"Northern Mariana Islands|Northern Mariana Islands", "Norway|Norway", "Oman | Oman", "Pakistan | Pakistan", "Palau | Palau", "Palestinian Territory, Occupied | Palestinian Territory, Occupied", "Panama | Panama", "Papua New Guinea | Papua New Guinea", "Paraguay | Paraguay", "Peru | Peru", "Philippines | Philippines ", "Pitcairn | Pitcairn ", "Poland | Poland", "Portugal | Portugal", "Puerto Rico | Puerto Rico", "Qatar | Qatar", "Reunion | Reunion", "Romania | Romania", "Russian Federation | Russian Federation", "Rwanda | Rwanda", "Saint Helena | Saint Helena", "Saint Kitts and Nevis | Saint Kitts and Nevis", "Saint Lucia | Saint Lucia ", "Saint Pierre and Miquelon | Saint Pierre and Miquelon ","Saint Vincent and The Grenadines | Saint Vincent and The Grenadines", "Samoa | Samoa", "San Marino | San Marino", 
		"Sao Tome and Principe | Sao Tome and Principe", "Saudi Arabia | Saudi Arabia", "Senegal | Senegal", "Serbia and Montenegro | Serbia and Montenegro", "Seychelles | Seychelles ","Sierra Leone | Sierra Leone", "Singapore | Singapore", "Slovakia | Slovakia", "Slovenia | Slovenia", "Solomon Islands | Solomon Islands", "Somalia | Somalia", "South Africa | South Africa", "Spain | Spain", "Sri Lanka | Sri Lanka", "Sudan | Sudan ", "Suriname | Suriname", "Svalbard and Jan Mayen | Svalbard and Jan Mayen", "Swaziland | Swaziland", "Sweden | Sweden", "Switzerland | Switzerland", "Syrian Arab Republic | Syrian Arab Republic", "Taiwan, Province of China | Taiwan, Province of China ", "Tajikistan | Tajikistan", "Tanzania, United Republic of | Tanzania, United Republic of", "Thailand | Thailand ","Timor-leste | Timor-leste", "Togo | Togo ", "Tokelau | Tokelau ", "Tonga | Tonga", "Trinidad and Tobago | Trinidad and Tobago", "Tunisia | Tunisia", "Turkey | Turkey", "Turkmenistan | Turkmenistan ", "Turks and Caicos Islands | Turks and Caicos Islands ", "Tuvalu | Tuvalu ", "Uganda | Uganda", "Ukraine | Ukraine", "United Arab Emirates | United Arab Emirates", "United Kingdom | United Kingdom ", "Uruguay | Uruguay", "USA-Alabama | USA-Alabama", "USA-Alaska | USA-Alaska", "USA-Arizona | USA-Arizona", "USA-Arkansas | USA-Arkansas", "USA-California | USA-California", "USA-Colorado | USA-Colorado", "USA-Connecticut | USA-Connecticut", "USA-D.C. | USA-D.C.", "USA-Delaware | USA-Delaware", "USA-Florida | USA-Florida", "USA-Hawaii | USA-Hawaii ", 
		"USA-Idaho | USA-Idaho ", "USA-Illinois | USA-Illinois", "USA-Indiana | USA-Indiana", "USA-Iowa | USA-Iowa", "USA-Kansas | USA-Kansas", "USA-Kentucky | USA-Kentucky", "USA-Louisiana | USA-Louisiana", "USA-Maine | USA-Maine", "USA-Maryland | USA-Maryland", "USA-Massachusetts | USA-Massachusetts", "USA-Michigan | USA-Michigan", "USA-Minnesota | USA-Minnesota", "USA-Mississippi | USA-Mississippi ", "USA-Missouri | USA-Missouri", "USA-Montana | USA-Montana ", "USA-Nebraska | USA-Nebraska", "USA-Nevada | USA-Nevada", "USA-New Hampshire | USA-New Hampshire", "USA-New Jersey | USA-New Jersey", "USA-New Mexico | USA-New Mexico", "USA-New York | USA-New York", "USA-North Carolina | USA-North Carolina", "USA-North Dakota | USA-North Dakota", "USA-Ohio | USA-Ohio", "USA-Oklahoma | USA-Oklahoma", "USA-Oregon | USA-Oregon", "USA-Pennsylvania | USA-Pennsylvania", "USA-Rhode Island | USA-Rhode Island ", "USA-South Carolina | USA-South Carolina", "USA-South Dakota | USA-South Dakota ","USA-Tennessee | USA-Tennessee", "USA-Texas | USA-Texas", "USA-Utah | USA-Utah", "USA-Vermont | USA-Vermont", "USA-Virginia | USA-Virginia", "USA-Washington | USA-Washington", "USA-West Virginia | USA-West Virginia", "USA-Wisconsin | USA-Wisconsin", "USA-Wyoming | USA-Wyoming ", "Uzbekistan | Uzbekistan ", "Vanuatu | Vanuatu ", "Venezuela | Venezuela", "Viet Nam | Viet Nam", "Virgin Islands, British | Virgin Islands, British", "Virgin Islands, U.S. | Virgin Islands, U.S.", "Wallis and Futuna | Wallis and Futuna", "Western Sahara | Western Sahara", "Yemen | Yemen", "Zambia | Zambia",  "Zimbabw | Zimbabwe"];
	}

	for(var option in optionArray)
	{
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}


/** Just google map script */
	var myCenter=new google.maps.LatLng(24.370990875990515,88.62083567990112);

	function initialize()
	{
		var mapProp = {
	 		center:myCenter,
	  		zoom:15,
	  		mapTypeId:google.maps.MapTypeId.ROADMAP
	  	};

		var map=new google.maps.Map(document.getElementById("myMap"),mapProp);

		var marker=new google.maps.Marker({
	  		position:myCenter,
	  	});

		marker.setMap(map);

		var infowindow = new google.maps.InfoWindow({
	  		// content:"<a href=''>I'm Here <br/>Baliapukur</a>"
	  	});

		infowindow.open(map,marker);
	}

google.maps.event.addDomListener(window, 'load', initialize);