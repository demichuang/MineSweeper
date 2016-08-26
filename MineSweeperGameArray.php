<?php
$arr = array_fill(0, 10, array_fill(0, 10, 0));

$count = array_rand(range(0, 99), 40);

for($t = 0; $t < 40; $t++){
    $x = floor($count[$t] / 10);
    $y = $count[$t] % 10;

    if ($arr[$x][$y] == "0") {
        $arr[$x][$y] = "M";
    }
}

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {

        if ($arr[$i][$j] === "M") {

            if ($arr[$i-1][$j-1] !== "M" && $i-1 >= 0 && $j-1 >= 0) {
                $arr[$i-1][$j-1] += 1;
            }

            if ($arr[$i-1][$j] !== "M" && $i-1 >= 0) {
                $arr[$i-1][$j] += 1;
            }

            if ($arr[$i-1][$j+1] !== "M" && $i-1 >= 0 && $j+1 <= 9) {
                $arr[$i-1][$j+1] += 1;
            }

            if ($arr[$i][$j-1] !== "M" && $j-1 >= 0) {
                $arr[$i][$j-1] += 1;
            }

            if ($arr[$i][$j+1] !== "M" && $j+1 <= 9) {
                $arr[$i][$j+1] += 1;
            }

            if ($arr[$i+1][$j-1] !== "M" && $i+1 <= 9 && $j-1 >= 0) {
                $arr[$i+1][$j-1] += 1;
            }

            if ($arr[$i+1][$j] !== "M" && $i+1 <= 9) {
                $arr[$i+1][$j] += 1;
            }

            if ($arr[$i+1][$j+1] !== "M" && $i+1 <= 9 && $j+1 <= 9) {
                $arr[$i+1][$j+1] += 1;
            }
        }
    }
}
