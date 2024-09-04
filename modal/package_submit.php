<?php

// console log function
function console_log( $data1, $data2, $data3 ){
  echo '<script>';
  echo 'console.log('. json_encode( $data1 ) .');';
	echo 'console.log('. json_encode( $data2 ) .');';
	echo 'console.log('. json_encode( $data3 ) .');';
  echo '</script>';
}

// Put contacting email here
$php_main_email = "brad@regularsandco.com";

//Fetching Values from URL
$php_name = $_POST['ajax_name'];
$php_email = $_POST['ajax_email'];
$php_phone = $_POST['ajax_phone'];
$php_jobTitle = $_POST['ajax_jobTitle'];
$php_intro = $_POST['ajax_intro'];
$php_cvFile = $_FILES['cvFile']['name'];
$php_imageFile1 = $_FILES['imageFile1']['name'];
$php_imageFile2 = $_FILES['imageFile2']['name'];
$php_qualities = $_POST['qualities'];
$php_skills = $_POST['skills'];
$php_workXP = $_POST['workXP'];
$php_education = $_POST['education'];
$php_anything = $_POST['anything'];

console_log($php_cvFile, $php_imageFile1, $php_imageFile2);
/*
//Sanitizing email
$php_email = filter_var($php_email, FILTER_SANITIZE_EMAIL);


//After sanitization Validation is performed
if (filter_var($php_email, FILTER_VALIDATE_EMAIL)) {


		$php_subject = "Message from contact form";

		// To send HTML mail, the Content-type header must be set
		$php_headers = 'MIME-Version: 1.0' . "\r\n";
		$php_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$php_headers .= 'From:' . $php_email. "\r\n"; // Sender's Email
		$php_headers .= 'Cc:' . $php_email. "\r\n"; // Carbon copy to Sender

		$php_template = '<div style="padding:50px;">Hello ' . $php_name . ',<br/>'
		. 'Thank you for reaching out to me.<br/><br/>'
		. '<strong style="color:#f00a77;">Name:</strong>  ' . $php_name . '<br/>'
		. '<strong style="color:#f00a77;">Email:</strong>  ' . $php_email . '<br/>'
		. '<strong style="color:#f00a77;">Phone:</strong>  ' . $php_phone . '<br/>'
		. '<strong style="color:#f00a77;">Message:</strong>  ' . $php_message . '<br/><br/>'
		. 'This is an automated message confirming that Brad has recieved your message.'
		. '<br/>'
		. 'He will contact you as soon as possible .</div>';
		$php_sendmessage = "<div style=\"background-color:#f5f5f5; color:#333;\">" . $php_template . "</div>";

		// message lines should not exceed 70 characters (PHP rule), so wrap it
		$php_sendmessage = wordwrap($php_sendmessage, 70);

		// Send mail by PHP Mail Function
		mail($php_main_email, $php_subject, $php_sendmessage, $php_headers);
		echo "";


} else {
	echo "<span class='contact_error'>* Invalid email *</span>";
}



*/
?>
