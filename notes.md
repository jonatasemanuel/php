# PHP

## Syntax

```php
<?php
    // echo "testando o elefante";
    echo "testando o elefante";
    /* echo "testando o elefante";
    echo "testando o elefante";
    echo "testando o elefante"; */
?>

<!-- another way to show something -->
<?= "who needs echo"?> 
```

## Output

```php
<?php
    // Output
    echo "Hello" . "-" . 123 . PHP_EOL;

    var_dump("joyboy");
    var_dump(true);
    var_dump(12.4);
    var_dump(12);
    var_dump([1,4,6,7]);

    /* Hello-123
    string(6) "joyboy"
    bool(true)
    float(12.4)
    int(12)
    array(4) {
      [0]=>
      int(1)
      [1]=>
      int(4)
      [2]=>
      int(6)
      [3]=>
      int(7)
    } */

```

## Data types

```php
<?php
    var_dump("joyboy");     // string
    var_dump(true);         // bool
    var_dump(12.4);         // double
    var_dump(12);           // int
    var_dump([1,4,6,7]);    // arrays

    $data = ['joyboy',13,'sao paulo']; // arrays
    var_dump($data[2]);      // --> string(9) "sao paulo"

    $data2 = ['name' => 'joyboy',13,'sao paulo'];
    var_dump($data2['name']); // --> string(6) "joyboy"
```

## Variables

```php
<?php

$name = "joyboy";
echo $name . PHP_EOL;

$age = 25;
echo $age . PHP_EOL;

$data = [
    'name' => 'joyboy',
    'age' => 25,
    'city' => 'ourinhos',
    'status' => true
];

// Const
define('joyboy', 'blog.jojosilva.live');

echo joyboy;

/* Output:
joyboy
25
blog.jojosilva.live
*/
```

## Arithmetic Operators

```php
<?php


$itemA = 10;
$itemB = 34;
$itemC = ($itemA + $itemB + 10) * 2;
echo $itemC . PHP_EOL;

$itemA = 34;
$itemB = 4;
$itemC = $itemA - $itemB;
echo $itemC . PHP_EOL;

$itemC = $itemA / $itemB;
echo $itemC . PHP_EOL;

$itemC = $itemA * $itemB;
echo $itemC . PHP_EOL;

// Module %
$itemC = $itemA % $itemB;
echo $itemC . PHP_EOL;

// ATTR OPERATORS
$itemA = 15;
echo $itemA . PHP_EOL;

$itemA += 5;
echo $itemA . PHP_EOL;

$itemA -= 5;
echo $itemA . PHP_EOL;

$itemA *= 5;
echo $itemA . PHP_EOL;

$itemA /= 2;
echo $itemA . PHP_EOL;

$itemA %= 2;
echo $itemA . PHP_EOL;

```

## Operadores de comparação

```php
<?php
// equals
var_dump(1 == 1);
var_dump(1 == 2);
$passwd = 'secret';
var_dump($passwd == 'key123');

// diff
var_dump(1 != 1);
$passwd = 'secret';
var_dump($passwd != 'key123');


var_dump('1' === 1); // false
var_dump('1' !== 1); // false

$number = 6;
var_dump($number >= 6);
var_dump($number < 6);
```

## Array operators

```php
<?php

// Array operators
$user = [
    'name' => 'joyboy',
    'age' => 22
];

$workplace = [
    'companyName' => 'Fatec',
    'role' => 'Cybersecurity Student'
];

// UNION
$all = $user + $workplace;

print_r($all);

// Equals
$userTwo = [
    'name' => 'joyboy',
    'age' => '22'
];

var_dump($user == $userTwo); // true

$userTwo = [
    'name' => 'joyboy',
    'age' => '22'
];

var_dump($user === $userTwo); // false
```

## Logical Operators

```php
<?php
/* Logical operators */

// and - && (END)
$employed = true;
$homeOffice = false;

var_dump($employed && $homeOffice);	// false

// or
var_dump($employed || $homeOffice);	// true

// xor ^ (exclusive)
$employed = true;
$homeOffice = true;
var_dump($employed ^ $homeOffice);	// false (just one true)

// NOT
var_dump(!$employed);
```

## Execution Operator (to run a unix(system) command)

```php
<?php
$output = `ls -la`;
echo $output;
```

## Control struct

