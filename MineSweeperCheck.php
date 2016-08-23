<?php
header("Content-Type:text/html; charset=utf-8");

$map = $_GET['map'];
$arr = str_split($map);

// row 數量
$rowNum = explode("N", $map);
$countRow = count($rowNum);
$newArr = array();

// 地雷數量
$countN = 0;
$countM = 0;

foreach ($arr as $values) {

    if ($values == "N") {
        $countN++;
   }

    if ($values == "M") {
        $countM++;
   }
}

if ($countN != 9) {
    echo "不符合，因為換行符號(N)數量錯誤，現在換行符號數量: $countN<br>";
}

if ($countM != 40) {
    echo "不符合，因為地雷(M)數量錯誤，現在地雷數量: $countM<br>";
}

// 陣列格式
if ($countRow != 10) {
    echo "不符合，因為陣列格式錯誤，列的數量有誤，現在數量: $countRow<br>";
}

// col 數量
for ($i = 0; $i < 10; $i++) {
    $colNum = str_split($rowNum[$i]);
    $countCol = count($colNum);
    if ($countCol != 10) {
        echo "不符合，因為陣列格式錯誤，第" . $i . "列字串數量有誤<br>";
    }
}

print_r($rowNum);


for ($i = 0; $i < 10; $i++) {
    array_push($newArr, $rowNum[$i]);
}

var_dump($newArr);


for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {

        if ($newArr[$i][$j] !== "M") {


            $myNum = 0;

            if ($newArr[$i-1][$j-1] === "M" && $i-1 >= 0 && $j-1 >= 0) {
                $myNum++;
            }

            if ($newArr[$i-1][$j] === "M" && $i-1 >= 0) {
                $myNum++;
            }

            if ($newArr[$i-1][$j+1] === "M" && $i-1 >= 0 && $j+1 <= 9) {
                $myNum++;
            }

            if ($newArr[$i][$j-1] === "M" && $j-1 >= 0) {
                $myNum++;
            }

            if ($newArr[$i][$j+1] === "M" && $j+1 <= 9) {
                $myNum++;
            }

            if ($newArr[$i+1][$j-1] === "M" && $i+1 <= 9 && $j-1 >= 0) {
                $myNum++;
            }

            if ($newArr[$i+1][$j] === "M" && $i+1 <= 9) {
                $myNum++;
            }

            if ($newArr[$i+1][$j+1] === "M" && $i+1 <= 9 && $j+1 <= 9) {
                $myNum++;
            }

            if ($newArr[$i][$j] !== (string)$myNum) {
                echo "不符合，因為陣列內容錯誤，陣列" . $i . "," . $j . "位置數字有誤<br>";
            }
        }
    }
}





































