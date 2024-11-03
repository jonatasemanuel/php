<?php

/* fopen */

// text.txt - empty
$directory = "test.txt";
$string = "He4rtDevs best community!" . PHP_EOL;

// $buffer = fopen($directory, "a+");
$buffer = fopen($directory, "r");

// fwrite($buffer, $string);
// fwrite($buffer, "it's really");

//echo feof($buffer); // checking if file its open on last line 

// fread - check line bytes 
while (!feof($buffer)) {
	echo fread($buffer, 8192) . "leave the prime";
}

echo `cat test.txt` . PHP_EOL;
fclose($buffer);
