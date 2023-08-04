<?php
header("Content-Type:text/html; charset=utf-8");
?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>工讀生查詢結果</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="wrapper-02">
<div class="header"><img class="icon" src="https://www.designevo.com/res/templates/thumb_small/blue-shield-and-banner-emblem.png" alt=""/></div>
<div class="content content_white">
	  <div id="header">
		<h1 class="Title">工讀生查詢結果</h1>
	  </div>
		
	<div id="contents">
	<table border="3" style="padding:3px">
	<h2> <a href="HomePage.html">首頁</a> </h2>
	<?php   		
			include"db_connect2.php";
			if($_POST['studentid']!=''){
				$studentid=$_POST['studentid'];
				$sql="SELECT * FROM dbo.student WHERE studentid='$studentid'";
			}
			else{
				$sql="SELECT * FROM dbo.student ";
			}

			$qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
			$row=sqlsrv_fetch_array($qury);
			if(empty($row['studentid']))	
			{	
					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					echo "😢查無此學號 請重新輸入😢</br>";
			}	
			#while($row=sqlsrv_fetch_array($qury))
			else
			{
				echo "<tr> <th>學號</th> <th>電話</th> <th>學校</th> <th>性別</th> <th>目前GPA</th> <th>姓名</th> <th>系級</th> <th>email</th> </tr>";
				echo "<tr> <td>".$row['studentid']."</td> <td>".$row['phone']."</td> <td>".$row['school']."</td> <td>".$row['sex']."</td> <td>".$row['currentgpa']."</td> <td>".$row['studentname']."</td> <td>".$row['grade']."</td> <td>".$row['email']."</td> </tr>";
				echo "<tr> <th>打過的程式語言</th> <th>可工讀時間</th> <th>擬工讀單位</th> <th>專長</th>";
				echo "<tr> <td>".$row['lang']."</td>			<td>".$row['time']."</td><td>".$row['sect']."</td> <td>".$row['spec']."</td></tr>";
			}
			
			
	?>
	</table>
	</div>
</div>
</body></html>
