<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>PHP confirmation page</title>
</head>
<body>
    <h1>確認画面</h1>
<form action="dodevphp1.php" method="POST">
    名前:<br>
    <input type="text" name="fullname" value="<?php echo $_POST["fullname"]; ?>" disabled><br>
    メールアドレス:<br>
    <input type="email" name="email" value="<?php echo $_POST["email"]; ?>" disabled><br>
    問い合わせ内容:<br>
    <textarea name="message" rows="8" cols="80" disabled>
        <?php echo $_POST["message"]; ?>
    </textarea><br>

    <input type="submit" value="送信">

</form>


</body>
</html>