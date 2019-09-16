<!DOCTYPE html>
<html lang="en">
<head>
	<title>GoMail</title>
	<link rel="icon" href="image/logo.svg" type="image/gif" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="image/img-01.png" alt="IMG">
			</div>
			
			<form  action="phpmail.php" method="post">
			<?php		
				if(isset($_POST['statusvalue'])){
				if($_POST['statusvalue']==202){
					?>
						<div class="alert alert-success">
							<strong>Success!</strong> Mail Sent.
						</div>
					<?php
				}
				else if($_POST['statusvalue']==200){
					?>
						<div class="alert alert-info">
							<strong>Pending!</strong> Mail is in Queue.
						</div>
					<?php
				}
				elseif($_POST['statusvalue']>=400){
					?>
						<div class="alert alert-danger">
							<strong>Failed!</strong> Mail not sent.
						</div>
					<?php
				}
				else{
					?>
						<div class="alert alert-danger">
							<strong>Failed!</strong> Mail not sent.
						</div>
					<?php
				}
			}
		?>
				<span class="contact1-form-title">Be In Touch</span>
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Name">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="email" name="From" placeholder="From">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="email" name="To" placeholder="To">
					<span class="shadow-input1"></span>
				</div>
				<div class="wrap-input1 validate-input" style="display:none">
					<input class="input1" type="email" name="CC" placeholder="CC">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" style="display:none">
					<input class="input1" type="email" name="BCC" placeholder="BCC">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Subject">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Message"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit" name="submit">
						<span>
							Send Email
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

</body>
</html>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script src="js/main.js"></script>
<script >
	$('.js-tilt').tilt({
		scale: 1.1
	})
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-23581568-13');
</script>
