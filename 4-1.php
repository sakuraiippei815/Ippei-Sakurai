<?php
    $dsn = 'データベース名';
    $user= 'ユーザー名';
    $pass= 'パスワード';
    $pdo = new PDO($dsn,$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
?>