<?php
//declare our variables
$name = $_POST['name'];
$email = $_POST['email'];
$message = nl2br($_POST['message']);
//get todays date
$todayis = date("l, F j, Y, g:i a") ;
//set a title for the message
$subject = "Message from - " . $name;
$body = "From-" . $name . "\r\n" ."E-mail ID - " . $email . "\r\n" . "Message - " .$message;
$headers = 'From: ilampiraingo@ilampirai.org' . "\r\n" .
    'Reply-To: '.$email.'' . "\r\n" .
	'Content-type: text/html; charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
ini_set("SMTP","216.69.186.201");

//Validation

//put your email address here
mail("ilampirai2010@gmail.com", $subject, $body, $headers);
?>
<!--Display a thankyou message in the callback -->
<h5 style="font-family:Lato;font-weight:bold;">Nice to hear from you <b style="font-size:25px;"> <?php echo $name ?></b>!</h5>