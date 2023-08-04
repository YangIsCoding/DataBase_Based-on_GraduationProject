<?php
header("Content-Type:text/html; charset=utf-8");
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>工讀生修改結果</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="wrapper-02">
  <div id="header">
    <h1>工讀生修改結果</h1>
  </div>
<div class="content content_white">
	<div id="contents">
	<h2> <a href="HomePage.html">首頁</a> </h2>

	<?php
			include "db_connect2.php";
				   
			$studentid=$_POST['studentid'];
			$phone=$_POST['phone'];
			$studentname=$_POST['studentname'];
			$school=$_POST['school'];
			$grade=$_POST['grade'];
			$sex=$_POST['sex'];
			$currentgpa=$_POST['currentgpa'];
			$email=$_POST['email'];
			
			
			$sql="UPDATE dbo.student SET 
			studentid = '$studentid',
			phone = '$phone',
			studentname = '$studentname',
			school = '$school',
			grade = '$grade',
			sex = '$sex',
			currentgpa = '$currentgpa',
			email = '$email'
			
			WHERE studentid = '$studentid'";
			$query = sqlsrv_query($conn,$sql) or die(print_r("sql error".sqlsrv_errors()));   
			if(sqlsrv_rows_affected($query))
			{
				echo "學號:".$studentid." 資料已修改完成。<br> 請點首頁回到系統管理畫面!<br/>";
			}
	?>
	</div>
</div>

</body></html>