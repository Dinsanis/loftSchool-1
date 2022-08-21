<?php

function task1($arr, $bool = false)
{
    foreach ($arr as $item) {
        echo "<p>", $item, "</p>";
    }
    if ($bool) {
        return implode(" ", $arr);
    }
}



function some_operation($num_arr, $sign){
    if(is_array($num_arr)){
        switch ($sign) {
            case '+':
                echo $num_arr[0];
                $sum = $num_arr[0];

                for ($value = 1; $value < count($num_arr); $value++){
                    echo " + " . $num_arr[$value];
                    $sum += $num_arr[$value];
                }

                echo " = " . $sum;
                break;


            case '-':
                echo $num_arr[0];
                $sum = $num_arr[0];

                for ($value = 1; $value < count($num_arr); $value++){
                    echo " - " . $num_arr[$value];
                    $sum -= $num_arr[$value];
                }

                echo " = " . $sum;
                break;


            case '*':
                echo $num_arr[0];
                $sum = $num_arr[0];

                for ($value = 1; $value < count($num_arr); $value++){
                    echo " * " . $num_arr[$value];
                    $sum *= $num_arr[$value];
                }

                echo " = " . $sum;
                break;


            case '/':
                echo $num_arr[0];
                $sum = $num_arr[0];

                for ($value = 1; $value < count($num_arr); $value++){
                    echo " / " . $num_arr[$value];
                    $sum /= $num_arr[$value];
                }

                echo " = " . $sum;
                break;

            default:
                echo "Incorrect sign. Please, try again";
                break;
        }
    }
}



function task2($sign){
    $numbers = array();

    for ($i = 1; $i < func_num_args(); $i++){
        $numbers[] = func_get_arg($i);
    }

    if (is_array($numbers)){
        some_operation($numbers, $sign);
    }
}



function task3($sizeRows, $sizeColumns)
{
    if (!is_int($sizeRows)) {
        echo "Колличество строк в таблице заданно не верно.";
        return null;
    }
    if (!is_int($sizeColumns)) {
        echo "Колличество столбцов в таблице заданно не верно.";
        return null;
    }
    if ($sizeRows == 0 && $sizeColumns == 0) {
        return null;
    }
    if ($sizeRows != $sizeColumns) {
        echo "Колличество строк и столбцов в таблице должно быть одинаковое.";
        return null;
    }
    echo "<table>";
    for ($row = 1; $row <= $sizeRows; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= $sizeColumns; $col++) {
            $num = $row * $col;
            echo "<td>", $num, "<td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    task4($sizeRows - 1, $sizeColumns - 1);
}



function task4()
{
    $date = date("d.m.Y H:i");
    return $date;
}



function task5($text1, $text2) {
$newText1 = str_replace("К", "", $text1);
    echo $newText1 . "<br>";
    $newText2 = str_replace("Две", "Три", $text2);
    echo $newText2;
}



function task6($file, $str){
    file_put_contents($file, $str);
}

