<?php
	$author_id=$_GET["author_id"];
	$link = mysqli_connect("localhost:3306",'root','','paperinfo');
	$result = mysqli_query($link,"SELECT PaperPublishYear,count(*) from paper_author_affiliation A INNER JOIN papers B on A.PaperID = B.PaperID WHERE A.AuthorID='$author_id' group by PaperPublishYear");
	$xdata=array();
	$ydata=array();
	while($row = mysqli_fetch_array($result)){
		$xdata[]=$row[0];
		$ydata[]=$row[1];
	}
	$res=array();
	$res['Xdata']=$xdata;
	$res['Ydata']=$ydata;
	//header('Content-Type:application/json');
	echo json_encode($res);
?>
