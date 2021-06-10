<?php
$age = rand(0, 100);
$gender = array(
   'un homme',
   'une femme', 
);

$key = array_rand($gender);

echo  'vous êtes ' .$gender[$key]. ' et vous avez ' .$age. ' ans';



?>