<?php
// serect(read)している
// １．データベースに接続する
$dsn = 'mysql:dbname=phpmyprofile;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh->query('SET NAMES utf8');

// ２．SQL文を実行する
$sql = 'SELECT * FROM `survey`';
$stmt = $dbh->prepare($sql);
$stmt->execute();

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


// ３．データベースを切断する
$dbh = null;

?>

PHPとデータベース <br>

3ステップ<br>

0.DBとテーブルの作成<br>

1.phpファイルからデータベースに接続すること<br>

2.SQL文を実行すること<br>
insert →CREATE <br>
select →READ <br>
update →UPDATE <br>
delete →DELETE <br>
 → CRUD処理 <br>
3.データベースを切断すること <br>