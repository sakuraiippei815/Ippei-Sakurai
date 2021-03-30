<?php
    $dsn = 'データベース名';
    $user= 'ユーザー名';
    $pass= 'パスワード';
    $pdo = new PDO($dsn,$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $sql = "CREATE TABLE IF NOT EXISTS tbtest"
	." ("
	. "id INT AUTO_INCREMENT PRIMARY KEY,"
	. "name char(32),"
	. "comment TEXT"
	.");";
	
	$sql = 'SELECT * FROM tbtest';
	$stmt = $pdo->query($sql);
	$results = $stmt->fetchAll();
	foreach ($results as $row)
        {
		
    		echo $row['id'].',';
    		echo $row['name'].',';
    		echo $row['comment'].'<br>';
    	echo "<hr>";
    	}
?>