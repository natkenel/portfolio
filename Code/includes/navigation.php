<div class="row">
	<div class="col-sm-12 cstm-pad">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span>
        				<span class="icon-bar"></span> 
					</button>
				<a class="navbar-brand" href="index.php"><div id="box"><img src="nkn-logo.png" id="logo" alt="logo"></div></a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><span class="square"><a class="tenth before after" href="index.php">Home</a></span></li>
					<li><span class="square"><a class="tenth before after" href="projects.php">Projects</a></span></li>
					<li><span class="square"><a class="tenth before after" href="#myModal" data-toggle="modal">Contact</a></span></li>
					<li>
						<?php
                                         if(!isset($_SESSION['username']) || empty($_SESSION['username'])){ ?>
							<span class="square"><a class="tenth before after" href="login.php">Log In</a></span>
							<?php }
                                          else { ?>
							<span class="square"><a class="tenth before after" href="logout.php">Log Out</a></span>
							<?php }
                                    ?>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>