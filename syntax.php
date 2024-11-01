<?php

function receiverClient ($clientName)
{
	echo "Olá " . $clientName;
}
function receiverClientTwo ($name = 'Luffy')
{
	echo "Hello " . $name;
}
receiverClient('Joyboy');
receiverClientTwo();

// Typing
function greetings (string $name,  bool $welcome = false)
{
	if ($welcome) {
		echo "Hello " . $name;
	} else {
		echo "Get the fuck out of here" . $name;
	}
}
greetings('Joyboy', true);

// Anonymous func

$evenNumbers = array_filter([1,2,3,4], function($number)
	{
		return $number % 2 == 0;
	});

$sampleFunc = function($name)
{
	printf("best community of developers is the: %s\r\n", $name);
};
$sampleFunc('He4rtDevs');
