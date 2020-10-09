<?php
if (!empty($_POST)) {
    $count1 = $_POST['count1'];
    $count2 = $_POST['count2'];
} else {
    $count1 = '';
    $count2 = '';
}


$total1 = 980 *$count1;

$total2 = 980 *$count2;


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
  th,td {
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
    <p></p>
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
                <td><?=$total1?></td>
            </tr>
            <tr>
                <td>毛筆ペン（細字）</td>
                <td>980円</td>
                <td><input type="text" name="count2" size="2"></td>
                <td><?=$total2?></td>
            </tr>
        </table>
        <p><input type="submit" value="送信"></p>
    </form>

</body>

</html>