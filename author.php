<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Author</title>
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
				<h3 class="w3l_header w3_agileits_header">Author<span>Page</span></h3>
			</div>
			<div class="agile_wthree_inner_grids">
				<div class="col-md-8 event-left w3-agile-event-left">
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
		                    $author_id = $_GET["author_id"];
		                    $cur_page = $_GET["page"];
		                    if(!$cur_page || $cur_page<0) $cur_page=1;
		                    $link = mysqli_connect("localhost:3306", 'root', '', 'paperinfo');
		                    $result = mysqli_query($link, "SELECT AuthorName from authors where AuthorID='$author_id'");
		                    echo "<div style=\"text-align:center;\">";
		                    if ($result) {
		                        $author_name = mysqli_fetch_array($result)['AuthorName'];
		                        echo "<p>Name: $author_name <br></p>";
		                    } else {
		                        echo "<p>Name not found</p>";
		                    }
		                    $result = mysqli_query($link, "SELECT Affiliations.AffiliationID, Affiliations.AffiliationName from (select AffiliationID, count(*) as cnt from paper_author_affiliation where AuthorID='$author_id' and AffiliationID is not null group by AffiliationID order by cnt desc) as tmp inner join Affiliations on tmp.AffiliationID = Affiliations.AffiliationID");
		                    # 请补充对主要机构名的显示
		                    if ($result) {
		                        $affiliation_name = mysqli_fetch_array($result)['AffiliationName'];
		                        echo "<p>AffiliationName: $affiliation_name <br></p>";
		                    } else {
		                        echo "<p>AffiliationName not found</p>";
		                    }
		                    
		                    $result = mysqli_query($link,"SELECT count(*) from paper_author_affiliation where AuthorID='$author_id'");
		                    $total = mysqli_fetch_array($result)[0];
		                    $final_page = ceil($total/10);
		                    if($cur_page>$final_page) $cur_page=$final_page;
		                    $pre_page= max(1,$cur_page-1);
		                    $next_page = min($final_page,$cur_page+1);

		                    echo "<p>Record: $total</p>";
		                    echo "</div>";
		                    $tmp = 10*($cur_page-1);
		                    $result = mysqli_query($link, "SELECT PaperID from paper_author_affiliation where AuthorID='$author_id' LIMIT $tmp,10");
		                    if ($result) {//为该author的所有论文
		                        echo "<div class=\"bs-docs-example\">";
		                        echo "<table class=\"table table-striped\"><tr><th>Title</th><th>Authors</th><th>Conference</th></tr>";
		                        $cnt=array("ECCV"=>0,"NIPS"=>0,"SIGKDD"=>0,"WWW"=>0,"SIGIR"=>0,"CVPR"=>0,"ICCV"=>0,"NAACL"=>0,"ICML"=>0,"AAAI"=>0,"ACL"=>0,"EMNLP"=>0,"IJCAI"=>0);
		                        while ($row = mysqli_fetch_array($result)) {//每一行
		                            echo "<tr>";
		                            $paper_id = $row['PaperID'];
		                            # 请增加对mysqli_query查询结果是否为空的判断
		                            $paper_info = mysqli_fetch_array(mysqli_query($link, "SELECT Title, papers.ConferenceID, ConferenceName from papers INNER JOIN conferences  on papers.ConferenceID = conferences.ConferenceID where PaperID='$paper_id'"));
		                            if(!$paper_info){
		                                echo "<p>NO SUCH PAPER!";
		                            }
		                            $paper_title = $paper_info['Title'];
		                            $conf_id = $paper_info['ConferenceID'];
		                            $conf_name = $paper_info['ConferenceName'];
		                            $cnt[$conf_name]+=1;

		                            echo "<td> <a href=\"/paper.php?paper_id=$paper_id\">$paper_title</a> </td>";

		                            # 请增加根据paper id在PaperAuthorAffiliations与Authors两个表中进行联合查询，找到根据AuthorSequenceNumber排序的作者列表，并且显示出来的部分
		                            echo "<td>";
		                            $res = mysqli_query($link, "SELECT B.AuthorID,B.AuthorName FROM paper_author_affiliation AS A INNER JOIN authors AS B ON A.AuthorID = B.AuthorID WHERE A.PaperID = '$paper_id' ORDER BY A.AuthorSequence ");
		                            $all=array("name"=>$author_name);
		                            $chilren = array();
		                            while($t = mysqli_fetch_array($res)){
		                                $isin = in_array($t['AuthorName'],$all);
		                                if(!$isin){
		                                    $chilren[]=array("name"=>$t['AuthorName']);
		                                }
		                                $tmp1 = $t['AuthorID'];
		                                $tmp2 = $t['AuthorName'];
		                                echo "<a href=\"/author.php?author_id=$tmp1&page=1\">$tmp2; </a>";
		                            }
		                            $all["children"]=$chilren;
		                            $all = json_encode($all);
		                            echo "</td>";
		                            
		                            echo "<td>";
		                            $res = mysqli_query($link, "SELECT ConferenceName from conferences where ConferenceID = '$conf_id'");
		                            if($res){
		                                while($t = mysqli_fetch_array($res)){
		                                    $tmp = $t['ConferenceName'];
		                                    echo "<a href=\"/conference.php?conference_id=$conf_id&page=1\">$tmp</a>";
		                                }
		                            }

		                            echo "</td>";
		                            echo "</tr>";
		                        }
		                        echo "</table>";    
		                        $cnt = json_encode($cnt);
		                    }

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

			                echo "<li><a href=\"/author.php?page=$pre&author_id=$author_id\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b><<</b></span></a></li>";
			                for($i=($n*10-9);$i<=min($n*10,$final_page);$i++){
			                    if($i==$cur_page){
			                        echo "<li><a href=\"/author.php?page=$i&author_id=$author_id\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b>$i</b></span></a></li>";
			                    }else{
			                        echo "<li><a href=\"/author.php?page=$i&author_id=$author_id\"><span aria-hidden=\"true\">$i</span></a></li>";
			                    }

			                }
			                echo "<li><a href=\"/author.php?page=$next&author_id=$author_id\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b>>></b></span></a></li>";
			                echo "<li><a href=\"/author.php?page=$final_page&author_id=$author_id\" aria-label=\"Previous\"><span aria-hidden=\"true\"><b>$final_page</b></span></a></li>";
			            ?>
			        </ul>
			        <form action="/author.php">
			            <input type="hidden" name="author_id" value="<?php echo $author_id?>">
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
   								 <div id="main" style="width: 300px;height:300px;margin-left:auto;margin-right:auto;"></div>
						</div>
						<div class="categories w3ls-categories">
							<h3>Co-Author</h3>
   								 <div id="relationship" style="width: 330px;height:300px;margin-left:auto;margin-right:auto;"></div>
						</div>
						<div class="categories w3ls-categories">
							<h3>Conferences</h3>
   								    <div id="pie" style="width: 270px;height:300px;margin-left:auto;margin-right:auto;"> </div>
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
        myChart.showLoading()
        // 指定图表的配置项和数据
        var option = {

            tooltip: {},
            legend: {
                data:['Number']
            },
            xAxis: {
                data: []
            },
            yAxis: {},
            series: [{
                name: 'Number',
                type: 'bar',
                data: []
            }]
        };
        myChart.setOption(option);
