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
        <section id="menuImg">
            <img src="https://www.in-n-out.com/ResourcePackages/INNOUT/content/images/menu/double-double-meal.png?package=INNOUT" alt="double-double burger meal">
            <img src="https://www.in-n-out.com/ResourcePackages/INNOUT/content/images/menu/cheeseburger-meal.png?package=INNOUT" alt="cheeseburger meal">
            <img src="https://www.in-n-out.com/ResourcePackages/INNOUT/content/images/menu/hamburger-meal.png?package=INNOUT" alt="hamburger meal">
        </section>
    
    <form name="in-n-out" method="post" action="confirm_order.php">
    <section id="menuItems">
<h2>Menu items</h2>
  <p>
    <input type="number" id="doubledouble" name="doubledouble" min="0" max="25" value="0">
    <label for="doubledouble">Double Double Cheeseburger : $3.45 each</label>
  </p>
  <p>
    <input type="number" id="cheeseburger" name="cheeseburger" min="0" max="25" value="0">
    <label for="cheeseburger">Cheeseburger : $2.40 each</label>
  </p>
  <p>
    <input type="number" id="hamburger" name="hamburger" min="0" max="25" value="0">
    <label for="hamburger">Hamburger : $2.10 each</label>
  </p>
  <p>
    <input type="number" id="fries" name="fries" min="0" max="25" value="0">
    <label for="fries">Fries : $1.60 each</label>
  </p>
  </section>
            
  <section id="combos">
  <h2>Combinations</h2>
  <p>A burger, fries and a drink for a special price</p>
    <p>
    <input type="number" id="combo_dbl" name="combo_dbl" min="0" max="25" value="0">
    <label for="combo_dbl">Double Double Combo : $6.70 each</label>
  </p>
    <p>
    <input type="number" id="combo_chs" name="combo_chs" min="0" max="25" value="0">
    <label for="combo_chs">Cheeseburger Combo : $5.65 each</label>
  </p>
    <p>
    <input type="number" id="combo_ham" name="combo_ham" min="0" max="25" value="0">
    <label for="combo_ham">Hamburger Combo : $5.35 each</label>
  </p>
  </section>
            
  <section id="beverages">
  <h2>Beverages</h2>
  <p>   
    <input type="number" id="sm_drink" name="sm_drink" min="0" max="25" value="0">
    <label for="sm_drink">Small Soft Drink : $1.50 each</label>
  </p>
  <p>   
    <input type="number" id="m_drink" name="m_drink" min="0" max="25" value="0">
    <label for="m_drink">Medium Soft Drink : $1.65 each</label>
  </p>
  <p>   
    <input type="number" id="l_drink" name="l_drink" min="0" max="25" value="0">
    <label for="l_drink">Large Soft Drink : $1.85 each</label>
  </p>
  <p>   
    <input type="number" id="xl_drink" name="xl_drink" min="0" max="25" value="0">
    <label for="xl_drink">Xtra Large Soft Drink : $2.05 each</label>
  </p>
  <p>   
    <input type="number" id="shake" name="shake" min="0" max="25" value="0">
    <label for="shake">Shakes : $2.15 each</label>
  </p>
  <p>   
    <input type="number" id="milk" name="milk" min="0" max="25" value="0">
    <label for="milk">Milk : $.99 each</label>
  </p>
  <p>   
    <input type="number" id="coffee" name="coffee" min="0" max="25" value="0">
    <label for="coffee">Coffee : $1.35 each</label>
  </p>
  </section>

            <input type="submit">
        </form>
    </main>
</body>
</html>