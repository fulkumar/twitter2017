<?php//サーバーに連続するinclude 'connect.php';//ページから情報を取得    $email=htmlspecialchars($_POST["email"]);$password=htmlspecialchars($_POST["pass"]);$isture=0;$sql='SELECT email,password from users';//emailで判定する  foreach ( $dbh->query($sql) as $row) {         if($row['email']==$email && password_verify($password,$row['password'])){	//echo "成功"             session_start();            $_SESSION['email']=$email;        //     var_dump($_SESSION['email']);           header('Location:./tweet.php');	    $isture=1;	}  }    if($isture==0){     header('Location:./twitterError.html');  }?>