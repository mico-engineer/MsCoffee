
<?php
$name =$_POST['name'];
$mail =$_POST['email'];
$tel =$_POST['phone'];
$message =$_POST['message'];
 
$mail_to    = "XXX@XX.jp"; //送信先メールアドレス
$mail_subject   = "CONTACT to M's Coffee";  //メールの件名
$mail_body  = $message; //メールの本文
$mail_header    = "from:".$email;  //フォームで入力されたメールアドレスを送信元として表示する
     
$mailsend = mb_send_mail($mail_to, $mail_subject, $mail_body, $mail_header);
     
    if($mailsend == true) {
        echo '<p>Your message was sent successfully.</p>';
        echo '<form method="post" action="./confirm.php">';
        echo '<input type="submit" name="backbtn" value="前のページへ戻る">';
        echo '</form>';
    } else {
        echo '<p>メール送信でエラーが発生しました。</p>';
        echo '<form method="post" action="./confirm.php">';
        echo '<input type="submit" name="backbtn" value="前のページへ戻る">';
        echo '</form>';
    }
?>
