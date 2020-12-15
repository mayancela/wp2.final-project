<?php
 $user_input = false;
 if(isset($_POST['user_input'])) {
     $user_input = $_POST['user_input'];
 }
 $animal_arr = array (
     array("Dog", "10-13", "Three dogs survived the Titanic sinking","<img src='../images/puppies.jpg' width='50%'>"),
     array("Cat", "10-20", "Cats conserve energy by sleeping for an average of 13 to 14 hours a day","<img src='../images/kittens.jpg' width='50%'>"),
     array("Hamster", "2-3", "The Syrian hamster is the most popular pet hamster","<img src='../images/hamster.jpg'>"),
     array("Bunny", "1-2", "A baby rabbit is called a kit, a female is called a doe, and a male is a buck","<img src='../images/bunnies.jpg' width='50%'>"),
 );

 $user_input = strtolower($user_input);
 switch($user_input) {
     case "dog":
     case "dogs":
        echo $animal_arr[0][3] . "<br>";
        echo "<strong> Animal: </strong>" . $animal_arr[0][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[0][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[0][2] . "<br>";
        echo "<strong> Feeding: </strong> When your dog reaches his first birthday, one meal a day is usually enough <br>";
        echo "<strong> Exercise: </strong> Dogs need exercise to burn calories, stimulate their minds, and stay healthy. Exercise also tends to help dogs avoid boredom, which can lead to destructive behaviors. <br>";
        break;
    case "cat":
    case "cats":
       echo $animal_arr[1][3] . "<br>";
       echo "<strong> Animal: </strong>" . $animal_arr[1][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[1][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[1][2] . "<br>";
       echo "<strong> Feeding: </strong> You will need to provide fresh, clean water at all times, and wash and refill your cat’s water bowls daily. Cats require taurine, an essential amino acid, for heart and eye health.
            Treats should be no more than 5-10% of the diet. <br>";
       echo "<strong> Scratching: </strong> Cats need to scratch! When a cat scratches, the old outer nail sheath is pulled off and the sharp, smooth claws underneath are exposed. Cutting your cat’s nails every two to three weeks
            will keep them relatively blunt and less likely to harm the arms of both humans and furniture. <br>";
       break;
   case "hamster":
   case "hamsters":
      echo $animal_arr[2][3] . "<br>";
      echo "<strong> Animal: </strong>" . $animal_arr[2][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[2][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[2][2] . "<br>";
      echo "<strong> Feeding: </strong> You can buy bags of hamster mix, which will generally have a blend of fruits, vegetables and seeds and grains, but you'd do well to also give your hamster small pieces of fresh vegetables and fruit. <br>";
      echo "<strong> Toys: </strong> An exercise wheel is a must to prevent boredom, and you can also purchase a ball for your hamster to run around a room in under your supervision. <br>";
      echo "<strong> Cage: </strong> Purchase a cage at least 15 inches long by 12 inches high, but opt for something larger if you can to give your hamster more room to exercise and explore. <br>";
      break;
  case "bunny":
  case "bunnies":
     echo $animal_arr[3][3] . "<br>";
     echo "<strong> Animal: </strong>" . $animal_arr[3][0] . "<br><strong> Average Lifespan: </strong>" . $animal_arr[3][1] . " years <br><strong>Fun fact: </strong>" . $animal_arr[3][2] . "<br>";
     echo "<strong> Feeding: </strong> A rabbit’s diet should mainly consist of hay.  Fresh hay should be provided to rabbits at all times. Supplement your rabbit’s hay with fresh vegetables, fiber-rich pellets (in limited quantities for
        adult rabbits), and fresh water daily.<br>";
     echo "<strong> Toys: </strong> Cardboard castles are great because rabbits spend hours chewing new windows and doorways. Cardboard castles also provide a quiet refuge for the rabbit when necessary. <br>";
     echo "<strong> Gromming: </strong>  Rabbits go through shedding cycles a couple times a year. It’s important to brush your rabbit to remove all the excess fur. Otherwise, your rabbit could ingest it and have serious digestive issues. <br>";
     break;
     default:
        echo "Animal information not found";
 }
?>
