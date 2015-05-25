<?php

$name = $_REQUEST['name'];

$birthdate = $_REQUEST['birthdate'];

$address = $_REQUEST['address'];

$city = $_REQUEST['city'];

$state = $_REQUEST['state'];

$zip = $_REQUEST['zip'];

$email = $_REQUEST['email'];

$phone = $_REQUEST['phone'];

$weight = $_REQUEST['weight'];

$height = $_REQUEST['height'];

$sex = $_REQUEST['sex'];

$eContactName = $_REQUEST['eContactName'];

$eContactRelationship = $_REQUEST['eContactRelationship'];

$eContactPhone = $_REQUEST['eContactPhone'];

$lifestyle = $_REQUEST['lifestyle'];

$describe = $_REQUEST['describe'];

$goals = $_REQUEST['goals'];

$times = $_REQUEST['times'];

$trainerGender = $_REQUEST['trainerGender'];

$equipment = $_REQUEST['equipment'];

$start = $_REQUEST['start'];

$pName = $_REQUEST['pName'];

$pPhone = $_REQUEST['pPhone'];

$pConsent = $_REQUEST['pConsent'];

$heart = $_REQUEST['heart'];

$bp = $_REQUEST['bp'];

$chronic = $_REQUEST['chronic'];

$exercise = $_REQUEST['exercise'];

$lung = $_REQUEST['lung'];

$bone = $_REQUEST['bone'];

$back = $_REQUEST['back'];

$hernia = $_REQUEST['hernia'];

$history1 = $_REQUEST['history1'];

$pregnant = $_REQUEST['pregnant'];

$surgery = $_REQUEST['surgery'];

$smoke = $_REQUEST['smoke'];

$injuries = $_REQUEST['injuries'];

$drugs = $_REQUEST['drugs'];

$history2 = $_REQUEST['history2'];

$concur = $_REQUEST['concur'];

$signature = $_REQUEST['signature'];

$date = $_REQUEST['date'];



$to = "info@washingtonnutritiongroup.com";

$subject = "Washington Nutrition Group Health History Questionnaire";

$mess = "



Name: $name\n\rBirth Date: $birthdate\n\rAddress: $address\n\rCity: $city\n\rState: $state\n\rZip: $zip\n\rEmail: $email\n\rPhone: $phone\n\rWeight: $weight\n\rHeight: $height\n\rSex: $sex\n\rEmergency Contact Name: $eContactName\n\rEmergency Contact Relationship: $eContactRelationship\n\rEmergency Contact Phone: $eContactPhone\n\rLifestyle: $lifestyle\n\rDescription: $describe\n\rGoals: $goals\n\rTimes Available: $times\n\rTrainer Gender: $trainerGender\n\rEquipment: $equipment\n\rStart: $start\n\rPhysician Name: $pName\n\rPhysician Phone: $pPhone\n\rPhysician Consent: $pConsent\n\rHeart: $heart\n\rBP: $bp\n\rChronic Conditions: $chronic\n\rExercise: $exercise\n\rLung: $lung\n\rBone: $bone\n\rBack: $back\n\rHernia: $hernia\n\rHistory Part 1: $history1\n\rPregnancy: $pregnant\n\rSurgery: $surgery\n\rSmoking: $smoke\n\rInjuries: $injuries\n\rDrugs: $drugs\n\rHistory Party 2: $history2\n\rConcur: $concur\n\rSignature: $signature\n\rDate: $date\n\r";

mail ($to, $subject, $mess); 

header( "Location:thankyou.html" );

?>
