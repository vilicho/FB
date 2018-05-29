<?php
$file = fopen("/Users/Ilichov_Vladislav/Desktop/t.txt", "r+");
$data = fgets($file);
$values = explode(' ', $data);
list($value1, $value2, $value3) = $values;
 for ($i = 1; $i <= $value3; $i++){
    $output = '';
    if ($i % $value1 == 0){
        $output .= 'F';
    }
    if ($i % $value2 == 0){
        $output .= 'B';
    }
    if (!$output){
        $output = $i;
    }
    echo $output." ";
}
$test = fwrite($file, $output." "); // Запись в файл
if ($test) echo 'Данные в файл успешно занесены.';
else echo 'Ошибка при записи в файл.';
fclose($file); 
