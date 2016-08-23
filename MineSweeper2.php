<?php

$arr = array_fill(0, 50, array_fill(0, 60, 0));

$count = array_rand(range(0, 2999), 1200);

for($i = 0; $i < 1200; $i++){
    $x = (int)($count[$i] / 60);
    $y = $count[$i] % 60;

    if ($arr[$x][$y] == "0") {
        $arr[$x][$y] = "M";
    }
}

for ($i = 0; $i < 50; $i++) {
    for ($j = 0; $j < 60; $j++) {

        if ($arr[$i][$j] === "M") {

            if ($arr[$i-1][$j-1] !== "M" && $i-1 >= 0 && $j-1 >= 0) {
                $arr[$i-1][$j-1] += 1;
            }

            if ($arr[$i-1][$j] !== "M" && $i-1 >= 0) {
                $arr[$i-1][$j] += 1;
            }

            if ($arr[$i-1][$j+1] !== "M" && $i-1 >= 0 && $j+1 <= 59) {
                $arr[$i-1][$j+1] += 1;
            }

            if ($arr[$i][$j-1] !== "M" && $j-1 >= 0) {
                $arr[$i][$j-1] += 1;
            }

            if ($arr[$i][$j+1] !== "M" && $j+1 <= 59) {
                $arr[$i][$j+1] += 1;
            }

            if ($arr[$i+1][$j-1] !== "M" && $i+1 <= 49 && $j-1 >= 0) {
                $arr[$i+1][$j-1] += 1;
            }

            if ($arr[$i+1][$j] !== "M" && $i+1 <= 49) {
                $arr[$i+1][$j] += 1;
            }

            if ($arr[$i+1][$j+1] !== "M" && $i+1 <= 49 && $j+1 <= 59) {
                $arr[$i+1][$j+1] += 1;
            }
        }
    }
}

$numN = 0;

foreach ($arr as $values) {
    foreach ($values as $key) {
        echo $key ;
    }

    if($numN < 49) {
        echo "N";
        $numN++;
    }
}
