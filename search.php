<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索ページ</title>
</head>
<body>
    <form action="" method="post">
    <h1>検索ページ</h1>
    <p>検索したいidを入力してください</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat reiciendis saepe, perferendis non, odit ratione doloremque maiores quas adipisci autem consequuntur dolore velit? Enim corporis architecto in molestiae? Suscipit, nulla.</p>
    <input type=" text" name="id">
    <input type="submit" value="検索">
    </form>
    <!-- ここからPHPコードを記述する -->
    <?php
    // 1.データベースに接続する
    $dsn = 'mysql:dbname=phpmyprofile;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');
    // POSTでデータが送信された時のみSQLを実行する→Undefined index: id のエラーが消える
    if (!empty($_POST)) {
    // 2.SQL文を実行する

    // インジェクション前
    // $sql = 'SELECT * FROM `survey` WHERE `id` = ' . $_POST['id'];
    // 文字列連携 フォームで送った値を文字接続でSQL文にしている

    // sqlインジェクションを防ぐため
    // プリペアードステートメント
    $sql = 'SELECT * FROM `survey` WHERE `id` = ?';
    $data[] =  $_POST['id'];
    // SQLを実行
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    // データを取得する
    // while ループするやつ
    while (1) {
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($rec == false) {
          break;
        }
        echo $rec['id'] . '<br>';
        echo $rec['name'] . '<br>';
        echo $rec['furigana'] . '<br>';
        echo $rec['nickname'] . '<br>';
        echo $rec['email'] . '<br>';
        echo $rec['content'] . '<br>';
        echo '<hr>';
      }
    }

    // 3.DBを切断する
    $dbh = null;
    ?>
</body>
</html>
