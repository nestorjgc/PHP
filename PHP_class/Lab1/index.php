<?php 
/* 
Nestor Garcia      
2/8/2023
*/  
$paragraph1 = '<p>One of my favorite website is: ';
$link1 = ' <a target="_blank" href=https://www.google.com/>Google</a> I use it for pretty much anything.</p>';
$combiof1 = $paragraph1 . $link1;


$paragraph2 = '<p>My 2nd favorite website is: ';
$link2 = ' <a target="_blank" href=https://www.youtube.com/>YouTube</a> I like watching content where I can grow and sometimes I use it for entertainment.</p>';
$combiof2 = $paragraph2 . $link2;

$paragraph3 = 'This assignment was surprisingly kinda hard. I\'m only used to JavaScript and syntax in here is a bit different. For example, you have to close after the end with ; in javascript this is optional but I believe this is for good and best practices. '
  ?>
<html>
  <head>
    <title>Lab 1: Hello World</title>
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>
    <h1>Hello <span>World!</span></h1>
  <p>My name is Nestor. I've taken a few web development classes and I'm familiar with HTML/CSS and some concepts in C++. I've also done a lot of self-learning with courses on Udemy/Youtube about JavaScript. My goal for this class is to learn as much as possible about PHP/MySQL and integrate that into my personal projects, right now my projects are fully static and I would like to change them to dynamic. If I had to stick to one technology it would probably be Javascript because of React and Angular. 

My hobbies include surfing/snowboarding and some casual gaming (World of Warcraft.) I highly recommend Halt and Catch Fire if you're into machine learning/coding you would love this show! 
  

<?php echo $paragraph1 . $link1; ?>
<?php echo $paragraph2 . $link2; ?>
</p>
<?php echo $paragraph3 ?>
<p>Here's a link to my armory character in <a href="https://worldofwarcraft.com/en-us/character/us/bleeding-hollow/arepitas" target="_blank">retail Wow!</a> </p>
<img src="./Wow.gif"/>

  </body>
</html>