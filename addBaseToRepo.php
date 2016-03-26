<html lang="en">
<!--

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
				    <li class="active"><a href="#">Add Base to Repository <span class="sr-only">(current)</span></a></li>
	      		  </ul>
	     		</div><!-- /.navbar-collapse -->
	  		</div><!-- /.container-fluid -->
		</nav>
		<div class = "container">


			<form action="uploads.php" method="post" enctype="multipart/form-data">
			    Select file to upload:
			    <input type="file" name="fileToUpload" id="fileToUpload">
			    <input type="submit" value="Upload Base Grip" name="submit">
			</form>



		</div>
	</body>
</hmtl>