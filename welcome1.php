<?php

if (!empty($_POST)) {
    $lang = $_POST['lang'];
    //$_COOKIEに値が入っていたらtrue処理が実行される。
} elseif (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'ja';
}

setcookie('lang', $lang, time() + 86400 * 30);

if ($lang === 'en') {
    $message = 'Welcome';
} elseif ($lang === 'ja') {
    $message = 'こんにちは!';
} elseif ($lang === 'kr') {
    $message = '韓国語';
} elseif ($lang === 'cn') {
    $message = '中国語です。';
} elseif ($lang === 'it') {
    $message = 'イタリア語です';
}







function h($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= h($message) ?></title>
</head>

<body>
    <h1><?= h($message) ?></h1>
    <form action="" method="post">
        <p>
            <select name="lang">
                <option value="en" <?= h($lang == 'en' ? 'selected' : '') ?>>英語</option>
                <option value="ja" <?= h($lang == 'ja' ? 'selected' : '') ?>>日本語</option>
                <option value="kr" <?= h($lang == 'kr' ? 'selected' : '') ?>>韓国語</option>
                <option value="cn" <?= h($lang == 'cn' ? 'selected' : '') ?>>中国語</option>
                <option value="it" <?= h($lang == 'it' ? 'selected' : '') ?>>イタリア語</option>
            </select><input type="submit" value="送信"></p>
    </form>
</body>

</html>