<!-- 
TEAM 18
YAO PAN
777241
MIN-YING CHEN
779101
JINGFENG ZHANG
755121
SIYU FENG
745399
LIANYU ZENG
733863
 -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<link rel="shortcut icon" href="media/aus.png">

<title>Voting Intention | Team 18</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/main.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/icomoon.css">
<link href="assets/css/animate-custom.css" rel="stylesheet">
<script type="text/javascript" src="assets/js/loader.js"></script>
<link
	href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700'
	rel='stylesheet' type='text/css'>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src="assets/js/canvasjs.min.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<style>
.table1 {
	margin-left: 38%;
	margin-right: 17%;
}
/*Adjust table size in window-size 1200px and 900px*/
@media only screen and (max-width: 1200px) , only screen and
	(max-device-width: 1200px) {
	.table1 {
		margin-left: 25%;
		margin-right: 17%;
	}
}

@media only screen and (max-width: 900px) , only screen and
	(max-device-width: 900px) {
	.table1 {
		margin-left: 15%;
		margin-right: 17%;
	}
}

</style>
</head>
<body data-spy="scroll" data-offset="0" data-target="#navbar-main">
	<div id="navbar-main">
		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-collapse">
						<img src="media/bar-menu.png" style="width: 30px; height: 30px;">

					</button>

				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.html" class="smoothScroll">Home</a></li>
						<li><a href="atsign.html" class="smoothScroll">User Mention</a></li>
						<li><a href="hashtag.html" class="smoothScroll">Hashtag</a></li>
						<li><a href="words.php" class="smoothScroll">Word</a></li>
						<li><a href="vic.php" class="smoothScroll"> Emotion Map</a></li>
						<li><a href="heatmap.php" class="smoothScroll"> Heatmap</a></li>
						<li><a href="voting.php" class="smoothScroll">Voting Intention</a></li>
						<li><a href="sentiment.html" class="smoothScroll">Sentiment</a></li>
						<li><a href="income.php" class="smoothScroll">Privacy</a></li>
						<li><a href="lang.html" class="smoothScroll">Language</a></li>
					</ul>
				</div>
				<!--/.nav-collapse -->

			</div>
		</div>
	</div>

	<!-- ==== HEADERWRAP ==== -->


	<p>&nbsp;</p>
	<p>&nbsp;</p>


	<h1 class="centered">Voting Intension</h1>
	<p style="margin-left: 57%; margin-bottom: -5px; margin-top: -10px;">
		<img src="media/live.gif">
	</p>
	<p>&nbsp;</p>

<?php
$couch_dsn = "http://115.146.94.24:5984/";
$couch_db = "followers";
require_once "resource/couch.php";
require_once "resource/couchClient.php";
require_once "resource/couchDocument.php";
$client = new couchClient ( $couch_dsn, $couch_db );
//read from couchDB database followers
try {
	$data = $client->group_level ( 1 )->getView ( 'count', 'voting_intention' );
} catch ( Exception $e ) {
	if ($e->code () == 404) {
		echo "Document not found\n";
	} else {
		echo "Error: " . $e->getMessage () . " (errcode=" . $e->getCode () . "\n";
	}
	exit ( 1 );
}
$temp = $data->rows;
$len_center = count ( $temp );

$cluster_ar = [ ];
for($i = 0; $i < $len_center; $i ++) {
	$key = $temp [$i]->key;
	$value = $temp [$i]->value;
	
	array_push ( $cluster_ar, array (
			"party" => $key,
			"counts" => $value 
	) );
}

$countArrayLength = count ( $cluster_ar );

?>




<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);

function drawChart() {

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Word');
    data.addColumn('number', 'Counts');
 // Callback that creates and populates a data table,
	// instantiates the pie chart, passes in the data and
	// draws it.
    data.addRows([

    <?php
				for($i = 0; $i < $countArrayLength; $i ++) {
					echo "['" . $cluster_ar [$i] ['party'] . "'," . $cluster_ar [$i] ['counts'] . "],";
				}
				?>
    ]);

    var options = {
        title: '',
        'width':600,
        'height':320,
        pieHole: 0.4,
        is3D: true
    };

    var chart = new google.visualization.PieChart(document.getElementById('charts'));
    chart.draw(data, options);
}
</script>



	<div style="text-align: Center">

		<h3 class="centered">Result from Twitter Analyse</h3>
		<div id="charts"  class="table1"></div>

		<h3 class="centered">Results from Roy Morgan Research</h3>
		<a href="http://www.roymorgan.com/morganpoll" target="_blank"><img
			src="media/vote1.png" style="width: 400px;"></a>
		<p>&nbsp;</p>

		<h3 class="centered">Results from Galaxy Research</h3>
		<a href="http://www.galaxyresearch.com.au/polling/" target="_blank"><img
			src="media/vote2.png" style="width: 400px;"></a> <a
			href="http://www.galaxyresearch.com.au/polling/" target="_blank"><img
			src="media/vote3.png" style="width: 400px;"></a>
		<p>&nbsp;</p>

		<h3 class="centered">State voting intention (Victoria) - Essential
			Report</h3>
		<a
			href="http://www.essentialvision.com.au/state-voting-intention-victoria-2"
			target="_blank"><img src="media/voting4.jpg" style="width: 400px;"></a>
		<a
			href="http://www.essentialvision.com.au/state-voting-intention-victoria-2"
			target="_blank"><img src="media/voting5.PNG"></a>
	</div>
	<div style="clear: both"></div>



	<div class="container">
		<div class="row white">
			<br>

			<hr>

			<div class="col-lg-6">
				<p>
					<b>Assumption</b><br /> We expect to see the voting intention we
					generated by analysing the Twitter activities should match the
					polls done by third party.
				</p>
			</div>
			<!-- col-lg-6 -->

			<div class="col-lg-6">
				<p>
					<b>Result</b><br /> According to our analysis, the support rate for
					L-NP in Victoria is lower than the support poll done by Roy Morgan
					Research and Galaxy Research. While the support rate for the Greens
					is higher. We believe the reason is the Green party has a
					significantly higher followers base.
				</p>
			</div>
			<!-- col-lg-6 -->
		</div>
		<!-- row -->
	</div>
	<!-- container -->
	<div style="clear: both"></div>

	<!-- container -->
	<div id="footerwrap">
		<div class="container"></div>
	</div>


	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>


</body>
</html>

