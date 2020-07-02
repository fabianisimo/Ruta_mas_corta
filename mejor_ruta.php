<?php

require '../PHPExcel-1.8/Classes/PHPExcel.php';
require 'functions.php';

var_dump($_POST);
$hoja = extraer_hoja($_POST['archivo']);

// columna A = 0

for ($i=0; $i <= 20; $i++){
    if ($hoja->getCellByColumnAndRow($i, 1)->getvalue() == "End X"){
        $col_end_x = $i;
    }
    if ($hoja->getCellByColumnAndRow($i, 1)->getvalue() == "End Y"){
        $col_end_y = $i;
    }
    if ($hoja->getCellByColumnAndRow($i, 1)->getvalue() == "Start X"){
        $col_start_x = $i;
    }
    if ($hoja->getCellByColumnAndRow($i, 1)->getvalue() == "Start Y"){
        $col_start_y = $i;
    }
}

echo $hoja->gethighestrow();

$puntos = [];
for ($i=1; $i <= $hoja->gethighestrow(); $i++){
    $x = $hoja->getCellByColumnAndRow($col_end_x, $i);
    $y = $hoja->getCellByColumnAndRow($col_end_y, $i);
    $punto = [$x, $y];
    array_push($puntos, $punto);
}

foreach($puntos as $a){
    echo $a;
}
?>