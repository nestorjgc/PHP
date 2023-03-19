<html>
  <head>
    <title>Mission to Mars</title>
          <link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-icon" href="https://nestor-journal-weeks.nestorjgc.repl.co/logosmall.png">

  </head>
  <body>

    <h1>Welcome to Mission to Mars adventure!</h1>
    <h3> Voluteer Registration</h3>
  <form action="process_registration.php" method="POST" class="receipt">

          <input type="text" name="firstName" placeholder="First Name" required>
          <input type="text" name="lastName" placeholder="Last Name" required>
          <input type="email" name="email" placeholder="Enter your Email" required>
          <input type="tel" id="phone" name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Enter your Phone Number" required>
          <label for="age">Choose your age range: </label>
          <select id="age" name="age" required>
          <option value="18-21">18-21</option>
          <option value="21-29">21-29</option>
          <option value="29-30">29-30</option>
          <option value="39-40">39-40</option>
          <option value="49-50">49-50</option>
          <option value="59-60">59-60</option>
          <option value="60">60+</option>
          </select>
    
    <label for="status">What is your family status?</label>
    <div class="container">
     <label for="singleNochildren">Single - no children</label> 
     <input type="radio" id="singleNochildren" name="status" value="Single- no children" required> <br>
     <label for="singleWithchildren">Single - with children</label> 
     <input type="radio" id="singleWithchildren" name="status" value="Single- with children" required> <br>
      
     <label for="marriedNochildren">Married/partnered - nochildren</label> 
     <input type="radio" id="marriedNochildren" name="status" value="Married- no children" required><br>
      
     <label for="marriedWithchildren">Married/partnered - with children</label> 
     <input type="radio" id="marriedWithchildren" name="status" value="Married- with children" required><br>
</div>
    
   <textarea rows="4" cols="10" name="comments" placeholder="Describe why you should be picked for the Mars Human Colony" required></textarea>

 <div>

 <input type="checkbox" id="terms" name="terms" required>
     <label for="terms">Accept terms of Volunteer Human Trial?</label>
 </div>
          <input type="submit">


      </form>
    
    
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>