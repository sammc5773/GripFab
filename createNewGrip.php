<html lang="en">
<!--

This page allows users to choose a base from the pre-existing list of base options. These are all located in the directory called "gripBases"
- Sam 
3/21/15
-->
<head>
	<meta charset="utf-8">
	<title>GripFab</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

	
</head>

	<body>
 		<nav class="navbar navbar-inverse">
  			<div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">GripFab</a>
	    		</div>
	    	<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
				    <li><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
				    <li class = "nav-separator"><a href="#"> / </a><li>
				    <li class="active"><a href="#">Create New Grip <span class="sr-only">(current)</span></a></li>
	      		  </ul>
	     		</div><!-- /.navbar-collapse -->
	  		</div><!-- /.container-fluid -->
		</nav>
		<!--Main body-->
		<div class = "container">
			<!--currently displays nothing --> 
				<div id = "numFiles" style="display: none;">
					<?php 
						
					    // gets the numbers of files that are in the gripBase repository file. This should be the number of total buttons that appear
					    $i = 0; 
					    $dir = 'gripBases';
					    if($handle = opendir($dir)) 
					    {
					        while(($file = readdir($handle)) !== false)
					        {
					            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
					                $i++;
					        }
					    }
					    // prints out how many were in the directory
					    echo "$i";
					?>
				</div> 


				<div class = "invisibleListOfFileNames" style="display: none;">
					<ul>
						<!-- Create a list of all the file names, invisible to viewer -->
						<?php foreach (glob("gripBases/*.stl")as $fileName): ?>
						<li class = "invisibleFileName"> <?php echo "$fileName"; ?></li>
						<?php endforeach; ?>
					</ul>
				</div>
			<h2> Choose a Grip Base from the Repository. </h2>
			<script type="text/javascript" src="createNewGrip.js"></script>
			<script> createRepoButtons(); </script>
		</div>
		
		<!--From Here We Should Have Visual Screen Shots of Each Base with the Buttons -->
		<!-- Possibly a bunch of mini API screen shots? -->


		<footer>

		</footer>
	</body>

<script type="text/javascript">

</script>

</html> 