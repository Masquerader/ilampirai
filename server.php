<?php
$page = $_GET['page'];
if(strcmp($page,"about")==0){
	$html=<<<html
	<div id="about">
	<img src="images/team.jpg" style="width:100%;"/>
	<div id="container">
	<div class="content"><div class="about-title who"></div><span>Who we are.</span>We believe all the children in the world are equally gifted. But in reality, while looking around, we could see there are lot of differences. We, at Ilampirai, are passionate to iron out these differences by identifying what is required to bridge this gap. The prime factors that creates a successful individual are considered to be Talent and Luck. Since we believe that each child has his/her own talents and for luck, there is a third vertex which completes the triangle of Success - "OPPORTUNITY". 
Would Sachin be the same man today if he wasn’t sent to the ground by his father? 
Would Rajini be the same if he wasn’t spotted by the great Balachander?</div>
	<div class="content"><div class="about-title what"></div><span>What we do.</span>It is that one moment of exposure that opens the door to numerous achievements. Ilampirai strives hard to make that opportunity to knock the doors of all the underprivileged & deserving children who are deprived of the chances just because they couldn't afford it.The main avenue which can bring about a dramatic transformation is education.
Our Goal is to provide such a platform for school children thereby inspiring them to aim for higher and greater success in all walks of life. We march towards this goal by spending quality time with children in interactive sessions through Activity Based Learning methodology. Apart from this, we also provide financial support to children by providing monetary assistance and arranging basic needs like notebooks, stationery, uniforms,etc.,</div>
	<div class="content"><div class="about-title how"></div><span>How to help.</span>Our Mission is to bring about a change in the educational infrastructure so that all children have a level field to play and thus becoming better & successful individuals.Let us bring out the future Sachins, Kalams & Rahmans in each of the children before the flame extinguishes in their minds.
Join hands with Ilampirai to bridge the noble and needy and build a better tomorrow for the generations to come.</div>
	</div>
	</div>
html;
echo $html;
}
if(strcmp($page,"contact")==0)
{
$html = <<<html
<div id='contact'>
	<h1>We Would Love to Hear from You!</h1>
	<div id='contact-l'>
		<h3>Get in touch</h3>
		<ul>
			<li class="icon-mail"><span><a href="mailto:ilampirai2010@gmail.com">ilampirai2010@gmail.com</a></span></li>
			<li class="icon-facebook"><span><a href="http://facebook.com/ilampirai2010" target="_blank">facebook.com/ilampirai2010</a></span></li>
			<li class="icon-twitter"><span><a href="http://twitter.com/ilampirai2010" target="_blank">@ilampirai2010</a></span></li>
		</ul>
	</div>
	<div id='contact-r'>
		<h3 style="margin-bottom:37px;">Send us a message</h3>
		<form accept-charset="UTF-8" action="mail.php" method="post" id="contact-form"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="MsfHghRDWjOdi8SBxMDJvQWRWWX8UoZVXRcGD8TDkro="></div>
			<div class="input">
				<input id="message_title" name="title" size="30" title="Your Name" type="text" class="label_text" placeholder="Your Name" style="display:none;">
				<input id="message_name" name="name" size="30" title="Your Name" type="text" class="label_text" placeholder="Your Name">
				<input id="message_email" name="email" size="30" title="Your Email Address" type="text" class="label_text" placeholder="Your Email Address">
				<textarea cols="40" id="message_message" name="message" rows="20" title="Your Message" class="label_text" placeholder="Your Message"></textarea>
			</div>
			<div class="submit">
				<input name="commit" type="submit">
			</div>
		</form>
	</div>
</div>
html;
echo $html . "<script>$('#contact-form').submit(function(e){
	e.preventDefault();
	var email = new RegExp(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

	$('.warning').removeClass('warning');
	if(!$('#message_name').val()){
		$('#message_name').addClass('warning');
	} 
	else if(!$('#message_email').val() || !$('#message_email').val().match(email)){
		$('#message_email').addClass('warning');
	}
	else if(!$('#message_message').val()){
		$('#message_message').addClass('warning');
	}
	else{
		$('#loading').fadeIn('slow');
		var postData = $(this).serializeArray();
    	var formURL = $(this).attr('action');
    	$.ajax(
    	{
        	url : formURL,
        	type: 'POST',
        	data : postData,
        	success:function(data, textStatus, jqXHR) 
        	{
        		$('#loading').fadeOut('slow');
            	$('.submit').html(data).fadeIn('slow');
        	},
        	error: function(jqXHR, textStatus, errorThrown) 
        	{
            	//if fails      
        	}
    	});
	}
});
$('#ajaxform').submit();</script>"; 
}
if(strcmp($page,"team")==0)
{
	$html=<<<html
	<div id='team'>
	<ul>
		<li class='member'>
			<h3>Sundaram Senthilnathan</h3>
			<h5>Founder</h5>
			<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-frc1/p206x206/381037_10150362143948439_997773870_n.jpg"/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. </p><p>Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. </p><p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
			
		</li>
		<li class='member'>
			<h3>Pradeep Pandian</h3>
			<h5>Co-Founder/Treasurer</h5>
			<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-frc1/p206x206/381037_10150362143948439_997773870_n.jpg"/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. </p><p>Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. </p><p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
		</li>
		<li class='member'>
			<h3>Gunasundari</h3>
			<h5>Co-Founder/Treasurer</h5>
			<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-frc3/p206x206/992807_10200090393009284_1009665056_n.jpg"/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. </p><p>Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. </p><p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
		</li>
		<li class='member'>
			<h3>Pradeep Pandian</h3>
			<h5>Co-Founder/Treasurer</h5>
			<img src="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-frc1/p206x206/381037_10150362143948439_997773870_n.jpg"/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. </p><p>Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. </p><p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
		</li>
		<li class='member'>
			<h3>Gururaghavan</h3>
			<h5>Co-Founder/Treasurer</h5>
			<img src="https://fbcdn-sphotos-h-a.akamaihd.net/hphotos-ak-prn2/984297_599777483366118_413706668_n.jpg"/>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. </p><p>Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. </p><p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna.</p>
		</li>
	</ul>
</div>
html;
echo $html;
}
if(strcmp($page,"gallery")==0)
{
	include 'gallery.php';
}
?>