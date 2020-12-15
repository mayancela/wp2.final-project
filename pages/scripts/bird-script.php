<?php
 $user_input = false;
 if(isset($_POST['user_input'])) {
     $user_input = $_POST['user_input'];
 }
 $animal_arr = array (
     array("Cockatiel", "10-14", "Cockatiels do not live as long as larger parrot breeds","<img src='../images/cockatiels.jpg' width='50%'>"),
     array("Budgie", "5-10", "Budgies are the most popular type of pet bird","<img src='../images/budgies.jpg' width='50%'>"),
     array("Lovebird", "10-15", "Lovebirds mate for life","<img src='../images/lovebirds.jpg' width='50%'>"),
 );

 $user_input = strtolower($user_input);
 switch($user_input) {
     case "cockatiel":
     case "cockatiels":
        echo $animal_arr[0][3] . "<br>";
        echo "<strong> Animal: </strong>" . $animal_arr[0][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[0][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[0][2] . "<br>";
        echo "<strong> Feeding: </strong> A healthy cockatiel diet includes commercially balanced diets as well as other food, fresh vegetables and some seed. <br>";
        echo "<strong> Toys: </strong>  Chewing is their favourite hobby and having plenty of toys they can shred to pieces will please them. Toys made from palm or raffia strips, twig balls,
            and vegetable tanned leather strips are all great options. <br>";
        echo "<strong> Cage: </strong> A cockatiel needs a cage spacious enough to accommodate multiple perches, toys, food bowls and have plenty of room to flap its wings without hitting them against anything. <br>";
        break;
    case "budgie":
    case "budgies":
       echo $animal_arr[1][3] . "<br>";
       echo "<strong> Animal: </strong>" . $animal_arr[1][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[1][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[1][2] . "<br>";
       echo "<strong> Feeding: </strong> Their diet mostly comprises of seeds, shoots and other plant matter. They have access to a variety of grasses, including Mitchell grass, spinifex grasses, wild oats, canary grass and many others.<br>";
       echo "<strong> Cage: </strong> The cage or aviary should be furnished with safe perches, feed and water bowls and a few carefully selected toys. <br>";
       echo "<strong> Socializing: </strong> As budgies naturally live in flocks, they have a strong need for social activities. This means that unless you are home most of the time and are able to give your budgie regular
            time out of its cage with you, you would be better to get another budgie for companionship<br>";
       break;
   case "lovebird":
   case "lovebirds":
      echo $animal_arr[2][3] . "<br>";
      echo "<strong> Animal: </strong>" . $animal_arr[2][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[2][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[2][2] . "<br>";
      echo "<strong> Cage: </strong> Lovebirds are very active birds, so a cage best suited to adequately house them must provide a lot of space. Be sure the spot you pick has good light and is well ventilated, though free from drafts.<br>";
      echo "<strong> Feeding: </strong> A diet consisting of a small parrot mix along with a variety of supplements and vitamins is generally regarded as suitable; also a formulated diet along with greens, fruits, and vegetable
            supplements but without additional vitamins is also regarded as suitable, and is a more current trend.<br>";
      echo "<strong> Socializing: </strong> Lovebirds are very social birds. Generally, it is thought that it is essential for their good health and happiness that they are kept in pairs, not single. <br>";
      break;
     default:
        echo "Animal information not found";
 }
?>
