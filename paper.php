<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Paper</title>
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
	<script type="text/javascript" src="/echarts.min.js"></script>
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"> </script>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/blog.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/single.css" rel="stylesheet" type="text/css" media="all" />
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
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //banner -->

	<!--//w3_short-->
	<!-- /blog -->
	<div class="banner-bottom inner">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="w3l_header w3_agileits_header">Paper<span>Page</span></h3>
			</div>
			<div class="agile_wthree_inner_grids">
				<div class="col-md-8 single-left">
					<div class="event-left1 w3-agile-event-left1">
						<div class="event-left1-left agile-event-left1-left">
							<img src="images/banner1.jpg" alt=" " class="img-responsive" style="opacity: 0.4"/>
							<div class="event-left1-left-pos agileits-w3layouts-event-left1-left-pos">
								<ul>
									<li><a href="#"><span class="fa fa-tags" aria-hidden="true"></span></a></li>
								</ul>
							</div>
						</div>
						<div class="event-left1-right w3-agileits-event-left1-right">
						<hr class="bs-docs-separator">
				       <?php
							$paper_id = $_GET["paper_id"];

							$ch = curl_init();
							$timeout = 5;
							$url = "http://localhost:8983/solr/paper/select?indent=on&q=PaperID:".$paper_id."&wt=json";
							curl_setopt($ch,CURLOPT_URL,$url);
							curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
							curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
							$result = json_decode(curl_exec($ch),true);
							curl_close($ch);
							$ppresult = $result['response']['docs'][0];

							$title = $ppresult['Title'];
							$paper_id = $ppresult['PaperID'];

							$conference_id = $ppresult['ConferenceID'];
							$conference_name = $ppresult["ConferenceName"];
							?>
							<div class="bs-docs-example">
								<table class="table table-striped">
									<tr>
									<th>
										Title
									</th>
									<td>
										<a href="/paper.php?paper_id=<?php echo $paper_id ?>"><?php echo $title ?></a>
									</td>
									</tr>

									<tr>
									<th>
										Author
									</th>
									<td>
									<?php
											foreach ($ppresult['AuthorName'] as $idx => $author){
											$author_id = $ppresult['AuthorID'][$idx];
											echo "<a href=\"/author.php?author_id=$author_id&page=1\">$author; </a>";
										}
									?>
									</td>
									</tr>

									<tr>
									<th>
									Conference
									</th>
									<td>

									<a href="/conference.php?conference_id=<?php echo $conference_id ?>&page=1"><?php echo $conference_name ?></a>
									</td>
									</tr>
								</table><br><br>
								</div>
							</div>

					<div class="clearfix"> </div>
					</div>
					<div class="comments">
						<h3>Our Recent Comments</h3>
						<div class="comments-grids" id="CommentPart">
							<div class="comments-grid">

								<div class="comments-grid-left">
									<img src="/images/3.png" alt=" " class="img-responsive" />
								</div>
								<div class="comments-grid-right">
									<h4><a href="#">Nobody</a></h4>
									<ul>
										<li>-- -- -- <i>|</i></li>
										<li><a href="#">Reply</a></li>
									</ul>
									<p></p>
								</div>
								<div class="clearfix"> </div>
							</div>

						</div>
					</div>
					<div class="leave-coment-form">
						<h3>Leave Your Comment</h3>
						<form action="comment.php" method="get" target="id_iframe">
							<input type="hidden" name="paper_id" value="<?php echo $paper_id?>">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<textarea name="Message" placeholder="Your comment here..." required=""></textarea>
							<div class="w3_single_submit">
								<input type="submit" value="Submit Comment">
								<p onclick="refresh()">Refresh</p>
							</div>
						</form>
						<iframe id="id_iframe"name="id_iframe"style="" hidden></iframe>
					</div>
					<div class="event-left1 w3-agile-event-left1">
						<div class="event-left1-left agile-event-left1-left">
	
						</div>

						</div>
						<div class="clearfix"> </div>
						<nav class="paging1 agileits-w3layouts-paging1" style="text-align: center;">
				        <ul class="pagination" style="text-align:center;">        
			            	<li><a href="#" onclick="javascript:history.back(-1)"> BACK </a></li>
			       		 </ul>
				        <br>
				        <a href="/index.php">HOMEPAGE</a>
					</nav>						
					</div>
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
							<h3>Reference</h3>
							<ul>
								<?php
									$link = mysqli_connect("localhost:3306","root","","paperinfo");
									$result = mysqli_query($link,"SELECT PaperID,Title from (SELECT ReferenceID from paper_reference WHERE PaperID='$paper_id') as tmp INNER JOIN papers on tmp.ReferenceID = papers.PaperID");
									$ref = array("name"=>$title);
									$children = array();
									if($result->num_rows==0){
										echo "<li>No Reference</li>";
									}else{
										while($row=mysqli_fetch_array($result)){
											$tmp1 = $row["PaperID"];
											$tmp2 = $row["Title"];
											$html = "<a href=\"/paper.php?paper_id=$tmp1\">$tmp2</a>";
											echo "<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>$html</li>";
											$children[] = array("name"=>$tmp2);
										}
									}
									$ref["children"]=$children;
									$ref = json_encode($ref);
									mysqli_free_result($result);
								
								?>
							</ul>
						</div>
						<div class="categories w3ls-categories">
							<h3>Reference Graph</h3>
   								 <div id="container1" style="width: 300px;height:300px;margin-left:auto;margin-right:auto;"></div>
						</div>
						<div class="categories w3ls-categories">
							<h3>Cited</h3>
							<ul>
								<?php
									$result = mysqli_query($link,"SELECT tmp.PaperID,Title from (SELECT PaperID from paper_reference WHERE ReferenceID='$paper_id') as tmp INNER JOIN papers on tmp.PaperID = papers.PaperID");
									$cited = array("name"=>$title);
									$children = array();
									if($result->num_rows==0){
										echo "<li>No Cited</li>";
									}else{
										while($row=mysqli_fetch_array($result)){
											$tmp1 = $row["PaperID"];
											$tmp2 = $row["Title"];
											$html = "<a href=\"/paper.php?paper_id=$tmp1\">$tmp2</a>";
											echo "<li><i class=\"fa fa-check\" aria-hidden=\"true\"></i>$html</li>";
											$children[] = array("name"=>$tmp2);
										}
									}
									$cited["children"]=$children;
									$cited = json_encode($cited);
									mysqli_free_result($result);
								?>
							</ul>
						</div>
						<div class="categories w3ls-categories">
							<h3>Cited Graph</h3>
   								 <div id="container2" style="width: 300px;height:300px;margin-left:auto;margin-right:auto;"></div>
						</div>
					</div></div></div>


	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- //nav -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
