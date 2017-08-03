
<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['yname'];
		$yourCompany = $_POST['ycompany'];
		$yourEmail = $_POST['yemail'];
		$subject = $_POST['ysubject'];
		$yourMessage = $_POST['ymessage'];
		
		$to = 'gubbadivya2006@gmail.com';
		$subj = 'Message from Dragon Contact Form ';
		
		$message="Your Name :".$name."\n"."Your Company :".$yourCompany."\n"."Your Email :".$yourEmail."\n".
		"Your Subject :".$subject."\n"."Your Message :"."\n\n".$yourMessage;
		$headers="From: ".$yourEmail;
		
		
if (mail ($to, $subj, $message, $headers)) {
		echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		 <a href="#"  style="color:green">
          <span class="glyphicon glyphicon-ok-sign"></span>
        </a>
	} else {
		echo "Something went wrong!";
	}

	}
?>
	