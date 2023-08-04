<?php
    if($_POST['account']=='408530014' && $_POST['password']=='54881122'){
		header('Location: HomePage.html'. urlencode($_POST['refer']));
	}
	else{
		echo "Type In  the correct password or account ???";
		#header('Location: CusTmer.html'. urlencode($_POST['refer']));
	}
?>