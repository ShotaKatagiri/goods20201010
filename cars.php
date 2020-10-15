<?php
require_once 'util.inc.php';


$cars = [
    ['トヨタ',    'プリウス',    2004,    1100000,],
    ['ホンダ',    'アコード',    2009,    2200000,],
    ['日産',    'マーチ',    2003,    580000,],
    ['ポルシェ',    'ボクスター',    2008,    4500000,],
    ['BMW',    'Z8',    2002,    12500000,],
]






?>
<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>車種一覧</title>
    <style>
  table {
    border-collapse: collapse;
    width: 800px;
  }
  tr:nth-of-type(even) {
    background-color: #f6f6f6;
	}
  th,td {
    border: 1px solid #999;
    padding: 15px;
    text-align: center;
  }
  th {
    background-color: #eee;
  }
  td:last-child {
    text-align: right;
  }
</style>
</head>

<body>
    <h1>車種一覧</h1>
    <table>
        <tr>
            <th>maker</th>
            <th>model</th>
            <th>year</th>
            <th>price</th>
        </tr>
        <?php foreach($cars as $car):?>
        <tr>

        <td><?=$car[0]?></td>
        <td><?=$car[1]?></td>
        <td><?=$car[2]?>年（<?= getWareki($car[2]) ?>）</td>
        <td><?=number_format($car[3])?>円</td>

        </tr>
        <?php endforeach;?>


        <?php?>


    </table>
</body>

</html>