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
	<script src="js/script.js"></script>
</head>
<body>
	
	<div class="container">
		<div class="divider"></div>
		<div class="heading">
			<h2>Contactez-moi</h2>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<form action="" method="post" id="contact-form" role="form">
					<div class="row">

						<div class="col-md-6">
							<label for="firstname">Prénom<span class="blue"> *</span></label>
							<input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="">
							<p class="comments"></p>
						</div>

						<div class="col-md-6">
							<label for="name">Nom<span class="blue"> *</span></label>
							<input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="">
							<p class="comments"></p>
						</div>

						<div class="col-md-6">
							<label for="email">Email<span class="blue"> *</span></label>
							<input type="email" id="email" name="email" class="form-control" placeholder="Votre email" value="">
							<p class="comments"></p>
						</div>

						<div class="col-md-6">
							<label for="phone">Téléphone</label>
							<input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
							<p class="comments"></p>
						</div>

						<div class="col-md-12">
							<label for="message">Message<span class="blue"> *</span></label>
							<textarea name="message" id="message" rows="4" class="form-control" placeholder="Votre message"></textarea>
							<p class="comments"></p>
						</div>

						<div class="col-md-12">
							<p class="blue"><strong>* Ces informations sont requises</strong></p>
						</div>

						<div class="col-md-12">
							<input type="submit" class="button1" value="Envoyer">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>