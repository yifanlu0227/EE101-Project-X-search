<?php
	$name = $_GET["Name"];
	$mail = $_GET["Email"];
	$paper_id = $_GET["paper_id"];
	$message = $_GET["Message"];
	$addtime = date("Y-m-d h:i:s");
	$link = mysqli_connect("localhost:3306",'root',"","comment");
	$insert = "insert into comment (PaperID,Content,Author,Addtime,Email) values('$paper_id','$message','$name','$addtime','$mail')";
	mysqli_query($link,$insert);
	mysqli_close($link);
	echo $insert;
?>