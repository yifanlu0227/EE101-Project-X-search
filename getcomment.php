<?php
	$paper_id=$_GET["paper_id"];
	$link=mysqli_connect("localhost:3306","root",'',"comment");
	
	$result = mysqli_query($link,"SELECT * FROM comment WHERE PaperID='$paper_id'");
	$INNERHTML = "";
	if($result->num_rows){

		while($row=mysqli_fetch_array($result)){
			$name = $row["Author"];
			$content = $row["Content"];
			$email =$row["Email"];
			$addtime = $row["Addtime"];
			$INNERHTML = $INNERHTML."<div class='comments-grid-left'><img src='images/1.png' alt=' ' class='img-responsive' /></div><div class='comments-grid-right'><h4><a href='#'>".$name."</a></h4><ul><li>".$addtime."<i>|</i></li><li><a href='#''>".$email."</a></li></ul><p>".$content."</p></div><div class='clearfix'></div></div><br><br>";
		}
	}else{
		$INNERHTML ="<div class='comments-grid-left'><img src='images/3.png' alt=' ' class='img-responsive' /></div><div class='comments-grid-right'><h4><a href='#'>NOBODY</a></h4><ul><li>-- -- --<i>|</i></li><li><a href='#''>NO EMAIL</a></li></ul><p>NO COMMENT NOW</p></div><div class='clearfix'></div></div><br><br>";
	}
	echo $INNERHTML;
	mysqli_close($link);
?>