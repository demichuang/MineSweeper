<?php

// $source = [];
// for ($num = 0; $num < 10; $num++) {
//     $source[$num] = array_fill(0, 10, "0");// not (int) 0
// }

// // print_r($source);
// var_dump($source);

$a = array_fill(0, 10, array_fill(0, 10, 0));
print_r($a);



$count = array_rand(range(0, 99), 40);
// print_r($count);

for($t = 0; $t < 40; $t++){
    $x = floor($count[$t] / 10);
    $y = $count[$t] % 10;
    echo "($x, $y) :" . $count[$t] . "<br>";
}

// echo $array[0][0];
// // // if ($array[0][0] != "M"){
//   echo $array[0][0] += 2;
// // }
// echo "<br>";

// foreach ($array as $values) {
//     foreach ($values as $key) {
//         echo $key . " ";
//     }
//     echo "<br>";
// }

// echo "<br>";

// $count = 0;

// while ($count < 40) {
//     $x = rand(0,9);
//     $y = rand(0,9);

//     if ($array[$x][$y] == "0") {
//         $array[$x][$y] = "M";

        // if ($array[$x-1][$y-1] != "M" && $x-1 >= 0 && $y-1 >=0 && $x-1 <= 9 && $y-1 <= 9)
        //     $array[$x-1][$y-1] += 1;
        // if ($array[$x-1][$y] != "M" && $x-1 >= 0 && $y >=0 && $x-1 <= 9 && $y <= 9)
        //     $array[$x-1][$y] += 1;
        // if ($array[$x-1][$y+1] != "M" && $x-1 >= 0 && $y+1 >=0 && $x-1 <= 9 && $y+1 <= 9)
        //     $array[$x-1][$y+1] += 1;
        // if ($array[$x][$y-1] != "M" && $x >= 0 && $y-1 >=0 && $x <= 9 && $y-1 <= 9)
        //     $array[$x][$y-1] += 1;
        // if ($array[$x][$y+1] != "M" && $x >= 0 && $y+1 >=0 && $x <= 9 && $y+1 <= 9)
        //     $array[$x][$y+1] += 1;
        // if ($array[$x+1][$y-1] != "M" && $x+1 >= 0 && $y-1 >=0 && $x+1 <= 9 && $y-1 <= 9)
        //     $array[$x+1][$y-1] += 1;
        // if ($array[$x+1][$y] != "M" && $x+1 >= 0 && $y >=0 && $x+1 <= 9 && $y <= 9)
        //     $array[$x+1][$y] += 1;
        // if ($array[$x+1][$y+1] != "M" && $x+1 >= 0 && $y+1 >=0 && $x+1 <= 9 && $y+1 <= 9)
        //     $array[$x+1][$y+1] += 1;
//         $count++;
//     }
// }


// for ($i = 0; $i < 10; $i++) {
//     for ($j = 0; $j < 10; $j++) {

//         if ($array[$i][$j] === "M") {

//             if ($array[$i-1][$j-1] !== "M" && $i-1 >= 0 && $j-1 >=0 ){
//                 $array[$i-1][$j-1] += 1;
//                 // echo $array[$i-1][$j-1];
//             }

//             if ($array[$i-1][$j] !== "M" && $i-1 >= 0){
//                 $array[$i-1][$j] += 1;
//                 // echo $array[$i-1][$j];
//             }

//             if ($array[$i-1][$j+1] !== "M" && $i-1 >= 0 && $j+1 <= 9){
//                 $array[$i-1][$j+1] += 1;
//                 // echo $array[$i-1][$j+1];
//             }

//             if ($array[$i][$j-1] !== "M" && $j-1 >=0){
//                 $array[$i][$j-1] += 1;
//                 // echo $array[$i][$j-1];
//             }

//             if ($array[$i][$j+1] !== "M" && $j+1 <= 9){
//                 $array[$i][$j+1] += 1;
//                 // echo $array[$i][$j+1];
//             }

//             if ($array[$i+1][$j-1] !== "M" && $j-1 >=0 && $i+1 <= 9){
//                 $array[$i+1][$j-1] += 1;
//                 // echo $array[$i+1][$j-1];
//             }

//             if ($array[$i+1][$j] !== "M" && $i+1 <= 9){
//                 $array[$i+1][$j] += 1;
//                 // echo $array[$i+1][$j];
//             }

//             if ($array[$i+1][$j+1] !== "M" && $i+1 <= 9 && $j+1 <= 9){
//                 $array[$i+1][$j+1] += 1;
//                 // echo $array[$i+1][$j+1];
//             }

//         }
//         // echo "($i , $j) " . $array[$i][$j] . "<br>";
//         // if ($array[$i][$j] === "M"){
//         //     echo "here is array if <br>";
//         // }
//     }
// }


// for ($x = 0; $x < 3; $x++) {
//     for ($y = 0; $y < 3; $y++) {
//         if ($array[$x][$y] == "M") {
//             if($array[$x+1][$y] != "M"){
//             echo (int)($array[$x+1][$y]) +1;}
//         }
//     }
// }
// echo "<br>";
// echo "<table>";
// foreach ($array as $values) {
//     echo "<tr>";
//     foreach ($values as $key) {
//         echo "<td>" . $key . "</td>";
//     }
//     echo "</tr>";
// }
// echo "</table>";
// print_r($array);
