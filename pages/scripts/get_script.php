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
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
    $con = mysqli_connect('localhost:3308','dev11dbuser','FM11web2020','dev11db');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    echo "<table class='center'>
    <tr>
    <th><strong> Name of Quiz Taker: </strong></th>
    <th><strong> The Best-Fit Pet For Them: </strong></th>
    </tr>";

    mysqli_select_db($con,"dev11db");
    $sql="SELECT * FROM `animal results` ";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['result'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
?>
</body>
</html>
