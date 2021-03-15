<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Paper Page</title>
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
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
       <script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
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

<div style="height: 100%;width:1200px; margin: 0 auto;text-align: center;background-color: rgba(255,255,255,0.5)">
		<br><br><br><br>
       <div id="container" style="height: 600px;width:1200px;margin:0 auto;"></div>
       <br><br><br><br>
        <div id="AllConf" style="height: 600px;width:1200px;margin:0 auto;"></div>

    
        <br><br><br><br>
        <div id="ReferencerRank" style="height: 500px;width:1200px;margin:0 auto;"> </div>
        <br><br><br><br>
        <div id="AllYear" style="height: 700px;width:1200px;margin:0 auto;"></div>
    

</div>
       <script type="text/javascript">
var dom = document.getElementById("container");
var myChart = echarts.init(dom);
var app = {};
option = null;

var conferences = ['ECCV','NIPS','SIGKDD','WWW','SIGIR','CVPR','ICCV','NAACL','ICML','AAAI','ACL','EMNLP','IJCAI'];
var years = ['1976-1981', '1982-1986', '1987-1991','1992-1996', '1997-2001', '2002-2006', '2007-2011','2012-2016'];

var data = [[0, 0, 0], [0, 1, 0], [0, 2, 112], [0, 3, 447], [0, 4, 565], [0, 5, 932], [0, 6, 699], [0, 7, 1823], [1, 0, 0], [1, 1, 23], [1, 2, 770], [1, 3, 1245], [1, 4, 1394], [1, 5, 1494], [1, 6, 2061], [1, 7, 1919], [2, 0, 0], [2, 1, 0], [2, 2, 0], [2, 3, 232], [2, 4, 653], [2, 5, 1158], [2, 6, 2075], [2, 7, 2124], [3, 0, 0], [3, 1, 1], [3, 2, 126], [3, 3, 347], [3, 4, 1150], [3, 5, 2086], [3, 6, 2184], [3, 7, 3000], [4, 0, 127], [4, 1, 205], [4, 2, 318], [4, 3, 289], [4, 4, 548], [4, 5, 731], [4, 6, 1425], [4, 7, 1406], [5, 0, 0], [5, 1, 45], [5, 2, 536], [5, 3, 1114], [5, 4, 1342], [5, 5, 2027], [5, 6, 3591], [5, 7, 3156], [6, 0, 0], [6, 1, 0], [6, 2, 261], [6, 3, 498], [6, 4, 926], [6, 5, 667], [6, 6, 2458], [6, 7, 2083], [7, 0, 0], [7, 1, 47], [7, 2, 225], [7, 3, 290], [7, 4, 455], [7, 5, 976], [7, 6, 1036], [7, 7, 959], [8, 0, 0], [8, 1, 1], [8, 2, 405], [8, 3, 338], [8, 4, 592], [8, 5, 1592], [8, 6, 1765], [8, 7, 1823], [9, 0, 97], [9, 1, 664], [9, 2, 993], [9, 3, 1075], [9, 4, 1194], [9, 5, 1587], [9, 6, 2719], [9, 7, 4002], [10, 0, 436], [10, 1, 363], [10, 2, 325], [10, 3, 365], [10, 4, 1099], [10, 5, 1476], [10, 6, 2014], [10, 7, 2248], [11, 0, 0], [11, 1, 0], [11, 2, 0], [11, 3, 0], [11, 4, 48], [11, 5, 375], [11, 6, 751], [11, 7, 1368], [12, 0, 771], [12, 1, 698], [12, 2, 1218], [12, 3, 946], [12, 4, 985], [12, 5, 1025], [12, 6, 1950], [12, 7, 2064]];

option = {
	title:{
		text:"3d Bar of Papers in Different Year and Conf",
		left:'center'
	},
    tooltip: {},
    visualMap: {
        max: 3000,
        inRange: {
            color: ['#313695','#313695','#313695', '#4575b4', '#74add1', '#abd9e9', '#e0f3f8', '#ffffbf', '#fee090', '#fdae61', '#f46d43', '#d73027', '#a50026']
        }
    },
    xAxis3D: {
        type: 'category',
        data: years
    },
    yAxis3D: {
        type: 'category',
        data: conferences
    },
    zAxis3D: {
        type: 'value'
    },
    grid3D: {
        boxWidth: 200,
        boxDepth: 80,
        light: {
            main: {
                intensity: 1.2
            },
            ambient: {
                intensity: 0.3
            }
        }
    },
    series: [{
        type: 'bar3D',
        data: data.map(function (item) {
            return {
                value: [item[1], item[0], item[2]]
            }
        }),
        shading: 'color',

        label: {
            show: false,
            textStyle: {
                fontSize: 16,
                borderWidth: 1
            }
        },
        
        itemStyle: {
            opacity: 0.4
        },

        emphasis: {
            label: {
                textStyle: {
                    fontSize: 20,
                    color: '#900'
                }
            },
            itemStyle: {
                color: '#900'
            }
        }
    }]
}
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>


   <script type="text/javascript">

var myChart = echarts.init(document.getElementById("ReferencerRank"));	

