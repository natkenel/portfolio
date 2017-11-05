<div class="row">
	<div class="col-xs-12">
		<hr>
	</div>
</div>
<?php
if (strpos($_SERVER['REQUEST_URI'], '/projects/effex.php') === strlen($_SERVER['REQUEST_URI']) - strlen('/projects/effex.php') || strpos($_SERVER['REQUEST_URI'], '/projects/chroma-cars.php') === strlen($_SERVER['REQUEST_URI']) - strlen('/projects/chroma-cars.php')) { ?>
  
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
		<h2 class="text-center special-font">See More Projects</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3">
		<a href="/projects.php"><button class="text-center cstm-button"><span class="arrow-left">←</span>Previous</button></a>
	</div>
</div>
<?php }
else { ?>
<div class="row">
	<div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
		<h2 class="text-center special-font">Get in touch today.</h2>
	</div>
</div>
<div class="row">
	<div class="col-sm-2 col-sm-offset-5 col-xs-6 col-xs-offset-3">
		<button class="text-center cstm-button" data-toggle="modal" data-target="#myModal">Email Me</button>
	</div>
</div>
<?php } ?>
<div class="row">
	<div class="col-xs-12">
		<hr>
	</div>
</div>
<div class="row cstm-pad4">
	<div class="col-xs-6 col-xs-offset-3">
		<h4 class="text-center special-font">Copyright Nathan Nelson 2017</h4>
	</div>
</div>
