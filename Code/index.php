<?php 
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

		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<h1 class="text-left special-font">Hi, my name is Nathan. I am a Web Developer living in Ekhart, IN.</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 parallax">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<h3>About:</h3>
				<p>I am a self taught web developer that places a high emphasis on improving and growing my skillset.</p>
				<p>I am currently working at an agency that handles inventory, SEO, content, and development for car dealerships acorss the nation. I enjoy getting the opportunity to learn new things and implement them in my job. I also do freelance work on the side. In my free time, I play banjo, DnD, bake, and spend time with my family.</p>
				<h3>Services:</h3>
				<h4 class="blue">Web Development</h4>
				<p>I am able to build websites following best practice set out by W3C, as well asproperly use HTML5 and CSS to get your site looking just the way you want, while keeping responsiveness in mind. I can use basic Javascript, PHP, and MySQL to add functionality to your site.</p>
				<h4 class="blue">SEO</h4>
				<p>I understand the importance of SEO for your website and will make sure that your site is optimized with SEO standards in mind. I can do an audit and make suggetions to help you rank higher on Google.</p>
			</div>
		</div>

		<?php include("footer.php"); ?>

	</div>
</body>

</html>
