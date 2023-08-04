<?php
header("Content-Type:text/html; charset=utf-8");
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<div class="content content_white">
<title>留言新增結果</title>
<link href="style.css" rel="stylesheet" type="text/css"><div class="content content_white">
</head>
<body id="wrapper-02"><div class="header"><img class="icon" src="https://www.designevo.com/res/templates/thumb_small/blue-shield-and-banner-emblem.png" alt=""/></div>
  <div class="content content_white">
  <div id="header">
    <h1 class='Title'>留言新增結果</h1>
  </div>
    
<div id="contents">

<?php
        include "db_connect2.php";
        //$orderid=$_POST['orderid'];
        $cemail=$_POST['cemail'];
        $nickname=$_POST['nickname'];
        $comment=$_POST['comment'];
		
		if($comment){
			#wirte down comment
			$write = fopen("com.txt","a+");
			fwrite($write,"<u><b><h1 class='insert'>$nickname</h1></b></u><br><h1 class='small_english'>$comment</h2><br>");
			
			fclose($write);
			#display comment
			$read = fopen("com.txt","r+t");
			echo  "ALL Comments:<br>";
			
			while(!feof($read)){
				echo fread($read,1024);
			}
			fclose($read);
		}
		else{
			#display comment
			$read = fpoen("com.txt","r+t");
			echo  "ALL Comments:";
			
			while(!feof($read)){
				echo fread($read,1024);
			}
			fclose($read);
		}
	  
       $sql="INSERT INTO dbo.comment (cemail, nickname, comment)
        VALUES('$cemail','$nickname','$comment')";
       $query=sqlsrv_query($conn,$sql) or die("sql error".die("sql error".print_r(sqlsrv_errors())))
 

?>
</div></div></div></div>

</body></html>