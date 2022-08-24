<?php
require_once('..\src\function.php');
ob_start();

echo "<div class='jumbotron'>";
echo "<h1>", "Задание 1", "</h1>";
task1([1,2,3], false);
echo "</div>";

echo "<div class='jumbotron'>";
echo "<h1>", "Задание 2", "</h1>";
echo task2('*', 1, 2, 3, 10);

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
echo "<p>", task5(), "</p>";
echo "</div>";

echo "<div class='jumbotron'>";
echo "<h1>", "Задание 6", "</h1>";
echo "<p>", task6("test.txt", "Hello again!"), "</p>";
echo "</div>";
