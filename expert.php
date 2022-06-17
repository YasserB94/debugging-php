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
            $param = randomHeroName();
        }
    }
    return implode(" - ", $params);
}


// function randomGenerate($arr, $amount) {
//     for ($i = $amount; $i > 0; $i--) {
//         array_push($arr, randomHeroName());
//     }

//     return $amount;
// }

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0, count($heroes))][rand(0, 10)];
    // $heroes[rand(0,count($heroes))][rand(0, 10)];

    return $randname;
}

echo "Here is the name: " . combineNames();
