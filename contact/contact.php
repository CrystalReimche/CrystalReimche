<?php include 'form_process.php'; ?>


	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link type="text/css" rel="stylesheet" href="../css/contactStyles.css" />
		<link type="text/css" rel="stylesheet" href="../css/style.css" />
		<title>Crystal Reimche Contact</title>
		<!-- Bootstrap CSS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="../js/script.js"></script>
		<script type="text/javascript" src="../js/contact.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Mr+Dafoe" rel="stylesheet">
	</head>

	<body id="home">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-toggleable-md fixed-top" style="background-color: #292B2C">
				<a class="navbar-brand d-flex w-50 mr-auto pl-3 scroll" style="color: white;">Crystal Reimche</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar3" aria-controls="collapsingNavbar3" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
					<ul class="nav navbar-nav active ml-auto w-100 justify-content-end">
						<li class="nav-item pl-3 pr-3">
							<a class="nav-link" href="http://crystalreimche.com">Home</a>
						</li>
						<li class="nav-item pl-3 pr-3">
							<a class="nav-link" href="http://crystalreimche.com/#portfolio">Portfolio</a>
						</li>
						<li class="nav-item pl-3 pr-3">
							<a class="nav-link" href="http://crystalreimche.com/#skills">Programming Skills</a>
						</li>
						<li class="nav-item pl-3 pr-3">
							<a class="nav-link" href="http://crystalreimche.com/#who">Who Am I?</a>
						</li>
						<li class="nav-item pl-3 pr-3">
							<a class="nav-link" href="http://crystalreimche.com/#contact">Contact Me!</a>
						</li>
					</ul>
				</div>
			</nav>



			<div class="container-form">
				<form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
					<h3>Quick Contact</h3>
					<!--                <h4>Contact me today!</h4>-->
					<fieldset>
						<input placeholder="Your Name" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
						<span class="error"><?= $name_error ?></span>
					</fieldset>
					<fieldset>
						<input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2">
						<span class="error"><?= $email_error ?></span>
					</fieldset>
					<fieldset>
						<input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
						<span class="error"><?= $phone_error ?></span>
					</fieldset>
					<fieldset>
						<textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5"></textarea>
					</fieldset>
					<fieldset>
						<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
					</fieldset>
					<div class="success">
						<?= $success ?>
					</div>
				</form>
			</div>
		</div>
		<!-- jQuery first, then Tether, then Bootstrap JS. -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	</body>

	</html>
