# DragonFire
<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['yname'];
		$yourCompany = $_POST['ycompany'];
		$yourEmail = $_POST['yemail'];
		$subject = $_POST['ysubject'];
		$yourMessage = $_POST['ymessage'];
		$from = 'DragonFire Contact Form'; 
		$to = 'gubbadivya2006@gmail.com';
		$subj = 'Message from Dragon Contact Form ';
		$body ="From: $name\n Company:$yourCompany\n E-Mail: $yourEmail\n Subject:$subject\n Message:\n $yourMessage";
		
if (mail ($to, $subj, $body, $from)) {
		echo "<h1>Thank You!</h1>";
	} else {
		echo "something went wrong";
	}

	}
	?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DragonFire </title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="grayscale.min.css" rel="stylesheet">
	<link href="DragonFile.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   

<!-- Contact Section -->
    <div class="contactus-section">
      <div class="contactus-body">
            <div class="container">
		   
              <div class="row">
        	    <div class="col-xs-2">
                  <div class="verticaltext">
 
 					<div class="verticaltext_contactuscontent">ContactUs</div>
                 </div>
                </div>
   
                <div class="col-xs-4">
                 <div class="bg-color5">
                  <h5 align="left"> Contact Us</h5>
			      <p>Call <br>+971526994788<br>+971507355498<br>info@dragonfiredubai.com</p>
                 </div>
	            </div>
			    <div class="col-xs-6">
			     <div class="bg-color6">
				  <form action="mail_handler1.php">
					<div class="form-group">
						<label for="yname" class="pull-left">Your Name:*</label>
						<input type="text" class="form-control" id="yname" name="yname">
					</div>
					<div class="form-group">
						<label for="ycompany" class="pull-left" >Your Company:*</label>
						<input type="text" class="form-control" id="ycompany" name="ycompany">
					</div>
					<div class="form-group">
						<label for="yemail" class="pull-left">Your Email:*</label>
						<input type="text" class="form-control" id="yemail" name="yemail">
					</div>
					<div class="form-group">
						<label for="ysubject" class="pull-left">Your Subject:*</label>
						<input type="text" class="form-control" id="ysubject" name="ysubject">
					</div>
					<div class="form-group">			 
						<label for="ymessage" class="pull-left">Your Message:*</label>
						<textarea id="ymessage" name="ymessage" class="form-control" cols="20" rows="5" style="background-color:blue"></textarea>
					</div>
					<div class="form-group text-center">
					<input type="submit" name="submit" class="button" value="Send Inquiry1">
  				  	</div>
  				  </form>
					
               </div>
            </div>
            
            
			</div>
			 </div>
			</div>
             </div>
    
    
    

</body>

</html>
