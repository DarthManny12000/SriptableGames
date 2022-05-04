<!DOCTYPE html>
<html>
  <head>
    <title>Scriptable Games | Contact</title>

<?php include "includes/include-header.php"; ?>

  </head>
  <body>

<?php include "includes/include-navbar.php"; ?>

    <div class="display-6">
      &nbsp;
    </div>

    <div class="py-5 display-3 text-center hero-title">
      CONTACT
    </div>
 
		<div class="container">
<?php 

if (isset($_POST["email"]))
	{
		$ipAddress = $_SERVER["REMOTE_ADDR"];
		$nowDateTime   = date('Y-m-d H:i:s', time());

		$email     = $_POST["email"];
		$message   = "A new message was submitted on Scriptable Games at $nowDateTime from $ipAddress\r\n--\r\n" . $_POST["message"];
		
		$to        = "immanuelmull12000@gmail.com";
		$subject   = "New Message from Scriptable Games";
		$headers   = "From: Scriptable Games Contact Bot <hi@scriptablegames.com>\r\ncc: Emil Rensing <emil@rensing.com>";

		mail($to,$subject,$message,$headers);
		
		echo "\t\t\t<h3>Your Message Has Been Sent</h3>\r\n";
	}

?>   
			<div class="py-3">
				The crew at Scriptable Games wants to hear from you!  Send us a message using the form below and we'll get back to you as soon as we can.
			</div>

			<form method="post" action="">
		    <div class="mb-3">
		    	<label for="exampleFormControlInput1" class="form-label">What's Your Email?</label>
		    	<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
				</div>

				<div class="mb-3">
				  <label for="exampleFormControlTextarea1" class="form-label">What's Your Message?</label>
			  	<textarea class="form-control" name="message" rows="5"></textarea>
				</div> 
	
				<button class="btn btn-primary" type="submit"><i class="fa-solid fa-paper-plane"></i> Send Your Message</button>
			</form>
		</div>
  </body>
</html>    