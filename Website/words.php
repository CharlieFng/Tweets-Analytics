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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="media/aus.png">

<title>Words Using | Team 18</title>

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
	<p>&nbsp;</p>

	<h1 class="centered">What are Melbourne's Flavourite Twitter Words?</h1>
	<p
		style="margin-left: 65%; margin-right: 10%; margin-bottom: -5px; margin-top: -10px;">
		<img src="media/live.gif">
	</p>
	<p>&nbsp;</p>
<?php
$couch_dsn = "http://115.146.94.24:5984/";
$couch_db = "politician";
require_once "resource/couch.php";
require_once "resource/couchClient.php";
require_once "resource/couchDocument.php";
$client = new couchClient ( $couch_dsn, $couch_db );
//Read from couchDB database - politician
try {
	$data = $client->group_level ( 1 )->getView ( 'count', 'words' ); //Read view - words
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
$meaningless = array (
		"about",
		"all",
		"out",
		"from",
		"this",
		"that",
		"there",
		"here",
		"and",
		"just",
		"can",
		"but",
		"for",
		"says",
		"who",
		"last",
		"get",
		"has",
		"have",
		"had",
		"our",
		"their",
		"they",
		"what",
		"when",
		"where",
		"many",
		"inside",
		"into",
		"those",
		"how",
		"was",
		"could",
		"would",
		"now",
		"the",
		"more",
		"will",
		"with",
		"you",
		"your",
		"his",
		"her",
		"not",
		"more",
		"one",
		"are",
		"day",
		"see",
		"yesterday",
		"day",
		"today",
		"time",
		"month",
		"year",
		"new",
		"great",
		"good",
		"work",
		"does",
		"only",
		"other",
		"then",
		"than",
		"most",
		"next",
		"some",
		"over",
		"right",
		"left",
		"should",
		"been",
		"going",
		"still",
		"totally",
		"really",
		"first",
		"after",
		"being",
		"again",
		"think",
		"better",
		"these",
		"another",
		"because",
		"never",
		"please",
		"thank",
		"thanks" 
); //non-informative tweets' word array
$cluster_ar = [ ];
for($i = 0; $i < $len_center; $i ++) {
	$key = $temp [$i]->key;
	$value = $temp [$i]->value;
	//setup restriction for the value and key
	if ($value < 1000 || strlen ( $key ) < 3 || in_array ( $key, $meaningless, true )) {
	} else {
	//push the value and key back to array
		array_push ( $cluster_ar, array (
				"word" => $key,
				"counts" => $value 
		) );
	}
}
$countArrayLength = count ( $cluster_ar );
//initiate 2nd couchdb connection to database followers
$couch_db2 = "followers";
$client2 = new couchClient ( $couch_dsn, $couch_db2 );
$data2 = $client2->group_level ( 1 )->getView ( 'count', 'word_melbourne' );
//read from view - word_melbourne
$temp2 = $data2->rows;
$len_center2 = count ( $temp2 );

$cluster_melb = [ ];
for($i = 0; $i < $len_center2; $i ++) {
	$key = $temp2 [$i]->key;
	$value = $temp2 [$i]->value;
	if ($value < 30 || strlen ( $key ) < 3 || in_array ( $key, $meaningless, true )) {
	} else {
		array_push ( $cluster_melb, array (
				"word" => $key,
				"counts" => $value 
		) );
	}
}
$countArrayLength2 = count ( $cluster_melb );

/*
 * $couch_db3 = "streaming";
 * $client3 = new couchClient ( $couch_dsn, $couch_db3 );
 * $data3 = $client3->group_level ( 1 )->getView ( 'count', 'word' );
 * $temp3 = $data3->rows;
 * $len_center3=count($temp3);
 *
 * $cluster_stream=[];
 * for($i=0;$i<$len_center3;$i++){
 * $key=$temp3[$i]->key;
 * $value=$temp3[$i]->value;
 * if($value<2500 || strlen($key)<5 || in_array($key, $meaningless, true)){
 *
 * }else{
 * array_push($cluster_stream, array("word" => $key, "counts" => $value));
 * }
 * }
 * $countArrayLength3 = count($cluster_stream);
 */
//This part will make the system timeout sometimes. Change to static only
?>




<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
//google chart function
function drawChart() {

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'MPs');
    data.addColumn('number', 'Counts');
    data.addRows([
    <?php
				for($i = 0; $i < $countArrayLength; $i ++) {
					echo "['" . $cluster_ar [$i] ['word'] . "'," . $cluster_ar [$i] ['counts'] . "],";
				}//print out the array from php array $cluster_ar
				?>
    ]);
    
    var data2 = new google.visualization.DataTable();
    data2.addColumn('string', 'Melbourne CBD Followers');
    data2.addColumn('number', 'Counts');
    data2.addRows([
   <?php
					for($i = 0; $i < $countArrayLength2; $i ++) {
						echo "['" . $cluster_melb [$i] ['word'] . "'," . $cluster_melb [$i] ['counts'] . "],";
					}//print out the array from php array $$cluster_melb
					?>
                  ]);
    
    var data3 = new google.visualization.DataTable();
    data3.addColumn('string', 'Stream');
    data3.addColumn('number', 'Counts');
    data3.addRows([
                [ 'like', 7038 ], 
   		        [ 'good', 6128 ], 
   		     	[ 'work', 2687 ],
   		 		[ 'sydney', 2565 ],
   				[ 'rain', 2502 ],
   				[ 'humidity', 2499 ],
   				[ 'wind', 2434 ],
   				[ 'melbourne', 2273 ],
   				[ 'happy', 2264 ],
   				[ 'morning', 2030 ],
   				[ 'nsw', 1984 ],
   				[ 'barometer', 1952 ],
   				[ 'better', 1919 ],
   				[ 'parramatta', 1906 ],
   				[ 'life', 1858 ],
   				[ 'home', 1775 ],
   				[ 'collector', 1772 ],
   				[ 'please', 1768 ],
   				[ 'game', 1711 ],
   				[ 'hope', 1656 ],
   	


   		        
                  ]);   
    

    var options = {
        title: 'MPs',
        'width':600,
        'height':500,
        hAxis: { textPosition: 'none' }
    };

    var options2 = {
            title: 'Melbourne CBD Followers',
            'width':600,
            'height':500,
            hAxis: { textPosition: 'none' }
        };

    var options3 = {
            title: 'Twitter Stream API',
            'width':600,
            'height':500
           
        };

    var chart = new google.visualization.BarChart(document.getElementById('curve_chart'));
    chart.draw(data, options);

    var chart2 = new google.visualization.BarChart(document.getElementById('curve_chart2'));
    chart2.draw(data2, options2);

    var chart3 = new google.visualization.BarChart(document.getElementById('curve_chart3'));
    chart3.draw(data3, options3);
}
</script>

	<div>
		<div id="curve_chart" style="margin-left: 25%; margin-right: 25%;"></div>
		<hr />
		<div id="curve_chart2" style="margin-left: 25%; margin-right: 25%;"></div>
		<hr />
		<div id="curve_chart3" style="margin-left: 25%; margin-right: 25%;"></div>
	</div>

	<div style="clear: both"></div>

	<!-- ==== ABOUT ==== -->
	<div class="container">
		<div class="row white">
			<br>

			<hr>

			<div class="col-lg-6">
				<p>
					<b>Assumption</b><br /> We expect the Tweets the politicians have tweeted
					to be well worded and refined. We don’t expect any swearing
					language or extreme wording to be appeared often. However, the most
					frequently used words are expected to be close to daily language.

				</p>
				<b>Result</b><br /> As expected, the most frequently used the words in
				politicians Tweets are political words or topic. The most frequently
				used words in civilians are more generic and random.

			</div>
			<!-- col-lg-6 -->

			<div class="col-lg-6">
				<p style="text-align: center">
					<img src="media/wordcloud.jpg"
						style="margin-left: 5%; width: 300px; height: 260px; padding: 5px;">
				</p>
			</div>
			<!-- col-lg-6 -->
		</div>
		<!-- row -->
	</div>
	<p>&nbsp;</p>
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

