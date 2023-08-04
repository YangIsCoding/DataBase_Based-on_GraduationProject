<?php
header("Content-Type:text/html; charset=utf-8");
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>工讀生新增結果</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body id="wrapper-02">
  <div id="header">
    <h1>工讀生新增結果</h1>
  </div>
    
<div id="contents">

<?php
        include "db_connect2.php";
        //$orderid=$_POST['orderid'];
        $phone=$_POST['phone'];
        $school=$_POST['school'];
        $sex=$_POST['sex'];
        $studentname=$_POST['studentname'];
        $grade=$_POST['grade'];
        $email=$_POST['email'];
		$studentid=$_POST['studentid'];
		$lang=$_POST['lang'];
		$myall_lang = implode("," , $lang);
		$time = $_POST['time'];
		$myall_time = implode("," , $time);
		$sect = $_POST['sect'];
		$myall_sect = implode("," , $sect);
		$spec = $_POST['spec'];
		$myall_spec = implode("," , $spec);
      
       $sql="INSERT INTO dbo.Student (phone, school, sex,studentname, grade, email,studentid,lang,time,sect,spec)
        VALUES('$phone','$school','$sex','$studentname','$grade','$email','$studentid','$myall_lang','$myall_time','$myall_sect','$myall_spec')";
       $query=sqlsrv_query($conn,$sql) or die("sql error".print_r(sqlsrv_errors()))
	    
	   #$sql2="INSERT INTO dbo.school (school,studentid,grade)
        #VALUES('$school','$studentid','$grade')";
       #$query=sqlsrv_query($conn,$sql2) or die("sql error".print_r(sqlsrv_errors()))
 
       
    

?>
</div>

</body></html>