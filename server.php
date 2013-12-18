<?php
$page = $_GET['page'];
if(strcmp($page,"home")==0){
	$html=<<<html
	<div id="slider">
			<div class="item">
				<img src="images/1.jpg" id="slideshow"/>
				<div id="desc">Lorel ipsum -1</div>
			</div>

		</div>

		<div id="container">
			<ul class="content">
				<li>
					<h2>Who are we</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
				</li>
				<li>
					<h2>What we do</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
				</li>
				<li style="border:none;">
					<h2>How to help</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
				</li>
			</ul>
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
		<form accept-charset="UTF-8" action="/messages" class="checkout" id="new_message" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="MsfHghRDWjOdi8SBxMDJvQWRWWX8UoZVXRcGD8TDkro="></div>
			<div class="input">
				<input id="message_name" name="message[name]" size="30" title="Your Name" type="text" class="label_text" placeholder="Your Name">
				<input id="message_email" name="message[email]" size="30" title="Your Email Address" type="text" class="label_text" placeholder="Your Email Address">
				<textarea cols="40" id="message_message" name="message[message]" rows="20" title="Your Message" class="label_text" placeholder="Your Message"></textarea>
				<input id="message_message_type" name="message[message_type]" type="hidden" value="contact">
			</div>
			<div class="submit">
				<input name="commit" type="submit">
			</div>
		</form>
	</div>
</div>
html;
echo $html;
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