```php
if (condition) {
    // true condition
    // do something
} elsa {
    // false condition
}
<?php

$age = 17;

if ($age >= 18) {
	echo "u are old" . PHP_EOL;
} else {
	echo "u are minor" . PHP_EOL;
}

$group = "ZezinDevs";

if ($group == "He4rtDevs") {
	echo "yeah, the best dev community from Brasil" . PHP_EOL;
} else {
	echo "bro wtf" . PHP_EOL;
}

$logged = true;

if ($logged) {
	echo "still logged" . PHP_EOL;
} else {
	echo "please use a valid account" . PHP_EOL;
}

$userJoy = "joyboy";
$passJoy = "secret";

$userBoy = "boyjoy";
$passJoy = "secret";

if ($userJoy == "joyboy" && $passJoy == "secret") {
	echo "Hello JoyBoy, welcome";
// elseif
} else if ($userBoy == "boyboy" && $passBoy == "2412412") {
	echo "Hello boyjoy, welcome";
} else {
	echo "bad authentication";
}

// SWITCH CASE

$command = "!he4rt";

switch($command){
    case "!site":
    echo "Link: https://heartdevs.com";
    echo    "Official page";
    break;
    case "!he4rt":
    echo "Join to our discord: https://discord.com/he4rt";
    echo "This is official discord";
    break;
    case "!commands":
    echo "Command list";
    echo "!he4rt !site";
    break;
default:
    echo "blob blob";
    break;
}

// MATCH

$command = "!site";
echo match($command) {
    "!site" => "Link: aboba.com",
    "!he4rt", "!discord" => "Join to us: discord.gg",
    default => "buzz fizz"
};

$age = 21;
$result = match (true) {
    $age >= 65 => 'Garp',
    $age >= 25 => 'Ace',
    $age >= 18 => 'Luffy',
    default => 'Kidsgraca',
};
echo $result;

// Ternario Operator

$nickname = "joyboy";
$who = $nickname == "james" ? "u are james online" : "not jomes online";
echo $who;

$testMode = true;
return $testMode ? "DEV MODE ENABLE" : "DEV MODE DISABLE";

// NULL

$descriptionPerCode = array(
    1 => 'Username already taken',
    2 => 'Incorret password',
    3 => 'Block user',
);

return isset($descriptionPerCode[5]) ? $descriptionPerCode[5] : 'Looks bad';

return $descriptionPerCode[5] ?? 'Looks bad';

```

##  Foor
```php
<?php

// FOR LOOP

$counter = 10;
echo "Script to count" . $counter . PHP_EOL;
for ($i=1; $i <= $counter; $i++) { 
	echo $i . "...";
}
echo PHP_EOL .	"Script done!";

$mult = 5;
echo "Script to count" . $counter . PHP_EOL;
for ($i=1; $i <= 10; $i++) { 
	echo $mult . "x" . $i . "=" . ($mult * $i) . PHP_EOL; 
}
echo PHP_EOL .	"Script done!";

// WHILE

$keep = true;
$i = 1;
echo "Script to count 10" . PHP_EOL;
while ($keep) {
	echo $i . "...";
	if ($i == 10){
		$keep = false;
	}
	$i++;
}
echo PHP_EOL . "script done";

// FOREACH

$names = ["Jibei", "Brook", "Usopp", "Franky"];
// no index iteration
foreach($names as $name){
	echo $name . " ";
}

foreach($names as $key => $name){
	echo $key . "." . $name . " " . PHP_EOL;
}

$person = new StdClass;
$person->name = "joyboy";
$person->age = 25;
$person->work = "Fullstack Developer";
/* $person = [
	"name" => "joyboy",
	"age" => 25,
	"work" => "Fullstack Dev"
]; */
foreach($person as $key => $value) {
	echo "$key: $value" . PHP_EOL;
}

// CONTINUE
for ($number = 0; $number < 5; $number++) {
	if($number % 2 === 1){
		continue;
	}

	echo $number . "é par.";
}

//  infinite loops
while(true) {
    echo "Hello and welcome, which message u can send?" . PHP_EOL;
    echo "1. goodmorning" . PHP_EOL;
    echo "2. goodafternon" . PHP_EOL;
    echo "3. goodevening" . PHP_EOL;
    echo "0. exit" . PHP_EOL;

    $resp = readline ('choose a option: ');

    if ($resp == "1") {
	echo "1. goodmorning" . PHP_EOL;
    } elseif ($resp == "2") {
	echo "2. goodafternoon" . PHP_EOL;
    } elseif ($resp == "3") {
	echo "3. goodevening" . PHP_EOL;
    } else {
	echo "Bye!" . PHP_EOL;
	break;
    }
}
```

## Namespace

```php
<?php
namespace Controllers; // whole code after is a part of Controllers
// namespace Controllers\Admin;

class IndexController
{
    // ...
}

use Sysmfonyz\Componetn\Console\Input\{InputInterface, InputOption};
use Zend\Twitter as Twit;
```
