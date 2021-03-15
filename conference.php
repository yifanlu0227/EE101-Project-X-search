<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Conference</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	   <script src="https://cdn.bootcss.com/echarts/4.2.1-rc1/echarts-en.common.js"></script>
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"> </script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/blog.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<style type="text/css">
		body { 
		background: url(bkground.png) ;
		background-attachment: fixed;
		background-size:cover;
		filter:alpha(Opacity=50);-moz-opacity:1;opacity: 1;
		}
		.container{
			background-color: rgba(255,255,255,0.8)
		}
		#home{
			min-height: 150px;
		}
		.banner-bottom inner{
			padding-top: 0px;
		}
	</style>
</head>

<body>
	<!-- banner -->

	<div class="main_section_agile inner" id="home">
		<div class="agileits_w3layouts_banner_nav">

			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php"> <span>X</span>Search</a></h1>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<ul class="nav navbar-nav">
							<li><a href="index.php" class="effect-3">Home</a></li>
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Paper <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="paper_total.php">GRAPHS</a></li>
									<li><a href="paper_total2.php">TABLES</a></li>
									
								</ul>
							</li>
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Author <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="author_cloud.php" target="_blank">GRAPHS</a></li>
									
								</ul>
							</li>
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">Conference <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="conference.php?conference_id=43001016&page=1">ECCV</a></li>
									<li><a href="conference.php?conference_id=43319DD4&page=1">NIPS</a></li>
									<li><a href="conference.php?conference_id=436976F3&page=1">SIGKDD</a></li>
									<li><a href="conference.php?conference_id=43ABF249&page=1">WWW</a></li>
									<li><a href="conference.php?conference_id=43FD776C&page=1">SIGIR</a></li>
									<li><a href="conference.php?conference_id=45083D2F&page=1">CVPR</a></li>
									<li><a href="conference.php?conference_id=45701BF3&page=1">ICCV</a></li>
									<li><a href="conference.php?conference_id=45F914AD&page=1">NAACL</a></li>
									<li><a href="conference.php?conference_id=465F7C62&page=1">ICML</a></li>
									<li><a href="conference.php?conference_id=46A05BB0&page=1">AAAI</a></li>
									<li><a href="conference.php?conference_id=46DAB993&page=1">ACL</a></li>
									<li><a href="conference.php?conference_id=47167ADC&page=1">EMNLP</a></li>
									<li><a href="conference.php?conference_id=47C39427&page=1">IJCAI</a></li>
									
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</nav>
			
		</div>
	</div>
	<!-- //banner -->

	<!-- /blog -->
	<div class="banner-bottom inner">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header w3_agileits_header">Conference<span>Page</span></h3>
			</div>
			<div class="agile_wthree_inner_grids">
				<div class="col-md-8 event-left w3-agile-event-left">
					<div class="event-left1 w3-agile-event-left1">
						<div class="event-left1-left agile-event-left1-left">
							<img src="images/banner1.jpg" alt=" " class="img-responsive" style="opacity: 0.4"/>
							<div class="event-left1-left-pos agileits-w3layouts-event-left1-left-pos">
								<ul>
									<?php $conference_id=$_GET["conference_id"];
										$link = mysqli_connect("localhost:3306","root","","paperinfo");
										$result = mysqli_query($link,"SELECT ConferenceName from conferences where ConferenceID = '$conference_id'");
										$confname= mysqli_fetch_array($result)[0];
										$wordcloud = $confname."_cloud.php";
									?>
									<li><a href="<?php echo $wordcloud?>" target="_blank"><span class="fa fa-tags" aria-hidden="true"></span>Word Cloud</a></li>
								</ul>
							</div>
						</div>
						<div class="event-left1-right w3-agileits-event-left1-right">
			                <hr class="bs-docs-separator">
				                <?php
				                    $cur_page=$_GET["page"];
				                    if(!$cur_page || $cur_page<0) $cur_page=1;
				                    $conference_id=$_GET["conference_id"];
				                    $link = mysqli_connect("localhost:3306",'root','','paperinfo');
				                    $result = mysqli_query($link,"SELECT count(*) FROM papers WHERE ConferenceID ='$conference_id'");
				                    $total = mysqli_fetch_array($result)[0];
				                    $final_page = ceil($total/10);
				                    if($cur_page>$final_page) $cur_page=$final_page;
				                    $pre_page= max(1,$cur_page-1);
				                    $next_page = min($final_page,$cur_page+1);
				                    if($total)
				                        echo "<p>Paper Number in this Conference: $total</p>";
				                    else 
				                        echo "<p>NO such Conference<p>";
				                    $tmp = 10*($cur_page-1);
				                    $result = mysqli_query($link,"SELECT PaperID,Title,PaperPublishYear FROM papers WHERE ConferenceID='$conference_id' LIMIT $tmp,10");
				                    echo "<div class=\"bs-docs-example\">";
				                    echo "<table class=\"table table-striped\"><tr><th>Title</th><th>Publish Year</th></tr>";
				                    while($row = mysqli_fetch_array($result)){
				                        echo "<tr><td>";
				                        $paper_id = $row[0];
				                        $paper_name = $row[1];
				                        echo "<a href=\"/paper.php?paper_id=$paper_id\">$paper_name</a>";
				                        echo "</td><td>";
				                        echo $row[2];
				                        echo "</td></tr>";
				                    }
				                    echo "</table>";
				                    //开始对年份进行统计。
				                    $sql="SELECT PaperPublishYear,count(*) FROM papers WHERE ConferenceID='$conference_id' GROUP BY PaperPublishYear";
				                    $result = mysqli_query($link,$sql);
				                    $xdata=array();
				                    $ydata=array();
				                    while($row = mysqli_fetch_array($result)){
				                        $xdata[]=$row[0];
				                        $ydata[]=$row[1];
				                    }
				                    $Xdata = json_encode($xdata);
				                    $Ydata = json_encode($ydata);
				                ?>

						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="event-left1 w3-agile-event-left1">
						<div class="event-left1-left agile-event-left1-left">
						</div>

						</div>
						<div class="clearfix"> </div>
					</div>
					

					
					<nav class="paging1 agileits-w3layouts-paging1" style="text-align: center;">
				        <ul class="pagination" style="text-align:center;">
				            <?php
				                $n = ceil($cur_page/10);
				                $pre=$n*10-10;
				                $next= $n*10+1;

				                echo "<li><a href=\"/conference.php?page=$pre&conference_id=$conference_id\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b><<</b></span></a></li>";
				                for($i=($n*10-9);$i<=min($n*10,$final_page);$i++){
				                    if($i==$cur_page){
				                        echo "<li><a href=\"/conference.php?page=$i&conference_id=$conference_id\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b>$i</b></span></a></li>";
				                    }else{
				                        echo "<li><a href=\"/conference.php?page=$i&conference_id=$conference_id\"><span aria-hidden=\"true\">$i</span></a></li>";
				                    }

				                }
				                echo "<li><a href=\"/conference.php?page=$next&conference_id=$conference_id\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b>>></b></span></a></li>";
				                echo "<li><a href=\"/conference.php?page=$final_page&conference_id=$conference_id\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b>$final_page</b></span></a></li>";
				            ?>
				        </ul>
				        <form action="/conference.php">
				            <input type="hidden" name="conference_id" value="<?php echo $conference_id?>">
				            <input type="text"  name="page" autocomplete="off">
				            <h4><button type="submit" class="label label-primary">JUMP</button></h4>
				        </form>
				        <br>
				        <a href="/index.php">HOMEPAGE</a>
					</nav>
				</div>
				<div class="col-md-4 event-right wthree-event-right">
					<div class="event-right1 agileinfo-event-right1">
						<div class="search1 agileits-search1">
							<form action="search.php">
								<input type="hidden" name="page" value=1>
								<input type="search" name="content" placeholder="Search here..." required="" autocomplete="off">
								<input type="submit" value="submit">
							</form>
						</div>
						<div class="categories w3ls-categories">
							<h3>Publish Year</h3>
   								 <div id="main" style="width: 330px;height:300px;margin-left:auto;margin-right:auto;"></div>
						</div>
						<div class="categories w3ls-categories">
							<h3>Key Word</h3>
							<div id="confkeywords">
							
   							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- //nav -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
<script type="text/javascript">
        var myChart = echarts.init(document.getElementById('main'));
        Xdata = <?php echo $Xdata;?>;
        Ydata = <?php echo $Ydata;?>;
        // 指定图表的配置项和数据
        var option = {
            tooltip: {},
            legend: {
                data:['Number']
            },
            xAxis: {
                data: Xdata
            },
            yAxis: {},
            series: [{
                name: 'Number',
                type: 'bar',
                data: Ydata,
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
</script>
<script type="text/javascript">
	console.log("?????");
 $.ajax({
 	type:"get",
 	data:{conference_id:"<?php echo $conference_id?>"},
 	url:"/confkeywords.php",
 	success:function(result){
 		$("#confkeywords").html(result);
 	}
 });
</script>
</html>