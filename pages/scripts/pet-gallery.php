<!DOCTYPE html>
<html>
	<head>
		<title> Choose the Best Pet For You! </title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
		<link rel="shortcut icon" href="../../images/favicon.ico" />
		<link rel="stylesheet" href="../../style.css">
		<link rel="stylesheet" href="../../styles/pet-gallery.css">
	</head>
	<body>
		<nav style="background-color:#edfcee" class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="../../index.html">MEDIA PRODUCTION II FINAL PROJECT</a>
			</div>
			<ul class="nav navbar-nav">
			  <li><a href="../../index.html">Home</a></li>
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Animal Care<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="../mammal-care.html">Mammal Care</a></li>
				  <li><a href="../reptile-care.html">Reptile Care</a></li>
				  <li><a href="../bird-care.html">Bird Care</a></li>
				</ul>
			  </li>
			  <li class="active"><a href="pet-gallery.php">Pets Around the World</a></li>
			</ul>
		  </div>
		</nav>

        <h2> Featured Pet:</h2>
		<p> <em> Refresh for another pet! </em> </p>
        <?php
            $pets = array();

            $pet = array_push($pets,
                "<img src='../../images/cockatiels.jpg' width='45%'>",
                "<img src='../../images/budgies.jpg' width='45%'>",
                "<img src='../../images/dogs.jpg' width='45%'>",
                "<img src='../../images/hamster.jpg' width='45%'>",
                "<img src='../../images/cat.jpg' width='45%'>",
                "<img src='../../images/bunny.jpg' width='45%'>",
                "<img src='../../images/cornsnake.png' width='45%'>",
				"<img src='../../images/beardy.jpg' width='45%'>",
				"<img src='../../images/ferrets.jpg' width='45%'>",
				"<img src='../../images/hedgy.jpg' width='45%'>",
				"<img src='../../images/fish.jpg' width='45%'>",
				"<img src='../../images/guineapigs.jpg' width='45%'>",
				"<img src='../../images/piglet.jpg' width='45%'>",
				"<img src='../../images/easternboxturtle.jpg' width='45%'>");

            // count number of items
            $total_items = count($pets);

            // Sort the array
            sort($pets);

            // Randomly select an item
            $selected = rand(0, $total_items-1);

            // echo
            echo ($pets[$selected]);
        ?>
    </body>
</html>
