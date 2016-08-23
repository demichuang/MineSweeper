<?php
header("Content-Type:text/html; charset=utf-8");
$map = $_GET['map'];
$changeMap = str_replace("N", "", $map);

$arr = str_split($map);
$arrLength = count($arr);

$rowNum = explode("N", $map);
$countRow = count($rowNum);

$newArr = array();

for ($i = 0; $i < 10; $i++) {
    array_push($newArr, $rowNum[$i]);
}

$countN = 0;
$countM = 0;

$msg = "不符合，因為\n";

foreach ($arr as $values) {
    if (!preg_match("/^([0-8MN]+)$/", $values)) {
        $msg .= "有錯誤字元。\n";

        if ($values > 8) {
            $msg .= "數字出現" . $values . "，";
        }

        if ($values == "m") {
            $msg .= "有地雷(M)標記錯誤，現為m，應為M。\n";
            break;
        }
    }
}

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        if($newArr[$i][$j] === "m") {
            $newArr[$i][$j] = "M";
        }
    }
}

foreach ($arr as $values) {
    if ($values == "N") {
        $countN++;
    }

    if ($values == "M" || $values == "m") {
        $countM++;
    }
}

if ($arrLength > 109) {
    if(substr($map, -1) == "N") {
        $msg .= "換行符號(N)數量有誤，現在換行符號數量:" . $countN . "。\n";
    }
    else {
        $msg .= "圖型大小有誤，現為10*" . $countRow . "，應為10*10。\n";
    }
}

if ($countM != 40) {
    $msg .= "地雷(M)數量有誤，現在地雷數量:" . $countM ."。\n";
}

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

            if ($newArr[$i][$j] !== (string)$myNum && $arrLength < 110) {
                $msg .= "陣列" . $i . "," . $j . "位置數字有誤，現為" . $newArr[$i][$j] . "，應為" . $myNum . "。\n";
            }
        }
    }
}

if ($msg == "不符合，因為\n") {
    $msg = "符合";
}

echo $msg;
