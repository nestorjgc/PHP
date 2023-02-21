<html>
  <head>
    <title>Nestor's Cofffee</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

    <!-- General Information Variables php -->
    <?php
     $logo__img = "./img/logo.png";
    $name = "This is the products page!";
    $greeting = "COFFEE SERVED RIGHT!";
    $description_store = "Working on the styles.";

    $greeting = "";

    if($name){
      $greeting = "Welcome " . $name . "!";
    }

    $price__menu = 13;

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
      <h2 class="h2__menu">Syrups Products</h2>

        <table>
          <tr>
            <hr>
            Take our syrups home
            <hr>
         
<?php foreach ($totals as $quantity => $price) { ?>
    <tr>
      <th>
        <?= $quantity ?>
        Bottle(s) of Syrup..............................
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