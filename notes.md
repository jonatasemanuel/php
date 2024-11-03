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

## Functions

```php
<?php

function receiverClient($clientName)
{
	echo "Olá " . $clientName;
}
function receiverClientTwo($name = 'Luffy')
{
	echo "Hello " . $name;
}
receiverClient('Joyboy');
receiverClientTwo();

// Typing
function greetings(string $name,  bool $welcome = false)
{
	if ($welcome) {
		echo "Hello " . $name;
	} else {
		echo "Get the fuck out of here" . $name;
	}
}
greetings('Joyboy', true);

// Anonymous func

$evenNumbers = array_filter([1, 2, 3, 4], function ($number) {
	return $number % 2 == 0;
});

$sampleFunc = function ($name) {
	printf("best community of developers is the: %s\r\n", $name);
};
$sampleFunc('He4rtDevs');

/* CALLBACKS */

function askToWach($son, $callback)
{
	$res = wachDishe();
	if ($res === true) {
		echo $callback('lilipop', null);
	} else {
		echo $callback(null, 'one week whithout games');
	}
}

function wachDishe()
{
	return true;
}

$son = 'Little John';
askToWach($son, function ($candy, $nocash) use ($son) {
	if ($candy !== null) {
		return "Yeees, $son won a $candy.";
	} else if (!$nocash !== null) {
		return "ooo no $nocash to u $son";
	}
});


function twoNumSum(int $x, int $y)
{
	return $x + $y;
}
$res = twoNumSum(5, 13);
echo 'Res: ' . $res . PHP_EOL;

/* FAKE LOGIN */
function authenticateUser(string $username, string $password)
{
	$database = [
		'username' => 'Joyboy',
		'password' => '25112223gdx$@$232@1seqw!'
	];
	if ($database['username'] != $username) {
		return 'This user doesnt exists';
	}
	if ($database['password'] != $password) {
		return 'Wrong password';
	}
	return 'Login successful';
}
echo authenticateUser('Joyboy', '25112223gdx$@$232@1seqw!') . PHP_EOL;

/* STRING FUNCTIONS */

// count chars (strlen())
$name = 'Joyboy';
echo 'the name has ' . strlen($name) . 'chars' . PHP_EOL;

// repeat a string (str_repeat())
$str = 'he4rtDevs';
$qtd = 3;
$repeat = str_repeat($str, $qtd);
echo 'best community is ' . $repeat . PHP_EOL;

// string replace (str_replace())
$str = 'JS is the best language';
echo str_replace('JS', 'PHP', $str) . PHP_EOL;

$str = 'words must be censured: Java, BBB, Boninho, BBBot';
echo str_replace(['Java', 'BBB', 'BBBot'], '****', $str);

$str = 'words must be censured: Java, BBB, Boninho, BBBot';
$curseWords = ['Java', 'BBB', 'BBBot'];

foreach ($curseWords as $word) {
	$str = str_replace($word, str_repeat('*', strlen($word) + 1), $str);
}
echo $str;

$rest = substr('abcdef', -2); // returning 'ef'
echo $rest . PHP_EOL;
$rest = substr('abcdef', 2, -1); // returning 'cde'
echo $rest . PHP_EOL;

// index finder
$fullStr = 'developers';
$lookingFor = 'e';
$index = strpos($fullStr, $lookingFor); // return 1, and can return false
// $index = strpos($fullStr, $lookingFor, <init after>); // return 1, and can return false
echo $index . PHP_EOL;

/* TRIM(remove white spaces) : ltrim() rtrim() */
$str = '  one piece      '; // -> 'one piece'
echo trim($str) . PHP_EOL;

/* STRING UPPER and LOWER: strtolower() */
$str = 'Developers';
echo strtoupper($str) . PHP_EOL;

/* CONTAINS */
$vitamin = 'vitamin of apple with banana and milk';
$fruit = 'banana';
$have = str_contains($vitamin, $fruit);
var_dump($have);

$fruit = 'vitamin';
$have = str_starts_with($vitamin, $fruit); // str_ends_with();
var_dump($have);

/* RAGEX RAPLACE */
$str = 'My code not works good " - "';
echo preg_replace('/not/', '--', $str) . PHP_EOL;

// Remove HTML Tags
$string = '<html><div><span>Hello World</span></div></html>';
echo preg_replace('/<[^<>]+>/', '', $string) . PHP_EOL; // Hello World

$string = 'Meu pé está quente';

preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string);
echo $string; // Meu pe esta quente

// Upper first letter
$string  = 'joyboy';
ucfirst($string); // retorna Joyboy
```