var dataAxis = ['histograms of oriented gradients for human detection','latent dirichlet allocation','bleu a method for automatic evaluation of machine translation','beyond bags of features spatial pyramid matching for recognizing natural scene categories','rapid object detection using a boosted cascade of simple features','conditional random fields probabilistic models for segmenting and labeling sequence data','statistical phrase based translation','normalized cuts and image segmentation','minimum error rate training in statistical machine translation','an iterative image registration technique with an application to stereo vision','optimizing search engines using clickthrough data','object recognition from local scale invariant features','video google a text retrieval approach to object matching in videos','object class recognition by unsupervised scale invariant learning','on spectral clustering analysis and an algorithm','imagenet a large scale hierarchical image database','discriminative training methods for hidden markov models theory and experiments with perceptron algorithms','imagenet classification with deep convolutional neural networks','probabilistic latent semantic indexing','accurate unlexicalized parsing','normalized cuts and image segmentation','fast approximate energy minimization via graph cuts','a language modeling approach to information retrieval','learning realistic human actions from movies','maximizing the spread of influence through a social network','a study of smoothing methods for language models applied to ad hoc information retrieval','max margin markov networks','learning with local and global consistency','visual categorization with bags of keypoints','scalable recognition with a vocabulary tree','a maximum entropy inspired parser','adaptive background mixture models for real time tracking','robust real time face detection','eigenfaces vs fisherfaces recognition using class specific linear projection','a hierarchical phrase based model for statistical machine translation','distance metric learning with application to clustering with side information','a taxonomy and evaluation of dense two frame stereo correspondence algorithms','mining and summarizing customer reviews','experiments with a new boosting algorithm','the use of mmr diversity based reranking for reordering documents and producing summaries','a comparative study on feature selection in text categorization','fast approximate energy minimization via graph cuts','a database of human segmented natural images and its application to evaluating segmentation algorithms and measuring ecological statistics','transductive inference for text classification using support vector machines','the weka data mining software an update','a discriminatively trained multiscale deformable part model','unsupervised word sense disambiguation rivaling supervised methods','semi supervised learning using gaussian fields and harmonic functions','algorithms for non negative matrix factorization','relevance based language models','active appearance models','learning to rank using gradient descent','describing objects by their attributes','what energy functions can be minimized via graph cuts','training linear svms in linear time','improved statistical alignment models','uci repository of machine learning databases','linear spatial pyramid matching using sparse coding for image classification','object retrieval with large vocabularies and fast spatial matching','feature rich part of speech tagging with a cyclic dependency network','bundle adjustment a modern synthesis','item based collaborative filtering recommendation algorithms','a performance evaluation of local descriptors','learning to detect unseen object classes by between class attribute transfer','online large margin training of dependency parsers','moses open source toolkit for statistical machine translation','real time tracking of non rigid objects using mean shift','what is twitter a social network or a news media','learning accurate compact and interpretable tree annotation','incorporating non local information into information extraction systems by gibbs sampling','word association norms mutual information and lexicography','wordnet a lexical database for english','poselets body part detectors trained using 3d human pose annotations','hierarchical model based motion estimation','thumbs up or thumbs down semantic orientation applied to unsupervised classification of reviews','what can be seen in three dimensions with an uncalibrated stereo rig','coarse to fine n best parsing and maxent discriminative reranking','active appearance models','an efficient boosting algorithm for combining preferences','geodesic active contours','good features to track','laplacian eigenmaps and spectral techniques for embedding and clustering','support vector machine learning for interdependent and structured output spaces','a re examination of text categorization methods','a syntax based statistical translation model','a comparison and evaluation of multi view stereo reconstruction algorithms','an empirical study of smoothing techniques for language modeling','cheap and fast but is it good evaluating non expert annotations for natural language tasks','the pyramid match kernel discriminative classification with sets of image features','locality constrained linear coding for image classification','rich feature hierarchies for accurate object detection and semantic segmentation','recognizing action at a distance','a bayesian hierarchical model for learning natural scene categories','textonboost joint appearance shape and context modeling for multi class object recognition and segmentation','interactive graph cuts for optimal boundary region segmentation of objects in n d images','distributional clustering of english words','learning the kernel matrix with semi definite programming','topic sensitive pagerank','shallow parsing with conditional random fields','improving web search ranking by incorporating user behavior information','query expansion using local and global document analysis','accurately interpreting clickthrough data as implicit feedback','the feret evaluation methodology for face recognition algorithms','fast pose estimation with parameter sensitive hashing','improving the fisher kernel for large scale image classification','three generative lexicalised models for statistical parsing','overview of the face recognition grand challenge','scalable inference and training of context rich syntactic translation models','contour tracking by stochastic propagation of conditional density','document language models query models and risk minimization for information retrieval','some simple effective approximations to the 2 poisson model for probabilistic weighted retrieval','improved inference for unlexicalized parsing','discriminative training and maximum entropy models for statistical machine translation','unsupervised learning of models for recognition','learning structural svms with latent variables','a statistical method for 3d object detection applied to faces and cars','automatic labeling of semantic roles','eigenfaces vs fisherfaces recognition using class specific linear projection','face recognition using eigenfaces','maximum entropy markov models for information extraction and segmentation','a density based algorithm for discovering clusters in large spatial databases with noise','automatic evaluation of summaries using n gram co occurrence statistics','fields of experts a framework for learning image priors','extracting product features and opinions from reviews','geometric context from a single image','distance metric learning for large margin nearest neighbor classification','recognizing contextual polarity in phrase level sentiment analysis','an algorithmic framework for performing collaborative filtering','combined object categorization and segmentation with an implicit shape model','automatic retrieval and clustering of similar words','an information theoretic definition of similarity','multiple kernels for object detection','computing semantic relatedness using wikipedia based explicit semantic analysis','mining the network value of customers','automatic retrieval and clustering of similar words','articulated body motion capture by annealed particle filtering','statistical significance tests for machine translation evaluation','using multiple segmentations to discover objects and their extent in image collections','generating query substitutions','dynamic topic models','constrained k means clustering with background knowledge','reinforcement learning an introduction','bilateral filtering for gray and color images','recovering non rigid 3d shape from image streams','attribute and simile classifiers for face verification','performance of optical flow techniques','earthquake shakes twitter users real time event detection by social sensors','automatic labeling of semantic roles','a markov random field model for term dependencies','supervised topic models','fast effective rule induction','the berkeley framenet project','what s in a translation rule','modeling annotated data','three generative lexicalised models for statistical parsing','locality preserving projections','novelty and diversity in information retrieval evaluation','multi camera scene reconstruction via graph cuts','a sequential algorithm for training text classifiers','convolutional deep belief networks for scalable unsupervised learning of hierarchical representations','space time interest points','support vector machines for multiple instance learning','the pascal recognising textual entailment challenge','view based and modular eigenspaces for face recognition','a trainable document summarizer','multiple kernel learning conic duality and the smo algorithm','factorization meets the neighborhood a multifaceted collaborative filtering model','object recognition as machine translation learning a lexicon for a fixed image vocabulary','sharing features efficient boosting procedures for multiclass object detection','lost in quantization improving particular object retrieval in large scale image databases','semantic texton forests for image categorization and segmentation','action recognition by dense trajectories','yago a core of semantic knowledge','thumbs up or thumbs down','probabilistic matrix factorization','robust real time face detection','toward an architecture for never ending language learning','high accuracy optical flow estimation based on a theory for warping','non projective dependency parsing using spanning tree algorithms','neural network based face detection','tracking people with twists and exponential maps','texture synthesis by non parametric sampling','cost effective outbreak detection in networks','actions in context','the berkeley framenet project','pedestrian detection in crowded scenes','efficient sparse coding algorithms','visual tracking with online multiple instance learning','syntactic clustering of the web','rank aggregation methods for the web','a support vector method for multivariate performance measures','learning dictionaries for information extraction by multi level bootstrapping','information retrieval as statistical translation','regularized multi task learning','domain adaptation with structural correspondence learning','learning object categories from google s image search','scatter gather a cluster based approach to browsing large document collections','predicting query performance','learning low level vision','an affine invariant interest point detector','objects in context','ensemble of exemplar svms for object detection and beyond','information diffusion through blogspace','stochastic tracking of 3d human figures using 2d image motion','pca sift a more distinctive representation for local image descriptors','pictorial structures revisited people detection and articulated pose estimation','maximum margin matrix factorization','learning to rank for information retrieval','generalized belief propagation','scale space filtering','using information content to evaluate semantic similarity in a taxonomy','discovering objects and their location in images','self tuning spectral clustering','lambertian reflectance and linear subspaces','putting objects in perspective','meme tracking and the dynamics of the news cycle','clause restructuring for statistical machine translation','a non local algorithm for image denoising','a new method for solving hard satisfiability problems','lda based document models for ad hoc retrieval','agglomerative clustering of a search engine query log','optimizing binary mrfs via extended roof duality','unsupervised models for named entity classification','robust online appearance models for visual tracking','a factorization based algorithm for multi image projective structure and motion','svm knn discriminative nearest neighbor classification for visual category recognition','word representations a simple and general method for semi supervised learning','decomposing a scene into geometric and semantically consistent regions','neighbourhood components analysis','co clustering documents and words using bipartite spectral graph partitioning','metric learning by collapsing classes','robust fragments based tracking using the integral histogram','alignment by agreement','convolution kernels for natural language','mining the peanut gallery opinion extraction and semantic classification of product reviews','learning surface text patterns for a question answering system','face detection pose estimation and landmark localization in the wild','object categorization by learned universal visual dictionary','collaborative filtering with temporal dynamics','random features for large scale kernel machines','mining knowledge sharing sites for viral marketing','a spectral technique for correspondence problems using pairwise constraints','aggregating local descriptors into a compact image representation','learning mid level features for recognition','predicting clicks estimating the click through rate for new ads','statistical parsing with a context free grammar and word statistics','a theory of shape by space carving','hamming embedding and weak geometric consistency for large scale image search','information theoretic co clustering','online learning for latent dirichlet allocation','the foundations of cost sensitive learning','multiscale conditional random fields for image labeling','document clustering based on non negative matrix factorization','a sentimental education sentiment analysis using subjectivity summarization based on minimum cuts','articulated pose estimation with flexible mixtures of parts','probabilistic matrix factorization','understanding belief propagation and its generalizations','retrieval evaluation with incomplete information','shape matching and object recognition using low distortion correspondences','detecting pedestrians using patterns of motion and appearance','learning to rank from pairwise approach to listwise approach','distant supervision for relation extraction without labeled data','im2gps estimating geographic information from a single image','eigentracking robust matching and tracking of articulated objects using a view based representation','on line boosting and vision','training support vector machines an application to face detection','dependency tree kernels for relation extraction','bursty and hierarchical structure in streams','self taught learning transfer learning from unlabeled data','variations in relevance judgments and the measurement of retrieval effectiveness','graph based visual saliency','correlated topic models','saliency detection a spectral residual approach','greedy layer wise training of deep networks','matching local self similarities across images and videos','on kernel target alignment','exploiting generative models in discriminative classifiers','distributed representations of words and phrases and their compositionality','fast planning through planning graph analysis','pegasos primal estimated sub gradient solver for svm','a new statistical parser based on bigram lexical dependencies','total recall automatic query expansion with a generative feature model for object retrieval','group formation in large social networks membership growth and evolution','object recognition with features inspired by visual cortex','statistical decision tree models for parsing','textrank bringing order into texts','iterative quantization a procrustean approach to learning binary codes','class specific top down segmentation','boosting the margin a new explanation for the effectiveness of voting methods','color based probabilistic tracking','in defense of nearest neighbor based image classification','understanding user goals in web search','simple semi supervised dependency parsing','a multiple baseline stereo','efficient belief propagation for early vision','a phrase based joint probability model for statistical machine translation','self calibration and metric reconstruction in spite of varying and unknown internal camera parameters','image classification using random forests and ferns','discriminative reranking for natural language parsing','beyond sliding windows object localization by efficient subwindow search','fast maximum margin matrix factorization for collaborative prediction','kernelized locality sensitive hashing for scalable image search','multi paragraph segmentation of expository text','segmentation using eigenvectors a unifying view','semi supervised on line boosting for robust tracking','a simple rule based part of speech tagger','learning a classification model for segmentation','pushing the envelope planning propositional logic and stochastic search','locus learning object classes with unsupervised segmentation','distance metric learning for large margin nearest neighbor classification','learning a sparse representation for object detection','computing visual correspondence with occlusions using graph cuts','on feature combination for multiclass object classification','predicting the semantic orientation of adjectives','dependency treelet translation syntactically informed phrasal smt','a probabilistic framework for semi supervised clustering','a framework for multiple instance learning','query expansion using lexical semantic relations','local features and kernels for classification of texture and object categories a comprehensive study','multiclass spectral clustering','small codes and large image databases for recognition','scaling personalized web search','discriminative random fields a discriminative framework for contextual interaction in classification','thumbs up sentiment classification using machine learning techniques','object segmentation by long term analysis of point trajectories','surf speeded up robust features','improving machine learning approaches to coreference resolution','decaf a deep convolutional activation feature for generic visual recognition','frequency tuned salient region detection','hard and easy distributions of sat problems','high accuracy stereo depth maps using structured light','indoor segmentation and support inference from rgbd images','learning hierarchical models of scenes objects and parts','learning from labeled and unlabeled data using graph mincuts','camera self calibration theory and experiments','rouge a package for automatic evaluation of summaries','learning visual attributes','a program for aligning sentences in bilingual corpora','detection of multiple partially occluded humans in a single image by bayesian combination of edgelet part detectors','large scale named entity disambiguation based on wikipedia data','correcting sample selection bias by unlabeled data','a support vector method for optimizing average precision','interpretation as abduction','fast discovery of association rules','actions as space time shapes','geometric hashing a general and efficient model based recognition scheme','topic sentiment mixture modeling facets and opinions in weblogs','struck structured output tracking with kernels','a dynamic bayesian network click model for web search ranking','non parametric local transforms for computing visual correspondence','contrastive estimation training log linear models on unlabeled data','unsupervised discovery of mid level discriminative patches','detecting people using mutually consistent poselet activations','probabilistic cfg with latent annotations','a boosted particle filter multitarget detection and tracking','efficient influence maximization in social networks','visual tracking decomposition','3d people tracking with gaussian process dynamical models','toward optimal active learning through sampling estimation of error reduction','people tracking by detection and people detection by tracking','beyond independent relevance methods and evaluation metrics for subtopic retrieval','multi interval discretization of continuous valued attributes for classification learning','new ranking algorithms for parsing and tagging kernels over discrete structures and the voted perceptron','improved algorithms for topic distillation in a hyperlinked environment','context based vision system for place and object recognition','associative hierarchical crfs for object class image segmentation','propagation of trust and distrust','effective self training for parsing','unbiased look at dataset bias','online convex programming and generalized infinitesimal gradient ascent','computing geodesics and minimal surfaces via graph cuts','stereo from uncalibrated cameras','efficient matching of pictorial structures','sun database large scale scene recognition from abbey to zoo','large language models in machine translation','an empirical study of smoothing techniques for language modeling','integrating topics and syntax','a dual coordinate descent method for large scale linear svm','reading tea leaves how humans interpret topic models','searching distributed collections with inference networks','get another label improving data quality and data mining using multiple noisy labelers','why we twitter understanding microblogging usage and communities','learning hierarchical invariant spatio temporal features for action recognition with independent subspace analysis','3 d model based tracking of humans in action a multi view approach','inferring web communities from link topology','an hog lbp human detector with partial occlusion handling','hierarchically classifying documents using very few words','forest reranking discriminative parsing with non local features','tracking loose limbed people','names and faces in the news','indexing based on scale invariant interest points','paraphrasing with bilingual parallel corpora','mrf optimization via dual decomposition message passing revisited','are we ready for autonomous driving the kitti vision benchmark suite','wallflower principles and practice of background maintenance','pivoted document length normalization','cascade object detection with deformable part models','how reliable are the results of large scale information retrieval experiments','partially labeled classification with markov random walks','semantic taxonomy induction from heterogenous evidence','apprenticeship learning via inverse reinforcement learning','alignment by maximization of mutual information','fast exact inference with a factored model for natural language parsing','human detection based on a probabilistic assembly of robust part detectors','hashing with graphs','recovering human body configurations combining segmentation and recognition','topics over time a non markov continuous time model of topical trends','action bank a high level representation of activity in video','the multidimensional wisdom of crowds','automatic image annotation and retrieval using cross media relevance models','text classification using string kernels','relational learning via collective matrix factorization','modeling mutual context of object and human pose in human object interaction activities','spectral relaxation for k means clustering','reexamining the cluster hypothesis scatter gather on retrieval results','coupled hidden markov models for complex action recognition','learning methods for generic object recognition with invariance to pose and lighting','incremental parsing with the perceptron algorithm','a unified architecture for natural language processing deep neural networks with multitask learning','an analysis of time dependent planning','an exemplar model for learning object classes','classification using intersection kernel support vector machines is efficient','some advances in transformation based part of speech tagging','using contours to detect and localize junctions in natural images','a bayesian approach to unsupervised one shot learning of object categories','personalizing search via automated analysis of interests and activities','discovering object categories in image collections','smoothness in layers motion segmentation using nonparametric mixture estimation','hierarchical topic models and the nested chinese restaurant process','adapting visual category models to new domains','an end to end discriminative approach to machine translation','region covariance a fast descriptor for detection and classification','comprehensive database for facial expression analysis','estimation of relative camera positions for uncalibrated cameras','visual recognition with humans in the loop','forest rescoring faster decoding with integrated language models','where the really hard problems are','policy gradient methods for reinforcement learning with function approximation','the tradeoffs of large scale learning','real time object detection for smart vehicles','fisher kernels on visual vocabularies for image categorization','simrank a measure of structural context similarity','a multiple hypothesis approach to figure tracking','learning to order things','employing em and pool based active learning for text classification','discovering word senses from text','tnt a statistical part of speech tagger','identifying relations for open information extraction','action mach a spatio temporal maximum average correlation height filter for action recognition','active learning with statistical models','learning extraction patterns for subjective expressions','3d generic object categorization localization and pose estimation','scalable influence maximization for prevalent viral marketing in large scale social networks','evaluating evaluation measure stability','modeling temporal structure of decomposable motion segments for activity classification','scene recognition and weakly supervised object localization with deformable part based models','learning to parse images of articulated bodies','hierarchical model based mo tion estimation','on the bursty evolution of blogspace','creating efficient codebooks for visual recognition','a hierarchical bayesian language model based on pitman yor processes','infinite latent feature models and the indian buffet process','inferring 3d body pose from silhouettes using activity manifold learning','algorithms for inverse reinforcement learning','query chains learning to rank from implicit feedback','graph cut based inference with co occurrence statistics','learning to extract symbolic knowledge from the world wide web','blocks world revisited image understanding using qualitative geometry and mechanics','reducing multiclass to binary a unifying approach for margin classifiers','active learning with statistical models','hierarchical classification of web content','radiometric self calibration','automatic attribute discovery and characterization from noisy web data','boosting for transfer learning','learning user interaction models for predicting web search result preferences','automatically generating extraction patterns from untagged text','the cmu pose illumination and expression pie database','multiple instance boosting for object detection','a latent variable model for geographic lexical variation','random walks on the click graph','learning to hash with binary reconstructive embeddings','biographies bollywood boomboxes and blenders domain adaptation for sentiment classification','orthogonal nonnegative matrix t factorizations for clustering','instance weighting for domain adaptation in nlp','limits on super resolution and how to break them','a web based kernel function for measuring the similarity of short text snippets','dynamic 3d models with local and global deformations deformable superquadrics','extracting and composing robust features with denoising autoencoders','unsupervised learning of invariant feature hierarchies with applications to object recognition','predictive representations of state','learning to rank with nonsmooth cost functions','a comparative study of energy minimization methods for markov random fields','point based value iteration an anytime algorithm for pomdps','spatial priors for part based recognition using statistical models','efficient visual event detection using volumetric features','contextual models for object detection using boosted random fields','statistics of natural images and models','city scale location recognition','meteor an automatic metric for mt evaluation with improved correlation with human judgments','a study of retrospective and on line event detection','pachinko allocation dag structured mixture models of topic correlations','extracting paraphrases from a parallel corpus','interactive image segmentation using an adaptive gmmrf model','online dictionary learning for sparse coding','using the forest to see the trees a graphical model relating features objects and scenes','symmetric stereo matching for occlusion handling','investigating behavioral variability in web search','automatic camera recovery for closed or open image sequences','baby talk understanding and generating simple image descriptions','learning to localize objects with structured output regression','verbs semantics and lexical selection','diffusion kernels on graphs and other discrete input spaces','feature extraction from faces using deformable templates','corpus based induction of syntactic structure models of dependency and constituency','a user browsing model to predict search engine click data from past observations','from contours to regions an empirical evaluation','bramble a bayesian multiple blob tracker','a biologically inspired system for action recognition','what energy functions can be minimized via graph cuts','secrets of optical flow estimation and their principles','immediate head parsing for language models','real time human pose recognition in parts from single depth images','transductive learning via spectral graph partitioning','information theoretic metric learning','3d model acquisition from extended image sequences','fast image deconvolution using hyper laplacian priors','comparison of graph cuts with belief propagation for stereo using identical mrf parameters','a global matching framework for stereo computation','collaborative topic modeling for recommending scientific articles','what where and who classifying events by scene and object recognition','geodesic active contours','constrained parametric min cuts for automatic object segmentation','event detection in crowded videos','recognizing realistic actions from videos in the wild','photorealistic scene reconstruction by voxel coloring','noun classification from predicate argument structures','cluster kernels for semi supervised learning','pivoted document length normalization','recovering the spatial layout of cluttered rooms','learning systems of concepts with an infinite relational model','you ll never walk alone modeling social behavior for multi target tracking','real time human pose recognition in parts from single depth images','ohsumed an interactive retrieval evaluation and new large test collection for research','automatic identification of user goals in web search','the missing link a probabilistic model of document content and hypertext connectivity','deriving intrinsic images from image sequences','learning globally consistent local distance functions for shape based image retrieval and classification','whose vote should count more optimal integration of labels from labelers of unknown expertise','global data association for multi object tracking using network flows','wrapper induction for information extraction','what you saw is not what you get domain adaptation using asymmetric kernel transforms','prototype driven learning for sequence models','learning non isomorphic tree mappings for machine translation','hidden markov support vector machines','cluster based retrieval using language models','context aware query suggestion by mining click through and session data','sparse gaussian processes using pseudo inputs','forest based translation','adarank a boosting algorithm for information retrieval','noise strategies for improving local search','nymble a high performance learning name finder','finding parts in very large corpora','labeled lda a supervised topic model for credit attribution in multi labeled corpora','training structural svms when exact inference is intractable','multi view matching for unordered image sets or how do i organize my holiday snaps','pranking with ranking','newsweeder learning to filter netnews','image segmentation by data driven markov chain monte carlo','analyzing appearance and contour based methods for object categorization','topic modeling beyond bag of words','online large margin training of syntactic and structural translation features','learning to paraphrase an unsupervised approach using multiple sequence alignment','learning crfs using graph cuts','multiple bernoulli relevance models for image and video annotation','friendship and mobility user movement in location based social networks','maximum margin clustering','autocalibration from planar scenes','utility data annotation with amazon mechanical turk','on line new event detection and tracking','supervised hashing with kernels','support vector tracking','r max a general polynomial time algorithm for near optimal reinforcement learning','detecting pedestrians using patterns of motion and appearance','segmentation and recognition using structure from motion point clouds','recognition using regions','on discriminative vs generative classifiers a comparison of logistic regression and naive bayes','max margin parsing','multiple instance learning for natural scene classification','pedestrian detection a benchmark','integrating constraints and metric learning in semi supervised clustering','shape priors for level set representations','multilinear analysis of image ensembles tensorfaces','recognizing human actions by attributes','integrating classification and association rule mining','learning structured prediction models a large margin approach','locality sensitive binary codes from shift invariant kernels','markov games as a framework for multi agent reinforcement learning','towards answering opinion questions separating facts from opinions and identifying the polarity of opinion sentences','regression based latent factor models','calibrating features for semantic role labeling','learning and recognizing human dynamics in video sequences','a new algorithm for non rigid point matching','a metric for distributions with applications to image databases','parsing the wall street journal using a lexical functional grammar and discriminative estimation techniques','ranking on data manifolds','canonic representations for the geometries of multiple projective views','robust object tracking by hierarchical association of detection responses','distributional clustering of words for text classification','combining top down and bottom up segmentation','a shortest path dependency kernel for relation extraction','opinion observer analyzing and comparing opinions on the web','a new sense for depth of field','parsing natural scenes and natural language with recursive neural networks','stochastic neighbor embedding','metacost a general method for making classifiers cost sensitive','a neural probabilistic language model','information theoretic metric learning','integral histogram a fast way to extract histograms in cartesian spaces','improving text classification by shrinkage in a hierarchy of classes','non local sparse models for image restoration','semi supervised recursive autoencoders for predicting sentiment distributions','minimal test collections for retrieval evaluation','less is more probabilistic models for retrieving fewer relevant documents','mapping the world s photos','efficient object category recognition using classemes','a new string to dependency machine translation algorithm with a target dependency language model','multiclass object recognition with sparse localized features','modeling online reviews with multi grain topic models','face recognition with local binary patterns','generating project networks','robust higher order potentials for enforcing label consistency','catching the drift probabilistic content models with applications to generation and summarization','im2text describing images using 1 million captioned photographs','mixture models for optical flow computation','a study of cross validation and bootstrap for accuracy estimation and model selection','multi task gaussian process prediction','semantic segmentation with second order pooling','a simple and effective hierarchical phrase reordering model','chunking with support vector machines','geometric reasoning for single image structure recovery','three things everyone should know to improve object retrieval','a bayesian approach to digital matting','a low dimensional representation of human faces for arbitrary lighting conditions','probabilistic author topic models for information discovery','detecting unusual activity in video','scene summarization for online image collections','mining high speed data streams','characterizing browsing strategies in the world wide web','semantic compositionality through recursive matrix vector spaces','fast image search for learned metrics','the feret evaluation methodology for face recognition algorithms','dirt sbt discovery of inference rules from text','estimating 3d hand pose from a cluttered image','ir evaluation methods for retrieving highly relevant documents','estimating human body configurations using shape context matching','scene classification via plsa','map reduce for machine learning on multicore','viewpoint invariant pedestrian recognition with an ensemble of localized features','what is the best multi stage architecture for object recognition','minimum bayes risk decoding for statistical machine translation','methods and metrics for cold start recommendations','efficient pattern recognition using a new transformation distance','contour based learning for object detection','discovering relations among named entities from large corpora','an efficient solution to the five point relative pose problem','icondensation unifying low level and high level tracking in a stochastic framework','automatic identification of word translations from unrelated english and german corpora','online object tracking a benchmark','structural ambiguity and lexical relations','scaling to very very large corpora for natural language disambiguation','weighted low rank approximations','espresso leveraging generic patterns for automatically harvesting semantic relations','learning a distance metric from relative comparisons','sampling strategies for bag of features image classification','blind motion deblurring using image statistics','action recognition with improved trajectories','heterogeneous uncertainty sampling for supervised learning','a discriminative latent model of object classes and attributes','adaptive web search based on user profile constructed without any effort from users','nonlinear learning using local coordinate coding','autocalibration and the absolute quadric','learning bilingual lexicons from monolingual corpora','a model for learning the semantics of pictures','on line selection of discriminative tracking features','a maximum flow formulation of the n camera stereo correspondence problem','cnn features off the shelf an astounding baseline for recognition','adaptive duplicate detection using learnable string similarity measures','reflectance and texture of real world surfaces','learning the semantics of words and pictures','a unified mixture framework for motion segmentation incorporating spatial coherence and estimating the number of models','machine learning for high speed corner detection','a probabilistic approach to object recognition using local photometry and global geometry','mining opinion features in customer reviews','less is more active learning with support vector machines','semi supervised hashing for scalable image retrieval','shallow semantic parsing using support vector machines','multi view stereo for community photo collections','learning flexible sprites in video layers','fast human detection using a cascade of histograms of oriented gradients','robust subspace segmentation by low rank representation','3d human pose from silhouettes by relevance vector regression','microscopic evolution of social networks','conditional random fields for object recognition','semi markov conditional random fields for information extraction','learning spatial context using stuff to find things','efficient hierarchical graph based video segmentation','in defence of the 8 point algorithm','accurate dense and robust multi view stereopsis','word sense disambiguation using statistical methods','cascaded models for articulated pose estimation','rethinking lda why priors matter','reliable feature matching across widely separated views','on coreference resolution performance metrics','pedestrian detection from a moving vehicle','multiway cut for stereo and motion with slanted surfaces','measures of distributional similarity','finding and tracking people from the bottom up','summarizing text documents sentence selection and evaluation metrics','large scale image retrieval with compressed fisher vectors','learning gaussian processes from multiple tasks','learning query intent from regularized click graphs','structure and evolution of online social networks','aligning sentences in parallel corpora','two phase kernel estimation for robust motion deblurring','thinking inside the box using appearance models and context based on room geometry','semi supervised support vector machines','geometric blur for template matching','mining actionlet ensemble for action recognition with depth cameras','coupled detection and trajectory estimation for multi object tracking','randomized trees for real time keypoint recognition','eye tracking analysis of user behavior in www search','retrieval models for question and answer archives','action recognition based on a bag of 3d points','building rome on a cloudless day','fast discriminative visual codebooks using randomized clustering forests','is that you metric learning approaches for face identification','bayesian probabilistic matrix factorization using markov chain monte carlo','priors for people tracking from small training sets','recognizing human action in time sequential images using hidden markov model','a joint model of text and aspect ratings for sentiment summarization','dtam dense tracking and mapping in real time','reexamining the cluster hypothesis','motion segmentation and tracking using normalized cuts','optimizing web search using social annotations','vector based models of semantic composition','layered representation for motion analysis','shock graphs and shape matching','floor fields for tracking in high density crowd scenes','experiments with a higher order projective dependency parser','a performance evaluation of local descriptors','recognition using visual phrases','analyses of multiple evidence combination','a large scale evaluation and analysis of personalized search strategies','semantical considerations on nonmonotonic logic','efficient clustering of high dimensional data sets with application to reference matching','tuning as ranking','word association norms mutual information and lexicography','inside outside reestimation from partially bracketed corpora','using predicate argument structures for information extraction','a semantic approach to contextual advertising','model based tracking of self occluding articulated objects','a benchmark for the comparison of 3 d motion segmentation algorithms','weak hypotheses and boosting for generic object detection and recognition','a centering approach to pronouns','a contextual bandit approach to personalized news article recommendation','polylingual topic models','social influence analysis in large scale networks','part of speech tagging for twitter annotation features and experiments','improving recommendation lists through topic diversification','efficient methods for topic model inference on streaming document collections','object detection by contour segment networks','knowledge based weak supervision for information extraction of overlapping relations','saliency based on information maximization','single image motion deblurring using transparency','exponential family harmoniums with an application to information retrieval','discriminative learned dictionaries for local image analysis','morphable 3d models from video','globally optimal greedy algorithms for tracking a variable number of objects','the case against accuracy estimation for comparing induction algorithms','a sparse object category model for efficient learning and exhaustive recognition','implicit probabilistic models of human motion for synthesis and tracking','learning local image descriptors','every picture tells a story generating sentences from images','a mention synchronous coreference resolution algorithm based on the bell tree','seeing stars exploiting class relationships for sentiment categorization with respect to rating scales','a framework for the robust estimation of optical flow','adapting ranking svm to document retrieval','evaluating content selection in summarization the pyramid method','learning subjective adjectives from corpora','minimal loss hashing for compact binary codes','improving automatic query expansion','multi view stereo via volumetric graph cuts','gradient flows and geometric active contour models','spatio temporal relationship match video structure comparison for recognition of complex human activities','towards total scene understanding classification annotation and segmentation in an automatic framework','letor benchmark dataset for research on learning to rank for information retrieval','a space sweep approach to true multi image matching','viewing morphology as an inference process','learning syntactic patterns for automatic hypernym discovery','tagprop discriminative metric learning in nearest neighbor models for image auto annotation','scalable training of l 1 regularized log linear models','finding predominant word senses in untagged text','an efficient boosting algorithm for combining preferences','parsing the wsj using ccg and log linear models','super resolution from a single image','group lasso with overlap and graph lasso','object recognition using alignment','spatial depth super resolution for range images','learning a similarity metric discriminatively with application to face verification','wikirelate computing semantic relatedness using wikipedia','selection of scale invariant parts for object class recognition','predicting positive and negative links in online social networks','using statistical testing in the evaluation of retrieval experiments','formal models for expert finding in enterprise corpora','cover trees for nearest neighbor','an affine invariant salient region detector','the importance of encoding versus training with sparse coding and vector quantization','efficient identification of web communities','human detection via classification on riemannian manifolds','covariance tracking using model update based on lie algebra','the second release of the rasp system','an improved error model for noisy channel spelling correction','the layout consistent random field for recognizing and segmenting partially occluded objects','probabilistic tracking in a metric space','collective annotation of wikipedia entities in web text','a kernel method for multi labelled classification','clustering user queries of a search engine','person re identification by symmetry driven accumulation of local features','a practical approach to feature selection','chunking with support vector machines','domain adaptation for object recognition an unsupervised approach','on benchmarking camera calibration and multi view stereo for high resolution imagery','partitioned sampling articulated objects and interface quality hand tracking','matching constraints and the joint image','spectral segmentation with multiscale graph decomposition','class segmentation and object localization with superpixel neighborhoods','a boundary fragment model for object detection','kms a distributed hypermedia system for managing knowledge in organizations','class based construction of a verb lexicon','an accelerated gradient method for trace norm minimization','an empirical evaluation of deep architectures on problems with many factors of variation','providing a unified account of definite noun phrases in discourse','from learning models of natural image patches to whole image restoration','influence and correlation in social networks','decision lists for lexical ambiguity resolution application to accent restoration in spanish and french','arabic tokenization part of speech tagging and morphological disambiguation in one fell swoop','efficient construction of large test collections','space time behavior based correlation','depth and appearance for mobile scene analysis','the effect of adding relevance information in a relevance feedback environment','learning to cluster web search results','enriching the knowledge sources used in a maximum entropy part of speech tagger','semi supervised learning by entropy minimization','verbocean mining the web for fine grained semantic verb relations','stochastic completion fields a neural model of illusory contour shape and salience','discriminative clustering for image co segmentation','analysis of representations for domain adaptation','graphs over time densification laws shrinking diameters and possible explanations','psf estimation using sharp edge prediction','learning from one example through shared densities on transforms','phrasal cohesion and statistical machine translation','pedestrian detection using wavelet templates','probabilistic query expansion using query logs','sparse feature learning for deep belief networks','passage level evidence in document retrieval','picking the best daisy','discourse segmentation of multi party conversation','training algorithms for linear text classifiers','markov random fields with efficient approximations','maximum entropy based phrase reordering model for statistical machine translation','shape descriptors for non rigid shapes with a single closed contour','deepface closing the gap to human level performance in face verification','a mobile vision system for robust multi person tracking','reranking and self training for parser adaptation','learning a hierarchy of discriminative space time neighborhood features for human action recognition','rectified linear units improve restricted boltzmann machines','elliptical head tracking using intensity gradients and color histograms','reasoning about knowledge and action','a general framework for object detection','google news personalization scalable online collaborative filtering','generalized plan recognition','using the nystroem method to speed up kernel machines','a brief introduction to boosting','joint latent topic models for text and citations','object categorization using co occurrence location and appearance','from structure from motion point clouds to fast location recognition','retrieving actions in movies','spmt statistical machine translation with syntactified target language phrases','beyond the point cloud from transductive to semi supervised learning','simultaneous image classification and annotation','toward optimal feature selection','out of sample extensions for lle isomap mds eigenmaps and spectral clustering','a comparison of string distance metrics for name matching tasks','shared logistic normal distributions for soft parameter tying in unsupervised grammar induction','generic text summarization using relevance measure and latent semantic analysis','performance of optical flow techniques','optimizing semantic coherence in topic models','lifted first order belief propagation','information retrieval system evaluation effort sensitivity and reliability','visualizing and understanding convolutional networks','document clustering using word clusters via the information bottleneck method','mining time changing data streams','strike a pose tracking people by finding stylized poses','occlusions discontinuities and epipolar lines in stereo','context sensitive information retrieval using implicit feedback','models for metasearch','constraint propagation algorithms for temporal reasoning','recursive deep models for semantic compositionality over a sentiment treebank','a hierarchical model of shape and appearance for human action classification','a probabilistic approach to spatiotemporal theme pattern mining on weblogs','depth from edge and intensity based stereo','learning flexible models from image sequences','em algorithms for pca and spca','recognizing objects in range data using regional point descriptors','inside outside reestimation from partially bracketed corpora','learning from labeled features using generalized expectation criteria','learning and evaluating classifiers under sample selection bias','the relationship between precision recall and roc curves','em dd an improved multiple instance learning technique','learning diverse rankings with multi armed bandits','a smorgasbord of features for statistical machine translation','a database and evaluation methodology for optical flow','flexible camera calibration by viewing a plane from unknown orientations','conditional models of identity uncertainty with application to noun coreference','non parametric model for background subtraction','arnetminer extraction and mining of academic social networks','a novel use of statistical parsing to extract information from text','local and global algorithms for disambiguation to wikipedia','activity recognition using the velocity histories of tracked keypoints','exploiting structure in policy construction','complete dense stereovision using level set methods','gaussian process latent variable models for visualisation of high dimensional data','finding advertising keywords on web pages','image classification using super vector coding of local image descriptors','tracking multiple humans in crowded environment','a study on convolution kernels for shallow semantic parsing','support vector machine active learning with application sto text classification','shape context a new descriptor for shape matching and object recognition','better hypothesis testing for statistical machine translation controlling for optimizer instability','inferring global perceptual contours from local features','a probabilistic analysis of the rocchio algorithm with tfidf for text categorization','ranking algorithms for named entity extraction boosting and the voted perceptron','improving word representations via global context and multiple word prototypes','sun attribute database discovering annotating and recognizing scene attributes','prost parallel robust online simple tracking','who says what to whom on twitter','the necessity of parsing for predicate argument recognition','a discriminative matching approach to word alignment','viewing morphology as an inference process','deriving concept hierarchies from text','recovering 3d shape and motion from image streams using nonlinear least squares','multi instance kernels','dependency parsing by belief propagation','self calibration from multiple views with a rotating camera','synchronous binarization for machine translation','a large scale study of the evolution of web pages','training restricted boltzmann machines using approximations to the likelihood gradient','learning probabilistic relational models','the bas relief ambiguity','detecting pedestrians by learning shapelet features','learning trees and rules with set valued features','mixed membership stochastic blockmodels','statistical learning of multi view face detection','information credibility on twitter','textons contours and regions cue integration in image segmentation','graph cut based image segmentation with connectivity priors','a general framework for motion segmentation independent articulated rigid non rigid degenerate and non degenerate','recognizing indoor scenes','matching with prosac progressive sample consensus','semtag and seeker bootstrapping the semantic web via automated semantic annotation','a hierarchical field framework for unified context based classification','using wordnet to disambiguate word senses for text retrieval','handwritten digit recognition with a back propagation network','learning to predict where humans look','parsing algorithms and metrics','modeling scenes with local descriptors and latent aspects','concept based query expansion','super resolution through neighbor embedding','saliency filters contrast based filtering for salient region detection','incremental learning for visual tracking','detailed human shape and pose from images','sentence level discourse parsing using syntactic and lexical information','web document clustering a feasibility demonstration','learning collaborative information filters','multi task feature learning','irrelevant features and the subset selection problem','robust temporal processing of news','corpus based and knowledge based measures of text semantic similarity','an efficient dense and scale invariant spatio temporal interest point detector','learning spatiotemporal graphs of human activities','a formal study of information retrieval heuristics','content boosted collaborative filtering for improved recommendations','learning to parse pictures of people','feature correspondence via graph matching models and global optimization','action recognition from arbitrary views using 3d exemplars','automatic evaluation of topic coherence','guiding semi supervision with constraint driven learning','learning from labeled and unlabeled data on a directed graph','face recognition with learning based descriptor','advantages of query biased summaries in information retrieval'];
var data = [1110,726,661,573,510,491,470,464,414,414,413,404,379,354,340,308,298,297,289,282,282,280,279,260,249,244,237,237,234,231,227,227,224,223,223,217,217,208,208,205,203,202,200,199,194,192,190,187,187,184,182,181,178,174,170,169,169,168,168,163,163,162,162,161,160,160,159,158,157,156,156,153,152,147,146,145,144,144,144,142,141,141,139,137,137,137,136,136,135,135,134,132,132,131,131,130,130,130,130,129,127,126,126,126,126,125,125,124,123,123,122,121,120,119,119,118,118,118,117,117,116,116,115,115,115,114,114,113,113,113,113,113,113,113,112,112,112,112,112,112,111,110,109,109,108,108,108,107,107,107,107,106,106,106,106,106,105,105,105,105,104,103,103,103,103,102,102,102,102,101,101,101,100,100,100,100,99,99,99,98,98,97,97,97,97,96,96,96,95,95,95,95,95,94,94,94,93,93,93,93,93,93,93,92,92,91,91,91,90,90,89,89,89,89,89,88,88,88,88,87,87,87,87,87,86,86,86,86,85,85,85,85,84,84,84,84,84,83,83,83,83,83,83,83,83,83,83,82,82,82,82,82,82,82,82,81,81,81,81,81,81,80,80,80,80,80,80,79,79,79,79,79,79,79,79,79,79,78,78,78,78,78,78,78,78,78,78,77,77,77,77,77,77,77,76,76,76,76,76,76,76,76,75,75,75,75,75,75,75,75,75,75,74,74,74,74,74,74,74,74,74,74,74,74,73,73,73,73,72,72,72,72,72,72,72,72,71,71,71,71,71,71,71,71,71,70,70,70,69,69,69,69,69,69,68,68,68,68,68,68,68,68,68,68,68,67,67,67,67,67,67,67,67,67,67,67,67,67,66,66,66,66,66,66,66,66,66,66,66,65,65,65,65,65,65,65,64,64,64,64,64,64,64,64,64,64,63,63,63,63,63,63,63,63,62,62,62,62,62,62,62,62,62,62,62,62,62,62,62,62,62,62,62,62,61,61,61,61,61,61,61,61,61,61,60,60,60,60,60,60,60,60,60,60,60,60,60,60,60,60,60,60,59,59,59,59,59,59,59,59,59,59,59,58,58,58,58,58,58,58,58,58,58,58,58,58,58,58,58,58,57,57,57,57,57,57,57,57,57,57,57,57,57,57,57,57,57,57,57,57,56,56,56,56,56,56,56,56,56,56,56,56,55,55,55,55,55,55,55,55,55,55,55,55,55,54,54,54,54,54,54,54,54,54,54,54,54,54,54,54,54,54,54,54,54,53,53,53,53,53,53,53,53,53,53,53,53,53,53,53,53,53,53,53,53,53,52,52,52,52,52,52,52,52,52,52,52,52,52,52,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,51,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,50,49,49,49,49,49,49,49,49,49,49,49,49,49,49,49,49,49,49,49,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,48,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,47,46,46,46,46,46,46,46,46,46,46,46,46,46,46,46,46,46,46,46,46,46,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,45,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,44,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,43,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,42,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,41,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,40,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,39,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38,38];

