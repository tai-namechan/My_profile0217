<?php
    $name = htmlspecialchars($_POST['name']);
    $furigana = htmlspecialchars($_POST['furigana']);
    $nickname = htmlspecialchars($_POST['nickname']);
    $email = htmlspecialchars($_POST['email']);
    $content = htmlspecialchars($_POST['content']);

    // check.phpからthanks.phpへGET送信で送る場合
    // $name = htmlspecialchars($_GET['name']);
    // $nickname = htmlspecialchars($_GET['nickname']);
    // $furigana = htmlspecialchars($_GET['furigana']);
    // $email = htmlspecialchars($_GET['email']);
    // $content = htmlspecialchars($_GET['content']);
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>送信完了</title>
    </head>
    <body>
    <h1>お問い合わせありがとうございました</h1>
        <div>
        <h3>お問い合わせ詳細内容</h3>
        <p>Name：<?php echo $name; ?></p>
        <p>フリガナ：<?php echo $furigana; ?></p>
        <p>名前：<?php echo $nickname; ?></p>
        <p>メールアドレス：<?php echo $email; ?></p>
        <p>お問い合わせ内容：<?php echo $content; ?></p>
        </div>
    </body>
    </html>
    
    <?php
    // $name = htmlspecialchars($_POST['name']);
    // $furigana = htmlspecialchars($_POST['furigana']);
    // $nickname = htmlspecialchars($_POST['nickname']);
    // $email = htmlspecialchars($_POST['email']);
    // $content = htmlspecialchars($_POST['content']);

    // 1.データベースに接続する

    // $dsn = 'mysql:dbname=kiso;host=localhost';
    // $user = 'root';
    // $password = '';
    // $dbh = new PDD($dsn, $user, $password);
    // $dbh->query('SET NAMES utf8');

    // 2.SQL文を実行する

    // $sql = '';
    // $stmt = $dbn->prepare($sql);
    // $stmt->execute();

    // 3.データベースを切断する

    // $dbn = null;
    ?>