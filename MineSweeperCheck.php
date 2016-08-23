<?php
header("Content-Type:text/html; charset=utf-8");

$map = $_GET['map'];

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

try {
    if ($arrLength > 109) {
        throw new Exception("不符合，因為字串長度有誤，現為" . $arrLength . "，應為109");
    }

    foreach ($arr as $values) {

        if (!preg_match("/^([0-8MN]+)$/", $values)) {
            if ($values == "m") {
                throw new Exception("不符合，因為有地雷(M)標記錯誤，現為m，應為M");
            }

            if ($values > 8) {
                throw new Exception("不符合，因為有大於8的數字");
            }

            throw new Exception("不符合，因為有錯誤字元");
        }

        if ($values == "N") {
            $countN++;
        }

        if ($values == "M") {
            $countM++;
        }
    }

    if ($countN != 9) {
        throw new Exception("不符合，因為格式錯誤，換行符號(N)數量有誤，現在換行符號數量: $countN");
    }

    if ($countRow != 10) {
        throw new Exception("不符合，因為陣列格式錯誤，列的數量有誤，現在數量: $countRow");
    }

    if ($countM != 40) {
       throw new Exception("不符合，因為地雷(M)數量有誤，現在地雷數量: $countM");
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

                if ($newArr[$i][$j] !== (string)$myNum) {
                    throw new Exception("不符合，因為陣列內容有誤，陣列" . $i . "," . $j . "位置數字有誤，現為" . $newArr[$i][$j] . "，應為$myNum");
                }
            }
        }
    }

    echo "符合";
} catch(Exception $err) {
    echo $err->GetMessage();
}
