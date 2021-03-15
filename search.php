<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Search Page</title>
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
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
<style>
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
			min-height: 120px;
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
									<li><a href="author_cloud.php">GRAPHS</a></li>
									
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


	 <!-- /Typography-->
    <div class="banner-bottom">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header w3_agileits_header">Search<span>Result</span></h3>
            </div>
            <div class="agile_wthree_inner_grids">
                <hr class="bs-docs-separator">
		       <?php
				$content = $_GET["content"];
				$cur_page= $_GET["page"];
				if(!$cur_page || $cur_page<0) $cur_page=1;
				$ch = curl_init();
				$timeout = 5;
				$query = urlencode(str_replace(' ', '+', $content));
				$start = ($cur_page-1)*10;
				$url = "http://localhost:8983/solr/paper/select?indent=on&q=PaperAuthorConf:$query&start=$start&wt=json";

				curl_setopt ($ch, CURLOPT_URL, $url);
				curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);

				$result = json_decode(curl_exec($ch), true);
				curl_close($ch);

				$total = $result['response']['numFound'];
				$final_page = ceil($total/10);
				if($cur_page>$final_page) $cur_page=$final_page;
				$pre_page= max(1,$cur_page-1);
				$next_page = min($final_page,$cur_page+1);

				echo "<div class=\"bs-docs-example\">";
				echo "<table class=\"table table-striped\"><tr><th>Title</th><th>Authors</th><th>Conference</th></tr>";
				foreach ($result['response']['docs'] as $paper) {
					echo "<tr>";
					echo "<td>";
					$PPtitle = $paper['Title'];
					$paper_id = $paper['PaperID'];
					echo "<a href=\"/paper.php?paper_id=$paper_id\">$PPtitle;</a>";
					echo "</td>";

					echo "<td>";
					foreach ($paper['AuthorName'] as $idx => $author) {
						$author_id = $paper['AuthorID'][$idx];
						echo "<a href=\"/author.php?author_id=$author_id&page=1\">$author; </a>";
					}
					echo "</td>";

					# 请补充针对Conference Name的显示
					echo "<td>";
					$conference_id = $paper["ConferenceID"];
					$conference_name = $paper["ConferenceName"];
					echo "<a href=\"/conference.php?conference_id=$conference_id&page=1\">$conference_name;</a>";
					echo "</td>";
					echo "</tr>";
				}
				echo "</table><br><br>";
				echo "</div>"
			?>
			</div>
		</div>
	</div>
    <div class='page' style="text-align: center;">
        <ul class="pagination" style="text-align:center;">
            <?php
                $n = ceil($cur_page/10);
                $pre=$n*10-10;
                $next= $n*10+1;

                echo "<li><a href=\"/search.php?page=$pre&content=$content\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b><<</b></span></a></li>";
                for($i=($n*10-9);$i<=min($n*10,$final_page);$i++){
                    if($i==$cur_page){
                        echo "<li><a href=\"/search.php?page=$i&content=$content\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b>$i</b></span></a></li>";
                    }else{
                        echo "<li><a href=\"/search.php?page=$i&content=$content\"><span aria-hidden=\"true\">$i</span></a></li>";
                    }

                }
                echo "<li><a href=\"/search.php?page=$next&content=$content\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b>>></b></span></a></li>";
                echo "<li><a href=\"/search.php?page=$final_page&content=$content\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b>$final_page</b></span></a></li>";
            ?>
        </ul>
        <form action="/search.php">
            <input type="hidden" name="content" value="<?php echo $content?>">
            <input type="text"  name="page" autocomplete="off">
            <h4><button type="submit" class="label label-primary">JUMP</button></h4>
        </form>
        <br>
        <a href="/index.php">HOMEPAGE</a>

    </div>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- //nav -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>