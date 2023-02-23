<html>
  <head>
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Sriracha&display=swap" rel="stylesheet">
    <title>In-N-Out Order Ahead</title>
  </head>
  <body>
    <header>
    <img src="https://www.in-n-out.com/ResourcePackages/INNOUT/content/images/logo.svg?package=INNOUT" alt="In-N-Out Logo">
    </header>

    <main>
    <h1>In-N-Out Burger Online Ordering</h1>
<?php 
// Output the form values for testing - comment out when done 
echo '<pre>For testing purposes: ';
  print_r($_REQUEST);
echo '</pre>';

/* Since we have programmed our form to only accept numeric inputs and included a default value of 0, you shouldn't have to check if a value exists. In other cases, with text inputs, you may need to do some validation, depending on how you setup the form. Note: You probably want to check that a $_POST or $_REQUEST variable exists just in case they come to this page without submitting the form. */

$doubledouble_cost = 3.45;
$cheeseburger_cost = 2.40;
$hamburger_cost = 2.10;
$fries_cost = 1.60;
$combo_dbl_cost = 6.70;
$combo_chs_cost = 5.65;
$combo_ham_cost = 5.35;


$small_drink_cost = 1.50;
$medium_drink_cost = 1.65;
$large_drink_cost = 1.85;
$xlarge_drink_cost = 2.05;
$shakes_drink_cost = 2.15;
$milk_drink_cost = 0.99;
$coffee_drink_cost = 1.35;


/* A student is testing their program and has created code to calculate the cost of the food they have ordered */

$subtotal = $_POST['doubledouble'] +  $_POST['cheeseburger'] + $_POST['hamburger'] + $_POST['fries'];

// Just for output purposes this student wanted to include some specific item counts in the output page.

$total_burgers = $_POST['doubledouble'] +  $_POST['cheeseburger'] + $_POST['hamburger'] + $_POST['combo_dbl'] + $_POST['combo_chs'];
$total_fries = $_POST['fries'];
// If you use a double quote you can include the variable inside the quotations without having to concatenate
echo "Your subtotal of $total_burgers burgers and $total_fries fries is  $subtotal.";

// With your group, test the code above and determine if anything needs to be fixed. Is the output reporting the correct amount of the order for the 4 items listed?

// When you have it working, be sure to add in the rest of the menu items in the calculation and output the items ordered in this format: 

// ITEM            QTY       PRICE      TOTAL_PRICE
// Double Double    2        $3.45        $6.90
// etc.

// Note: Only output items ORDERED. If they didn't order anything, they shouldn't see it in the output
// Hint: Use an IF statement to check if the quantity of the item is greater than 0. If so, output. If not, move on.

//Burgers and fries
$doubledouble_qty = $_POST['doubledouble'];
$cheeseburger_qty = $_POST['cheeseburger'];
$hamburger_qty = $_POST['hamburger'];
$fries_qty = $_POST['fries'];

//Combos
$combo_dbl_qty = $_POST['combo_dbl'];
$combo_chs_qty = $_POST['combo_chs'];
$combo_ham_qty = $_POST['combo_ham'];

//Beverages
$small_drink_cost = $_POST['sm_drink'];
$medium_drink_cost = $_POST['m_drink'];
$large_drink_cost = $_POST['lg_drink'];
$xlarge_drink_cost = $_POST['xl_drink'];
$shakes_drink_cost = $_POST['shake_drink'];
$milk_drink_cost = $_POST['milk_drink'];
$coffee_drink_cost = $_POST['coffee_drink'];

$order_subtotal = 0; //COUNTER INITIALIZE TO 0!

if ($doubledouble_qty > 0) 
{
  $tot_doubledouble = $doubledouble_qty * $doubledouble_cost;
  $order_subtotal += $tot_doubledouble;
  echo "<p>Double Double   |  $doubledouble_qty  | $doubledouble_cost | $" . number_format($tot_doubledouble, 2) . "</p>"; 
}

 if ($cheeseburger_qty > 0) 
{
  $tot_cheeseburger = $cheeseburger_qty * $cheeseburger_cost;
  $order_subtotal += $tot_cheeseburger;
  echo "<p>Cheeseburger   |  $cheeseburger_qty  | $cheeseburger_cost | $" . number_format($tot_cheeseburger, 2) . "</p>"; 
}

if ($hamburger_qty > 0) 
{
  $tot_hamburger = $hamburger_qty * $hamburger_cost;
  $order_subtotal += $tot_hamburger;
  echo "<p>Hamburger   |  $hamburger_qty  | $hamburger_cost | $" . $tot_hamburger . "</p>"; 
}

if ($fries_qty > 0) 
{
  $tot_fries = $fries_qty * $fries_cost;
  $order_subtotal += $tot_fries;
  
  echo "<p>Fries   |  $fries_qty  |  $fries_cost |  $" . number_format($tot_fries,2) . "</p>"; 
}

if($combo_dbl_qty > 0)
{
  echo "<p>Combo Double Double  | $combo_dbl_qty | $combo_dbl_cost | " . $combo_dbl_qty * $combo_dbl_cost . "</p>";  
}

if($combo_chs_qty > 0)
{
  echo "<p>Combo Cheese Burger  | $combo_chs_qty | $combo_chs_cost | " . $combo_chs_qty * $combo_chs_cost . "</p>";  
}

if($combo_ham_qty > 0)
{
  echo "<p>Combo Ham Burger  | $combo_ham_qty | $combo_ham_cost | " . $combo_ham_qty * $combo_ham_cost . "</p>";  
}
 



  echo "<p> Your subtotal is $ $order_subtotal</p>";
  $total_order = $order_subtotal * 1.095;
  echo "<p> Your total order with tax: $$total_order</p>";
  
// Be sure to calculate tax of 9.5% (.095) in the total amount due

// Once you have your order total working, go back and get some information like the customer name, email and phone number. Don't worry about payment information. Display this information with a made up order number on the confirmation page. 

?>
 </main>
</body>
</html>
