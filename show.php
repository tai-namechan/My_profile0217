<?php
    // DBに接続する
    $dsn = 'mysql:dbname=phpmyprofile;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn, $user, $password);
    $dbh->query('SET NAMES utf8');

    // 2.SQL文を実行する
    // select read
    // * 全部
    $sql = 'SELECT * FROM `survey`';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    // 3.DBを切断する
    $dbh = null;

    // fetch():DBの一行を取得して次の行を取得する準備をする
    // fetch()この関数の括弧の中に入る物＝引数
    // $rec = $stmt->fetch(PDO::FETCH_ASSOC);

    // fetchALL():DBのあたいを全て取得して格納
    $rec = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 検証ツール・デバック なんかエラーが出る時とかに使う
    // var_dump($rec);

    // $rec = [[1つめ], [2つめ], [3つめ], [4つめ], [5つめ]];

    // １つ目 = ['code' => 1, 'nickname' => , ''...]

    foreach($rec as $value) {
    echo $value ['id'] . '<br>';
    echo $value ['name'] . '<br>';
    echo $value ['furigana'] . '<br>';
    echo $value ['nickname'] . '<br>';
    echo $value ['email'] . '<br>';
    echo $value ['content'] . '<br>';
    // それぞれの値の下に線を引く<hr>
    echo '<hr>';
    }