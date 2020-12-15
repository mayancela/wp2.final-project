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
		<script src="script.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand" href="../../index.html">MEDIA PRODUCTION II FINAL PROJECT</a>
			</div>
			<ul class="nav navbar-nav">
			  <li class="active"><a href="../../index.html">Home</a></li>
			  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Animal Care<span class="caret"></span></a>
				<ul class="dropdown-menu">
				  <li><a href="../mammal-care.html">Mammal Care</a></li>
				  <li><a href="../reptile-care.html">Reptile Care</a></li>
				  <li><a href="../bird-care.html">Bird Care</a></li>
				</ul>
			  </li>
			  <li><a href="pet-gallery.php">Pets Around the World</a></li>
			</ul>
		  </div>
		</nav>


    <h2> The Best Pet Match For You Is:</h2>
    <?php
        $servername = "localhost:3308";
        $username = "dev11dbuser";
        $password = "FM11web2020";
        $dbname = "dev11db";

        $name = $_POST['Name'];
        $input1 = $_POST['LivingSpace'];
        $input2 = $_POST['PriceRange'];
        $input3 = $_POST['AnimalType'];
        $input4 = $_POST['LifeSpan'];

        $parsed_input1 = strtolower($input1);
        $parsed_input3 = strtolower($input3);
        $parsed_input4 = strtolower($input4);

        if ( $parsed_input3 == "mammal") {
            if( $parsed_input1 == "house" && $input2 == "$$$" && $parsed_input4 == "medium") {
                $result = "Dog";
                $image = "puppies";
            }
            elseif ($parsed_input1 == "apartment" && $input2 == "$$$" && $parsed_input4 == "medium"){
                $result = "Cat";
                $image = "kittens";

            }
            elseif ( $parsed_input1 == "apartment" && $input2 == "$$" && $parsed_input4 == "short") {
                $result = "Hamster";
                $image = "hamster";
            }
            else {
                $result = "Bunny";
                $image = "bunnies";
            }
        }
        if ( $parsed_input3 == "reptile") {
            if( $parsed_input1 == "apartment" && $input2 == "$" && $parsed_input4 == "short") {
                $result = "Corn Snake";
                $image = "cornsnake";
            }
            elseif ( $parsed_input1 == "apartment" && $input2 == "$" && $parsed_input4 == "medium"){
                $result = "Bearded Dragon";
                $image = "beardy";
            }
            elseif ($parsed_input1 == "apartment" && $input2 == "$$" && $parsed_input4 == "long") {
                $result = "Eastern Box Turtle";
                $image = "easternboxturtle";
            }
            else {
                $result = "Bearded Dragon";
                $image = "beardy";
            }
        }

        if ( $parsed_input3 == "bird") {
            if($parsed_input1 == "house" && $input2 == "$$" && $parsed_input4 == "medium") {
                $result = "Lovebird";
                $image = "lovebirds";
            }
            elseif ($parsed_input1 == "apartment" && $input2 == "$" && $parsed_input4 == "medium"){
                $result = "Budgie";
                $image = "budgies";
            }
            elseif ($parsed_input1 == "house" && $input2 == "$" && $parsed_input4 == "medium") {
                $result = "Budgie";
                $image = "budgies";
            }
            elseif ($parsed_input1 == "apartment" && $input2 == "$$" && $parsed_input4 == "medium"){
                $result = "Cockatiel";
                $image = "cockatiels";
            }
            else {
                $result = "Cockatiel";
                $image = "cockatiels";
            }
        }
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO `animal results` (`name`,`result`)
        VALUES ('$name','$result')";

        if ($conn->query($sql) === TRUE) {
            echo " ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        if ($parsed_input3 == "mammal") {
            echo "<br> <img src='../../images/" . $image . ".jpg' width='43%'> <br>";
            echo "<br><br><p> Find More Info On Mammals <a href='../mammal-care.html'>Here</a></p>";
        }
        elseif ($parsed_input3 == "reptile") {
            echo "<br> <img src='../../images/" . $image . ".jpg' width='43%'>";
            echo "<br><br><p> Find More Info On Reptiles <a href='../reptile-care.html'>Here</a></p>";

        }
        elseif ($parsed_input3 == "bird") {
            echo "<br> <img src='../../images/" . $image . ".jpg' width='43%'>";
            echo "<br> <br><p> Find More Info On Birds <a href='../bird-care.html'>Here</a></p>";
        }
    ?>
    <p> Check Out Other's Results <a href="../table-update.html"> Here </a> </p>
</body>
</html>
