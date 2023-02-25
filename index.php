<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP strimwidth</title>
</head>
<body>

<?php

function curtailment_of_the_text($t, $s, $q) {
    // t- текст; 
    // $s - смещение от начала строки; 
    // $q - размер вырезаемой части в символах.
    // mb_strimwidth — получение строки, обрезанной до заданного размера.
    $str = mb_strimwidth($t, $s, $q);
    print($str);
}

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
           Similique, quam eveniet tenetur atque maxime perferendis.
           Suscipit numquam delectus porro.";

$start = 0;
$quant = 33;

curtailment_of_the_text($string, $start, $quant); 

?>

</body>
</html>



