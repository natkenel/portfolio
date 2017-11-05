<?php
// Initialize the session
session_start();
$_SESSION['rdrurl'] = $_SERVER['REQUEST_URI'];
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

			<?php
                if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
        ?>
				<div class="row cstm-pad3">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<p>Due to the nature of NDA, I am not able to publicly share the projects that I have worked on. If want access to view them, fill out the contact form and I can send you the login information. I do this to protect myself and respect previous clients while providing access to my projects to interested parties.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<div class="row">
							<div class="col-xs-12">
								<div class="card">
									<a href="login.php">
										<img src="/images/log-in-image.jpeg" class="cstm-img" alt="Log In Image">
									</a>
									<a href="login.php" class="cta-button overlay-button">Log In<span class="arrow-right">→</span></a>
									<a class="overlay" href="login.php"></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p class="accent cstm-pad2">HTML / CSS / PHP / MYSQL</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<div class="row">
							<div class="col-xs-12">
								<div class="card">
									<a href="login.php">
										<img src="/images/log-in-image.jpeg" class="cstm-img" alt="Log In Image">
									</a>
									<a href="login.php" class="cta-button overlay-button">Log In<span class="arrow-right">→</span></a>
									<a class="overlay" href="login.php"></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p class="accent cstm-pad2">HTML / CSS / SEO / CONTENT</p>
							</div>
						</div>
					</div>
				</div>

				<?php }
                else { ?>
				<div class="row cstm-pad3">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<div class="row">
							<div class="col-xs-12">
								<div class="card">
									<a href="/projects/effex.php">
										<img src="/images/effex-zip-code-project.jpeg" class="cstm-img" alt="Effex Project">
									</a>
									<a href="/projects/effex.php" class="cta-button overlay-button">See Project<span class="arrow-right">→</span></a>
									<a class="overlay" href="/projects/effex.php"></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p class="cstm-pad2"><span class="accent">EFFEX - HTML / CSS / PHP / MySQL</span><br>CMS - ModX</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
						<div class="row">
							<div class="col-xs-12">
								<div class="card">
									<a href="/projects/chroma-cars.php">
										<img src="/images/chroma-cars-projects.jpeg" class="cstm-img" alt="Effex Project">
									</a>
									<a href="/projects/chroma-cars.php" class="cta-button overlay-button">See Project<span class="arrow-right">→</span></a>
									<a class="overlay" href="/projects/chroma-cars.php"></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<p class="cstm-pad2"><span class="accent">CHROMA CARS - HTML / CSS / SEO / CONTENT</span><br>CMS - Ebait</p>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>

				<?php include("includes/footer.php"); ?>

		</div>
	</body>

	</html>