/*
        $.get("/authorconf.php?author_id=<?php echo $author_id?>",function (data) {
            alert(data);
            myChart.setOption({
                xAxis: {
                    data: data.Xdata
                },
                series: [{
                    // 根据名字对应到相应的系列
                    name: 'Number',
                    data: data.Ydata
                }]
            });
        },'json');
        // 使用刚指定的配置项和数据显示图表。
      
*/
        $.ajax({
            type:"GET",
            url:"/authorconf.php?author_id=<?php echo $author_id ?>",
            dataType:"json",
            success:function(data){
                myChart.hideLoading();
                myChart.setOption({
                    xAxis: {
                        data: data.Xdata
                    },
                    series: [{
                        name: 'Number',
                        data: data.Ydata
                    }]
                });
            },error:function(){
                alert("fail");
            }
        });

        var myChart1 = echarts.init(document.getElementById("relationship"));
        var data1 = <?php echo $all ?>;

        myChart1.setOption(option = {
 
            tooltip: {
                trigger: 'item',
                triggerOn: 'mousemove'
            },
            series: [
                {
                    type: 'tree',
                    data: [data1],

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
        if (option && typeof option === "object") {
            myChart1.setOption(option, true);
        }
    </script>
    <script>
        var cnt = <?php echo $cnt?>;
        piechart = echarts.init(document.getElementById("pie"));
        piedata = new Array();
        for(x in cnt){
            if(cnt[x]!=0){
                var tmp = {"value":cnt[x],"name":x};
                piedata.push(tmp);
            }
        }
        console.log(piedata);
        option = {

            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b}: {c} ({d}%)"
            },
            legend: {
                orient: 'vertical',
                x: 'right'
            },
            series: [
                {
                    name:'Conferences',
                    type:'pie',
                    radius: ['50%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                        normal: {
                            show: false,
                            position: 'center'
                        },
                        emphasis: {
                            show: true,
                            textStyle: {
                                fontSize: '30',
                                fontWeight: 'bold'
                            }
                        }
                    },
                    labelLine: {
                        normal: {
                            show: false
                        }
                    },
                    data:piedata
                }
            ]
        };
        ;
        if (option && typeof option === "object") {
            piechart.setOption(option, true);
        }   
    </script>
</html>