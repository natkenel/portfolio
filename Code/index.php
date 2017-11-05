<?php 
    session_start();  
?>

<!DOCTYPE html>
<html>

<head>
    
    <?php include("includes/meta.html") ?>

</head>

<body>
	<div class="container-fluid">
		
			<?php 
				include("includes/navigation.php");
				include("includes/contact-form.php")
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

		<?php include("includes/footer.html"); ?>

	</div>
</body>

</html>
