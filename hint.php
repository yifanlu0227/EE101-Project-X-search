<?php
	$prefix=$_GET['str'];
	$link = mysqli_connect('localhost:3306','root','','paperinfo');
	$result= mysqli_query($link,"SELECT * FROM papers WHERE Title LIKE '$prefix%'");
	for($i=0;$i<3;$i++){
		if($row = mysqli_fetch_array($result)){
			//$tmp=array('label'=>$row["Title"],'category'=>"Title");
			$a[]=$row["Title"];
		}
	}
	$result=mysqli_query($link,"SELECT * FROM authors WHERE AuthorName LIKE '$prefix%'");
	for($i=0;$i<2;$i++){
		if($row=mysqli_fetch_array($result)){
			//$tmp=array('label'=>$row["AuthorName"],'category'=>"Author");
			$a[]=$row["AuthorName"];
		}
	}
	$PREFIX = strtoupper($prefix);
	$result=mysqli_query($link,"SELECT * FROM conferences WHERE ConferenceName LIKE '$PREFIX%'");
	for($i=0;$i<2;$i++){
		if($row=mysqli_fetch_array($result)){
			//$tmp=array('label'=>$row["ConferenceName"],'category'=>"Conference");
			$a[]=$row["ConferenceName"];
		}
	}
	echo json_encode($a);
?>