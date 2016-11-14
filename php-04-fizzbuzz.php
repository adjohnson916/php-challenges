<?php

/*
	Print the numbers from 1 to 100. But for multiples of three print “Fizz”
	instead of the number and for the multiples of five print “Buzz”. For
	numbers which are multiples of both three and five print “FizzBuzz”."
*/

foreach (range(1,100) as $i) {
	$t = $i % 3 == 0;
	$f = $i % 5 == 0;
	if ($t & $f) echo 'FizzBuzz';
	else if ($t) echo 'Fizz';
	else if ($f) echo 'Buzz';
	else echo $i;
	echo "\n";
}
