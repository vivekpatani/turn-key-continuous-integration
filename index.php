<!DOCTYPE html>
<html>
<head>
	<title>Turn Key Continuous Integration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php require 'header.php' ?>
</head>
<body>

	<!-- Navigator for the website, Home is active. Once finalised override -->
	<nav class="navbar navbar-inverse">

		<!-- To cover the complete width -->
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">UITS Project Gen 0.9</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.php">Home</a></li>
					</ul>
				</div>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<form name="project_form" id="project_form">
			<div class="row col-lg-12">
				<div class="form-group col-lg-6">
					<h2 class="text-left">Project Metadata</h2>
					<p class="text-left">Artifact Coordinates</p>
					<br>
					<label for="project_group">Project Group</label>
					<input type="text" class="form-control" id="project_group" placeholder="Project Group">
				</div>
				<div class="form-group col-lg-6">
					<h2 class="text-left">Project Metadata</h2>
					<p class="text-left">Artifact Coordinates</p>
					<br>
					<label for="project_dependancies">Add Dependancies</label>
					<input type="text" class="form-control" id="project_dependancies" placeholder="Enter dependancies sepeareted by commas">
				</div>
			</div>
		</div>
		<div class="form-group row text-center col-lg-12">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-secondary">Sign in</button>
			</div>
		</div>
	</form>	
</div>


<?php require 'imports.php' ?>

</body>
<footer>
	<?php require 'footer.php' ?>
</footer>
</html>