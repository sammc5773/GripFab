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
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- Scripts form programs -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  	<!-- Personal Scripts-->
  	<script>
	  $(function() {
		    $( "#slider-range-max" ).slider({
		      range: "max",
		      min: 0,
		      max: 100,
		      value: 0,
		      slide: function( event, ui ) {
		        $( "#amount" ).val( ui.value );
		      }
		    });
		    $( "#amount" ).val( $( "#slider-range-max" ).slider( "value" ) );
		  });
	  </script>

	
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
				    <li ><a href="#">Create New Grip <span class="sr-only">(current)</span></a></li>
				    <li class = "nav-separator"><a href="#"> / </a><li>
				    <li ><a href="chooseGripBase.php">Choose Grip Base </a></li>
				    <li class = "nav-separator"><a href="#"> / </a><li>
				    <li class="active"><a href="#">Choose Grip Barrel<span class="sr-only">(current)</span></a></li>
	      		  </ul>
	     		</div><!-- /.navbar-collapse -->
	  		</div><!-- /.container-fluid -->
		</nav>

		<!-- How do we want to implement barrell options? -->
		<!--Main body-->
		<div class = "container">
			<h4> Please choose a barrel for your grip: </h4>
			<!-- These buttons should dynamically add the barrel shape to the screen once it is clicked -->
			<script type="text/javascript" src="chooseGripBarrel.js"></script>
			<div class="btn-group">
			  <button class="btn btn-default btn-lg" type="button" onclick = "setSelectedBarrelCookie('barrel', 'circle')">
			    Circle
			  </button>
			  <button class="btn btn-default btn-lg" type="button" onclick = "setSelectedBarrelCookie('barrel', 'rectangle')">
			    Rectangle
			  </button>
			  <button class="btn btn-default btn-lg" type="button" onclick = "setSelectedBarrelCookie('barrel', 'square')">
			    Square
			  </button>
			  <button class="btn btn-default btn-lg" type="button" onclick = "">
			    Add Barrel
			  </button>
			</div>


			<div class = "slider" style = "width:400">
				<p>
				  <label for="amount">Length of Barrel:</label>
				  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
				</p>
				<div id="slider-range-max"></div>
			</div>
		</div>
			<footer>

			</footer>
	</body>

<script type="text/javascript">

</script>

</html> 