var dataShadow = [];

    option = {
        title:{
            text:"PAPER RANK",
            left: 'center',
            top: 0,
        },
        tooltip : {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow',
                label: {
                    show: true
                }
            }
        },
        toolbox: {
            show : true,
            feature : {
                mark : {show: true},
                dataView : {show: true, readOnly: false},
                magicType: {show: true, type: ['line', 'bar']},
                restore : {show: true},
                saveAsImage : {show: true}
            }
        },
        calculable : true,
        legend: {
            data:[' ', 'Cited Rank'],
            itemGap: 5
        },
        grid: {
            top: '12%',
            left: '1%',
            right: '10%',
            containLabel: true
        },
        xAxis: [
            {
                type : 'category',
                data : dataAxis
            }
        ],
        yAxis: [
            {
                type : 'value',
                name : 'Cited times',
                axisLabel: {
                    formatter: function (a) {
                        a = +a;
                        return isFinite(a)
                            ? echarts.format.addCommas(+a)
                            : '';
                    }
                }
            }
        ],
        dataZoom: [
            {
                show: true,
                start: 94,
                end: 100
            },
            {
                type: 'inside',
                start: 94,
                end: 100
            },
            {
                show: true,
                yAxisIndex: 0,
                filterMode: 'empty',
                width: 30,
                height: '80%',
                showDataShadow: false,
                left: '93%'
            }
        ],
        series : [
            {
                name: 'Cited',
                type: 'bar',
                data: data
            }
        ]
    };

    myChart.setOption(option);
