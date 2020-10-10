<?php

$stoneMonth = [
    1    => 'ガーネット',
    2    => 'アメジスト',
    3    => 'アクアマリン',
    4    => 'ダイヤモンド',
    5    => 'エメラルド',
    6    => 'パール',
    7    => 'ルビー',
    8    => 'ペリドット',
    9    => 'サファイア',
    10   => 'オパール',
    11   => 'トパーズ',
    12   => 'ターコイズ',

];
if (!empty($_POST)) {
    $count1 = $_POST['count1'];
    $count2 = $_POST['count2'];
    $total1 = 980 * $count1;
    $total2 = 980 * $count2;

    $month = $_POST['month'];
} else {
    $count1 = '';
    $count2 = '';
    $month = '';
    $stone = '';
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
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <table>
            <tr>
                <th>商品名</th>
                <th>単価</th>
                <th>数量</th>
                <th>小計</th>
            </tr>
            <tr>
                <td>和風レターセット</td>
                <td>980円</td>
                <td><input type="text" name="count1" size="2"></td>
                <td><?= $total1 ?></td>
            </tr>
            <tr>
                <td>毛筆ペン（細字）</td>
                <td>980円</td>
                <td><input type="text" name="count2" size="2"></td>
                <td><?= $total2 ?></td>
            </tr>
        </table>
    <h2>誕生日月</h2>
    <p><?= $month ?>月の誕生日石は<?=$stoneMonth[$month]?></p>

    <select name="month" id="">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select>
        <p><input type="submit" value="送信"></p>
    </form>
</body>

</html>