<?php
// #1
$name = "Даниил";
$age = "24";

echo "Меня зовут: $name";
echo "<br>";
echo "Мне $age года";
echo "<br>";
echo '”!|/’”\\'; // результат соответствует условию поставленной задачи, хз как по другому

// #2

const ALL = 80;
const FELT  = 23;
const PENCIL = 40;

$paints = ALL - FELT - PENCIL;
echo "Красками нарисованно $paints рисунков";

// #3

$age = 24;

if($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
}
elseif ($age > 65) {
    echo "Вам пора на пенсию";
}
elseif ($age >= 1 && $age <= 17) {
    echo "Вам ещё рано работать";
}
elseif ($age < 1) {
    echo "Неизвестный возраст";
}

// #4

$day = 1;
switch (true) {
    case $day <= 5:
        echo "Это рабочий день\n";

        break;
    case $day <= 7:
        echo "Это выходной день\n";

        break;
    default:
        echo "Неизвестный день\n";

        break;
}

// #5

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015
];
$toyota = [
    'model' => 'Selica',
    'speed' => 190,
    'doors' => 3,
    'year' => 1997
];
$opel = [
    'model' => 'Astra',
    'speed' => 80,
    'doors' => 5,
    'year' => 1989
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];
foreach ($cars as $name => $car) {
        echo "CAR $name<br>";
        echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br><br>";
    }


// #6

echo '<table border="1">';
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    for ($j = 1; $j <= 10; $j++) {
        $result = $i * $j;
        echo '<td>';
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "($result)";
        } elseif ($i % 2 !== 0 && $j % 2 !== 0) {
            echo "[$result]";
        } else {
            echo "$result";
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';