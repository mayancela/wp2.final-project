<?php
 $user_input = false;
 if(isset($_POST['user_input'])) {
     $user_input = $_POST['user_input'];
 }
 $animal_arr = array (
     array("Corn Snake", "6-8", "Corn snakes are often killed because they are mistaken for the copperhead, a venomous species","<img src='../images/cornsnake.jpg' width='50%'>"),
     array("Bearded Dragon", "10-15", "Bearded dragons can run on two legs","<img src='../images/beardy.jpg' width='50%'>"),
     array("Eastern Box Turtle", "25-35", "Male box turtles usually have bright red or orange colored eyes while the eyes of the females are usually dark red or brown","<img src='../images/easternboxturtle.jpg' width='50%'>"),
 );

 $user_input = strtolower($user_input);
 switch($user_input) {
     case "corn snake":
        echo $animal_arr[0][3] . "<br>";
        echo "<strong> Animal: </strong>" . $animal_arr[0][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[0][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[0][2] . "<br>";
        echo "<strong> Feeding: </strong> The primary natural food of corn snakes is appropriately sized rodents. Feed baby corn snakes once every five to seven days, and feed adult corn snakes once every seven to 10 days. <br>";
        echo "<strong> Lighting & Temperature: </strong> No special lighting is required, but natural light from nearby windows will help your corn snake adjust its day and night cycles, and its seasonal cycles. Provide a
            temperature gradient with a light, or undertank heat pad or cable.  <br>";
        break;
    case "bearded dragon":
       echo $animal_arr[1][3] . "<br>";
       echo "<strong> Animal: </strong>" . $animal_arr[1][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[1][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[1][2] . "<br>";
       echo "<strong> Feeding: </strong> They are omnivourous and their diet should consist of 60-65% plant foods and 30-45% prey items. Include fresh water daily,
            and calcium supplement dusted over greens.<br>";
       echo "<strong> Cage: </strong> Maintain a temperature gradient from 75-85ºF (23.8-29.4°C) in the coolest area and up to 90-100ºF (32.2-37.7°C) in a basking are. <br>";
       break;
   case "eastern box turtle":
      echo $animal_arr[2][3] . "<br>";
      echo "<strong> Animal: </strong>" . $animal_arr[2][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[2][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[2][2] . "<br>";
      echo "<strong> Cage: </strong> Most aquariums are too small for this turtle, though a tank that’s at least 20 gallons can do for hatchlings and juveniles. <br>";
      echo "<strong> Feeding: </strong> Eastern box turtles are omnivores and eat a variety of foods in the wild. Their diet in captivity should come as close to their natural one as possible. Feed them roughly every 24 hours. <br>";
      echo "<strong> Heating: </strong> Eastern box turtles generally prefer a sunny area in their pen where they can bask in temperatures around 85 to 88 degrees Fahrenheit, as well as a shaded area that’s around 75 degrees Fahrenheit. <br>";
      break;
     default:
        echo "Animal information not found";
 }
?>
