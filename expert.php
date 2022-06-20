<?php

declare(strict_types=1);
new_exercise(1);

function new_exercise($x)
{
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
new_exercise(2);

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

new_exercise(3);
$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

new_exercise(4);
foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day) - 3);
}
print_r($week);

new_exercise(5);

$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}
print_r($arr);
new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
$arr = [];


function combineNames($str1 = "", $str2 = "")
{
    $params = [$str1, $str2];
    foreach ($params as &$param) {
        if ($param === "") {
            if ($params[0] === "") {
                $order = 0;
            } else {
                $order = 1;
            }
            $param = randomHeroName($order);
        }
    }
    return implode(" - ", $params);
}
function randomHeroName($firstOrLast)
//If First of last = 0 will take from first names
//If First or last = 1 will take from last names
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[$firstOrLast][rand(0, 10)];
    return $randname;
}
echo "Here is the name: " . combineNames();

new_exercise(7);
function copyright(int $year)
{
    return "&copy; $year BeCode";
}
//print the copyright
echo copyright((int)date("Y"));

new_exercise(8);
function login(string $email, string $password)
{
    echo "<br>";
    if ($email === 'john@example.be' && $password === 'pocahontas') {
        return 'Welcome John Smith';
    } else {
        return 'No access';
    }
}
//do not change anything below
//should great the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//no access
echo login('john@example.be', 'dfgidfgdfg');
//no access
echo login('wrong@example.be', 'wrong');
//you can change things again!

new_exercise(9);
function isLinkValid(string $link)
{
    $unacceptables = array('https:', '.doc', '.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}
//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');


new_exercise(10);

//Filter the array $areTheseFruits to only contain valid fruits
//do not change the arrays itself
$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];
//from here on you can change the code
$checkListLength = count($areTheseFruits);
for ($i = 0; $i < $checkListLength; $i++) {
    if (!in_array($areTheseFruits[$i], $validFruits, true)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits);//do not change this