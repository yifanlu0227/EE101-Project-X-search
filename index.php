<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HomePage</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/demo.css" />
  <link rel="stylesheet" href="css/templatemo-style.css">
  <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"> </script>  
  <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
  <style>
  	.col-md-7 col-sm-7 col-xs-7{
  		width:1000px;
  	}
  	h1,p{
  		postion:absolute;
  	}
    .suggest {
    	color:black;
    	margin:0 auto;
      	width: 720px;
      	top: 40px;
      	background: #fff;
      	.opacity: 0.7;
      	border-radius:15px;
    }

    .suggest ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .suggest ul li {
      padding: 10px;
      font-size: 20px;
      line-height: 30px;
      cursor: pointer;
    }

    .suggest ul li:hover {
      background-color: #e5e5e5
    }
  </style>
	</head>

	<body>

			<div id="particles-js"></div>
		
			<ul class="cb-slideshow">
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	        </ul>

			<div class="container-fluid">
				<h1><a class="navbar-brand" href="index.php" style="font-size: 30px"> <span>X</span>Search</a></h1>
				<div class="row cb-slideshow-text-container ">
					<div class= "tm-content col-xl-6 col-sm-8 col-xs-8 ml-auto section">
					<header class="mb-5"><h1>Start Searching Your Paper</h1></header>
					<P class="mb-5">Paper Title/Author Name/Conference Name</P>
					
                    <form action="/search.php" method="get" class="subscribe-form">
               	    	<div class="row form-section">

							<div class="col-md-7 col-sm-7 col-xs-7">
								  <input type="hidden" name="page" value=1>
			                      <input name="content" type="text" class="form-control" id="search-input-text" autocomplete="off" onkeyup="ShowHint(this.value);"  onfocus="ShowHint(this.value);" onblur="clearContent()" style="width:500px"/>
				  			</div>
							<div class="col-md-5 col-sm-5 col-xs-5">
								<button type="submit" class="tm-btn-subscribe">Search</button>
							</div>
							    <div class="suggest" id="suggest">
							       <ul id="search-result">
							       </ul>
							    </div>	
						</div>
                    </form>
                    
					</div>
				</div>	
			</div>	
	</body>

<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>

<script tyep="text/javascript">
	var searchResult = document.getElementById("search-result");
	function clearContent(){
		var size = searchResult.childNodes.length;
		for(var i=size-1;i>=0;i--){
			searchResult.removeChild(searchResult.childNodes[i]);
		}
	}
  function Autocomplete(tmp){
    $("#search-input-text").val(tmp.innerText);
  }
	function ShowHint(str){

		if(str.length!=0){
			$.get("/hint.php",{str:str},function(data,status){
				clearContent();
				for(var i=0;i<data.length;i++){
          var lihtml='<li onmouseover="Autocomplete(this);" onmousedown="jump(this);">'+data[i]+'</li>';
					$("#search-result").append(lihtml);
				}
			},"JSON");
		}else{
      clearContent();
      return;
    }
	}
	function jump(str){
		window.open("/search.php?page=1&content="+str.innerText);
	}
</script>
</html>