<html lang="ja">
    <head>
        <meta charset = "UTF-8">
        <title>misson5-1techbase</title>
    </head>
    <form action="" method="post"  onSubmit="return checkSubmit()">
       <br>
        <input type ="text" name="name" placeholder="名前" >
        <input type ="text" name="com" placeholder="コメント"><br>
        <input type ="text" name="del" placeholder="削除番号"><br>
        <input type ="text" name="edi" placeholder="編集対象番号">
        <input type ="text" name="name2" placeholder="名前" >
        <input type ="text" name="com2" placeholder="コメント"><br>
        <input type ="text" name="pass" placeholder="パスワード"><br>
        <input type ="submit" name="submit">
    </form>
<body>
        
     <script type="text/javascript">function checkSubmit() {return confirm("パスワードは打ちましたか？");}</script> 
<?php
    $name       = $_POST["name"];
    $com        = $_POST["com"];
    $del        = $_POST["del"];
    $edi        = $_POST["edi"];
    $name2      = $_POST["name2"];
    $com2       = $_POST["com2"];
    $password   = $_POST["pass"];
    
    $date       = date("Y/m/d H:i:s");
    $alert      = "<script type='text/javascript'>alert('パスワードが違います。');</script>";  
    $dsn    = 'データベース名';
    $user   = 'ユーザー名';
    $pass   = 'パスワード';
    $pdo    = new PDO($dsn,$user,$pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $sql    = "CREATE TABLE IF NOT EXISTS tbtest1"//tbtestAAAはどこにあるの？
      ." ("
      . "id INT AUTO_INCREMENT PRIMARY KEY,"
      . "name char(32),"
      . "comment TEXT,"
      . "password INT,"
      . "date DATETIME"
      .");";
 $stmt    = $pdo->query($sql);


   if($name!=null && $com!=null&& $password!=null )
   {
           $sql = "INSERT INTO tbtest1 (name, comment, date, password) VALUES (:name, :comment, :date, :password)";
           $stmt = $pdo -> prepare($sql);
           $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
           $stmt -> bindParam(':comment', $com, PDO::PARAM_STR);
           $stmt -> bindParam(':date', $date, PDO::PARAM_STR);
           $stmt -> bindParam(':password', $password, PDO::PARAM_STR);
    
           $stmt -> execute();
   }
    //削除
   elseif($del != null)
   {
        $id   = $del;
        $sql  = 'SELECT * FROM tbtest1 where id ='.$id;
        $stmt  = $pdo -> query($sql);
        $results  = $stmt -> fetchAll();
    //パスワードが一致したとき
        if($password == $results[0][3])
        {
             $sql = 'delete from tbtest1 where id ='.$id;
             $stmt = $pdo -> prepare($sql);
             $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
             $stmt -> execute();
        }
   else{
            echo $alert;
       }
   }
   //編集
    elseif($edi != null && $name2 != null && $com2 != null )
    {
        $id   = $edi;
        $sql  = 'SELECT * FROM tbtest1 where id ='.$edi;
        $stmt  = $pdo -> query($sql);
        $results  = $stmt -> fetchAll();
       
    //パスワードが一致したとき
    if($password == $results[0][3])
    {
          
         $id      = $edi;
         $name    = $name2;
         $com     = $com2;
         $date    = $date;
         $password= $password;
         $sql   = 'UPDATE tbtest1 SET name = :name, comment = :comment, date =:date, password = :password WHERE id = :id';
         $stmt   = $pdo ->prepare($sql);
         $stmt -> bindParam(':id', $id, PDO::PARAM_INT);
         $stmt -> bindParam(':name', $name, PDO::PARAM_STR);
         $stmt -> bindParam(':comment', $com, PDO::PARAM_STR);
         $stmt -> bindParam(':date', $date, PDO::PARAM_STR);
         $stmt -> bindParam(':password', $password, PDO::PARAM_STR);
         $stmt -> execute();
    }
    else{
            echo $alert;
        }
   }
  
   
   
        
         $sql = 'SELECT * FROM tbtest1';
         $stmt = $pdo->query($sql);
         $results = $stmt->fetchAll();
         foreach ($results as $row)
         {
             
             echo $row['id'].',';
             echo $row['name'].',';
             echo $row['comment'].',';
             echo $row['date'].'<br>';
            
             echo "<hr>";
          }
  ?> 
 </body>
</html>