</script>

<script type="text/javascript">
var dom = document.getElementById("AllConf");
var myChart = echarts.init(dom);
var app = {};
option = null;
option = {


    title: {
        text: 'CONFERENCE PIE',
        left: 'center',
        top: 20,
        textStyle: {
            color: '#000'
        }
    },

    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },

    visualMap: {
        show: false,
        min: 80,
        max: 600,
        inRange: {
            colorLightness: [0, 1]
        }
    },
    series : [
        {
            name:'CONFERENCE',
            type:'pie',
            radius : '70%',
            center: ['50%', '50%'],
            data:[
                {value:2542, name:'EMNLP'},
                {value:3974, name:'NAACL'},
                {value:4579, name:'ECCV'},
                {value:5050, name:'SIGIR'},
                {value:6242, name:'SIGKDD'},
                {value:6516, name:'ICML'},
                {value:6893, name:'ICCV'},
                {value:8893, name:'WWW'},
                {value:8906, name:'NIPS'},
                {value:10075, name:'IJCAI'},
                {value:10623, name:'ACL'},
                {value:11791, name:'CVPR'},
                {value:12131, name:'AAAI'},
            ].sort(function (a, b) { return a.value - b.value; }),
            roseType: 'radius',
            label: {
                normal: {
                    textStyle: {
                        color: 'rgba(255, 255, 255, 0.7)'
                    }
                }
            },
            labelLine: {
                normal: {
                    lineStyle: {
                        color: 'rgba(255, 255, 255, 0.3)'
                    },
                    smooth: 0.2,
                    length: 10,
                    length2: 20
                }
            },
            itemStyle: {
                normal: {
                    color: '#c23531',
                    shadowBlur: 200,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            },

            animationType: 'scale',
            animationEasing: 'elasticOut',
            animationDelay: function (idx) {
                return Math.random() * 200;
            }
        }
    ]
};;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>


