<?php 


$i = 10;


//Цикл с предусловием
while (++$i <10 ) {
	echo $i. "<br>";
}

//Цикл с постусловием
do {
	echo $i. "<br>";
} while (++$i <10);


//Цикл по счетчиком

for ($i=0; $i < 10; $i++) { 
	if ($i == 5) {
		continue;
	}
	echo $i;
	# code...
}