<html>
  <head>
    <title>Mission to Mars</title>
          <link rel="stylesheet" href="styles.css">
<link rel="icon" type="image/x-icon" href="https://nestor-journal-weeks.nestorjgc.repl.co/logosmall.png">

  </head>
  <body>
<h2>Thank you</h2>
<form class="process">
    <?php
     
/*  echo '<pre>For testing purposes: ';
  print_r($_REQUEST);
echo '</pre>';  */



$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['phone'];
$age = $_POST['age'];
$status = $_POST['status'];
$comment = $_POST['comments'];


echo "
<p> Thank you for submitting your application to travel to space, $firstName!</p>
<p> We are excited to review your information and see if you have what it takes to join the space travel community.</p>
<p>Our team of experts will carefully evaluate your application, including your background, experience, and qualifications. We will notify you via email to $email of the status of your application within the next few weeks.</p>
<p>First name: $firstName</p>
<p>Last name: $lastName</p>
<p>Email: $email</p>
<p>Phone Number: $number</p>
<p>Age Range: $age</p>
<p>Status: $status</p>
<p>Describe why do we need to pick you? <br><br>$comment</p>
";

?>
    </form>
  </body>
</html>


