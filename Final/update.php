<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>工讀生資料維護</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="wrapper-02">
<div class="header"><img class="icon" src="https://www.designevo.com/res/templates/thumb_small/blue-shield-and-banner-emblem.png" alt=""/></div>
<div class="content content_white">
			<div id="header">
			<h1 class="Title">工讀生資料維護</h1>
			</div>

			<div id="contents">
			<h2> <a href="HomePage.html">首頁</a> </h2>
			<?php   		
				include"db_connect2.php";

				if(empty($_POST['studentid']))	
				{
					echo "!!!! 請輸入正確學號 !!!<br />";
				}
				else
				{        
				$studentid=$_POST['studentid'];
				$sql="SELECT * FROM dbo.student WHERE studentid='$studentid'";
				$qury=sqlsrv_query($conn,$sql) or die("sql error".sqlsrv_errors());
				$row=sqlsrv_fetch_array($qury);
				if(empty($row['studentid']))	
				{
					echo "!!! 無此學號 !!!<br />";
				}
				else
				{	
			?>
				<form name="form" action="http://127.0.0.1/Final/update_data.php" method="POST" accept-charset="UTF-8" align="center">
				<div class="detail_box clearfix">
				<div class="link_box">
				<br/>
				<h2 align="left">修改工讀生資料</h2>
				<table height="2">
					<tr>
						<th align="center">學號/studentID:</th><td><input id="studentid" type="text" name="studentid" size="30" value="<?php echo $studentid;?>" readonly /> </td>
					</tr>
					<tr>
					   <th align="center">電話/phone:</th><td><input id="phone" type="text" name="phone" size="30" value="<?php echo $row['phone']; ?>" /></td>
					</tr>  
					<tr>
						<th align="center">姓名/name:</th><td><input id="studentname" type="text" name="studentname" size="30" value="<?php echo $row['studentname']; ?>"/></td>
					</tr> 
					<tr>
					   <th align="center">學校/school:</th><td><input id="school" type="text" name="school" size="30" value="<?php echo $row['school']; ?>"/></td>
					</tr> 
					<tr>
						<th align="center">系級/grade:</th><td><input id="grade" type="text" name="grade" size="30" value="<?php echo $row['grade']; ?>"/></td>
					</tr>
					<tr>
						<th align="center">性別/sex</th><td><input id="sex" type="text" name="sex" size="30" value="<?php echo $row['sex']; ?>"/></td> 
					</tr> 
					<tr>				
						<th align="center">目前GPA/currnt GPA:</th><td><input id="currentgpa" type="text" name="currentgpa" size="30"  value="<?php echo $row['currentgpa']; ?>"/></td>
					</tr>
					<tr>
						<th align="center">電子信箱/email</th><td><input id="email" type="text" name="email" size="30" value="<?php echo $row['email']; ?>"/></td>
					</tr> 
					
					</table>
					<input type="reset" value="清除表單"/>
					<input id="submit" name="submit" type="submit" value="送出" />
				</form>	</div></div>	
				<?php	} }?>
			</div>
</div>
</body>
</html>