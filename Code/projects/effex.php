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
				<h3>Zip Code Function</h3>
				<p class="accent">EFFEX - HTML / CSS / PHP / MySQL<br>CMS - ModX</p>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
				<h3>Project Background</h3>
				<p>This project started out as a simple debugged and code clean-up. Later on it turned into building out a function for their applications.</p>
				<p>They wanted users to input their zip code and have it checked against a database. If the zip code exists, the user would be directed to a landing page that shows current job postings with an "Apply Now" button. If the user input a zip code that is not in the database, they are brought to a page with a dropdown that lists all of the locations they serve.</p>
				<p>This was my first forray into PHP and MySQL.</p>
			</div>
		</div>


		<?php include("../includes/footer.php"); ?>

	</div>
</body>

</html>
