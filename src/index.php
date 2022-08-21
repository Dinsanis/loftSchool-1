<?php
require_once('C:\OpenServer\domains\Loft\src\function.php');
ob_start();

echo "<div class='jumbotron'>";
echo "<h1>", "Задание 1", "</h1>";
$data = [
    "Какой",
    "же",
    "я",
    "тупой"
];
echo "<p>", task1($data, true), "</p>";
echo "</div>";

echo "<div class='jumbotron'>";
echo "<h1>", "Задание 2", "</h1>";
$data = [];
echo "<p>", task2("+", 1, 2, 3, 5.2), "</p>";
echo "</div>";

echo "<div class='jumbotron'>";
echo "<h1>", "Задание 3", "</h1>";
echo task3(8, 8);
echo "</div>";

echo "<div class='jumbotron'>";
echo "<h1>", "Задание 4", "</h1>";
echo "<p>", task4(), "</p>";
echo "</div>";

echo "<div class='jumbotron'>";
echo "<h1>", "Задание 5", "</h1>";
$text1 = "Карл у Клары украл Кораллы";
$text2 = "Две бутылки лимонада";
echo task5($text1, $text2);
echo "</div>";

echo "<div class='jumbotron'>";
echo "<h1>", "Задание 6", "</h1>";
echo "<p>", task6("test.txt", "Hello again!"), "</p>";
echo "</div>";