<?php

$arr = array ([0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0]);

$count = 0;

while ($count < 40) {
    $x = rand(0,9);
    $y = rand(0,9);

    if ($arr[$x][$y] == "0") {
        $arr[$x][$y] = "M";
        $count++;
    }
}

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {

        if ($arr[$i][$j] === "M") {

            if ($arr[$i-1][$j-1] !== "M" && $i-1 >= 0 && $j-1 >=0 ){
                $arr[$i-1][$j-1] += 1;
                // echo $arr[$i-1][$j-1];
            }

            if ($arr[$i-1][$j] !== "M" && $i-1 >= 0){
                $arr[$i-1][$j] += 1;
                // echo $arr[$i-1][$j];
            }

            if ($arr[$i-1][$j+1] !== "M" && $i-1 >= 0 && $j+1 <= 9){
                $arr[$i-1][$j+1] += 1;
                // echo $arr[$i-1][$j+1];
            }

            if ($arr[$i][$j-1] !== "M" && $j-1 >=0){
                $arr[$i][$j-1] += 1;
                // echo $arr[$i][$j-1];
            }

            if ($arr[$i][$j+1] !== "M" && $j+1 <= 9){
                $arr[$i][$j+1] += 1;
                // echo $arr[$i][$j+1];
            }

            if ($arr[$i+1][$j-1] !== "M" && $j-1 >=0 && $i+1 <= 9){
                $arr[$i+1][$j-1] += 1;
                // echo $arr[$i+1][$j-1];
            }

            if ($arr[$i+1][$j] !== "M" && $i+1 <= 9){
                $arr[$i+1][$j] += 1;
                // echo $arr[$i+1][$j];
            }

            if ($arr[$i+1][$j+1] !== "M" && $i+1 <= 9 && $j+1 <= 9){
                $arr[$i+1][$j+1] += 1;
                // echo $arr[$i+1][$j+1];
            }

        }
        // echo "($i , $j) " . $arr[$i][$j] . "<br>";
        // if ($arr[$i][$j] === "M"){
        //     echo "here is array if <br>";
        // }
    }
}


// for ($x = 0; $x < 3; $x++) {
//     for ($y = 0; $y < 3; $y++) {
//         if ($arr[$x][$y] == "M") {
//             if($arr[$x+1][$y] != "M"){
//             echo (int)($arr[$x+1][$y]) +1;}
//         }
//     }
// }
// echo "<br>";
echo "<table>";
foreach ($arr as $values) {
    echo "<tr>";
    foreach ($values as $key) {
        echo "<td>" . $key . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
print_r($arr);
var_dump($arr);