<script type="text/javascript">
	function refresh(){
		$.get("getcomment.php",{paper_id:"<?php echo $paper_id?>"},function(result){
			$("#CommentPart").html(result);
		});
		//var obj = document.getElementById("CommentPart");
		//obj.innerHTML = "";
	}
	$(document).ready(function(){
		refresh();
	});
</script>
<script>

var refchart = echarts.init(document.getElementById("container1"));
var refdata = <?php echo $ref ?>;
refchart.setOption(option = {

    tooltip: {
        trigger: 'item',
        triggerOn: 'mousemove'
    },

    series:[
        {
            type: 'tree',

            data: [refdata],

            top: '1%',
            left: '15%',
            bottom: '1%',
            right: '7%',

            symbolSize: 7,

            orient: 'RL',
        
            label: {
                    position: 'right',
                    verticalAlign: 'middle',
                    align: 'left'
            },

            leaves: {
                label: {
                        position: 'left',
                        verticalAlign: 'middle',
                        align: 'right'
                }
            },

            expandAndCollapse: true,
            animationDuration: 550,
            animationDurationUpdate: 750
        }
    ]
});	
var citedchart = echarts.init(document.getElementById("container2"));
var citeddata = <?php echo $cited ?>;
citedchart.setOption(option = {
    tooltip: {
        trigger: 'item',
        triggerOn: 'mousemove'
    },
    series: [
        {
            type: 'tree',

            data: [citeddata],

            top: '1%',
            left: '7%',
            bottom: '1%',
            right: '20%',

            symbolSize: 7,

            label: {
                normal: {
                    position: 'left',
                    verticalAlign: 'middle',
                    align: 'right',
                    fontSize: 9
                }
            },

            leaves: {
                label: {
                    normal: {
                        position: 'right',
                        verticalAlign: 'middle',
                        align: 'left'
                    }
                }
            },

            expandAndCollapse: true,
            animationDuration: 550,
            animationDurationUpdate: 750
        }
    ]
});
</script>
</html>