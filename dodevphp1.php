<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>
            送信ページ
</title>
</head>
<body>
    <?php
            $file_w = fopen("sozo01.txt","w");
            fwrite($file_w,$_POST["name"]);
            fclose($file_w);
    ?>
    <h1>
        送信完了
    </h1>
</body>
</html>