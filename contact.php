<?php
phpinfo();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // フォームからのデータを受け取る
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 送信先のメールアドレスを指定する
    $to = 'niyabeb.work@gmail.com';
    $subject = '新しいお問い合わせがありました';

    // メールの本文を作成する
    $body = "お名前: " . $name . "\n";
    $body .= "メールアドレス: " . $email . "\n";
    $body .= "メッセージ: " . $message . "\n";

    // メールを送信する
    $result = mail($to, $subject, $body);

    if ($result) {
        // 送信成功時の処理（例: ユーザーにメッセージを表示する）
        echo 'お問い合わせを受け付けました。ありがとうございます！';
    } else {
        // 送信失敗時の処理（例: ユーザーにエラーメッセージを表示する）
        echo 'お問い合わせの送信に失敗しました。時間をおいて再度お試しください。';
    }
}
?>
