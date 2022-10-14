<?php
include 'APIv3-php-library-master/smtp.php';
$mailin = new Mailin('tectignisitsolutions@gmail.com', 'Om2rkzEaA7N5Mcf4');
$mailin->
addTo('tectignisitsolutions@gmail.com', 'Govind Bavkar');
setFrom('tectignisitsolutions@gmail.com', 'Govind Bavkar');
setReplyTo('tectignisitsolutions@gmail.com','Govind Bavkar');
setSubject('Enter the subject here');
setText('Hello');
setHtml('<strong>Hello</strong>');
$res = $mailin->send();

// Successful send message will be returned in this format:
// {'result' => true, 'message' => 'Email sent'}

?>

<!DOCTYPE html>
<html>

<head>
	<title>Send an Email on Form Submission using PHP with PHPMailer</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<br />
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="margin:0 auto; float:none;">
				<h3 align="center">Send an Email on Form Submission using PHP with PHPMailer</h3>
				<br />
				<?php echo $error; ?>
				<form method="post">
					<div class="form-group">
						<label>Enter Name</label>
						<input type="text" name="name" placeholder="Enter Name" class="form-control"
							value="<?php echo $name; ?>" />
					</div>
					<div class="form-group">
						<label>Enter Email</label>
						<input type="text" name="email" class="form-control" placeholder="Enter Email"
							value="<?php echo $email; ?>" />
					</div>
					<div class="form-group">
						<label>Enter Subject</label>
						<input type="text" name="subject" class="form-control" placeholder="Enter Subject"
							value="<?php echo $subject; ?>" />
					</div>
					<div class="form-group">
						<label>Enter Message</label>
						<textarea name="message" class="form-control"
							placeholder="Enter Message"><?php echo $message; ?></textarea>
					</div>
					<div class="form-group" align="center">
						<input type="submit" name="submit" value="Submit" class="btn btn-info" />
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>