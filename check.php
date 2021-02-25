<?php
// サニタイジングあり
    $name = htmlspecialchars($_POST['name']);
    $furigana = htmlspecialchars($_POST['furigana']);
    $nickname = htmlspecialchars($_POST['nickname']);
    $email = htmlspecialchars($_POST['email']);
    $content = htmlspecialchars($_POST['content']);


// Name
    if ($name == '') {
        $name_result = '名前が入力されていません';
    } else {
        $name_result = 'ようこそ' . $name . '様';
    }

// フリガナ
if ($furigana == '') {
    $furigana_result = 'フリガナが入力されていません';
} else {
    $furigana_result = 'フリガナ：' . $furigana;
}

// Nickname
    if ($nickname == '') {
        $nickname_result = 'ニックネームが入力されていません';
    } else {
        $nickname_result = 'ようこそ' . $nickname . '様';
        }

// メールアドレス
    if ($email == '') {
        $email_result = 'メールアドレスが入力されていません';
    } else {
        $email_result ='メールアドレス:' . $email;
    }
// お問い合わせ内容
    if ($content =='') {
        $content_result = 'お問い合わせ内容が入力されていません';
    } else {
        $content_result = 'お問い合わせ内容：' . $content;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力内容確認</h1>
    <p><?php echo $name_result; ?></p>
    <p><?php echo $furigana_result; ?></p>
    <p><?php echo $nickname_result; ?></p>
    <p><?php echo $email_result; ?></p>
    <p><?php echo $content_result; ?></p>
    <form method="post" action="thanks.php">
    <!-- GET送信の場合 -->
    <!-- <form method="get" action="thanks.php"></form> -->
    <!-- type="hidden" 画面上には表示されない-->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
        <input type="hidden" name="nickname" value="<?php echo $nickname; ?>"> 
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
    
    <!-- onclick クリックしたらどういう動きをするか -->
    <!-- history.back() javascriptの言語 矢印の戻るボタンと同じ挙動にさせる-->
    <input type="button" onclick="history.back()" value="戻る">
    <?php if ($name != '' &&  $furigana != '' && $nickname != '' && $email != '' && $content != ''): ?>
        <input type="submit" value="OK">
    <?php endif; ?>

    <!-- <a href="index,html">戻る</a> -->
    </form>
</body>
</html>