<?php
     header("Content-Type:text/html; charset=utf-8");
     $serverName="LAPTOP-88ELV7SS\SQLEXPRESS";
     $connectionInfo=array("Database"=>"ToughFit","UID"=>"CCU","PWD"=>"54881122","CharacterSet" => "UTF-8");
     $conn=sqlsrv_connect($serverName,$connectionInfo);
         if($conn){
             echo "OK!<br>";
         }else{
             echo "Error!!!<br />";
             die(print_r(sqlsrv_errors(),true));
         }            
?>