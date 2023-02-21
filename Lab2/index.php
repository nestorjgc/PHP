<html>
  <head>
    <title>Nestor's Cofffee</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

    <!-- General Information Variables php -->
    <?php
     $logo__img = "./img/logo.png";
    $name = "Nestor's Coffee Shop";
    $greeting = "COFFEE SERVED RIGHT!";
    $description_store = "We provide an excellent service for all of our customers.";

    $greeting = "Hello!";

    if($name){
      $greeting = "Welcome " . $name . "!";
    }

    $price__menu = 20;

      for ($i = 1; $i <= 10; $i++){
    $subtotal   = $price__menu * $i; 
    $discount   = ($subtotal / 100) * ($i * 4);  
    $totals[$i] = $subtotal - $discount;  
      }
      
    ?>
    
    
    <?php require 'includes/header.php'; ?> 
    <section class="section1">
      <div class="section__center">
        <h2><?= $name ?></h2>
        <p class="description__p"> <?= $description_store ?> </p>
         <h4><?= $greeting ?></h4>
      </div>
    </section>

    <section class="section__menu">
      <h2 class="h2__menu">Bags of Coffee</h2>

        <table>
          <tr>
            <hr>
           Take our coffee home with you
            <hr>
         
<?php foreach ($totals as $quantity => $price) { ?>
    <tr>
      <th>
        <?= $quantity ?>
        Bag(s) of Coffee..............................
      </th>
      <td>
        $<?= $price ?>
      </td>
    </tr>
    <?php } ?>

            

    </tr>
        </table>
      </div>
    </section>
   
    <?php require 'includes/footer.php'; ?>
  </body>
</html>