<script type="text/javascript">
var dom = document.getElementById("AllYear");
var myChart = echarts.init(dom);
var app = {};
option = null;

setTimeout(function () {

    option = {
        title:{
            text:"CONFERENCE X YEAR",
            top:330,
            left:'center'
        },
        legend: {},
        tooltip: {
            trigger: 'axis',
            showContent: true
        },
        dataset: {
            source: [
                ['Conference', '1900-1950', '1951-1960', '1961-1970', '1971-1980', '1981-1990', '1991-2000','2001-2010','2011-2017'],
                ['ECCV',   1,0,0,0,101,826,1824,1827],
                ['NIPS',   0,0,0,0,573,2548,3461,2324],
                ['SIGKDD', 0,0,0,0,0,750,3050,2442,],
                ['WWW',    0,0,0,0,80,1249,4126,3438],
                ['SIGIR',  0,0,0,128,464,775,1952,1731],
                ['CVPR',   0,0,0,0,400,2269,5284,3838],
                ['ICCV',   0,0,0,0,249,1150,2482,3012],
                ['NAACL',  0,0,0,0,88,721,2165,1000],
                ['ICML',   0,0,0,0,266,976,3204,2070],
                ['AAAI',   0,0,0,93,1291,2378,3606,4763],
                ['ACL',    1,510,1130,1058,634,1385,3200,2705],
                ['EMNLP',  0,0,0,0,0,41,958,1543],
                ['IJCAI',  1,0,72,879,1884,1925,2683,2631]
            ]
        },
        xAxis: {type: 'category'},
        yAxis: {gridIndex: 0},
        grid: {top: '55%'},
        series: [
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {type: 'line', smooth: true, seriesLayoutBy: 'row'},
            {
                type: 'pie',
                id: 'pie',
                radius: '30%',
                center: ['50%', '25%'],
                label: {
                    formatter: '{b}: {@2012} ({d}%)'
                },
                encode: {
                    itemName: 'product',
                    value: '2012',
                    tooltip: '2012'
                }
            }
        ]
    };

    myChart.on('updateAxisPointer', function (event) {
        var xAxisInfo = event.axesInfo[0];
        if (xAxisInfo) {
            var dimension = xAxisInfo.value + 1;
            myChart.setOption({
                series: {
                    id: 'pie',
                    label: {
                        formatter: '{b}: {@[' + dimension + ']} ({d}%)'
                    },
                    encode: {
                        value: dimension,
                        tooltip: dimension
                    }
                }
            });
        }
    });

    myChart.setOption(option);

});;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
</script>

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