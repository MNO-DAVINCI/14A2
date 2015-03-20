<?php

function optellen($getal1, $getal2)
{
	$uitkomst = $getal1 + $getal2;
	echo $uitkomst . "<br>";
}

for ($i=0; $i <= 50 ; $i++) { 
	
	$getal1 = rand(1, 1000);
	$getal2 = rand(1, 1000);

	optellen($getal1, $getal2);
}