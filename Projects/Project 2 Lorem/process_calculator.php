<html>
  <head>
    <title>PHP Works!</title>
      <link rel="stylesheet" href="styles.css">

  </head>
  <body>
    <img src="giphy2.webp" class="img-todo" alt="Image">


    <?php

/*  echo '<pre>For testing purposes: ';
  print_r($_REQUEST);
echo '</pre>';  */

$resident = $_POST['number'];
$total_words = $_POST['number'];


//Array
 $word_list = array("sunny", "rainy", "windy", "clear skies", "and", "or", "weather", "the", "snow", "showers", "blue", "grey", "hot", "cold", "stay inside", "overcast", "blinding", "frigid", "sunlight", "be", "a", "I", "you", "climate change", "summer", "spring", "fall", "winter", "barometric pressure", "temperature", "cyclone", "global warming", "rain", "mixture", "storm", "lightning", "thunder", "tornado", "it", "do", "that", "she", "or", "tha", "follow", "archer", "bacon", "dog", "pet", "cat", "You", "I like", "You like?", "home", "away","sunny", "rainy", "windy", "clear skies", "and", "or", "weather", "the", "snow", "showers", "blue", "grey", "hot", "cold", "stay inside", "overcast", "blinding", "frigid", "sunlight", "be", "a", "I", "you", "climate change", "summer", "spring", "fall", "winter", "barometric pressure", "temperature", "cyclone", "global warming", "rain", "mixture", "storm", "lightning", "thunder", "tornado", "it", "do", "that", "she", "or", "tha", "follow", "archer", "bacon", "dog", "pet", "cat", "You", "I like", "You like?", "home", "away");


      # This will select randomly from 1 to 100.
      $total_words = rand(1, 100);

      #debugging so i can test that I am getting the correct number of words
      /* echo $total_words . "<br>"; */
  
      # find out the total number of items in my list to use for my random index picker
      $tot_word_list = count($word_list);

      # initialize my sentence to nothing before i start creating it
      $this_sentence = "";
      $x = 0;

      if($resident === '1'){
         while($x < $total_words) {

      $this_index = (rand(0,($tot_word_list-1)));

      $this_sentence = $this_sentence . " " . $word_list[$this_index];
      $x++;
           
       } 
        echo "<p> " . ucfirst(trim($this_sentence)) . ".</p>";
      }
        
      else if($resident === '2'){
         while($x < $total_words) {
           
      $this_index = (rand(0,($tot_word_list-1)));
      $this_sentence = $this_sentence . " " . $word_list[$this_index];
      $x++;
      }
        //First Random paragraph
      echo "<p> " . ucfirst(trim($this_sentence)) . ".</p>";
        
      //Reset for random paragraph
      $this_sentence = '';
      $x = 0;
        
       while($x < $total_words) {
      $this_index = (rand(0,($tot_word_list-1)));
      $this_sentence = $this_sentence . " " . $word_list[$this_index];
      $x++;
      }
      // Second Random Paragraph
      echo "<p> " . ucfirst(trim($this_sentence)) . ".</p>";
        
      }
      else if($resident === '3'){
         while($x < $total_words) {
           
      $this_index = (rand(0,($tot_word_list-1)));
      $this_sentence = $this_sentence . " " . $word_list[$this_index];
      $x++;
      }
        //First Random paragraph
      echo "<p> " . ucfirst(trim($this_sentence)) . ".</p>";
        
      //Reset for random paragraph
      $this_sentence = '';
      $x = 0;
        
       while($x < $total_words) {
      $this_index = (rand(0,($tot_word_list-1)));
      $this_sentence = $this_sentence . " " . $word_list[$this_index];
      $x++;
      }
      // Second Random Paragraph
      echo "<p> " . ucfirst(trim($this_sentence)) . ".</p>";
        
      //Reset for random paragraph
      $this_sentence = '';
      $x = 0;
        
       while($x < $total_words) {
      $this_index = (rand(0,($tot_word_list-1)));
      $this_sentence = $this_sentence . " " . $word_list[$this_index];
      $x++;
      }
      //Third Random Paragraph
      echo "<p> " . ucfirst(trim($this_sentence)) . ".</p>";

      }
?>
        <?php echo '<button onclick="location.reload()">Generate Again</button>'; ?>
        <a href="index.php"> Go Back</a>


    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>