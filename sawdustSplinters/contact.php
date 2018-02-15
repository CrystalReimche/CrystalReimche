

<?php include 'form_process.php'; ?>


<html>

    <head>
		<link type="text/css" rel="stylesheet" href="css/sawdust.css"/>
		<link type="text/css" rel="stylesheet" href="css/lightbox.css"/>
		<title>Contact - Sawdust &amp; Splinters</title>
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/lightbox-plus-jquery.js"></script>
	</head>

    <body>

        <header>
            <div class="nav">
                <ul class="mainmenu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="photography.html">Photography</a>
                        <ul class="submenu">
                            <li><a href="photography.html#belize">Belize</a></li>
                            <li><a href="photography.html#fernie">Fernie BC</a></li>
                            <li><a href="photography.html#montana">Montana</a></li>
                            <li><a href="photography.html#philippines">Philippines</a></li>
                            <li><a href="photography.html#tahoe">Lake Tahoe</a></li>
                        </ul>
                    </li>
                    <li><a href="woodworking.html">Woodworking</a>
                        <ul class="submenu">
                            <li><a href="woodworking.html#furniture">Furniture</a></li>
                            <li><a href="woodworking.html#cutting">Cutting Boards</a></li>
                            <li><a href="woodworking.html#bandsaw">Bandsaw Boxes</a></li>
                            <li><a href="woodworking.html#keepsake">Keepsake Boxes</a></li>
                            <li><a href="woodworking.html#odds">Odds &amp; Ends</a></li>
                        </ul>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </header>


        <div class="container">
            <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <h3>Quick Contact</h3>
                <h4>Contact me today, and get reply with in 24 hours!</h4>
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
            <div class="success"><?= $success ?></div>
            </form>
        </div>
    </body>

</html>