<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
    <?php
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $to = $_POST['to'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $headers = "From: dgpost51@gmail.com";

        if(mb_send_mail($to, $title, $content, $headers))
        {
            echo "メール送信成功です";
        }
        else
        {
            echo "メール送信失敗です";
        }
    ?>
    </body>
</html>