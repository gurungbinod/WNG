<?php

$firstname = $_REQUEST['firstname']; 

$lastname = $_REQUEST['lastname'];

$phone = $_REQUEST['phone'];

$email = $_REQUEST['email'];

$howhear = $_REQUEST['howhear'];

$other = $_REQUEST['other'];

$available = $_REQUEST['available'];

$goals = $_REQUEST['goals']; 


$to = "info@washingtonnutritiongroup.com";

$subject = "Washington Nutrition Group Contact Form";

$mess = "First Name: $firstname\n\rLast Name: $lastname\n\rPhone: $phone\n\rEmail: $email\n\rHow Did You Hear: $howhear\n\rIf Other: $other\n\rWhen Available: $available\n\rGoals: $goals\n\r";

mail ($to, $subject, $mess); 

header( "Location:thankyou.html" );

?>