## ARRAY FUNC HANDLER
```php
<?php

$array = array('lastname', 'email', 'phone');
$comma_sep = implode(',', $array); // lastname, email, phone
echo $comma_sep . PHP_EOL;

$communities = []; // []
array_push($communities, 'He4rtDevs');
print_r($communities);
array_push($communities, 'TalkCode');
print_r($communities); // [0]He4rtDeves [1]TalkCode

// array by arrays
$communities = [
	'communities' => [
		'He4rtDevs',
		'TalkCode',
		'php.net',
		'TwitchTV'
	]
];
array_push($communities, ['Links' => ['https://heartdevs.com']]);
array_push($communities, ['Links' => ['https://codigofalado.co.br']]);
print_r($communities); // [0]He4rtDeves [1]TalkCode

// array search
$communities = ['He4rtDevs', 'TalkCode', 'php.net', 'TwitchTV'];
$res = array_search('php.net', $communities);
echo $res . PHP_EOL; // 2
$res = array_search('TalkCode', $communities);
echo $res . PHP_EOL; // 1
$res = array_search('javascript', $communities);
var_dump($res);

// array diff
$colorPallet1 = ['yellow', 'pink', 'purple', 'red'];
$colorPallet2 = ['yellow', 'pink', 'brown', 'blue'];

$result = array_diff($colorPallet1, $colorPallet2);
print_r($result);
/* [
	'purple',
	'red'
] */

$numbers = [1, 5, 3, 4, 7, 1];
$result = array_sum($numbers); // 21

// ARRAY REPLACE

$names = ['joyboy', 'shanks', 'loki', 'robin'];
$nick1 = [2 => 'bicmom'];
$nick2 = [2 => 'jinbei', 3 => 'brook'];
$result = array_replace($names, $nick1, $nick2);
print_r($result);

// ARRAY MAP

$langs = array_map('strtoupper', ['php', 'elixir', 'clojure']);
print_r($langs);

$langs = array_map(function ($lang) {
	return md5(ucfirst($lang));
}, ['php', 'elixer', 'clojure']);
print_r($langs);
/*
    [0] => 2ec543bde83a1a3ed7eb0676e664a8bc
    [1] => a05f934cf1fdd0369c24d2fa074907a1
    [2] => 3ce4a9c4043142965234ee0c40cef1d0
*/

// mixing arrays
$langs = array_map(function ($lang1, $lang2) {
	return sprintf('%s - %s', ucfirst($lang1), ucfirst($lang2));
}, ['php', 'elixir', 'clojure'], ['haskell', 'c#', 'java']);
print_r($langs);
/*
	[0] => Php - Haskell
	[1] => Elixir - C#
	[2] => Clojure - Java 
*/

// array filter
$drink = array_filter(['tequila', 'vodka', 'whisky'], function ($drink) {
	return $drink != 'tequila';
});
print_r($drink);
/*
	[1] => vodka
	[2] => whisky
*/

$numbers = array_filter(['test', 2342, '234', 0, 'lisp'], 'is_numeric');
print_r($numbers);
/*
	[1] => 2342
	[2] => 234
	[3] => 0
*/

// reduce
$total = array_reduce([10, 20, 10], function ($sums, $value) {
	$sums += $value;
	return $sums;
});
print_r($total);

// explode
$string = "i would like to sepair this string by spaces";
$arraySep = explode(' ', $string);
print_r($arraySep);
/* 
	[0] => i
	[1] => would
	[2] => like
	[3] => to
	[4] => sepair
	[5] => this
	[6] => string
	[7] => with
	[8] => spaces
*/
```

## Files handler functions

```php

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
```
