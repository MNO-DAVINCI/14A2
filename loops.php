<?php

//while loop controleerd eerst conditie, mits true gaat codeblock in.
while ($i <= 10) {
	# code...
}

//do while loop voert eerst sowieso codeblock uit, controleerd na codeblock door conditie of hij nogmaals codeblock moet uitvoeren. 
do {
	# code...
} while ($i <= 10);


for ($i=0; $i < 100 ; $i++) { 
	# code...
}

$array = array(1,2,3,4,5,6,7,8,9,10);

foreach ($array as $key => $value) {
	echo $key . "=>" . $value . "<br>";
}