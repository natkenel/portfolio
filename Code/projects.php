<?php
// Initialize the session
session_start();
?>
	<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="If you are looking for for modern, responsive web development, check me out.">
		<meta name="keywords" content="web design, web developer, web development, HTML, CSS, PHP, mySQL, JavaScript">
		<meta name="author" content="Nathan Nelson">
		<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png?v=m2le0a62x6">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png?v=m2le0a62x6">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png?v=m2le0a62x6">
		<link rel="manifest" href="/favicons/manifest.json?v=m2le0a62x6">
		<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg?v=m2le0a62x6" color="#5bbad5">
		<link rel="shortcut icon" href="/favicons/favicon.ico?v=m2le0a62x6">
		<meta name="theme-color" content="#ffffff">
		<title>NK Nelson</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Open+Sans" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type='text/javascript' src="validation.js"></script>

	</head>

	<body>
		<div class="container-fluid">
			<?php 
				include("navigation.php");
				include("contact-form.php")
			?>			

			<?php
            if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
        ?>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<p>Due to the nature of NDA, I am not able to publicly share the projects that I have worked on. If want access to view them, fill out the contact form and I can send you the login information. I do this to protect myself and respect previous clients while providing access to my projects to interested parties.</p>
					</div>
				</div>
				<?php }
        ?>

				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<?php
                    // If session variable is not set it will redirect to login page
                    if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
                ?>
							<div class="well">

								<h3>Project 1</h3>
							</div>
							<p>HTML / CSS / SEO / CONTENT</p>
							<?php }
                      else { ?>
							<div class="well">

								<img src="" class="cstm-img" alt="Zip Code Project">
							</div>
							<p>EFFEX - HTML / CSS / SEO / CONTENT</p>
							<?php }
                    ?>
					</div>
				</div>

				<?php include("footer.php"); ?>

		</div>
	</body>

	</html>
