<?php

// $stoneMonth = [
//     1    => 'ガーネット',
//     2    => 'アメジスト',
//     3    => 'アクアマリン',
//     4    => 'ダイヤモンド',
//     5    => 'エメラルド',
//     6    => 'パール',
//     7    => 'ルビー',
//     8    => 'ペリドット',
//     9    => 'サファイア',
//     10   => 'オパール',
//     11   => 'トパーズ',
//     12   => 'ターコイズ',

// ];
// if (!empty($_POST)) {
//     $count1 = $_POST['count1'];
//     $count2 = $_POST['count2'];
//     $total1 = 980 * $count1;
//     $total2 = 980 * $count2;

//     $month = $_POST['month'];
// } else {
//     $count1 = '';
//     $count2 = '';
//     $month = '';
//     $stone = '';
// }
// $total = 0;

// for ($i = 40; $i <= 120; $i += 2) {
//     $total += $i;
// };
// echo $total;


// $memberList = [
//     array('name' => '太郎', 'age' => 32, 'point' => 320),
//     array('name' => '次郎', 'age' => 21, 'point' => 180),
//     array('name' => '三郎', 'age' => 30, 'point' => 240),
//     array('name' => '四郎', 'age' => 28, 'point' => 80),
//     array('name' => '五郎', 'age' => 24, 'point' => 480)
// ]

$numArr = [
    [
        30,
        65,
        72,
        47,
        63,
        96,
        72,
    ],
    [
        35,
        57,
        67,
        23,
        14,
        56,
        61,
    ],


    [
        46,
        16,
        27,
        58,
        84,
        34,
        20,
    ],



    [
        84,
        27,
        40,
        18,
        92,
        46,
        21,
    ],

    [
        14,
        74,
        54,
        2,
        85,
        35,
        66,
    ],

];










if (!empty($_POST)) {
    $num = $_POST['num'];
    $arr = $_POST['arr'];
    $total = 0;
    if (!isset($num)) {
        $result = "数値を入力してください。";
    }
    if ($num < 0 && $num > 100) {
        $result = "数値の入力が正しくありません。";
    }else{
        for($i = 0; $i < count($numArr[$arr]); $i++){
            $total += $numArr[$arr][$i];
        };
        $result = $total * $num;
    }
} else {
    $num = '';
    $arr = '';
    $result = '';
    $result = 0;
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 600px;
        }

        th,
        td {
            border: 1px solid #666666;
            padding: 4px;
        }

        th {
            background-color: #dddddd;
        }
    </style>
    <title>合計値計算</title>

</head>

<body>
    <form action="" method="post">

        <h1>合計値計算:</h1>
        <select name="arr" id="">
            <option value="0">配列1</option>
            <option value="1">配列2</option>
            <option value="2">配列3</option>
            <option value="3">配列4</option>
            <option value="4">配列5</option>
        </select>
        <h2>掛ける数値:</h2>
        <input type="text" name="num" size="2">

        <p><input type="submit" value="計算"></p>
    </form>
    <?= $result ?>
</body>

</html>