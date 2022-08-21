<?php
// #1
      $name = "Даниил";
      $age = "24";

echo "Меня зовут: $name<br>";
echo "Мне $age года<br>";
echo "\"!|/'\"\\<br>";

// #2 (Через константы не получилось, разбираться почему - не было времени)

$all = 80;
$feltTip  = 23;
$pencil = 40;

echo "Дана задача: На школьной выставке $all рисунков. $feltTip из них выполнены фломастерами, $pencil карандашами, а остальные — красками.\n Сколько рисунков, выполненные красками, на школьной выставке?\n";

$sum = $feltTip + $pencil;
$paints = $all - $sum;

echo "Ответ: $paints";

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

$day = 7;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    echo "Это рабочий день";
    break;
    case 6:
    case 7:
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}

// #5 (что я явно сделал не так)

$bmw = ["model" => "X5", "speed" => 120, "doors" => 5, "year" => 2015];
$toyota = ["model" => "Selica", "speed" => 140, "doors" => 3, "year" => 1997];
$opel = ["model" => "Astra", "speed" => 80, "doors" => 5, "year" => 1993];

$cars = [
    "BMW" => $bmw,
    "Toyota" => $toyota,
    "Opel" => $opel
];
foreach ($cars as $car) {
    foreach ($car as $key => $value) {
        echo "$key:$value<br>";
    }
}

// #6 (тут пришлось гуглить)

echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 10; $row++) {
    echo "<tr> \n";
    for ($col=1; $col <= 10; $col++) {
        $p = $col * $row;
        if ($p%2 == 0) {
            echo "<td>($p)</td> \n";
        }elseif ($p%2 == 1) {
            echo "<td>[$p]</td> \n";
        }else {
            echo "<td>$p</td> \n";
        }
    }
    echo "</tr>";
}
echo "</table>";