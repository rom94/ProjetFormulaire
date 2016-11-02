<?php 
	$firstname = $name = $email = $phone = $message = "";
	$firstnameError = $nameError = $emailError = $phoneError = $messageError = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$firstname = verifyInput($_POST['firstname']);
		$name = verifyInput($_POST['name']);
		$email = verifyInput($_POST['email']);
		$phone = verifyInput($_POST['phone']);
		$message = verifyInput($_POST['message']);

		if (empty($firstname)) {
			$firstnameError = "Je veux connaître ton prénom !";
		}
		if (empty($name)) {
			$nameError = "Et oui je veux tout savoir. Même ton nom !";
		}
		if (empty($message)) {
			$messageError = "Qu'est-ce que tu veux me dire ?";
		}

	}

	function verifyInput($var){
		$var = trim($var);
		$var = stripcslashes($var);
		$var = htmlspecialchars($var);
		return $var;
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Contactez-moi !</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
	
	<div class="container">
		<div class="divider"></div>
		<div class="heading">
			<h2>Contactez-moi</h2>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="contact-form" role="form">
					<div class="row">

						<div class="col-md-6">
							<label for="firstname">Prénom<span class="blue"> *</span></label>
							<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="<?php echo $firstname; ?>">
							<p class="comments"><?php echo $firstnameError; ?></p>
						</div>

						<div class="col-md-6">
							<label for="name">Nom<span class="blue"> *</span></label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name; ?>">
							<p class="comments"><?php echo $nameError; ?></p>
						</div>

						<div class="col-md-6">
							<label for="email">Email<span class="blue"> *</span></label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="<?php echo $email; ?>">
							<p class="comments"><?php echo $emailError; ?></p>
						</div>

						<div class="col-md-6">
							<label for="phone">Téléphone</label>
							<input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="<?php echo $phone; ?>">
						</div>

						<div class="col-md-12">
							<label for="message">Message<span class="blue"> *</span></label>
							<textarea name="message" id="message" rows="4" class="form-control" placeholder="Votre message"><?php echo $message; ?></textarea>
							<p class="comments"><?php echo $messageError; ?></p>
						</div>

						<div class="col-md-12">
							<p class="blue"><strong>* Ces informations sont requises</strong></p>
						</div>

						<div class="col-md-12">
							<input type="submit" class="button1" value="Envoyer">
						</div>
					</div>

					<p class="thank-you">Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>
				</form>
			</div>
		</div>
	</div>

</body>
</html>