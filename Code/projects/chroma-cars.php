<?php 
    session_start(); 
$_SESSION['rdrurl'] = $_SERVER['REQUEST_URI']; 
?>

<!DOCTYPE html>
<html>

<head>

	<?php include("../includes/meta.html") ?>

</head>

<body>
	<div class="container-fluid">

		<?php 
				include("../includes/navigation.php");
				include("../includes/contact-form.php")
			?>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<h3>Full Time Developer</h3>
				<p class="accent">CHROMA CARS - HTML / CSS / PHP / MySQL<br>CMS - Ebait</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<h3>Project Background</h3>
				<p>Chroma Cars provides services for car dealerships across the US. I write content with an emphasis on SEO, build out custom pages per customer specifications, and provide SEO audits. Each make has its own set of strict standards and I have to adhere to them for all content and custom builds.</p>
			</div>
		</div>


		<?php include("../includes/footer.php"); ?>

	</div>
</body>

</html>
