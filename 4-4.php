<?php
    $dsn = 'データベース名';
    $user= 'ユーザー名';
    $pass= 'パスワード';
    $pdo = new PDO($dsn,$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $sql = "CREATE TABLE IF NOT EXISTS tbtest"."CREATE TABLE IF NOT EXISTS tbtest123"
	." ("
	. "id INT AUTO_INCREMENT PRIMARY KEY,"
	. "name char(32),"
	. "comment TEXT"
	.");";

    $sql ='SHOW CREATE TABLE tbtest';
	$result = $pdo -> query($sql);
	foreach ($result as $row){
		echo $row[1];
	}
	echo "<hr>";